<?php
	
	$sql = "SELECT * FROM sanpham";
	
	
if (isset($_GET['searchnc']))
{
	$ram = $_GET['ram'];
	$gia = $_GET['gia'];
	$thuonghieu = $_GET['thuonghieu'];
	$cpu = $_GET['cpu'];
	$tensp = $_GET['tensanpham'];
	
	$sql = $sql ." join ctsanpham on sanpham.masanpham = ctsanpham.masanpham WHERE tensanpham like '%".$tensp."%' and cpu like '%".$cpu."%' and ram like '%".$ram."%' and matheloai like '%".$thuonghieu."%'";
	if($gia != "")
	{
		if($gia == "10000000")
		{
			$sql = $sql."and dongia < ".$gia;
		}
		else if($gia == "25000000")
		{
			$sql = $sql."and dongia > ".$gia;
		}
		else
		{
			$vitri = strpos($gia,"-");
			$t1 = substr($gia,0,8);
			$t2 = substr($gia,$vitri);
			$sql = $sql."and dongia between ".$t1." and ".$t2;
		}

	}
	
	
}


require_once 'csdl.php';
$result = select($sql);
	
								 
								// Load thư viện phân trang
								include_once 'pagination.php';
								
								 
								// Phân trang
								$config = array(
									'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1,
									'total_record'  => $result->num_rows, // tổng số thành viên
									'limit'         => 6,
									'link_full'     => 'index.php?searchnc=t&tensanpham='.$tensp.'&thuonghieu='.$thuonghieu.'&cpu='.$cpu.'&gia='.$gia.'&ram='.$ram.'&page={page}',
									'link_first'    => 'index.php?searchnc=t&tensanpham='.$tensp.'&thuonghieu='.$thuonghieu.'&cpu='.$cpu.'&gia='.$gia.'&ram='.$ram,
									'range'         => 6
								);
								 
								$paging = new Pagination();
								$paging->init($config);
								 
								// Lấy limit, start
								$limit = $paging->get_config('limit');
								$start = $paging->get_config('start');
								 
								// Lấy danh sách thành viên
					$member = get_all_member($limit, $start,$sql);
					 
				// Kiểm tra nếu là ajax request thì trả kết quả
				if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
					die (json_encode(array(
						'member' => $member,
						'paging' => $paging->html()
					)));
				}
		
/**/
	
	$dem = 0;
	$tam = 0;
	$tam2 = 0;
	
					
					echo '<div class="row" style="font-weight:bold;font-size:16px;">Có '.$result->num_rows.' sản phẩm được tìm thấy</div>';
					// Sử dụng vòng lặp while để lặp kết quả
					foreach ($member as $item) {
						
						$dem = $dem + 1;
						if($dem % 3 == 1 || $dem == 1) 
						{
							echo '<div class="row card-group card-columns">';
						
							
						}
						echo '<div class="card col-md-4"><a href="chitietsp.php?masp='.$item["masanpham"].'">
								<img class="card-img-top image_box" src="'.$item["hinh"].'" alt="Card image" style="width:100%;height:250px;">
								<div class="card-body" style="padding:15px 0 15px 0">
								  <h5 class="card-title" style="height:70px">'.$item["tensanpham"].'</h5>
								  <p class="card-text"><span class="badge badge-danger">'.$item["gia"].'<sup>đ</sup></span></p>
								  <div class="row">
								  <div class="col-md-5" style="margin-top:2%;"><a href="chitietsp.php?masp='.$item["masanpham"].'" class="btn btn-primary" >Chi tiết</a></div>
								   <div class="col-md-7"  style="margin-top:2%;"><a href="themvaogiohang.php?masp='.$item["masanpham"].'" class="btn btn-primary">Thêm vào giỏ</a></div>
								</div>
							  </div></a></div>';
						if($dem %3 == 0)
						{
							echo '</div>';
						}
						
				}
				if($dem %3 != 0)
						{
							echo '</div>';
						}
				 echo $paging->html();
?>

		