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

        #page-footer{
            position: absolute;
            left: 50%;
            bottom: 0;
            background-color: rgb(44,44,52);
            color:#fff;
        }
    </style>
</head>
<body class="cf-invisible">
<img src="img/temp/skin_dark/demo_bkg.jpg" class="cf-img-bkg">
<div class="cf-wrap">
    <div class="cf-row cf-text-center" data-cf-layout='{
            "paddingTop":100,
            "paddingBottom":40
        }'><img src="img/temp/demo_head_famale.png" data-cf-layout='{
                "border":{
                    "width":8,
                    "style":"solid",
                    "color":"#fff"
                },
                "borderRadius":"50%",
                "width":180,
                "boxSizing":"border-box"
            }'>
    </div>
    <div class="cf-row cf-text-center"><img src="img/temp/skin_dark/show_curve.png" data-cf-layout='{
                "width":170
            }'>
    </div>
    <div class="cf-row" id="page-curve" data-cf-layout='{"height":80}'></div>
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

    <div class="cf-row page-blog-list">
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
                        <img src="img/temp/skin_dark/play_btn.png" data-cf-layout='{
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
    <div class="cf-row" id="page-footer" data-cf-layout='{
            "position":"fixed",
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
                }'><img src="img/temp/skin_dark/main_page.png"></div>
            <div class="cf-row">主页</div>
            </div>
        <div class="cf-col-x cf-text-center" data-cf-layout='{
                "width":460
            }'>
            <div class="cf-row page-operation-write" data-cf-layout='{
                    "fontSize":0,
                    "paddingBottom":6
                }'><img src="img/temp/skin_dark/write_blog.png"></div>
            <div class="cf-row page-operation-write">记录</div>
        </div>
        <div class="cf-col-x" data-cf-layout='{
                "width":90
            }'>
            <div class="cf-row" data-cf-layout='{
                    "fontSize":0,
                    "paddingBottom":6
                }'><img src="img/temp/skin_dark/personal_center.png"></div>
            <div class="cf-row">个人</div>
        </div>
    </div>
</div>
<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>
<!--1.0.18-->
<script src="js/page/index.js?v=0.0.1"></script>
</body>
</html>