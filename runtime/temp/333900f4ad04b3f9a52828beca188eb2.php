<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"D:\Wamp\www\shop/application/index\view\order\my_order.html";i:1593963515;s:55:"D:\Wamp\www\shop\application\index\view\common\top.html";i:1593933169;s:58:"D:\Wamp\www\shop\application\index\view\common\footer.html";i:1593847819;}*/ ?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的订单</title>


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
	var load_cart_info = '<img src="/shop/public/static/index/img/load/loadGoods.gif" class="load" />';
	var load_icon = '<img src="/shop/public/static/index/img/load/load.gif" width="200" height="200" />';
</script>
<link rel="stylesheet" type="text/css" href="/shop/public/static/index/css/user.css">
<link rel="stylesheet" type="text/css"
	href="/shop/public/static/index/css/perfect-scrollbar.min.css" />
<link rel="stylesheet" type="text/css"
	href="/shop/public/static/index/css/calendar.min.css" />
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

	<div class="user-content clearfix">
		<div class="user-side" ectype="userSide">
			<div class="user-perinfo-ny">
				<div class="profile clearfix">
					<div class="avatar">
						<a href="user.php" class="u-pic"> <img
							src="/shop/public/static/index/img/touxiang.jpg" alt="">
						</a>
					</div>
					<div class="name">
						<h2><?php echo \think\Session::get('member.memberName'); ?></h2>
						<h3><?php echo \think\Session::get('member.phone'); ?></h3>
					</div>
				</div>
			</div>
			<div class="user-mod">

				<div class="side-menu">
					<dl>
						<dt>
							<i class="square"></i><span>订单中心</span>
						</dt>
						<dd>
							<p class="current">
								<a href="user.php?act=order_list" target="_self">我的订单</a>
							</p>
							<p>
								<a href="user.php?act=address_list" target="_self">收货地址</a>
							</p>
							<p>
								<a href="user.php?act=booking_list" target="_self">缺货登记</a>
							</p>
							<p>
								<a href="user.php?act=return_list" target="_self">退换货订单</a>
							</p>
						</dd>
					</dl>
					<dl>
						<dt>
							<i class="square"></i><span>会员中心</span>
						</dt>
						<dd>
							<p>
								<a href="user.php?act=profile" target="_self">用户信息</a>
							</p>
							<p>
								<a href="user.php?act=account_safe" target="_self">账户安全</a>
							</p>
							<p>
								<a href="user.php?act=account_bind" target="_self">账号绑定</a>
							</p>
							<p>
								<a href="user.php?act=crowdfunding" target="_self">我的众筹</a>
							</p>
							<p>
								<a href="user.php?act=collection_list" target="_self">收藏/关注</a>
							</p>
							<!--        <p><a href="user.php?act=focus_brand" target="_self">关注品牌</a></p>-->
							<p>
								<a href="user.php?act=message_list" target="_self">我的留言</a>
							</p>
							<p>
								<a href="user.php?act=affiliate" target="_self">我的推荐</a>
							</p>
							<p>
								<a href="user.php?act=comment_list" target="_self">评论/晒单</a>
							</p>
							<p>
								<a href="user.php?act=take_list"> 我的提货</a>
							</p>
							<p>
								<a href="user.php?act=complaint_list"> 交易纠纷</a>
							</p>
							<p>
								<a href="user.php?act=invoice"> 我的发票</a>
							</p>
							<p>
								<a href="user.php?act=illegal_report"> 违规举报</a>
							</p>
						</dd>
					</dl>
					<dl>
						<dt>
							<i class="square"></i><span>账户中心</span>
						</dt>
						<dd>
							<p>
								<a href="user.php?act=bonus" target="_self">我的红包</a>
							</p>
							<p>
								<a href="user.php?act=value_card" target="_self">我的储值卡</a>
							</p>
							<p>
								<a href="user.php?act=coupons" target="_self">我的优惠券</a>
							</p>
							<p>
								<a href="user.php?act=track_packages" target="_self">跟踪包裹</a>
							</p>
							<p>
								<a href="user.php?act=account_log" target="_self">资金管理</a>
							</p>
							<p>
								<a href="user.php?act=baitiao" target="_self">我的白条</a>
							</p>
						</dd>
					</dl>
					<dl>
						<dt>
							<i class="square"></i><span>活动中心</span>
						</dt>
						<dd>
							<p>
								<a href="user.php?act=auction_list" target="_self">拍卖活动</a>
							</p>
							<p>
								<a href="user.php?act=snatch_list" target="_self">夺宝奇兵</a>
							</p>
						</dd>
					</dl>
					<dl>
						<dt>
							<i class="square"></i><span>批发中心</span>
						</dt>
						<dd>
							<p>
								<a href="user.php?act=wholesale_buy" target="_self">我的采购单</a>
							</p>
							<p>
								<a href="user.php?act=wholesale_purchase" target="_self">我的求购单</a>
							</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="user-main" ectype="userMain" data-action="noDefault">
			<div class="user-crumbs hide">
				<span><a href=".">首页</a></span><span class="arrow">></span> <span
					class="finish">用户中心</span>
			</div>
			<div class="user-mod">
				<form id="myOrderForm" method="post" action="<?php echo url('order/myorder'); ?>">
				<div class="user-title">
					<h2>我的订单</h2>
					<input name="status" type="hidden" value="<?php echo $cond['status']; ?>" />
					<ul class="tabs">
						
						<li <?php if($cond['status'] == ''): ?>class="active"<?php endif; ?> onClick="changeStatus('')">
							<a href="javascript:void(0);">全部</a> 
						</li>
						<li <?php if($cond['status'] == '0'): ?>class="active"<?php endif; ?> class="user-count3 " onClick="changeStatus(0)">
							<a href="javascript:void(0);">未付款</a> 
							
						</li>
						<li <?php if($cond['status'] == '1'): ?>class="active"<?php endif; ?> class="user-count1 " onclick="changeStatus(1)">
							<a href="javascript:void(0);">未发货</a> 
							
						</li>
						<li <?php if($cond['status'] == '2'): ?>class="active"<?php endif; ?> class="user-count2 " onclick="changeStatus(2)">
							<a href="javascript:void(0);">未收货</a> 
							
						</li>
						<li <?php if($cond['status'] == '3'): ?>class="active"<?php endif; ?> class="user-count4 " onclick="changeStatus(3)">
							<a href="javascript:void(0);">未评价</a> 
							
						</li>
						<li <?php if($cond['status'] == '4'): ?>class="active"<?php endif; ?> class="user-count4 " onclick="changeStatus(4)">
							<a href="javascript:void(0);">已完成</a> 
						</li>
					</ul>
					
				</div>
				<div class="user-list-title clearfix">
					<input name="period" type="hidden" value="<?php echo $cond['period']; ?>" >
					<div class="user-list-filter">
						<div id="dateTime" class="imitate_select w120">
							<div class="cite">
								<span>全部时间</span><i class="iconfont icon-down"></i>
							</div>
							
							<ul>
								<li data-period=""
								onclick="changePeriod('')"><a href="javascript:void(0);">全部时间</a></li>
								
								<li data-period="today"
								onclick="changePeriod('today')"><a href="javascript:void(0);">今天</a></li>
								
								<li data-period="week"
								onclick="changePeriod('week')"><a href="javascript:void(0);">本周</a></li>
								
								<li data-period="month"
								onclick="changePeriod('month')"><a href="javascript:void(0);">本月</a></li>
							</ul>
						</div>
					</div>
					<div class="user-list-search">
						<input type="text" id="ip_keyword" class="text" value="<?php echo $cond['orderId']; ?>"
							placeholder="订单号搜索" name="orderId" style="color: #999;" />
						<button type="button"
							onclick="$('#myOrderForm').submit();">
							<i class="iconfont icon-search"></i>
						</button>
					</div>
					</form>
				</div>
				<div id="user_order_list">
					<div class="user-order-list user-order-list-special">
						<?php foreach($orderList as $order): ?>
						<dl class="item">
							<dt class="item-t item-t-qb">
								<div class="t-statu">
									<div class="t-statu-name" id="ss_received_19">
										<?php switch($order[0]['status']): case "0": ?>未付款<?php break; case "1": ?>已付款，等待发货<?php break; case "2": ?>已发货，等待确认收货<?php break; case "3": ?>已确认收货，未评价<?php break; endswitch; ?>
									</div>
								</div>
								<div class="t-info">
									<span class="info-item">订单号：<?php echo $order[0]['orderId']; ?></span> 
									<span class="info-item">下单时间：<?php echo $order[0]['createTime']; ?></span> 
									<span class="info-item">支付方式：
										<?php switch($order[0]['payMethod']): case "0": ?>支付宝支付<?php break; case "1": ?>微信支付<?php break; default: ?>网上银行{/case}
										<?php endswitch; ?>
									</span>
								</div>
								<div class="t-info">
									<span class="info-item">收货人：<?php echo $order[0]['consigneeName']; ?></span> 
									<span class="info-item">手机号：<?php echo $order[0]['mobilePhone']; ?></span>
									<span class="info-item">收货地址：<?php echo $order[0]['province']; ?> <?php echo $order[0]['city']; ?> <?php echo $order[0]['area']; ?> &nbsp;&nbsp;<?php echo $order[0]['detail']; ?></span> 
								</div>
								<div class="t-price">
									<em>¥</em><?php echo $order[0]['totalPay']; ?>
								</div>
							</dt>
							<dd class="item-c">
								<div class="c-left">
									<?php foreach($order[1] as $item): ?>
									<div class="c-goods" ectype="c-goods">
										<div class="c-img">
											<a href="<?php echo url('goods/index'); ?>?id=<?php echo $item['goodsId']; ?>"><img src="/shop/public/<?php echo $item['mainPic']; ?>" alt=""></a>
										</div>
										<div class="c-info">
											<div class="o-info-lm">
												<a href="<?php echo url('goods/index'); ?>?id=<?php echo $item['goodsId']; ?>"
													class="info-name" target="_blank"
													title="<?php echo $item['goodsName']; ?>"><?php echo $item['goodsName']; ?></a>
											</div>
											<div class="fl">
												<div class="info-price mr10" style="width: auto;">
													<b><em>¥</em><?php echo $item['salePrice']; ?></b><i>×</i><span><?php echo $item['count']; ?></span>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<div class="c-handle" id="ss_msg_19">
									<?php switch($order[0]['status']): case "0": ?>
										<a onClick="return confirm('是否确认全额支付该订单？');" href="<?php echo url('order/pay'); ?>?orderId=<?php echo $order[0]['orderId']; ?>" class="sc-btn">支付订单</a>
										<a onClick="return confirm('是否删除该订单？');" href="<?php echo url('order/delete'); ?>?orderId=<?php echo $order[0]['orderId']; ?>" class="sc-btn">删除订单</a>
									<?php break; case "2": ?>
										<a onClick="return confirm('是否收货？');" href="<?php echo url('order/receive'); ?>?orderId=<?php echo $order[0]['orderId']; ?>" class="sc-btn">确认收货</a>
									<?php break; case "3": ?>
										<a href="#" class="sc-btn">评价</a>
									<?php break; endswitch; ?>
								</div>
							</dd>
						</dl>
						<?php endforeach; ?>
					</div>

					<div class="pages pages_warp">
						<?php echo $pageHtml; ?>
					</div>

					<script type="text/javascript" src="/shop/public/static/index/js/jquery.yomi.js"></script>

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
	<script type="text/javascript" src="/shop/public/static/index/js/utils.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/common.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.validation.min.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.nyroModal.js"></script>
	<script type="text/javascript"
		src="/shop/public/static/index/js/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/calendar.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/plupload.full.min.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/lib_ecmobanFunc.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/user.js"></script>
	<script type="text/javascript" src="/shop/public/static/index/js/jquery.picTip.js"></script>
	<script type="text/javascript"
		src="/shop/public/static/index/js/jquery.purebox.js"></script>
		
	-->
	
	<script type="text/javascript"
		src="/shop/public/static/index/js/dsc-common.js"></script>

	<script type="text/javascript">
		function changeStatus(newStatus) {
			$("input[name='status']").val(newStatus);
			$("#myOrderForm").submit();
		}
		
		function changePeriod(newPeriod) {
			$("input[name='period']").val(newPeriod);
			$("#myOrderForm").submit();
		}
		
		$(function() {
			$("#dateTime li").each(function() {
				//console.log($(this).attr('data-period'));
				if ($(this).attr('data-period') == '<?php echo $cond['period']; ?>') {
					$("#dateTime>.cite>span").html($(this).text());
				}
			});
			/*
			//tab切换
			$("*[ectype='tabSection']").slide({
				titCell : "*[ectype='tabs'] li",
				mainCell : "*[ectype='tabContent']",
				trigger : "click",
				titOnClassName : "active"
			});

			//查看图片
			$(".nyroModal").nyroModal();
			*/
		});
	</script>

</body>
</html>
