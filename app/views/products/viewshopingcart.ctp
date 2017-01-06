
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
                    tr th {float: left; width: 120px; text-align: center}
                    tr td {float: left; width: 120px; text-align: center; height: 35px; line-height: 35px;}
                    .datmua {min-height: 208px;}
                    #your-product {display: none;}
                    a.xoa, .update {background: #930D16; padding: 5px; font-weight: bold; color: #FFF;}
                    a.xoa:hover, .update:hover {background:#ddd; color: #930D16; cursor: pointer;}
                    b {font-weight: bold;}
                    tbody {margin-bottom: 20px; border-left: 1px solid #ddd; border-right: 1px solid #ddd;}
                    .dat-hang input {height: 20px; margin-top: 7px;}
				</style>
<div id="main-center">
<div id="sanphams">
    	<div class="top"><span>Sản phẩm trong giỏ hàng</span>
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
                <?php if($shopingcart){?>
                    <tr>
                        <th class="thanh-tien" style="width:50px;">Thứ tự</th>
                        <th style="width:350px;" class="ten-sp">Tên sản phẩm</th>
                        <th style="width:90px" class="slg">Số lượng</th>
                        <th class="don-gia">Đơn giá</th>
                        <th class="thanh-tien">Thành tiền</th>
                        <th class="thanh-tien" style="width:auto;"></th>
                        <th class="thanh-tien" style="width:60px;"></th>
                    </tr>
                        <?php $total=0; $i=0; foreach($shopingcart as $key=>$product) {?>
                            <?php if($product['name']!=null){?>
                            <tr bgcolor="#FFFFFF" align="center">
                                <td style="width:50px;"><?php echo $i+1;?></td>
                                <td align="left" style="font-weight:bold; min-width:350px;"><?php echo $product['name']; ?></td>
                                <td style="width:90px">
                                <form name="view<?php echo $i; ?>" action="<?php echo DOMAIN;?>products/updateshopingcart/<?php echo $key;?>" method="post">
                                <input type="text" value="<?php echo $product['sl']; ?>"  name="product6296" value="1" maxlength="3" size="2"/>
                                </form>
                                </td>
                                <td><?php echo number_format( $product['price'],0); ?> VNĐ</td>
                                <td><?php echo number_format($product['total'],0); ?> VNĐ</td>
                                <td style="width:auto;"><span onclick="document.view<?php echo $i; ?>.submit();" class="update">Cập nhật</span></td>
                                <td style="width:60px;"><a class="xoa" href="javascript:confirmDelete('<?php echo DOMAIN;?>products/deleteshopingcart/<?php echo $key;?>')">Xóa</a></td>
                            </tr>
                            <?php $total +=$product['total']; $i++; }} ?>
                    </table>
                     <?php }else{ echo"<b>Không có sản phẩm trong giỏ</b>";}?> 

                    <div class="clear"></div>
                        <div style="margin-top:20px; padding-top:20px; border-top:1px solid #DA884B;">
                        	<div colspan="6" style="line-height:35px; width:auto; margin-right:50px;">
                            <p style="float:left; font-size:18px; margin-right:50px;">Tổng thanh toán: <b><?php echo number_format($total,0); ?> VNĐ</b></p>

                            </div>
                             <div colspan="6" style="width:auto;">
                               <a href="<?php echo DOMAIN?>home"><span style="float:left;"><input type="button" class="btn_order" value="Mua tiếp" onclick="" /></span></a>
                                <span style="float:left; margin-left:40px;"><a href="<?php echo DOMAIN?>lien-he-mua-hang"><input class="btn_order" type="button" value="Thanh toán"/></a></span>
                            </div>
                        </div>
                
            </div>
    </div>
</div>
<div class="clear"></div>
</div>
