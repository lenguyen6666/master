<div class="about">
    <h3>Giới thiệu chung</h3>
    <?php foreach($about as $value){?>
    <h2>
    <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"><?php echo $value['News']['title'];?></a>
    </h2>
    <p><?php echo strip_tags($this->Text->truncate($value['News']['introduction'],900,array('ending' => '...','exact' => false)));?> 
    </p>
    <span>
    <a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"> >> Chi tiết</a>
    </span>
    <?php }?>
</div>
<div class="product">
    <h3>Sản phẩm</h3>
    <?php foreach($catsp as $value){?>
    <li>
        <h2><a href="<?php echo DOMAIN?>danh-sach-san-pham/<?php echo $value['Catproduct']['id']?>/<?php echo $value['Catproduct']['alias']?>.html"><?php echo $value['Catproduct']['name'];?></a></h2>
        <img src="<?php echo DOMAINAD;?><?php echo $value['Catproduct']['images'];?>" width="295"  height="134" alt="<?php echo $value['Catproduct']['name'];?>" title="<?php echo $value['Catproduct']['name'];?>" />
    </li>
    <?php }?>    
</div>
<div class="sevices">
    <h3>Dịch vụ</h3>
    <?php foreach($catnew as $value){?>
    <li>
        <h2><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Category']['id']?>/<?php echo $value['Category']['alias'];?>.html"><?php echo $value['Category']['name'];?></a></h2>
        <p><?php echo strip_tags($this->Text->truncate($value['Category']['content'],300,array('ending' => '...','exact' => false)));?></p>
        <span><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Category']['id']?>/<?php echo $value['Category']['alias'];?>.html"> >> Chi tiết</a></span>
    </li>
    <?php }?>    
</div>
