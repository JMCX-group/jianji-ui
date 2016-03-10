<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 16/3/10
 * Time: 下午2:40
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

        #page-main-panel{
            font-size: 0;
        }

        #page-btn-show-msg-type,
        #page-btn-hide-msg-type {
            position: absolute;
            left: 0;
            top: 0;
        }

        #page-btn-hide-msg-type{
            display: none;
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
                }'>羊羊羊</div>
            </div>
        </div>
        <img src="img/temp/dialog/dialog_1.jpg" id="page-bkg" data-cf-layout='{"width":640}'>
        <div id="page-btn-show-msg-type" data-cf-layout='{"left":580,"top":1030,"width":30,"height":30}'></div>
        <div id="page-btn-hide-msg-type" data-cf-layout='{"left":580,"top":849,"width":30,"height":30}'></div>
    </div>

    <?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>

    <script>
        function page_init(){
            g_jq_dom = $.extend({}, g_jq_dom, {
                $main_page:$("#page-main-panel"),
                $page_bkg:$("#page-bkg"),
                $show:$("#page-btn-show-msg-type"),
                $hide:$("#page-btn-hide-msg-type")
            });

            g_jq_dom.$main_page.css({
                "min-height":g_var.wnd_height
            });

            g_var = $.extend({}, g_var, {
                body_move_status:false
            });
        }

        function bind_event(){
            g_jq_dom.$body.on(g_event.touchmove, function(){g_var.body_move_status = true}).on(g_event.touchend, function(){g_var.body_move_status = false});

            g_jq_dom.$show.on(g_event.touchend, function(){
                if(g_var.body_move_status){return;}
                g_jq_dom.$page_bkg.attr('src', 'img/temp/dialog/dialog_2.jpg');
                g_jq_dom.$show.hide();
                g_jq_dom.$hide.show();
            });

            g_jq_dom.$hide.on(g_event.touchend, function(){
                if(g_var.body_move_status){return;}
                g_jq_dom.$page_bkg.attr('src', 'img/temp/dialog/dialog_1.jpg');
                g_jq_dom.$show.show();
                g_jq_dom.$hide.hide();
            });
        }

        $(function(){
            page_init();
            bind_event();
        });
    </script>
</body>
</html>