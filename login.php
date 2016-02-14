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
        .page-ext-opt-panel{
            text-align: center;
            color: rgb(142,161,204);
        }
        .page-ext-opt-divider{
            display: inline-block;
            width: 1px;
            background-color: rgb(142,161,204);
        }
        .page-ext-opt-btn{
            display: inline-block;
            text-align: center;
        }

        .page-other-login-divider{
            background-color: rgb(68,79,103);
        }

        .page-other-login-title{
            color:rgb(68,79,103);
            text-align: center;
        }
        .page-other-login-btn-group{
            text-align: center;
            font-size: 0;
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
                    "letterSpacing":12,
                    "height":86,
                    "lineHeight":86,
                    "marginBottom":30
                }'>&nbsp;登录</div>

            <div class="cf-row page-ext-opt-panel" data-cf-layout='{
                    "height":20,
                    "lineHeight":20,
                    "fontSize":0,
                    "marginBottom":110
                }'>
                <span class="page-ext-opt-divider" data-cf-layout='{
                        "height":20,
                        "fontSize":20
                    }'>&nbsp;</span>
                <span class="page-ext-opt-btn" id="page-ext-opt-forget-pwd" data-cf-layout='{
                        "height":20,
                        "fontSize":20,
                        "width":100
                    }'>忘记密码</span>
                <span class="page-ext-opt-divider" data-cf-layout='{
                        "height":20,
                        "fontSize":20
                    }'>&nbsp;</span>
                <span class="page-ext-opt-btn" id="page-ext-opt-register" data-cf-layout='{
                        "height":20,
                        "fontSize":20,
                        "width":100
                    }'>我要注册</span>
                <span class="page-ext-opt-divider" data-cf-layout='{
                        "height":20,
                        "fontSize":20
                    }'>&nbsp;</span>
            </div>

            <div class="cf-row page-other-login-panel">
                <div class="cf-row">
                    <div class="cf-col-x page-other-login-divider" data-cf-layout='{
                            "width":144,
                            "height":1,
                            "marginTop":10
                        }'></div>
                    <div class="cf-col-x page-other-login-title" data-cf-layout='{
                            "height":20,
                            "lineHeight":20,
                            "fontSize":20,
                            "width":180
                        }'>快速登录</div>
                    <div class="cf-col-x page-other-login-divider" data-cf-layout='{
                            "width":144,
                            "height":1,
                            "marginTop":10
                        }'></div>
                </div>
                <div class="cf-row page-other-login-btn-group" data-cf-layout='{
                        "paddingTop":30,
                        "paddingBottom":75
                    }'>
                    <img src="img/temp/login/btn/weixin.png" data-cf-layout='{
                            "width":86,
                            "marginLeft":10,
                            "marginRight":10
                        }'>
                    <img src="img/temp/login/btn/qq.png" data-cf-layout='{
                            "width":86,
                            "marginLeft":10,
                            "marginRight":10
                        }'>
                    <img src="img/temp/login/btn/weibo.png" data-cf-layout='{
                            "width":86,
                            "marginLeft":10,
                            "marginRight":10
                        }'>
                </div>
            </div>
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