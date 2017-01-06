<div id="menu-left">
<?php echo $this->element('left');?></div> 
<div id="main-contents">
    <div class="part"><?php echo $catpro['Category']['name'];?> >> <?php echo $views['News']['title']?></div>
    <div class="clearfix"></div>
    <div style="padding-top: 10px; float: left; text-align: justify; width: 740px;line-height: 25px;">
    <?php echo $views['News']['content']?> 
    </div>
    <div class="clearfix"></div>
    <?php if($list_other!=null){?>                      
            <div style="padding: 10px !important;">
                <h2>Bài viết liên quan</h2> <hr style="width: 200px;" />
            
            <div style="margin:10px; text-align:justify;" class="imf-product">
            	<ul class="list-news" style="list-style: none outside none;">
                    <?php foreach($list_other as $news){ ?>
                		<li><a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $news['News']['id'];?>">- <?php echo $news['News']['title']?></a></li>
                    <?php } ?>
                </ul>
            </div> 
            </div>                       
    <?php } ?>    
</div>
<div class='fb-like' data-action='like' data-href='' data-layout='button_count' data-share='true' data-show-faces='false' data-width='520'/>
<!--
<div id="main-centers">
      <div id="news" style="min-height: 700px !important;margin-top: 3px;">
    	<div class="top"><span><?php echo $views['News']['title']?></span></div>
        <div style="padding: 0; float: left;">
        <?php echo $views['News']['content']?> 
        </div>
        <div class="clearfix"></div>
         <?php if($list_other!=null){?>                      
                        <div style="padding: 10px !important;">
                            <h2>Bài viết liên quan</h2> <hr style="width: 200px;" />
                        
                        <div style="margin:10px; text-align:justify;" class="imf-product">
                        	<ul class="list-news" style="list-style: none outside none;">
                                <?php foreach($list_other as $news){ ?>
                            		<li><a href="<?php echo DOMAIN;?>chi-tiet-bai-viet/<?php echo $news['News']['id'];?>">- <?php echo $news['News']['title']?></a></li>
                                <?php } ?>
                            </ul>
                        </div> 
                        </div>                       
            <?php } ?>
</div>
</div>-->