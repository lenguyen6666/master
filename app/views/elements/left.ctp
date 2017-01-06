<script type="text/javascript" src="<?php echo DOMAIN;?>js/jquery.carouFredSel-5.1.3-packed.js"></script>
    <script type="text/javascript" language="javascript">
    var j = jQuery.noConflict();
    	j(function() {    
    		j("#foo").carouFredSel({
                auto: true,
    	        items: 1,                
                direction : "up",
                scroll : {
                items           : 1,
                effect          : "",
                duration        : 400,                        
                pauseOnHover    : true
                }                  
	       });                    
	    });
    </script>
<div id="mains-left">
    <div id="main-left">
    <?php $root = $this->requestAction('/comment/menuleft');											
     foreach ($root as $value){?>
     <?php if($value['Menu']['radio']==2){?>
     <h3><?php echo $value['Menu']['name']?></h3>
        <ul>
            <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);											
            foreach ($rootsp as $value){?>
            <li><a href="<?php echo DOMAIN?>danh-sach-san-pham/<?php echo $value['Menu']['catp_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><img src="<?php echo DOMAIN;?>images/dot.png" alt=" " title=" "/> <?php echo $value['Menu']['name']?></a></li>
            <?php }?>
        </ul>   
     <?php }elseif($value['Menu']['radio']==3){?>
     <h3><?php echo $value['Menu']['name']?></h3>
        <ul>
            <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);											
            foreach ($rootsp as $value){?>
            <li><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Menu']['cate_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><img src="<?php echo DOMAIN;?>images/dot.png" alt=" " title=" "/> <?php echo $value['Menu']['name']?></a></li>
            <?php }?>
        </ul>
     <?php }?>			
    <?php }?>
    <h3>Công trình tiêu biểu</h3>
    </div>
    <div id="ad">
        <div class="list_carousel">
            <ul id="foo">
                <?php $adv3= $this->requestAction('/comment/adv3') ?>
                <?php foreach($adv3 as $value ){ ?>
                <li><a href="<?php echo $value['Advertisement']['link'] ?>" target="_blank"><img  src="<?php echo DOMAINAD.$value['Advertisement']['images']?>"  width="241px" height="200px"  alt="<?php echo $value['Advertisement']['name'];?>" title="<?php echo $value['Advertisement']['name'];?>" /></a></li>
                <?php }?>
           </ul>
        </div>
    </div>
</div>
