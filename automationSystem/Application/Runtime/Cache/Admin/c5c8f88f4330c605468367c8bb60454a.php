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
<div class="title"><h2>密码修改</h2></div>
<form action="" method="post">
    <div class="main">
        <p class="short-input ue-clear">
            <label>用户名：</label>
            <input name="username" type="text" value="<?php echo ($data["username"]); ?>" placeholder="用户名" />
        </p>
        <p class="short-input ue-clear">
            <label>密码：</label>
            <input name="password" type="text" value="<?php echo ($data["password"]); ?>" placeholder="密码" />
        </p>
    </div>
    <div class="btn ue-clear">
        <a href="javascript:;" class="confirm" id='btnSubmit'>确定</a>
        <a href="javascript:;" class="clear" id='btnReset'>清空内容</a>
    </div>
</form>
</body>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/automationSystem/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">
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