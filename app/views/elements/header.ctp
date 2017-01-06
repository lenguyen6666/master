<style>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'vi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
</style>
    <div style="float:left !important;"> 
    <div id="google_translate_element"></div>
    <script type='text/javascript'>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'vi', includedLanguages: 'en,vi', layout: google.translate.TranslateElement.FloatPosition.BOTTOM_RIGHT, multilanguagePage: true}, 'google_translate_element');
    }
    </script>
    <script type='text/javascript' src='<?php echo DOMAIN;?>js/element.js?cb=googleTranslateElementInit'></script>
    <!--<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>-->
    </div>
    <div class="search_block_top">     
        <form action="<?php echo DOMAIN;?>search" method="post">       
            <input type="text" class="search_query" value="Tên sản phẩm..." id="key" name="name_search" onclick="this.value=''"/><input type="submit" class="btn_search" value=""/>
        </form>
    </div> 
<!--
    <?php $banner = $this -> requestAction('/comment/banner');?>
    <?php foreach($banner as $banner){ ?>
         <embed width="1000" height="110" src="<?php echo DOMAINAD?><?php echo $banner['Banner']['images'];?>" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent">
    <?php }?>
    <div style="width: 1000px; top: 0px; height: 110px; position: absolute; z-index:9999;">
        <div style="width:240px; height: 110px; float: right;">
        <div style="margin-top: 10px; color: #333; margin-bottom: 5px; font-family: Segoe UI;">HOTLINE:</div>
        <div style="color: #FF0000; font-size: 17px; font-family: Segoe UI;">
        <?php $setting = $this->requestAction('/comment/setting') ?>
        <?php foreach($setting as $settings ){  ?>
        <?php echo $settings['Setting']['mobile'];?>
        <?php }?>
        </div>
        <div style="margin-top: 5px; color: #333; font-family: Segoe UI;">HỖ TRỢ:</div>
        <div>
    <?php $support = $this->requestAction('/comment/helpsonline') ?>
    <?php  foreach($support as $itm ){?> 
        <a href="skype:<?php echo $itm['Helps']['user_skype'] ?>?chat"><img src="<?php echo DOMAIN;?>images/skype.png" /> </a>
        <?php }?>                                 
        </div>
        </div>
    </div>
-->