 <?php if($session->read('lang')==1){?>
<div id="main-center">
<div id="sanphams" style=";min-height: 977px !important;">
    	<div class="top">Giới thiệu</div>
<div class="clearfix"></div>
        <div style="padding: 10px !important;">            

                         <?php foreach($about as $gt){ ?>
                        <p><?php echo $gt['News']['content'];?> </p>
                       <?php } ?>
         
             
        </div> 
        <div class="b"><div class="b"><div class="b"></div></div></div>
    </div>
    </div>
 <?php } if($session->read('lang')==2){?>
 <div id="main-center">
<div id="sanphams" style=";min-height: 977px !important;">
    	<div class="top">About us</div>
<div class="clearfix"></div>
        <div style="padding: 10px !important;">            

                         <?php foreach($about as $gt){ ?>
                        <p><?php echo $gt['News']['content_en'];?> </p>
                       <?php } ?>
         
             
        </div> 
        <div class="b"><div class="b"><div class="b"></div></div></div>
    </div>
    </div>
 <?php }?>