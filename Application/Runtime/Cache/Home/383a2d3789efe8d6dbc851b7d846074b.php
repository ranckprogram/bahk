<?php if (!defined('THINK_PATH')) exit();?><div class="panel">
    <div class="panel_head">
        最新文章
    </div>
    <div class="list_group">
        <ul>
            <?php if(is_array($newsest)): $i = 0; $__LIST__ = $newsest;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/w/index.php/Home/Index/article/id/<?php echo ($vo["id"]); ?>" class="list_group_item">
                        <?php echo ($vo["title"]); ?>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!-- <script type="text/javascript">
$(document).ready(function() {
    //加载完成过后异步赋值
    $.get("/w/index.php/Home/Index/sidenew", {

    }, function(data) {
        console.dir(data);
    });
});
</script> -->