<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 16/3/10
 * Time: 下午2:20
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>简迹</title>
    <?php require_once(dirname(__FILE__).'/page_parts/common/base_url.php');?>
    <?php require_once(dirname(__FILE__).'/page_parts/common/fonts.php');?>
    <?php require_once(dirname(__FILE__).'/page_parts/common/css.php');?>

    <style>
        body{
            background-color: rgb(31,31,41);
            color:#fff;
        }
        .page-msg{
            font-size: 0;
        }
    </style>
</head>
<body class="cf-invisible">
    <div class="cf-wrap cf-wrap-no-bottom" id="page-main-panel">
        <div class="cf-row page-top"
             data-cf-layout='{
                "paddingTop":28,
                "paddingBottom":28
            }'>
            <div class="cf-row" data-cf-layout='{
                "height":30,
                "lineHeight":30
            }'>
                <div class="cf-col-x" data-cf-layout='{
                "paddingLeft":20,
                "height":30,
                "width":120,
                "fontSize":24
            }' id="page-go-back">返回</div>
                <div class="cf-col-x" data-cf-layout='{
                    "textAlign":"center",
                    "fontSize":30,
                    "height":30,
                    "width":400
                }'>消息中心</div>
                <div class="cf-col-x" data-cf-layout='{
                "paddingRight":20,
                "height":30,
                "width":120,
                "textAlign":"right"
            }'><img src="img/temp/publish/setting.png" data-cf-layout='{
                    "width":26
                }'></div>
            </div>
        </div>
        <div class="cf-row page-sys-msg" data-cf-layout='{
                "marginBottom":10,
                "fontSize":0
            }'>
            <img src="img/temp/message_center/sys_msg.png" data-cf-layout='{"width":640}'>
        </div>
        <a class="cf-row page-msg" href="dialog.php">
            <img src="img/temp/message_center/chat_1.png" data-cf-layout='{"width":640}'>
        </a>
        <a class="cf-row page-msg" href="dialog.php">
            <img src="img/temp/message_center/chat_2.png" data-cf-layout='{"width":640}'>
        </a>
        <a class="cf-row page-msg page-msg-last" href="dialog.php">
            <img src="img/temp/message_center/chat_3.png" data-cf-layout='{"width":640}'>
        </a>
    </div>

    <?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>

<script>
    function page_init(){
        g_jq_dom = $.extend({}, g_jq_dom, {
            $main_page:$("#page-main-panel"),
            $go_back_btn:$("#page-go-back")
        });

        g_jq_dom.$main_page.css({
            "min-height":g_var.wnd_height
        });
    }

    function bind_event(){
        g_jq_dom.$go_back_btn.on(g_event.touchend, function(){
            if(g_var.body_move_status){return;}
            history.go(-1);
        });
    }

    $(function(){
        page_init();
        bind_event();
    });
</script>
</body>
</html>
