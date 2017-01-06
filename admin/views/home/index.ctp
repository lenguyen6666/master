<?php
	echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));
?>
<script>
function confirmDelete(delUrl)
{
if (confirm("Bạn có muốn xóa danh mục này không!"))
{
	document.location = delUrl;
}
}
</script>
<?php echo $this->Html->css("layout2");?>
<div id="khung" style="margin-top: 20px;">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
                <li id="toolbar-refresh" style="margin-right: 10px;">
                 <a href="<?php echo DOMAIN;?>" title="View the Site" target="_blank">
                 <span class="icon-32-refresh"></span>
                 Xem Website
                 </a>                 
                </li>
                <li class="divider"></li>
                <li id="toolbar-refresh">
                    <a href="#" title="Author: Nguyễn Thanh Tùng" class="toolbar">
                        <span class="icon-32-help"></span>
                        <?php echo $this->Session->read('name'); ?></a>
                    </a>
                </li>
                  
                <li class="divider"></li>                               
                <li id="toolbar-unpublish">
                    <a href="<?php echo DOMAINAD?>login/logout" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Thoát
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="pagetitle icon-48-category-add"><h2>Quản trị website</h2></div>
		<div class="clr"></div>
	</div>
</div>
<div class="content-box" style="margin-top: 40px;" ><!-- Start Content Box -->
    <div class="content-box-header">
        
        <h3>Administrator</h3>
        
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Trang quản trị</a></li> <!-- href must be unique and match the id of target div -->

        </ul>
        
        <div class="clear"></div>
        
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        
        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
            
            <div class="notification attention png_bg">
            </div>
            <div class="module_content" align="center">
			         <img src="<?php echo DOMAINAD;?>images/logo.png"alt="" />
					<img src="<?php echo DOMAINAD;?>images/ceo-proskills.jpg" width="700" alt="" />
		
				    
				<div class="clear"></div>
			</div>
            
            
        </div> <!-- End #tab1 -->
        
         <!-- End #tab2 -->        
        
    </div> <!-- End .content-box-content -->
 </div>