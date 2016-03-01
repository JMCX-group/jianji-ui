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
