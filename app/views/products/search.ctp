<?php echo $this->element('left');?>
<div id="main-content">
    <div class="part">Sản phẩm >> Kết quả tìm kiếm</div>
    <?php if($products){?>
    <?php foreach($products as $pr){?>
        <li>
            <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;w=250&amp;zc=1"/></a> 
            <h2><a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><?php echo $pr['Product']['title'];?></a></h2>
        </li>
    <?php }?>
    <div style="float: left; text-align:left;width: 680px; padding-top: 10px; color: #007ABC; font-size: 12px; padding-left: 10px; font-weight: bold;">
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
