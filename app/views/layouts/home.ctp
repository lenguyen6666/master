<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php echo $this->element('head');?> 
<body>
<!--
<div id="floating_banner_left" style="position:absolute; z-index: 99999; overflow:hidden; margin: 140px 0px; left: 0px; width: 120px; border: 0px solid #000;">
<div id="floating_banner_left_content">
<?php $adv1= $this->requestAction('/comment/adv1') ?>
    <?php foreach($adv1 as $advs1 ){  ?>
    <a href="<?php echo $advs1['Advertisement']['link'] ?>" target="_blank"><img src="<?php echo DOMAINAD.$advs1['Advertisement']['images']?>" border="0" width="120px" alt="" /></a>
   
    <br />
   <?php } ?>   
</div>
</div>

<div id="floating_banner_right" style="position:absolute;z-index: 99999; overflow:hidden; margin: 140px 0; right: 0px; width: 120px; border: 0px solid #000;">
	<div id="floating_banner_right_content"  >
    <?php $adv2= $this->requestAction('/comment/adv2') ?>
    <?php foreach($adv2 as $advs2 ){  ?>
    <a href="<?php echo $advs2['Advertisement']['link'] ?>" target="_blank"><img src="<?php echo DOMAINAD.$advs2['Advertisement']['images']?>" border="0" width="120px" alt="" /></a><br />
   <?php } ?>
</div>
</div>
<script>
	runQuery();
</script>
<script>
	pepsi_floating_init();
</script>-->
    <div id="wrapper">  
		<div id="header">
         <?php echo $this->element('header');?> 
         </div>
         <div id="menu">
        	<?php echo $this->element('menu');?>
         </div>
         <?php echo $this->element('slide');?>
         <div id="body">
               <div class="mains">
               <p class="htpt">Phủ Sóng Mọi Nơi</p>
               <p class="sdt"><?php $setting = $this->requestAction('/comment/setting') ?>
        <?php foreach($setting as $settings ){  ?>
        <?php echo $settings['Setting']['mobile'];?>
        <?php }?></p>
               </div> 
               <div id="content">
   		       <div id="main">               
               <?php echo $content_for_layout; ?>
               </div>
               </div>  <!--end content-->
               <div class="clearfix"></div> 
        </div><!--end body-->  
    </div><!--end wrapper-->
    <div id="footer">
          <div id="content">
                <div class="news">
                    <h3>Giải pháp kỹ thuật</h3>
                    <?php $gp= $this->requestAction('/comment/gp') ?>
                    <?php foreach($gp as $value ){  ?>
                    <li>
                        <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$value['News']['images']?>&amp;w=150&amp;zc=1" width="83" height="62" title="<?php echo $value['News']['title'];?>" alt="<?php echo $value['News']['title'];?>"/></a>
                        <p>
                            <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html" style="color: #fff;"><?php echo strip_tags($this->Text->truncate($value['News']['title'],120,array('ending' => '...','exact' => false)));?></a>
                        </p>
                    </li>
                    <?php }?>
                </div>
                <div class="news" style="margin-left: 20px;">
                    <h3>Văn hóa ALO VIET NAM</h3>
                    <?php $vh= $this->requestAction('/comment/vh') ?>
                    <?php foreach($vh as $value ){  ?>
                    <li>
                        <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$value['News']['images']?>&amp;w=150&amp;zc=1" width="83" height="62" title="<?php echo $value['News']['title'];?>" alt="<?php echo $value['News']['title'];?>"/></a>
                        <p>
                            <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html" style="color: #fff;"><?php echo strip_tags($this->Text->truncate($value['News']['title'],120,array('ending' => '...','exact' => false)));?></a>
                        </p>
                    </li>
                    <?php }?>
                </div>
                <div class="news" style="margin-left: -8px;">
                    <h3>TIN TỨC</h3>
                    <?php $dl= $this->requestAction('/comment/dl') ?>
                    <?php foreach($dl as $value ){  ?>
                    <li>
                        <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$value['News']['images']?>&amp;w=150&amp;zc=1" width="83" height="62" title="<?php echo $value['News']['title'];?>" alt="<?php echo $value['News']['title'];?>"/></a>
                        <p>
                            <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html" style="color: #fff;"><?php echo strip_tags($this->Text->truncate($value['News']['title'],120,array('ending' => '...','exact' => false)));?></a>
                        </p>
                    </li>
                    <?php }?>
                </div>
                <div class="news" style="margin-left: -5px; width: 240px !important;">
                    <h3>Đối tác</h3>
                        <?php $setting = $this->requestAction('/comment/setting') ?>
                        <?php foreach($setting as $settings ){  ?>
                        <?php echo $settings['Setting']['doitac'];?>
                        <?php }?>
                        <!--
                        <div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="margin-top: 20px;">
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_2"></a>
                        <a class="addthis_button_preferred_3"></a>
                        <a class="addthis_button_preferred_4"></a>
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                        </div>
                        <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-506cfe4c10cc5d40"></script>
                        -->
                     <?php echo $this->element('count');?>   
                </div>
          </div>                           
    </div><!--end footer--> 
    <div class="clearfix"></div>
    <center>
        <?php echo $this->element('footer');?> 
    </center>
<!--        
<script type="text/javascript">
 var GLOBAL_ROOT_URL='<?php echo DOMAIN?>';
 var GLOBAL_LOGIN_URL='<?php echo DOMAIN?>';
 var GLOBAL_RESOURCES_PATH = '<?php echo DOMAIN?>js/4web/';  
// var GLOBAL_IMAGE_URL = 'http://shop.gonct.info/nava_shop/images/';
 var strViewtype='';   
 
</script>
<script src="<?php echo DOMAIN?>js/4web/lib.pack.split.js" type="text/javascript">	</script>      
<script src="<?php echo DOMAIN?>js/4web/core.pack.js" type="text/javascript"></script>  
<script src="<?php echo DOMAIN?>js/4web/jquery.cycle.all.js" type="text/javascript"></script>  
<script language="javascript" type="text/javascript">scrolltotop.init();</script>               
<form id="formmain" method="Post" action="" enctype="multipart/form-data" > 
<input type="hidden" name="formAction" id="formAction" value=""/>      
</form> 
<a id="showpopupuser" href="#userinfo" class="button_delivery inline"></a>
<div class="right_support_online">      
<div class="contact_nava hover">
	<a rel="nofollow" href="<?php echo DOMAIN?>lien-he.html" class="error_website" >&nbsp;</a>     
	<div class="myTip" style="font-size: 12px !important;"><a href="<?php echo DOMAIN?>lien-he.html">Liên hệ/ Góp ý</a></div>
</div>
<div class="clear"></div>
<div class="contact_navadungthu hover">
	<a rel="nofollow" href="<?php echo DOMAIN?>danh-sach-bai-viet/224/dich-vu.html" class="error_website" >&nbsp;</a>     
	<div class="myTip" style="font-size: 12px !important;"><a href="<?php echo DOMAIN?>danh-sach-bai-viet/224/dich-vu.html">Dịch vụ</a></div>
</div>
<div class="clear"></div>
<div class="contact_navahelp hover">
	<a rel="nofollow" href="<?php echo DOMAIN?>lien-he.html" class="error_website" >&nbsp;</a>     
	<div class="myTip" style="font-size: 12px !important;"><a href="<?php echo DOMAIN?>lien-he.html">Hỗ trợ</a></div>
</div>


</body>
</html>