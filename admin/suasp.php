<link href="bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
<?php
    if (isset($_POST["updatesp"])) {
        include '../csdl.php';
        //upload hình
        echo($_POST['hinh']);
        if ($_POST['hinh'] != "") {
            $diachi_file = $_FILES["hinh"]["tmp_name"];
            $hinh = "images/".$_POST['masanpham']."jpg";
            move_uploaded_file($diachi_file, $hinh);
            $hinh_sql = ",`hinh`='".$hinh."'";
        }
        else $hinh_sql ="";
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
        
        $sql_sp = "UPDATE `sanpham` SET `tensanpham`='".$_POST['tensanpham']."',`gia`='".$gia."',`dongia`=".$_POST['dongia'].",`soluong`=".$_POST['soluong'] .$hinh_sql.",`matheloai`='".$_POST['theloai']."' WHERE `masanpham`='".$_POST['masanpham']. "'";
            echo $_POST['masanpham'];
            select($sql_sp);
        $sql_ctsp = "UPDATE `ctsanpham` SET `baohanh`='".$_POST['baohanh']."',`monitor`='".$_POST['manhinh']."',`cpu`='".$_POST['cpu']."',`ram`='".$_POST['ram']."',`graphics`='".$_POST['dohoa']."',`harddisk`='".$_POST['ocung']."',`congketnoi`='".$_POST['congketnoi']."',`banphim`='".$_POST['banphim']."',`hedieuhanh`='".$_POST['hedieuhanh']."',`trongluong`='".$_POST['kl']."',`pin`='".$_POST['pin']."',`khac`='".$_POST['khac']."' WHERE `masanpham`='".$_POST['masanpham']. "'";
            echo $_POST['masanpham'];
            select($sql_ctsp);
        header('location:admin.php?id=sp');
    }
    else {
        $masanpham=$_GET["upd"];
        if (isset($masanpham)){
            $qry = 'select *from sanpham where masanpham="'.$masanpham.'"';
            $result = select($qry);
            $row = $result->fetch_assoc();
            
            $qry_ctsp = 'select *from ctsanpham where masanpham="'.$masanpham.'"';
            $result = select($qry_ctsp);                                                       
            $row1 = $result->fetch_assoc();
            
        }
    }
?>
<div style="border-top-right-radius: 0.5cm; border-top-left-radius: 0.5cm; border: 1px solid black; width: 600px; background: #CCC">
	<h3 align="center" > SỬA SẢN PHẨM </h3>
	<form action="suasp.php" method="post" enctype="multipart/form-data" onsubmit="return ktra_suasp()" style="background:#FFF; padding-top: 20px; padding-left:30px" >
            
            <div class="form-inline" >
                <b style="width:150px; ">Tên sản phẩm: </b> 
                <input type="text" class="form-control"  size="40" value="<?php echo $row['tensanpham'] ?>" name="tensanpham" id="tensanpham" />
            </div>
            <div class="form-inline"> 
                <b style="width:150px; "> Giá bán: </b>
                <input type="text" class="form-control" size="7" value="<?php echo $row['dongia'] ?>" name="dongia" id="dongia" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Số lượng: </b> 
                <input type="text" class="form-control" size="7" value="<?php echo $row['soluong'] ?>" name="soluong" id="soluong" />
            </div>
            <div class="form-inline"> 
                <b style="width:150px;"> Hình ảnh sản phẩm: </b>
                <input type="file" name="hinh" id="hinh" value="" />
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
                <input type="text" class="form-control" size="10" value="<?php echo $row1['baohanh'] ?>" name="baohanh" id="baohanh" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Màn hình: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['monitor'] ?>" name="manhinh" id="manhinh" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> CPU: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['cpu'] ?>" name="cpu" id="cpu" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> RAM: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['ram'] ?>" name="ram" id="ram" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Card đồ họa: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['graphics'] ?>" name="dohoa" id="dohoa" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Ổ cứng: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['harddisk'] ?>" name="ocung" id="ocung" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Cổng kết nối: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['congketnoi'] ?>" name="congketnoi" id="congketnoi" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Bàn phím: </b>
                <input type="text" class="form-control" size="40" value="<?php echo $row1['banphim'] ?>" name="banphim" id="banphim" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Hệ điều hành: </b>
                <select class="form-control" name="hedieuhanh" id="hedieuhanh">
                    <option value="Win 10 Home" selected> Win 10 Home </option>
                    <option value="Linux"> Linux </option>
                </select>
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Khối lượng: </b>
                <input type="text" class="form-control" size="10" value="<?php echo $row1['trongluong'] ?>" name="kl" id="kl" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Pin: </b>
                <input type="text" class="form-control" size="10" value="<?php echo $row1['pin'] ?>" name="pin" id="pin" />
            </div>
            <div class="form-inline">
                <b style="width:150px; "> Các loại kết nối khác: (nếu có) </b>
                <textarea class="form-control" rows="3" cols="40" value="<?php echo $row1['khac'] ?>" name="khac" id="khac" > </textarea>
            </div>
            
            <div class="form-inline" style="float: right">  
                <input type="hidden" value="<?php echo $row1['masanpham'] ?>" name="masanpham">  
                <input type="submit" class="btn btn-success" value="update" name="updatesp">
            </div>            
    </form>
</div>
<script type="text/javascript">
    var op = document.querySelectorAll('select[name=theloai] > *');
    op.forEach(i => {
        if(i.value == "<?php echo $row['matheloai'] ?>") i.setAttribute("selected","")
    })
</script>
<script type="text/javascript">
    function ktra_suasp() {
        var kytu_so=/[0-9]$/g;
        if(document.getElementById('tensanpham').value == ""){
            alert("tên sản phẩm đang bị bỏ trống");
			document.getElementById('tensanpham').focus();
            return false;
        }
		else if(document.getElementById('dongia').value == ""){
            alert("giá sản phẩm đang bị bỏ trống");
			document.getElementById('dongia').focus();
            return false;
        }
        else if(!kytu_so.test(document.getElementById('dongia').value)){
                alert("giá sản phẩm phải là ký tự số");
                document.getElementById('dongia').focus();
                return false;
        }		
		else if(document.getElementById('soluong').value == ""){
            alert("số lượng sản phẩm đang bị bỏ trống");
			document.getElementById('soluong').focus();
            return false;
        }
        else if(!kytu_so.test(document.getElementById('soluong').value)){
                alert("số lượng sản phẩm phải là ký tự số");
                document.getElementById('soluong').focus();
                return false;  		
		}
        else if(isset(<?php $_FILES['hinh'] ?>)){
            if (<?php $_FILES['hinh']['type'] ?> != 'jpg')  {
                // xuat alert thông báo
                return false;
            }
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