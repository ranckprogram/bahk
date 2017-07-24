<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/w/Public/css/common.css">
</head>

<body>
    <div class="container">
        <form class="forminput edit">
            <ul>
                <li style="display: none;">
                    <input type="hidden" name="" id="paperid" data-id="<?php echo ($paper["id"]); ?>">
                </li>
                <li style="display: none;">
                    <input type="hidden" name="" id="edittxt" value="<?php echo ($paper["text"]); ?>">
                </li>
                <li>
                    <input type="text" name="title" placeholder="标题" id="title" value="<?php echo ($paper["title"]); ?>">
                </li>
                <li>
                    <script id="container" name="content" type="text/plain">
                    </script>
                </li>
                <li>
                    <input type="button" name="" value="返回" id="back">
                    <input type="submit" name="" value="保存" id="save">
                </li>
            </ul>
        </form>
    </div>
</body>
<script type="text/javascript" src="/w/Public/js/jquery.js"></script>
<script type="text/javascript" src="/w/Public/plus/edit/ueditor.config.js"></script>
<script type="text/javascript" src="/w/Public/plus/edit/ueditor.all.js"></script>
<script type="text/javascript" src="/w/Public/plus/layer/layer.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var ue = UE.getEditor('container');
    //	编辑  -  会有内容的，最后 内容 会存在
    var proinfo = $("#edittxt").attr("value");
    if (proinfo) {
        ue.ready(function() { //编辑器初始化完成再赋值  
            ue.setContent(proinfo); //赋值给UEditor  
        });
    }


    $("#back").click(function() {
        location.href = ("/w/index.php/Admin/Index/alist");
    });
    $("#save").click(function(e) {
        e.preventDefault();
        var title = $("#title").val();
        var text = ue.getContent();
        var id = $("#paperid").attr("data-id");
        if (!proinfo) {
            console.log(typeof !proinfo);
            $.post("/w/index.php/Admin/Index/save", {
                    title: title,
                    text: text
                },
                function() {
                    layer.msg('保存成功');
                    $("#title").val("");
                    ue.setContent('')
                });
        } else {
            $.post("/w/index.php/Admin/Index/update", {
                    id: id,
                    title: title,
                    text: text
                },
                function() {
                    layer.msg('保存成功');
                });
        }
    });

});
</script>

</html>