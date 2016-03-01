<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 16/3/1
 * Time: 下午8:56
 */
if(!isset($_GET['head'])){
    $_GET['head'] = 'dog.png';
}
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
        body{font-size: 0}
        .cf-wrap{font-size: 0}
    </style>
</head>
<body class="cf-invisible">
<div class="cf-wrap">
    <img src="img/temp/select_index/bkg.jpg" data-cf-layout='{
            "width":640
        }'>
    <a href="index.php?head=<?php echo $_GET['head'];?>&page_type=timeline" data-cf-layout='{
            "position":"absolute",
            "left":70,
            "top":210,
            "width":500,
            "height":130
        }'></a>

    <a href="index.php?head=<?php echo $_GET['head'];?>&page_type=map" data-cf-layout='{
            "position":"absolute",
            "left":70,
            "top":520,
            "width":500,
            "height":130
        }'></a>

    <a href="index.php?head=<?php echo $_GET['head'];?>&page_type=archive" data-cf-layout='{
            "position":"absolute",
            "left":70,
            "top":835,
            "width":500,
            "height":130
        }'></a>
</div>

<?php require_once(dirname(__FILE__).'/page_parts/common/js.php');?>
</body>
</html>
