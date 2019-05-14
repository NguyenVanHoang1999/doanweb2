


<?php
	

	$tl = isset($_GET["tl"]) ? $_GET["tl"] : "";
	
	$sql = 'select * from sanpham where matheloai="'.$tl.'"';
	$result = select($sql);
	
	//
									require_once 'csdl.php';
								 
								// Load thư viện phân trang
								include_once 'pagination.php';
								
								 
								// Phân trang
								$config = array(
									'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1,
									'total_record'  => $result->num_rows, // tổng số thành viên
									'limit'         => 6,
									'link_full'     => 'index.php?tl='.$tl.'&page={page}',
									'link_first'    => 'index.php?tl='.$tl,
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
	
					
					
					// Sử dụng vòng lặp while để lặp kết quả
					foreach ($member as $item) {
						$dem = $dem + 1;
						if($dem % 3 == 1 || $dem == 1) 
						{
							echo '<div class="row card-group card-columns">';
						
							
						}
						echo '<div class="card col-md-4"><a href="chitietsp.php?masp='.$item["masanpham"].'">
								<img class="card-img-top image_box" src="'.$item["hinh"].'" alt="Card image" style="width:100%">
								<div class="card-body" style="padding:15px 0 15px 0">
								  <h5 class="card-title" style="height:70px">'.$item["tensanpham"].'</h5>
								  <p class="card-text"><span class="badge badge-danger">'.$item["gia"].'<sup>đ</sup></span></p>
								  <div class="row">
								  <div class="col-md-5" style="margin-top:2%;"><a href="#" class="btn btn-primary" >Chi tiết</a></div>
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

				

				
				
	


