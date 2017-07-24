<?php if (!defined('THINK_PATH')) exit();?><div class="panel">
    <div class="panel_head">
        最热文章
    </div>
    <div class="list_group">
        <ul>
            <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/w/index.php/Home/Index/article/id/<?php echo ($vo["id"]); ?>" class="list_group_item">
                        <?php echo ($vo["title"]); ?>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>