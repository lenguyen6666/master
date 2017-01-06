 <style>
  #goi-thieu h1,h2,h3{
	  font-size:12px;
	  font-weight:normal;
	  }

    #main-register input, .text-main input {
    border: 1px solid #CCC;
    border-radius: 5px;
    }
    input {
    padding: 3px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;

}
</style> 
 <?php if($session->read('lang')==1){?>
<div id="sanphamchitiet">
    <div class="top"><span>Liên hệ</span>
        </div>
        <div class="m3">  
            <div style="width: 700px ; margin: 0 auto;">
                <?php $setting = $this->requestAction('/comment/setting') ?>
                <?php foreach($setting as $settings ){  ?>
                    <?php echo $settings['Setting']['information'];?>
                <?php }?>
            </div>          
             <div class="clearfix"> 		                   
                <div class="roundBoxBody">
                           <div style="width: 400px; margin: 0 auto;">
                             <?php echo $this->element('plugin/plugin-contac');?>
                        </div>
                </div>                  
             </div>            
             <div class="clearfix"></div>
        </div> 
        <div class="b3"><div class="b3"><div class="b3"></div></div></div>
    </div>
 <?php }if($session->read('lang')==2){?>
 <div id="sanphamchitiet">
    <div class="top">Contact us
        </div>
        <div class="m3">            
             <div class="clearfix"> 		                   
                <div class="roundBoxBody">

                           <div style="width: 400px; margin: 0 auto;">
                             <?php echo $this->element('plugin/plugin-contac');?>
                        </div>
                </div>                  
             </div>            
             <div class="clearfix"></div>
        </div> 
        <div class="b3"><div class="b3"><div class="b3"></div></div></div>
    </div>
 <?php }?>



