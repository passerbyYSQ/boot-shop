<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"D:\777\AppServ\www\boot-shop\public/../application/index\view\order\order.html";i:1606666675;s:70:"D:\777\AppServ\www\boot-shop\application\index\view\common\footer.html";i:1606641685;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- 不设置的话，手机端不会进行响应式布局 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>订单界面页</title>

    <!-- 引入图标样式 -->
    <link rel="stylesheet" href="/boot-shop/public/static/lib/iconfont/css/iconfont.css">

    <!-- 引入Bootstrap核心样式文件 -->
    <link rel="stylesheet" href="/boot-shop/public/static/lib/bootstrap4/css/bootstrap.css">


     <!-- 引入自己写的样式 -->
   
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/footer.css">
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/order.css">
    

    <!--站点图标-->
    <!-- ... -->

    <style type="text/css">
        /*选中收货人或支付方式改变样式*/
        .selected{font-weight:bold; background:url('/boot-shop/public/static/index/img/checked.png') no-repeat; background-position: right  bottom}

    </style>

</head>
<body>
    <div class="top-bar">
        <!-- top-bar 最顶部那一行 -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <ul class="clearfix">
                        <li><a href="#">请先登录</a></li>
                        <li><a href="#">免费注册</a></li>
                    </ul>
                </div>
                <div class="col-md-8 col-12">
                    <ul class="bd-list clearfix">
                        <li><a href="#">客户服务</a></li>
                        <li><a href="#">我的收藏</a></li>
                        <li><a href="#">我的浏览</a></li>
                        <li><a href="#">我的订单</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-2 pb-2">
        <!--  logo + orderlogo      -->
        <div class="row">
            <div class="col-md-5 col-12">
                <a href="https://blog.csdn.net/qq_43290318">
                    <img src="/boot-shop/public/static/index/img/logo.png" style="max-height: 92px;">
                </a>
                <a href="https://blog.csdn.net/qq_43290318">
                    <img src="/boot-shop/public/static/index/img/ecsc-join.gif" style="max-height: 92px;">
                </a>
            </div>

            <div class="col-md-7 col-12 ml-auto mb-2">
                <img src="/boot-shop/public/static/index/img/order_head.png" class="img-fluid" alt="">
            </div>
        </div>
        <!--        主体-->
        <form action="<?php echo url('order/submit'); ?>" method="post" name="doneTheForm" class="validator" id="theForm">
        <p class=" my_p mt-2 mb-2  ">填写并核对订单信息</p>
        <div class="link-top"></div>
        <div class="row mb-3 mt-5">
            <div class="col-4 font-weight-bold">收货人信息</div>
            <div class="col-4 ml-auto clearfix " >
                <div class="float-right  new_address">
                    <a data-toggle="modal" data-target="#myModal">
                      新增收货地址+
                    </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="link-body "></div>
        <ul class="list-group list-group-flush " id="Receiver">
        	<?php echo $allAddress; ?>
         
            <li class="list-group-item list-group-item-action">赖旋 广东 佛山市 南海区 狮山镇 南海软件科技园信息大道华南师范大学 183****6947</li>
            <li class="list-group-item list-group-item-action">赖旋 广东 佛山市 南海区 狮山镇 南海软件科技园信息大道华南师范大学 183****6947</li>
            <li class="list-group-item list-group-item-action">赖旋 广东 佛山市 南海区 狮山镇 南海软件科技园信息大道华南师范大学 183****6947</li>
            <li class="list-group-item list-group-item-action">赖旋 广东 佛山市 南海区 狮山镇 南海软件科技园信息大道华南师范大学 183****6947</li>
        </ul>
        <div class="mb-3 mt-5 font-weight-bold">支付方式</div>
        <div class="link-body"></div>
			<ul class="list-group list-group-horizontal-lg" id="Payment">

				<li class="list-group-item">
					<div data-value='{"type":"cod","payid":"16","allow":""}'>
						<span> <input type="hidden" isCod="1" name="payment"
							value="0" /> 支付宝支付
						</span> <b></b>
					</div>
				</li>
				<li class="list-group-item">
					<div data-value='{"type":"onlinepay","payid":"15","allow":""}'>
						<span> <input type="hidden" isCod="0" name="payment"
							value="1" /> 微信支付
						</span> <b></b>
					</div>

				</li>

				<li class="list-group-item">
					<div data-value='{"type":"balance","payid":"11","allow":""}'>
						<span> <input type="hidden" isCod="0" name="payment"
							value="2" /> 网上银行
						</span> <b></b>
					</div>
				</li>

			</ul>
			<div class="row mb-3 mt-5">
            <div class="col-4 font-weight-bold">确认订单信息</div>
            <div class="col-4 ml-auto clearfix " >
                <div class="float-right  return_cart"> <a href="<?php echo url('cart/index'); ?>" class="extra-r">返回购物车</a></span>
                </div>
            </div>
        </div>
			<input type="hidden" name="ru_id[]" value="0" /> <input
				type="hidden" name="ru_name[]" value="网软自营" /> <input type="hidden"
				name="shipping[]" class="shipping_0" data-sellerid="0" value="0"
				autocomplete="off" /> <input type="hidden" name="shipping_code[]"
				class="shipping_code_0" value="" autocomplete="off" /> <input
				type="hidden" name="shipping_type[]" class="shipping_type_0"
				value="0" autocomplete="off" />
			<div class="link-body"></div>
        <ul class="list-group">
        <?php $sum = '0'; foreach($items as $item): $sum = $sum + $item['salePrice'] * $item['count']; ?>
            <li class="list-group-item ">
                <div class="row">
                    <div class="col-md-2 col-2">
                    <input name="cartIds[]" type="hidden" value="<?php echo $item['cartId']; ?>">
                    <a href="<?php echo url('goods/index'); ?>?id=<?php echo $item['goodsId']; ?>" target="_blank">
                    <img src="/boot-shop/public/<?php echo $item['mainPic']; ?>"  style="width: 50px;height: 50px" alt="">
                    </a>
                    </div>
                    <div class="col-md-6 col-6 text-center">
                        <div> <?php echo $item['goodsName']; ?></div>
                    </div>
                    <div class="col-md-1  col-2 text-center">
                        <span>¥<?php echo $item['salePrice']; ?></span></div>
                    <div class="col-md-1 col-2 text-center " >x<?php echo $item['count']; ?></div>
                    <div class="col-md-1 col-12 text-center ">
                        <span class="p-price">¥<?php echo $item['salePrice'] * $item['count']; ?></span></div>
                        <input type="hidden"value="<?php echo $item['last']; ?>" />

                </div>
            </li>
   		<?php endforeach; ?>

				<li class="list-group-item ">
                <div class="row">
                    <div class="col-md-2 col-2"><img src="/boot-shop/public/static/index/img/girl.jpg"  style="width: 50px;height: 50px" alt=""></div>
                    <div class="col-md-6 col-6 text-center">
                        <div> 夏季短袖卫衣t恤男套装运动休闲韩版潮流男装一套搭配帅气两件套</div>
                    </div>
                    <div class="col-md-1  col-2 text-center">
                        <span>¥398.00</span></div>
                    <div class="col-md-1 col-2 text-center " >x2</div>
                    <div class="col-md-1 col-12 text-center ">
                        <span class="p-price">¥398.00</span></div>

                </div>
            </li>
        </ul>

        <div class="row   mt-5 mb-2 mr-2" >
        <div class="input-group col-md-8 col-12  pr-0 ">
			<input name="postscript" type="text" id="remarkText" class="form-control "
									maxlength="45" size="15" class="text" placeholder="订单备注：您最多可以输入60个字"
									autocomplete="off"
									onblur="if(this.value==''||this.value=='订单备注 限60个字'){this.value='订单备注 限60个字';this.style.color='#cccccc'}"
									onfocus="if(this.value=='订单备注 限60个字') {this.value='';};this.style.color='#666';">
	
        </div>
            <div class=" col-md-4 col-12   pl-md-2 pl-4 "  ><span class="my_spantis">提示：请勿填写有关支付、收货、发票方面的信息</span>
            </div>
        </div>


        <div class="clearfix " style="background-color: #F2f2f2">
            <div class="float-right m-2"><?php echo $itemCount; ?>件商品  应付金额： <span class="p-price">¥<?php echo $sum; ?></span>
            </div>
            </div>
        <div class="clearfix" style="background-color: #F2f2f2">
            <div class="float-right m-2">寄送至：广东 佛山市 南海区 狮山镇 南海软件科技园信息大道华南师范大学收货人：赖旋 183****6947
            </div>
        </div>
        <div class="ml-auto clearfix">
            <button class="btn btn-danger float-right m-4" type="submit" >提交订单</button>
        </div>
        </form>


        <!--            主体的界面底部-->
    </div>

	<!-- 引入公共的footer部分 -->
    	<!-- footer部分 -->
    <!-- 灰色横条 -->
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 ">
                    <div class="service-item d-flex justify-content-center">
                        <i class="f-icon f-icon-qi"></i>
                        <span>七天包退</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 ">
                    <div class="service-item d-flex justify-content-center">
                        <i class="f-icon f-icon-zheng"></i>
                        <span>正品保障</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 ">
                    <div class="service-item d-flex justify-content-center">
                        <i class="f-icon f-icon-hao"></i>
                        <span>好评如潮</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 ">
                    <div class="service-item d-flex justify-content-center">
                        <i class="f-icon f-icon-shan"></i>
                        <span>闪电发货</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 ">
                    <div class="service-item d-flex justify-content-center">
                        <i class="f-icon f-icon-quan"></i>
                        <span>权威荣誉</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 ">
                    <div class="service-item d-flex justify-content-center">
                        <i class="f-icon f-icon-kefu"></i>
                        <span>咨询客服</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dark部分 -->
    <div class="footer-body">
        <div class="container">
            <div class="row vertical-list">
                <div class="col-lg-2 col-md-4 col-6 text-center mb-4">
                    <h5>新手上路</h5>
                    <ul>
                        <li><a href="">售后流程</a></li>
                        <li><a href="">购物流程</a></li>
                        <li><a href="">订购方式</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center mb-4">
                    <h5>配送与支付</h5>
                    <ul>
                        <li><a href="">货到付款区域</a></li>
                        <li><a href="">配送支付智能查询</a></li>
                        <li><a href="">支付方式说明</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center mb-4">
                    <h5>服务保证</h5>
                    <ul>
                        <li><a href="">退换货原则</a></li>
                        <li><a href="">售后服务保证</a></li>
                        <li><a href="">产品质量保证</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center mb-4">
                    <h5>联系我们</h5>
                    <ul>
                        <li><a href="">网站故障报告</a></li>
                        <li><a href="">选机咨询</a></li>
                        <li><a href="">投诉与建议</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-2">
                    <div class="qrcode-box">
                        <img src="/boot-shop/public/static/index/img/passerby.jpg" alt="">
                        <div class="qrcode-title">联系我</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-2">
                    <div class="qrcode-box">
                        <img src="/boot-shop/public/static/index/img/scnu_logo.jpg" alt="">
                        <div class="qrcode-title">Logo</div>
                    </div>
                </div>
            </div>
            <!--  分隔线  -->
            <div class="apart-line"></div>
            <ul class="clearfix text-center horizontal-list d-flex justify-content-center">
                <li><a href="#">客户服务</a></li>
                <li><a href="#">我的收藏</a></li>
                <li><a href="#">我的浏览</a></li>
                <li><a href="#">我的订单</a></li>
            </ul>
            <p class="copyright">
                Copyright © 2020 <a href="">passerbyYSQ</a>. All Rights Reserved | <a href=""> 粤ICP备20036780号</a><br>
                Powered by <a href="">passerbyYSQ</a> 1127664027@qq.com
            </p>
        </div>
    </div>
<!--    弹框-->
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">新增收货地址</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 
				<form action="" method="post" name="addressForm" id="addressForm" class="user-form">

                        <div class="row mb-4 mr-2">
                            <div class="col-3 pr-0 my_divtext"style="text-align: right"><span class="my_spantext">收货人：</span></div>
                            <div class="col-9 pl-0"><input type="text" class="form-control" value="" maxlength="20"
										name="consigneeName" id="consigneeName"></div>
                            </div>
                            

                        <div class="row mb-4 mr-2">
                            <div class="col-3 pr-0 my_divtext"style="text-align: right"><span class="my_spantext">手机号码：</span></div>
                            <div class="col-9 pl-0"><input type="text"  maxlength="11"
										name="mobilePhone" value="" id="mobilePhone" class="form-control"></div>
                        <input type="hidden"
										maxlength="20" value="12345678" name="telephone" id="telephone">
                        </div>
                        
                        <div class="row mb-4 mr-2">
                            <div class="col-3 pr-0 my_divtext"style="text-align: right"><span class="my_spantext">所在地区：</span></div>
                            <div class="col-3 pl-0"><input type="text" name="province" id="province" class="form-control"></div>
                            <div class="col-3 pl-0"><input type="text"  name="city" id="city" class="form-control"></div>
                            <div class="col-3 pl-0"><input type="text"  name="area" id="area" class="form-control"></div>
                        </div>
                        <div class="row mb-4 mr-2">
                            <div class="col-3 pr-0 my_divtext"style="text-align: right"><span class="my_spantext">详细地址：</span></div>
                            <div class="col-9 pl-0"><input type="text" class="form-control" name="detail" value="" id="detail"></div>
                        </div>
							<input name="goods_flow_type" value="101" type="hidden">
							<input name="address_id" value="" type="hidden">
                    </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-danger" href="javascript:void(0)" onClick="saveAddress()">保存收货人信息</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    </div>




    <!-- js的顺序不能乱 -->
    <script src="/boot-shop/public/static/lib/jquery/jquery.min.js"></script>
    <!-- popper.min.js依赖jquery -->
    <script src="/boot-shop/public/static/lib/popper/popper.min.js"></script>
    <!-- bootstrap.min.js依赖jquery -->
    <script src="/boot-shop/public/static/lib/bootstrap4/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $("#Receiver li").click(function() {
                $(this).siblings('li').removeClass('selected');  		// 删除其他兄弟元素的样式
                $(this).addClass('selected');                            // 添加当前元素的样式
            });
            $("#Payment li").click(function() {
                $(this).siblings('li').removeClass('selected');  		// 删除其他兄弟元素的样式
                $(this).addClass('selected');                            // 添加当前元素的样式
            });
        });

    	$(function() {
			initCxSelect();
			validateAddressForm();
			changePayWay();
			// 模拟点击，选中第一个地址
			$("#consignee-addr div.cs-w-item:first").click();
		});
		
		// 切换付款方式
		function changePayWay() {
			$(".payment-list>.p-radio-item").on('click', function() {
				$(this).addClass("item-selected");
				$(this).siblings(".item-selected").removeClass("item-selected");
				$(this).find("input[name='payment']").prop("checked", true);
			});
		}
		
		// 切换选中的地址
		function selectAddress(obj, addressId) {
			$(obj).addClass("cs-selected");
			$(obj).siblings(".cs-w-item").removeClass("cs-selected");
			$("input[name='addressId']").val(addressId);
			
			var sendAddr = "寄送至：" + $(obj).find(".item-address").text().replace(/\s+/g, "");
			$("#sendAddr").html(sendAddr);
			
			var sendMobile = "收货人：" + $(obj).find(".username").text() + " " +
						$(obj).find(".contact").eq(0).text();
			$("#sendMobile").html(sendMobile);
		}
		
		// 初始化 省、市、区的选择框
		function initCxSelect() {
			$.cxSelect.defaults.url = '/boot-shop/public/static/index/json/cityData.min.json';
			//console.log($('#regionSelect'));
			$('#regionSelect').cxSelect({
				selects: ['province', 'city', 'area']
			});
		}
		
		// 删除一个地址
		function deleteAddress(addressId, obj) { 
			if (confirm('是否确认删除？')) {
				$.ajax({
					url: "<?php echo url('order/deleteAddress'); ?>",
					type: "post",
					data: {
						addressId: addressId
					},
					success: function(res) {
						if (res.status) {
							$(obj).parents(".cs-w-item").remove();
						} else {
							alert(res.msg);
						}
					}
				});
			}
		}
		
		// 修改收货地址
		function updateAddress() {
			
		}
		
		// 新增新的收货地址
		function saveAddress() {
			//var isOk1 = $("#addressForm").valid(); // 校验
			//var isOk2 = checkRegionSelect(); // 校验 
			
			//if (isOk1 && isOk2) {
				$.ajax({
					url: "<?php echo url('order/addAddress'); ?>",
					type: "post",
					data: {
						consigneeName: $("#consigneeName").val(),
						mobilePhone: $("#mobilePhone").val(),
						telephone: $("#telephone").val(),
						province: $("#province").val(),
						city: $("#city").val(),
						area: $("#area").val(),
						detail: $("#detail").val()
					},
					success: function(res) {
						if (res.status) {
						//	closeAddressDialog();
							$("#consignee-addr .consignee-warp").prepend(res.data);
						} else {
							alert(res.msg);
							console. log(res);
						}
					}
				});
			//}
		}
		
		// 校验省、市、区是否完整
		function checkRegionSelect() {
			/* $selects = $("#regionSelect>select").not(":disabled");
			//console.log($selects);
			var isOk = true;
			$selects.each(function() {
				//console.log($(this).val());
				if ($(this).val() == 0) {
					isOk = false;
				}
			});			
			$("#regionSelect").next().html(isOk ? '' : '地区信息不完整');
			return isOk; */
		}

		// 设置AddressForm的validate
		function validateAddressForm() {
		/* 	//console.log($("form[name='addressForm']"));
			
			$("#addressForm").validate({
				ignore:".ignore",
				rules: {
					consigneeName:{
						required : true,
						maxlength: 16
					}, 
					mobilePhone: {
						required : true,
						isMobile : true
					},
					detail: {
						required : true,
						maxlength: 32
					}
				},
				messages: {
					consigneeName:{
						required : '收货人姓名不能为空',
						maxlength: '收货人姓名不能超过16个字符'
					}, 
					mobilePhone: {
						required : '手机号不能为空',
						isMobile : '手机号码格式错误'
					},
					detail: {
						required : '详细地址不能为空',
						maxlength: '详细地址不能超过32个字符'
					}
				}
			});	 */
		}
		
		
		function showAddressDialog(isAdd) { 
			//$("#new_address .pb-title").html(isAdd ? "新增收货人地址" : "修改收货人地址");
			//$("#new_address a.pb-ok").on("click", isAdd ? saveAddress : updateAddress);
			
			// 回显数据
			if (!isAdd) {
				alert('暂不支持修改，请删除后再新增');
			} else {
				$("#new_address").show();
			}
		}
		
		
		function closeAddressDialog() {
			$("#addressForm").find("input").val('');
			$("#addressForm").find("select").val(0);
			$("#addressForm").find("select:gt(0)").prop("disabled", "disabled");
			$("#new_address").hide();
		}
	
        
        
    </script>


</body>
</html>