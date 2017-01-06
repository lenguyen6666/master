
<div id="menus">
    <?php $banner = $this -> requestAction('/comment/banner');?>
    <?php foreach($banner as $banner){ ?>
    <div class="logo"><a href="<?php echo DOMAIN?>"><img src="<?php echo DOMAINAD?><?php echo $banner['Banner']['images'];?>" alt="Logo" title="logo"/></a></div>
    <?php }?>
          <ul id="nav"><li><a href="<?php echo DOMAIN?>" style="border-left:none;">&nbsp;</a></li>                                                           
             <?php $root = $this->requestAction('/comment/menu');											
             foreach ($root as $value){?>
             <?php if($value['Menu']['radio']==1){?>
             <li><a href="<?php echo $value['Menu']['link']?>" ><?php echo $value['Menu']['name']?></a></li>
             <?php }elseif($value['Menu']['radio']==2){?>
             <li><a href="<?php echo DOMAIN?>danh-sach-san-pham/<?php echo $value['Menu']['catp_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><?php echo $value['Menu']['name']?></a>
                <ul>
                    <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);											
                    foreach ($rootsp as $value){?>
                    <li><a href="<?php echo DOMAIN?>danh-sach-san-pham/<?php echo $value['Menu']['catp_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><?php echo $value['Menu']['name']?></a></li>
                    <?php }?>
                </ul>
             </li>   
             <?php }elseif($value['Menu']['radio']==3){?>
             <li><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Menu']['cate_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><?php echo $value['Menu']['name']?></a>
                <ul>
                    <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);											
                    foreach ($rootsp as $value){?>
                    <li><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Menu']['cate_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><?php echo $value['Menu']['name']?></a></li>
                    <?php }?>
                </ul>
             </li>
             <?php }?>			
            <?php }?>             
             <li><a href="<?php echo DOMAIN?>lien-he.html">Liên hệ</a></li>                        
</ul>		 
      </div>
