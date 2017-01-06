<div style="padding: 5px;">
         <div id="green-title-box">
        <div class="t"><div class="t"><div class="t"></div> </div></div>
        <div class="title">
              <strong>Thư viện ảnh</strong>
        </div>
        <div class="m">            
             <div class="clearfix"> 		                   
                <div class="roundBoxBody">
                          <?php foreach($album as $sanphamcon) {?>
                             <div class="spmoi">
                                <p class="img">                    
                                    <a href="<?php echo DOMAIN;?>gallery/<?php echo $sanphamcon['Album']['id'];?>">                    
                                    <img src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $sanphamcon['Album']['images'];?>&amp;h=97&amp;w=126&amp;zc=1" /></a></p>
                                <p class="tensp"><a href="<?php echo DOMAIN;?>gallery/<?php echo $sanphamcon['Album']['id'];?>"><?php echo $sanphamcon['Album']['name'];?></a> </p>
                                
                            </div>
                         <?php }?>
                </div>                  
             </div>            
             <div class="clearfix"></div>
              <div class="line"></div>
                <div id="page">        	
                        <?php if($paginator->numbers()!=null){
            				$paginator->options(array('url' => $this->passedArgs));
            				echo $paginator->prev('Back', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
            				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
            				echo $paginator->next('Next' , null, null, array('class' => 'disabled'));
            				echo "</span>";
                        }?>                        
                </div>
        </div> 
        <div class="b1"><div class="b1"><div class="b1"></div></div></div>
    </div>
    <br><br>
 </div>


