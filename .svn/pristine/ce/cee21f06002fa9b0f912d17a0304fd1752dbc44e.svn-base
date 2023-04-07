<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

global $is_admin;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$visit_skin_url.'/style.css">', 0);
?>

<!-- 접속자집계 시작 { -->
<section id="visit" class="ft_cnt">
    <ul>
      <!-- <li><span>어제</span> - <strong><?php echo number_format($visit[2]) ?></strong></li> -->
      <!-- <li><span>최대</span> - <strong><?php echo number_format($visit[3]) ?></strong></li> -->
      <li><span>TOTAL</span> : <strong><?php echo number_format($visit[4]) ?></strong></li>
      <span></span>
      <li><span>TODAY</span> : <strong><?php echo number_format($visit[1]) ?></strong></li>
    </ul>
    <?php if ($is_admin == "super") {  ?><a href="<?php echo G5_ADMIN_URL ?>/visit_list.php" class="btn_admin btn"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a><?php } ?>
</section>
<!-- } 접속자집계 끝 -->