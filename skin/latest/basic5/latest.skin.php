<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;



// 자동로그인 부분에서 첫로그인에 포인트 부여하던것을 로그인중일때로 변경하면서 코드도 대폭 수정하였습니다.
if ($_SESSION['ss_mb_id']) { // 로그인중이라면
    $member = get_member($_SESSION['ss_mb_id']);

    // 차단된 회원이면 ss_mb_id 초기화
    if($member['mb_intercept_date'] && $member['mb_intercept_date'] <= date("Ymd", G5_SERVER_TIME)) {
        set_session('ss_mb_id', '');
        $member = array();
    } else {
        // 오늘 처음 로그인 이라면
        if (substr($member['mb_today_login'], 0, 10) != G5_TIME_YMD) {
            // 첫 로그인 포인트 지급
            insert_point($member['mb_id'], $config['cf_login_point'], G5_TIME_YMD.' 첫로그인', '@login', $member['mb_id'], G5_TIME_YMD);

            // 오늘의 로그인이 될 수도 있으며 마지막 로그인일 수도 있음
            // 해당 회원의 접근일시와 IP 를 저장
            $sql = " update {$g5['member_table']} set mb_today_login = '".G5_TIME_YMDHIS."', mb_login_ip = '{$_SERVER['REMOTE_ADDR']}' where mb_id = '{$member['mb_id']}' ";
            sql_query($sql);
        }
    }
} else {
    // 자동로그인 ---------------------------------------
    // 회원아이디가 쿠키에 저장되어 있다면 (3.27)
    if ($tmp_mb_id = get_cookie('ck_mb_id')) {

        $tmp_mb_id = substr(preg_replace("/[^a-zA-Z0-9_]*/", "", $tmp_mb_id), 0, 20);
        // 최고관리자는 자동로그인 금지
        if (strtolower($tmp_mb_id) != strtolower($config['cf_admin'])) {
            $sql = " select mb_password, mb_intercept_date, mb_leave_date, mb_email_certify from {$g5['member_table']} where mb_id = '{$tmp_mb_id}' ";
            $row = sql_fetch($sql);
            if($row['mb_password']){
                $key = md5($_SERVER['SERVER_ADDR'] . $_SERVER['SERVER_SOFTWARE'] . $_SERVER['HTTP_USER_AGENT'] . $row['mb_password']);
                // 쿠키에 저장된 키와 같다면
                $tmp_key = get_cookie('ck_auto');
                if ($tmp_key === $key && $tmp_key) {
                    // 차단, 탈퇴가 아니고 메일인증이 사용이면서 인증을 받았다면
                    if ($row['mb_intercept_date'] == '' &&
                        $row['mb_leave_date'] == '' &&
                        (!$config['cf_use_email_certify'] || preg_match('/[1-9]/', $row['mb_email_certify'])) ) {
                        // 세션에 회원아이디를 저장하여 로그인으로 간주
                        set_session('ss_mb_id', $tmp_mb_id);

                        // 페이지를 재실행
                        echo "<script type='text/javascript'> window.location.reload(); </script>";
                        exit;
                    }
                }
            }
            // $row 배열변수 해제
            unset($row);
        }
    }
    // 자동로그인 end ---------------------------------------
}


// 회원, 비회원 구분
$is_member = $is_guest = false;
$is_admin = '';
if ($member['mb_id']) {
    $is_member = true;
    $is_admin = is_admin($member['mb_id']);
    $member['mb_dir'] = substr($member['mb_id'],0,2);
} else {
    $is_guest = true;
    $member['mb_id'] = '';
    $member['mb_level'] = 1; // 비회원의 경우 회원레벨을 가장 낮게 설정
}

?>

<div class="lat">
    <h2 class="lat_title">
        <span class="list_title">CONTENTS & MEDIA PORTFOLIO</span>
        <p>CONTENTS & MEDIA 대표 포토폴리오</p>
    </h2>
    <div class="swiper-container--portfolio3">
      <ul class="portfolio-list swiper-wrapper">
      <?php for ($i=0; $i<$list_count; $i++) {  ?>
          <li class="basic_li swiper-slide" data-name="<?php echo $list[$i]['wr_id'];?>" data-board="<?php echo $list[$i]['bo_table']; ?>">
              <div class="list_wrap">
                  <div class="list_wrap_tit" style="background-color: <?php echo $list[$i]['subject']; ?>;">
                      <p>
                          <?php echo $list[$i]['content']; ?>
                      </p>
                      <h3>
                          <?php echo nl2br($list[$i]['wr_4']); ?>
                      </h3>
                      <?php if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">New<span class=\"sound_only\">새글</span></span>"; ?>
                  </div>
                  <?php  $thumb = get_list_thumbnail($list[$i]['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true); ?>
                  <div class="list_wrap_img" style="background-image: url(<?php echo $thumb['src']; ?>);">
                      <div class="list_wrap_img_bg" style="background-color: <?php echo $list[$i]['subject']; ?>;"></div>
                      <ul class="category_list">
                          <?php echo get_code_det_for_tag('101', $list[$i]['wr_10']); ?>
                      </ul>
                  </div>
              </div>
          </li>
      <?php }  ?>
      <?php if ($list_count == 0) { //게시물이 없을 때  ?>
      <li class="empty_li">게시물이 없습니다.</li>
      <?php }  ?>
      </ul>
    </div>
    <a href="<?php echo G5_URL ?>/bbs/group.php?gr_id=portfolio">+ 포트폴리오 더보기</a>
</div>
