<title>Download báo giá</title>
<div id="main">
<h3><big>Download báo giá</big></h3>
<div id="main-center"> 
   <!--sanpham-->
  <div id="sanphams" style="min-height: 565px !important;">
    <div id="dsdichvu">
    <?php  if($downloads){?>
      <?php  foreach($downloads as $value){ ?>
      <div id="dichvus" style="border-bottom: none !important; width: 300px; margin-top: 20px;">
        <div id="imagedv" style="margin-left: 20px; width: 110px;"><a href="<?php echo DOMAINAD;?><?php echo $value['Video']['video'];?>"><img src="<?php echo DOMAIN;?>images/download_document_folder_135.jpg" style="width: 110px !important;height: 100px !important;"/></a> </div>
        <div id="name" style="width: 150px;"><br /><br />
          <h2 style="font-size: 14px;"><a href="#"><?php echo $value['Video']['name'];?></a></h2>
          
          <div class="chitiet" align="left"> <a href="<?php echo DOMAINAD;?><?php echo $value['Video']['video'];?>"><u>Tải xuống</u> -></a> </div>
        </div>
      </div>
    <?php }}else{?> 
        <div id="noidung">
            <p>&nbsp;Chưa có báo giá</p>
        </div>
    <?php }?>
        <div style="float: left; text-align:right; width: 980px;color:black; font-size: 11px; margin-top: 15px;">
         <?php if($paginator->numbers()!=null){?>
            
            <div class="page">
            <?php
                echo "<b><font color='#636363' size=2>Trang: </font></b> ";
				$paginator->options(array('url' => $this->passedArgs));                                    
				echo $paginator->numbers();
            ?></div>
            <?php }?>
        </div> 
    </div>
    
  </div>
  <!--end sanpham--> 
  
</div>
</div>
