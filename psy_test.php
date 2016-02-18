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
        .page-test-title{
            color:rgb(142,161,204);
        }
        .page-test-question-text{
            position: relative;
            display: inline-block;
            color:rgb(142,161,204);
        }
        .page-test-answer-text{
            color:#fff;
        }
        .page-test-answer-text span{
            display: inline-block;
            border-bottom: 1px solid rgba(168,193,246,0.1);
        }
        .page-btn-next{
            text-align: right;
            color:rgb(142,161,204);
        }
        .page-btn-next img{
            position: absolute;
            right: 0;
            bottom: 0;
        }
        .page-btn-submit{
            text-align: center;
        }
        .page-btn-submit span{
            display: inline-block;
            background-color: rgba(168,193,246,0.1);
            color:#fff;
        }

        .page-opt-pass{
            position: absolute;
            z-index: 1;
        }
        .page-paper-behind{
            position: absolute;
            left:0;
            top:0;
            visibility: hidden;
        }
    </style>
</head>
<body class="cf-invisible">
    <img src="img/temp/psy_test/bkg.jpg" class="cf-img-bkg">
    <div class="cf-wrap cf-wrap-no-bottom" id="page-paper-panel-1" data-page-panel-idx="1">
<!--        <img src="img/temp/psy_test/bkg.jpg" class="cf-img-bkg">-->
        <img src="img/temp/psy_test/btn/pass.png" class="page-opt-pass" data-cf-layout='{
                "width":74,
                "right":30,
                "top":30
            }'>
        <div class="cf-row" data-cf-layout='{
                "paddingTop":120
            }'></div>
        <div class="cf-row page-test-title" data-cf-layout='{
                "paddingLeft":70,
                "fontSize":28,
                "lineHeight":48,
                "paddingBottom":110
            }'>
            <div>人与动物之间，有很多相似的特质,</div>
            <div>隐藏在你身体里的动物特质又是哪一种？</div>
        </div>
        <div class="cf-row page-test-qa-entry" data-cf-layout='{
                "paddingBottom":90
            }'>
            <div class="cf-row page-test-question" data-cf-layout='{
                    "paddingBottom":60,
                    "paddingLeft":42,
                    "lineHeight":30,
                    "height":90,
                    "fontSize":0
                }'>
                <span class="page-test-question-text" data-cf-layout='{
                        "paddingLeft":70,
                        "fontSize":30,
                        "height":70,
                        "lineHeight":70
                    }'>
                    <img src="img/temp/psy_test/icon/question_point.png" class="cf-img-bkg" data-cf-layout='{"width":70}'>
                    <span>定位</span>
                </span>
            </div>

            <div class="cf-row page-test-answer-text" data-psy-vector="E" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>你愿意出去找乐子</span>
                </div>
            </div>
            <div class="cf-row page-test-answer-text" data-psy-vector="I" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>还是愿意呆在家里看一本好书或看电视</span>
                </div>
            </div>
        </div>

        <div class="cf-row page-test-qa-entry" data-cf-layout='{
                "paddingBottom":90
            }'>
            <div class="cf-row page-test-question" data-cf-layout='{
                    "paddingBottom":60,
                    "paddingLeft":42,
                    "lineHeight":30,
                    "height":90,
                    "fontSize":0
                }'>
                <span class="page-test-question-text" data-cf-layout='{
                        "paddingLeft":70,
                        "fontSize":30,
                        "height":70,
                        "lineHeight":70
                    }'>
                    <img src="img/temp/psy_test/icon/question_point.png" class="cf-img-bkg" data-cf-layout='{"width":70}'>
                    <span>悟性</span>
                </span>
            </div>

            <div class="cf-row page-test-answer-text" data-psy-vector="S" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>当你学习新东西时，是所见即所学</span>
                </div>
            </div>
            <div class="cf-row page-test-answer-text" data-psy-vector="N" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>或根据自己的直觉添加/删除印象</span>
                </div>
            </div>
        </div>

        <div class="cf-row page-btn-next" data-cf-layout='{
                "paddingRight":90,
                "fontSize":34,
                "lineHeight":34,
                "height":34,
                "marginBottom":80
            }'>
            <span class="page-opt-next-page">NEXT</span>
            <img src="img/temp/psy_test/btn/next.png" data-cf-layout='{
                    "right":70,
                    "bottom":4,
                    "width":8
                }'>
        </div>
    </div>

    <div class="cf-wrap cf-wrap-no-bottom page-paper-behind" id="page-paper-panel-2" data-page-panel-idx="2">
        <img src="img/temp/psy_test/btn/pass.png" class="page-opt-pass" data-cf-layout='{
                "width":74,
                "right":30,
                "top":30
            }'>
        <div class="cf-row" data-cf-layout='{
                "paddingTop":142
            }'></div>
        <div class="cf-row page-test-qa-entry" data-cf-layout='{
                "paddingBottom":90
            }'>
            <div class="cf-row page-test-question" data-cf-layout='{
                    "paddingBottom":60,
                    "paddingLeft":42,
                    "lineHeight":30,
                    "height":90,
                    "fontSize":0
                }'>
                <span class="page-test-question-text" data-cf-layout='{
                        "paddingLeft":70,
                        "fontSize":30,
                        "height":70,
                        "lineHeight":70
                    }'>
                    <img src="img/temp/psy_test/icon/question_point.png" class="cf-img-bkg" data-cf-layout='{"width":70}'>
                    <span>决定</span>
                </span>
            </div>

            <div class="cf-row page-test-answer-text" data-psy-vector="T" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>当你对某件事做出决定时，依靠逻辑推理</span>
                </div>
            </div>
            <div class="cf-row page-test-answer-text" data-psy-vector="F" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>还是倾向于情感和移情</span>
                </div>
            </div>
        </div>

        <div class="cf-row page-test-qa-entry" data-cf-layout='{
                "paddingBottom":90
            }'>
            <div class="cf-row page-test-question" data-cf-layout='{
                    "paddingBottom":60,
                    "paddingLeft":42,
                    "lineHeight":30,
                    "height":90,
                    "fontSize":0
                }'>
                <span class="page-test-question-text" data-cf-layout='{
                        "paddingLeft":70,
                        "fontSize":30,
                        "height":70,
                        "lineHeight":70
                    }'>
                    <img src="img/temp/psy_test/icon/question_point.png" class="cf-img-bkg" data-cf-layout='{"width":70}'>
                    <span>态度</span>
                </span>
            </div>

            <div class="cf-row page-test-answer-text" data-psy-vector="J" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>愿意生活中各方面都井井有条，预先安排</span>
                </div>
            </div>
            <div class="cf-row page-test-answer-text" data-psy-vector="P" data-cf-layout='{
                    "paddingLeft":68,
                    "paddingBottom":30,
                    "fontSize":24,
                    "lineHeight":24
                }'>
                <div class="cf-row page-answer-item">
                    <img src="img/temp/psy_test/icon/answer_unselected.png" data-cf-layout='{"width":16}'>
                    <span data-cf-layout='{"marginLeft":20, "width":470,"paddingBottom":22}'>还是喜欢突如其来，令人惊喜</span>
                </div>
            </div>
        </div>

        <div class="cf-row page-btn-submit" data-cf-layout='{
                "paddingTop":100,
                "marginBottom":80
            }'>
            <span data-cf-layout='{
                    "width":500,
                    "height":100,
                    "lineHeight":100,
                    "fontSize":38
                }' class="page-opt-submit">提交</span>
        </div>
    </div>

<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>
<script>
    function page_init(){
        g_var = $.extend({}, g_var, {
            cur_page:1,
            last_page:2
        });

        g_jq_dom = $.extend({}, g_jq_dom, {
            $all_page:$("#page-paper-panel-1,#page-paper-panel-2"),
            $page_1:$("#page-paper-panel-1"),
            $page_2:$("#page-paper-panel-2")
        });
        g_jq_dom.$all_page.css({
            "min-height":g_var.wnd_height
        });
    }

    function check_input($page){
        var $all_qa_entry = $page.find('.page-test-qa-entry');
        var ret = true;
        $all_qa_entry.each(function(){
            var $selected_answer = $(this).find('.page-selected-answer');

            if(0 == $selected_answer.length){
                ret = false;
                return false;
            }
        });
        return ret;
    }

    function go_to_next(){
        var $pages = [
            g_jq_dom.$all_page,
            g_jq_dom.$page_1,
            g_jq_dom.$page_2
        ];

        var $cur_page = $pages[g_var.cur_page];

        if(!check_input($cur_page)){
            alert("请做完本页面的所有项目选择。");
            return;
        }

        if(g_var.cur_page >= g_var.last_page){return;}
        var $page_to_show = $pages[g_var.cur_page+1];

        g_var.cur_page += 1;

        $cur_page.off(g_event.css_ani_event).on(g_event.css_ani_event, function(){
            $page_to_show.css({visibility:"visible",display:"none"}).fadeIn(200);
            $cur_page.off(g_event.css_ani_event).hide().removeClass("animated fadeOutLeft");
        });

        $cur_page.addClass("animated fadeOutLeft");
    }

    function select_answer(){
        var $this = $(this);
        var $this_question = $this.parents(".page-test-qa-entry");
        var $this_answer_panel = $this.parents(".page-test-answer-text");
        var $this_answer_img = $this_answer_panel.find("img");
        var $cur_answer_panel = $this_question.find(".page-selected-answer");
        var $cur_answer_img = $cur_answer_panel.find("img");

        if(0 !== $cur_answer_panel.length){
            $cur_answer_img.attr('src', 'img/temp/psy_test/icon/answer_unselected.png');
            $cur_answer_panel.removeClass("page-selected-answer");
        }

        $this_answer_img.attr('src', 'img/temp/psy_test/icon/answer_selected.png');
        $this_answer_panel.addClass("page-selected-answer");
    }

    function jump_to_result(){
        if(!check_input(g_jq_dom.$page_2)){
            alert("请做完本页面的所有项目选择。");
            return;
        }

        var $all_entry = $('.page-selected-answer');
        var psy_vector = '';
        $all_entry.each(function(){
            psy_vector += $(this).attr('data-psy-vector');
        });
        location.href = 'psy_result.php?psy_vector='+psy_vector;
    }

    function bind_event(){

        g_jq_dom.$body.on(g_event.touchend, '.page-opt-pass', function(){
            location.href = g_var.baseUrl;
        });

        g_jq_dom.$body.on(g_event.touchend, '.page-opt-next-page',go_to_next);
        g_jq_dom.$body.on(g_event.touchend, '.page-answer-item',select_answer);
        g_jq_dom.$body.on(g_event.touchend, '.page-opt-submit',jump_to_result);
    }

    $(function(){
        page_init();
        bind_event();
    });
</script>
</body>
</html>