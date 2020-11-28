<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\Wamp\www\shop\public/../application/index\view\cart\cart_list.html";i:1593922133;s:58:"D:\Wamp\www\shop\application\index\view\common\footer.html";i:1593847819;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo \think\Session::get('member.memberName'); ?> - 购物车</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css"
	href="/shop/public/static/index/css/quickLinks.css" />

<script type="text/javascript" src="/shop/public/static/index/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/shop/public/static/index/js/jquery.json.js"></script>
<script type="text/javascript" src="/shop/public/static/index/js/transport_jquery.js"></script>
<script type="text/javascript">
//加载效果
var load_cart_info = '<img src="/shop/public/static/index/img/loadGoods.gif" height="108" class="ml100">';
var load_icon = '<img src="/shop/public/static/index/img/load.gif" width="200" height="200">';
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
						<a href="<?php echo url('order/myorder'); ?>">我的订单</a>
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
				<div class="tit">
					购物车（共有 <em ectype="cartNum"><?php echo $itemCount; ?></em> 件商品）
				</div>
			</div>
			<div class="dsc-search">
				<div class="form">
					<form id="searchForm" method="get" action="<?php echo url('goods/list'); ?>"
						class="search-form">
						<input name="goodsName" type="text" id="keyword"
							class="search-text" <?php if(!(empty($conds['goodsName']) || (($conds['goodsName'] instanceof \think\Collection || $conds['goodsName'] instanceof \think\Paginator ) && $conds['goodsName']->isEmpty()))): ?>value="<?php echo $conds['goodsName']; ?>" <?php endif; ?>/>
						<button type="submit" class="button button-goods">搜商品</button>
					</form>

					<div class="suggestions_box" id="suggestions"
						style="display: none;">
						<div class="suggestions_list" id="auto_suggestions_list">
							&nbsp;</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="w w1200">

			<div class="cart-warp">
				<div class="cart-filter">
					<div class="cart-stepflex">
						<div class="cart-step-item curr">
							<span>1.我的购物车</span> <i class="iconfont icon-arrow-right-alt"></i>
						</div>
						<div class="cart-step-item">
							<span>2.填写订单信息</span> <i class="iconfont icon-arrow-right-alt"></i>
						</div>
						<div class="cart-step-item">
							<span>3.成功提交订单</span>
						</div>
					</div>

				</div>
				<div class="cart-table">
					<div class="cart-head">
						<div class="column c-checkbox">
							<div class="cart-checkbox cart-all-checkbox" ectype="ckList">
								<input type="checkbox" id="cart-selectall" checked
									onChange="checkAll()" class="ui-checkbox checkboxshopAll"
									ectype="ckAll" /> <label for="cart-selectall"
									class="ui-label-14">全选</label>
							</div>
						</div>
						<div class="column c-goods">商品</div>
						<div class="column c-props">&nbsp;</div>
						<div class="column c-price">单价（元）</div>
						<div class="column c-quantity">数量</div>
						<div class="column c-sum">小计</div>
						<div class="column c-action">操作</div>
					</div>
					<div class="cart-tbody" ectype="cartTboy">
						<!-- 商品 -->
						<div class="cart-item" ectype="shopItem">
							<form id="cartForm" method="post" action="<?php echo url('order/index'); ?>">
								<div class="item-list" ectype="itemList">
									<?php foreach($itemList as $item): ?>
									<!-- 商品1 开始 -->
									<div class="item-single">
										<div class="item-item selected" ectype="item">
											<div class="item-form">
												<div class="cell s-checkbox">
													<div class="cart-checkbox" ectype="ckList">
														<input type="checkbox" value="<?php echo $item['cartId']; ?>"
															onChange="checkOne(this)" id="checkItem_<?php echo $item['cartId']; ?>"
															name="checkItem[]" class="ui-checkbox" ectype="ckGoods">
														<label for="checkItem_<?php echo $item['cartId']; ?>" class="ui-label-14">&nbsp;</label>
													</div>
												</div>
												<div class="cell s-goods">
													<div class="goods-item">
														<div class="p-img">
															<a href="#" target="_blank"><img
																src="/shop/public/<?php echo $item['mainPic']; ?>" width="70" height="70"></a>
														</div>
														<div class="item-msg">
															<a href="#" target="_blank"><?php echo $item['goodsName']; ?></a>
															<div class="gds-types"></div>
														</div>
													</div>
												</div>
												<div class="cell s-props">&nbsp;</div>
												<div class="cell s-price">
													<strong id="goods_price_8"><em>¥</em><span
														name="price"><?php echo $item['salePrice']; ?></span></strong>
												</div>
												<div class="cell s-quantity">
													<div class="amount-warp">
														<input type="text" value="<?php echo $item['count']; ?>" name="goodsNum"
															class="text buy-num" ectype="number" defaultnumber="1">
														<div class="a-btn">
															<a href="javascript:void(0)"
																onClick="addNum(this, 1, <?php echo $item['last']; ?>)" class="btn-add"><i
																class="iconfont icon-up"></i></a> <a
																href="javascript:void(0)"
																onclick="addNum(this, -1, <?php echo $item['last']; ?>)"
																class="btn-reduce"><i class="iconfont icon-down"></i></a>
														</div>
														<input type="button" value="更新" style="width: 30px;"
															onClick="requestUpdateCount(<?php echo $item['cartId']; ?>, $(this).siblings('input[name=goodsNum]').val(), this)" />
													</div>
												</div>
												<div class="cell s-sum">
													<strong id="goods_subtotal_8"><font><em>¥</em><span
															name="subtotal"><?php echo $item['count'] * $item['salePrice']; ?></span></font></strong>
												</div>
												<div class="cell s-action">
													<a href="javascript:void(0)"
														onClick="requestDeleteOne(<?php echo $item['cartId']; ?>, this)"
														ectype="cartOperation" class="cart-remove">删除</a> <a
														href="javascript:void(0)" ectype="cartOperation"
														class="cart-store">收藏</a>
												</div>
											</div>
										</div>
									</div>
									<!-- 商品1 结束 -->
									<?php endforeach; ?>
								</div>
							</form>
						</div>

						<!-- 商品结束 -->
					</div>
					<div class="cart-tfoot">
						<div class="cart-toolbar">
							<div class="w w1200">
								<div class="operation">
									<a href="javascript:void(0)" onClick="requestDeleteMore()"
										class="cart-remove-batch" data-dialog="remove_collect_dialog"
										data-divid="cart-remove-batch"
										data-removeurl="ajax_dialog.php?act=delete_cart_goods"
										data-collecturl="ajax_dialog.php?act=drop_to_collect"
										data-title="删除">删除选中的商品</a> <a href="#"
										class="cart-follow-batch" data-dialog="remove_collect_dialog"
										data-divid="cart-collect-batch"
										data-removeurl="ajax_dialog.php?act=delete_cart_goods"
										data-collecturl="ajax_dialog.php?act=drop_to_collect"
										data-title="关注">移到我的收藏</a>
								</div>
								<div class="toolbar-right">
									<div class="comm-right">
										<div class="btn-area">
											<input name="goPay" type="button" class="submit-btn"
												value="提交订单" id="goPay" onClick="document:cartForm.submit()" />
										</div>
										<div class="price-sum" id="total_desc">
											<span class="txt">总价(不含运费)：</span> <span
												class="price sumPrice" id="totalCost" ectype="goods_total"></span>
										</div>
										<div class="reduce-sum">
											<span class="txt">已节省：</span> <span
												class="price totalRePrice" id="save_total_amount"
												ectype="save_total"></span>
										</div>
										<div class="amount-sum">
											已选择<em class="cart_check_num" ectype="cartNum"
												id="selectedCount">0</em>件商品
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
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

	<script type="text/javascript">
		$(function() {
			// 加载页面后全部勾选
			checkAll();

			// 监听数量的输入框，绑定输入框的keyup和afterpaste事件
			$("input[name='goodsNum']").on("keyup afterpaste", function() {
				// 如果输入框输入非数字的字符，立马将该字符替换为空
				var corrected = $(this).val().replace(/[^\d]/g,'');
				if (corrected == '' || corrected == 0) {
					corrected = 1;
				}	
				
				$(this).val(corrected);
				
				/*
				// 服务端更新后，页面才更新
				// 更新小计和总价
				$goodsItem = $(this).parents(".item-single");
				// 单价
				var price = parseFloat($goodsItem.find("span[name='price']").text());
				// 数量
				var num = parseInt($(this).val());
				$goodsItem.find("span[name='subtotal']").html( (price*num).toFixed(2) );
				
				// 如果当前商品勾选了。那么应该也更新总价
				if ($goodsItem.find("input[name='checkItem']").prop("checked")) {
					calTotalCost();
				}
				*/
			});
		});
	
		function checkAll() {
			//console.log(allChk);
			// jquery-1.4.2 没有prop()方法
			// 注意测试，发现1.9.1无法使用attr()操作checked属性
			
			// “全选”这个复选框的状态
			var isSelectedAll = $("#cart-selectall").prop("checked");	
			$items = $("input[name='checkItem[]']");
			// 全部复选框选中
			$items.prop("checked", isSelectedAll);
			// 更改 已勾选复选框的数量
			$("#selectedCount").html(isSelectedAll ? $items.length : 0);
			// 重新计算总价
			calTotalCost();
		}	
		
		function checkOne(cur) {
			// 标志变量：是否已经全部选中
			var isAllSelected = true;
			// 当改变当前复选框的状态时，判断是否所有复选框状已经全部选中
			// 如果是，改变“全选”这个复选框的状态
			$("input[name='checkItem[]']").each(function() {
				if (!$(this).prop("checked")) {
					isAllSelected = false;
				}
			});
			$("#cart-selectall").prop("checked", isAllSelected);
			$("#selectedCount").html($("input[name='checkItem[]']:checked").length);
			// 重新计算总价
			calTotalCost();
		}
		
		// 计算勾选商品的总价
		function calTotalCost() {
			var total = 0;
			$("span[name='price']").each(function(index, element) {
				// 判断是否勾选				
				if ($("input[name='checkItem[]']").eq(index).prop("checked")) {
					var price = parseFloat($(this).text()); // 单价，浮点数
					// 注意不要用[]来取数组的某个元素，那样取出来是html代码，而并非jquery对象
					var num = parseInt($("input[name='goodsNum']").eq(index).val()); // 数量，整数
					total += (price * num);
				}
			});
			//console.log(total);
			$("#totalCost").html(total.toFixed(2));
		}
		
		// 加减商品数量
		function addNum(obj, step, max) { // obj：当前对象  step：要加减的值	max：最大值
			//console.log(num);
			
			$goodsNum = $(obj).parent(".a-btn").siblings("input[name='goodsNum']");
			var cur = parseInt($goodsNum.val()); // 当前的数量
			//console.log(cur);
			var corrected = 0;
			if (step > 0) {
				corrected = cur+step > max ? max : (cur+step);
			} else {
				corrected = cur+step < 1 ? 1 : (cur+step);
			}
			$goodsNum.val(corrected);
			
		}
		
		// 更新小计和总价
		// 服务端更新后，页面才更新
		function updateData(obj) { // obj 是“更新”的按钮
			$goodsItem = $(obj).parents(".item-single");
			// 单价
			var price = parseFloat($goodsItem.find("span[name='price']").text());
			// 数量
			var num = parseInt($goodsItem.find("input[name='goodsNum']").val());
			$goodsItem.find("span[name='subtotal']").html( (price*num).toFixed(2) );
			
			// 如果当前商品勾选了。那么应该也更新总价
			if ($goodsItem.find("input[name='checkItem[]']").prop("checked")) {
				calTotalCost(); // 更新总价
			}
		}
		
		function requestUpdateCount(cartId, newCount, obj) {
			//console.log(newCount);
			$.ajax({
				type: "post",
				url: "<?php echo url('cart/updateNum'); ?>",
				data: {
					cartId: cartId,
					count : newCount
				},
				success: function(res) {
					//console.log(res);
					if (res.status) {
						alert('修改数量成功');
						// 重新计算小计和总价
						updateData(obj);
					} else {
						alert('修改数量失败：' + res.msg);
					}
				}
			});
		}
		
		function requestDeleteOne(cartId, obj) {
			if (confirm('是否确认删除？')) {
				$.ajax({
					type: "post",
					url: "<?php echo url('cart/deleteOne'); ?>",
					data: {
						cartId: cartId
					},
					success: function(res) {
						//console.log(res);
						if (res.status) {
							$(obj).parents(".item-single").remove();
							// 重新计算总价
							calTotalCost();
							// 更改 已勾选复选框的数量
							$("#selectedCount").html($("input[name='checkItem[]']:checked").length);
						} else {
							alert(res.msg);
						}
					}
				});
			}
		}
		
		function requestDeleteMore() {
			if (confirm('是否确认删除购物车中勾选的商品？')) {
				var cartIds = $("input[name='checkItem[]']:checked")
									.map(function() {
										return $(this).val()
									}).get();
				//console.log(cartIds);
				
				$.ajax({
					type: "post",
					url: "<?php echo url('cart/deleteMore'); ?>",
					data: {
						cartIds: cartIds
					},
					success: function(res) {
						console.log(res);
						if (res.status) {
							$("input[name='checkItem[]']:checked").parents(".item-single").remove();
							// 重新计算总价
							calTotalCost();
							// 更改 已勾选复选框的数量
							$("#selectedCount").html($("input[name='checkItem[]']:checked").length);
						} else {
							alert(res.msg);
							window.location.reload();
						}
					}
				});
				
			}
		}
    </script>

</body>
</html>