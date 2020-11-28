<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\Wamp\www\boot-shop\public/../application/index\view\goods\list.html";i:1593848604;s:60:"D:\Wamp\www\boot-shop\application\index\view\common\top.html";i:1594013813;s:61:"D:\Wamp\www\boot-shop\application\index\view\common\cart.html";i:1591879332;s:63:"D:\Wamp\www\boot-shop\application\index\view\common\footer.html";i:1606568028;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YSQ百货 - 商品列表</title>
<link rel="shortcut icon" href="favicon.ico" />
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/base.css" />
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/style.css" />
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/purebox.css" />
<link rel="stylesheet" type="text/css"
	href="/boot-shop/public/static/index/css/quickLinks.css" />
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/suggest.css" />
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/select.css" />
<link rel="stylesheet" type="text/css" href="/boot-shop/public/static/index/css/perfect-scrollbar.min.css" />
<script type="text/javascript" src="/boot-shop/public/static/index/js/jquery-1.9.1.min.js"></script>
<!--  
<script type="text/javascript" src="/boot-shop/public/static/index/js/jquery.json.js"></script>
<script type="text/javascript" src="/boot-shop/public/static/index/js/transport_jquery.js"></script>
-->
<script type="text/javascript">
	//加载效果
	var load_cart_info = '<img src="/boot-shop/public/static/index/img/load/loadGoods.gif" height="108" class="ml100">';
	var load_icon = '<img src="/boot-shop/public/static/index/img/load/load.gif" width="200" height="200">';
</script>
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
				<a href="https://blog.csdn.net/qq_43290318"><img src="/boot-shop/public/static/style/logo1.png" style="height:100%;"/></a>
				<a href="https://blog.csdn.net/qq_43290318"><img src="/boot-shop/public/static/style/ecsc-join.gif" /></a>
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

	<div class="hot-sales">
		<div class="container">
			<div class="w w1390" style="margin-top: 24px;">
				<div class="selector">
					<div class="right-extra" rewrite=0>
						<div class="goods_list">
							<ul class="attr_father">
								<li class="s-line">
									<div class="s-l-wrap brand_img attr_list">
										<div class="s-l-tit brand_name_l">分类：</div>
										<div class="checkbox_items">
											<?php foreach($cates as $cate): ?>
											<div class="checkbox_item">
												<input type="checkbox" <?php if(in_array(($cate['id']), is_array($conds['cates'])?$conds['cates']:explode(',',$conds['cates']))): ?>checked="checked"<?php endif; ?>  
												name="cate[]" class="ui-checkbox" onClick="addCategory(this)"
												value="<?php echo $cate['id']; ?>" id="store-checkbox-<?php echo $cate['id']; ?>">   <!-- 注意id要加上cate.id来标识 -->
												<label class="ui-label" for="store-checkbox-<?php echo $cate['id']; ?>"><?php echo $cate['cateName']; ?></label> 
											</div>
											<?php endforeach; ?>
										</div>
									</div>
								</li>

								<li class="s-line">
									<dl class="s-l-wrap">
										<div class="s-l-tit filter_attr_name">价格：</div>
										<div class="s-l-value attr_son" style="padding-left: 0px;">
											<div class="price_auto fl">
												<div class="price_range">
													<a href="javascript:void(0);" onClick="setPrice(0, 9)">0&nbsp;-&nbsp;9</a>
												</div>
												<div class="price_range">
													<a href="javascript:void(0);" onClick="setPrice(10, 99)">10&nbsp;-&nbsp;99</a>
												</div>
												<div class="price_range">
													<a href="javascript:void(0);" onClick="setPrice(100, 999)">100&nbsp;-&nbsp;999</a>
												</div>
												<div class="price_range">
													<a href="javascript:void(0);" onClick="setPrice(1000, 4999)">1000&nbsp;-&nbsp;4999</a>
												</div>
												<div class="price_range">
													<a href="javascript:void(0);" onClick="setPrice(5000, 9999)">5000&nbsp;-&nbsp;9999</a>
												</div>
											</div>
											<div class="price_auto price_bottom fl">
												<input type="text" title="最低价" id="min" value="<?php echo $conds['minPrice']; ?>"
													placeholder="￥" class="price_class price_min"> <span
													class="price_class span_price_class">-</span> <input
													type="text" title="最高价" placeholder="￥" id="max" value="<?php echo $conds['maxPrice']; ?>"
													class="price_class price_max">
												<button class="price_ok price_class" 
													onClick="setPrice($('#min').val(), $('#max').val())">
													确定
												</button>
											</div>
									</dl>
								</li>

							</ul>
						</div>

					</div>
				</div>
				<div class="filter">
					<div class="filter-wrap">
						<div class="filter-sort">
							<?php $field = $conds['sort'][0]; $isDesc = $conds['sort'][1] == 'desc' ? true : false; ?>
							
							<a href="javascript:void(0);" onClick="setSort('salePrice', <?php echo $isDesc; ?>)">
							价格<?php if($field == 'salePrice'): ?><i class="iconfont icon-arrow-<?php if($isDesc == 'true'): ?>down<?php else: ?>up<?php endif; ?>"></i><?php endif; ?></a>
							
							<a href="javascript:void(0);" onClick="setSort('saleCount', <?php echo $isDesc; ?>)">
							销量<?php if($field == 'saleCount'): ?><i class="iconfont icon-arrow-<?php if($isDesc == 'true'): ?>down<?php else: ?>up<?php endif; ?>"></i><?php endif; ?></a>
							
							<a href="javascript:void(0);" onClick="setSort('onSaleTime', <?php echo $isDesc; ?>)">
							新品<?php if($field == 'onSaleTime'): ?><i class="iconfont icon-arrow-<?php if($isDesc == 'true'): ?>down<?php else: ?>up<?php endif; ?>"></i><?php endif; ?></a>

						</div>
						<div class="filter-range">
							<div class="fprice">
								<form method="post" action="<?php echo url('goods/list'); ?>" class="sort"
									name="listform" id="listForm">
									<?php foreach($conds['cates'] as $cateId): ?>
									<input type="hidden" name="cate[]" value="<?php echo $cateId; ?>"/>
									<?php endforeach; ?>
									
									<input type="hidden" name="goodsName" value="<?php echo $conds['goodsName']; ?>" /> 
									<input type="hidden" name="minPrice" value="<?php echo $conds['minPrice']; ?>" id="minPrice" /> 
									<input type="hidden" name="maxPrice" value="<?php echo $conds['maxPrice']; ?>" id="maxPrice" /> 
									<input type="hidden" name="sort" value="<?php echo $field . ' ' . $conds['sort'][1]; ?>" id="sort"/>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="g-view w">
					<?php echo $pageHtml; ?>
					<div class="goods-list" ectype="gMain" style="width: 100%;">
						<div class="gl-warp gl-warp-large">
							<ul>
								<?php foreach($goodsList as $goods): ?>
								<li class="gl-item">
									<div class="gl-i-wrap" >
										<div class="p-img" >
											<a href="<?php echo url('goods/index'); ?>?id=<?php echo $goods['id']; ?>" target="_blank"><img 
												src="/boot-shop/public/<?php echo $goods['mainPic']; ?>" /></a>
										</div>

										<div class="p-lie">
											<div class="p-price">
												<em>¥</em><?php echo $goods['salePrice']; ?>
											</div>
											<div class="p-num">
												已售<em><?php echo $goods['saleCount']; ?></em>件
											</div>
										</div>
										<div class="p-lie" style="margin:0px;">
											<div class="p-num">
												上架：<?php echo $goods['onSaleTime']; ?>
											</div>
										</div>
										<div class="p-name">
											<a href="#" target="_blank"><?php echo $goods['goodsName']; ?></a>
										</div>
										<div class="p-operate" style="display: flex;">
											<a href="#" class="choose-btn-coll" style="flex: 1;"><i
												class="iconfont icon-zan-alt"></i>收藏</a> 
											<a href="javascript:void(0);" onClick="addToCart(<?php echo $goods['id']; ?>)"
												style="flex: 1;"
												rev="/boot-shop/public/static/index/img/0_thumb_G_1490174925807.jpg"
												data-dialog="addCart_dialog" data-divid="addCartLog"
												data-title="请选择属性" class="addcart"> <i
												class="iconfont icon-carts"></i>加入购物车
											</a>
										</div>

									</div>
								</li>
								<?php endforeach; ?>									
							</ul>							
							<!-- 添加到购物车的动画 -->
							<div id="flyItem" class="fly_item">
								<img src="" width="40" height="40">
							</div>
						</div>
						
					</div>
					<?php echo $pageHtml; ?>
				</div>

				<div class="mui-mbar-tabs">
	<div class="quick_link_mian" data-userid="0">
		<div class="quick_links_panel">
			<div id="quick_links" class="quick_links">
				<ul>
					<li><a href="#"><i class="setting"></i></a>
						<div class="ibar_login_box status_login">
							<div class="avatar_box">
								<p class="avatar_imgbox">
									<img src="/boot-shop/public/static/index/img/touxiang.jpg" width="100"
										height="100" />
								</p>
								<ul class="user_info">
									<li>用户名：暂无</li>
									<li>级&nbsp;别：暂无</li>
								</ul>
							</div>
							<div class="login_btnbox">
								<a href="#" class="login_order">我的订单</a> <a href="#"
									class="login_favorite">我的收藏</a>
							</div>
							<i class="icon_arrow_white"></i>
						</div></li>

					<li id="shopCart"><a href="#" class="cart_list"> <i
							class="message"></i>
							<div class="span">购物车</div> <span class="cart_num">0</span>
					</a></li>
					<li><a href="#" class="mpbtn_order"><i
							class="chongzhi"></i></a>
						<div class="mp_tooltip">
							<font id="mpbtn_money"
								style="font-size: 12px; cursor: pointer;">我的订单</font> <i
								class="icon_arrow_right_black"></i>
						</div></li>

					<li><a href="#" class="mpbtn_collection"><i
							class="wdsc"></i></a>
						<div class="mp_tooltip">
							<font id="mpbtn_wdsc"
								style="font-size: 12px; cursor: pointer;">我的收藏</font> <i
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
					<li class="returnTop"><a href="#" class="return_top"><i
							class="top"></i></a></li>
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
								autocomplete="off" placeholder="请输入您的邮箱帐号"> <a href="#"
								onClick="add_email_list();" class="emp_btn">订阅</a>
						</div>
					</div>
				</div>
			</div>
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

				<!-- 
				<script type="text/javascript" src="/boot-shop/public/static/index/js/utils.js"></script>

				<script type="text/javascript" src="/boot-shop/public/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
				<script type="text/javascript" src="/boot-shop/public/static/index/js/common.js"></script>
				<script type="text/javascript" src="/boot-shop/public/static/index/js/cart_common.js"></script>
				
				<script type="text/javascript" src="/boot-shop/public/static/index/js/parabola.js"></script>
				<script type="text/javascript" src="/boot-shop/public/static/index/js/shopping_flow.js"></script>
				<script type="text/javascript"
					src="/boot-shop/public/static/index/js/cart_quick_links.js"></script>
				<script type="text/javascript"
					src="/boot-shop/public/static/index/js/perfect-scrollbar.min.js"></script>

				<script type="text/javascript" src="/boot-shop/public/static/index/js/jquery.purebox.js"></script>
				
				-->
				<script type="text/javascript">
					// 将商品添加到购物车
					function addToCart(goodsId) {
						//console.log("debug");
						
						$.ajax({
							type: "post",
							url: "<?php echo url('cart/add'); ?>",
							data: {
								goodsId: goodsId,
								count : 1
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
					
					// 添加分类
					function addCategory(cateInput) { // 绝对不能写成this
						// 往隐藏表单中添加一个分类条目
						if ($(cateInput).is(':checked')) {
							$("#listForm").append("<input type=hidden name=cate[] value= "+ $(cateInput).val() + " />");
						} else {
							//console.log('删除');
							$("#listForm").children("input[value=" + $(cateInput).val() + "]").remove();
						}
						// 提交表单
						$("#listForm").submit();
					}
					
					// 检查最低价格和最高价格
					function checkPriceRange(min, max) {
						var regex = /(^[1-9]\d*$)|0/;
						
						if ((min != ' ') && !(regex.test(min)) && (max != '') && !(regex.test(max))) {
							alert('价格必须为整数');
							return false;
						}  else if (parseInt(min) > parseInt(max)) {
							alert('最低价格不能高于最高价格');
							return false;
						} 
						return true;
					}
					
					// 设置价格
					function setPrice(min, max) { // 传递min和max（字符串）
						if (checkPriceRange(min, max)) {
							$("#minPrice").val(min);
							$("#maxPrice").val(max);
							// 提交表单
							$("#listForm").submit();
						}
					}
					
					// 设置某个字段的排序方式
					function setSort(field, isDesc) { // field 需要跟数据库字段名一致（否则，要在服务端转换）
						// 取反
						var type = isDesc ? 'asc' : 'desc';
						$('#sort').val(field + ' ' + type);
						// 提交表单
						$("#listForm").submit();
					}
				
				</script>
</body>
</html>
