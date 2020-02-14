<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/automationSystem/Public/Admin/css/base.css" />
    <link rel="stylesheet" href="/automationSystem/Public/Admin/css/info-reg.css" />
    <title>移动办公自动化系统</title>
    <style type='text/css'>
        select {
            background: rgba(0, 0, 0, 0) url("/automationSystem/Public/Admin/images/inputbg.png") repeat-x scroll 0 0;
            border: 1px solid #c5d6e0;
            height: 28px;
            outline: medium none;
            padding: 0 8px;
            width: 240px;
        }
        .main p input {
            float:none;
        }
    </style>
</head>

<body>
<div class="title"><h2>系统管理编辑列表</h2></div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="main">
        <p class="short-input ue-clear">
            <label>界面亮度：</label>
            <input name="light" value="<?php echo ($data["light"]); ?>" type="number" placeholder="界面亮度..." />
            <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
        </p>
        <p class="short-input ue-clear">
            <label>背景图案：</label>
            <input name="background" type="file"/> 说明：如果需要修改则选择文件，留空则表示不修改
        </p>
    </div>
    <div class="btn ue-clear">
        <a href="javascript:;" class="confirm" id='btnSubmit'>确定</a>
        <a href="javascript:;" class="clear" id='btnReset'>清空内容</a>
</body>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/jquery.js"></script><script type="text/javascript" src="/automationSystem/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/plugin/ue/ueditor.config.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/plugin/ue/ueditor.all.min.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/plugin/ue/lang/zh-ch/zh-ch.js"></script>
<script type="text/javascript">
    //实例化容器，要求id是容器的id
    var ue = UE.getEditor('editor');

    $(function(){
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });

        $('#btnReset').on('click',function(){
            $('form')[0].reset();
        });
    });

    $(".select-title").on("click",function(){
        $(".select-list").toggle();
        return false;
    });
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(".select-title").find("span").text(txt);
    });
    showRemind('input[type=text], textarea','placeholder');
</script>
</html>