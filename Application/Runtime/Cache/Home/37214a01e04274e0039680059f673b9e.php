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
            <div class="artical">
                <header class="artical_title">
                    <input type="hidden" name="" id="articleid" value="<?php echo ($new["id"]); ?>" title="用于评论关联文章" />
                    <h3><?php echo ($new["title"]); ?></h3>
                    <span><?php echo (intval($new["views"])); ?>人浏览</span>
                    <time>
                        <?php echo ($new["time"]); ?>
                    </time>
                </header>
                <section class="artical_content">
                    <?php echo ($new["text"]); ?>
                        <div class="pre_next">
                            <a href="javascript:;" class="pre">
                                上一篇
                            </a>
                            <a href="javascript:;" class="next">
                                下一篇
                            </a>
                        </div>
                </section>
                <div class="artical_foot">
                    <a href="javascript:;" class="btn">有帮助</a>
                </div>
            </div>
            <div class="comment">
                <h4>评论留言</h4>
                <ul class="cm_old" id="comment-ul">
                    <?php if(is_array($commiter)): $i = 0; $__LIST__ = $commiter;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <span><?php echo ((isset($vo["name"]) && ($vo["name"] !== ""))?($vo["name"]):"路人甲"); ?></span> 说:
                            <p>
                                <?php echo ($vo["text"]); ?>
                            </p>
                            <time>
                                <?php echo ($vo["time"]); ?>
                            </time>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <ul>
                    <li>
                        <label>昵称：</label>
                        <input type="text" name="" placeholder="请输入昵称" id="name">
                    </li>
                    <li>
                        <label>邮箱：</label>
                        <input type="email" name="" placeholder="请输入邮箱" id="email">
                    </li>
                    <li>
                        <textarea placeholder="请留言" id="commit"></textarea>
                    </li>
                    <li>
                        <input id="submit" type="submit" name="" value="提交" class="submit" />
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
    <footer></footer>
</body>
<script type="text/javascript" src="/w/Public/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    // 姓名验证 ，交给 婷婷了
    $("#email").blur(function() {
        if ($("#email").val() == "") {
            $("#email").css("border-color", "#f00")
        } else {
            $("#email").css("border-color", "#ddd")
        }
    });
    $("#submit").click(function() {

        if ($("#name").val() == "") {
            // method="post" action="/w/index.php/Home/Index/commit"
            $("#name").css("border-color", "#f00");
            return false;

        } else if ($("#email").val() == "") {
            // method="post" action="/w/index.php/Home/Index/commit"
            $("#email").css("border-color", "#f00");
            return false;

        } else if ($("#commit").val() == "") {
            $("#commit").css("border-color", "#f00");
            return false;
        } else {
            $("#email").css("border-color", "#ddd");
            $("#commit").css("border-color", "#ddd");
            var articleid = $("#articleid").val();
            var name = $("#name").val();
            var email = $("#email").val();
            var text = $("#commit").val();
            var time = (new Date()).toLocaleString();
            $.post("/w/index.php/Home/Index/commit", {
                    articleid: articleid,
                    name: name,
                    email: email,
                    text: text
                },
                function(data) {
                    $("#comment-ul").append(
                        $("<li>").append(
                            $("<span>").text(data.name)
                        ).append(
                            $("<em>").text("说：")
                        ).append(
                            $("<p>").text(data.text)
                        ).append(
                            $("<time>").text(data.time)
                        )
                    );
                    $("#name").val("");
                    $("#email").val("");
                    $("#commit").val("");
                }
            );
        }
    });
});
</script>

</html>