<div id="menu-left">
<?php echo $this->element('left');?></div> 
<div id="main-centers">
      <div id="news" style="min-height: 660px !important;margin-top: 3px;">
    	<div class="top"><span><?php echo $cat['Category']['name'];?></span></div>
        <?php if($listnews){?>
         <?php $i=1; foreach($listnews as $value){ ?>
        <div class="noidung">        
        <div class="img"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$value['News']['images']?>&amp;h=120&amp;w=205&amp;zc=1" width="198" height="120" alt="<?php echo $value['News']['title'];?>" title="<?php echo $value['News']['title'];?>" /></div>
        <h2><a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"><?php echo $value['News']['title'];?></a></h2>
        <div class="main">        
        <p><?php echo strip_tags($this->Text->truncate( $value['News']['introduction'],600,array('ending' => '...','exact' => false)));?></p>
        </div>                             
        </div><?php }?>  
        <div style="float: left; text-align:left;width: 680px; padding-top: 10px; color: black; font-size: 12px;">
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
        <?php }else{ echo "Đang cập nhập";?>            
        <?php }?>
       
    </div><!--end newstop-->    

</div>
