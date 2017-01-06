<?php echo $javascript->link('jquery.validate', true); ?>

<style>

.guimail textarea{
	width:336px;
	height:102px;
	font-weight:normal;
	border: 1px solid #ccc;
	}

.guimail {
   
    font-weight: bold;
    margin-bottom: 0;
   
    width: 100%;
}
.tblGrid tr td,.tblGrid tr th {
	border: 1px solid #ccc;
	padding:5px;
    border-spacing: 0;
}
.guimail tr td{
	padding-top:10px;
    width: auto;
    text-align: left !important;
	}
.guimail th {
    border: 0 !important;
}
.guimail .blue{
	color:blue;
}

</style>
<?php echo $javascript->link('jquery.validate', true); ?>


                    <style>
                        #re-marketing ul li {float: left; text-align: center; margin: 0 40px 20px; padding: 10px; border: 1px solid #ddd; width: 203px;}
                        .gia_san_pham {margin: 5px 0; display: block; font-weight: bold;}
                        .trong_luong {display: block; margin:20px auto 0; width: 180px; text-align: left; line-height: 24px; height: 24px;}
                        #re-marketing ul li h2 a {font-size: 15px; font-weight: bold; margin-top: 5px; display: block;}
                        .trong_luong a {background: #DA884B; color: #FFF; padding: 2px 10px; float: right; height: 20px; line-height: 20px;}
                        .trong_luong a:hover {color: #DDC392; background: #930D16;}
                    </style>
                   
                
                    <style>
                    .dat-hang td {
                          border: 0px solid #CCCCCC !important;
                          height: 25px;
                          text-align: center;
                    }
					.btn_order {
						background: #930D16;
						border: 1px solid #9D6B51;
						border-radius: 6px 6px 6px 6px;
						box-shadow: 0 1px 0 0 #DA884B inset;
						color: #FFFFFF;
						display: inline-block;
						font-family: arial;
						font-size: 14px;
						padding: 3px 20px;
						text-decoration: none;
						text-shadow: 1px 1px 0 #CC9F52;
						cursor:pointer;}
					.btn_order:hover { background-color:#DA884B;}
                    .gio-hang {padding: 10px;}
                    table.dat-hang {width: 100%;}
                    tr {float: left; width: 100%; padding: 5px 0; height: 35px; line-height: 35px; border-bottom: 1px solid #ddd; border-top: 1px solid #ddd;}
                    tr th {float: left; width: 120px; text-align: center; font-weight: bold;}
                    tr td {float: left; width: 120px; text-align: center; height: 35px; line-height: 35px;}
                    .datmua {min-height: 208px;}
                    #your-product {display: none;}
                    a.xoa, .update {background: #930D16; padding: 5px; font-weight: bold; color: #FFF;}
                    a.xoa:hover, .update:hover {background:#ddd; color: #930D16; cursor: pointer;}
                    b {font-weight: bold;}
                    tbody {margin-bottom: 20px; border-left: 1px solid #ddd; border-right: 1px solid #ddd;}
                    .dat-hang input {height: 20px; margin-top: 7px;}
                    .guimail tr th {
                      float: left;
                      font-weight: bold !important;
                      padding-left: 10px !important;
                      text-align: left !important;
                      width: 190px !important;
                    }
                    tr th input{
                      height: 25px !important;
                    }
				</style>
<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
				name: {
				required: true,
				minlength: 2
			},
			phone: {
				required: true,
                number:true
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
				name: {
				required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;' >Xin vui lòng nhập tên !</span>",
				minlength: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px; ' > Tên lớn hơn 2 ký tự !</span>"
			},
            phone: {
				required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;' >Xin vui lòng nhập số điện thoại để chúng tôi liên lạc khi giao hàng !</span>",
				number: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;' >Số đt không đúng !</span>",
			},
			address: {
				required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;' >Xin vui lòng nhập số địa chỉ để chúng tôi liên lạc khi giao hàng !</span>",
				
			},
			email:{
						required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:65px; ' >Xin vui lòng nhập Email</span> ",
                        email: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px; ' > Email không đúng !"

			}
		}
	});
});
</script>

<script>
function confirmDelete(delUrl)
{
if (confirm("Bạn có chắc muốn xóa sản phẩm này không?"))
{
	document.location = delUrl;
}
}
</script> 
<div id="main-center">
<div id="sanphams">
    	<div class="top"><span>Thanh toán giỏ hàng</span>
        </div>
       <div class="datmua">
                <form name="form1" method="post">
        	<input type="hidden" name="pid" />
        	<input type="hidden" name="command" />
            <div class="gio-hang">
                <div class="icon-tap"></div>
                <div class="clear"></div>

                <div style="color:#F00"></div>
                <table  class="dat-hang">
    
                    <tr>
                        <th class="thanh-tien" style="width:50px;">Thứ tự</th>
                        <th style="width:500px;" class="ten-sp">Tên sản phẩm</th>
                        <th style="width:90px" class="slg">Số lượng</th>
                        <th class="don-gia">Đơn giá</th>
                        <th class="thanh-tien">Thành tiền</th>
                    </tr>
                        <?php $total=0; $i=0; foreach($shopingcart as $key=>$product) {?>
                            <?php if($product['name']!=null){?>
                            <tr bgcolor="#FFFFFF" align="center">
                                <td style="width:50px;"><?php echo $i+1;?></td>
                                <td align="left" style="font-weight:bold; min-width:500px;"><?php echo $product['name']; ?></td>
                                <td style="width:90px">
                                <form name="view<?php echo $i; ?>" action="<?php echo DOMAIN;?>products/updateshopingcart/<?php echo $key;?>" method="post">
                                <input type="text" value="<?php echo $product['sl']; ?>"  name="product6296" value="1" maxlength="3" size="2"/>
                                </form>
                                </td>
                                <td><?php echo number_format( $product['price'],0); ?> VNĐ</td>
                                <td><?php echo number_format($product['total'],0); ?> VNĐ</td>                                
                            </tr>
                            <?php $total += $product['total']; $i++;} }                   		
                            ?> 
                    </table>
                    
            <div class="clear"></div>
                        <div style="margin-top:0px; padding-top:20px; border-top:1px solid #DA884B;">
                        	<div colspan="6" style="line-height:35px; width:auto; margin-right:50px;">
                            <p style="float:left; font-size:18px; margin-right:50px;">Tổng thanh toán: <b><?php echo number_format($total,0); ?> VNĐ</b></p>

                            </div>
                             <div colspan="6" style="width:auto;">
                               &nbsp;
                            </div>
                        </div>
                    <br/>
           
            <div style="clear: both;background: #ffe4dd;padding:5px;color: #b52427; text-align: left;"><strong>Thông tin dặt hàng</strong></div>
            
            <form name="check_form" id="signupForm" method="post" action="<?php echo DOMAIN;?>thanh-toan">
			<input class="contacts" type="hidden" value="<?php echo $shopingcart; ?>" name="images">
			<input class="contacts" type="hidden" value="<?php echo $total; ?>" name="total">
             <?php if ($this->Session->read('name')) {?>
            <table class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
                <tbody>
                    <tr>
                        <th class="w160 vam">Họ tên đầy đủ</th>
                        <td>
                            <input type="text" title="" name="name" id="Name"  value="<?php echo $this->Session->read('name'); ?>" class="validate[required] inputText w200 input-validation-error blur"><span style="color:#F00;">(*)</span>
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ Email</th>
                        <td>
                            <input type="text" value="<?php echo $this->Session->read('email'); ?>" title="" name="email" id="Email" class="validate[required,custom[email]] inputText w200 valid"><span style="color:#F00;">(*)</span>
                        </td>
                    </tr>
                    <tr>
                        <th>Điện thoại di động</th>
                        <td>
                            <input type="text" title="(xx)xxx&ndash;xxxxx" name="phone"  value="<?php echo $this->Session->read('phone'); ?>" id="Mobile" data-val="true" class="validate[required,custom[telephone]] inputText w200 valid"><span style="color:#F00;">(*)</span>
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>
                            <input type="text" value="" name="address" id="FullAddress" class="validate[required] inputText w500 valid"><span style="color:#F00;">(*)</span>
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="FullAddress" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Hình thức thanh toán</th>
                        <td>
                           <select name="payop" id="payop">
                              <option value="0">Thanh toán khi nhận hàng</option>
                              <option value="nl">Thanh toán chuyển khoản</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php }else{?>
            
            <table class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
                <tbody>
                    <tr>
                        <th class="w160 vam">Họ tên đầy đủ</th>
                        <td>
                            <input type="text" value="" title="" name="name" id="Name" data-val-required="" data-val-length-max="50" data-val-length="" data-val="true" class="validate[required] inputText w200 input-validation-error blur">
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ Email</th>
                        <td>
                            <input type="text" value="" title="" name="email" id="Email" data-val-regex-pattern=".+\@.+\..+" data-val-regex="" data-val-length-max="100" data-val-length="" data-val="true" class="validate[required,custom[email]] inputText w200 valid">
                            
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="Email" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Điện thoại di động</th>
                        <td>
                            <input type="text" value="" title="(xx)xxx&ndash;xxxxx" name="phone" id="Mobile" name="" data-val="true" class="validate[required,custom[telephone]] inputText w200 valid">
                            
                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="Mobile" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>
                            <!--<textarea name="address" id="FullAddress" class="validate[required] inputText w900 valid"></textarea>-->
                            
<input type="text" value="" name="address" id="FullAddress" class="validate[required] inputText w900 valid">

                            <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="FullAddress" class="field-validation-valid"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>Hình thức thanh toán</th>
                        <td>
                            <select name="payop" id="payop">
                              <option value="0">Thanh toán khi nhận hàng</option>
                              <option value="nl">Thanh toán chuyển khoản</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php }?>
            <div class="pt20 tar" style="padding-bottom:15px; padding-top:10px !important; padding-left:212px;" align="left">
                   <input type="submit" class="btn_order" value="Đồng ý đặt hàng" id="btnPlaceOrder1"/>
            </div>
            </form>

          </div>
                </div>                  
             </div>  
                    
             
                
            </div>
    </div><!-- end main dat hang-->
</div><!-- end content-container -->
<div class="clear"></div>
</div><!--end main-wrapper-->


