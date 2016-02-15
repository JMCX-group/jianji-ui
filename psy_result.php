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
        .page-result-text{
            color:rgb(142,161,204);
            word-break: break-all;
            word-wrap: break-word;
            overflow: hidden;
        }
        .page-tag-title{
            position: absolute;
            top:0;
        }
        .page-tag{
            background-color: rgba(168,193,246,0.1);
        }
        .page-tag img{
            position: absolute;
            right: 0;
            top: 0;
        }

        .page-tag-input-panel input{
            border:0;
            outline: none;
            background-color: transparent;
            color:#fff;
            font-family: "Hiragino Sans GB W3","Hiragino Sans GB", "Microsoft YaHei", sans-serif, 'MS Sans Serif', Geneva, sans-serif;
        }
        .page-tag-input-title{
            position: absolute;
            left:0;
            top:0;
        }
        .page-tag-input-control{
            border-bottom: 1px solid rgba(163, 198, 246, 0.1);
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
                "marginBottom":32
            }'>
            <div class="cf-row page-title" data-cf-layout='{
                    "height":100,
                    "lineHeight":100,
                    "fontSize":30
                }'>猫头鹰</div>
        </div>
        <div class="cf-row page-result-text" data-cf-layout='{
                "lineHeight":36,
                "fontSize":22,
                "paddingLeft":70,
                "paddingRight":70,
                "marginBottom":52
            }'>这种人善于分析并体贴他人，更喜欢单独工作，在社交场合经常感觉不舒服。
            他们不耐烦于层次结构和政治问题，宁愿看到自己的领导人通过自身才能，而非其魅力和影响力来展示自身价值。
            尽管他们不是很善于交际，但他们聪明，言语刻薄，听到人们喜欢与他们为伴而颇感惊讶。
            他们适合从事作家、诗人、NGO（非政府组织）等职位。</div>
        <div class="cf-row page-user-head-img" data-cf-layout='{
                "paddingLeft":70,
                "paddingRight":70,
                "marginBottom":48
            }'>
            <div class="cf-col-x" data-cf-layout='{
                    "fontSize":24,
                    "height":80,
                    "lineHeight":80
                }'>推荐头像：</div>
            <div class="cf-col-x" data-cf-layout='{
                    "fontSize":0,
                    "width":80,
                    "height":80
                }'><img src="img/temp/psy_result/user_head/owl.png" class="cf-img-bkg"></div>
        </div>
        <div class="cf-row page-recommend-tag" data-cf-layout='{
                "paddingLeft":126,
                "paddingRight":70,
                "lineHeight":30,
                "fontSize":20,
                "marginBottom":30
            }'>
            <div class="cf-col-x page-tag-title" data-cf-layout='{
                    "height":30,
                    "lineHeight":30,
                    "fontSize":24,
                    "left":70
                }'>标签：</div>
            <div class="cf-col-x page-tag" data-cf-layout='{
                    "paddingLeft":16,
                    "paddingRight":16,
                    "marginBottom":20,
                    "marginLeft":20
                }'>体贴<img src="img/temp/psy_result/icon/tag_close.png" data-cf-layout='{"width":7,"right":2,"top":2}'></div>
            <div class="cf-col-x page-tag" data-cf-layout='{
                    "paddingLeft":16,
                    "paddingRight":16,
                    "marginBottom":20,
                    "marginLeft":20
                }'>聪明<img src="img/temp/psy_result/icon/tag_close.png" data-cf-layout='{"width":7,"right":2,"top":2}'></div>
            <div class="cf-col-x page-tag" data-cf-layout='{
                    "paddingLeft":16,
                    "paddingRight":16,
                    "marginBottom":20,
                    "marginLeft":20
                }'>善于分析<img src="img/temp/psy_result/icon/tag_close.png" data-cf-layout='{"width":7,"right":2,"top":2}'></div>
            <div class="cf-col-x page-tag" data-cf-layout='{
                    "paddingLeft":16,
                    "paddingRight":16,
                    "marginBottom":20,
                    "marginLeft":20
                }'>独行侠<img src="img/temp/psy_result/icon/tag_close.png" data-cf-layout='{"width":7,"right":2,"top":2}'></div>
            <div class="cf-col-x page-tag" data-cf-layout='{
                    "paddingLeft":16,
                    "paddingRight":16,
                    "marginBottom":20,
                    "marginLeft":20
                }'>有才能<img src="img/temp/psy_result/icon/tag_close.png" data-cf-layout='{"width":7,"right":2,"top":2}'></div>
        </div>
        <div class="cf-row page-tag-input-panel" data-cf-layout='{
                "paddingLeft":200,
                "lineHeight":44,
                "fontSize":24
            }'>
            <div class="cf-col-x page-tag-input-title" data-cf-layout='{"left":70}'>添加标签：</div>
            <div class="cf-col-x page-tag-input-control" data-cf-layout='{
                    "width":370,
                    "fontSize":20
                }'>
                <input placeholder="" type="text" maxlength="10" data-cf-layout='{"fontSize":20}'>
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
    }

    $(function(){
        page_init();
    });
</script>
</body>
</html>