<?php echo $this->element('left');?>
<div id="main-content">
    <?php foreach($products as $pr){?>
    <li>
        <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;w=250&amp;zc=1"/></a> 
        <h2><a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html"><?php echo $pr['Product']['title'];?></a></h2>
    </li>
    <?php }?>
</div>
