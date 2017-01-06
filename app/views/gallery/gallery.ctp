<style>
#text-main .back a{
float: right; font-family: arial; color:blue; font-size: 14px;
}
#text-main .back a:hover{
float: right; font-family: arial; color:red; font-size: 15px;
}
</style>

  <script type="text/javascript">
        $(function() {
            $('.neoslideshow img:gt(0)').hide();
            setInterval(function(){
              $('.neoslideshow :first-child').fadeOut()
                 .next('img').fadeIn()
                 .end().appendTo('.neoslideshow');}, 
              4000);
        })     

</script>

<div id="text-main">
 <?php if($session->read('lang')==1){?>
   <div class="title-news"><p>Thư viện ảnh</p></div>
  <?php }if($session->read('lang')==2){?>
  <div class="title-news"><p>Gallery</p></div>
  <?php }?>
     <div class="text-main">
        <div id="lofslidecontent45" class="lof-slidecontent" style="width:780px; height:385px;">
		<div class="preload"><div></div></div>
     <!-- MAIN CONTENT --> 
      <div class="lof-main-outer" style="width:780px; height:385px;">
        <ul class="lof-main-wapper">
        	 <?php foreach($images as $slideshows){?>
             <li>
                 <img src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $slideshows['Gallery']['images'];?>&amp;h=385&amp;w=780&amp;zc=1" alt="" />  
                 
            </li> 
           <?php }?>
          </ul>  	
      </div>
      <!-- END MAIN CONTENT --> 
        <!-- NAVIGATOR -->
    <div class="lof-navigator-wapper">
          <div onclick="return false" href="" class="lof-next"></div>
            <div class="lof-navigator-outer">
                <ul class="lof-navigator">
					 <?php foreach($images as $slideshows){?>
                     <li>
                         <img src="<?php echo DOMAINAD;?><?php echo $slideshows['Gallery']['images'];?>" style="width:70px; height:25px;" alt="" />  
                    </li> 
                   <?php }?>   		
                </ul>
          </div>
          <div onclick="return false" href="" class="lof-previous"></div>
     </div> 
  <!----------------- --------------------->
  
 </div>
     </div>
    
</div>
 <div class="back" align="center"><a href="<?php echo DOMAIN;?>/thu-vien-anh" >Quay lại trang trước</a></div>   
