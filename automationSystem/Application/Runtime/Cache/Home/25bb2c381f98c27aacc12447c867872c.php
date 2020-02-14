<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>关于我们</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
	<link rel="alternate icon" type="/automationSystem/Public/Home/images/hengwangkeji/hengwang-1.png" href="/automationSystem/Public/Home/images/hengwangkeji/hengwang-1.png">
  <link rel="stylesheet" href="/automationSystem/Public/Home/css/amazeui.css"/>
  <link rel="stylesheet" href="/automationSystem/Public/Home/css/style.css"/>
</head>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
		<div class="left hw-logo">
		  <img class=" logo" src="/automationSystem/Public/Home/images/hengwangkeji/HENGWANG.png"></img>
		  <img class="word" src="/automationSystem/Public/Home/images/hengwangkeji/hw-word.png"></img>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
		  <li><a href="<?php echo U('Index/index');?>">首页</a></li>
		  <li><a href="<?php echo U('Index/solutions');?>">解决方案</a></li>
		  <li><a href="<?php echo U('Index/showProducts');?>">产品展示 </a></li>
		  <li><a href="<?php echo U('Index/useCase');?>">客户案例</a></li>
		  <li><a href="<?php echo U('Index/service');?>">服务中心 </a></li>
		  <li><a href="<?php echo U('Index/news');?>">新闻动态 </a></li>
		  <li class="hw-menu-active"><a href="<?php echo U('Index/aboutUs');?>">关于我们</a></li>
		  <li><a href="<?php echo U('Index/recruit');?>">招贤纳士 </a></li>
		  <?php if(is_login()): ?><div class="am-topbar-left am-form-inline am-topbar-right am-dropdown" data-am-dropdown>
				  <li><a class="am-dropdown-toggle" data-am-dropdown-toggle style="text-align: right;"><h3>欢迎您:<?php echo get_username();?></h3></a></li>
				  <!--li><a class="am-dropdown-toggle" data-am-dropdown-toggle >选择功能</a></li-->
				  <ul class="am-dropdown-content">
					  <li><a href="<?php echo U('User/profile');?>">修改密码</a></li>
					  <li><a href="<?php echo U('User/logout');?>">退出</a></li>
				  </ul>
			  </div>
			  <?php else: ?>
			  <!--ul class="am-dropdown-content"-->
			  <li>
				  <a href="<?php echo U('Admin/Public/login');?>">员工登录</a>
			  </li><?php endif; ?>
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-paper-plane toppic-title-i"></i>
			<span class="toppic-title-span">关于我们</span>
			<p>About Us</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo U('Index/index');?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo U('Index/aboutUs');?>" class="w-white">关于我们</a></span>
		</div>
	</div>
</div>

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="<?php echo U('Index/useCase');?>">
			<i class=" am-icon-paper-plane part-title-i"></i>
			<span class="part-title-span">关于恒望</span>
			<p>About Hengwang</p>
			</a>
		</div>
	<div class="company-intro">
	<p>天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营流网络信息化的实在营运解决</p>
  <p>天公路货运管理系统是华天软件为物流货运企业天软件为物流货运企业全力打造的一套物流网络信息化的实在营流网络信息化的实在营运解决</p>
  <p>天公路货运管理系统是华天软件为物流货运企业天软件为物流货运企业流网络信息化的实在营运解决</p>
  <p>天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营流网络信息化的实在营运解决</p>
	</div>
</div>
<div class="gray-li company-thought-all" >
	<div class=" am-container-1">
			<ul class="company-thought">
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-circle-o-notch"></i>
				  	<span>企业理念</span>
				  	<div class="thought-all-none">
				  	    <h5>专注 专业</h5>
				    </div>
				  </div>
				  
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-hand-o-right"></i>
				  	<span>服务理念</span>
				  	<div class="thought-all-none">
				  	    <h5>实务 用心</h5>
				    </div>
				  </div>	
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-bar-chart"></i>
				  	<span>发展方向</span>
				  	<div class="thought-all-none">
				  	    <h5>精益求精</h5>
				    </div>
				  </div>	
				</li>
				<div class="clear"></div>
			</ul>
		</div>
</div>

	

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="<?php echo U('Index/useCase');?>">
			<i class=" am-icon-home part-title-i"></i>
			<span class="part-title-span">办公环境</span>
			<p>Office Space</p>
			</a>
		</div>
	<div class="office-space">
		<div class="cam-u-lg-6 am-u-md-6 am-u-sm-12">
			<img src="/automationSystem/Public/Home/images/hengwangkeji/space-1.png"/>
		</div>
		<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
			<img src="/automationSystem/Public/Home/images/hengwangkeji/space-2.png"/>
		</div>
		<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
			<img src="/automationSystem/Public/Home/images/hengwangkeji/space-3.png"/>
		</div>
		<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
			<img src="/automationSystem/Public/Home/images/hengwangkeji/space-4.png"/>
		</div>
		<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
			<img src="/automationSystem/Public/Home/images/hengwangkeji/space-5.png"/>
		</div>
		<div class="clear"></div>
	</div>
	
</div>
</div>
<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="<?php echo U('Index/useCase');?>">
			<i class=" am-icon-comments-o part-title-i"></i>
			<span class="part-title-span">联系我们</span>
			<p>Contact Us</p>
			</a>
		</div>
</div>
<div class="gray-li">
<div class=" am-container-1">
	<div class="contact-us">
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	<img src="/automationSystem/Public/Home/images/hengwangkeji/map.png" />
		 </div>
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	 <ul class="contact-add">
		 	 	<li>
		 	 		<div><i class=" am-icon-map-marker"></i><span class="contact-add-1">武汉市洪山区街道口阜华大厦1105</span></div>
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-phone"></i><span>027-837362778</span></div>		 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-mobile mobile"></i><span>15077385525</span></div>	 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-envelope-o"></i><span>support@vectorlab.com</span></div>		 	 		
		 	 	</li>
		 	 </ul>	 	
		 </div>
		 <div class="clear"></div>
	</div>
</div>
</div>
<footer class="footer ">
	
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">联系我们</div>
            <div class="part-5-words2">
                <span>地址:武汉市洪山区街道口鹏程国际B座2511</span>
                <span>电话:18238765101</span>
                <span>传真:(123) 456-7890</span>
                <span>邮箱:support@vectorlab.com</span>
                <span><i class="am-icon-phone"></i><em >027-82671661</em></span>
            </div>
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
					<li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo U('Index/solutions');?>">解决方案</a></li>
					<li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo U('Index/showProduct');?>">产品展示</a></li>
					<li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo U('Index/useCase');?>">客户案例</a></li>
					<li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo U('Index/service');?>">服务中心</a></li>
					<li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo U('Index/aboutUs');?>">关于我们</a></li>
					<li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo U('Index/recruit');?>">招贤纳士</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
   
</footer>


</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/automationSystem/Public/Home/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/automationSystem/Public/Home/js/jquery.min.js"></script>
<script src="/automationSystem/Public/Home/js/amazeui.min.js"></script>
<!--[if (gte IE 9)|!(IE)]><!-->

</html>