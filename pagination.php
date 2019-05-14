<?php
class Pagination
{
    protected $_config = array(
        'current_page'  => 1, // Trang hiện tại
        'total_record'  => 1, // Tổng số record
        'total_page'    => 1, // Tổng số trang
        'limit'         => 10,// limit
        'start'         => 0, // start
        'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
        'link_first'    => '',// Link trang đầu tiên
        'range'         => 6, // Số button trang bạn muốn hiển thị 
        'min'           => 0, // Tham số min
        'max'           => 0  // tham số max, min và max là 2 tham số private
    );
     
    function get_config($key){
        return $this->_config[$key];
    }
     
    /*
     * Hàm khởi tạo ban đầu để sử dụng phân trang
     */
    function init($config = array())
    {
        /*
         * Lặp qua từng phần tử config truyền vào và gán vào config của đối tượng
         * trước khi gán vào thì phải kiểm tra thông số config truyền vào có nằm
         * trong hệ thống config không, nếu có thì mới gán
         */
        foreach ($config as $key => $val){
            if (isset($this->_config[$key])){
                $this->_config[$key] = $val;
            }
        }
         
        /*
         * Kiểm tra thông số limit truyền vào có nhỏ hơn 0 hay không?
         * Nếu nhỏ hơn thì gán cho limit = 0, vì trong mysql không cho limit bé hơn 0
         */
        if ($this->_config['limit'] < 0){
            $this->_config['limit'] = 0;
        }
         
        /*
         * Tính total page, công tức tính tổng số trang như sau: 
         * total_page = ciel(total_record/limit).
         *
         */
        $this->_config['total_page'] = ceil($this->_config['total_record'] / $this->_config['limit']);
         
        /*
         * Sau khi có tổng số trang ta kiểm tra xem nó có nhỏ hơn 0 hay không
         * nếu nhỏ hơn 0 thì gán nó băng 1 ngay. Vì mặc định tổng số trang luôn bằng 1
         */
        if (!$this->_config['total_page']){
            $this->_config['total_page'] = 1;
        }
         
        /*
         * Trang hiện tại sẽ rơi vào một trong các trường hợp sau:
         *  - Nếu người dùng truyền vào số trang nhỏ hơn 1 thì ta sẽ gán nó = 1 
         *  - Nếu trang hiện tại người dùng truyền vào lớn hơn tổng số trang
         *    thì ta gán nó bằng tổng số trang
         * Đây là vấn đề giúp web chạy trơn tru hơn, vì đôi khi người dùng cố ý
         * thay đổi tham số trên url nhằm kiểm tra lỗi web của chúng ta
         */
        if ($this->_config['current_page'] < 1){
            $this->_config['current_page'] = 1;
        }
         
        if ($this->_config['current_page'] > $this->_config['total_page']){
            $this->_config['current_page'] = $this->_config['total_page'];
        }
         
        /* 
         * Tính start, Như bạn biết trong mysql truy vấn sẽ có limit và start
         * Muốn tính start ta phải dựa vào số trang hiện tại và số limit trên mỗi trang
         * và áp dụng công tức start = (current_page - 1)*limit
        */
        $this->_config['start'] = ($this->_config['current_page'] - 1) * $this->_config['limit'];
         
        /* 
         * Bây giờ ta tính số trang ta show ra trang web
         * 
         * 
        */
         
        // Trước tiên tính middle, đây chính là số nằm giữa trong khoảng tổng số trang
        // mà bạn muốn hiển thị ra màn hình
        $middle = ceil($this->_config['range'] / 2);
 
        //
        // Trong trường hợp này thì nếu tổng số trang mà bé hơn range
        // thì ta show hết luôn, không cần tính toán làm gì
        // tức là gán min = 1 và max = tổng số trang luôn
        if ($this->_config['total_page'] < $this->_config['range']){
            $this->_config['min'] = 1;
            $this->_config['max'] = $this->_config['total_page'];
        }
        // Trường hợp tổng số trang mà lớn hơn range
        else
        {
            // Ta sẽ gán min = current_page - (middle + 1)
            $this->_config['min'] = $this->_config['current_page'] - $middle + 1;
             
            // Ta sẽ gán max = current_page + (middle - 1)
            $this->_config['max'] = $this->_config['current_page'] + $middle - 1;
             
            // Sau khi tính min và max ta sẽ kiểm tra
            // nếu min < 1 thì ta sẽ gán min = 1  và max bằng luôn range
            if ($this->_config['min'] < 1){
                $this->_config['min'] = 1;
                $this->_config['max'] = $this->_config['range'];
            }
             
            // Ngược lại nếu min > tổng số trang
            // ta gán max = tổng số trang và min = (tổng số trang - range) + 1 
            else if ($this->_config['max'] > $this->_config['total_page']) 
            {
                $this->_config['max'] = $this->_config['total_page'];
                $this->_config['min'] = $this->_config['total_page'] - $this->_config['range'] + 1;
            }
        }
    }
     
    /*
     * Hàm lấy link theo trang
     */
    private function __link($page)
    {
        // Nếu trang < 1 thì ta sẽ lấy link first
        if ($page <= 1 && $this->_config['link_first']){
            return $this->_config['link_first'];
        }
        // Ngược lại ta lấy link_full
        // Như tôi comment ở trên, link full có dạng domain.com/page/{page}.
        // Trong đó {page} là nơi bạn muốn số trang sẽ thay thế vào
        return str_replace('{page}', $page, $this->_config['link_full']);
    }
     
    /*
     * Hàm lấy mã html
     
     */
    function html()
    {   
        $p = '';
        if ($this->_config['total_record'] > $this->_config['limit'])
        {
            $p = '<ul class="pagination col-md-12" style="-webkit-justify-content:center;
  justify-content:center;">';
             
            // Nút prev và first
            if ($this->_config['current_page'] > 1)
            {
                $p .= '<li class="page-item"><a class="page-link" href="'.$this->__link('1').'">First</a></li>';
                $p .= '<li class="page-item"><a class="page-link" href="'.$this->__link($this->_config['current_page']-1).'">Prev</a></li>';
            }
             
            // lặp trong khoảng cách giữa min và max để hiển thị các nút
            for ($i = $this->_config['min']; $i <= $this->_config['max']; $i++)
            {
                // Trang hiện tại
                if ($this->_config['current_page'] == $i){
                    $p .= '<li class="page-item active"><a class="page-link">'.$i.'</a></li>';
                }
                else{
                    $p .= '<li class="page-item"><a class="page-link" href="'.$this->__link($i).'">'.$i.'</a></li>';
                }
            }
 
            // Nút last và next
            if ($this->_config['current_page'] < $this->_config['total_page'])
            {
                $p .= '<li><a class="page-link" href="'.$this->__link($this->_config['current_page'] + 1).'">Next</a></li>';
                $p .= '<li><a class="page-link" href="'.$this->__link($this->_config['total_page']).'">Last</a></li>';
            }
             
            $p .= '</ul>';
        }
        return $p;
    }
}

?>