<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\Wamp\www\shop\public/../application/admin\view\category\update.html";i:1590637677;s:24:"common/admin/navbar.html";i:1590504722;s:25:"common/admin/sidebar.html";i:1590637702;}*/ ?>
<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.4.2
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="Dashboard" />
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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
    <!--Beyond styles-->
    <link id="beyond-link" href="/shop/public/static/assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
    <link href="/shop/public/static/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/shop/public/static/assets/css/typicons.min.css" rel="stylesheet" />
    <link href="/shop/public/static/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support -->
    <script src="/shop/public/static/assets/js/skins.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    
    <!-- Navbar -->
    <!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left"  >
                <a href="#" class="navbar-brand" style="line-height: initial;">    
                        	<small>商城后台管理</small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                <i class="icon fa fa-envelope"></i>
                                <span class="badge">3</span>
                            </a>
                            <!--Messages Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                <li>
                                    <a href="#">
                                        <img src="/shop/public/static/assets/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                        <div class="message">
                                            <span class="message-sender">
                                                Divyia Austin
                                            </span>
                                            <span class="message-time">
                                                2 minutes ago
                                            </span>
                                            <span class="message-subject">
                                                Here's the recipe for apple pie
                                            </span>
                                            <span class="message-body">
                                                to identify the sending application when the senders image is shown for the main icon
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/shop/public/static/assets/img/avatars/bing.png" class="message-avatar" alt="Microsoft Bing">
                                        <div class="message">
                                            <span class="message-sender">
                                                Bing.com
                                            </span>
                                            <span class="message-time">
                                                Yesterday
                                            </span>
                                            <span class="message-subject">
                                                Bing Newsletter: The January Issue‏
                                            </span>
                                            <span class="message-body">
                                                Discover new music just in time for the Grammy® Awards.
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/shop/public/static/assets/img/avatars/adam-jansen.jpg" class="message-avatar" alt="Divyia Austin">
                                        <div class="message">
                                            <span class="message-sender">
                                                Nicolas
                                            </span>
                                            <span class="message-time">
                                                Friday, September 22
                                            </span>
                                            <span class="message-subject">
                                                New 4K Cameras
                                            </span>
                                            <span class="message-body">
                                                The 4K revolution has come over the horizon and is reaching the general populous
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!--/Messages Dropdown-->
                        </li>

                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/shop/public/static/assets/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="email"><a>David.Stevenson@live.com</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="/shop/public/static/assets/img/avatars/adam-jansen.jpg" class="avatar">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">Profile</a>
                                    <a href="#" class="pull-right">Setting</a>
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="/shop/public/static/assets/css/skins/blue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="/shop/public/static/assets/css/skins/azure.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="/shop/public/static/assets/css/skins/teal.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="/shop/public/static/assets/css/skins/green.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="/shop/public/static/assets/css/skins/orange.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="/shop/public/static/assets/css/skins/pink.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="/shop/public/static/assets/css/skins/darkred.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="/shop/public/static/assets/css/skins/purple.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="/shop/public/static/assets/css/skins/darkblue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="/shop/public/static/assets/css/skins/gray.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="/shop/public/static/assets/css/skins/black.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="/shop/public/static/assets/css/skins/deepblue.min.css"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->


    <!-- /Navbar -->
    
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">

			<?php $menu = 'category'; $submenu = ''; ?>
			
            <!-- Page Sidebar -->
			<!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        
        <!--UI Elements-->
        <li <?php if($menu == 'category'): ?>class="open"<?php endif; ?>>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> 商品类别 </span>
                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li <?php if($submenu == 'add'): ?>class="active"<?php endif; ?>>
                    <a href="<?php echo url('add'); ?>">
                        <span class="menu-text">添加</span>
                    </a>
                </li>
                <li <?php if($submenu == 'list'): ?>class="active"<?php endif; ?>>
                    <a href="<?php echo url('list'); ?>" class="menu-dropdown">
                        <span class="menu-text">列表</span>
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->			
			<!-- /Page Sidebar -->
			
            <!-- Chat Bar -->
            <div id="chatbar" class="page-chatbar">
                <div class="chatbar-contacts">
                    <div class="contacts-search">
                        <input type="text" class="searchinput" placeholder="Search Contacts" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Your Contacts and Chat History</div>
                    </div>
                    <ul class="contacts-list">
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/Nicolai-Larson.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Adam Johnson</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">left 4 mins ago</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/John-Smith.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">John Smith</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    1:57 am
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/Osvaldus-Valutis.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Osvaldus Valutis</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/Javi-Jimenez.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Javi Jimenez</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/Stephanie-Walter.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Stephanie Walter</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    yesterday
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/Sergey-Azovskiy.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Sergey Azovskiy</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">offline since oct 24</div>
                                </div>
                                <div class="last-chat-time">
                                    22 oct
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/Lee-Munroe.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Lee Munroe</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="/shop/public/static/assets/img/avatars/divyia.jpg" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chatbar-messages" style="display: none;">
                    <div class="messages-contact">
                        <div class="contact-avatar">
                            <img src="/shop/public/static/assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                a moment ago
                            </div>
                            <div class="back">
                                <i class="fa fa-arrow-circle-left"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="messages-list">
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                    </ul>
                    <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                
                <!-- Page Header -->
                <div class="page-header position-relative"  style="line-height: 40px;">
                	<ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>
                    
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                   
                <div class="dashboard-box" style="margin:16px;padding:16px">
                    <div class="collapse in">
                        <form id="updateCateForm" role="form" action="<?php echo url('update'); ?>" method="post">
                        	<input type="hidden" name="cateId" value="<?php echo $cate['id']; ?>"/>
                        	<div class="row">
                        		<div class="col-lg-4 col-md-6 col-sm-8">
		                            <div class="form-group">
		                                <label for="definpu">类别名称</label>
		                                <input value="<?php echo $cate['cateName']; ?>"
		                                name="cateName" type="text" class="form-control" id="definput" placeholder="类别名称必填">
		                            </div>
	                            </div>
                            </div>
                            <div class="row">
                        		<div class="col-lg-6 col-md-8 col-sm-10">
		                            <div class="form-group" >
		                                <label for="exampleInputEmail2">描述</label>
		                                <textarea name="cateDesc" class="form-control" rows="10" placeholder="描述可为空" ><?php echo $cate['cateDesc']; ?></textarea>
		                            </div>
                            	</div>
                            </div>
                            
                            <div class="row">
								<div class="col-lg-2 col-sm-4">
									<label for="exampleInputEmail2">排序</label>
	                                 <div class="spinbox spinbox-horizontal spinbox-two-sided">
	                                     <div class="spinbox-buttons	btn-group spinbox-buttons-left">
	                                         <button type="button" class="btn spinbox-down danger">
	                                             <i class="fa fa-minus"></i>
	                                         </button>
	                                     </div>
	                                     <input value="<?php echo $cate['sort']; ?>"
	                                     name="sort" value="0" type="text" class="spinbox-input form-control">
	                                     <div class="spinbox-buttons	btn-group spinbox-buttons-right">
	                                         <button type="button" class="btn spinbox-up blue">
	                                             <i class="fa fa-plus"></i>
	                                         </button>
	                                     </div>
	                                 </div>
	                             </div>
                            </div>
                            
                            <a onclick="document:updateCateForm.submit();" class="btn btn-default purple" style="margin-top:16px;" >
                            	保存
                            </a>
                                                         
                        </form>
                    </div>
                </div>                    
                
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

	    		
    </div>

    <!--Basic Scripts-->
    <script src="/shop/public/static/assets/js/jquery.min.js"></script>
    <script src="/shop/public/static/assets/js/bootstrap.min.js"></script>
    <script src="/shop/public/static/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/shop/public/static/assets/js/beyond.js"></script>
	
    <!--Fuelux Spinbox-->
    <script src="/shop/public/static/assets/js/fuelux/spinbox/fuelux.spinbox.min.js"></script>

    <script>
        //--Fuelux Spinbox--
        $('.spinbox').spinbox();
    </script>
	
</body>
<!--  /Body -->
</html>
