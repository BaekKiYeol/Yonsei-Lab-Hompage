<?php
include_once('./_common.php');

if(defined('G5_THEME_PATH')) {
    $group_file = G5_THEME_PATH.'/group.php';
    if(is_file($group_file)) {
        require_once($group_file);
        return;
    }
    unset($group_file);
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/group.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = $group['gr_subject'];
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="inner portfolio">

    <h2 class="portfolio_tit">  
        <span class="list_title">
        Portfolio
        </span>
        <span class="list_count all">()</span>
    </h2>

    <ul class="tab">
        <li class="tabList">
            <a class="<?php if(!$wr_10) echo 'active'; ?>" href="<?php echo G5_URL ?>/bbs/group.php?gr_id=portfolio">ALL</a>
        </li>
        <?php echo get_code_det_for_a('101', $wr_10);?>
    </ul>


    <div class="latest_wr">

    <!-- 메인화면 최신글 시작 -->
    <?php
    //  최신글
    $sql = " select bo_table, bo_subject
                from {$g5['board_table']}
                where gr_id = '{$gr_id}'
                and bo_list_level <= '{$member['mb_level']}'
                and bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and bo_use_cert = '' ";
    $sql .= " order by bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
    ?>
        <div class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        echo latest_portfolio($wr_10, 'basic', $row['bo_table'], 100, 100);
        ?>
        </div>
    <?php
    }
    ?>
    <!-- 메인화면 최신글 끝 -->
    </div>

</div>

<script src="<?php echo G5_URL ?>/js/jquery.blockUI.js"></script>
<script>

    // var btn = $('.basic_li');
    $('.basic_li').click(function(e){
        $.blockUI({
            message: '<img src="<?php echo G5_URL ?>/img/loading_img.gif"/>' 
            , overlayCSS: { background: 'transparent'}
            , css:{background: 'rgba(0,0,0,0.5)', border:'none', top: '0', left: '0', width: '100%', height: '100%', display: 'flex', alignItems: 'center', justifyContent: 'center'},
        });
        smoothscroll.destroy();

        e.preventDefault();
        var name = this.dataset.name;
        var board = this.dataset.board;
        // console.log('name'+name);
        // console.log('board'+board);
        $.ajax({
            url: g5_bbs_url+'/ajax.portfolio.php',
            type: "POST",
            data: {
                'name': name,
                'board': board
            },
            cache: false,
            async: true,
            dataType: "html",
            success: function(result){
                $('.modal-common').html(result);
                $('.modal-common').modal({ escapeClose: false, clickClose: false, showClose: false, closeExisting: false }); //모달실행
                $.unblockUI();
            },
            error: function(){
                alert('json not found');
                $.unblockUI();
            }
        });
    });

    var length = $('.basic_li').length;
    $('.list_count.all').html('('+length+')');
</script>


<div class="modal-common"></div>


<div class="lottie--mouse_scroll">
  <lottie-player src="<?php echo G5_URL ?>/img/mouse-scroll.json" speed="1" loop autoplay></lottie-player>
</div>

<!-- lottie -->
<script>
  let prevPageYOffset2;
  let lottieScroll = document.querySelector('.lottie--mouse_scroll');

  window.addEventListener('scroll', () => {
      if (prevPageYOffset2 < window.pageYOffset) {
        lottieScroll.classList.add('active');
      } 
      prevPageYOffset2 = window.pageYOffset;

      if (window.pageYOffset == 0 ){
        lottieScroll.classList.remove('active');
      }
  });
</script>
<?php
  include_once('./_tail.php');
?>
