/**
 * Created by JMCX - WHY
 * Date: 2016/1/30
 */

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
        month_day = day_in_month[cur_month] + month_day + 1;
    } else if (0 == month_day) {
        month_day = day_in_month[cur_month];
    }

    week_day = (week_day - 3);
    if(week_day != 0){
        if(week_day < 0){
            week_day += 1;
        }
        week_day = week_day % 7;
    }


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
        day_in_month[2] = 29;
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