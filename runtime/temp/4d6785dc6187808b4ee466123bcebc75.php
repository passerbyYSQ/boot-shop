<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"D:\Wamp\www\shop/application/index\view\order\order.html";i:1593963234;s:58:"D:\Wamp\www\shop\application\index\view\common\footer.html";i:1593847819;}*/ ?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>确认订单</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/quickLinks.css" />

<style>
	.province, .city, .area {
		height: 34px;
		margin-top: 3px;
		margin-right: 8px;
	}
</style>

<script type="text/javascript" src="/shop/public/static/index/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/shop/public/static/index/js/jquery.json.js"></script>
<script type="text/javascript" src="/shop/public/static/index/js/transport_jquery.js"></script>
<script type="text/javascript">
	//加载效果
	var load_cart_info = '<img src="themes/wrzcnet_wygk2019/images/load/loadGoods.gif" class="load" />';
	var load_icon = '<img src="themes/wrzcnet_wygk2019/images/load/load.gif" width="200" height="200" />';
</script>
<link rel="stylesheet" type="text/css"
	href="/shop/public/static/index/css/perfect-scrollbar.min.css" />
</head>

<body class="bg-ligtGary">
	<div class="site-nav" id="site-nav">
		<div class="w w1200">
			<div class="fl">
				<div class="txt-info" id="ECS_MEMBERZONE">
					<?php if(empty(\think\Session::get('member')) || ((\think\Session::get('member') instanceof \think\Collection || \think\Session::get('member') instanceof \think\Paginator ) && \think\Session::get('member')->isEmpty())): ?> <a
						href="<?php echo url('member/login'); ?>" class="link-login red">请登录</a> <a
						href="<?php echo url('member/register'); ?>" class="link-regist">免费注册</a>
					<?php else: ?> <a href="#" class="link-login red">
						<?php echo \think\Session::get('member.phone'); ?> | <?php echo \think\Session::get('member.memberName'); ?>
					</a> <a href="<?php echo url('member/logout'); ?>" class="link-regist"
						onClick="return confirm('是否确认退出当前账号？');">退出</a> <?php endif; ?>
				</div>
			</div>
			<ul class="quick-menu fr">
				<li>
					<div class="dt">
						<a href="#">我的订单</a>
					</div>
				</li>
				<li class="spacer"></li>
				<li>
					<div class="dt">
						<a href="#">我的浏览</a>
					</div>
				</li>
				<li class="spacer"></li>
				<li>
					<div class="dt">
						<a href="#">我的收藏</a>
					</div>
				</li>
				<li class="spacer"></li>
				<li>
					<div class="dt">
						<a href="#">客户服务</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="header header-cart">
		<div class="w w1200">
			<div class="logo">
				<div class="logoImg">
					<a href="https://blog.csdn.net/qq_43290318"><img src="/shop/public/static/style/logo1.png" style="height:100%;"/></a>
					<a href="https://blog.csdn.net/qq_43290318"><img src="/shop/public/static/style/ecsc-join.gif" /></a>
				</div>
				<div class="tit">结算页</div>
			</div>
			<div class="cart-stepflex">
				<div class="cart-step-item cur">
					<span>1.我的购物车</span> <i class="iconfont icon-arrow-right-alt"></i>
				</div>
				<div class="cart-step-item curr">
					<span>2.填写订单信息</span> <i class="iconfont icon-arrow-right-alt"></i>
				</div>
				<div class="cart-step-item ">
					<span>3.成功提交订单</span>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<form action="<?php echo url('order/submit'); ?>" method="post" name="doneTheForm" class="validator" id="theForm">
			<div class="w w1200">
				<div class="checkout-warp">

					<div class="ck-step" id="consignee_list">
						<div class="ck-step-tit">
							<h3>收货人信息</h3>
							<a href="user.php?act=address_list" class="extra-r"
								target="_blank">管理收货人地址</a>
						</div>
						<div class="ck-step-cont" id="consignee-addr">
							<input type="hidden" name="addressId" />
							<div class="consignee-warp">
								<?php echo $allAddress; ?>
								<div class="cs-w-item">
									<a href="javascript:void(0);" class="add-new-address" onClick="showAddressDialog(true)"
										ectype="dialog_checkout">
										<i class="iconfont icon-add-quer"></i><span>添加新地址</span>
									</a>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>




					<div class="ck-step checkout">
						<div class="ck-step-tit">
							<h3>支付方式</h3>
						</div>
						<div class="ck-step-cont">
							<div class="payment-warp">
								<div class="payment-list" ectype="paymentType">

									<div class="p-radio-item payment-item  item-selected"
										data-value='{"type":"cod","payid":"16","allow":""}'>
										<span> <input type="radio" isCod="1" name="payment" checked
											class="ui-radio" value="0" /> 支付宝支付
										</span> <b></b>
									</div>
									<div class="p-radio-item payment-item"
										data-value='{"type":"onlinepay","payid":"15","allow":""}'>
										<span> <input type="radio"  isCod="0"
											name="payment" class="ui-radio" value="1" /> 微信支付
										</span> <b></b>
									</div>
									<div class="p-radio-item payment-item"
										data-value='{"type":"balance","payid":"11","allow":""}'>
										<span> <input type="radio" isCod="0" name="payment"
											class="ui-radio" value="2" />  网上银行
										</span> <b></b>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="ck-step">
						<div class="ck-step-tit">
							<h3>商品信息</h3>
							<a href="<?php echo url('cart/index'); ?>" class="extra-r">返回购物车</a>
						</div>
						<div class="ck-step-cont">
							<div class="ck-goods-warp" id="goods_inventory">

								<div class="ck-goods-list">
									<div class="ck-goods-item" ectype="shoppingList">
										<div class="ck-goods-tit">
											<div class="ck-store">
												<a href="javascript:;" class="shop-name">网软自营</a> <a
													href="javascript:;" id="IM" onclick="openWin(this)"
													ru_id="0" class="p-kefu  p-c-violet" target="_blank"><i
													class="iconfont icon-kefu"></i></a>

											</div>
											<div class="ck-dis-modes">
												<div class="ck-dis-tit">配送方式：</div>
												<span class="ftx-01">暂不支持配送</span> <input type="hidden"
													name="ru_id[]" value="0" /> <input type="hidden"
													name="ru_name[]" value="网软自营" /> <input type="hidden"
													name="shipping[]" class="shipping_0" data-sellerid="0"
													value="0" autocomplete="off" /> <input type="hidden"
													name="shipping_code[]" class="shipping_code_0" value=""
													autocomplete="off" /> <input type="hidden"
													name="shipping_type[]" class="shipping_type_0" value="0"
													autocomplete="off" />
											</div>
										</div>
										<div class="ck-goods-cont">
											<?php $sum = '0'; foreach($items as $item): $sum = $sum + $item['salePrice'] * $item['count']; ?>
											<div class="cg-item last">
												<div class="c-col cg-name">
													<input name="cartIds[]" type="hidden" value="<?php echo $item['cartId']; ?>"> 
														<a href="<?php echo url('goods/index'); ?>?id=<?php echo $item['goodsId']; ?>" target="_blank">
														<div class="p-img">
															<img src="/shop/public/<?php echo $item['mainPic']; ?>" width="48" height="48">
														</div>
														<div class="p-info">
															<div class="p-name"><?php echo $item['goodsName']; ?></div>
														</div>
													</a>
												</div>
												<div class="c-col cg-price">
													<span class="fr cl"><em>¥</em><?php echo $item['salePrice']; ?></span>
												</div>
												<div class="c-col cg-number">x<?php echo $item['count']; ?></div>
												<div class="c-col cg-state">
													<span><?php echo $item['last']>0?'有货' : '售罄'; ?></span>
													<input type="hidden" value="<?php echo $item['last']; ?>" />
												</div>
												<div class="c-col cg-sum">
													<em>¥</em><?php echo $item['salePrice'] * $item['count']; ?>
												</div>
												<div class="cg-item-line"></div>
												<i class="dian"></i>
											</div>
											<?php endforeach; ?>
										
										</div>
									</div>
								</div>
							</div>
							<div class="ck-order-remark">
								<input name="postscript" type="text" id="remarkText"
									maxlength="45" size="15" class="text" placeholder="订单备注 限60个字"
									autocomplete="off"
									onblur="if(this.value==''||this.value=='订单备注 限60个字'){this.value='订单备注 限60个字';this.style.color='#cccccc'}"
									onfocus="if(this.value=='订单备注 限60个字') {this.value='';};this.style.color='#666';">
								<span class="prompt">提示：请勿填写有关支付、收货、发票方面的信息</span>
							</div>
						</div>
					</div>

				</div>
				<div id="ECS_ORDERTOTAL">

					<div class="order-summary">
						<div class="statistic">
							<div class="list">
								<span><em><?php echo $itemCount; ?></em> 件商品，总商品金额：</span> <em class="price"
									id="warePriceId"><em>¥</em><?php echo $sum; ?></em>
							</div>
							<div class="list">
								<span>应付总额：</span> <em class="price-total"><em>¥</em><?php echo $sum; ?></em>
							</div>
						</div>
					</div>

					<div class="checkout-foot" ectype="tfoot-toolbar">
						<div class="w w1200">
							<div class="btn-area">
								<input type="submit" id="submit-done" class="submit-btn"
									value="提交订单">
							</div>
							<div class="d-address">
								<span id="sendAddr">寄送至：广东佛山高明区华南师范大学南海校区</span> <span
									id="sendMobile">收货人：小明&nbsp;&nbsp;18575784345</span>
							</div>
						</div>
					</div>

				</div>

				<input type="hidden" name="user_id" value="73" autocomplete="off" />
				<input type="hidden" name="done_cart_value" value="45"
					autocomplete="off" /> <input type="hidden" name="step"
					value="done" autocomplete="off" /> <input type="hidden"
					name="is_address" value="0" autocomplete="off" />
			</div>
		</form>
	</div>

	<div class="hide">

		<div id="dialog_remove" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">删除商品？</h3>
					<div class="ftx-03">您可以选择移到收藏，或删除商品。</div>
				</div>
			</div>
		</div>

		<div id="dialog_collect" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">移到收藏</h3>
					<div class="ftx-03">移动后选中商品将不在购物车中显示。</div>
				</div>
			</div>
		</div>

		<div id="flow_add_cart" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">请至少选中一件商品！</h3>
				</div>
			</div>
		</div>

		<div id="cart_gift_goods" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04 rem">
						最多领取<em ectype="giftNumber"></em>个商品
					</h3>
				</div>
			</div>
		</div>

		<div id="set_default" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">您确定要设置为默认收货地址吗？</h3>
				</div>
			</div>
		</div>

		<div id="del_address" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">你确认要删除该收货地址吗？</h3>
				</div>
			</div>
		</div>

		<div id="no_address_cart" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">您还没有选择收货地址！</h3>
				</div>
			</div>
		</div>

		<div id="no_goods_cart" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">您的购物车中没有商品！</h3>
				</div>
			</div>
		</div>

		<div id="cart_address_not" class="hide">
			<div class="tip-box icon-box">
				<span class="warn-icon m-icon"></span>
				<div class="item-fore">
					<h3 class="ftx-04">您还没有选择收货地址！</h3>
				</div>
			</div>
		</div>
	</div>
	<div id="new_address" class="pb" 
	style="z-index:100003; width:800px; top:70px; left:50%; margin-left:-400px; display:none;">
		<div class="cboxContent">
			<div class="pb-hd" >
				<a class="pb-x" onClick="closeAddressDialog()">✕</a><span class="pb-title">新增收货人地址</span>
			</div>
			<div class="pb-bd">
				<div class="pb-ct">
					<div class="user-form foreg-form">
						<form action="" method="post" name="addressForm" id="addressForm" class="user-form">
							<div class="form-row">
								<div class="form-label">
									<span class="red">*</span>收货人：
								</div>
								<div class="form-value">
									<input type="text" class="form-input" value="" maxlength="20"
										name="consigneeName" id="consigneeName">
									<div class="form_prompt"></div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-label">
									<span class="red">*</span>手机号码：
								</div>
								<div class="form-value">
									<input type="text" class="form-input" maxlength="11"
										name="mobilePhone" value="" id="mobilePhone"> <span
										class="fl">固定电话：</span> <input type="text" class="form-input"
										maxlength="20" value="" name="telephone" id="telephone">
									<div class="form_prompt"></div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-label form-label-lh">
									<span class="red">*</span>所在地区：
								</div>
								<div id="regionSelect" class="form-value" ectype="regionLinkage">
									<select name="province" id="province" class="province"></select>
									<select name="city" id="city" class="city"></select>
									<select name="area" id="area" class="area"></select>

								</div>
								<div style="color: red; line-height:40px;"></div>
							</div>
							<div class="form-row">
								<div class="form-label">
									<span class="red">*</span>详细地址：
								</div>
								<div class="form-value">
									<input type="text" class="form-input form-input-long"
										name="detail" value="" id="detail">
									<div class="form_prompt"></div>
								</div>
							</div>

							<input name="goods_flow_type" value="101" type="hidden">
							<input name="address_id" value="" type="hidden">
						</form>
					</div>
				</div>
				<div class="tip-box icon-box">
					<div class="pb-ft">
						<a class="pb-btn pb-ok" href="javascript:void(0)" onClick="saveAddress()">保存收货人信息</a>
						<a class="pb-btn pb-cl">取消</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-new">
	<div class="footer-new-top">
		<div class="w w1200">
			<div class="service-list">
				<div class="service-item">
					<i class="f-icon f-icon-qi"></i> <span>七天包退</span>
				</div>
				<div class="service-item">
					<i class="f-icon f-icon-zheng"></i> <span>正品保障</span>
				</div>
				<div class="service-item">
					<i class="f-icon f-icon-hao"></i> <span>好评如潮</span>
				</div>
				<div class="service-item">
					<i class="f-icon f-icon-shan"></i> <span>闪电发货</span>
				</div>
				<div class="service-item">
					<i class="f-icon f-icon-quan"></i> <span>权威荣誉</span>
				</div>
			</div>
			<div class="contact">
				<div class="contact-item contact-item-first">
					<i class="f-icon f-icon-tel"></i><span>XXXX-XXX-XXX</span>
				</div>
				<div class="contact-item">
					<a id="IM" IM_type="dsc" onclick="openWin(this)"
						href="javascript:;" class="btn-ctn"><i
						class="f-icon f-icon-kefu"></i><span>咨询客服</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-new-con">
		<div class="fnc-warp">
			<div class="help-list">
				<div class="help-item">
					<h3>新手上路</h3>
					<ul>
						<li><a href="#" title="售后流程" target="_blank" rel="nofollow">售后流程</a></li>
						<li><a href="#" title="购物流程" target="_blank" rel="nofollow">购物流程</a></li>
						<li><a href="#" title="订购方式" target="_blank" rel="nofollow">订购方式</a></li>
					</ul>
					</dl>
				</div>
				<div class="help-item">
					<h3>配送与支付</h3>
					<ul>
						<li><a href="#" title="货到付款区域" target="_blank" rel="nofollow">货到付款区域</a></li>
						<li><a href="#" title="配送支付智能查询 " target="_blank"
							rel="nofollow">配送支付智能查询</a></li>
						<li><a href="#" title="支付方式说明" target="_blank" rel="nofollow">支付方式说明</a></li>
					</ul>
					</dl>
				</div>
				<div class="help-item">
					<h3>会员中心</h3>
					<ul>
						<li><a href="#" title="资金管理" target="_blank" rel="nofollow">资金管理</a></li>
						<li><a href="#" title="我的收藏" target="_blank" rel="nofollow">我的收藏</a></li>
						<li><a href="#" title="我的订单" target="_blank" rel="nofollow">我的订单</a></li>
					</ul>
					</dl>
				</div>
				<div class="help-item">
					<h3>服务保证</h3>
					<ul>
						<li><a href="#" title="退换货原则" target="_blank" rel="nofollow">退换货原则</a></li>
						<li><a href="#" title="售后服务保证" target="_blank" rel="nofollow">售后服务保证</a></li>
						<li><a href="#" title="产品质量保证 " target="_blank"
							rel="nofollow">产品质量保证</a></li>
					</ul>
					</dl>
				</div>
				<div class="help-item">
					<h3>联系我们</h3>
					<ul>
						<li><a href="#" title="网站故障报告" target="_blank" rel="nofollow">网站故障报告</a></li>
						<li><a href="#" title="选机咨询 " target="_blank" rel="nofollow">选机咨询</a></li>
						<li><a href="#" title="投诉与建议 " target="_blank" rel="nofollow">投诉与建议</a></li>
					</ul>
					</dl>
				</div>

			</div>
			<div class="qr-code">
				<div class="qr-item qr-item-first">
					<div class="code_img">
						<img src="/shop/public/static/style/passerby.jpg">
					</div>
					<div class="code_txt">联系我</div>
				</div>
				<div class="qr-item">
					<div class="code_img">
						<img src="/shop/public/static/style/qqcode.png">
					</div>
					<div class="code_txt">QQ</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-new-bot">
		<div class="w w1200">

			<p class="copyright_links">
				<a href="#" rel="nofollow">首页</a> <span class="spacer"></span> <a
					href="#" rel="nofollow">隐私保护</a> <span class="spacer"></span> <a
					href="https://www.ysqorz.top/" rel="nofollow">联系我们</a> <span class="spacer"></span> <a
					href="#" rel="nofollow">免责条款</a> <span class="spacer"></span> <a
					href="https://www.ysqorz.top/" rel="nofollow">公司简介</a> <span class="spacer"></span> <a
					href="https://www.ysqorz.top/" rel="nofollow">意见反馈</a>
			</p>
			<p style="color:white;">
				<span>Copyright © 2020 <a style="color:white;" href="https://blog.csdn.net/qq_43290318">passerbyYSQ</a>. All Rights Reserved | <a style="color:white;" href="http://www.beian.miit.gov.cn/">粤ICP备20036780号</a></span>
			</p>
			<p style="color:white;">
				<span>Powered by <a style="color:white;" href="https://blog.csdn.net/qq_43290318">passerbyYSQ</a> 1127664027@qq.com</span>
			</p>
			<p class="copyright_auth">&nbsp;</p>
		</div>
	</div>

</div>

	<!--  
	<script type="text/javascript" src="/shop/public/static/index/js/suggest.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/utils.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/warehouse.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/warehouse_area.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/common.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/shopping_flow.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.nyroModal.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/lib_ecmobanFunc.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.purebox.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/region.js"></script>
	-->
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.validation.min.js"></script>
	<script src="/shop/public/static/index/js/jquery.cxselect.min.js"></script>

	<script type="text/javascript">
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
			$.cxSelect.defaults.url = '/shop/public/static/index/json/cityData.min.json';
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
			var isOk1 = $("#addressForm").valid(); // 校验
			var isOk2 = checkRegionSelect(); // 校验
			
			if (isOk1 && isOk2) {
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
							closeAddressDialog();
							$("#consignee-addr .consignee-warp").prepend(res.data);
						} else {
							alert(res.msg);
						}
					}
				});
			}
		}
		
		// 校验省、市、区是否完整
		function checkRegionSelect() {
			$selects = $("#regionSelect>select").not(":disabled");
			//console.log($selects);
			var isOk = true;
			$selects.each(function() {
				//console.log($(this).val());
				if ($(this).val() == 0) {
					isOk = false;
				}
			});			
			$("#regionSelect").next().html(isOk ? '' : '地区信息不完整');
			return isOk;
		}

		// 设置AddressForm的validate
		function validateAddressForm() {
			//console.log($("form[name='addressForm']"));
			
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
			});	
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
