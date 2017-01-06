<?php echo $form->create(null, array( 'url' => DOMAINAD.'menus/edit','type' => 'post','name' => 'adminForm', 'inputDefaults' => array('label' => false,'div' => false)));?>	   
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
				<li id="toolbar-new">
					<a href="javascript:void(0);" onclick="javascript:document.adminForm.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
					</a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.adminForm.reset();">
                    <span class="icon-32-refresh">
                    </span>
                    Reset
                    </a>
                </li>
                <li class="divider"></li>
                <li id="toolbar-help">
                    <a href="#messages" rel="modal" class="toolbar">
                        <span class="icon-32-help"></span>
                        Trợ giúp
                    </a>
                </li>
                <li id="toolbar-unpublish">
                    <a href="<?php echo DOMAINAD?>menu" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="pagetitle icon-48-Menu-add"><h2>Quản lý menu</h2></div>
		<div class="clr"></div>
	</div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <h3>Sửa menu</h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1"></a></li> 
            <li><a href="#tab2" class="default-tab">Sửa menu</a></li>
        </ul>
        <div class="clear"></div>
    </div> 
    <div class="content-box-content">
        <div class="tab-content" id="tab1"> 
        </div>
        <div class="tab-content default-tab" id="tab2">   
            <table class="input">
               	<tr>
                   	<td width="120" class="label">Tên menu:</td>
                    <td>
                    <?php echo $this->Form->input('Menu.name',array('class'=>'text-input medium-input datepicker','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?>
                    <?php echo $this->Form->input('Menu.id',array());?>
                    </td>
                </tr>
                <tr>
                  	<td class="label">Liên kết tĩnh:</td>
                    <td>
                    <?php echo $this->Form->input('Menu.alias',array('class'=>'text-input alias-input datepicker','maxlength' => '250','id' => 'idalias'));?>
                    <img width="16" height="16" alt="" onclick="get_alias();" style="cursor: pointer; vertical-align: middle;" src="<?php echo DOMAINAD; ?>images/refresh.png">
                    </td>
                </tr>
               <tr>
                   	<td width="120" class="label">Menu cha:</td>
                    <td>
                    <?php  echo $form->select('Menu.parent_id', $menulist, null,array('empty'=>'Chọn danh mục','class'=>'small-input')); ?>                   
                    </td>
                </tr>
                <tr>
                   	<td width="120" class="label">Liên kết với:</td>
                    <td>
                    
                    <script type="text/javascript"> 
                    function showMe (it, hide1, hide2, box) { 
                    document.getElementById(it).style.display = "block"; 
                    document.getElementById(hide1).style.display = "none"; 
                    document.getElementById(hide2).style.display = "none";                     
                    }       
                    </script>
                    <style type="text/css">
                    .divstyle
                    {
                    display: none;                    
                    }
                    </style>
                    
                    <p>
                    
                    <input type="radio" name="radio" <?php  if($edit == 1){?>checked="checked"<?php }?> value="1" onclick="showMe('div1', 'div2', 'div3', this)" /> 
                    Link &nbsp;  &nbsp;
                    <input type="radio" name="radio" <?php  if($edit == 2){?>checked="checked"<?php }?> value="2" onclick="showMe('div2', 'div3', 'div1', this)" />
                    Chọn Module sản phẩm&nbsp;  &nbsp;
                    <input type="radio" name="radio" <?php  if($edit == 3){?>checked="checked"<?php }?> value="3" onclick="showMe('div3', 'div1', 'div2', this)" />
                    Chọn Module tin tức
                    </p>
                    <div class="divstyle" id="div1" <?php  if($edit == 1){?>style="display:block;"<?php }?>>
                            <?php echo $this->Form->input('Menu.link',array('class'=>'text-input medium-input datepicker','maxlength' => '250'));?>
                    </div>
                    <div class="divstyle" id="div2" <?php  if($edit == 2){?>style="display:block;"<?php }?>>
                        <?php  echo $form->select('Menu.catp_parent_id', $catproductlist, null,array('empty'=>'Chọn danh mục sản phẩm','class'=>'small-input')); ?>
 
                    </div>
                    <div class="divstyle" id="div3" <?php  if($edit == 3){?>style="display:block;"<?php }?>>
                    <?php  echo $form->select('Menu.cate_parent_id', $category, null,array('empty'=>'Chọn danh mục Tin tức','class'=>'small-input')); ?>
                    </div>
         


                    </td>
                </tr>
                <tr>
                  	<td class="label">Số thứ tự:</td>
                    <td>
                    <?php echo $this->Form->input('Menu.order',array('class'=>'text-input medium-input datepicker','maxlength' => '10','style' => 'width:100px !important'));?>
					</td>
                </tr>
                <tr>
                  	<td class="label">Trang thái:</td>
                    <td><input type="radio" value="0" id="Menutatus0" name="data[Menu][status]" <?php if($this->data['Menu']['status'] == 0 ) echo "checked"; ?>> Chưa Active 
                    	&nbsp;&nbsp;&nbsp;<input type="radio" checked="checked" value="1" id="Menutatus1" name="data[Menu][status]" <?php if($this->data['Menu']['status'] == 1 ) echo "checked"; ?>> Đã Active
                    </td>
                </tr>
                <!--<tr>
                  	<td class="label">Tiêu đề (SEO):</td>
                    <td>
                    <?php  echo $this->Form->input('title',array('type'=>'textarea','rows' => '2')); ?>
                    </td>
                </tr>
                
                <tr>
                  	<td class="label">Từ khóa (SEO):</td>
                    <td>
                    <?php  echo $this->Form->input('keywords',array('type'=>'textarea','rows' => '2')); ?>
                    </td>
                </tr>
                <tr>
                  	<td class="label">Mô tả (SEO):</td>
                    <td>
                    <?php  echo $this->Form->input('description',array('type'=>'textarea','rows' => '2')); ?>
                    </td>
                </tr>-->
            </table>
			<div class="clear"></div>
        </div>
    </div>
</div>
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
				<li id="toolbar-new">
					<a href="javascript:void(0);" onclick="javascript:document.adminForm.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
					</a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.adminForm.reset();">
                    <span class="icon-32-refresh">
                    </span>
                    Reset
                    </a>
                </li>
                <li class="divider"></li>
                <li id="toolbar-help">
                    <a href="#messages" rel="modal" class="toolbar">
                        <span class="icon-32-help"></span>
                        Trợ giúp
                    </a>
                </li>
                <li id="toolbar-unpublish">
                    <a href="<?php echo DOMAINAD?>menu" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="clr"></div>
	</div>
</div> 
<?php echo $form->end(); ?>