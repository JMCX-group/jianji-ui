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