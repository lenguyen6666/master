<?php echo $this->element('left');?>
<script type="text/javascript" charset="utf-8" src="<?php echo DOMAIN;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo DOMAIN;?>js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function() {
			$("#tabs ul li:first").addClass("active");
			$("#tabs dir:gt(0)").hide();
			$("#tabs ul li").click(function(){
				$("#tabs ul li").removeClass('active');
				//var current_index = $(this).index(); // Sử dụng cho jQuery >= 1.4.x
				var current_index = $("#tabs ul li").index(this);
				$("#tabs ul li:eq("+current_index+")").addClass("active");
				$("#tabs dir").hide();
				$("#tabs dir:eq("+current_index+")").fadeIn(100);
			});
		});
	</script>
    <style>
    #tabs {width: 740px;
    /*border-radius: 5px 5px 0 0;
    -webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border: 1px solid #3d607d;*/
	 }
    #tabs ul li{
    	float: left; 
    	background: #098348; 
    	padding: 7px 10px; 
    	margin-right: 3px; 
    	list-style: none inside;
    	border-radius: 10px 10px 10px 10px;
    	-webkit-border-radius: 10px 10px 10px 10px;
    	-moz-border-radius: 10px 10px 10px 10px;
    	cursor: pointer;
    	color:#FFF;
        font-weight: bold;
        width:160px;
    	
    }
    #tabs ul li.active {background:#d1d3d4; color:#000; padding-bottom: 6px; 
        border-radius: 10px 10px 10px 10px;
    	-webkit-border-radius: 10px 10px 10px 10px;
    	-moz-border-radius: 10px 10px 10px 10px;
        font-weight: bold;}
    #tabs dir{clear: both; padding: 10px; line-height: 22px;}
    #tabs dir p{line-height: 22px;}
    #tabs dir.hide{display: none;}
    #main-contents h3 {
          background: none repeat scroll 0 0 #D1D3D4;
          border-radius: 10px 10px 10px 10px;
          color: #000000;
          font-weight: bold;
          margin-bottom: 10px;
          padding: 7px 10px;
          width: 722px;
        }
    </style>
    <script src="<?php echo DOMAIN;?>js/jquery.jqzoom-core.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo DOMAIN;?>css/jquery.jqzoom.css" type="text/css">
<style type"text/css">

a img,:link img,:visited img { border: none; }
table { border-collapse: collapse; border-spacing: 0; }
:focus { outline: none; }
*{margin:0;padding:0;}
fieldset {padding:0px;padding-left:7px;padding-right:7px;padding-bottom:7px;}
fieldset legend{margin-left:15px;padding-left:3px;padding-right:3px;color:#333;}


.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}


ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
    border:1px solid red;
}

.jqzoom{

	text-decoration:none;
	float:left;
}

</style>
<script type="text/javascript">

$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'reverse',
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
	//$('.jqzoom').jqzoom();
});


</script>    
<div id="main-contents">
    <div class="part">Sản phẩm >> <?php echo $catpro['Catproduct']['name'];?> >> <?php echo $views['Product']['title'];?></div>
    <div class="img">
    <a href="<?php echo DOMAINAD.$views['Product']['images']?>" class="jqzoom" rel='gal1'  title="Phóng to" >
        <img src="<?php echo DOMAINAD.'timthumb.php?src='.$views['Product']['images']?>&amp;w=360&amp;zc=1" width="360"/>
    </a>
    </div> 
    <div class="introduction">
        <h2><?php echo $views['Product']['title'];?></h2>
        <style>
        #main-contents .introduction td {
          color: #000000;
          font-family: Segoe UI;
          font-size: 13px;
          line-height: 25px;
        }
        </style>
        <table width="355px">
            <tr>
            <td width="95px"><p>Model </p></td><td width="260px">: <b><?php echo $views['Product']['model'];?></b></td>
            </tr>
            <tr>
            <td width="95px"><p>Tên sản phẩm</p> </td><td width="260px">: <?php echo $views['Product']['title'];?></td>
            </tr>
            <tr>
            <td width="95px"><p>Giá </p></td><td width="260px">: <b><?php echo $views['Product']['gia'];?></b></td>
            </tr>
            <tr>
            <td width="95px"><p>Trạng thái </p></td><td width="260px">: <?php echo $views['Product']['tinhtrang'];?></td>
            </tr>
            <tr>
            <td width="95px"><p>Bảo hành </p></td><td width="260px">: <?php echo $views['Product']['baohanh'];?></td>
            </tr>
        </table>
        <!--<p>Model &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;: <b><?php echo $views['Product']['model'];?></b></p>
        <p>Tên sản phẩm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $views['Product']['model'];?></p>
        <p>Giá &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: <b><?php echo $views['Product']['gia'];?></b></p>
        <p>Trạng thái &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $views['Product']['tinhtrang'];?></p>
        <p>Bảo hành &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: <?php echo $views['Product']['baohanh'];?></p>
        <p>Mức thuế &nbsp;&nbsp;&nbsp;: <?php echo $views['Product']['thue'];?></p>-->
        <div class="clearfix"></div>
    </div>  
    <div class="clearfix"></div>
    <div id="tabs">
        <ul>
			<li>TÍNH NĂNG</li>
			<li>THÔNG SỐ KỸ THUẬT</li>
		</ul>
        <div class="clearfix"></div>
		<dir>
			<?php echo $views['Product']['content'];?>
		</dir><!-- end HTML tab content -->
		<dir style="display: none;">
			<?php echo $views['Product']['content_en'];?>
		</dir><!-- end CSS tab content -->
    </div> 
    <br /> &nbsp; <br />   
    <h3>SẢN PHẨM CÙNG LOẠI</h3>
    <div id="main-content">
        <?php if($sanphamkhac){?>
        <?php foreach($sanphamkhac as $pr){?>
            <li>
                <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;w=250&amp;zc=1"/></a> 
                <h2><a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><?php echo $pr['Product']['title'];?></a></h2>
            </li>
        <?php }?>
        <div style="float: right; text-align:right;width: 680px; padding-top: 10px; color: #007ABC; font-size: 12px; padding-left: 10px; font-weight: bold;">
             <?php if($paginator->numbers()!=null){?>
                <style>
                a{
                 color: green;
                }
                </style>
                <?php
    				$paginator->options(array('url' => $this->passedArgs));                                    
    				echo "Trang :";
    				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
    				
                }?>
            </div>
        <?php }else{ echo "Đang cập nhật";}?>
    </div>
</div>
<!--
<div id="sanphamchitiet">
    <div class="top"><span><?php echo $views['Product']['title'];?></span></div>
        <div id="dssanpham" >
        <div class="img">
             <img src="<?php echo DOMAINAD.'timthumb.php?src='.$views['Product']['images']?>&amp;w=550&amp;zc=1" width="500px" />
        </div>
        <div class="name">
            <div class="detail" style="line-height: 30px !important;">
                <font color="#FF0000" size="3"><b><?php if($views['Product']['price']!=0){ echo number_format( $views['Product']['price'],0);?> VNĐ<?php }else{echo "Liên hệ";} ?></b></font>
            </div>
            <h6><span><font color="#AAAAAA"><?php echo number_format( $views['Product']['tinhtrang'],0);?> VNĐ</font></span></h6>
            <div class="chitiet"><a href="<?php echo DOMAIN?>mua-hang/<?php echo $views['Product']['id'];?>.html"><img src="<?php echo DOMAIN?>images/chitiet.png"/></a></div>
            
        </div>
        <div class="noidung">
            <?php echo $views['Product']['content'];?>
        </div>
    </div>
                            
</div>  
<?php if($sanphamkhac){?> 
<div id="main-center">    
    <div id="sanphams">
    	<div class="top"><span>Sản phẩm khác</span></div>       
        <?php foreach($sanphamkhac as $pr){?>
        <div id="dssanpham" align="center">
        	<div class="img" >
                <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;w=250&amp;zc=1" width="200px" height="200px"/></a>
            </div>
            <div class="name" align="center">
            	<h2><a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><?php echo $pr['Product']['title'];?></a></h2>                
                <h6><font color="#FF3F3F"><?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0);?> VNĐ<?php }else{echo "Liên hệ";} ?></font></h6>
                <h6><span><font color="#AAAAAA"><?php echo number_format( $pr['Product']['tinhtrang'],0);?> VNĐ</font></span></h6>
                <h4><a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>.html"><img src="<?php echo DOMAIN;?>images/chitiet.png"/></a></h4>
            </div>
        </div><?php }?>
        <div style="float: left; text-align:right;width: 680px; padding-right: 50px; color: black; font-size: 12px;">
         <?php if($paginator->numbers()!=null){?>
            <style>
            a{
             color: green;
            }
            </style>
            <?php
				$paginator->options(array('url' => $this->passedArgs));                                    
				echo "Trang :";
				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";				
            }?>
        </div>
    </div>    
</div>
<?php }?>
-->