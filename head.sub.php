<?php

/* if($_SERVER['HTTP'] != 'on'){
    goto_url('http://sotongfive.kr');
} */

// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마 head.sub.php 파일
if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/head.sub.php')) {
    require_once(G5_THEME_PATH.'/head.sub.php');
    return;
}

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

/* if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
} */
$g5['title'] = $config['cf_title'];
$g5_head_title = $g5['title'];
/* $g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title); */

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>


<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10, user-scalable=yes"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=Edge">'.PHP_EOL;
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>

<link rel="stylesheet" href="<?php echo G5_URL?>/assets/css/lib/swiper-bundle.min.css">
<script src="<?php echo G5_URL?>/assets/js/lib/swiper-bundle.min.js"></script>



<?php
if (defined('G5_IS_ADMIN')) {
    if(!defined('_THEME_PREVIEW_'))
        echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_ADMIN_URL.'/css/admin.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
} else {
    echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_CSS_URL.'/'.(G5_IS_MOBILE ?'mobile':'default').'.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
    echo '<link rel="stylesheet" href="'.G5_URL.'/assets/css/lib/datepicker.min.css?ver='.G5_CSS_VER.'">';
    echo '<link rel="stylesheet" href="'.G5_URL.'/assets/css/cmn/common.css?ver='.G5_CSS_VER.'">';
    echo '<link rel="stylesheet" href="'.G5_URL.'/assets/css/cmn/reset.css?ver='.G5_CSS_VER.'">';
    echo '<link rel="stylesheet" href="'.G5_URL.'/assets/css/user/layout.css?ver='.G5_CSS_VER.'">';
}

?>

<!-- css -->
<link rel="stylesheet" href="<?php echo G5_URL ?>/assets/css/user/sub.css?ver=<?php echo G5_CSS_VER?>">
<link rel="stylesheet" href="<?php echo G5_URL ?>/assets/css/user/main.css?ver=<?php echo G5_CSS_VER?>">
<link rel="stylesheet" href="<?php echo G5_URL ?>/assets/css/user/layout.css?ver=<?php echo G5_CSS_VER?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/gh/sunn-us/SUIT/fonts/static/woff2/SUIT.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src=""></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PFQEW0V23D');
</script> -->

<!-- 네이버 웹마스터 -->
<meta name="naver-site-verification" content="" />


<link rel="apple-touch-icon" sizes="180x180" href="<?php echo G5_URL?>/assets/images/favicon/apple-touch-icon.png">
<!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo G5_URL?>/assets/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo G5_URL?>/assets/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo G5_URL?>/assets/images/favicon/site.webmanifest"> -->
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<!-- og -->
<meta property="og:type" content="website">
<meta property="og:title" content="">
<meta property="og:url" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta name="description" content="">

<meta http-equiv="X-UA-Compatible" content="IE=Edge; chrome=1">
<link rel="canonical" href="">
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>



<?php
add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-easing.1.4.1.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.fullpage.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/scrolloverflow.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
add_javascript('<script src="'.G5_URL.'/assets/js/cmn/sotong.form.js"></script>', 0);
add_javascript('<script src="'.G5_URL.'/assets/js/user/design.js"></script>', 0);



add_javascript('<script src="'.G5_JS_URL.'/jquery.modal.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/css/jquery.modal.min.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/css/jquery.fullpage.css">', 0);

/*---- scroll smooth ------*/
add_javascript('<script src="'.G5_JS_URL.'/scroll.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/smoothScroll.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/TweenMax.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/ScrollToPlugin.min.js"></script>', 0);
add_javascript('<script src="'.G5_URL.'/assets/js/lib/jquery.easing.1.3.js"></script>', 0);
add_javascript('<script src="'.G5_URL.'/assets/js/lib/jquery.mCustomScrollbar.concat.min.js"></script>', 0);
add_javascript('<link rel="stylesheet" href="'.G5_URL.'/assets/css/lib/jquery.mCustomScrollbar.css">', 0);


if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];




?>

</head>
<body class="before-load <?php if(defined('_INDEX_')) echo 'main'; ?> ">
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

}
?>


<?php 
if (!defined('G5_IS_ADMIN') && defined('_INDEX_')) {?>


<?php
}
?>
