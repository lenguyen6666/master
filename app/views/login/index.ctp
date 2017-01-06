<?php echo $html->css('login'); ?>
<?php echo $javascript->link('jquery.validate', true); ?>
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
	$("#signupForm").validate({
		rules: {
				password: {
				required: true,
				minlength: 5
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
			
			email:{
						required: "<br> <span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px;margin:65px; ' >Xin vui lòng nhập Email</span> ",
                        email: "<br><span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' > Email không đúng !"

			}
		}
	});
});
</script>
<div id="main-center">
<div id="sanphams" >
    <div class="top">Đăng nhập</div>
    <div class="clearfix" ></div> 
         <form id="signupForm" method="POST" action="<?php echo DOMAIN?>login/check_login">
                <table style="padding:10px 200px;">
                <tr>
                <td style="padding: 10px;">Email:</td><td><input type="text" name="email" class="login-new-input" /></td>
                </tr>
                <tr>                
                <td style="padding: 10px;">Mật khẩu:</td><td><input type="password" name="password" class="login-new-input" /></td>
                </tr>
                <tr>
                <td></td>
                    <td><input type="submit" value="Đăng nhập" /></td>
                </tr>
                </table>
        </form>
        </div>

</div>
