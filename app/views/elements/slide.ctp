<!--slide-->
<style>
.nivo-directionNav{
    display: block !important;
}
</style>
<div class="theme-default">
     <div id="slider" class="nivoSlider">
     <?php $slide = $this -> requestAction('/comment/slideshow');?>
	<?php foreach($slide as $slide){?>
	<a href="<?php echo $slide['Slideshow']['link'];?>" ><img class="img-sl" src="<?php echo DOMAINAD;?><?php echo $slide['Slideshow']['images'];?>" width="998" height="330" title="<?php echo $slide['Slideshow']['name'];?>" alt="<?php echo $slide['Slideshow']['name'];?>"/></a>
	<?php } ?>
    </div>
</div>
<!--end slide-->