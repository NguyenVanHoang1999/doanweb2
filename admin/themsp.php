<?php
    if (isset($_POST['themsp'])) {
        include '../csdl.php';
        //upload hình
        if (isset($_POST['hinh'])) {
            $diachi_file = $_FILES["hinh"]["tmp_name"];
            $hinh = "images/".$_POST['masanpham']."jpg";
            move_uploaded_file($diachi_file, $hinh);
        }
        //xuly gia
        if(isset($_POST['dongia'])){
            $dongia = $_POST['dongia'];
            $gia="";
            while($dongia>0){
                    if ($dongia%1000==0) { 
                        $gia = ".000".$gia; 
                        $dongia = FLOOR($dongia/1000); 
                    }
                    else { 
                        $dv=$dongia%1000;
                        $dongia = FLOOR($dongia/1000);
                        if ($dongia!=0) {
                            if ($dv<10)  $gia = ".00".(string)$dv.$gia;
                            else{
                                if ($dv<100)  $gia = ".0".(string)$dv.$gia;
                                else  $gia = ".".(string)$dv.$gia;
                            }
                        }
                        else $gia = (string)$dv.$gia; 
                    }
            }
        }
echo $gia;
echo($hinh);
        $sql_sp = "INSERT INTO `sanpham`(`masanpham`, `tensanpham`, `gia`, `dongia`, `soluong`, `hinh`, `matheloai`) VALUES ('".$_POST['masanpham']."','".$_POST['tensanpham']."','".$gia."',".$_POST['dongia'].",".$_POST['soluong'].",'".$hinh."','".$_POST['theloai']."')";
        
        $sql_ctsp = "INSERT INTO `ctsanpham` (`masanpham`, `baohanh`, `thuonghieu`, `monitor`, `cpu`, `ram`, `graphics`, `harddisk`, `congketnoi`, `banphim`, `hedieuhanh`, `trongluong`, `pin`, `khac`) VALUES('". $_POST['masanpham']. "','". $_POST['baohanh']. "','" .$_POST['theloai']."','". $_POST['manhinh']."','". $_POST['cpu']."','". $_POST['ram']. "','". $_POST['dohoa']. "','". $_POST['ocung']. "','". $_POST['congketnoi']. "','". $_POST['banphim']. "','". $_POST['hedieuhanh']. "','". $_POST['kl']. "','". $_POST['pin']. "','". $_POST['khac']."')" ;
        
        select($sql_sp);
        select($sql_ctsp) ;   
        header('location:admin.php?add');
    }
?>
<div style="border-top-right-radius: 0.5cm; border-top-left-radius: 0.5cm; border: 1px solid black; width: 600px; background: #CCC">
    <h3 align="center" > THÊM SẢN PHẨM </h3>
    <form action="themsp.php" method="post" enctype="multipart/form-data" onsubmit="return ktra_them()" style="background:#FFF; padding-top: 20px; padding-left:30px" >
            
            <div class="form-inline" >
                <b style="width:150px; ">Mã sản phẩm: </b> 
                <input type="text" class="form-control"  size="40" name="masanpham" id="masanpham" />
            </div>
            <div class="form-inline" >
                <b style="width:150px; ">Tên sản phẩm: </b> 
                <input type="text" class="form-control"  size="40" name="tensanpham" id="tensanpham" />
            </div>
            <div class="form-inline"> 
                <b style="width:150px; "> Giá bán: </b>
                <input type="text" class="form-control" size="7" name="dongia" id="dongia" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Số lượng: </b> 
                <input type="text" class="form-control" size="7" name="soluong" id="soluong" />
            </div>
            <div class="form-inline"> 
                <b style="width:150px;"> Hình ảnh sản phẩm: </b>
                <input type="file" name="hinh" id="hinh"="form-inline">
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Thể loại: </b>
                <select class="form-control" name="theloai" id="theloai">
                    <?php
                        $qry = "select * from theloai";
                        $result = select($qry);
                        while($row_tl = $result->fetch_assoc()){
                          echo '<option value="'.$row_tl['matheloai'].'">'.$row_tl['tentheloai'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <hr>
            <h4 align="center"> Chi Tiết Sản Phẩm</h4>
            <div class="form-inline">
                <b style="width:150px; "> Thời gian bảo hành: </b>
                <input type="text" class="form-control" size="10" name="baohanh" id="baohanh" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Màn hình: </b>
                <input type="text" class="form-control" size="40" name="manhinh" id="manhinh" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> CPU: </b>
                <input type="text" class="form-control" size="40" name="cpu" id="cpu" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> RAM: </b>
                <input type="text" class="form-control" size="40" name="ram" id="ram" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Card đồ họa: </b>
                <input type="text" class="form-control" size="40" name="dohoa" id="dohoa" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Ổ cứng: </b>
                <input type="text" class="form-control" size="40" name="ocung" id="ocung" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Cổng kết nối: </b>
                <input type="text" class="form-control" size="40" name="congketnoi" id="congketnoi" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Bàn phím: </b>
                <input type="text" class="form-control" size="40" name="banphim" id="banphim" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Hệ điều hành: </b>
                <select class="form-control" name="hedieuhanh" id="hedieuhanh">
                    <option value="Win 10 Home"> Win 10 Home </option>
                    <option value="Linux"> Linux </option>
                </select>
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Khối lượng: </b>
                <input type="text" class="form-control" size="10" name="kl" id="kl" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Pin: </b>
                <input type="text" class="form-control" size="10" name="pin" id="pin" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Các loại kết nối khác: (nếu có) </b>
                <textarea class="form-control" rows="3" cols="40" name="khac" id="khac" > </textarea>
            </div>

            <div class="form-inline" style="float: right">   
                <input type="submit" class="btn btn-success" value="Thêm sản phẩm" name="themsp">
            </div>            
    </form>
</div>
<script type="text/javascript">

	function ktra_them() {
        var patt_kytuso=/[0-9]$/g;
        var patt_masp = /^SP[0-9]{3}$/g;
        if(document.getElementById('masanpham').value == ""){
            alert("Mã sản phẩm đang bị bỏ trống");
            document.getElementById('masanpham').focus();
            return false;
        } 
        else if(!patt_masp.test(document.getElementById('masanpham').value)){
                    alert("Mã sản phẩm không đúng cấu trúc");
                    document.getElementById('masanpham').focus();
                    return false;
        }
		else if(document.getElementById('tensanpham').value == ""){
            alert("tên sản phẩm đang bị bỏ trống");
            document.getElementById('tensanpham').focus();
            return false;
        }
        else if(document.getElementById('dongia').value == ""){
            alert("giá sản phẩm đang bị bỏ trống");
            document.getElementById('dongia').focus();
            return false;
        }
        else if(!patt_kytuso.test(document.getElementById('dongia').value)){
                alert("giá sản phẩm phải là ký tự số");
                document.getElementById('dongia').focus();
                return false;      
        }
        else if(document.getElementById('soluong').value == ""){
            alert("số lượng sản phẩm đang bị bỏ trống");
            document.getElementById('soluong').focus();
            return false;
        else if(!patt_kytuso.test(document.getElementById('soluong').value)){
                alert("số lượng sản phẩm phải là ký tự số");
                document.getElementById('soluong').focus();
                return false;           
        }
        else if(isset(<?php $_FILES['hinh'] ?>)){
            alert("Bạn chưa chọn file hình");
            return false;
        }    
        else if (<?php $_FILES['hinh']['type'] ?> != 'jpg')  {
                // xuat alert thông báo
            return false;
        }
        else if(document.getElementById('baohanh').value == ""){
            alert("thời gian bảo hành của sản phẩm đang bị bỏ trống");
            document.getElementById('baohanh').focus();
            return false;       
        }
        else if(document.getElementById('manhinh').value == ""){
            alert("loại màn hình của sản phẩm đang bị bỏ trống");
            document.getElementById('manhinh').focus();
            return false;       
        }
        else if(document.getElementById('cpu').value == ""){
            alert("loại cpu của sản phẩm đang bị bỏ trống");
            document.getElementById('cpu').focus();
            return false;       
        }
        else if(document.getElementById('ram').value == ""){
            alert("bộ nhớ của RAM đang bị bỏ trống");
            document.getElementById('ram').focus();
            return false;       
        }
        else if(document.getElementById('dohoa').value == ""){
            alert("loại card đồ họa của sản phẩm đang bị bỏ trống");
            document.getElementById('dohoa').focus();
            return false;       
        }
        else if(document.getElementById('ocung').value == ""){
            alert("ổ cứng của sản phẩm đang bị bỏ trống");
            document.getElementById('ocung').focus();
            return false;       
        }
        else if(document.getElementById('congketnoi').value == ""){
            alert("các cổng kết nối đang bị bỏ trống");
            document.getElementById('congketnoi').focus();
            return false;       
        }
        else if(document.getElementById('banphim').value == ""){
            alert("loại bàn phím đang bị bỏ trống");
            document.getElementById('banphim').focus();
            return false;       
        }
        else if(document.getElementById('hedieuhanh').value == ""){
            alert("hệ điều hành của sản phẩm đang bị bỏ trống");
            document.getElementById('hedieuhanh').focus();
            return false;       
        }
        else if(document.getElementById('kl').value == ""){
            alert("trọng lượng của máy đang bị bỏ trống");
            document.getElementById('kl').focus();
            return false;       
        }
		else if(document.getElementById('pin').value == ""){
            alert("Pin đang bị bỏ trống");
            document.getElementById('pin').focus();
            return false;       
        }
        return true;
    }
    
</script>