<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $setting = $this->requestAction('/comment/setting'); ?>
<?php foreach ($setting as $settings) { ?>
<link href="http://<?php echo $settings['Setting']['url']; ?>/feed" title="<?php echo
    $settings['Setting']['title']; ?> » Feed" type="application/rss+xml" rel="alternate"/>
<link href="http://<?php echo $settings['Setting']['url']; ?>/comments/feed" title="<?php echo
    $settings['Setting']['title']; ?> » Comments Feed" type="application/rss+xml" rel="alternate"/>
<link href="http://<?php echo $settings['Setting']['url']; ?>" title="<?php echo
    $settings['Setting']['title']; ?>" rel="index">
    <?php if($this->params['controller']=='home'){?>
    <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
    <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
    <title><?php echo $settings['Setting']['title']; ?></title>
    <?php }?>    

    <?php if($this->params['controller']=='products'){?>
        <?php if(isset($cat)){?>
            <?php if($cat['Catproduct']['meta_key']) {?>
                <meta content="<?php echo $cat['Catproduct']['meta_key'];?>" name="keywords"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
            <?php }?>
            
            <?php if($cat['Catproduct']['meta_key']) {?>
                <meta content="<?php echo $cat['Catproduct']['meta_des'];?>" name="description"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
            <?php }?>
            
            <?php if($cat['Catproduct']['meta_key']) {?>
                <title><?php echo $cat['Catproduct']['title_seo'];?></title>
            <?php }else{?>
                <title><?php echo $cat['Catproduct']['name'];?></title>
            <?php }?>
        <?php }else{?>
            <?php if(isset($views)){?>
                 <?php if(isset($views['Product']['meta_key'])) {?>
                <meta content="<?php echo $views['Product']['meta_key'];?>" name="keywords"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
                <?php }?>
                
                <?php if(isset($views['Product']['meta_des'])) {?>
                <meta content="<?php echo $views['Product']['meta_des'];?>" name="description"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
                <?php }?>
                
                <?php if(isset($views['Product']['title_seo'])) {?>
                <title><?php echo $views['Product']['title_seo'];?></title>
                <?php }else{?>
                <title><?php echo $views['Product']['title'];?></title>
                <?php }?>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
                <title>Sản phẩm</title>
            <?php }?>
        <?php }?>
    <?php }?><!--end seo product-->
    
    <?php if($this->params['controller']=='news'){?>
        <?php if(isset($cat)){?>
            <?php if($cat['Category']['meta_key']) {?>
                <meta content="<?php echo $cat['Category']['meta_key'];?>" name="keywords"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
            <?php }?>
            
            <?php if($cat['Category']['meta_key']) {?>
                <meta content="<?php echo $cat['Category']['meta_des'];?>" name="description"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
            <?php }?>
            
            <?php if($cat['Category']['meta_key']) {?>
                <title><?php echo $cat['Category']['title_seo'];?></title>
            <?php }else{?>
                <title><?php echo $cat['Category']['name'];?></title>
            <?php }?>
        <?php }else{?>
            <?php if(isset($views)){?>
                 <?php if($views['News']['meta_key']) {?>
                <meta content="<?php echo $views['News']['meta_key'];?>" name="keywords"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
                <?php }?>
                
                <?php if($views['News']['meta_des']) {?>
                <meta content="<?php echo $views['News']['meta_des'];?>" name="description"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
                <?php }?>
                
                <?php if($views['News']['title_seo']) {?>
                <title><?php echo $views['News']['title_seo'];?></title>
                <?php }else{?>
                <title><?php echo $views['News']['title'];?></title>
                <?php }?>
            <?php }else{?>
                <?php if($cats){?>
                <title><?php echo $cats;?></title>
                <?php }?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
            
            <?php }?>
        <?php }?>
    <?php }?><!--end seo news-->
    
    <?php if($this->params['controller']=='contacts'){?>
        <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
        <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
        <title>Liên hệ</title>
    <?php }?>
     <?php if($this->params['controller']=='introductions'){?>
        <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
        <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
        <title>Giới thiệu</title>
    <?php }?>
    <?php if($this->params['controller']=='commentdvs'){?>
        <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
        <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
        <title>Phản hồi dịch vụ</title>
    <?php }?>
    
<?php } ?>    
<meta content="noodp,noydir" name="robots"/>
<link href="<?php echo DOMAIN ?>images/logo.png" type="images/png" rel="icon"/>
<link href="<?php echo DOMAIN;?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo DOMAIN;?>css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="<?php echo DOMAIN;?>js/jquery.js"></script>

<script type="text/javascript" charset="utf-8" src="<?php echo DOMAIN;?>js/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="<?php echo DOMAIN;?>css/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript">
var j = jQuery.noConflict();
    j(window).load(function() {
        j('#slider').nivoSlider();
    });
    </script>
 
<script src="<?php echo DOMAIN ?>js/floater_xlib.js" type="text/javascript"></script>
<script src="<?php echo DOMAIN;?>js/toolsupport.js" type="text/javascript"></script>
    <script type="text/javascript">

var slideTime = 700;
var floatAtBottom = false;

function pepsi_floating_init()
{
	xMoveTo('floating_banner_right', 887 - (1024-screen.width), 0);

	winOnResize(); // set initial position
	xAddEventListener(window, 'resize', winOnResize, false);
	xAddEventListener(window, 'scroll', winOnScroll, false);
}
function winOnResize() {
	checkScreenWidth();
	winOnScroll(); // initial slide
}
function winOnScroll() {
  var y = xScrollTop();
  if (floatAtBottom) {
    y += xClientHeight() - xHeight('floating_banner_left');
  }
  
  xSlideTo('floating_banner_left', (screen.width - (1050-772) - 770)/2-115 , y, slideTime);  // Chỉnh khoảng cách bên trái
  xSlideTo('floating_banner_right', (screen.width - (530-765) + 770)/2, y, slideTime); // // Chỉnh khoảng cách bên Phải
}
	
function checkScreenWidth()
{
	if( document.body.clientWidth <= 1024 )
	{	
		document.getElementById('floating_banner_left').style.display = 'none';
		document.getElementById('floating_banner_right').style.display = 'none';
	}
	else
	{
		document.getElementById('floating_banner_left').style.display = '';
		document.getElementById('floating_banner_right').style.display = '';	
	}
}

</script>
<link rel="stylesheet" href="<?php echo DOMAIN;?>css/toolsopport.css" type="text/css" />

</head>