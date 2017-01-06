  <?php if($_SESSION['lang']==1){?>
    <div class="wucLabelTitleCenter">
         <div class="IntroductionImgLeft">
        </div>
        <div class="LabelTitleCenter_C">
          <p>
                Tải xuống</p>
            
        </div>
        <div class="IntroductionImgRight">
        </div>
    </div> 
    <div class="NewsCatViewContent">
    <div class="StaticContentText">
    <?php foreach($download as $out ){?>
        <span id="ctl00_ContentPlaceHolderCenter_ctl00_lblContent"><font face="Arial"><?php echo $out['Video']['name'];?><a href="<?php echo DOAMINAD;?><?php echo $out['Video']['video'];?>">Tải xuống</a></font></span>
        <?php }?>
    </div>
    </div>
    
       <div class="LeftNewsLastestBottom_All"></div>
  <?php }if($_SESSION['lang']==2){?>
    <div class="wucLabelTitleCenter">
         <div class="IntroductionImgLeft">
        </div>
        <div class="LabelTitleCenter_C">
          <p>
                Download</p>
            
        </div>
        <div class="IntroductionImgRight">
        </div>
    </div> 
    <div class="NewsCatViewContent">
    <div class="StaticContentText">
    <?php foreach($download as $out ){?>
        <span id="ctl00_ContentPlaceHolderCenter_ctl00_lblContent"><font face="Arial"><?php echo $out['Video']['name'];?><a href="<?php echo DOAMINAD;?><?php echo $out['Video']['video'];?>">Tải xuống</a></font></span>
        <?php }?>
    </div>
    </div>
       <div class="LeftNewsLastestBottom_All"></div>
<?php }?>