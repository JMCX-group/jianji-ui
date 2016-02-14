<?php
/**
 * Created by JMCX - WHY
 * Date: 2016/2/14
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
        #page-user-name-panel,
        #page-pwd-panel{
            border-bottom: 1px solid rgba(163,193,246,0.1);
        }
        #page-login-btn{
            background-color: rgba(163,193,246,0.1);
            color: #fff;
            text-align: center;
        }
        .page-input-ico{
            position: absolute;
            left: 0;
            top: 0;
        }

        ::-webkit-input-placeholder { /* WebKit browsers */
            color:rgb(68,79,103);
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:rgb(68,79,103);
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:rgb(68,79,103);
        }
        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color:rgb(68,79,103);
        }

        input{
            outline:none;
            color: rgb(142,161,204);
            border:0;
            background:transparent;
        }
    </style>
</head>
<body class="cf-invisible">
    <div class="cf-wrap cf-wrap-no-bottom" id="page-main-panel">
        <img src="img/temp/login/bkg.jpg" class="cf-img-bkg">
        <div class="cf-row" data-cf-layout='{
                "paddingTop":464,
                "fontSize":0
            }'></div>
        <div class="cf-row" data-cf-layout='{
                "paddingLeft":86,
                "paddingRight":86,
                "fontSize":0
            }'>
            <div class="cf-row" id="page-user-name-panel" data-cf-layout='{
                    "height":55,
                    "marginBottom":56
                }'>
                <img src="img/temp/login/icon/user_name.png" class="page-input-ico" data-cf-layout='{
                        "left":30,
                        "width":24,
                        "top":0
                    }'>
                <input type="text" id="page-user-name" placeholder="请输入账号" data-cf-layout='{
                        "fontSize":24,
                        "height":24,
                        "lineHeight":24,
                        "width":360,
                        "paddingLeft":80
                    }'>
            </div>

            <div class="cf-row" id="page-pwd-panel" data-cf-layout='{
                    "height":55,
                    "marginBottom":48
                }'>
                <img src="img/temp/login/icon/pwd.png" class="page-input-ico" data-cf-layout='{
                        "left":30,
                        "width":22,
                        "top":0
                    }'>
                <input type="text" id="page-pwd" placeholder="请输入密码" data-cf-layout='{
                        "fontSize":24,
                        "height":24,
                        "lineHeight":24,
                        "width":360,
                        "paddingLeft":80
                    }'>
            </div>
            <div class="cf-row" id="page-login-btn" data-cf-layout='{
                    "fontSize":38,
                    "letterSpacing":20,
                    "height":86,
                    "lineHeight":86
                }'>登录</div>
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

//        $("#page-login-btn").css({letterSpacing:"20px"});
    }
    $(function(){
        page_init();
    });
</script>
</body>
</html>