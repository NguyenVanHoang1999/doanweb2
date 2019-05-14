<style type="text/css">
    .mainNav {  
    width: auto;    
    margin:0px auto;    
    color: #FFF;    
    background-color: #F60;
    border-bottom-left-radius:0.5em;
    border-bottom-right-radius:0.5em;
    }
    .mainNav ul {   
    margin: 0;  
    padding: 0; 
    list-style: none;   
    border-bottom-width: 1px;   
    border-bottom-style: solid; 
    border-bottom-color: #999999;
    }
    .mainNav ul li {    
    border-top-width: 1px;  
    border-top-style: solid;    
    border-top-color: #999999;
    }
     
    .mainNav ul li a {  
    color: #FFF;    
    display: block; 
    font-size: 14px;    
    line-height: normal;    
    padding: 12px 20px; 
    text-decoration: none;  
    font-family:Arial, Helvetica, sans-serif;
    }
    .mainNav ul li a:hover {    
    font-family:Arial, Helvetica, sans-serif;   
    text-decoration: none;  
    background-color: #F00; 
    color: #FFF;
    }
     
    .mainNav ul ul {    
    border-bottom: none
    }
     
    .mainNav ul ul li { 
    background-color: #F5F5F5;  
    border-top-width: 1px;  
    border-top-style: solid;    
    border-top-color: #E2E2E2;
    }
    .mainNav ul ul li a {   
    color: #000000; 
    display: block; 
    font-size: 1em; 
    line-height: normal;    
    padding: 0.5em 1em 0.5em 2.5em;
    }
    .mainNav ul ul li a:hover { 
    background-color: #E9E9E9;  
    color: #FF0000;
    }
    .mainNav ul ul ul { 
    border-top: 1px solid #46CFB0;
    }
     
    .mainNav ul ul ul li {  
    border: none;
    }
    .mainNav ul ul ul li a {    
    padding-left: 3.5em;    
    padding-top: 0.25em;    
    padding-bottom: 0.25em;
    }
     
    ul li.has-subnav .accordion-btn {   
    color: #fff;    
    font-size: 16px;    
    background-color: #C0C0C0;  
    background-position: 0;
    } 
     
    @media screen and (max-width: 1024px) { 
    .mainNav {width: 100%;
    }
    } 
     
    @media screen and (max-width: 700px) { 
    .mainNav {
    width: 100%;
    }
    }
    .menu li{
    	float:left;
    	text-decoration:none;
    	display:inline-block;
    }
    .menu li a{
    	text-decoration:none;
    	list-style-type:none;
    	display:block;
    }
</style>

<nav class="mainNav">
    <ul>
        <li class="selected">
            <a  href="admin.php?id=sp"> <span class="glyphicon glyphicon-list"> SẢN PHẨM &nbsp; </span> </a>
            <ul>
                <li><a href="admin.php?id=xemsp"> Xem SP </a></li>
                <li><a href="admin.php?add">Thêm</a></li>
            </ul>
        </li>
        <li>
            <a href="admin.php?id=user"><span class="glyphicon glyphicon-user"> TÀI KHOẢN </span></a>
            <ul>
                <li><a href="admin.php?addu" >Thêm Tài Khoản</a></li>
                <li><a href="admin.php?userad" >Admin</a></li>
                <li><a href="admin.php?usernd" >Người Dùng</a></li>
                <li><a href="admin.php?usernv" >Nhân Viên</a></li>
            </ul>
        </li>
        <li>
            <a href="admin.php?id=dh"><span class="glyphicon glyphicon-list-alt"> ĐƠN HÀNG</span></a>
            <ul>
                <li><a href="#">Trạng Thái</a></li>
            </ul>                           
        </li>
        <li>
            <a href="admin.php?id=tl"><span class="glyphicon glyphicon-list-alt"> THỂ LOẠI</span></a>
            <ul> </ul>                           
        </li>
        <li>
            <a href="admin.php?id=tk"><span class="glyphicon glyphicon-stats" > THỐNG KÊ </span></a>
            <ul>
                <li><a href="#">Thống kê sản phẩm bán chạy</a></li>
                <li><a href="#">Thống kê doanh thu</a></li>
            </ul>
        </li> 
    </ul>
</nav>

<script >
	jQuery(document).ready(function(){  
                jQuery('.mainNav').navAccordion({   
            expandButtonText: '<i class="glyphicon glyphicon-chevron-down" style="padding-top:10px"></i>', 
            collapseButtonText: '<i class="glyphicon glyphicon-chevron-up" style="padding-top:10px"></i>',  
            buttonPosition: "right", 
            buttonWidth: "20%"
        },  
        function(){             console.log('Callback') 
        }); 
                });
</script>