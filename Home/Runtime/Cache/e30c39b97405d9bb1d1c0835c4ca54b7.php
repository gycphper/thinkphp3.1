<?php if (!defined('THINK_PATH')) exit();?><html>
<!DOCTYPE html>
<html  class="no-js">

    <head>

        <meta charset="utf-8">
        <title>慕课网-免费的课程学习平台</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="__PUBLIC__/css/reset.css">
        <link rel="stylesheet" href="__PUBLIC__/css/supersized.css">
        <link rel="stylesheet" href="__PUBLIC__/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body style="background:url(__PUBLIC__/img/1.jpg);">

        <div class="page-container">
            <h1>登录(Login)</h1>
            <form action="" method="post">
                <input type="text" name="username" class="username" placeholder="请输入登录邮箱">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码">
                <!--  <input type="Captcha" class="Captcha" name="Captcha" class="Captcha" placeholder="请输入验证码">-->
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
            </form>
            <!--  <div class="connect">
                <p>快捷</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>
            -->
        </div>
		
        <!-- Javascript -->
        <script src="__PUBLIC__/js/jquery-1.8.2.min.js" ></script>
        <script src="__PUBLIC__/js/supersized.3.2.7.min.js" ></script>
        <script src="__PUBLIC__/js/scripts.js" ></script>

    </body>

</html>