<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>|ITSOURCE管理平台</title>
    <link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/blue_color.css" media="all">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->

</head>
<body>
<!-- 头部 -->
<div class="header">
    <!-- Logo -->
    <span class="logo"></span>
    <!-- /Logo -->

    <!-- 主导航 -->
    <ul class="main-nav">
        <li class=""><a href="/admin.php/Property/index.html">报修管理</a></li><li class=""><a href="/admin.php/ Property/index.html">物业</a></li><li class=""><a href="/admin.php/Index/index.html">首页</a></li><li class=""><a href="/admin.php/Article/index.html">内容</a></li><li class=""><a href="/admin.php/User/index.html">用户</a></li><li class=""><a href="/admin.php/Config/group.html">系统</a></li><li class=""><a href="/admin.php/Addons/index.html">扩展</a></li><li class="current"><a href="/admin.php/Center/index.html">物业管理</a></li>        </ul>
    <!-- /主导航 -->

    <!-- 用户栏 -->
    <div class="user-bar">
        <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
        <ul class="nav-list user-menu hidden">
            <li class="manager">你好，<em title="admin">admin</em></li>
            <li><a href="/admin.php/User/updatePassword.html">修改密码</a></li>
            <li><a href="/admin.php/User/updateNickname.html">修改昵称</a></li>
            <li><a href="/admin.php/Public/logout.html">退出</a></li>
        </ul>
    </div>
</div>
<!-- /头部 -->

<!-- 边栏 -->
<div class="sidebar">
    <!-- 子导航 -->

    <div id="subnav" class="subnav">
        <!-- 子导航 -->
        <h3><i class="icon icon-unfold"></i>管理中心</h3>                        <ul class="side-sub-menu">
        <li>
            <a class="item" href="/admin.php/Center/index.html">报修管理</a>
        </li><li>
        <a class="item" href="/admin.php/Center/activity.html">活动管理</a>
    </li><li>
        <a class="item" href="/admin.php/Sale/index.html">小区租售</a>
    </li><li>
        <a class="item" href="/admin.php/Owner/index.html">业主认证</a>
    </li><li>
        <a class="item" href="/admin.php/Score/log.html">签到日志</a>
    </li><li>
        <a class="item" href="/admin.php/Questionnaire/index.html">调查问卷</a>
    </li>                        </ul>                    <!-- /子导航 -->            </div>

    <!-- /子导航 -->
</div>
<!-- /边栏 -->

<!-- 内容区 -->
<div id="main-content">
    <div id="top-alert" class="fixed alert alert-error" style="display: none;">
        <button class="close fixed" style="margin-top: 4px;">&times;</button>
        <div class="alert-content">这是内容</div>
    </div>
    <div id="main" class="main">

        <!-- nav -->
        <!-- nav -->



        <div class="main-title">
            <h2>
                新增报修
            </h2>
        </div>
        <form action="<?php echo U();?>" method="post" class="form-horizontal">
            <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
            <div class="form-item">
                <label class="item-label">姓名</label>
                <div class="controls">
                    <input type="text" class="text input-large" name="name" value="<?php echo ($info["name"]); ?>">
                </div>
            </div>
            <div class="form-item">
                <label class="item-label">电话</label>
                <div class="controls">
                    <input type="text" class="text input-large" name="tel" value="<?php echo ($info["tel"]); ?>">
                </div>
            </div>
            <div class="form-item">
                <label class="item-label">地址</label>
                <div class="controls">
                    <input type="text" class="text input-large" name="address" value="<?php echo ($info["address"]); ?>">
                </div>
            </div>
            <div class="form-item">
                <label class="item-label">标题(简述报修问题)</label>
                <div class="controls">
                    <input type="text" class="text input-large" name="title" value="<?php echo ($info["title"]); ?>">
                </div>
            </div>
            <div class="form-item">
                <label class="item-label">内容<span class="check-tips">（详细叙述报修内容）</span></label>
                <div class="controls textarea input-large">
                    <textarea name="content" ><?php echo ($info["content"]); ?></textarea>
                </div>
            </div>
            <div class="form-item">
                <!--<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">-->
                <button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal">确 定</button>
                <button class="btn btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
            </div>
        </form>

    </div>
    <div class="cont-ft">
        <div class="copyright">
            <div class="fl">感谢使用<a href="http://www.onethink.cn" target="_blank">OneThink</a>管理平台</div>
            <div class="fr">V1.1.141101</div>
        </div>
    </div>
</div>
<!-- /内容区 -->
<script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "", //当前网站地址
            "APP"    : "/admin.php", //当前项目地址
            "PUBLIC" : "/Public", //项目公共目录地址
            "DEEP"   : "/", //PATHINFO分割符
            "MODEL"  : ["1", "", "html"],
            "VAR"    : ["m", "c", "a"]
        }
    })();
</script>
<script type="text/javascript" src="/Public/static/think.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
    +function(){
        var $window = $(window), $subnav = $("#subnav"), url;
        $window.resize(function(){
            $("#main").css("min-height", $window.height() - 130);
        }).resize();

        /* 左边菜单高亮 */
        url = window.location.pathname + window.location.search;
        url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
        $subnav.find("a[href='" + url + "']").parent().addClass("current");

        /* 左边菜单显示收起 */
        $("#subnav").on("click", "h3", function(){
            var $this = $(this);
            $this.find(".icon").toggleClass("icon-fold");
            $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
            prev("h3").find("i").addClass("icon-fold").end().end().hide();
        });

        $("#subnav h3 a").click(function(e){e.stopPropagation()});

        /* 头部管理员菜单 */
        $(".user-bar").mouseenter(function(){
            var userMenu = $(this).children(".user-menu ");
            userMenu.removeClass("hidden");
            clearTimeout(userMenu.data("timeout"));
        }).mouseleave(function(){
            var userMenu = $(this).children(".user-menu");
            userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
            userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
        });

        /* 表单获取焦点变色 */
        $("form").on("focus", "input", function(){
            $(this).addClass('focus');
        }).on("blur","input",function(){
            $(this).removeClass('focus');
        });
        $("form").on("focus", "textarea", function(){
            $(this).closest('label').addClass('focus');
        }).on("blur","textarea",function(){
            $(this).closest('label').removeClass('focus');
        });

        // 导航栏超出窗口高度后的模拟滚动条
        var sHeight = $(".sidebar").height();
        var subHeight  = $(".subnav").height();
        var diff = subHeight - sHeight; //250
        var sub = $(".subnav");
        if(diff > 0){
            $(window).mousewheel(function(event, delta){
                if(delta>0){
                    if(parseInt(sub.css('marginTop'))>-10){
                        sub.css('marginTop','0px');
                    }else{
                        sub.css('marginTop','+='+10);
                    }
                }else{
                    if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                        sub.css('marginTop','-'+(diff-10));
                    }else{
                        sub.css('marginTop','-='+10);
                    }
                }
            });
        }
    }();
</script>

<script type="text/javascript" charset="utf-8">
    //导航高亮
    highlight_subnav('/admin.php/Center/index.html');
</script>

</body>
</html><div id="think_page_trace" style="position: fixed;bottom:0;right:0;font-size:14px;width:100%;z-index: 999999;color: #000;text-align:left;font-family:'微软雅黑';">
    <div id="think_page_trace_tab" style="display: none;background:white;margin:0;height: 250px;">
        <div id="think_page_trace_tab_tit" style="height:30px;padding: 6px 12px 0;border-bottom:1px solid #ececec;border-top:1px solid #ececec;font-size:16px">
            <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">基本</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">文件</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">流程</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">错误</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">SQL</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">调试</span>
        </div>
        <div id="think_page_trace_tab_cont" style="overflow:auto;height:212px;padding: 0; line-height: 24px">
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">请求信息 : 2017-08-10 16:49:05 HTTP/1.1 GET : /admin.php/Property/add.html</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">运行时间 : 0.0476s ( Load:0.0113s Init:0.0059s Exec:0.0131s Template:0.0173s )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">吞吐率 : 21.01req/s</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">内存开销 : 2,682.34 kb</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">查询信息 : 11 queries 1 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">文件加载 : 45</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">缓存信息 : 2 gets 0 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">配置加载 : 168</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">会话信息 : SESSION_ID=pb9avfgg0r2dmo3otprtmikkk3</li>    </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/admin.php ( 1.18 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/ThinkPHP.php ( 4.71 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Think.class.php ( 12.32 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Storage.class.php ( 1.38 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Storage/Driver/File.class.php ( 3.54 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Mode/common.php ( 2.82 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Common/functions.php ( 50.66 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Common/Common/function.php ( 30.58 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Hook.class.php ( 4.02 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/App.class.php ( 13.23 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Dispatcher.class.php ( 14.82 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Route.class.php ( 13.38 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Controller.class.php ( 10.95 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/View.class.php ( 7.96 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Behavior/BuildLiteBehavior.class.php ( 3.69 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Behavior/ParseTemplateBehavior.class.php ( 3.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Behavior/ContentReplaceBehavior.class.php ( 1.91 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Conf/convention.php ( 11.18 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Common/Conf/config.php ( 2.01 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Common/Conf/tags.php ( 0.08 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Lang/zh-cn.php ( 2.57 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Conf/debug.php ( 1.50 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Log.class.php ( 3.87 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Common/Behavior/InitHookBehavior.class.php ( 1.69 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Behavior.class.php ( 0.88 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Cache.class.php ( 3.84 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Cache/Driver/File.class.php ( 5.88 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Admin/Conf/config.php ( 5.31 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Admin/Conf/tags.php ( 0.09 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Admin/Common/function.php ( 13.87 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Behavior/ReadHtmlCacheBehavior.class.php ( 5.62 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Session/Driver/Db.class.php ( 5.88 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Admin/Controller/PropertyController.class.php ( 1.30 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Admin/Controller/AdminController.class.php ( 19.92 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Application/Home/Behaviors/AutoDeadBehavior.class.php ( 0.52 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Model.class.php ( 66.29 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Db.class.php ( 5.68 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Db/Driver/Mysql.class.php ( 4.84 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Db/Driver.class.php ( 39.35 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Template.class.php ( 28.57 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Template/TagLib/Cx.class.php ( 22.62 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Template/TagLib.class.php ( 9.19 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/Runtime/Cache/Admin/b3562e7641e9507c2c53133a9b2f3649.php ( 10.97 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Behavior/WriteHtmlCacheBehavior.class.php ( 0.98 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">/mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Behavior/ShowPageTraceBehavior.class.php ( 5.27 KB )</li>    </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ReadHtmlCacheBehavior [ RunTime:0.000495s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --END-- [ RunTime:0.000558s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ action_begin ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Home\Behaviors\AutoDeadBehavior [ RunTime:0.009186s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ action_begin ] --END-- [ RunTime:0.009225s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ template_filter ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ContentReplaceBehavior [ RunTime:0.000096s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ template_filter ] --END-- [ RunTime:0.000135s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ParseTemplateBehavior [ RunTime:0.013522s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --END-- [ RunTime:0.013558s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\WriteHtmlCacheBehavior [ RunTime:0.000183s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --END-- [ RunTime:0.000215s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_end ] --START--</li>    </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[8192] mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /mnt/data/www/web/xiaoqu/public_html/ThinkPHP/Library/Think/Session/Driver/Db.class.php 第 95 行.</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[2048] Declaration of Admin\Controller\PropertyController::delete() should be compatible with Admin\Controller\AdminController::delete($model, $where = Array, $msg = Array) /mnt/data/www/web/xiaoqu/public_html/Application/Admin/Controller/PropertyController.class.php 第 13 行.</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[8] Undefined variable: meta_title /mnt/data/www/web/xiaoqu/public_html/Runtime/Cache/Admin/b3562e7641e9507c2c53133a9b2f3649.php 第 5 行.</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[8] Undefined variable: pid /mnt/data/www/web/xiaoqu/public_html/Runtime/Cache/Admin/b3562e7641e9507c2c53133a9b2f3649.php 第 94 行.</li>    </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SHOW COLUMNS FROM `category` [ RunTime:0.0009s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT `id` FROM `category` WHERE `name` IN ('notice','service','shop','activity')  [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SHOW COLUMNS FROM `document` [ RunTime:0.0005s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">UPDATE `document` SET `status`='-1' WHERE `category_id` IN ('42','43','44','45') AND `deadline` &lt; 1502354945 [ RunTime:0.0002s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SHOW COLUMNS FROM `menu` [ RunTime:0.0004s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT `id`,`title`,`url` FROM `menu` WHERE `pid` = 0 AND `hide` = 0 ORDER BY sort asc  [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT `pid` FROM `menu` WHERE ( pid !=0 AND url like '%Property/add%' ) LIMIT 1   [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT * FROM `menu` WHERE `id` = 129 LIMIT 1   [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT * FROM `menu` WHERE `id` = 128 LIMIT 1   [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT DISTINCT  `group` FROM `menu` WHERE `group` &lt;&gt; '' AND `pid` = 128  [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT `id`,`url` FROM `menu` WHERE `pid` = 128 AND `hide` = 0  [ RunTime:0.0001s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">SELECT `id`,`pid`,`title`,`url`,`tip` FROM `menu` WHERE `group` = '管理中心' AND `pid` = 128 AND `hide` = 0 ORDER BY sort asc  [ RunTime:0.0001s ]</li>    </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                </ol>
            </div>
        </div>
    </div>
    <div id="think_page_trace_close" style="display:none;text-align:right;height:15px;position:absolute;top:10px;right:12px;cursor: pointer;"><img style="vertical-align:top;" src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAAMDA////wAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUQxMjc1MUJCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUQxMjc1MUNCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRDEyNzUxOUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRDEyNzUxQUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDPzs3My8rJyMfGxcTDwsHAv769vLu6ubi3trW0s7KxsK+urayrqqmop6alpKOioaCfnp2cm5qZmJeWlZSTkpGQj46NjIuKiYiHhoWEg4KBgH9+fXx7enl4d3Z1dHNycXBvbm1sa2ppaGdmZWRjYmFgX15dXFtaWVhXVlVUU1JRUE9OTUxLSklIR0ZFRENCQUA/Pj08Ozo5ODc2NTQzMjEwLy4tLCsqKSgnJiUkIyIhIB8eHRwbGhkYFxYVFBMSERAPDg0MCwoJCAcGBQQDAgEAACH5BAAAAAAALAAAAAAPAA8AAAIdjI6JZqotoJPR1fnsgRR3C2jZl3Ai9aWZZooV+RQAOw==" /></div>
</div>
<div id="think_page_trace_open" style="height:30px;float:right;text-align: right;overflow:hidden;position:fixed;bottom:0;right:0;color:#000;line-height:30px;cursor:pointer;"><div style="background:#232323;color:#FFF;padding:0 6px;float:right;line-height:30px;font-size:14px">0.0476s </div><img width="30" style="" title="ShowPageTrace" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVERDVENkZGQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVERDVENzAwQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NURENUQ2RkRCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NURENUQ2RkVCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5fx6IRAAAMCElEQVR42sxae3BU1Rk/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"></div>
<script type="text/javascript">
    (function(){
        var tab_tit  = document.getElementById('think_page_trace_tab_tit').getElementsByTagName('span');
        var tab_cont = document.getElementById('think_page_trace_tab_cont').getElementsByTagName('div');
        var open     = document.getElementById('think_page_trace_open');
        var close    = document.getElementById('think_page_trace_close').childNodes[0];
        var trace    = document.getElementById('think_page_trace_tab');
        var cookie   = document.cookie.match(/thinkphp_show_page_trace=(\d\|\d)/);
        var history  = (cookie && typeof cookie[1] != 'undefined' && cookie[1].split('|')) || [0,0];
        open.onclick = function(){
            trace.style.display = 'block';
            this.style.display = 'none';
            close.parentNode.style.display = 'block';
            history[0] = 1;
            document.cookie = 'thinkphp_show_page_trace='+history.join('|')
        }
        close.onclick = function(){
            trace.style.display = 'none';
            this.parentNode.style.display = 'none';
            open.style.display = 'block';
            history[0] = 0;
            document.cookie = 'thinkphp_show_page_trace='+history.join('|')
        }
        for(var i = 0; i < tab_tit.length; i++){
            tab_tit[i].onclick = (function(i){
                return function(){
                    for(var j = 0; j < tab_cont.length; j++){
                        tab_cont[j].style.display = 'none';
                        tab_tit[j].style.color = '#999';
                    }
                    tab_cont[i].style.display = 'block';
                    tab_tit[i].style.color = '#000';
                    history[1] = i;
                    document.cookie = 'thinkphp_show_page_trace='+history.join('|')
                }
            })(i)
        }
        parseInt(history[0]) && open.click();
        (tab_tit[history[1]] || tab_tit[0]).click();
    })();
</script>