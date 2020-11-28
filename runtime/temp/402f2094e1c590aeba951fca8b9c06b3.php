<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\Wamp\www\shop\public/../application/index\view\goods\goods.html";i:1594213205;s:55:"D:\Wamp\www\shop\application\index\view\common\top.html";i:1594013813;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品详情 - <?php echo $goods['goodsName']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />

<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/quickLinks.css" />


<script type="text/javascript" src="/shop/public/static/index/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/shop/public/static/index/js/jquery.json.js"></script>
<script type="text/javascript" src="/shop/public/static/index/js/transport_jquery.js"></script>

<script type="text/javascript">
	//加载效果
	var load_cart_info = '<img src="/shop/public/static/index/img/loadGoods.gif" height="108" class="ml100">';
	var load_icon = '<img src="/shop/public/static/index/img/load.gif" width="200" height="200">';
</script>
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/goods_fitting.css" />
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/suggest.css" />

</head>
<body>
	<div class="site-nav" id="site-nav">
	<div class="w w1390">
		<div class="fl">
			<div class="txt-info" id="ECS_MEMBERZONE">
				<?php if(empty(\think\Session::get('member')) || ((\think\Session::get('member') instanceof \think\Collection || \think\Session::get('member') instanceof \think\Paginator ) && \think\Session::get('member')->isEmpty())): ?>
					<a href="<?php echo url('member/login'); ?>" class="link-login red">请登录</a> 
					<a href="<?php echo url('member/register'); ?>" class="link-regist">免费注册</a>
				<?php else: ?>
					<a href="#" class="link-login red">
						<?php echo \think\Session::get('member.phone'); ?> | <?php echo \think\Session::get('member.memberName'); ?>
					</a> 
					<a href="<?php echo url('member/logout'); ?>" class="link-regist" 
					onClick="return confirm('是否确认退出当前账号？');">退出</a>
				<?php endif; ?>
				<a style="margin-left:16px;" href="<?php echo url('admin/login/index'); ?>" class="link-regist" 
					>后台登录：http://www.ysqorz.top/admin/login/</a>
				<a style="margin-left:16px;" href="https://www.ysqorz.top/" class="link-regist" 
					>交流反馈：https://www.ysqorz.top/</a>
				<a style="margin-left:16px;" href="https://github.com/passerbyYSQ/shop" class="link-regist" 
					>项目Github：https://github.com/passerbyYSQ/shop</a>
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
					<a href="https://www.ysqorz.top/">客户服务</a>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="header">
	<div class="w w1390">
		<div class="logo">
			<div class="logoImg">
				<a href="https://blog.csdn.net/qq_43290318"><img src="/shop/public/static/style/logo1.png" style="height:100%;"/></a>
				<a href="https://blog.csdn.net/qq_43290318"><img src="/shop/public/static/style/ecsc-join.gif" /></a>
			</div>
		</div>
		<div class="dsc-search">
			<div class="form">
				<form id="searchForm" method="get"
					action="<?php echo url('goods/list'); ?>"class="search-form">
					<input name="goodsName" type="text" id="keyword" class="search-text" <?php if(!(empty($conds['goodsName']) || (($conds['goodsName'] instanceof \think\Collection || $conds['goodsName'] instanceof \think\Paginator ) && $conds['goodsName']->isEmpty()))): ?>value="<?php echo $conds['goodsName']; ?>"<?php endif; ?>/> 
					<button type="submit" class="button button-goods">搜商品</button>
				</form>
				<ul class="keyword">
					<li><a href="#" target="_blank">周大福</a></li>
					<li><a href="#" target="_blank">内衣</a></li>
					<li><a href="#" target="_blank">Five Plus</a></li>
					<li><a href="#" target="_blank">手机</a></li>
				</ul>

				<div class="suggestions_box" id="suggestions" style="display: none;">
					<div class="suggestions_list" id="auto_suggestions_list">&nbsp;</div>
				</div>

			</div>
		</div>
		<div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO"
			data-carteveval="0">
			<div class="shopCart-con dsc-cm">
				<a href="<?php echo url('cart/index'); ?>"> 
					<i class="iconfont icon-carts"></i> <span>我的购物车</span>
					<em class="count cart_num">?</em>
				</a>
			</div>
			<div class="dorpdown-layer" ectype="dorpdownLayer">
				<div class="prompt">
					<div class="nogoods">
						<b></b><span>购物车中还没有商品，赶紧选购吧！</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="nav dsc-zoom">
	<div class="w w1390">
		<div class="categorys site-mast">
			<div class="categorys-type">
				<a href="#" target="_blank">全部商品分类</a>
			</div>
		</div>
		<div class="nav-main" id="nav">
			<ul class="navitems">
				<li><a href="#" class="curr">首页</a></li>
				<li><a href="#">女装街</a></li>
				<li><a href="#">男人柜</a></li>
				<li><a href="#">品牌专区</a></li>
				<li><a href="#">聚划算</a></li>
				<li><a href="#">积分商城</a></li>
			</ul>
		</div>
	</div>
</div>

	<div class="container">
		<div class="w w1200">
			<div class="product-info">

				<div class="preview" if="preview">
					<div class="gallery_wrap">
						<a href="/shop/public/<?php echo $goods['mainPic']; ?>"
							class="MagicZoomPlus" id="Zoomer"
							rel="hint-text: ; selectors-effect: false; selectors-class: img-hover; selectors-change: mouseover; zoom-distance: 10;zoom-width: 400; zoom-height: 474;">
							<img src="/shop/public/<?php echo $goods['mainPic']; ?>" id="J_prodImg" alt="<?php echo $goods['goodsName']; ?>">
						</a>
					</div>
				</div>
				<div class="product-wrap">
					<form action="javascript:addToCart(799)" method="post"
						name="ECS_FORMBUY" id="ECS_FORMBUY">
						<div class="name"><?php echo $goods['goodsName']; ?></div>
						<div class="summary">
							<div class="summary-price-wrap">
								<div class="s-p-w-wrap">
									<div class="summary-item si-shop-price">
										<div class="si-tit">商 城 价</div>
										<div class="si-warp">
											<strong class="shop-price" id="ECS_SHOPPRICE"
												ectype="SHOP_PRICE"><em>¥</em><?php echo $goods['salePrice']; ?></strong> <span
												class="price-notify" data-userid="62" data-goodsid="799"
												ectype="priceNotify">降价通知</span>
										</div>
									</div>
									<div class="summary-item si-market-price">
										<div class="si-tit">市 场 价</div>
										<div class="si-warp">
											<div class="m-price" id="ECS_MARKETPRICE">
												<em>¥</em><?php echo $goods['marketPrice']; ?>
											</div>
										</div>
									</div>
									<div class="si-info">
										<div class="si-cumulative">
											累计评价<em>0</em>
										</div>
										<div class="si-cumulative">
											累计销量<em><?php echo $goods['saleCount']; ?></em>
										</div>
									</div>
									<div class="si-phone-code">
										<div class="qrcode-wrap">
											<div class="qrcode_tit">
												手机购买<i class="iconfont icon-qr-code"></i>
											</div>
											<div class="qrcode_pop">
												<div class="mobile-qrcode">
													<img src="/shop/public/static/style/passerby.jpg" alt="商品二维码"
														title="" width="175">
												</div>
											</div>
										</div>
									</div>

									<div class="clear"></div>
								</div>
							</div>
							<div class="summary-basic-info">

								<div class="summary-item is-service">
									<div class="si-tit">服务</div>
									<div class="si-warp">
										<div class="fl">
											由 <a href="javascript:void(0)" class="link-red">passerbyYSQ</a>
											发货并提供售后服务
										</div>
										<div class="fl pl10" id="user_area_shipping"></div>
									</div>
								</div>

								<div class="summary-item is-number">
									<div class="si-tit">数量</div>
									<div class="si-warp">
										<div class="amount-warp">
											<input class="text buy-num" ectype="quantity" value="1"
											onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onafterpaste="this.value=this.value.replace(/[^\d]/g,'')"
												name="number" defaultnumber="1">
											<div class="a-btn">
												<a href="javascript:addCount(1);" class="btn-add" ectype="btnAdd">
													<i class="iconfont icon-up"></i></a> 
												<a href="javascript:addCount(-1);" class="btn-reduce"
													ectype="btnReduce"><i class="iconfont icon-down"></i></a> 
												<input
													type="hidden" name="perNumber" id="perNumber"
													ectype="perNumber" value="0"> <input type="hidden"
													name="perMinNumber" id="perMinNumber" ectype="perMinNumber"
													value="1">
											</div>
											<input name="confirm_type" id="confirm_type" type="hidden"
												value="3" />
										</div>
										<span>库存&nbsp;<em id="goods_attr_num"
											ectype="goods_attr_num"><?php echo $goods['count']; ?></em>&nbsp;个
										</span>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="choose-btns ml60 clearfix">
								<a href="#" data-type="0"
									class="btn-buynow" ectype="btn-buynow">立即购买</a> 
								<a href="javascript:addToCart(<?php echo \think\Request::instance()->get('id'); ?>);"
									class="btn-append" ectype="btn-append"><i
									class="iconfont icon-carts"></i>加入购物车</a>


							</div>
							<div class="summary-basic-info">
								<div class="summary-item is-service">
									<div class="si-tit">温馨提示</div>
									<div class="si-warp gray">·不支持退换货服务</div>
								</div>
							</div>
							<div class="short-share">
								<div class="short-share-r bar_code hide">
									条形条码：<em id="bar_code"></em>
								</div>
								<div class="left-btn">
									<div class="duibi">
										<a href="javascript:void(0);" id="compareLink"> <input
											type="checkbox" name="" class="ui-checkbox" id="799"
											onClick="Compare.add(this, 799,'韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10','0', '/shop/public/static/index/img/0_thumb_G_1490174858999.jpg', '68', '<em>¥</em>81.60')">
											<label for="799" class="ui-label">对比</label>
										</a>
									</div>
									<a href="javascript:void(0);"
										class="collection choose-btn-coll"
										data-dialog="goods_collect_dialog" data-divid="goods_collect"
										data-url="user.php?act=collect" data-goodsid="799"><i
										class="iconfont choose-btn-icon icon-collection"
										id="collection_iconfont"></i><em>收藏 (<span
											id="collect_count">0</span>)
									</em></a>
									<div class="bdsharebuttonbox"
										style="width: 50px; height: 25px; float: left;">
										<a href="javascript:void(0);" data-cmd="more"
											class="share bds_more"
											style="width: 50px; height: 25px; background: none; margin: 0px 0px 0px 15px; padding: 0px;"><i
											class="iconfont icon-share"></i><em>分享</em></a>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" value="62" id="user_id" name="user_id" /> <input
							type="hidden" value="799" id="good_id" name="good_id" /> <input
							type="hidden" value="2" id="region_id" name="region_id" /> <input
							type="hidden" value="16" id="area_id" name="area_id" /> <input
							type="hidden" value="0" name="street_list" /> <input
							type="hidden" value="0" name="restrictShop" ectype="restrictShop" />
						<input type="hidden" value="1" name="add_shop_price"
							ectype="add_shop_price" />
					</form>
				</div>

				<div class="clear"></div>
			</div>


			<div class="goods-main-layout">

				<div class="g-m-detail" style="margin-left: 0px;">
					<div class="gm-tabbox" ectype="gm-tabs">
						<ul class="gm-tab">
							<li class="curr" ectype="gm-tab-item">商品信息</li>
							<li ectype="gm-tab-item">用户评论（<em class="ReviewsCount">0</em>）
							</li>
							<li ectype="gm-tab-item">网友讨论圈</li>
						</ul>
						<div class="gm-tab-qp-bort" ectype="qp-bort"></div>
					</div>
					<div class="gm-floors" ectype="gm-floors">
						<div class="gm-f-item gm-f-details" ectype="gm-item">
							<div class="gm-title">
								<h3>基本信息</h3>
							</div>
							<div class="goods-para-list">
								<dl class="goods-para">
									<dd class="column">
										<span><b>商品名</b>：<?php echo $goods['goodsName']; ?></span>
									</dd>
									<dd class="column">
										<span><b>所属分类</b>：<?php echo $goods['cateName']; ?></span>
									</dd>
									<dd class="column">
										<span><b>上架时间</b>：<?php echo $goods['onSaleTime']; ?></span>
									</dd>
								</dl>

							</div>
							
							<div class="gm-title">
								<h3>商品详情</h3>
							</div>
							<div class="goods-para-list">
								<?php echo $goods['details']; ?>

							</div>

						</div>
						<div class="gm-f-item gm-f-comment" ectype="gm-item">
							<div class="gm-title">
								<h3>评论晒单</h3>
								<ul class="gm-f-tab" ectype="gmf-tab">
									<li class="curr" rev="0"><a href="javascript:;">全部<em>(0)</em></a></li>
									<li rev="1"><a href="javascript:;">好评<em>(0)</em></a></li>
									<li rev="2"><a href="javascript:;">中评<em>(0)</em></a></li>
									<li rev="3" class="last"><a href="javascript:;">差评<em>(0)</em></a></li>
								</ul>
							</div>
							<div class="gm-warp">
								<div class="praise-rate-warp">
									<div class="rate">
										<strong>100</strong> <span class="rate-span"> <span
											class="tit">好评率</span> <span class="bf">%</span>
										</span>
									</div>
									<div class="actor-new">
										<div class="not_impression">此商品还没有设置买家印象，陪我一起等下嘛~</div>
									</div>
								</div>
								<div class="com-list-main">

									<div id="ECS_COMMENT">
										<div class="no_records no_comments_qt">
											<i class="no_icon no_icon_three"></i> <span class="block">暂无评价</span>
										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="clear"></div>

			</div>

			<div class="hidden">

				<div id="notify_box" class="hide">
					<div class="sale-notice">
						<div class="prompt">一旦商品在30日内降价，您将收到邮件、短信和手机推送消息！通过手机客户端消息提醒，购买更便捷~</div>
						<div class="user-form foreg-form">
							<div class="form-row">
								<div class="form-label">
									<em class="red">*</em>价格低于：
								</div>
								<div class="form-value">
									<input type="text" id="price-notice" name="price-notice"
										class="form-input w120 fl">
									<div class="notic">时，通知我</div>
									<div class="error"></div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-label">
									<em class="red">*</em>手机号码：
								</div>
								<div class="form-value">
									<input type="text" class="form-input" id="cellphone"
										name="cellphone">
									<div class="error"></div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-label">
									<em class="red">*</em>邮箱地址：
								</div>
								<div class="form-value">
									<input type="text" class="form-input" id="user_email_notice"
										name="email">
									<div class="error"></div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="ecsc-cart-popup" id="addtocartdialog">
					<div class="loading-mask"></div>
					<div class="loading">
						<div class="center_pop_txt">
							<div class="title">
								<h3>提示</h3>
								<a href="javascript:loadingClose();" title="关闭"
									class="loading-x">X</a>
							</div>
						</div>
						<div class="btns">
							<a href="flow.php" class="ecsc-btn-mini ecsc-btn-orange">去付款</a>
							<a href="javascript:loadingClose();" class="ecsc-btn-mini">继续购物</a>
						</div>
					</div>
				</div>
			</div>



			<div class="duibi_box" id="slideTxtBox">
				<div class="parWarp">
					<div class="parTit">对比栏</div>
					<div class="parBd">
						<div class="slideBox5" id="duibilan">
							<div id="diff-items" class="diff-items clearfix">
								<dl class="hasItem" id="compare_goods1">
									<dt>
										<h1>1</h1>
									</dt>
									<dd>
										<span class="ts">您还可以继续添加</span>
									</dd>
								</dl>
								<dl class="hasItem" id="compare_goods2">
									<dt>
										<h1>2</h1>
									</dt>
									<dd>
										<span class="ts">您还可以继续添加</span>
									</dd>
								</dl>
								<dl class="hasItem" id="compare_goods3">
									<dt>
										<h1>3</h1>
									</dt>
									<dd>
										<span class="ts">您还可以继续添加</span>
									</dd>
								</dl>
								<dl class="hasItem" id="compare_goods4">
									<dt>
										<h1>4</h1>
									</dt>
									<dd>
										<span class="ts">您还可以继续添加</span>
									</dd>
								</dl>
							</div>
							<div class="diff-operate">
								<a id="compare_button" class="compare-active"></a> <a
									id="qingkong" class="del-items">清空对比栏</a> <a
									href="javascript:;" class="hide-me" ectype="db_hide">隐藏</a>
							</div>
						</div>
					</div>
				</div>
			</div>




			<div class="tm-dl-overlay tm-dl-overlay-hidden">
				<a href="javascript:void('close')" class="tm-dl-overlay-close"><b></b><i></i></a>
				<div class="tm-dl-overlay-content"></div>
			</div>
			<div class="tm-dl-overlay-mask"></div>
		</div>
		<div class="mui-mbar-tabs">
			<div class="quick_link_mian" data-userid="62">
				<div class="quick_links_panel">
					<div id="quick_links" class="quick_links">
						<ul>
							<li><a href="user.php"><i class="setting"></i></a>
								<div class="ibar_login_box status_login">
									<div class="avatar_box">
										<p class="avatar_imgbox">
											<img src="/shop/public/static/index/img/touxiang.jpg" width="100"
												height="100" />
										</p>
										<ul class="user_info">
											<li>用户名：86913361-232247</li>
											<li>级&nbsp;别：铜牌</li>
										</ul>
									</div>
									<div class="login_btnbox">
										<a href="user.php?act=order_list" class="login_order">我的订单</a>
										<a href="user.php?act=collection_list" class="login_favorite">我的收藏</a>
									</div>
									<i class="icon_arrow_white"></i>
								</div></li>

							<li id="shopCart"><a href="javascript:void(0);"
								class="cart_list"> <i class="message"></i>
									<div class="span">购物车</div> <span class="cart_num">1</span>
							</a></li>
							<li><a href="javascript:void(0);" class="mpbtn_order"><i
									class="chongzhi"></i></a>
								<div class="mp_tooltip">
									<font id="mpbtn_money"
										style="font-size: 12px; cursor: pointer;">我的订单</font> <i
										class="icon_arrow_right_black"></i>
								</div></li>
							<li><a href="javascript:void(0);" class="mpbtn_yhq"><i
									class="yhq"></i></a>
								<div class="mp_tooltip">
									<font id="mpbtn_money"
										style="font-size: 12px; cursor: pointer;">优惠券</font> <i
										class="icon_arrow_right_black"></i>
								</div></li>
							<li><a href="javascript:void(0);" class="mpbtn_total"><i
									class="view"></i></a>
								<div class="mp_tooltip" style="visibility: hidden;">
									<font id="mpbtn_myMoney"
										style="font-size: 12px; cursor: pointer;">我的资产</font> <i
										class="icon_arrow_right_black"></i>
								</div></li>
							<li><a href="javascript:void(0);" class="mpbtn_history"><i
									class="zuji"></i></a>
								<div class="mp_tooltip">
									<font id="mpbtn_histroy"
										style="font-size: 12px; cursor: pointer;">我的足迹</font> <i
										class="icon_arrow_right_black"></i>
								</div></li>
							<li><a href="javascript:void(0);" class="mpbtn_collection"><i
									class="wdsc"></i></a>
								<div class="mp_tooltip">
									<font id="mpbtn_wdsc" style="font-size: 12px; cursor: pointer;">我的收藏</font>
									<i class="icon_arrow_right_black"></i>
								</div></li>
							<li><a href="javascript:void(0);" class="mpbtn_email"><i
									class="email"></i></a>
								<div class="mp_tooltip">
									<font id="mpbtn_email"
										style="font-size: 12px; cursor: pointer;">邮箱订阅</font> <i
										class="icon_arrow_right_black"></i>
								</div></li>
						</ul>
					</div>
					<div class="quick_toggle">
						<ul>
							<li><a id="IM" IM_type="dsc" onclick="openWin(this)"
								href="javascript:;"><i class="kfzx"></i></a>
								<div class="mp_tooltip">
									客服中心<i class="icon_arrow_right_black"></i>
								</div></li>
							<li class="returnTop"><a href="javascript:void(0);"
								class="return_top"><i class="top"></i></a></li>
						</ul>

					</div>
				</div>
				<div id="quick_links_pop" class="quick_links_pop"></div>
			</div>
		</div>
		<div class="email_sub">
			<div class="attached_bg"></div>
			<div class="w1200">
				<div class="email_sub_btn">
					<input type="input" id="user_email" name="user_email"
						autocomplete="off" placeholder="请输入您的邮箱帐号"> <a
						href="javascript:void(0);" onClick="add_email_list();"
						class="emp_btn">订阅</a>
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
							<i class="f-icon f-icon-tel"></i><span>4000-000-000</span>
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
								<li><a href="article.php?id=9" title="售后流程" target="_blank"
									rel="nofollow">售后流程</a></li>
								<li><a href="article.php?id=10" title="购物流程"
									target="_blank" rel="nofollow">购物流程</a></li>
								<li><a href="article.php?id=11" title="订购方式"
									target="_blank" rel="nofollow">订购方式</a></li>
							</ul>
							</dl>
						</div>
						<div class="help-item">
							<h3>配送与支付</h3>
							<ul>
								<li><a href="article.php?id=15" title="货到付款区域"
									target="_blank" rel="nofollow">货到付款区域</a></li>
								<li><a href="article.php?id=16" title="配送支付智能查询 "
									target="_blank" rel="nofollow">配送支付智能查询</a></li>
								<li><a href="article.php?id=17" title="支付方式说明"
									target="_blank" rel="nofollow">支付方式说明</a></li>
							</ul>
							</dl>
						</div>
						<div class="help-item">
							<h3>会员中心</h3>
							<ul>
								<li><a href="article.php?id=18" title="资金管理"
									target="_blank" rel="nofollow">资金管理</a></li>
								<li><a href="article.php?id=19" title="我的收藏"
									target="_blank" rel="nofollow">我的收藏</a></li>
								<li><a href="article.php?id=20" title="我的订单"
									target="_blank" rel="nofollow">我的订单</a></li>
							</ul>
							</dl>
						</div>
						<div class="help-item">
							<h3>服务保证</h3>
							<ul>
								<li><a href="article.php?id=21" title="退换货原则"
									target="_blank" rel="nofollow">退换货原则</a></li>
								<li><a href="article.php?id=22" title="售后服务保证"
									target="_blank" rel="nofollow">售后服务保证</a></li>
								<li><a href="article.php?id=23" title="产品质量保证 "
									target="_blank" rel="nofollow">产品质量保证</a></li>
							</ul>
							</dl>
						</div>
						<div class="help-item">
							<h3>联系我们</h3>
							<ul>
								<li><a href="article.php?id=24" title="网站故障报告"
									target="_blank" rel="nofollow">网站故障报告</a></li>
								<li><a href="article.php?id=25" title="选机咨询 "
									target="_blank" rel="nofollow">选机咨询</a></li>
								<li><a href="article.php?id=26" title="投诉与建议 "
									target="_blank" rel="nofollow">投诉与建议</a></li>
							</ul>
							</dl>
						</div>

					</div>
					<div class="qr-code">
						<div class="qr-item qr-item-first">
							<div class="code_img">
								<img src="/shop/public/static/index/img/ecjia_qrcode.png">
							</div>
							<div class="code_txt">官方网址</div>
						</div>
						<div class="qr-item">
							<div class="code_img">
								<img src="/shop/public/static/index/img/ectouch_qrcode.png">
							</div>
							<div class="code_txt">在线课程</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-new-bot">
				<div class="w w1200">

					<p class="copyright_links">
						<a href="index.php" rel="nofollow">首页</a> <span class="spacer"></span>

						<a href="article.php?id=2" rel="nofollow">隐私保护</a> <span
							class="spacer"></span> <a href="article.php?id=4" rel="nofollow">联系我们</a>

						<span class="spacer"></span> <a href="article.php?id=1"
							rel="nofollow">免责条款</a> <span class="spacer"></span> <a
							href="article.php?id=5" rel="nofollow">公司简介</a> <span
							class="spacer"></span> <a href="message.php" rel="nofollow">意见反馈</a>

					</p>

					<p>
						<span>©&nbsp;2015-2017&nbsp;tongpankt.com&nbsp;版权所有&nbsp;&nbsp;</span><span>ICP备案证书号:</span><a
							href="#">豫ICP备*****号-1</a>&nbsp;<a href="#">POWERED by童攀课堂</a>
					</p>

					<p class="copyright_auth">&nbsp;</p>
				</div>
			</div>


			<div class="hide" id="pd_coupons">
				<span class="success-icon m-icon"></span>
				<div class="item-fore">
					<h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
					<div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
				</div>
			</div>


			<div class="hidden">
				<input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
				<input type="hidden" name="seller_kf_qq" value="349488953" /> <input
					type="hidden" name="seller_kf_tel" value="4000-000-000" /> <input
					type="hidden" name="user_id" value="62" />
			</div>
		</div>

		
		<script type="text/javascript" src="/shop/public/static/index/js/utils.js"></script>
		 
		<script type="text/javascript" src="/shop/public/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
		<script type="text/javascript" src="/shop/public/static/index/js/jquery.yomi.js"></script>
		
		<script type="text/javascript" src="/shop/public/static/index/js/cart_common.js"></script>
		<script type="text/javascript" src="/shop/public/static/index/js/magiczoomplus.js"></script>
		<!--
		<script type="text/javascript" src="/shop/public/static/index/js/cart_quick_links.js"></script>
		<script type="text/javascript" src="/shop/public/static/index/js/perfect-scrollbar.min.js"></script>
				
		<script type="text/javascript" src="/shop/public/static/index/js/jquery.purebox.js"></script>
		<script type="text/javascript" src="/shop/public/static/index/js/goodsFittings.js"></script>
		 -->
		<script type="text/javascript">
		
			function addToCart(goodsId) {
				// 将商品添加到购物车
				//console.log("debug");
				// 做一个判断
				var count = $(".buy-num").val()
				var max = <?php echo $goods['count']; ?>;
				
				console.log(count);
				if (parseInt(count) > max) {
					$(".buy-num").val(max)
					//console.log(1);
				} else if (count == 0) {
					$(".buy-num").val(1);
					//console.log(2);
				} else {
					//console.log(3);
					$.ajax({
						type: "post",
						url: "<?php echo url('cart/add'); ?>",
						data: {
							goodsId: goodsId,
							count : count
						},
						success: function(res) {
							//console.log(res);
							if (res.status) {
								alert('加入购物车成功');
							} else {
								alert('加入购物车失败：' + res.msg);
							}
							
						}
					});
				}
			}
			
			function addCount(num) {
				//console.log(num);
				var max = <?php echo $goods['count']; ?>; // 库存
				var cur = parseInt($(".buy-num").val());
				if (num > 0) {
					$(".buy-num").val(cur+num > max ? max : (cur+num));
				} else {
					$(".buy-num").val(cur+num < 1 ? 1 : (cur+num));
				}
			}
			
		</script>
</body>
</html>
