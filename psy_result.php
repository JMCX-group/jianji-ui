<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 16/2/15
 * Time: 下午6:20
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
            color: #fff;
        }
        .page-title{
            background-color: rgba(168,193,246,0.1);
        }
    </style>
</head>
<body class="cf-invisible">
    <div class="cf-wrap cf-wrap-no-bottom" id="page-main-panel" data-page-panel-idx="1">
        <img src="img/temp/psy_result/bkg.jpg" class="cf-img-bkg">
        <div class="cf-row" data-cf-layout='{
                "paddingTop":80
            }'></div>
        <div class="cf-row cf-text-center" data-cf-layout='{
                "fontSize":30,
                "height":30,
                "lineHeight":30,
                "marginBottom":38
            }'>您的测试结果</div>
        <div class="cf-row cf-text-center" data-cf-layout='{
                "paddingLeft":70,
                "paddingRight":70,
                "paddingBottom":32
            }'>
            <div class="cf-row page-title" data-cf-layout='{
                    "height":100,
                    "lineHeight":100,
                    "fontSize":30
                }'>猫头鹰</div>
        </div>
    </div>

<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>

<script>
    function page_init(){
        g_jq_dom = $.extend({}, g_jq_dom, {
            $main_page:$("#page-main-panel")
        });

        g_jq_dom.$main_page.css({
            "min-height":g_var.wnd_height
        });
    }

    $(function(){
        page_init();
    });
</script>
</body>
</html>