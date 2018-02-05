<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/build/css/app.css">
</head>
<body>
<div class="subNavBox">
    <ul>
        <li>
            <div class="subNav current"><a href="javascript:;">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></div>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">实时监控<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent" kit-navbar>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-crosshairs fa-lg"></i>&nbsp;&nbsp;管网监控</a></li>
            </ul>
        </li>
    </ul>
</div>
<script type="text/javascript">
    layui.config({
        base: '/Xixiu/Application/Home/View/Public/build/js/'
    }).use(['app'], function () {
        var app = layui.app;
        $ = layui.jquery;
        layer = layui.layer;
        var height = $(window).height();
        var fhgt = $('.header').height();
        var foohgt = $('.footer').height();
        var iframeHgt = height - fhgt - foohgt - 30;
        $('#container').find('.layui-tab-title').html('');
        var navHtml = '<li class="layui-this"><i class="layui-icon">&#xe68e;</i> 首&nbsp;&nbsp;页</li>';
        $('#container').find('.layui-tab-title').append(navHtml);
        $('#container').find('.layui-tab-content').html('');
        $('#home').html('<div class="layui-tab-item layui-show"><iframe src="/Xixiu/Home/PipeLine/home.html" frameborder="0"></iframe></div>');
        $('#home').find('iframe').css('min-height', iframeHgt);

        //主入口
        app.set({
            type: 'iframe'
        }).init();
    });
</script>
</body>
</html>