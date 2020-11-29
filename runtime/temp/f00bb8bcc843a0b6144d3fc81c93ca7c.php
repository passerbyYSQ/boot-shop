<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\Wamp\www\boot-shop\public/../application/index\view\goods\list.html";i:1606662421;s:63:"D:\Wamp\www\boot-shop\application\index\view\common\footer.html";i:1606568028;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- 不设置的话，手机端不会进行响应式布局 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品列表页</title>

    <!-- 引入图标样式 -->
    <link rel="stylesheet" href="/boot-shop/public/static/lib/iconfont/css/iconfont.css">

    <!-- 引入Bootstrap核心样式文件 -->
    <link rel="stylesheet" href="/boot-shop/public/static/lib/bootstrap4/css/bootstrap.css">

    <!-- 引入自己写的样式 -->
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/base.css">
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/goods_list.css">
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/footer.css">

    <!--站点图标-->
    <!-- ... -->

    <style type="text/css">
    </style>

</head>
<body>
    <div class="top-bar">
        <!-- top-bar 最顶部那一行 -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <ul class="clearfix">
                    	<?php if(empty(\think\Session::get('member')) || ((\think\Session::get('member') instanceof \think\Collection || \think\Session::get('member') instanceof \think\Paginator ) && \think\Session::get('member')->isEmpty())): ?>
                    		<!-- 未登录 -->
	                        <li><a href="<?php echo url('member/login'); ?>">请先登录</a></li>
	                        <li><a href="<?php echo url('member/register'); ?>">免费注册</a></li>
	                    <?php else: ?>
	                    	<!-- 已登录 -->
	                    	<li><a href="#"><?php echo \think\Session::get('member.phone'); ?> | <?php echo \think\Session::get('member.memberName'); ?></a></li>
	                        <li><a href="<?php echo url('member/logout'); ?>" onClick="return confirm('是否确认退出当前账号？');">退出</a></li>
	                    <?php endif; ?>
                    </ul>
                </div>
                <div class="col-md-8 col-12">
                    <ul class="bd-list clearfix">
                        <li><a href="https://blog.csdn.net/qq_43290318">客户服务</a></li>
                        <li><a href="#">我的收藏</a></li>
                        <li><a href="#">我的浏览</a></li>
                        <li><a href="<?php echo url('order/myorder'); ?>">我的订单</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-2">
        <!--  logo + 搜索框      -->
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
                <a href="https://blog.csdn.net/qq_43290318">
                    <img src="/boot-shop/public/static/index/img/logo.png" style="max-height: 92px;">
                </a>
                <a href="https://blog.csdn.net/qq_43290318">
                    <img src="/boot-shop/public/static/index/img/ecsc-join.gif" style="max-height: 92px;">
                </a>
            </div>
            <div class="col-lg-5 col-sm-8 col-12">
                <div class="input-group mt-4">
	            	<input type="text" id="keyword" class="form-control search" placeholder="请输入商品名称关键词"
	                	<?php if(!(empty($conds['goodsName']) || (($conds['goodsName'] instanceof \think\Collection || $conds['goodsName'] instanceof \think\Paginator ) && $conds['goodsName']->isEmpty()))): ?>value="<?php echo $conds['goodsName']; ?>" <?php endif; ?>>
	                <div class="input-group-append">
	                    <button onClick="searchByGoodsName($('#keyword').val())" 
	                     class="btn btn-primary" type="button" id="button-addon2">搜索</button>
	                </div>
	            </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-12">
                <div class="shop-cart mt-4 float-right">
                    <a href="<?php echo url('cart/index'); ?>">
                        <i class="iconfont icon-carts"></i><span>我的购物车</span>
                        <em class=""><b>3</b></em>
                    </a>
                </div>
            </div>
        </div>
        
        <!--   导航栏     -->
        <nav class="navbar navbar-expand-sm navbar-light mt-2">
            <a class="navbar-brand" href="#">全部商品分类</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">首页</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">女人街</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">品牌专区</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">聚划算</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- 条件框 -->
        <div class="card mt-4 condition-box">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                	<div class="condition-title">分类：</div>
                	<!-- 渲染所有分类 -->
                    <?php foreach($cates as $cate): ?>
	                    <div class="custom-control custom-checkbox mb-2">
	                    	<!-- 注意
	                    	1、由于id的唯一性，id要加上cate.id来标识
	                    	2、设置点击事件提交表单
	                    	 -->
	                        <input name="cate[]" id="cate-<?php echo $cate['id']; ?>" value="<?php echo $cate['id']; ?>"  onClick="addCategory(this)"
	                        	<?php if(in_array(($cate['id']), is_array($conds['cates'])?$conds['cates']:explode(',',$conds['cates']))): ?>checked="checked"<?php endif; ?>  
	                         	type="checkbox" class="custom-control-input" >
	                        <label class="custom-control-label" for="cate-<?php echo $cate['id']; ?>"><?php echo $cate['cateName']; ?></label>
	                    </div>
                    <?php endforeach; ?>
                </li>
                <li class="list-group-item">
                    <div class="condition-title mt-1">价格：</div>
                    <div class="price-box">
                        <ul class="clearfix float-left mt-1">
                            <li onClick="setPrice(0, 99)">0 - 99</li>
                            <li onClick="setPrice(100, 499)">100 - 499</li>
                            <li onClick="setPrice(500, 999)">500 - 999</li>
                            <li onClick="setPrice(1000, 4999)">1000 - 4999</li>
                            <li onClick="setPrice(5000, 9999)">5000 - 9999</li>
                        </ul>
                        <div class="form-group float-left d-flex d-inline mb-0 mr-3">
                            <input type="text" id="min" value="<?php echo $conds['minPrice']; ?>" title="最低价"
                            	placeholder="￥" class="form-control form-control-sm"
                            	onkeyup="value=value.replace(/[^\d]/g,'')" 
                            	onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
                            <span class="text-muted mx-2">-</span>
                            <input type="text" id="max" value="<?php echo $conds['maxPrice']; ?>" title="最高价" 
                            	placeholder="￥" class="form-control form-control-sm"
                            	onkeyup="value=value.replace(/[^\d]/g,'')" 
                            	onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
                        </div>
                        <!-- 设置点击事件 -->
                        <button type="button" onClick="setPrice($('#min').val(), $('#max').val())"
                         	class="btn btn-primary btn-sm">确认</button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- 排序方式 -->
        <ul class="list-group list-group-horizontal mt-3 sort-box">
        	<!-- 为了方便使用，自定义变量来接收传过来的参数 -->
        	<?php $field = $conds['sort'][0]; $isDesc = $conds['sort'][1] == 'desc' ? true : false; ?>
        	
            <li class="list-group-item">
                <a href="javascript:void(0);" onClick="setSort('onSaleTime', <?php echo $isDesc; ?>)" >
                    <span>新品</span>
                    <?php if($field == 'onSaleTime'): ?><i class="iconfont ml-1 icon-arrow-<?php if($isDesc == 'true'): ?>down<?php else: ?>up<?php endif; ?>"></i><?php endif; ?></a>
                </a>
            </li>
            <li class="list-group-item">
                <a href="javascript:void(0);" onClick="setSort('salePrice', <?php echo $isDesc; ?>)" >
                    <span>价格</span>
                    <?php if($field == 'salePrice'): ?><i class="iconfont ml-1 icon-arrow-<?php if($isDesc == 'true'): ?>down<?php else: ?>up<?php endif; ?>"></i><?php endif; ?>
                </a>
            </li>
            <li class="list-group-item">
                <a href="javascript:void(0);" onClick="setSort('saleCount', <?php echo $isDesc; ?>)" >
                    <span>销量</span>
                    <?php if($field == 'saleCount'): ?><i class="iconfont icon-arrow-<?php if($isDesc == 'true'): ?>down<?php else: ?>up<?php endif; ?>"></i><?php endif; ?></a>
				</a>
            </li>
        </ul>
		
		<!-- 真正的表单，隐藏不可见。之所以这样做，是因为多个条件的html过多，如果用form
        	来包裹，可能会破坏原有的布局 -->
        <form method="post" action="<?php echo url('goods/list'); ?>" name="listform" id="listForm">
        	<!-- 已勾选的分类的checkbox -->
			<?php foreach($conds['cates'] as $cateId): ?>
				<input type="hidden" name="cate[]" value="<?php echo $cateId; ?>" />
			<?php endforeach; ?>
			
			<input type="hidden" name="goodsName" value="<?php echo $conds['goodsName']; ?>" id="goodsName" /> 
			<input type="hidden" name="minPrice" value="<?php echo $conds['minPrice']; ?>" id="minPrice" /> 
			<input type="hidden" name="maxPrice" value="<?php echo $conds['maxPrice']; ?>" id="maxPrice" /> 
			<!-- 拼接排序方式的value值 -->
			<input type="hidden" name="sort" value="<?php echo $field . ' ' . $conds['sort'][1]; ?>" id="sort"/>
		</form>
	
		<!-- 分页按钮 -->
		<div class="d-flex justify-content-center">
			<?php echo $pageHtml; ?>
		</div>
		
        <!-- 商品列表 -->
        <div class="row mt-3 goods-list">
        	<!-- 渲染商品 -->
        	<?php foreach($goodsList as $goods): ?>
	            <div class="col-md-3 col-sm-6 col-12 mb-4">
	                <div class="card">
	                	<a href="<?php echo url('goods/index'); ?>?id=<?php echo $goods['id']; ?>" target="_blank">
	                		<img src="/boot-shop/public/<?php echo $goods['mainPic']; ?>"  class="card-img-top" alt="..." />
	                	</a>
	                    <div class="card-body">
	                        <div class="goods-num clearfix">
	                            <span class="p-price">¥<?php echo $goods['salePrice']; ?></span>
	                            <span class="sale-count">已售<b><?php echo $goods['saleCount']; ?></b>件</span>
	                        </div>
	                        <p class="card-text text-right text-muted">上架：<?php echo $goods['onSaleTime']; ?></p>
	                        <h6 class="card-title">
	                            <a href="<?php echo url('goods/index'); ?>?id=<?php echo $goods['id']; ?>" target="_blank"><?php echo $goods['goodsName']; ?></a>
	                        </h6>
	                        <div class="btn-group btn-group-sm d-flex flex-fill" role="group" >
	                            <button type="button" class="btn btn-outline-warning">
	                                <i class="iconfont icon-zan-alt"></i>
	                                <span>收藏</span>
	                            </button>
	                            <!-- 加入购物车点击事件 -->
	                            <button type="button" class="btn btn-outline-warning" onClick="addToCart(<?php echo $goods['id']; ?>)" >
	                                <i class="iconfont icon-carts"></i>
	                                <span>加入购物车</span>
	                            </button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	    	<?php endforeach; ?>
        </div>
        
        <!-- 分页按钮 -->
		<div class="d-flex justify-content-center">
			<?php echo $pageHtml; ?>
		</div>
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
    
    <!-- js的顺序不能乱 -->
    <script src="/boot-shop/public/static/lib/jquery/jquery.min.js"></script>
    <!-- bootstrap.min.js依赖jquery -->
    <script src="/boot-shop/public/static/lib/bootstrap4/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		// 根据商品名称关键词搜索
		function searchByGoodsName(goodsName) {
			console.log(goodsName);
			$('#goodsName').val(goodsName);
			$("#listForm").submit();
		}
	
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
			/*
			var regex = /(^[1-9]\d*$)|0/;
			
			if ((min != ' ') && !(regex.test(min)) && (max != '') && !(regex.test(max))) {
				alert('价格必须为整数');
				return false;
			}  else 
				*/
			if (parseInt(min) > parseInt(max)) {
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