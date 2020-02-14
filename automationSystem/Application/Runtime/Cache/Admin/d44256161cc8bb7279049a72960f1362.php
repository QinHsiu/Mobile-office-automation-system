<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/automationSystem/Public/Admin/css/info-mgt.css" />
    <link rel="stylesheet" href="/automationSystem/Public/Admin/css/WdatePicker.css" />
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
<div class="title"><h2>系统配置列表</h2></div>
<div class="table-operate ue-clear">
    <a href="/automationSystem/Admin/System/add" class="add">添加</a>
    <a href="javascript:;" class="del">删除</a>
    <a href="javascript:;" class="edit">编辑</a>
    <a href="javascript:;" class="count">统计</a>
    <a href="javascript:;" class="check">审核</a>
</div>
<div class="table-box">
    <table>
        <thead>
        <tr>
            <th class="id">序号</th>
            <th class="light">界面亮度</th>
            <th class="file">背景图案</th>
            <th class="operate">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                <td class="id"><?php echo ($vol["id"]); ?></td>
                <td class="light"><?php echo ($vol["light"]); ?></td>
                <td class="file"><?php echo ($vol["filename"]); if(!empty($vol["filename"])): ?>【<a href='/automationSystem/Admin/System/download/id/<?php echo ($vol["id"]); ?>'>下载</a>】<?php endif; ?></td>
                <td class="addtime"><?php echo (date('Y-m-d H:i:s',$vol["addtime"])); ?></td>
                <td class="operate">
                    <!--input align="center" type="checkbox" value="<?php echo ($vol["id"]); ?>"/-->
                    <a href ='javascript:;' class='show' data='<?php echo ($vol["id"]); ?>' data-title='<?php echo ($vol["light"]); ?>'>查看</a> |
                    <a href ='/automationSystem/Admin/System/edit/id/<?php echo ($vol["id"]); ?>'>编辑</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>

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