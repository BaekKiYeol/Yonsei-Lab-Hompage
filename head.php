<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="hd_wrapper">
        
        <div class="inner">
            <div id="logo">
                <a href="<?php echo G5_URL ?>"><img src="/assets/images/user/yonsei-logo.png" alt=""></a>
            </div>

            <nav id="gnb">
              <div class="gnb_wrap">
                  <ul id="gnb_1dul">
                    <li class="gnb_1dli">
                      <a href="<?php echo G5_URL ?>" class="gnb_1da"> HOME</a>
                    </li>
                      <?php
                      $menu_datas = get_menu_db(0, true);
                      $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                      $i = 0;
                      foreach( $menu_datas as $row ){
                          if( empty($row) ) continue;
                      ?>
                      <li class="gnb_1dli <?php if($row['me_code'] == $me_code_1) echo 'active' ?>">
                          <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                      </li>
                      <?php
                      $i++;
                      }   //end foreach $row

                      if ($i == 0) {  ?>
                          <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                      <?php } ?>
                  </ul>
              </div>
            </nav>
            
            <div class="gnb-menu" style="">
                <div></div>
                <div></div>
            </div>
          

        </div>

    </div>
    
    <!-- main headNavbar -->
    <script>
      let gnbElem = document.querySelector('#gnb');
      let gnbMenuElem = document.querySelector('.gnb-menu');


        
      gnbMenuElem.addEventListener('click', () => {
        gnbElem.classList.toggle('active');

        if (gnbElem.classList.contains('active')) {
            gnbMenuElem.classList.add('open');
        } else {
          gnbMenuElem.classList.remove('open');
          gnbMenuElem.classList.add('close');
          setTimeout(function(){
            gnbMenuElem.classList.remove('close');
          },1000);
        }

       

      });

    </script>

</div>
<!-- 콘텐츠 시작 { -->

<div class="container">


