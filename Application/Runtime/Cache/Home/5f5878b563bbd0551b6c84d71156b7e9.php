<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
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
                            <span><?php echo ($vo["views"]); ?>人浏览</span>
                            <time>
                                <?php echo (date('Y-m-d' ,strtotime($vo["time"]))); ?>
                            </time>
                        </dd>
                    </dl><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="pagination">
                <ul>
                    <li>
                        <a href="/w/index.php/Home/Index/page/page/1" class="pre">上一页</a>
                    </li>
                    <li>
                        <a href="/w/index.php/Home/Index/page/page/1" class="">1</a>
                    </li>
                    <li>
                        <a href="/w/index.php/Home/Index/page/page/2" class="">2</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="">...</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="">6</a>
                    </li>
                    <li>
                        <a href="/w/index.php/Home/Index/page/page/2" class="next">下一页</a>
                    </li>
                </ul>
            </div>
        </div>
        <aside class="aside">
            <div class="panel">
                <div class="panel_head">
                    <a href="javascript:;">相关文章</a>
                </div>
                <div class="list_group">
                    <ul>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="panel_head">
                    <a href="javascript:;">相关文章</a>
                </div>
                <div class="list_group">
                    <ul>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="list_group_item">你的梦想是</a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <div class="clean"></div>
    </div>
    <footer></footer>
</body>

</html>