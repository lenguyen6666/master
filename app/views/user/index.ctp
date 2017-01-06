<?php echo $html->css('register-news'); ?>
<?php echo $javascript->link('jquery.validate', true); ?>

<style>
  #uploadcontent {
    color: #333333;
    height: 20px;
	float:right;
    width: 372px;
}
#uploadcontent a {
    color: #258294;
    text-decoration: none;
}
</style>
<style>
  #goi-thieu h1,h2,h3{
	  font-size:12px;
	  font-weight:normal;
	  }

    #main-register input, .text-main input {
    border: 1px solid #CCC;
    border-radius: 5px;
    }
    input {
    padding: 3px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;

}
</style>
<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#myform").validate({
		rules: {
		  password: {
				required: true,
				minlength: 5
			},
				name: {
				required: true,
				minlength: 5
			},
			phone: {
				required: true,
			},
            address: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			
			agree: "required"
		},
		messages: {
		      password: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập password !</span>",
				minlength: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' > password lớn hơn 5 ký tự !</span>"
			},
				name: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập tên !</span>",
				minlength: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' > tên lớn hơn 2 ký tự !</span>"
			},
            phone: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập số điện thoại để chúng tôi liên lạc khi giao hàng !</span>",
				
			},
			address: {
				required: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;' >Xin vui lòng nhập số địa chỉ để chúng tôi liên lạc khi giao hàng !</span>",
				
			},
			email:{
						required: "<br> <span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;margin:65px; ' >Xin vui lòng nhập Email</span> ",
                        email: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' > Email không đúng !"

			}
		}
	});
});
</script>
<div id="sanphamchitiet">
    <div class="top">Đăng ký thành viên
        </div>
        <div class="m1">            
             <div class="clearfix"></div> 
				<div id="content">
				    <div>				       
				        <div class="list-cat">
				          <div id="main-register">
				             <form method="post" action="<?php echo DOMAIN?>user/add" name="myform" id="myform" name="image" enctype="multipart/form-data" >      
				            	<table align="left" style="width:600px;margin: 0 auto" class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
					                <tbody>
					                    <tr>
					                        <th class="blue">Họ và tên <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <input style="width: 300px"  type="text" size="50" name="name" id="name" value="" class="required" />					                                                   
					                        </td>   
					                    </tr>
					                      <tr>
					                        <th class="blue">Giới tính <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                             <select size="1" style="width:100px;" name="sex" id="sex" class="required"  >
								                    <option value="" >- Chọn -</option>
								                    <option value="1" title="Nam">Nam</option>
								                    <option value="0" title="Nữ">Nữ</option>
								                </select>					                                                   
					                        </td>   
					                    </tr>
					                    <tr>
					                        <th class="blue">Địa chỉ email <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <input style="width: 300px"  type="text" size="50" name="email" id="email" value="" class="required email"  />					                                                   
					                        </td> 
					                    </tr>
					                    <tr>
					                        <th class="blue">Mật khẩu <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <input style="width: 300px"  type="password" size="50" name="password" id="password" value="" class="required"  />					                                                   
					                        </td> 
					                    </tr>
					                    <tr>
					                        <th class="blue">Xác nhận mật khẩu  <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <input style="width: 300px"  type="password" size="50" name="confirm_password" id="confirm_password" value="" class="required"  />
					                                                   
					                        </td> 
					                    </tr>
					                    <!--<tr>
					                        <th class="blue">Ảnh đại diện <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <div id="divFileProgressContainer">
								               	 <span id="spanButtonPlaceholder"></span>
					                            	<input type="text" name="userfile"  readonly="readonly"/><a href="javascript:window.open('<?php echo DOMAINAD; ?>upload_pic.php','userfile','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font>(jpg, jpeg, gif, png)
					                            </div>
					                            <div id="thumbnails"> </div>                       
					                        </td> 
					                    </tr>-->
					                    <tr>
					                        <th class="blue">Điện thoại  <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <input style="width: 300px"  type="text" size="50" name="phone" id="phone" value="" class="required"  />					                                                   
					                        </td> 
					                    </tr>
					                     <tr>
					                        <th class="blue">Ngày sinh  <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
						                          <input class="required date"  id="date_show1" value="" class="gc_tf1" type="text" /> <span style="color:#F00;">(dd/mm/yyy) </span>
							                     <input id="dateadd_alt1" type="hidden" name="ngaysinh" id="ngaysinh"/>  
					                             <script type="text/javascript">
		                                                $(document).ready(function(){
		                                                    // set the datepickers individually to specify the alt fields
		                                                    $('#date_show1').datepicker({dateFormat:'dd/mm/yy', altField: '#dateadd_alt1', altFormat: 'yy-mm-dd'});
		                                                    
		                                                });
		                             			</script>                                   
					                        </td> 
					                    </tr>
					                    <tr>
					                        <th class="blue">Mã bảo mật <span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <a1 id="abc">
													<img alt="" id="captcha" src="<?php echo DOMAIN?>user/create_image" /></a1>&nbsp;&nbsp;<a href="javascript: reload()"><img src="<?php echo DOMAIN?>images/change-image.gif"/>
												</a>                       
					                        </td> 
					                    </tr>
					                    <tr>
					                        <th class="blue">Nhập vào mã bảo mật<span style="color:#F00;">*: </span></th>
					                        <td colspan="2">
					                            <input id="security" class="required" name="security" />  
					                        </td> 
					                    </tr>
					                 </tbody>
					              </table>
                                  <div class="clearfix"></div>
					              <div id="input-register" style="margin: 10px 200px;">
						                <input class="ok-register" type="submit" value="Đăng ký" name="reg"  />
						                <input class="no-register"  type="reset"  value="Nhập lại"/>
						            </div>
				            
				           </form>
				        </div>
				        </div>
				   </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

			