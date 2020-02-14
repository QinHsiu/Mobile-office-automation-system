<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>客户案例</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="/automationSystem/Public/Home/images/hengwangkeji/HENGWANG.png" href="/automationSystem/Public/Home/images/hengwangkeji/HENGWANG.png">
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
          <li class="hw-menu-active"><a href="<?php echo U('Index/useCase');?>">客户案例</a></li>
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
			<i class="am-icon-briefcase toppic-title-i"></i>
			<span class="toppic-title-span">客户案例</span>
			<p>Customer Case</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo U('Index/index');?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo U('Index/useCase');?>" class="w-white">客户案例</a></span>
		</div>
	</div>
</div>

<div class="am-container-1">
	 <ul data-am-widget="gallery" class="am-gallery am-avg-sm-1
  am-avg-md-3 am-avg-lg-4 am-gallery-bordered customer-case-ul" data-am-gallery="{  }" >
      <li>
        <div class="am-gallery-item">
            <a href="<?php echo U('Index/caseInformation');?>" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app1-1.png" />
             </div>
                <h3 class="am-gallery-title">响应式商城</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app2-2.png"  />
             </div>
                <h3 class="am-gallery-title">物流红娘</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需专业的IT人员进行维护即可使用在线物流软件。</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app3-3.png" />
             </div>
                <h3 class="am-gallery-title">车型湖北</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app4-4.png"/>
             </div>
                <h3 class="am-gallery-title">管理系统</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app5-5.png" />
              
             </div>
                <h3 class="am-gallery-title">响应式商城</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app6-6.png"  />
             </div>
                <h3 class="am-gallery-title">物流红娘</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需专业的IT人员进行维护即可使用在线物流软件。</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app7-7.png" />
             </div>
                <h3 class="am-gallery-title">车型湖北</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="/automationSystem/Public/Home/images/hengwangkeji/app8-8.png"/>
             </div>
                <h3 class="am-gallery-title">管理系统</h3>
                <div class="am-gallery-desc gallery-words">一款响应式商城模板，是专门针对中小物流企业的实际业务需求量身定做的物流管理系统，具有界面简洁、流程灵活、操作方便、易于实施的特点。 该产品基于领先的云计算技术，用户无需在本地安装软件、无需购买专门的服务器硬件、无需专业的IT人员进行维护， 只要打开浏览器，登录网站，即可使用在线物流软件。
        </div>
      </li>
  </ul>
	
</div>
<div class="part-all gray-li">
<div class="customer  am-container-1">
		<div class="part-title">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">服务客户</span>
			<p>Serve Customers</p>
		</div>
		
		<div class="am-slider am-slider-default am-slider-carousel part-all" data-am-flexslider="{itemWidth:150, itemMargin: 5, slideshow: false}" style="  background-color: #f0eeed; box-shadow:none;">
		  <ul class="am-slides">
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn4.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn5.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn6.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn7.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn8.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn4.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn5.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn6.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn7.png"/></li>
		    <li><img src="/automationSystem/Public/Home/images/hengwangkeji/ptn8.png"/></li>
		  </ul>
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
<script src="/automationSystem/Public/Home/js/amazeui.min.js"></script>

</html>