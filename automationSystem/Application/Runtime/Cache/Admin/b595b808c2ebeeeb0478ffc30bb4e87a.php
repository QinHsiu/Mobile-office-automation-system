<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/automationSystem/Public/Admin/css/base.css" />
<link rel="stylesheet" type="text/css" href="/automationSystem/Public/Admin/css/jquery.dialog.css" />
<link rel="stylesheet" href="/automationSystem/Public/Admin/css/index.css" />
<title>移动办公自动化系统高层管理端</title>
</head>

<body>
<div id="container">
  <div id="hd">
    <div class="hd-wrap ue-clear">
      <div class="top-light"></div>
      <h1 class="logo"></h1>
      <div class="login-info ue-clear">
        <div class="welcome ue-clear"><span>欢迎您,</span><a href="javascript:;" class="user-name"><?php echo (session('username')); ?></a></div>
        <div class="login-msg ue-clear"> <a href="<?php echo U('Email/recBox');?>" target="iframe" class="msg-txt">消息</a> <a href="<?php echo U('Email/recBox');?>" target="iframe" class="msg-num">0</a> </div>
      </div>
      <div class="toolbar ue-clear"> <a href="javascript:;" class="home-btn">首页</a> <a href="javascript:;" class="quit-btn exit"></a> </div>
    </div>
  </div>
  <div id="bd">
    <div class="wrap ue-clear">
      <div class="sidebar">
        <h2 class="sidebar-header">
          <p>功能导航</p>
        </h2>
        <ul class="nav">
          <li class="office current">
            <div class="nav-header"><a href="javascript:;" date-src="home.html" class="ue-clear"><span id="1">日常办公</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('User/edit');?>">修改密码</a></li>
            </ul>
          </li>
          <li class="gongwen">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>公文管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Doc/showList');?>">公文列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Doc/add');?>">添加公文</a></li>
            </ul>
          </li>
          <li class="nav-info">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>职员管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('User/showList');?>">职员列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('User/add');?>">添加职员</a></li>
            </ul>
          </li>
          <li class="konwledge">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>知识管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Knowledge/showList');?>">知识列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Knowledge/add');?>">添加知识</a></li>
            </ul>
          </li>
          <li class="agency">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>组织结构</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Dept/showList');?>">部门列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Dept/add');?>">添加部门</a></li>
            </ul>
          </li>
          <li class="email">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>邮件管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Email/send');?>">发邮件</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Email/sendBox');?>">发件箱</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Email/recBox');?>">收件箱</a></li>
            </ul>
          </li>
          <li class="system">
            <div class="nav-header"><a href="javascript:;"  class="ue-clear"><span>系统管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('System/showList');?>">系统配置</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('System/edit');?>">修改配置</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('System/add');?>">添加配置</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="content">
        <!--
          http://1006.com/index.php/Admin/Index/index
          http://1006.com/index.php/Admin/Index/home
        -->
        <iframe name="iframe" src="<?php echo U('home');?>" id="iframe" width="100%" height="100%" frameborder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="ft" class="ue-clear">
    <div class="ft-left"> <span>中国移动</span> <em>Office&nbsp;System</em> </div>
    <div class="ft-right"> <span>Automation</span> <em>V2.0&nbsp;2014</em> </div>
  </div>
</div>
<div class="exitDialog">
  <div class="dialog-content">
    <div class="ui-dialog-icon"></div>
    <div class="ui-dialog-text">
      <p class="dialog-content">你确定要退出系统？</p>
      <p class="tips">如果是请点击“确定”，否则点“取消”</p>
      <div class="buttons">
        <input type="button" class="button long2 ok" value="确定" />
        <input type="button" class="button long2 normal" value="取消" />
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/core.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/jquery.dialog.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/index.js"></script>
<script type="text/javascript">
    $('#1').click(function () {
        window.location.href="index.html";
    });
  $('a.home-btn').click(function () {
    window.location.href="index.html";
  });
//ajax请求方法
function getMsgCount(){
  //发送ajax请求
  $.get("<?php echo U('Email/getCount');?>", function(data) {
    //相应的处理代码
    $('.msg-num').html(data);
  });
}
//jQuery代码
$(function(){
  //定时器
  setInterval('getMsgCount()',3000);
});
</script>
</html>