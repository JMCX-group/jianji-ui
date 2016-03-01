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

        #page-map{
            display: none;
        }
        #page-main-panel{
            display: none;
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

    <style>
        #page-template-blog-entry{display: none}
        #page-template-blog-entry-img{display: none}
        #page-map{
            font-size: 0;
        }
        .page-map-img-bottom{
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
        }
    </style>
</head>
<body class="cf-invisible">

<?php require_once(dirname(__FILE__).'/page_parts/index/timeline_panel.php');?>
<?php require_once(dirname(__FILE__).'/page_parts/index/publish_panel.php');?>

<div class="cf-wrap" id="page-map">
    <div class="cf-row" id="page-lbs-pic-panel-outer" data-cf-layout='{
            "width":640,
            "height":660
        }'><div id="page-lbs-pic-panel-inner" class="cf-row"></div><img src="img/temp/index/map/img_bottom.png" class="page-map-img-bottom"></div>
    <div class="cf-row" id="page-lbs-map" data-cf-layout='{
            "width":640
        }'></div>
</div>

<div class="cf-row" id="page-blur-mask"></div>

<?php require_once(dirname(__FILE__) . '/page_parts/index/pre_publish_panel.php');?>
<?php require_once(dirname(__FILE__).'/page_parts/index/filter_panel.php');?>


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

<?php require_once(dirname(__FILE__).'/page_parts/index/main_footer.php');?>
<?php require_once(dirname(__FILE__).'/page_parts/index/pre_publish_footer.php');?>
<?php require_once(dirname(__FILE__).'/page_parts/index/publish_footer.php');?>
<?php require_once(dirname(__FILE__).'/page_parts/index/page_templates.php');?>
<?php require_once(dirname(__FILE__).'/page_parts/index/side_menu.php');?>


<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>
<script src="js/lib/jquery.slides.min.js"></script>
<script src="js/lib/jquery.exif.js"></script>
<script src="js/lib/MegaPixImage.js"></script>
<script src="js/lib/common.js"></script>
<script src="js/lib/AlloyImage/alloyimage.js"></script>
<!--1.0.18-->
<script src="js/page/index.js?v=0.0.2"></script>

<script>
    var g_page_type = 'timeline';
    <?php if(isset($_GET['page_type'])){ ?>
        g_page_type = '<?php echo  $_GET['page_type'];?>';
    <?php } ?>

    function show_page(){
        var page_list = {
            "timeline":$("#page-main-panel"),
            "map":$("#page-map"),
            "archive":$("#page-archive")
        };

        page_list[g_page_type].show();
    }

    function fit_img(panel_width, panel_height, $img){
        var $this = $img;
        var dom_img = $this.get(0);

        var img_width = dom_img.width;
        var img_height = dom_img.height;

        var img_ratio = img_width / img_height;
        var panel_ratio = panel_width / panel_height;

        if(img_width > panel_width && img_height < panel_height){
            $this.css({height:panel_height});
        } else if (img_width < panel_width && img_height > panel_height){
            $this.css({width:panel_width});
        } else {
            if(img_ratio > panel_ratio){
                $this.css({height:panel_height});
            } else {
                $this.css({width:panel_width});
            }
        }

        $this.css({visibility:"visible"});
    }

    function init_map_panel(){
        var base_img_url = 'img/temp/index/temp_map/';
        var mock_data = [
            {pic:"1.jpg", map:"map1.png"},
            {pic:"2.jpg", map:"map2.png"},
            {pic:"3.jpg", map:"map3.png"},
            {pic:"4.jpg", map:"map4.png"}
        ];

        var $lbs_pic_panel_outer = $("#page-lbs-pic-panel-outer");
        var $lbs_pic_panel_inner = $("#page-lbs-pic-panel-inner");
        var $lbs_map_panel = $("#page-lbs-map");


        var pic_panel_outer_width = $lbs_pic_panel_outer.width();
        var pic_panel_outer_height = $lbs_pic_panel_outer.height();

        $lbs_map_panel.css({height:g_var.wnd_height - pic_panel_outer_height - 98*g_var.scale_ratio});
        var i,data_len = mock_data.length, inner_width=pic_panel_outer_width*data_len;

        var map_panel_width = $lbs_map_panel.width();
        var map_panel_height = $lbs_map_panel.height();

        $lbs_pic_panel_inner.css({width:inner_width});

        var $first_map = $("<img style='visibility:hidden' src='"+base_img_url+mock_data[0].map+"'>");
        $first_map.on('load', function(){fit_img(map_panel_width, map_panel_height, $(this));});
        $first_map.appendTo($lbs_map_panel);

        for(i=0; i<data_len; i++){
            var $new_pic_cell = $("<div><img style='visibility:hidden' src='"+base_img_url+mock_data[i].pic+"'><div>");
            var $new_pic_img = $new_pic_cell.find('img');
            $new_pic_img.on('load', function(){fit_img(pic_panel_outer_width, pic_panel_outer_height, $(this));});
            $new_pic_cell.css({
                float:"left",
                overflow:"hidden",
                width:pic_panel_outer_width,
                height:pic_panel_outer_height
            }).appendTo($lbs_pic_panel_inner);
        }


        var scroll_flag = false;
        var start_x = 0, start_margin_left = 0;
        var last_map_idx = 0;
        $lbs_pic_panel_inner.on(g_event.touchstart, function(e){
//            if(g_var.body_move_status){return;}
            if(scroll_flag){return;}
            start_x = e.originalEvent.touches[0].clientX;
            start_margin_left = parseInt($lbs_pic_panel_inner.css("marginLeft")) || 0;
        }).on(g_event.touchmove, function(e){
//            if(g_var.body_move_status){return;}
            if(scroll_flag){return;}
            var current_x = e.originalEvent.touches[0].clientX;

            $lbs_pic_panel_inner.css({marginLeft:start_margin_left+current_x-start_x})
        }).on(g_event.touchend, function(e){
//            if(g_var.body_move_status){return;}
            if(scroll_flag){return;}
            scroll_flag = true;

            var last_margin_left = parseInt($lbs_pic_panel_inner.css("marginLeft"));
            var dest_margin = 0;
            var dest_idx = 0;
            if(last_margin_left > 0){
                dest_margin = 0;
                dest_idx = 0;
            } else if(Math.abs(last_margin_left)>(inner_width-pic_panel_outer_width)){
                dest_margin = pic_panel_outer_width-inner_width;
                dest_idx = data_len - 1;
            } else {
                dest_margin = last_margin_left + pic_panel_outer_width / 2;
                if(dest_margin >= 0){
                    dest_margin = 0;
                    dest_idx = 0;
                } else {
                    var multiple =  Math.floor((Math.abs(last_margin_left) + pic_panel_outer_width / 2)/pic_panel_outer_width);
                    dest_margin = -pic_panel_outer_width * multiple;

                    dest_idx = multiple;
                }
            }

            $lbs_pic_panel_inner.stop().animate({marginLeft:dest_margin}, 200, function(){scroll_flag = false});
            if(last_map_idx !== dest_idx){
                last_map_idx = dest_idx;
                $first_map.stop().fadeOut(120, function(){
                    $first_map.css({visibility:"hidden"}).attr('src', base_img_url+mock_data[dest_idx].map).fadeIn(150);
                });
            }

        });
    }

    $(function(){
        init_map_panel();
        show_page();
    });
</script>
</body>
</html>
