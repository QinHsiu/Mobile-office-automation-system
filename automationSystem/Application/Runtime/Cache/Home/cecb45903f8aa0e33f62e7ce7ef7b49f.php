<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻动态</title>
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
		  <li><a href="<?php echo U('Index/solutions');?>">解决方案</a></li>
		  <li><a href="<?php echo U('Index/showProducts');?>">产品展示 </a></li>
		  <li><a href="<?php echo U('Index/useCase');?>">客户案例</a></li>
		  <li><a href="<?php echo U('Index/service');?>">服务中心 </a></li>
		  <li class="hw-menu-active"><a href="<?php echo U('Index/news');?>">新闻动态 </a></li>
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
			<i class="am-icon-newspaper-o toppic-title-i"></i>
			<span class="toppic-title-span">新闻动态</span>
			<p>Hengwang News</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo U('Index/index');?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo U('Index/news');?>" class="w-white">新闻动态</a></span>
		</div>
	</div>
</div>


	
<div class="am-container-1 news-content-all">
<div class="left am-u-sm-12 am-u-md-8 am-u-lg-9 ">
	  <ul class="news-ul">
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="<?php echo U('Index/newsInformation');?>">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="/automationSystem/Public/Home/images/hengwangkeji/news.png"/>
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div>
	  	  </a>
	  	</li>
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="#">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="/automationSystem/Public/Home/images/hengwangkeji/news1.png"/>
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div> 
	  	  </a>
	  	</li>
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="#">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="/automationSystem/Public/Home/images/hengwangkeji/news2.png"/>
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div>  
	  	  </a>
	  	</li>
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="#">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="/automationSystem/Public/Home/images/hengwangkeji/news.png"/>
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div> 
	  	  </a>
	  	</li>
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="#">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="/automationSystem/Public/Home/images/hengwangkeji/news1.png"/>
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div> 
	  	  </a>
	  	</li>
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="#">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="/automationSystem/Public/Home/images/hengwangkeji/news2.png"/>
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div>
	  	 </a>
	  	</li>
	  	<div class="clear"></div>
		</ul>
		<ul class="am-pagination ">
	  	 <li ><a href="#">&laquo;</a></li>
				  <li><a href="#">上一页</a></li> 
				  <li><a class="current-page">1</a></li>
				  <li><a href="#">下一页</a></li>
				   <li ><a href="#">&raquo;</a></li>
				</ul>	  
</div>	  

<div class="left am-u-sm-12 am-u-md-4 am-u-lg-3">
	
	<section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{  }'>
		<div class="hot-title"><i class="am-icon-thumbs-o-up"></i>热门新闻 / Hot 	News</div>
      <dl class="am-accordion-item am-active">
        <dt class="am-accordion-title">
          用户体验制作当中的一些可视化信息
        </dt>
        <dd class="am-accordion-bd am-collapse am-in">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            英特网，是网络与网络之间所串连成的庞大网络网又称网际网路或音译因特网、英特网，是网络与网络之间所串连成的庞大网络网络与网络之
          </div>
        </dd>
      </dl>
      <dl class="am-accordion-item">
        <dt class="am-accordion-title">
          可视化信息
        </dt>
        <dd class="am-accordion-bd am-collapse ">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            英特网，是网络与网络之间所串连成的庞大网络网所串连成的庞大网络网
          </div>
        </dd>
      </dl>
      <dl class="am-accordion-item">
        <dt class="am-accordion-title">
          响应式购物商城
        </dt>
        <dd class="am-accordion-bd am-collapse ">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            英特网，是网络与网络之间所串连成的庞大网络网所串连成的庞大网络网
          </div>
        </dd>
      </dl>
       <dl class="am-accordion-item">
        <dt class="am-accordion-title">
          可视化信息
        </dt>
        <dd class="am-accordion-bd am-collapse ">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            英特网，是网络与网络之间所串连成的庞大网络网所串连成的庞大网络网
          </div>
        </dd>
      </dl>
      <dl class="am-accordion-item">
        <dt class="am-accordion-title">
          响应式购物商城
        </dt>
        <dd class="am-accordion-bd am-collapse ">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            英特网，是网络与网络之间所串连成的庞大网络网所串连成的庞大网络网
          </div>
        </dd>
      </dl>
      
  </section>
	
</div>

<div class="clear"></div>
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
<script src="/automationSystem/Public/Home//js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/automationSystem/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/automationSystem/Public/Home/js/amazeui.min.js"></script>

</html>