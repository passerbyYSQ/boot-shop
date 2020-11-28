<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\Wamp\www\boot-shop\public/../application/index\view\member\register.html";i:1606568052;s:63:"D:\Wamp\www\boot-shop\application\index\view\common\footer.html";i:1606568028;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- 不设置的话，手机端不会进行响应式布局 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册页</title>

    <!-- 引入Bootstrap核心样式文件 -->
    <link rel="stylesheet" href="/boot-shop/public/static/lib/bootstrap4/css/bootstrap.css">
    <!-- 引入自己写的样式 -->
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/base.css">
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/footer.css">
    <link rel="stylesheet" href="/boot-shop/public/static/index/css/register.css">

</head>
<body>
    <div class="container">
        <!--  logo + 搜索框      -->
        <!--  logo + 搜索框      -->
        <div class="row mt-2">
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
                    <input type="text" class="form-control search" placeholder="请输入商品名称关键词">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">搜索</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-12">
                <div class="shop-cart mt-4 float-right to-login">
                    <a href="#">已有账号，去&nbsp;<em><b>登录</b></em></a>
                </div>
            </div>
        </div>

        <!--   导航栏     -->
        <nav class="navbar navbar-expand-sm navbar-light mt-2 mb-4">
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

        <!-- 中间主体部分 -->
        <div class="card my-4">
            <div class="card-body">
                <div class="row">
                    <!-- 左侧 图片 -->
                    <!-- 小屏 和 超小屏幕下隐藏 -->
                    <div class="col-md-6 col-12 pt-md-5">
                        <img src="/boot-shop/public/static/index/img/register_bg.jpg" class="left-bg mt-md-5" alt="">
                    </div>
                    <!-- 右侧注册表单 -->
                    <div class="col-md-4 offset-md-1 col-12 px-4">
                        <h4 class="title">欢迎注册EasyMall</h4>
                        <form id="registerForm" action="<?php echo url('member/register'); ?>" method="post" onSubmit="return false;">
                            <div class="form-group">
                                <label for="username">用户名</label>
                                <span class="error-msg"></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="用户名">
                            </div>
                            <div class="form-group">
                                <label for="password">密码</label>
                                <span class="error-msg"></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="密码">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">确认密码</label>
                                <span class="error-msg"></span>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="重新输入密码">
                            </div>
                            <div class="form-group">
                                <label for="phone">手机</label>
                                <span class="error-msg"></span>
                                <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="手机号">
                            </div>
                            <div class="form-group">
                                <label for="captcha">验证码</label>
                                <span class="error-msg"></span>
                                <div class="input-group mb-3">
                                    <input type="text" maxlength="4" class="form-control" id="captcha" name="captcha" placeholder="验证码">
                                    <div class="input-group-append">
                                    	<!-- 修改验证码的请求路径 -->
                                        <img src="<?php echo captcha_src(); ?>" onClick="this.src='<?php echo captcha_src(); ?>'" class="captcha" >
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success register-btn">注&nbsp;&nbsp;册</button>
                        </form>
                    </div>
                </div>
            </div>
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
    <!-- 表单验证插件 -->
    <script src="/boot-shop/public/static/lib/jquery/jquery.validation.min.js"></script>
    <!-- bootstrap.min.js依赖jquery -->
    <script src="/boot-shop/public/static/lib/bootstrap4/js/bootstrap.min.js"></script>
    
    <!-- 为了避免浏览器缓存静态资源文件，就不把自定义的js放到单独的js文件了，
    	直接写在<script>标签中 -->
   	<script type="text/javascript">

   	$(function() {
   		// 注册表单验证
   		$("#registerForm").validate({
   			// 表单验证成功通过后的回调
   			submitHandler: function(form) {
   				//console.log(form);
   				form.submit();
   			},
   			// 错误提示
   			errorPlacement: function(error, element) { // 错误信息，input表单项
   				// 设置输入框的错误样式
   				element.addClass('is-invalid');
   				// 找到输入框的含有form-group样式的祖先元素div。parents()找祖先元素，parent()找直接父亲元素
   				var parentDiv = element.parents('div.form-group')
   				// 找到装信息提示的span
   				var errorMsgSpan = parentDiv.find('span.error-msg');
   				// 设置错误信息提示
   				errorMsgSpan.html(error); 
   			},
   			// 成功时，移除
   			success: function(element) { // 注意这里回调过来的并不是输入框，而是label 
   				//console.log(element);
   				// 找到输入框的含有form-group样式的祖先元素div。parents()找祖先元素，parent()找直接父亲元素
   				var parentDiv = element.parents('div.form-group')
   				// 找到装信息提示的span
   				var errorMsgSpan = parentDiv.find('span.error-msg');
   				// 找到输入框
   				var input = parentDiv.find('input');
   				// 移除错误信息提示
   				errorMsgSpan.html(''); 
   				// 重置输入框样式
   				input.removeClass('is-invalid');
   				input.addClass('is-valid');
   			},
   			ignore: ".ignore",
   			// 表单验证规则
   			rules: {
   				username: {
   					required: true,
   					rangelength: [3, 32],  // 字符长度
   					remote: {
   						cache: false,
   						async: true,
   						type: 'POST',
   						url: "<?php echo url('member/isMemberNameExist'); ?>",
   						data: { // 请求所需的参数列表
   							username: function() {
   								return $('#username').val();
   							}
   						},
   						// 由于remote需要的返回值是布尔值（false表示不通过），而实际返回值是一个封装对象
   						// 所以需要dataFilter对返回的封装对象进行预处理，并给remote返回所需的布尔值
   						dataFilter: function(jsonStr, type) {
   							console.log(jsonStr);
   							console.log(typeof(jsonStr));
   							// 接口返回一个字符串，"true"(是不存在)
   							return jsonStr === 'true';
   						}
   					}
   				},
   				password: {
   					required: true,
   					rangelength: [3, 32]  // 字符长度
   				},
   				confirmPassword: {
   					required: true,
   					equalTo: '#password'
   				},
   				mobile_phone: { 
   					required: true,
   					isMobile: true,
   					remote: {
   						cache: false,
   						async: true,
   						type: 'POST',
   						url: "<?php echo url('member/isPhoneExist'); ?>",
   						data: { // 请求所需的参数列表
   							mobile_phone: function() {
   								return $('#mobile_phone').val();
   							}
   						},
   						// 由于remote需要的返回值是布尔值（false表示不通过），而实际返回值是一个封装对象
   						// 所以需要dataFilter对返回的封装对象进行预处理，并给remote返回所需的布尔值
   						dataFilter: function(jsonStr, type) {
   							return jsonStr === 'true';
   						}
   					}
   				},
   				captcha: {
   					required: true,
   					remote: {
   						cache: false,
   						async: true,
   						type: 'POST',
   						url: "<?php echo url('member/checkCaptcha'); ?>",
   						data: { // 提交给服务端的数据（键值对）
   							captcha: function() {
   								return $('#captcha').val();
   							}
   						},
   						dataFilter: function(jsonStr, type) {
   							// jsonStr是'true'表示验证码正确
   							return jsonStr === 'true'; 
   						}
   					}
   				}
   			},
   			messages: { // 与验证规则一一对应的消息提示
   				username: { 
   					required: '用户名不能为空',
   					rangelength: '用户名长度在3到32个字符',
   					remote: '该用户名已被注册',
   				},
   				password: {
   					required: '密码不能为空',
   					rangelength: '密码长度在3到32个字符' 
   				},
   				confirmPassword: {
   					required: '请再次输入密码',
   					equalTo: '两次输入的密码不一致'
   				},
   				mobile_phone: {
   					required: '请输入手机号',
   					isMobile: '请输入正确的手机号',
   					remote: '该手机号已被注册'
   				},
   				captcha: {
   					required: '验证码不能为空',
   					remote: '验证码错误'
   				}
   			},
   			onkeyup: function(element, event) {
   				var name = $(element).attr("name");
   				if (name == "captcha") {
   					//不可去除，当是验证码输入必须失去焦点才可以验证（错误刷新验证码）
   					return false;
   				}
   			}
   		});
   	});
   	</script>
    
</body>
</html>