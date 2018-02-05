<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
            <!-- <ul class="navContent" style="display:block" kit-navbar>
                <li><a href="#" class="currentNav" onclick="clickURL(this)">实时状态</a></li>
                <li><a href="#" onclick="clickURL(this)">控制功能</a></li>
                <li><a href="#" onclick="clickURL(this)">实时告警</a></li>
            </ul> -->
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">设置功能<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent" kit-navbar>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/set_warnings.html',icon:'fa-bell-o fa-lg',title:'告警数据上下限',id:'2'}"
                       onclick="clickURL(this)"><i class="fa fa-bell-o fa-lg"></i>&nbsp;&nbsp;告警数据上下限</a></li>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/set_control.html',icon:'fa-support fa-lg',title:'自动控制参数',id:'3'}"
                       onclick="clickURL(this)"><i class="fa fa-support fa-lg"></i>&nbsp;&nbsp;自动控制参数</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">报警管理<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent" kit-navbar>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/warn_unprocessed.html',icon:'fa-bell-slash-o fa-lg',title:'未处理报警',id:'4'}"
                       onclick="clickURL(this)"><i class="fa fa-bell-slash-o fa-lg" style="color: red;"></i>&nbsp;&nbsp;未处理报警</a>
                </li>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/warn_history.html',icon:'fa-history fa-lg',title:'历史报警',id:'5'}"
                       onclick="clickURL(this)"><i class="fa fa-history fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;历史报警</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">数据统计<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent" kit-navbar>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/data_device.html',icon:'fa-spinner fa-lg',title:'检测数据报表',id:'6'}"
                       onclick="clickURL(this)"><i class="fa fa-spinner fa-lg"></i>&nbsp;&nbsp;检测数据报表</a></li>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/data_measure.html',icon:'fa-wrench fa-lg',title:'设备数据报表',id:'7'}"
                       onclick="clickURL(this)"><i class="fa fa-wrench fa-lg"></i>&nbsp;&nbsp;设备数据报表</a></li>
                <li><a href="javascript:;" kit-target
                       data-options="{url:'/Xixiu/Home/PumpStation/data_operate.html',icon:'fa-list-ul fa-lg',title:'操作记录',id:'8'}"
                       onclick="clickURL(this)"><i class="fa fa-list-ul fa-lg"></i>&nbsp;&nbsp;操作记录</a></li>
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

        $('#home').html('<div class="layui-tab-item layui-show"><iframe src="/Xixiu/Home/PumpStation/home.html" frameborder="0"></iframe></div>');
        $('#home').find('iframe').css('min-height', iframeHgt);

        //主入口
        app.set({
            type: 'iframe'
        }).init();
    });
</script>
</body>
</html>