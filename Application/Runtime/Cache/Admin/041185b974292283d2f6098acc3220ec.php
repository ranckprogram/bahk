<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/w/Public/css/common.css">
</head>

<body>
    <div class="forminput login">
        <form action="/w/index.php/Admin/Index/verify" method="post">
            <ul>
                <li>
                    <input type="text" name="username" placeholder="用户名" value="ranck">
                </li>
                <li>
                    <input type="password" name="password" placeholder="密码" value="admin">
                </li>
                <li>
                    <input type="submit" name="" value="登录">
                </li>
            </ul>
        </form>
    </div>
</body>

</html>