<div id="img" style="background: #098348; line-height: 20px;">
	<div class="intro">
    <?php $setting = $this->requestAction('/comment/setting') ?>
    <?php foreach($setting as $settings ){  ?>
    <?php echo $settings['Setting']['content'];?>
    <?php }?>
    <p align="right" style="padding-right: 15px;"><font color="#3399ff">Một sản phẩm của UDV</font> </p>
    </div>
</div>
