<?php
/**
 * Created by JMCX - WHY
 * Date: 2016/3/6
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
        .page-top{
            color:#fff;
            font-size: 0;
        }

        #page-photo-list{
            display: none;
        }
        #page-location-select{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0;
            opacity: 0;
            z-index: -1;
        }
        .page-location-title{
            color: #fff;
        }
        #page-selected-location{
            color: rgb(168,193,246);
        }
        .page-select-divide-line{
            background-color: rgb(61,61,73);
        }

        .page-time-title{
            color:#fff;
        }

        #page-end-time,
        #page-start-time{
            color: rgb(168,193,246);
        }

        #page-end-time-input,
        #page-start-time-input{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0;
            opacity: 0;
            z-index: -1;
        }
    </style>
</head>
<body class="cf-invisible">
    <div class="cf-wrap cf-wrap-no-bottom" id="page-main-panel">
        <img src="img/temp/print/bkg.jpg" class="cf-img-bkg">
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
            }'>返回</div>
                <div class="cf-col-x" data-cf-layout='{
                    "textAlign":"center",
                    "fontSize":30,
                    "height":30,
                    "width":400
                }'>打印照片</div>
                <div class="cf-col-x page-go-to-setting" data-cf-layout='{
                "paddingRight":20,
                "paddingTop":4,
                "height":30,
                "width":120,
                "textAlign":"right"
            }'><img src="img/temp/print/finish_btn.png" data-cf-layout='{
                    "width":80
                }'></div>
            </div>
        </div>
        <div class="cf-row page-print-panel">
            <div class="cf-row page-photo-panel" data-cf-layout='{
                    "fontSize":0
                }'>
                <div class="cf-row" data-cf-layout='{"paddingBottom":20}'>
                    <div class="cf-col-x" data-cf-layout='{"paddingRight":20}'><img src="img/temp/print/add_photo_btn.png" data-cf-layout='{"width":310}'></div>
                    <div class="cf-col-x"><img src="img/temp/print/add_photo_btn.png" data-cf-layout='{"width":310}'></div>
                </div>
                <div class="cf-row" data-cf-layout='{"paddingBottom":20}'>
                    <div class="cf-col-x" data-cf-layout='{"paddingRight":20}'><img src="img/temp/print/add_photo_btn.png" data-cf-layout='{"width":310}'></div>
                    <div class="cf-col-x"><img src="img/temp/print/add_photo_btn.png" data-cf-layout='{"width":310}'></div>
                </div>
            </div>
            <div class="cf-row page-map-panel" data-cf-layout='{"fontSize":0}'>
                <img src="img/temp/print/map/map1.png" data-cf-layout='{"width":640}'>
            </div>
        </div>
        <div class="cf-row page-photo-filter-panel" data-cf-layout='{"fontSize":0}'>
            <div class="cf-col-x page-condition-panel-shown" id="page-show-photo-filter-condition" ><img src="img/temp/print/filter_photo_collapse_btn.png" data-cf-layout='{"width":100}'></div>
            <div class="cf-col-x" id="page-photo-filter-condition-panel" data-cf-layout='{"width":480}'>
                <div class="cf-row" id="page-location-input" data-cf-layout='{"height":102,"lineHeight":102}'>
                    <span class="page-location-title" data-cf-layout='{"display":"inline-block","fontSize":22,"paddingLeft":20}'>位置</span>
                    <span id="page-selected-location" data-cf-layout='{"fontSize":22,"paddingLeft":16}'>北京</span>
                    <select data-cf-layout='{"height":102}' id="page-location-select"><option value="bj" selected="selected">北京</option><option value="hrb">哈尔滨</option></select>
                </div>
                <div class="cf-row page-select-divide-line" data-cf-layout='{"height":1}'></div>
                <div class="cf-row page-time-input" data-cf-layout='{"height":102,"lineHeight":102}'>
                    <span class="page-time-title" data-cf-layout='{"fontSize":22,"paddingLeft":20}'>时间</span>
                    <span id="page-start-time" data-cf-layout='{"fontSize":22,"paddingLeft":20}'>开始日期</span>
                    <input placeholder="" type="date" id="page-start-time-input">

                    <span class="page-time-title" data-cf-layout='{"fontSize":22,"paddingLeft":20}'>至</span>
                    <span id="page-end-time" data-cf-layout='{"fontSize":22,"paddingLeft":20}'>结束日期</span>
                    <input placeholder="" type="date" id="page-end-time-input">
                </div>
            </div>
            <div class="cf-row" id="page-photo-list">
                <div></div>
            </div>
            <div class="cf-col-x" id="page-do-photo-filter" data-cf-layout='{"float":"right"}'><img src="img/temp/print/filter_ok_enabled_btn.png" data-cf-layout='{"width":60}'></div>
        </div>
    </div>

    <?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>

<script>
    function page_init(){
        g_jq_dom = $.extend({}, g_jq_dom, {
            $main_page:$("#page-main-panel"),
            $location_selected:$("#page-selected-location"),
            $location_select:$("#page-location-select"),
            $start_time:$("#page-start-time"),
            $start_time_input:$("#page-start-time-input"),
            $end_time:$("#page-end-time"),
            $end_time_input:$("#page-end-time-input"),
            $filter_condition_panel:$("#page-photo-filter-condition-panel"),
            $btn_filter_photo:$("#page-do-photo-filter"),
            $show_condition_panel:$("#page-show-photo-filter-condition"),
            $photo_list:$("#page-photo-list")
        });

        g_jq_dom.$main_page.css({
            "min-height":g_var.wnd_height
        });

        g_var = $.extend({}, g_var, {
            body_move_status:false,
            location_map:{bj:"北京",hrb:"哈尔滨"}
        });
    }

    function bind_event(){
        g_jq_dom.$body.on(g_event.touchmove, function(){g_var.body_move_status = true}).on(g_event.touchend, function(){g_var.body_move_status = false});

        g_jq_dom.$location_select.on('focus', function(){
            g_jq_dom.$location_select.css({zIndex:0});
        }).on('blur', function(){
            g_jq_dom.$location_select.css({zIndex:-1});
            var cur_location_val = g_jq_dom.$location_select.val();
            g_jq_dom.$location_selected.text(g_var.location_map[cur_location_val]);
        });

        g_jq_dom.$start_time_input.on('focus', function(){
            g_jq_dom.$start_time_input.css({zIndex:0});
        }).on('blur', function(){
            g_jq_dom.$start_time_input.css({zIndex:-1});
            var cur_date = g_jq_dom.$start_time_input.val();
            if('' !== cur_date){
                g_jq_dom.$start_time.text(cur_date);
            } else {
                g_jq_dom.$start_time.text("开始日期");
            }

        });

        g_jq_dom.$end_time_input.on('focus', function(){
            g_jq_dom.$end_time_input.css({zIndex:0});
        }).on('blur', function(){
            g_jq_dom.$end_time_input.css({zIndex:-1});
            var cur_date = g_jq_dom.$end_time_input.val();
            if('' !== cur_date){
                g_jq_dom.$end_time.text(cur_date);
            } else {
                g_jq_dom.$end_time.text("结束日期");
            }
        });

        g_jq_dom.$location_selected.on(g_event.touchend,function(){
            if(g_var.body_move_status){return;}
            g_jq_dom.$location_select.trigger('focus');
        });

        g_jq_dom.$start_time.on(g_event.touchend,function(){
            if(g_var.body_move_status){return;}
            g_jq_dom.$start_time_input.trigger('focus');
        });

        g_jq_dom.$end_time.on(g_event.touchend,function(){
            if(g_var.body_move_status){return;}
            g_jq_dom.$end_time_input.trigger('focus');
        });

        function hide_photo_filter_panel(){
            g_jq_dom.$show_condition_panel.removeClass('page-condition-panel-shown');
            g_jq_dom.$show_condition_panel.find('img').attr('src','img/temp/print/filter_photo_expand_btn.png');
            g_jq_dom.$btn_filter_photo.hide();
            g_jq_dom.$filter_condition_panel.hide();
            g_jq_dom.$photo_list.show();
        }

        function show_photo_filter_panel(){
            g_jq_dom.$show_condition_panel.addClass('page-condition-panel-shown');
            g_jq_dom.$photo_list.hide();
            g_jq_dom.$btn_filter_photo.show();
            g_jq_dom.$filter_condition_panel.show();
            g_jq_dom.$show_condition_panel.find('img').attr('src','img/temp/print/filter_photo_collapse_btn.png');
        }

        g_jq_dom.$show_condition_panel.on(g_event.touchend, function(){
            if(g_var.body_move_status){return;}
            if(g_jq_dom.$show_condition_panel.hasClass('page-condition-panel-shown')){
                hide_photo_filter_panel();
            } else {
                show_photo_filter_panel();
            }
        });

        g_jq_dom.$btn_filter_photo.on(g_event.touchend, function(){
            if(g_var.body_move_status){return;}
            hide_photo_filter_panel();
        });
    }

    $(function(){
        page_init();
        bind_event();
    });
</script>
</body>
</html>