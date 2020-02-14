<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>解决方案</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
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
		  <li class="hw-menu-active"><a href="<?php echo U('Index/solutions');?>">解决方案</a></li>
		  <li><a href="<?php echo U('Index/showProducts');?>">产品展示 </a></li>
		  <li><a href="<?php echo U('Index/useCase');?>">客户案例</a></li>
		  <li><a href="<?php echo U('Index/service');?>">服务中心 </a></li>
		  <li><a href="<?php echo U('Index/news');?>">新闻动态 </a></li>
		  <li><a href="<?php echo U('Index/aboutUs');?>">关于我们</a></li>
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
			<i class="am-icon-lightbulb-o toppic-title-i"></i>
			<span class="toppic-title-span">解决方案</span>
			<p>Solutions</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo U('Index/index');?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo U('Index/solutions');?>" class="w-white">解决方案</a></span>
		</div>
	</div>
</div>

		

  
   <div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf solutions-tabs-ul ">
         <li class="am-active solutions-tabs-ul-li1"><a href="[data-tab-panel-0]" ><i class=" am-icon-desktop"></i><span>网站解决方案</span></a></li>
          <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-1]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>解决方案</span></a></li>
          <li class="solutions-tabs-ul-li3"><a href="[data-tab-panel-2]" ><i class=" am-icon-desktop"></i><span>网站解决方案</span></a></li>
          <li class="solutions-tabs-ul-li4"><a href="[data-tab-panel-3]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>解决方案</span></a></li>
      </ul>

      <div class="am-tabs-bd solutions-tabs-content ">
          <div data-tab-panel-0 class="am-tab-panel am-active">
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="<?php echo U('Index/solutionsInformation');?>">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app1.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app2.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            	<div class="clear"></div>
            </ul>
            
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <ul class="am-container-1 solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app1.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app2.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            	
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12  am-u-end">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app2.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            	</li>
            	</a>
            </ul>
          </div>
          <div data-tab-panel-2 class="am-tab-panel ">
            <ul class="am-container-1 solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app1.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app2.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            </ul>
          </div>
          <div data-tab-panel-3 class="am-tab-panel ">
            <ul class="am-container-1 solutions-content-ul">
            	<a href="#">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app1.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="/automationSystem/Public/Home/images/hengwangkeji/app2.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>优悦解决方案</h5>
            			<p>华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，运单跟踪，</p>
            		</div>
            		</a>
            	</li>
            </ul>
          </div>
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

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/automationSystem/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/automationSystem/Public/Home/js/amazeui.min.js"></script>

</html>