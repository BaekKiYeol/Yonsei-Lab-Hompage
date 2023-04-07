<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
</div>
<!-- } 콘텐츠 끝 -->

<!-- footer -->
<footer>  

</footer>



 

<script>
$(function() {
    $(".top-btn .btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '5000');
        return false;
    });
});
  </script>
<!-- } top-btn  -->

<?php
include_once(G5_PATH."/tail.sub.php");
?>