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
        .page-head-col img{
            position: absolute;
            top: 0;
            left: 0;
        }
        .cf-col-x{
            box-sizing: border-box;
        }
        .page-desc-box {
            background-color: rgba(168,193,246,0.1);
        }
        .page-desc-box .page-nick-name{
            color:#fff;
        }
        .page-desc-box .page-user-title{
            color: rgb(168,193,246);
        }
        .page-desc-box .page-user-desc{
            text-align: left;
            color: #d5d5d5;
        }

        #page-submit{
            position: absolute;
            left:0;
            top: 0;
            text-align: center;
            color:#fff;
            background-color: rgba(168,193,246,0.1);
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
        <img src="img/temp/psy_result/bkg.jpg" class="cf-img-bkg">
        <div class="cf-row" data-cf-layout='{"height":104}'></div>

        <div class="cf-row" data-cf-layout='{
                "marginBottom":50
            }'>
            <div class="cf-col-x page-head-col" data-cf-layout='{
                    "height":160,
                    "fontSize":0
                }'>
                <img src="img/temp/recommend_follow/head_bkg.png" data-cf-layout='{
                        "width":156,
                        "left":30,
                        "top":2
                     }'>
                <img src="img/temp/recommend_follow/head_1.png" class="page-user-head-img" data-cf-layout='{
                        "width":114,
                        "left":51,
                        "top":23
                     }'>
                <img src="img/temp/recommend_follow/icon/head_selected_bkg.png" data-cf-layout='{"left":126,"top":86,"width":70}'>
                <img src="img/temp/recommend_follow/icon/head_unselected.png" class="page-user-select-ico" data-cf-layout='{"left":146,"top":106,"width":30}'>
            </div>
            <div class="cf-col-x cf-pull-right page-desc-box" data-cf-layout='{
                    "height":160,
                    "width":420,
                    "paddingTop":20,
                    "paddingLeft":20
                }'>
                <div class="cf-row">
                    <div class="cf-col-x page-nick-name" data-cf-layout='{
                            "paddingRight":20,
                            "fontSize":26,
                            "height":26,
                            "lineHeight":26
                        }'>李子勋</div>
                    <div class="cf-col-x page-user-title" data-cf-layout='{
                            "fontSize":20,
                            "height":26,
                            "lineHeight":26
                        }'>著名心理专家</div>
                </div>
                <div class="cf-row page-user-desc" data-cf-layout='{
                        "paddingTop":10,
                        "fontSize":20,
                        "lineHeight":30,
                        "paddingRight":10
                    }'>
                    毕业于华西医科大学，中日友好医院心理医生，首届中德高级心理治疗师培训项目学员，心理协会北京心理咨询与治疗专...
                </div>
            </div>
        </div>

        <div class="cf-row" data-cf-layout='{
                "marginBottom":50
            }'>
            <div class="cf-col-x page-head-col page-user-follow-selected" data-cf-layout='{
                    "height":160,
                    "fontSize":0
                }'>
                <img src="img/temp/recommend_follow/head_bkg.png" data-cf-layout='{
                        "width":156,
                        "left":30,
                        "top":2
                     }'>
                <img src="img/temp/recommend_follow/head_2.png" class="page-user-head-img" data-cf-layout='{
                        "width":114,
                        "left":51,
                        "top":23
                     }'>
                <img src="img/temp/recommend_follow/icon/head_selected_bkg.png" data-cf-layout='{"left":126,"top":86,"width":70}'>
                <img src="img/temp/recommend_follow/icon/head_selected.png" class="page-user-select-ico" data-cf-layout='{"left":146,"top":106,"width":30}'>
            </div>
            <div class="cf-col-x cf-pull-right page-desc-box" data-cf-layout='{
                    "height":160,
                    "width":420,
                    "paddingTop":20,
                    "paddingLeft":20
                }'>
                <div class="cf-row">
                    <div class="cf-col-x page-nick-name" data-cf-layout='{
                            "paddingRight":20,
                            "fontSize":26,
                            "height":26,
                            "lineHeight":26
                        }'>牛轰轰LZZ</div>
                    <div class="cf-col-x page-user-title" data-cf-layout='{
                            "fontSize":20,
                            "height":26,
                            "lineHeight":26
                        }'>新锐动漫产品设计师</div>
                </div>
                <div class="cf-row page-user-desc" data-cf-layout='{
                        "paddingTop":10,
                        "fontSize":20,
                        "lineHeight":30,
                        "paddingRight":10
                    }'>
                    主要作品《牛轰轰的小画》 、《西游降魔篇漫画版》、《爱情这件牛轰轰的小事》 。
                </div>
            </div>
        </div>

        <div class="cf-row" data-cf-layout='{
                "marginBottom":50
            }'>
            <div class="cf-col-x page-head-col page-user-follow-selected" data-cf-layout='{
                    "height":160,
                    "fontSize":0
                }'>
                <img src="img/temp/recommend_follow/head_bkg.png" data-cf-layout='{
                        "width":156,
                        "left":30,
                        "top":2
                     }'>
                <img src="img/temp/recommend_follow/head_3.png" class="page-user-head-img" data-cf-layout='{
                        "width":114,
                        "left":51,
                        "top":23
                     }'>
                <img src="img/temp/recommend_follow/icon/head_selected_bkg.png" data-cf-layout='{"left":126,"top":86,"width":70}'>
                <img src="img/temp/recommend_follow/icon/head_selected.png" class="page-user-select-ico" data-cf-layout='{"left":146,"top":106,"width":30}'>
            </div>
            <div class="cf-col-x cf-pull-right page-desc-box" data-cf-layout='{
                    "height":160,
                    "width":420,
                    "paddingTop":20,
                    "paddingLeft":20
                }'>
                <div class="cf-row">
                    <div class="cf-col-x page-nick-name" data-cf-layout='{
                            "paddingRight":20,
                            "fontSize":26,
                            "height":26,
                            "lineHeight":26
                        }'>Papi酱</div>
                    <div class="cf-col-x page-user-title" data-cf-layout='{
                            "fontSize":20,
                            "height":26,
                            "lineHeight":26
                        }'>微博原创视频达人</div>
                </div>
                <div class="cf-row page-user-desc" data-cf-layout='{
                        "paddingTop":10,
                        "fontSize":20,
                        "lineHeight":30,
                        "paddingRight":10
                    }'>
                    《papi酱》是美丽可爱的女孩儿papi酱自拍的搞笑视频。节目内容诙谐有趣，加上无厘头的搞笑配音，给大家带来无限欢乐。
                </div>
            </div>
        </div>

        <div class="cf-row" data-cf-layout='{
                "marginBottom":50
            }'>
            <div class="cf-col-x page-head-col page-user-follow-selected" data-cf-layout='{
                    "height":160,
                    "fontSize":0
                }'>
                <img src="img/temp/recommend_follow/head_bkg.png" data-cf-layout='{
                        "width":156,
                        "left":30,
                        "top":2
                     }'>
                <img src="img/temp/recommend_follow/head_4.png" class="page-user-head-img" data-cf-layout='{
                        "width":114,
                        "left":51,
                        "top":23
                     }'>
                <img src="img/temp/recommend_follow/icon/head_selected_bkg.png" data-cf-layout='{"left":126,"top":86,"width":70}'>
                <img src="img/temp/recommend_follow/icon/head_selected.png" class="page-user-select-ico" data-cf-layout='{"left":146,"top":106,"width":30}'>
            </div>
            <div class="cf-col-x cf-pull-right page-desc-box" data-cf-layout='{
                    "height":160,
                    "width":420,
                    "paddingTop":20,
                    "paddingLeft":20
                }'>
                <div class="cf-row">
                    <div class="cf-col-x page-nick-name" data-cf-layout='{
                            "paddingRight":20,
                            "fontSize":26,
                            "height":26,
                            "lineHeight":26
                        }'>李航_Antarctic</div>
                    <div class="cf-col-x page-user-title" data-cf-layout='{
                            "fontSize":20,
                            "height":26,
                            "lineHeight":26
                        }'>南极科考队员</div>
                </div>
                <div class="cf-row page-user-desc" data-cf-layout='{
                        "paddingTop":10,
                        "fontSize":20,
                        "lineHeight":30,
                        "paddingRight":10
                    }'>
                    踏足南极，与企鹅一起生活，仰望同一片星空...
                </div>
            </div>
        </div>

        <div class="cf-row" data-cf-layout='{
                "paddingTop":20,
                "paddingBottom":70
            }'>
            <div class="cf-col-x" id="page-submit" data-cf-layout='{
                "width":500,
                "height":100,
                "lineHeight":100,
                "fontSize":38,
                "marginLeft":70
            }'>关注</div>
        </div>
    </div>

    <?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>

<script>
    function page_init(){
        g_jq_dom = $.extend({}, g_jq_dom, {
            $main_panel:$("#page-follow-list"),
            $user_select_btn:$(".page-user-head-img"),
            $submit:$("#page-submit")
        });

        g_jq_dom.$main_panel.css({
            "min-height":g_var.wnd_height
        });

        g_var = $.extend({}, g_var, {
            body_move_status:false
        });
    }

    function jump_to_index(){
        if(g_var.body_move_status){return;}
        <?php if(isset($_GET['head'])){ ?>
        location.href = 'select_page_to_show.php?head='+'<?php echo $_GET['head'];?>';
        <?php } else { ?>
        location.href = 'index.php';
        <?php } ?>
    }
    function toggle_select(){
        if(g_var.body_move_status){return;}
        var $this_head = $(this).parent();
        var $select_ico = $this_head.find('.page-user-select-ico');
        var select_status = $this_head.hasClass('page-user-follow-selected');

        if(select_status){
            $select_ico.attr('src', 'img/temp/recommend_follow/icon/head_unselected.png');
            $this_head.removeClass('page-user-follow-selected');
        } else {
            $select_ico.attr('src', 'img/temp/recommend_follow/icon/head_selected.png');
            $this_head.addClass('page-user-follow-selected');
        }
    }
    function bind_event(){
        g_jq_dom.$body
            .on(g_event.touchmove, function(){g_var.body_move_status = true})
            .on(g_event.touchend, function(){g_var.body_move_status = false});
        g_jq_dom.$user_select_btn.on(g_event.touchend,toggle_select);
        g_jq_dom.$submit.on(g_event.touchend,jump_to_index);
    }

    $(function(){
        page_init();
        bind_event();
    });
</script>
</body>
</html>