<?php
include_once('./_common.php');

$pa_id = preg_replace('/[^a-z0-9_]/i', '', $pa_id);

/*
if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/content.php');
    return;
}
*/

$g5['title'] = $me_name;

include_once('./_head.php');

// 스킨경로
$page_skin_path = G5_PATH.'/skin/page/'.$pa_id;
$page_skin_url  = G5_URL.'/skin/page/'.$pa_id;
$skin_file = $page_skin_path.'/page.skin.php';

if(is_file($skin_file)) {
 
	include($skin_file);

} else {
	alert('등록된 내용이 없습니다.');
}


include_once('./_tail.php');
?>
