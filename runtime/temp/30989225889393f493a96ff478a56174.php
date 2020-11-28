<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\Wamp\www\shop/application/admin\view\login\index.html";i:1593924816;}*/ ?>
﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.4.2
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>YSQ百货 - 后台登录</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/shop/public/static/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/shop/public/static/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/shop/public/static/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="/shop/public/static/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="/shop/public/static/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/shop/public/static/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href=" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <!--  
    <script src="/shop/public/static/assets/js/skins.min.js"></script>
    -->
    
    <!-- 滑块验证 -->
    <link href="/shop/extend/SliderCaptcha/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/shop/extend/SliderCaptcha/disk/slidercaptcha.css" rel="stylesheet" />
    <link href="/shop/public/static/style/css/SliderCaptcha.css" rel="stylesheet" />
    
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
    	<!-- 子绝父相，这个div是验证码的滑块验证码的div的父亲 -->
        <div class="loginbox bg-white" style="position:relative;">
            <div class="loginbox-title">后台登录</div>
            <div class="loginbox-social">
                <div class="social-title ">欢迎YSQ百货后台管理</div>
                <div class="social-buttons">
                    <a href="" >
                        <img alt="" style="height:100%" src="/shop/public/static/style/passerby.jpg">
                    </a>                  
                </div>
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">登录</div>
            </div>
             
            <?php if(!(empty($failMsg) || (($failMsg instanceof \think\Collection || $failMsg instanceof \think\Paginator ) && $failMsg->isEmpty()))): ?>
            <!-- 提示信息 -->
            <div class="alert alert-warning fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <strong>登录失败：</strong><?php echo $failMsg; ?>
            </div>
            <?php endif; ?>
            
            <!-- 登录表单 -->
            <form id='loginForm' method="post" action="<?php echo url('doLogin'); ?>">
	            <div class="loginbox-textbox">
	                <input name="phone" required="true" type="text" class="form-control" placeholder="手机号" value="111" />
	            </div>
	            <div class="loginbox-textbox">
	                <input name="password" type="password" class="form-control" placeholder="密码：123" valu/>
	            </div>
	            <div class="loginbox-forgot">
	                <a href="">忘记密码?</a>
	            </div>
	            <div class="loginbox-submit">
	                <input type="button" onclick="login()" class="btn btn-primary btn-block" value="登录">
	            </div>
            </form>
            <!-- 滑块验证码 start -->
			<div class="slidercaptcha card">
	            <div class="card-header">
	                <span>请完成安全验证!</span>
	            </div>
	            <div class="card-body">
	                <div id="captcha"></div>
	            </div>
	        </div>
	        <!-- 滑块验证码 end -->
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="/shop/public/static/assets/js/jquery.min.js"></script>
    <script src="/shop/public/static/assets/js/bootstrap.min.js"></script>
    <script src="/shop/public/static/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <!--  
    <script src="/shop/public/static/assets/js/beyond.js"></script>
    -->

	<script src="/shop/extend/SliderCaptcha/lib/jquery/jquery.min.js"></script>
    <script src="/shop/extend/SliderCaptcha/lib/twitter-bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/shop/extend/SliderCaptcha/disk/longbow.slidercaptcha.js"></script>
    <script>
		function login() {		
			$(".slidercaptcha").css({display: "block"});
			var $captcha = $('#captcha').sliderCaptcha({
	            repeatIcon: 'fa fa-redo',
	            setSrc: function () {
	                return 'http://imgs.sdgxgz.com/images/Pic' + Math.round(Math.random() * 136) + '.jpg';
	            },			
	            onSuccess: function () {  //成功事件
	            	$("#loginForm").submit();
	            }
	        });		
		}
    </script>
    
</body>
<!--Body Ends-->
</html>
