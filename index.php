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
        .pag-img-slide-panel{
            position: absolute;
        }

        #page-main-footer,
        #page-pre-publish-footer,
        #page-publish-footer{
            position: fixed;
            left: 50%;
            bottom: 0;
            background-color: rgb(44,44,52);
            color:#fff;
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

        /*begin: debug*/
        #page-main-footer{
            /*display: none;*/
        }
        #page-publish-footer{
            display: none;
        }

        #page-pre-publish-footer{
            display: none;
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
    </style>
</head>
<body class="cf-invisible">

<!-- begin: 主界面 -->
<div class="cf-wrap" id="page-main-panel">
    <img src="img/temp/skin_dark/demo_bkg.jpg" class="cf-img-bkg">
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
        <div class="cf-row cf-text-center" id="page-img-list" data-cf-layout='{"width":540,"height":300,"left":0,"top":20}'></div>
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
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}'>添加标签</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row page-ext-info-entry" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_location.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}'>添加位置</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row page-ext-info-entry" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_public.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}'>公开</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row page-ext-info-entry page-last" data-cf-layout='{
                "height":60,
                "width":540,
                "lineHeight":60
            }'>
            <div class="cf-col-x" data-cf-layout='{"width":30}'><img src="img/temp/publish/icon_sync.png" class="cf-img-bkg" data-cf-layout='{"width":30,"marginTop":20}'></div>
            <div class="cf-col-x" data-cf-layout='{"width":510,"paddingLeft":30,"fontSize":22}'>同步至</div>
            <div class="cf-col-x" data-cf-layout='{"width":20,"textAlign":"right"}'><img src="img/temp/publish/icon_arrow.png" data-cf-layout='{"width":14}'></div>
        </div>

        <div class="cf-row">
            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_wechat.png" data-cf-layout='{"width":100}' class="cf-img-bkg">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_friend.png" data-cf-layout='{"width":100}' class="cf-img-bkg">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_qq.png" data-cf-layout='{"width":100}' class="cf-img-bkg">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_weibo.png" data-cf-layout='{"width":100}' class="cf-img-bkg">
            </div>

            <div class="cf-col-x" data-cf-layout='{
                    "width":100,
                    "height":100,
                    "marginRight":10
                }'><img src="img/temp/publish/share_douban.png" data-cf-layout='{"width":100}' class="cf-img-bkg">
            </div>
        </div>
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
            <span class="cf-row" data-cf-layout='{"fontSize":28,"paddingTop":22}'>文章</span>
        </div>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="photo">
            <img src="img/temp/pre_publish/photo.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":28,"paddingTop":22}'>图片</span>
        </div>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="video">
            <img src="img/temp/pre_publish/video.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":28,"paddingTop":22}'>视频</span>
        </div>
        <div class="cf-col-3x page-publish-type-btn" data-publish-type="audio">
            <img src="img/temp/pre_publish/audio.png" data-cf-layout='{"width":110}'>
            <span class="cf-row" data-cf-layout='{"fontSize":28,"paddingTop":22}'>语音</span>
        </div>
    </div>
</div>
<!-- end: 预发布界面 -->

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
                }'><img src="img/temp/skin_dark/main_page.png" data-cf-layout='{"width":34}'></div>
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
                }'><img src="img/temp/skin_dark/personal_center.png" data-cf-layout='{"width":34}'></div>
        <div class="cf-row">个人</div>
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
                            "marginRight":10
                        }'><img src=""></div>
<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>
<script src="js/lib/jquery.exif.js"></script>
<script src="js/lib/MegaPixImage.js"></script>
<script src="js/lib/common.js"></script>
<!--1.0.18-->
<script src="js/page/index.js?v=0.0.1"></script>
<script>

    function page_init(){
        g_jq_dom = $.extend({}, g_jq_dom, {
            $blog_list:$("#page-blog-list"),
            $img_temp:$("#page-img-template"),
            $img_list:$("#page-img-list"),
            $add_img_btn:$("#page-add-img-btn"),
            $add_img_tip:$("#page-img-add-tip"),
            $img_slide_left:$("#page-slide-left"),
            $img_slide_right:$("#page-slide-right"),
            $article_text:$("#page-article-text"),
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
                $write:$(".page-operation-write")
            },
            $feeling:{
                $text:$("#page-feeling-text"),
                $line:$("#page-feeling-line"),
                $btn:$("#page-feeling-btn")
            },
            $blog_entry_temp:$("#page-template-blog-entry").remove().removeAttr("id"),
            $blog_entry_temp_img:$("#page-template-blog-entry-img").remove().removeAttr("id")
        });

        g_var = $.extend({}, g_var, {
            cur_feeling_pos:0,cur_feeling_min:0,cur_feeling_max:388,
            pre_publish_status:false,
            publish_status:false,publish_type:'photo'
        });
    }

    function scene_reset_to_main(){
        g_var.pre_publish_status = false;
        g_jq_dom.$publish_page.$panel.fadeOut(200);
        g_jq_dom.$publish_page.$footer.fadeOut(200, function(){
            g_jq_dom.$main_page.$panel.show();
        });
    }
    function scene_swap_to_pre_publish(){
        g_jq_dom.$main_page.$panel.show();

        g_jq_dom.$page_mask.stop().fadeIn(200);
        g_jq_dom.$pre_publish_page.$panel.show().removeClass("animated fadeOutDown").addClass("animated fadeInUp");
        g_jq_dom.$pre_publish_page.$footer.fadeIn(200, function(){g_var.pre_publish_status = true});
    }

    function scene_swap_to_main(){
        g_var.pre_publish_status = false;
        g_jq_dom.$page_mask.stop().fadeOut(200);
        g_jq_dom.$pre_publish_page.$panel.removeClass("animated fadeInUp").addClass("animated fadeOutDown");
        g_jq_dom.$pre_publish_page.$footer.fadeOut(200);
    }

    function scene_swap_to_publish(){
        if(!g_var.pre_publish_status){return;}
        g_var.pre_publish_status = false;
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
        g_jq_dom.$img_list.children().remove();
        g_jq_dom.$article_text.val('');
        scene_reset_to_main();
    }
    function img_prev(){
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
        if(g_var.publish_status) {return;}
        g_var.publish_status = true;
        var $all_img = g_jq_dom.$img_list.find("img");
        var article_str = g_jq_dom.$article_text.val();
        var img_count = $all_img.length;
        article_str = article_str.trim();

        if(''==article_str && 0 == img_count){
            alert("请至少选择一张图片或写下一段文字.");
            g_var.publish_status = false;
            return;
        }


        var $new_blog_entry = g_jq_dom.$blog_entry_temp.clone();
        $new_blog_entry.find('.page-type-node').find('img').attr('src', 'img/temp/skin_light/type_'+g_var.publish_type+'.png');
        if('' == article_str){
            $new_blog_entry.find('.page-text-panel').remove();
        } else {
            $new_blog_entry.find('.page-text-panel').text(article_str);
        }

        $all_img.each(function(){
            var $this = $(this);
            var $new_img = g_jq_dom.$blog_entry_temp_img.clone();
            $new_img.find("img").attr('src', $this.attr('src'));
            $new_img.appendTo($new_blog_entry.find('.page-img-panel'));
        });

        $new_blog_entry.prependTo(g_jq_dom.$blog_list);
        scene_reset_to_main();
        g_var.publish_status = false;

        g_jq_dom.$img_list.children().remove();
        g_jq_dom.$article_text.val('');

    }
    function page_event_bind(){
        g_jq_dom.$page_opt.$write.on(g_event.touchend, scene_swap_to_pre_publish);
        g_jq_dom.$pre_publish_page.$buttons.$close_btn.on(g_event.touchend, scene_swap_to_main);
        g_jq_dom.$pre_publish_page.$buttons.$type_btn.on(g_event.touchend, scene_swap_to_publish);
        g_jq_dom.$page_opt.$back_to_main.on(g_event.touchend, refresh_page);
        g_jq_dom.$add_img_btn.on(g_event.touchend, start_shooting);
        g_jq_dom.$img_slide_left.on(g_event.touchend, img_prev);
        g_jq_dom.$img_slide_right.on(g_event.touchend, img_next);
        g_jq_dom.$publish_page.$footer.on(g_event.touchend, publish_article);

        slide_feeling();
    }

    function start_shooting(){
        var $new_img = $('<div class="cf-row page-shown-img" style="height:100%"><img><div>');
        var $img_el = $new_img.find('img');
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
            navigator.geolocation.getCurrentPosition(record_location);
        }
        else
        {
            record_location(null);
        }
    }

    function record_location(position)
    {
        g_var.location = position;

//        alert(position.coords.latitude);
//        alert(position.coords.longitude);
    }

    $(function(){
        page_init();
        page_event_bind();
        var $blur_mask = g_jq_dom.$page_mask;
        $blur_mask.css({
            "height":g_var.wnd_height
        });

        img_show_timer();
        init_timer();
        init_calendar();

//        get_location();
    });
</script>
</body>
</html>
