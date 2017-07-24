<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        
    </title>
    <link rel="stylesheet" type="text/css" href="/w/Public/css/common.css">
</head>

<body>
    
    <header class="header">
    <div class="wrapper header_inner">
        <div class="logo">
            <img src="/w/Public/images/logo.png">
        </div>
        <nav class="navbar ">
            <a href="javascript:;">HTML/CSS</a>
            <a href="javascript:;">js</a>
            <a href="javascript:;">移动端</a>
            <a href="javascript:;">生活日志</a>
            <a href="javascript:;">demo</a>
        </nav>
        <div class="search_group">
            <input class="search_input" type="text" name="" placeholder="请输入关键字">
            <a href="javascript:;" class="btn">搜索</a>
        </div>
    </div>
</header>


    
    <div class="wrapper">
        <div class="content">
            <div class="breadcrumb">
                <ul>
                    <li>
                        <a href="/w/index.php/Home/Index/index">首页</a>
                    </li>
                    <li>
                        <a href="javascript:;">php</a>
                    </li>
                </ul>
            </div>
            <div class="list_content list_tit">
                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                        <dt>
                            <a href="/w/index.php/Home/Index/article/id/<?php echo ($vo["id"]); ?>">
                                <?php echo ($vo["title"]); ?>
                            </a>
                        </dt>
                        <dd>
                            <span><?php echo (intval($vo["views"])); ?>人浏览</span>
                            <time>
                                <?php echo (date('Y-m-d' ,strtotime($vo["time"]))); ?>
                            </time>
                        </dd>
                    </dl><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="pagination" data-curPage="<?php echo ($page); ?>" data-total="<?php echo ($total); ?>">
                <ul>
                    <li>
                        <a href="/w/index.php/Home/Index/index/page/<?php echo ($page-1); ?>" class="pre">上一页</a>
                    </li>
                    <?php if($total > 5 ): $__FOR_START_2930__=1;$__FOR_END_2930__=5;for($i=$__FOR_START_2930__;$i < $__FOR_END_2930__;$i+=1){ ?><li>
                                <a href="/w/index.php/Home/Index/page/page/<?php echo ($i); ?>" class="">
                                    <?php echo ($i); ?>
                                </a>
                            </li><?php } ?>
                        <li>
                            <a href="javascript:;" class="">...</a>
                        </li>
                        <?php else: ?>
                        <?php $__FOR_START_19395__=1;$__FOR_END_19395__=$total;for($i=$__FOR_START_19395__;$i < $__FOR_END_19395__;$i+=1){ ?><li>
                                <a href="/w/index.php/Home/Index/index/page/<?php echo ($i); ?>" class="">
                                    <?php echo ($i); ?>
                                </a>
                            </li><?php } endif; ?>
                    <li>
                        <a href="/w/index.php/Home/Index/index/page/<?php echo ($total); ?>" class="">
                            <?php echo ($total); ?>
                        </a>
                    </li>
                    <li>
                        <a href="/w/index.php/Home/Index/index/page/<?php echo ($page+1); ?>" class="next">下一页</a>
                    </li>
                </ul>
            </div>
        </div>
        <aside class="aside">
            <div class="panel">
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

            <div class="panel">
    <div class="panel_head">
        最热文章
    </div>
    <div class="list_group">
        <ul>
            <?php if(is_array($sidehot)): $i = 0; $__LIST__ = $sidehot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/w/index.php/Home/Index/article/id/<?php echo ($vo["id"]); ?>" class="list_group_item">
                        <?php echo ($vo["title"]); ?>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

        </aside>
        <div class="clean"></div>
    </div>

    
    
    
    <div class="footer">
    <div class="banub">
        <a href="http://beian.vhostgo.com/">蜀ICP备16031883号-1</a>
    </div>
    <div class="banub">
        © 2015-2018 彼岸花开 版权所有
    </div>
</div>


</body>
<script type="text/javascript" src="/w/Public/js/jquery.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {


        $(".pagination").on("click", ".pre", function(e) {
            if ($(".pagination").attr("data-curPage") == 1) {
                e.preventDefault();
            }
        });
        $(".pagination").on("click", ".next", function(e) {

            if ($(".pagination").attr("data-total") == $(".pagination").attr("data-curPage")) {
                e.preventDefault();
            }

        });
    });
    </script>


</html>