<?php
/**
 * Created by JMCX - WHY
 * Date: 2016/1/30
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
            background-color: rgb(39,39,51);
            max-width: 640px;
            position: relative;
        }
        #page-calendar{
            font-family: "AvenirNextLTPro-Regular";
            font-weight: bolder;
            color:rgba(255,255,255,0.7);
        }
        #page-calendar #page-day-4{
            color:rgb(255,255,255);
        }
        #page-calendar .page-calendar-day{
            width:14.285714%;
        }

        #page-calendar .page-en-week-day{
            font-weight: normal;
        }
        .page-blog-entry{
            overflow: hidden;
        }
        .page-blog-entry .page-the-line{
            position: absolute;
            height: 100%;
            width: 1px;
            background-color:rgba(255,255,255,0.4);
        }
        .page-blog-entry:last-child .page-the-line{
            display: none;
        }
        .page-blog-entry .page-type-node img{width:45.16129%;}

        .page-blog-entry .page-content-panel{
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .page-blog-entry:last-child .page-content-panel{
            border-bottom: 0;
        }

        .page-side-menu-inner{
            border-top: 1px solid rgba(255,255,255,0.2);
        }
        .page-menu-item{
            border-bottom: 1px solid rgba(255,255,255,0.2);;
        }
        .page-menu-item img{
            left:auto !important;
        }

        .page-remove-img{
            display: none;
            position: absolute;
            right: 0;
            top:0;
        }

        #page-show-blog-img-panel{
            display: none;
            box-sizing: border-box;
            position: fixed;
            width:100%;
            left: 0;
            top: 0;
            font-size: 0;
            text-align: center;
            overflow: hidden;
            background-color: rgba(37,37,37,0.95);
            z-index: 4;
        }
        #page-show-blog-img-panel > div.page-img-count{
            position: absolute;
            left: 0;
            top: 0;
        }

        #page-main-footer,
        #page-pre-publish-footer,
        #page-publish-footer{
            position: fixed;
            left: 50%;
            bottom: 0;
            background-color: rgb(60,60,70);
            color:#fff;
        }
        #page-tag-input{
            border: 0;
            padding: 0;
            background-color: transparent;
            outline: none;
            color: #fff;
            font-family: "Arial ", "Hiragino Sans GB W3", "Hiragino Sans GB", "Microsoft YaHei", sans-serif, 'MS Sans Serif', Geneva, sans-serif;
        }

        #page-tag-input::-webkit-input-placeholder { /* WebKit browsers */
            color:rgb(255,255,255);
        }
        #page-tag-input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:rgb(255,255,255);
        }
        #page-tag-input::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:rgb(255,255,255);
        }
        #page-tag-input:-ms-input-placeholder { /* Internet Explorer 10+ */
            color:rgb(255,255,255);
        }

        #page-tag-input:focus::-webkit-input-placeholder { /* WebKit browsers */
            color:rgb(68,79,103);
        }
        #page-tag-input:focus:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:rgb(68,79,103);
        }
        #page-tag-input:focus::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:rgb(68,79,103);
        }
        #page-tag-input:focus:-ms-input-placeholder { /* Internet Explorer 10+ */
            color:rgb(68,79,103);
        }

        #page-publish-top{
            background-color: rgba(0,0,0,0.2);
            color:#fff;
            font-size: 0;
        }
        #page-edit-ext-info{
            color: #fff;
        }

        #page-edit-ext-info .page-ext-info-entry{
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        #page-edit-ext-info .page-ext-info-entry.page-last{border: 0}

        #page-pre-publish-panel{
            position: fixed;
            left:50%;
            bottom: 0;
        }
        #page-pre-publish-panel #page-pre-publish-type-panel{
            text-align: center;
            color: #fff;
        }
        #page-blur-mask{
            position: fixed;
            left:0;
            top:0;
            display: none;
            background-color: rgba(37,37,37,0.95);
        }
        #page-img-list{
            position: absolute;
            overflow: hidden;
            background-color: rgb(38,39,53);
        }
        #page-side-menu{
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            color:#e2e2e2;
            background-color: rgb(38,39,51);
            box-shadow:-2px -1px 2px #1a1a1a;
        }
        #page-main-footer{
            z-index: 1;
        }

        #page-filters-panel{
            display: none;
            position: absolute;
            left:50%;
            top:0;
            z-index: 5;
        }

        #page-filters-top{
            color:#fff;
            background-color: rgba(0,0,0,0.2);
        }

        #page-filters-preview-panel{
            text-align: center;
        }
        #page-filters-list-panel{
            overflow: hidden;
            background-color: rgba(0,0,0,0.2);
        }

        #page-filters-list-panel-inner{
            left: 0;
            top: 0;
            text-align: center;
        }

        #page-filters-list-panel-inner .page-filter-type{
            overflow: hidden;
            float: left;
            text-align: center;
            color:#fff;
        }

        #page-filters-list-panel-inner .page-filter-type .page-filter-name{
            background-color:  rgba(0,0,0,0.8);
        }

        .page-filter-cache-preview{
            display: none;
        }

        #page-filters-list-panel-inner .page-filter-type.page-filter-selected{
            border-color: #fff !important;
        }

        #page-publish-privileges{
            display: none;
            position: absolute;
            left: 0;
            top: 0;
            background-color: rgb(61,61,73);
            color:#fff;
        }

        #page-publish-privileges .page-privileges-selected{
            color:rgb(168,193,246);
            background-color: rgba(168,193,246,0.2);
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

        /*begin: debug*/
        #page-publish-footer{
            display: none;
            z-index: 3;
        }

        #page-pre-publish-footer{
            display: none;
            z-index: 2;
        }
        #page-main-panel{
            /*display: none;*/
        }
        #page-publish-panel{
            display: none;
        }
        #page-pre-publish-panel{
            display: none;
        }
        /*end: debug*/

        #page-filter-loading-page{
            display: none;
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
        }
        .page-load-ani .page-loader {
            margin: 0 auto;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em solid rgba(255, 255, 255, 0.2);
            border-right: 1.1em solid rgba(255, 255, 255, 0.2);
            border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
            border-left: 1.1em solid #ffffff;
            -webkit-animation: page-load-ani 1.1s infinite linear;
            animation: page-load-ani 1.1s infinite linear;
        }
        .page-load-ani .page-loader,
        .page-load-ani .page-loader:after {
            border-radius: 50%;
            width: 6em;
            height: 6em;
        }
        @-webkit-keyframes page-load-ani {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes page-load-ani {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body class="cf-invisible">

<!-- begin: 主界面 -->
<div class="cf-wrap" id="page-main-panel">
    <img src="img/temp/skin_dark/demo_bkg.jpg" class="cf-img-bkg">
    <div class="cf-row cf-text-center" data-cf-layout='{
            "paddingTop":100,
            "paddingBottom":40,
            "fontSize":0
        }'><?php if(isset($_GET['head'])){ ?>
            <img src="img/temp/big_user_head/<?php echo $_GET['head'];?>" data-cf-layout='{
                "border":{
                    "width":8,
                    "style":"solid",
                    "color":"#fff"
                },
                "borderRadius":"50%",
                "width":180,
                "boxSizing":"border-box"
            }'>
        <?php } else { ?>
        <img src="img/temp/demo_head_female.png" data-cf-layout='{
                "border":{
                    "width":8,
                    "style":"solid",
                    "color":"#fff"
                },
                "borderRadius":"50%",
                "width":180,
                "boxSizing":"border-box"
            }'>
        <?php }?>

    </div>
    <div class="cf-row cf-text-center" data-cf-layout='{
            "height":40,
            "marginBottom":30
        }'><img src="img/temp/skin_dark/show_curve.png" data-cf-layout='{
                "width":170
            }'>
    </div>
    <div class="cf-row" id="page-curve" data-cf-layout='{"height":80}'><img src="img/temp/demo_curve.png" class="cf-img-bkg"></div>
    <div class="cf-row cf-text-center" id="page-calendar" data-cf-layout='{
            "paddingTop":22,
            "paddingLeft":20,
            "paddingRight":20,
            "fontSize":0
        }'>
        <div class="cf-col-x page-calendar-day" id="page-day-1">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>WED</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>20</div>
        </div>
        <div class="cf-col-x page-calendar-day" id="page-day-2">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>THU</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>28</div>
        </div>
        <div class="cf-col-x page-calendar-day" id="page-day-3">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>FRI</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>29</div>
        </div>
        <div class="cf-col-x page-calendar-day" id="page-day-4">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>SAT</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>30</div>
        </div>
        <div class="cf-col-x page-calendar-day" id="page-day-5">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>SUN</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>31</div>
        </div>
        <div class="cf-col-x page-calendar-day" id="page-day-6">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>MON</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>01</div>
        </div>
        <div class="cf-col-x page-calendar-day" id="page-day-7">
            <div class="cf-row page-en-week-day" data-cf-layout='{"fontSize":22,"height":22,"lineHeight":22,"marginBottom":12}'>TUE</div>
            <div class="cf-row page-en-month-day" data-cf-layout='{"fontSize":40,"height":40,"lineHeight":40}'>02</div>
        </div>
    </div>

    <div class="cf-row" data-cf-layout='{
            "marginTop":16,
            "marginBottom":30,
            "textAlign":"center"
        }'>
        <div class="cf-row" data-cf-layout='{
                "height":1,
                "backgroundColor":"rgba(255,255,255,0.6)"
        }'>
            <div data-cf-layout='{
                "fontSize":0,
                "position":"absolute",
                "width":24,
                "height":5,
                "marginLeft":-12,
                "left":320,
                "top":-2,
                "backgroundColor":"rgb(255,255,255)"
            }'></div>
        </div>
    </div>

    <div class="cf-row" id="page-blog-list">
    <!--    begin: text demo -->
        <div class="cf-row page-blog-entry" data-cf-layout='{
                "paddingLeft":20,
                "paddingBottom":10
            }'>
            <div class="cf-row page-the-line" data-cf-layout='{
                    "left":51,
                    "top":62
                }'></div>
            <div class="cf-col-x cf-text-center page-type-node" data-cf-layout='{
                    "width":62,
                    "marginRight":28,
                    "border":{
                        "width":3,
                        "style":"solid",
                        "color":"rgba(255,255,255,0.4)"
                    },
                    "borderRadius":"50%",
                    "backgroundColor":"rgba(255,255,255,0.2)",
                    "height":62,
                    "lineHeight":68
                }'><img src="img/temp/skin_light/type_text.png"></div>
            <div class="cf-col-x page-content-panel" data-cf-layout='{
                "width":530,
                "paddingTop":18
            }'>
                <div class="cf-row page-text-panel" data-cf-layout='{
                        "fontSize":24,
                        "lineHeight":28,
                        "paddingRight":32,
                        "color":"#e2e2e2"
                    }'>我不喜欢吃猕猴桃，因为太难剥了，不过有人给我剥好了的话，我还是愿意吃的。西瓜哈密瓜也同理，吃起来会搞到手上脸上黏黏的。</div>
                <div class="cf-row page-blog-publish-time" data-cf-layout='{
                        "fontSize":20,
                        "color":"#676767",
                        "paddingTop":14,
                        "paddingBottom":20
                    }'>刚刚</div>
            </div>
        </div>
    <!--    end: text demo -->

    <!--    begin: photo demo -->
        <div class="cf-row page-blog-entry" data-cf-layout='{
                "paddingLeft":20,
                "paddingBottom":10
            }'>
            <div class="cf-row page-the-line" data-cf-layout='{
                    "left":51,
                    "top":62
                }'></div>
            <div class="cf-col-x cf-text-center page-type-node" data-cf-layout='{
                    "width":62,
                    "marginRight":28,
                    "border":{
                        "width":3,
                        "style":"solid",
                        "color":"rgba(255,255,255,0.4)"
                    },
                    "borderRadius":"50%",
                    "backgroundColor":"rgba(255,255,255,0.2)",
                    "height":62,
                    "lineHeight":68
                }'><img src="img/temp/skin_light/type_photo.png"></div>
            <div class="cf-col-x page-content-panel" data-cf-layout='{
                "width":530,
                "paddingTop":18
            }'>
                <div class="cf-row page-text-panel" data-cf-layout='{
                        "fontSize":24,
                        "lineHeight":28,
                        "paddingRight":32,
                        "color":"#e2e2e2"
                    }'>It was impossible to conceive of a man more like his mother. </div>
                <div class="cf-row page-img-panel" data-cf-layout='{
                        "paddingTop":20
                    }'>
                    <div class="cf-col-x" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10
                        }'><img src="img/temp/demo_photo_1.jpg"></div>
                    <div class="cf-col-x" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10
                        }'><img src="img/temp/demo_photo_2.jpg"></div>
                    <div class="cf-col-x" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10
                        }'><img src="img/temp/demo_photo_3.jpg"></div>
                </div>
                <div class="cf-row page-blog-publish-time" data-cf-layout='{
                        "fontSize":20,
                        "color":"#676767",
                        "paddingTop":14,
                        "paddingBottom":20
                    }'>1小时前</div>
            </div>
        </div>
    <!--    end: photo demo -->

    <!--    begin: video demo -->
        <div class="cf-row page-blog-entry" data-cf-layout='{
                "paddingLeft":20,
                "paddingBottom":10
            }'>
            <div class="cf-row page-the-line" data-cf-layout='{
                    "left":51,
                    "top":62
                }'></div>
            <div class="cf-col-x cf-text-center page-type-node" data-cf-layout='{
                    "width":62,
                    "marginRight":28,
                    "border":{
                        "width":3,
                        "style":"solid",
                        "color":"rgba(255,255,255,0.4)"
                    },
                    "borderRadius":"50%",
                    "backgroundColor":"rgba(255,255,255,0.2)",
                    "height":62,
                    "lineHeight":68
                }'><img src="img/temp/skin_light/type_video.png"></div>
            <div class="cf-col-x page-content-panel" data-cf-layout='{
                "width":530,
                "paddingTop":18
            }'>
                <div class="cf-row page-text-panel" data-cf-layout='{
                        "fontSize":24,
                        "lineHeight":28,
                        "paddingRight":32,
                        "color":"#e2e2e2"
                    }'>猫</div>
                <div class="cf-row page-img-panel" data-cf-layout='{
                        "paddingTop":20
                    }'>
                    <div class="cf-col-x" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10
                        }'><img src="img/temp/demo_video_1.jpg"></div>
                    <div class="cf-col-x" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10
                        }'><img src="img/temp/demo_video_2.jpg"></div>
                    <div class="cf-col-x page-video-cover" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10
                        }'>
                        <img src="img/temp/demo_video_cover.jpg">
                        <img src="img/temp/skin_dark/play_btn.png" class="page-blog-play-video-btn" data-cf-layout='{
                                "position":"absolute",
                                "width":70,
                                "height":70,
                                "left":43,
                                "top":43
                            }'>
                    </div>
                </div>
                <div class="cf-row page-blog-publish-time" data-cf-layout='{
                        "fontSize":20,
                        "color":"#676767",
                        "paddingTop":14,
                        "paddingBottom":20
                    }'>1小时前</div>
            </div>
        </div>
    <!--    end: video demo -->


    <!--    begin: audio demo -->
        <div class="cf-row page-blog-entry" data-cf-layout='{
                "paddingLeft":20,
                "paddingBottom":10
            }'>
            <div class="cf-row page-the-line" data-cf-layout='{
                    "left":51,
                    "top":62
                }'></div>
            <div class="cf-col-x cf-text-center page-type-node" data-cf-layout='{
                    "width":62,
                    "marginRight":28,
                    "border":{
                        "width":3,
                        "style":"solid",
                        "color":"rgba(255,255,255,0.4)"
                    },
                    "borderRadius":"50%",
                    "backgroundColor":"rgba(255,255,255,0.2)",
                    "height":62,
                    "lineHeight":68
                }'><img src="img/temp/skin_light/type_audio.png"></div>
            <div class="cf-col-x page-content-panel" data-cf-layout='{
                "width":530,
                "paddingTop":18
            }'>
                <div class="cf-row page-text-panel" data-cf-layout='{
                        "fontSize":24,
                        "lineHeight":28,
                        "paddingRight":32,
                        "color":"#e2e2e2"
                    }'>我思故我在</div>
                <div class="cf-row page-img-panel" data-cf-layout='{
                        "paddingTop":20
                    }'>
                    <div class="cf-col-x"><img src="img/temp/skin_dark/audio_entry_left.png" data-cf-layout='{"width":14,"height":40}'></div>
                    <div class="cf-col-x" data-cf-layout='{
                            "height":40,
                            "minWidth":30,
                            "width":200,
                            "backgroundColor":"rgb(82,82,91)",
                            "overflow":"hidden",
                            "paddingLeft":40,
                            "paddingRight":6,
                            "lineHeight":40,
                            "color":"#fff",
                            "fontSize":20
                        }'><img src="img/temp/skin_dark/audio_ico.png" data-cf-layout='{
                                    "position":"absolute",
                                    "width":"24",
                                    "left":0,
                                    "top":9
                                }'>
                        <div class="cf-col-x" data-cf-layout='{
                                "float":"right"
                                }'>56s</div>
                    </div>
                    <div class="cf-col-x"><img src="img/temp/skin_dark/audio_entry_right.png" data-cf-layout='{"width":10,"height":40}'></div>
                </div>
                <div class="cf-row page-blog-publish-time" data-cf-layout='{
                        "fontSize":20,
                        "color":"#676767",
                        "paddingTop":14,
                        "paddingBottom":20
                    }'>2016-01-30 12:54</div>
            </div>
        </div>
    <!--    end: audio demo -->
    </div>
</div>
<!-- end: 主界面 -->

<!-- begin: 发布界面 -->
<div class="cf-wrap" id="page-publish-panel" data-cf-layout='{"paddingBottom":124}'>
    <img src="img/temp/publish/bkg.png" class="cf-img-bkg">
    <div class="cf-row" id="page-publish-top"
         data-cf-layout='{
                "paddingTop":28,
                "paddingBottom":28
            }'>
        <div class="cf-row" data-cf-layout='{
                "height":30,
                "lineHeight":30
            }'>
            <div class="cf-col-x page-go-back-to-index" data-cf-layout='{
                "paddingLeft":20,
                "height":30,
                "width":70,
                "fontSize":24
            }'>返回</div>
            <div class="cf-col-x" data-cf-layout='{
                    "textAlign":"center",
                    "fontSize":30,
                    "height":30,
                    "width":500
                }'>编辑</div>
            <div class="cf-col-x page-go-to-setting" data-cf-layout='{
                "paddingRight":20,
                "width":70,
                "paddingTop":4,
                "height":30,
                "textAlign":"right"
            }'><img src="img/temp/publish/setting.png" data-cf-layout='{
                    "width":26
                }'></div>
        </div>
    </div>

    <div class="cf-row" data-cf-layout='{
            "paddingTop":80,
            "width":540,
            "marginLeft":50,
            "marginRight":50
        }'>
        <div class="cf-col-x" data-cf-layout='{
                "fontSize":0,
                "lineHeight":28
            }'>
            <div class="cf-row" data-cf-layout='{
                    "fontSize":28,
                    "height":28,
                    "color":"rgb(255,255,255)"
                }'>情绪能量</div>
        </div>
        <div class="cf-col-x" data-cf-layout='{
                "width":400,
                "height":26,
                "marginLeft":12
            }'>
            <img src="img/temp/publish/line_bkg.png" class="cf-img-bkg">
            <div class="cf-row" id="page-feeling-line" data-cf-layout='{
                    "width":10,
                    "overflow":"hidden",
                    "height":26,
                    "lineHeight":26,
                    "paddingLeft":8
                }'><img src="img/temp/publish/line_front.png" data-cf-layout='{"width":388,"left":8,"top":11}' class="cf-img-bkg"></div>
            <img src="img/temp/publish/drag_btn.png" id="page-feeling-btn" class="cf-img-bkg" data-cf-layout='{"width":32,"marginTop":-2}'>
            <div class="cf-row" id="page-feeling-text" data-cf-layout='{
                    "position":"absolute",
                    "width":72,
                    "height":52,
                    "fontSize":20,
                    "lineHeight":44,
                    "marginTop":-52,
                    "marginLeft":-20,
                    "color":"#fff",
                    "textAlign":"center"
                }'><img class="cf-img-bkg" src="img/temp/publish/feeling_text_bkg.png"><span>忧郁</span></div>
        </div>
    </div>

    <div class="cf-row" data-cf-layout='{
            "paddingTop":20,
            "marginLeft":50,
            "marginRight":50,
            "fontSize":0,
            "width":540
        }'>
        <img src="img/temp/publish/add_img_bkg.jpg" data-cf-layout='{"width":540,"left":0,"top":20}' id="page-img-template" class="cf-img-bkg">
        <div class="cf-row cf-text-center" id="page-img-list" data-cf-layout='{"width":540,"height":300,"left":0,"top":20,"zIndex":2}'></div>
        <div class="cf-row" id="page-img-add-tip" data-cf-layout='{
                "position":"absolute",
                "left":20,
                "top":40,
                "height":20,
                "lineHeight":20,
                "fontSize":20,
                "color":"rgba(255,255,255,0.4)"
            }'>添加照片(最多9张)</div>
        <div class="cf-row" data-cf-layout='{
                "paddingTop":94,
                "position":"absolute",
                "textAlign":"center",
                "z-index":1
            }'><img id="page-add-img-btn" src="img/temp/publish/add_img_btn.png" data-cf-layout='{
                    "width":112
                }'>
        </div>
        <div class="cf-row" data-cf-layout='{
                "width":540,
                "marginTop":300,
                "paddingBottom":20,
                "backgroundColor":"rgb(64,64,74)"
            }'>
            <textarea placeholder="添加文字" id="page-article-text" data-cf-layout='{
                    "boxSizing":"border-box",
                    "backgroundColor":"rgb(64,64,74)",
                    "width":540,
                    "height":140,
                    "border":0,
                    "paddingLeft":20,
                    "paddingRight":20,
                    "paddingTop":20,
                    "resize":"none",
                    "outline":"none",
                    "fontSize":20,
                    "color":"#fff"
                }'></textarea>
        </div>
    </div>

    <div class="cf-row" id="page-slide-left" data-cf-layout='{
            "position":"absolute",
            "left":0,
            "top":300,
            "height":60,
            "width":77,
            "paddingLeft":17,
            "display":"none"
        }'><img src="img/temp/publish/arrow_left.png" data-cf-layout='{"width":60}'></div>
    <div class="cf-row cf-text-right" id="page-slide-right" data-cf-layout='{
            "position":"absolute",
            "right":0,
            "top":300,
            "height":60,
            "width":77,
            "paddingRight":17,
            "display":"none"
        }'><img src="img/temp/publish/arrow_right.png" data-cf-layout='{"width":60}'></div>


    <div class="cf-row" id="page-edit-ext-info" data-cf-layout='{
            "width":550,
            "marginLeft":50,
            "marginRight":50,
            "paddingTop":10
        }'>
        <div class="cf-row page-ext-info-entry" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_tag.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22,"overflow":"hidden"}'><input id="page-tag-input" maxlength="10" placeholder="添加标签" data-cf-layout='{
                    "width":480,
                    "fontSize":22,
                    "color":"#fff"
                }'></div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row page-ext-info-entry" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_location.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}' id="page-location-panel">添加位置</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row page-ext-info-entry" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_public.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}' id="page-change-privileges-btn">公开（所有人可见）</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row page-ext-info-entry page-last" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_sync.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}'>同步至</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'></div>
        </div>

        <div class="cf-row">
            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_wechat_en.png" data-cf-layout='{"width":100}' data-share-base="share_wechat" class="cf-img-bkg page-share-btn page-share-selected">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_friend.png" data-cf-layout='{"width":100}' data-share-base="share_friend" class="cf-img-bkg page-share-btn">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_qq.png" data-cf-layout='{"width":100}' data-share-base="share_qq" class="cf-img-bkg page-share-btn">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_weibo_en.png" data-cf-layout='{"width":100}' data-share-base="share_weibo" class="cf-img-bkg page-share-btn page-share-selected">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_douban.png" data-cf-layout='{"width":100}' data-share-base="share_douban" class="cf-img-bkg page-share-btn">
            </div>
        </div>
    </div>
    <div id="page-publish-privileges" data-cf-layout='{
            "width":540,
            "left":50
        }'>
        <div class="cf-row page-publish-privileges-item page-privileges-selected"
             data-cf-layout='{
                "height":60,
                "lineHeight":60,
                "fontSize":24,
                "paddingLeft":30
            }'>公开（所有人可见）</div>
        <div class="cf-row page-publish-privileges-item"
             data-cf-layout='{
                "height":60,
                "lineHeight":60,
                "fontSize":24,
                "paddingLeft":30
            }'>私有（仅自己可见）</div>
        <div class="cf-row page-publish-privileges-item"
             data-cf-layout='{
                "height":60,
                "lineHeight":60,
                "fontSize":24,
                "paddingLeft":30
            }'>发布至广场（提问 / 求漫画）</div>
    </div>
</div>
<!-- end: 发布界面 -->

<div class="cf-row" id="page-blur-mask"></div>

<!-- begin: 预发布界面 -->
<div class="cf-wrap" id="page-pre-publish-panel" data-cf-layout='{
        "marginLeft":-320
    }'>
    <div class="cf-row" id="page-pre-publish-type-panel" data-cf-layout='{
            "height":220,
            "paddingLeft":50,
            "fontSize":0,
            "paddingRight":50
        }'>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="text">
            <img src="img/temp/pre_publish/text.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":20,"paddingTop":22}'>文章</span>
        </div>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="photo">
            <img src="img/temp/pre_publish/photo.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":20,"paddingTop":22}'>图片</span>
        </div>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="video">
            <img src="img/temp/pre_publish/video.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":20,"paddingTop":22}'>视频</span>
        </div>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="audio">
            <img src="img/temp/pre_publish/audio.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":20,"paddingTop":22}'>语音</span>
        </div>
    </div>
</div>
<!-- end: 预发布界面 -->

<!-- begin: 滤镜页面 -->
<div class="cf-wrap cf-wrap-no-bottom" id="page-filters-panel" data-cf-layout='{
        "width":640,
        "marginLeft":-320
    }'>
    <img src="img/temp/publish/bkg.png" class="cf-img-bkg">
    <div class="cf-row" id="page-filters-top"
         data-cf-layout='{
                "paddingTop":28,
                "paddingBottom":28,
                "marginBottom":118
            }'>
        <div class="cf-row" data-cf-layout='{
                "height":30,
                "lineHeight":30
            }'>
            <div class="cf-col-x" id="page-filter-back-to-publish" data-cf-layout='{
                "paddingLeft":20,
                "height":30,
                "width":70,
                "fontSize":24
            }'>返回</div>
            <div class="cf-col-x" data-cf-layout='{
                    "textAlign":"center",
                    "fontSize":30,
                    "height":30,
                    "width":500
                }'>滤镜</div>
            <div class="cf-col-x page-go-to-setting" data-cf-layout='{
                "paddingRight":20,
                "width":70,
                "paddingTop":4,
                "height":30,
                "lineHeight":30,
                "fontSize":0,
                "textAlign":"right"
            }' id="page-filters-more"><img src="img/temp/filters/icon/show_more_setting.png" data-cf-layout='{
                    "width":34
                }'></div>
        </div>
    </div>

    <div class="cf-row" id="page-filters-preview-panel" data-cf-layout='{
            "height":480,
            "width":640,
            "marginBottom":118
        }'><img id="page-filters-preview" src=""></div>

    <div class="cf-row" id="page-filters-list-panel" data-cf-layout='{
            "minHeight":342
        }'>
        <div id="page-filters-list-panel-inner" data-cf-layout='{
                "paddingLeft":10,
                "paddingTop":10,
                "width":1400,
                "marginBottom":46,
                "height":185
            }'>
            <div class="cf-col-x page-filter-type page-filter-selected" data-filter-type="origin" data-cf-layout='{
                    "height":170,
                    "width":130,
                    "marginRight":10,
                    "border":{
                        "width":2,
                        "style":"solid",
                        "color":"transparent"
                    }
                }'>
                <img src="" class="page-filter-small-preview">
                <img src="" class="page-filter-cache-preview">
                <div class="cf-absolute-left-bottom-row page-filter-name" data-cf-layout='{"fontSize":18}'>原图</div>
            </div>

            <div class="cf-col-x page-filter-type" data-filter-type="soften-face" data-cf-layout='{
                    "height":170,
                    "width":130,
                    "marginRight":10,
                    "border":{
                        "width":2,
                        "style":"solid",
                        "color":"transparent"
                    }
                }'>
                <img src="" class="page-filter-small-preview">
                <img src="" class="page-filter-cache-preview">
                <div class="cf-absolute-left-bottom-row page-filter-name" data-cf-layout='{"fontSize":18}'>美颜</div>
            </div>

            <div class="cf-col-x page-filter-type" data-filter-type="sketch" data-cf-layout='{
                    "height":170,
                    "width":130,
                    "marginRight":10,
                    "border":{
                        "width":2,
                        "style":"solid",
                        "color":"transparent"
                    }
                }'>
                <img src="" class="page-filter-small-preview">
                <img src="" class="page-filter-cache-preview">
                <div class="cf-absolute-left-bottom-row page-filter-name" data-cf-layout='{"fontSize":18}'>素描</div>
            </div>

            <div class="cf-col-x page-filter-type" data-filter-type="vintage" data-cf-layout='{
                    "height":170,
                    "width":130,
                    "marginRight":10,
                    "border":{
                        "width":2,
                        "style":"solid",
                        "color":"transparent"
                    }
                }'>
                <img src="" class="page-filter-small-preview">
                <img src="" class="page-filter-cache-preview">
                <div class="cf-absolute-left-bottom-row page-filter-name" data-cf-layout='{"fontSize":18}'>复古</div>
            </div>
        </div>

        <div class="cf-row">
            <div class="cf-col-x" data-cf-layout='{
                    "paddingLeft":40
                }'><img src="img/temp/filters/icon/back.png" id="page-cancel-use-img" data-cf-layout='{
                        "width":36
                    }'></div>

            <div class="cf-col-x" data-cf-layout='{
                    "paddingRight":40,
                    "float":"right"
                }'><img src="img/temp/filters/icon/ok.png" id="page-use-filter-img" data-cf-layout='{
                        "width":32
                    }'></div>
        </div>
    </div>
    <div id="page-filter-loading-page">
        <div class="page-loading-container page-load-ani" data-cf-layout='{"marginTop":400}'>
            <div class="page-loader"></div>
        </div>
    </div>
</div>
<!-- end: 滤镜页面 -->

<div id="page-show-blog-img-panel" data-cf-layout='{
        "paddingLeft":20,
        "paddingRight":20,
        "paddingTop":80,
        "paddingBottom":100
    }'>
    <div class="cf-row page-img-count" data-cf-layout='{
            "fontSize":20,
            "height":80,
            "lineHeight":80
        }'></div>
</div>

<div class="cf-row" id="page-main-footer" data-cf-layout='{
            "height":98,
            "paddingTop":22,
            "fontSize":20,
            "marginLeft":-320,
            "width":640
        }'>
    <div class="cf-col-x cf-text-right" data-cf-layout='{
                "width":90
            }'>
        <div class="cf-row" data-cf-layout='{
                    "fontSize":0,
                    "paddingBottom":6
                }'><img src="img/temp/skin_dark/main_page.png" class="page-operation-refresh" data-cf-layout='{"width":34}'></div>
        <div class="cf-row">主页</div>
    </div>
    <div class="cf-col-x cf-text-center" data-cf-layout='{
                "width":460
            }'>
        <div class="cf-row" data-cf-layout='{
                    "fontSize":0,
                    "paddingBottom":6
                }'><img src="img/temp/skin_dark/write_blog.png" class="page-operation-write" data-cf-layout='{"width":34}'></div>
        <div class="cf-row page-operation-write">记录</div>
    </div>
    <div class="cf-col-x" data-cf-layout='{
                "width":90
            }'>
        <div class="cf-row" data-cf-layout='{
                    "fontSize":0,
                    "paddingBottom":6
                }'><img src="img/temp/skin_dark/personal_center.png" class="page-operation-show-menu" data-cf-layout='{"width":34}'></div>
        <div class="cf-row page-operation-show-menu">个人</div>
    </div>
</div>

<div class="cf-row" id="page-pre-publish-footer" data-cf-layout='{
        "height":98,
        "lineHeight":98,
        "textAlign":"center",
        "fontSize":36,
        "marginLeft":-320,
        "width":640
    }'><img src="img/temp/pre_publish/btn_close.png" id="page-pre-publish-close" data-cf-layout='{"width":30}'></div>

<div class="cf-row" id="page-publish-footer" data-cf-layout='{
        "height":98,
        "lineHeight":98,
        "textAlign":"center",
        "fontSize":36,
        "marginLeft":-320,
        "width":640
    }'>发布</div>

<div class="cf-row page-blog-entry" id="page-template-blog-entry" data-cf-layout='{
                "paddingLeft":20,
                "paddingBottom":10
            }'>
    <div class="cf-row page-the-line" data-cf-layout='{
                    "left":51,
                    "top":62
                }'></div>
    <div class="cf-col-x cf-text-center page-type-node" data-cf-layout='{
                    "width":62,
                    "marginRight":28,
                    "border":{
                        "width":3,
                        "style":"solid",
                        "color":"rgba(255,255,255,0.4)"
                    },
                    "borderRadius":"50%",
                    "backgroundColor":"rgba(255,255,255,0.2)",
                    "height":62,
                    "lineHeight":68
                }'><img src="img/temp/skin_light/type_photo.png"></div>
    <div class="cf-col-x page-content-panel" data-cf-layout='{
                "width":530,
                "paddingTop":18
            }'>
        <div class="cf-row page-text-panel" data-cf-layout='{
                        "fontSize":24,
                        "lineHeight":28,
                        "paddingRight":32,
                        "color":"#e2e2e2"
                    }'></div>
        <div class="cf-row page-img-panel" data-cf-layout='{
                        "paddingTop":20
                    }'></div>
        <div class="cf-row page-blog-publish-time" data-cf-layout='{
                        "fontSize":20,
                        "color":"#676767",
                        "paddingTop":14,
                        "paddingBottom":20
                    }'>刚刚</div>
    </div>
</div>

<div class="cf-col-x" id="page-template-blog-entry-img" data-cf-layout='{
                            "width":156,
                            "height":156,
                            "overflow":"hidden",
                            "marginRight":10,
                            "textAlign":"center",
                            "backgroundColor":"rgb(60,60,70)"
                        }'><img src=""></div>

<img src="img/temp/demo_del_img.png" id="page-template-remove-img" class="page-remove-img" data-cf-layout='{
        "width":24
    }'>

<div class="cf-row" id="page-side-menu" data-cf-layout='{
        "paddingLeft":55,
        "paddingRight":55,
        "width":540
    }'>
    <div class="cf-row page-side-menu-inner">
        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>会员中心<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>档案室<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>消息中心<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>我的关注<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>足迹地图<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>漫画广场<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>更换皮肤<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>系统设置<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>

        <div class="cf-row page-menu-item" data-cf-layout='{
                "paddingLeft":10,
                "paddingRight":10,
                "paddingTop":34,
                "paddingBottom":20,
                "fontSize":26
            }'>关于我们<img src="img/temp/skin_dark/ico_menu.png" class="cf-img-bkg" data-cf-layout='{
                    "width":8,
                    "right":10,
                    "top":40
                }'></div>
    </div>
</div>
<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>
<script src="js/lib/jquery.slides.min.js"></script>
<script src="js/lib/jquery.exif.js"></script>
<script src="js/lib/MegaPixImage.js"></script>
<script src="js/lib/common.js"></script>
<script src="js/lib/AlloyImage/alloyimage.js"></script>
<!--1.0.18-->
<script src="js/page/index.js?v=0.0.1"></script>
<script>

    function page_init(){
        g_jq_dom = $.extend({}, g_jq_dom, {
            $blog_list:$("#page-blog-list"),
            $location_panel:$("#page-location-panel"),
            $show_blog_img_panel:$("#page-show-blog-img-panel"),
            $img_temp:$("#page-img-template"),
            $img_list:$("#page-img-list"),
            $add_img_btn:$("#page-add-img-btn"),
            $add_img_tip:$("#page-img-add-tip"),
            $img_slide_left:$("#page-slide-left"),
            $img_slide_right:$("#page-slide-right"),
            $article_text:$("#page-article-text"),
            $side_menu:$("#page-side-menu"),
            $share_btn:$(".page-share-btn"),
            $tag_input:$("#page-tag-input"),
            $filter_panel:$("#page-filters-panel"),
            $filter_list:$("#page-filters-list-panel"),
            $filter_type:$(".page-filter-type"),
            $filter_img_preview_panel:$("#page-filters-preview-panel"),
            $filter_img_preview:$("#page-filters-preview"),
            $filter_loading:$("#page-filter-loading-page"),
            $all_filter_cache:$("img.page-filter-cache-preview"),
            $cancel_use_img:$("#page-cancel-use-img"),
            $use_filter_img:$("#page-use-filter-img"),
            $filter_back_to_publish:$("#page-filter-back-to-publish"),
            $change_privileges_btn:$("#page-change-privileges-btn"),
            $publish_privileges_panel:$("#page-publish-privileges"),
            $publish_privileges_item:$(".page-publish-privileges-item"),
            $main_page:{
                $panel:$("#page-main-panel"),
                $footer:$("#page-main-footer")
            },
            $pre_publish_page:{
                $panel:$("#page-pre-publish-panel"),
                $footer:$("#page-pre-publish-footer"),
                $buttons:{
                    $type_btn:$(".page-publish-type-btn"),
                    $close_btn:$("#page-pre-publish-close")
                }
            },
            $publish_page:{
                $panel:$("#page-publish-panel"),
                $footer:$("#page-publish-footer")
            },
            $page_mask:$("#page-blur-mask"),
            $page_opt:{
                $back_to_main:$(".page-go-back-to-index"),
                $write:$(".page-operation-write"),
                $show_menu:$(".page-operation-show-menu"),
                $page_refresh:$(".page-operation-refresh")
            },
            $feeling:{
                $text:$("#page-feeling-text"),
                $line:$("#page-feeling-line"),
                $btn:$("#page-feeling-btn")
            },
            $remove_img_temp:$("#page-template-remove-img").remove().removeAttr("id"),
            $blog_entry_temp:$("#page-template-blog-entry").remove().removeAttr("id"),
            $blog_entry_temp_img:$("#page-template-blog-entry-img").remove().removeAttr("id")
        });

        g_var = $.extend({}, g_var, {
            body_move_status:false,
            cur_feeling_pos:0,cur_feeling_min:0,cur_feeling_max:388,
            show_menu_status:false,
            pre_publish_status:false,
            publish_status:false,publish_type:'photo',
            blog_img_size:156*g_var.scale_ratio,
            show_blog_img_panel_width:g_jq_dom.$show_blog_img_panel.width(),
            show_blog_img_panel_height:g_var.wnd_height,
            $org_filter_img:null
        });
    }

    function scale_blog_img($img){
        var dom_img = $img.get(0);
        var img_width = dom_img.width;
        var img_height = dom_img.height;
        var dest_width, dest_height;
        var img_scale, align_type;

        if(img_width > img_height){
            dest_width = 'auto';
            dest_height = g_var.blog_img_size;
            img_scale = dest_height / img_height;
            align_type = 'h';
        } else if(img_width < img_height) {
            dest_width = g_var.blog_img_size;
            dest_height = 'auto';
            align_type = 'v';
            img_scale = dest_width / img_width;
        } else {
            dest_width = g_var.blog_img_size;
            dest_height = 'auto';
        }

        $img.css({width:dest_width, height:dest_height});
        if('v' == align_type){
            var dest_height_in_pix =img_height * img_scale;
            $img.css({marginTop: (g_var.blog_img_size - dest_height_in_pix) / 2});
        } else if('h' == align_type){
            var dest_width_in_pix =img_width * img_scale;
            $img.css({marginLeft: (g_var.blog_img_size - dest_width_in_pix) / 2});
        }
    }

    function scene_reset_to_main(){
        if(g_var.body_move_status){return;}
        g_var.pre_publish_status = false;
        g_jq_dom.$publish_page.$panel.fadeOut(200);
        g_jq_dom.$publish_page.$footer.fadeOut(200, function(){
            g_jq_dom.$main_page.$panel.show();
        });

        g_jq_dom.$page_mask.stop().fadeOut(200);
        g_jq_dom.$pre_publish_page.$panel.removeClass("animated fadeInUp").addClass("animated fadeOutDown");
        g_jq_dom.$pre_publish_page.$footer.fadeOut(200);

        if(g_var.show_menu_status){
            toggle_menu();
        }
    }
    function scene_swap_to_pre_publish(){
        if(g_var.body_move_status){return;}

        if(g_var.pre_publish_status){return;}
        g_var.pre_publish_status = true;
        g_jq_dom.$main_page.$panel.show();
        if(g_var.show_menu_status){
            toggle_menu();
        }
        g_jq_dom.$page_mask.stop().fadeIn(200);
        g_jq_dom.$pre_publish_page.$panel.show().removeClass("animated fadeOutDown").addClass("animated fadeInUp");
        g_jq_dom.$pre_publish_page.$footer.fadeIn(200);
    }

    function scene_swap_to_main(){
        if(g_var.body_move_status){return;}
        g_var.pre_publish_status = false;
        g_jq_dom.$page_mask.stop().fadeOut(200);
        g_jq_dom.$pre_publish_page.$panel.removeClass("animated fadeInUp").addClass("animated fadeOutDown");
        g_jq_dom.$pre_publish_page.$footer.fadeOut(200);
    }

    function scene_swap_to_publish(){
        if(g_var.body_move_status){return;}
//        if(!g_var.pre_publish_status){return;}
        get_location();
        g_var.pre_publish_status = false;
        g_var.publish_status = false;
        g_jq_dom.$img_list.children().remove();
        g_jq_dom.$article_text.val('');
        var $this = $(this);
        g_var.publish_type = $this.attr('data-publish-type');
        g_jq_dom.$publish_page.$panel.show().stop().fadeIn(200);
        g_jq_dom.$publish_page.$footer.show().stop().fadeIn(200);

        g_jq_dom.$main_page.$panel.hide();
        g_jq_dom.$page_mask.stop().fadeOut(200);
        g_jq_dom.$pre_publish_page.$panel.removeClass("animated fadeInUp").addClass("animated fadeOutDown");
        g_jq_dom.$pre_publish_page.$footer.fadeOut(200);

    }
    function refresh_page(){
        if(g_var.body_move_status){return;}
        g_jq_dom.$img_list.children().remove();
        g_jq_dom.$article_text.val('');
        scene_reset_to_main();
    }
    function img_prev(){
        if(g_var.body_move_status){return;}
        var $current_shown_img = g_jq_dom.$img_list.find(".page-shown-img");
        if(0 == $current_shown_img.length){
            g_jq_dom.$img_list.children().last().show().addClass("page-shown-img");
            return;
        }

        var $prev_img = $current_shown_img.prev();

        if(0 !== $prev_img.length){
            $current_shown_img.hide().removeClass("page-shown-img");
            $prev_img.show().addClass("page-shown-img");
        }
    }
    function img_next(){
        if(g_var.body_move_status){return;}
        var $current_shown_img = g_jq_dom.$img_list.find(".page-shown-img");

        $current_shown_img.hide().removeClass("page-shown-img");
        var $next_img = $current_shown_img.next();
        if(0 !== $next_img){
            $next_img.show().addClass("page-shown-img");
        }
    }

    function slide_feeling(){
        var v_start_x, start_x;
        g_jq_dom.$feeling.$btn.on(g_event.touchstart, function(e){
            v_start_x =g_jq_dom.$feeling.$btn.position();
            start_x = e.originalEvent.touches[0].clientX;
        });
        g_jq_dom.$feeling.$btn.on(g_event.touchmove, function(e){
            var current_x = e.originalEvent.touches[0].clientX;
            var current_left = v_start_x.left + current_x-start_x;
            var max_len = 369*g_var.scale_ratio;
            if(0 >= current_left){current_left = 0;}
            if(max_len <= current_left){current_left = max_len;}
            g_jq_dom.$feeling.$btn.css({left:current_left});
            g_jq_dom.$feeling.$line.css({width:current_left+10*g_var.scale_ratio});
            g_jq_dom.$feeling.$text.css({left:current_left});

            var sad = max_len / 3;
            var pice = max_len * 2 / 3;
            var feel_str = '';
            if(current_left < sad / 3){
                feel_str = "忧郁";
            } else if(current_left < pice){
                feel_str = "平静";
            } else {
                feel_str = "兴奋";
            }
            g_jq_dom.$feeling.$text.find("span").text(feel_str);
        });
    }
    function publish_article(){
        if(g_var.body_move_status){return;}
        if(g_var.publish_status) {return;}
        g_var.publish_status = true;
        var $all_img = g_jq_dom.$img_list.find("img.page-blog-img");
        var article_str = g_jq_dom.$article_text.val();
        var img_count = $all_img.length;
        var tag_str = g_jq_dom.$tag_input.val();
        article_str = article_str.trim();

        if(''==article_str && 0 == img_count){
            console.log(article_str);
            alert("请至少选择一张图片或写下一段文字.");
            g_var.publish_status = false;
            return;
        }


        var $new_blog_entry = g_jq_dom.$blog_entry_temp.clone();
        var tip_html = '刚刚&nbsp;&nbsp;';
        var $time_panel = $new_blog_entry.find('.page-blog-publish-time');
        $new_blog_entry.find('.page-type-node').find('img').attr('src', 'img/temp/skin_light/type_'+g_var.publish_type+'.png');
        if('' != tag_str){
            $time_panel.text(tag_str);
            tip_html += $time_panel.text();
        }

        if(g_jq_dom.$location_panel.attr('page-has-location')){
            tip_html += '&nbsp;&nbsp;位置：'+g_jq_dom.$location_panel.text();
        }
        $time_panel.html(tip_html);
        if('' == article_str){
            $new_blog_entry.find('.page-text-panel').remove();
        } else {
            $new_blog_entry.find('.page-text-panel').text(article_str);
        }

        $new_blog_entry.prependTo(g_jq_dom.$blog_list);

        $all_img.each(function(){
            var $this = $(this);
            var $new_img = g_jq_dom.$blog_entry_temp_img.clone();
           var $blog_img = $new_img.find("img").attr('src', $this.attr('src'));
            $new_img.appendTo($new_blog_entry.find('.page-img-panel'));
            scale_blog_img($blog_img);
        });



        scene_reset_to_main();
    }

    function toggle_menu(){
        if(g_var.body_move_status){return;}
        g_jq_dom.$side_menu.off(g_event.css_ani_event);
        var shown = g_jq_dom.$side_menu.hasClass("page-menu-shown");
        if(shown){
            g_var.show_menu_status = false;
            g_jq_dom.$page_mask.stop().fadeOut(300);
            g_jq_dom.$side_menu.removeClass('animated fadeInRight page-menu-shown').addClass('animated fadeOutRight').on(g_event.css_ani_event, function(){
                g_jq_dom.$side_menu.hide()
                    .removeClass('animated fadeOutRight')
                    .off(g_event.css_ani_event);
            });
        } else {
            g_var.show_menu_status = true;
            g_jq_dom.$page_mask.stop().fadeIn(300);
            g_jq_dom.$side_menu.removeClass('animated fadeOutRight ').addClass('animated fadeInRight page-menu-shown').show().on(g_event.css_ani_event, function(){
                g_jq_dom.$side_menu.removeClass('animated fadeInRight')
                    .off(g_event.css_ani_event);
            });
        }
    }

    function remove_publish_img(){
        if(g_var.body_move_status){return;}
        var $this = $(this);
        var $this_img = $this.parent();
        $this_img.remove();
        img_next();
    }

    function switch_share_status(){
        if(g_var.body_move_status){return;}
        var $this = $(this);
        var share_base = 'img/temp/publish/'+$this.attr('data-share-base');
        if($this.hasClass("page-share-selected")){
            $this.attr("src",share_base+'.png').removeClass('page-share-selected');
        } else {
            $this.attr("src",share_base+'_en.png').addClass('page-share-selected');
        }
    }

    function show_blog_img(){
        if(g_var.body_move_status){return;}
        var $this_img = $(this);
        if($this_img.hasClass('page-blog-play-video-btn')){
            $this_img = $this_img.siblings("img");
        }

        var $all_img = $this_img;//$this_panel.find('img');

        g_jq_dom.$show_blog_img_panel.find('img').remove();
        function add_img_to_panel(img_src){
            var $new_img = $('<img src="'+img_src+'">');
            $new_img.appendTo(g_jq_dom.$show_blog_img_panel);

            var dom_img = $new_img.get(0);
            var img_width = dom_img.width;
            var img_height = dom_img.height;

            var img_scale_width;
            var img_fix_top = 80 * g_var.scale_ratio;
            if(img_width <= g_var.show_blog_img_panel_width && img_height <= g_var.show_blog_img_panel_height){
                $new_img.css({marginTop: ((g_var.show_blog_img_panel_height - img_height) / 2) - img_fix_top})
            } else if(img_width <= g_var.show_blog_img_panel_width && img_height >= g_var.show_blog_img_panel_height){
                $new_img.css({height:g_var.show_blog_img_panel_height})
            } else if(img_width >= g_var.show_blog_img_panel_width && img_height <= g_var.show_blog_img_panel_height){
                $new_img.css({width:g_var.show_blog_img_panel_width});
                img_scale_width = g_var.show_blog_img_panel_width / img_width;
                $new_img.css({marginTop: ((g_var.show_blog_img_panel_height - img_height * img_scale_width) / 2) - img_fix_top})
            } else {
                var panel_ratio = g_var.show_blog_img_panel_width / g_var.show_blog_img_panel_height;
                var img_ratio = img_width / img_height;

                if(panel_ratio <= img_ratio){
                    $new_img.css({width:g_var.show_blog_img_panel_width});
                    img_scale_width = g_var.show_blog_img_panel_width / img_width;
                    $new_img.css({marginTop: ((g_var.show_blog_img_panel_height - img_height * img_scale_width) / 2) - img_fix_top})
                } else {
                    $new_img.css({height:g_var.show_blog_img_panel_height});
                }
            }
        }

        $all_img.each(function(){
            var $this = $(this);
            add_img_to_panel($this.attr('src'));
        });
        g_jq_dom.$show_blog_img_panel.stop().fadeIn(200, function(){
            g_jq_dom.$show_blog_img_panel.addClass("page-shown");
        });
    }
    function hide_blog_img(){
        if(g_var.body_move_status){return;}
        if(!g_jq_dom.$show_blog_img_panel.hasClass('page-shown')){return;}
        g_jq_dom.$show_blog_img_panel.stop().fadeOut(200);
        g_jq_dom.$show_blog_img_panel.removeClass('page-shown');
    }

    function edit_tag(){
        var $this = $(this);
        var last_tag_str = $this.attr('page-tag-str');
        if(last_tag_str){
            $this.val(last_tag_str);
        }
    }
    function show_tag(){
        var $this = $(this);
        var tag_str = $this.val();
        tag_str =tag_str.trim();
        if('' != tag_str){
            $this.val('#'+tag_str);
            $this.attr('page-tag-str', tag_str);
        } else {
            $this.val('');
            $this.removeAttr('page-tag-str');
        }
    }
    function filter_tag_input(e){
        if(32 == e.keyCode){
            return false;
        }
    }
    function input_enter(e){
        var $this = $(this);
        if(13 == e.keyCode){
            $this.blur();
        }
    }

    function show_filter_img(){
        if(g_var.body_move_status){return;}
        var $this = $(this);

        if($this.hasClass('page-filter-selected')){return;}
        var filter_type = $this.attr('data-filter-type');
        var $cur_filter = g_jq_dom.$filter_list.find(".page-filter-selected");

        $cur_filter.removeClass('page-filter-selected');
        $this.addClass('page-filter-selected');

        var $this_cache_img = $this.find(".page-filter-cache-preview");
        if($this_cache_img.hasClass('page-filter-done')){
            g_jq_dom.$filter_img_preview.attr('src', $this_cache_img.attr('src'));
        } else {
            do_filter(g_var.$org_filter_img, g_jq_dom.$filter_img_preview, filter_type);
        }
    }

    function init_filter_panel($img, $cache_img){
        var org_src = $img.attr('src');
        var org_cache_src = $cache_img.attr('src');
        g_jq_dom.$filter_type.each(function(){
            var $this = $(this);
            var $this_img = $this.find("img.page-filter-small-preview");
            var $this_cache_img = $this.find(".page-filter-cache-preview");
            var filter_type = $this.attr('data-filter-type');
            $this_img.attr('src', org_src).removeClass('page-filter-done');
            $this_cache_img.attr('src', org_cache_src).removeClass('page-filter-done');
            common_fit_img($this, $this_img);
            do_filter($this_img, $this_img, filter_type);
            do_filter($this_cache_img, $this_cache_img, filter_type);
        });
    }
    function show_privileges_panel(){
        if(g_var.body_move_status){return;}
        var btn_pos = g_jq_dom.$change_privileges_btn.offset();
        var btn_height = g_jq_dom.$change_privileges_btn.height();
        g_jq_dom.$publish_privileges_panel.css({top:btn_pos.top+btn_height});
        if(g_jq_dom.$publish_privileges_panel.hasClass('page-shown')){
            g_jq_dom.$publish_privileges_panel.stop().fadeOut(200).removeClass('page-shown');
        } else {
            g_jq_dom.$publish_privileges_panel.stop().fadeIn(200).addClass('page-shown');
        }
    }
    function change_privileges(){
        if(g_var.body_move_status){return;}
        var $this = $(this);
        g_jq_dom.$publish_privileges_panel.find(".page-privileges-selected").removeClass('page-privileges-selected');
        $this.addClass('page-privileges-selected');
        g_jq_dom.$change_privileges_btn.text($this.text());
        g_jq_dom.$publish_privileges_panel.stop().fadeOut(200).removeClass('page-shown');
    }
    function page_event_bind(){
        g_jq_dom.$body.on(g_event.touchmove, function(){g_var.body_move_status = true}).on(g_event.touchend, function(){g_var.body_move_status = false});
        g_jq_dom.$page_opt.$write.on(g_event.touchend, scene_swap_to_pre_publish);
        g_jq_dom.$pre_publish_page.$buttons.$close_btn.on(g_event.touchend, scene_swap_to_main);
        g_jq_dom.$pre_publish_page.$buttons.$type_btn.on(g_event.touchend, scene_swap_to_publish);
        g_jq_dom.$page_opt.$back_to_main.on(g_event.touchend, refresh_page);
//        g_jq_dom.$add_img_btn.on(g_event.touchend, start_shooting);
        g_jq_dom.$add_img_btn.on(g_event.touchend, start_filter_shooting);
        g_jq_dom.$img_slide_left.on(g_event.touchend, img_prev);
        g_jq_dom.$img_slide_right.on(g_event.touchend, img_next);
        g_jq_dom.$publish_page.$footer.on(g_event.touchend, publish_article);
        g_jq_dom.$page_opt.$show_menu.on(g_event.touchend, toggle_menu);
        g_jq_dom.$page_mask.on(g_event.touchend, scene_reset_to_main);
        g_jq_dom.$body.on(g_event.touchend, '.page-remove-img', remove_publish_img);
        g_jq_dom.$body.on(g_event.touchend, '.page-img-panel img', show_blog_img);
        g_jq_dom.$show_blog_img_panel.on(g_event.touchend, hide_blog_img);
        g_jq_dom.$tag_input.on(g_event.focus, edit_tag);
        g_jq_dom.$tag_input.on(g_event.blur, show_tag);
        g_jq_dom.$tag_input.on(g_event.keydown, filter_tag_input);
        g_jq_dom.$tag_input.on(g_event.keypress, input_enter);
        g_jq_dom.$share_btn.on(g_event.touchend, switch_share_status);
        g_jq_dom.$filter_type.on(g_event.touchend, show_filter_img);
        g_jq_dom.$cancel_use_img.on(g_event.touchend, cancel_use_img);
        g_jq_dom.$filter_back_to_publish.on(g_event.touchend, cancel_use_img);
        g_jq_dom.$use_filter_img.on(g_event.touchend, use_filter_img);
        g_jq_dom.$change_privileges_btn.on(g_event.touchend, show_privileges_panel);
        g_jq_dom.$publish_privileges_item.on(g_event.touchend, change_privileges);

        g_jq_dom.$page_opt.$page_refresh.on(g_event.touchend, function(){if(g_var.body_move_status){return;}location.reload()});

        slide_feeling();
    }

    function start_filter_shooting(){
        if(g_var.body_move_status){return;}
        var $small_img = $("<img style='display:none'>");
        $small_img.appendTo(g_jq_dom.$body);
        g_var.$org_filter_img = $("<img>");
        camera_plus.start_camera({
            show_panel:g_var.$org_filter_img,
            small_img:$small_img,
            callback:function(){
                g_jq_dom.$filter_img_preview.attr('src', g_var.$org_filter_img.attr('src'));
                common_fit_img(g_jq_dom.$filter_img_preview_panel, g_jq_dom.$filter_img_preview);
                init_filter_panel($small_img, g_var.$org_filter_img);
                g_jq_dom.$filter_panel.show();
                g_jq_dom.$filter_loading.fadeIn(200);
            }
        });
    }

    function common_fit_img($panel, $img){
        var panel_width = $panel.width();
        var panel_height = $panel.height();

        var dom_img = $img.get(0);
        var img_width = dom_img.width;
        var img_height = dom_img.height;

        var img_scale_width;

        if(img_width <= panel_width && img_height <= panel_height){
            $img.css({marginTop: (panel_height - img_height) / 2})
        } else if(img_width <= panel_width && img_height >= panel_height){
            $img.css({height:panel_height})
        } else if(img_width >= panel_width && img_height <= panel_height){
            $img.css({width:panel_width});
            img_scale_width = panel_width / img_width;
            $img.css({marginTop: (panel_height - img_height * img_scale_width) / 2})
        } else {
            var panel_ratio = panel_width / panel_height;
            var img_ratio = img_width / img_height;

            if(panel_ratio <= img_ratio){
                $img.css({width:panel_width});
                img_scale_width = panel_width / img_width;
                $img.css({marginTop: (img_height - img_height * img_scale_width) / 2})
            } else {
                $img.css({height:img_height});
            }
        }
    }

    function cancel_use_img(){
        if(g_var.body_move_status){return;}
        g_jq_dom.$filter_panel.fadeOut(200);
    }

    function use_filter_img(){
        if(g_var.body_move_status){return;}
        var $new_img = $('<div class="cf-row page-shown-img" style="height:100%"><img class="page-blog-img"><div>');
        var $img_el = $new_img.find('img');
        g_jq_dom.$remove_img_temp.clone().show().appendTo($new_img);
        $img_el.attr('src', g_jq_dom.$filter_img_preview.attr('src'));
        g_jq_dom.$img_list.children().hide().removeClass("page-shown-img");
        $new_img.appendTo(g_jq_dom.$img_list);
        resize_img($img_el);
        g_jq_dom.$filter_panel.fadeOut(200);
    }

    function start_shooting(){
        var $new_img = $('<div class="cf-row page-shown-img" style="height:100%"><img class="page-blog-img"><div>');
        var $img_el = $new_img.find('img');
        g_jq_dom.$remove_img_temp.clone().show().appendTo($new_img);
        camera_plus.start_camera({
            show_panel:$img_el,
            callback:function(){
                g_jq_dom.$img_list.children().hide().removeClass("page-shown-img");
                $new_img.appendTo(g_jq_dom.$img_list);
                resize_img($img_el);
            }
        });
    }

    function resize_img($img){
        var panel_height = g_jq_dom.$img_list.height();
        $img.removeAttr("style").css({"width":"auto", "height":"auto"});

        $img.css({
            width:'auto',
            height:panel_height
        }).show();
    }

    function img_show_timer(){
        var current_img_count = g_jq_dom.$img_list.children().length;

        if(0 === current_img_count){
            g_jq_dom.$img_list.hide();
            g_jq_dom.$add_img_tip.show();
            g_jq_dom.$add_img_btn.show();

            g_jq_dom.$img_slide_left.hide();
            g_jq_dom.$img_slide_right.hide();
        } else {
            g_jq_dom.$img_list.show();
            g_jq_dom.$add_img_tip.hide();

            var $current_shown_img = g_jq_dom.$img_list.find(".page-shown-img");

            if(0 === $current_shown_img.length){
                if(9 > current_img_count){
                    g_jq_dom.$img_list.hide();
                    g_jq_dom.$add_img_tip.show();
                    g_jq_dom.$img_slide_left.show();
                    g_jq_dom.$add_img_btn.show();

                    g_jq_dom.$img_slide_left.show();
                    g_jq_dom.$img_slide_right.hide();
                }
            } else {
                g_jq_dom.$add_img_btn.hide();
                var $prev_img = $current_shown_img.prev();
                var $next_img = $current_shown_img.next();
                var show_status = $prev_img.length + ":" + $next_img.length;
                if("0:0" == show_status){
                    g_jq_dom.$img_slide_left.hide();
                    g_jq_dom.$img_slide_right.show();
                } else if("0:1" == show_status){
                    g_jq_dom.$img_slide_left.hide();
                    g_jq_dom.$img_slide_right.show();
                } else if("1:1" == show_status){
                    g_jq_dom.$img_slide_left.show();
                    g_jq_dom.$img_slide_right.show();
                } else {
                    g_jq_dom.$img_slide_left.show();
                    if(9 > current_img_count){
                        g_jq_dom.$img_slide_right.show();
                    } else {
                        g_jq_dom.$img_slide_right.hide();
                    }
                }
            }
        }
    }

    function init_timer(){
        setInterval(img_show_timer, 100);
    }

    function init_calendar(){
        var cur_date = new Date();
        var full_year = cur_date.getFullYear();
        var cur_month = cur_date.getMonth() + 1;
        var month_day = cur_date.getDate();
        var week_day = cur_date.getDate();


        var day_in_month = [31,31,28,31,30,31,30,31,31,30,31,30,31];
        var week_day_map = ["SUN", "MON", "TUE", "WEB", "THU", "FRI", "SAT"];

        month_day = month_day - 3;
        if(month_day < 0){
            cur_month -= 1;
            month_day = day_in_month[cur_month] + month_day;
        }

        week_day = (week_day - 3) % 7;

        function is_leap_year(full_year){
            if(!isNaN(parseInt(full_year))){
                if((full_year%4==0 && full_year%100!=0)||(full_year%100==0 && full_year%400==0)){
                    return true;
                } else {
                    return false
                }
            } else {
                alert("请输入正确年份！");
            }
        }
        if(is_leap_year(full_year)){
            day_in_month[1] = 29;
        }

        var i = 0;
        for(i=0; i<7; i++){
            var $cale_cell = $("#page-day-"+(i+1));
            var $month_day = $cale_cell.find(".page-en-month-day");
            var $week_day = $cale_cell.find(".page-en-week-day");

            if(month_day > day_in_month[cur_month]){
                month_day = 1
            }
            if(month_day < 10){
                $month_day.text("0"+month_day);
            } else {
                $month_day.text(month_day);
            }
            $week_day.text(week_day_map[week_day%7]);
            month_day++;
            week_day++;

        }
    }

    function get_location()
    {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(record_location, show_location_err);
        }
        else
        {
            record_location(null);
        }
    }

    function show_location_err(e){console.log(e);g_jq_dom.$location_panel.text('地理位置已禁用');}

    function record_location(position)
    {
        g_var.location = position;
        $.get("map.php?lat="+position.coords.latitude+"&lng="+position.coords.longitude, function(data){
            g_jq_dom.$location_panel.text(data.result.sematic_description).css({overflow:"hidden"}).attr("page-has-location", 'page-has-location');
        },"json");
    }

    $(function(){
        page_init();
        page_event_bind();
//        console.log(g_jq_dom.$publish_privileges_panel);
        g_jq_dom.$filter_panel.css({
            "minHeight":g_var.wnd_height
        });
        g_jq_dom.$show_blog_img_panel.css({
            "height":g_var.wnd_height
        });
        g_jq_dom.$page_mask.css({
            "height":g_var.wnd_height
        });
        g_jq_dom.$side_menu.css({
            "height":g_var.wnd_height - 1
        });

        img_show_timer();
        init_timer();
        init_calendar();

        $AI.useWorker("js/lib/AlloyImage/alloyimage.js");
    });
</script>

<script>
    function do_filter($src, $target, type){
        var src_dom_img = $src.get(0);
        var target_dom_img = $target.get(0);
        var filter_list = {
            "origin":"origin",
            "soften-face":"softenFace",
            "sketch":"sketch",
            "vintage":"vintage"
        };

        if('origin' == type){
            $target.addClass('page-filter-done');
        }

        var ai = AlloyImage(src_dom_img);
        ai.ps(filter_list[type]).replace(target_dom_img).complete(function () {
            $target.addClass('page-filter-done');
            var cache_complete_flag = true;
            g_jq_dom.$all_filter_cache.each(function(){
                if(!$(this).hasClass('page-filter-done')){
                    cache_complete_flag = false;
                    return false;
                }
            });
            if(cache_complete_flag){
                g_jq_dom.$filter_loading.fadeOut(200);
            }
        });
    }
</script>
</body>
</html>
