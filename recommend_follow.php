<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 16/2/22
 * Time: 下午2:53
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
        #page-follow-list{
            text-align: center;
        }
        .animated {
            -webkit-animation-duration: 0.4s;
            /*-webkit-animation-delay: 0.4s;*/

            -moz-animation-duration: 0.4s;
            /*-moz-animation-delay: 0.4s;*/

            -ms-animation-duration: 0.4s;
            /*-ms-animation-delay: 0.4s;*/

            animation-duration: 0.4s;
            /*animation-delay: 0.4s;*/
        }
    </style>
</head>
<body class="cf-invisible">
    <div class="cf-wrap cf-wrap-no-bottom" id="page-follow-list">
        <div class="cf-row" data-cf-layout='{"height":104}'></div>
        <div class="cf-row" data-cf-layout='{
                "marginBottom":50
            }'>
            <div class="cf-col-x" data-cf-layout='{
                    "height":50,
                    "lineHeight":50,
                    "fontSize":0
                }'><img src="img/temp/recommend_follow/"></div>
            <div class="cf-col-x"></div>
        </div>
    </div>
</body>
</html>