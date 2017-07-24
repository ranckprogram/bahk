<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/w/Public/css/common.css">
</head>

<body>
    <div>
        <header class="head">
            <a href="javascript:;" class="lout">注销</a>
        </header>
        <section class="container">
            <div class="createfile">
                <a href="/w/index.php/Admin/Index/news" class="btn ">新建</a>
            </div>
            <div>
                <table class="table">
                    <tr>
                        <th width="25%">id</th>
                        <th width="25%">标题</th>
                        <th width="25%">时间</th>
                        <th width="25%">操作</th>
                    </tr>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <?php echo ($vo["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["title"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["time"]); ?>
                            </td>
                            <td>
                                <a href="/w/index.php/Admin/Index/edit/id/<?php echo ($vo["id"]); ?>" class="btn btn_info">编辑</a>
                                <a href="/w/index.php/Admin/Index/del/id/<?php echo ($vo["id"]); ?>" class="btn btn_del">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </section>
    </div>
</body>
<script type="text/javascript" src="/w/Public/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on("click", ".btn_del", function(e) {
        e.preventDefault();
        var That = $(this);
        var url = $(this).attr("href");
        $.get(url, function() {
            That.parents("tr").remove();
        });
    });

});
</script>

</html>