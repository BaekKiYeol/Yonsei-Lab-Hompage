<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$search_skin_url.'/style.css">', 0);
?>


<script>
    $(document).ready(function(){
        $('.loca').addClass('active');
        $('.loca_btn.loca_btn_1').css('display','block');
        $('.loca_btn.loca_btn_1').text('통합검색');
        $('.loca_btn.loca_btn_1').prop("disabled", true);
    })
</script>

<div class="search-form">
    <div class="wrapper">
        <!-- Search -->
        <div class="list-title-wrap">
            <div class="title">
                <h1>Search</h1>
            </div>
            <div class="title-path">
                Home &nbsp; > <span>&ensp;Search</span>
            </div>
        </div>

        <div id="sch_result">
            <?php
            if ($stx) {
                if ($board_count) {
            ?>
            <section id="sch_res_ov">
               <h2>검색어 <strong>‘<?php echo $stx ?>’</strong>에 대한 <br class="mo"> 전체 '<strong><?php echo number_format($total_count) ?></strong>'개의 결과를 찾았습니다.</h2>

               <!-- <ul>
                <li>
                    <a href="#"><?php echo $bo_subject[$idx] ?></a>
                </li>
               </ul>
                <ul>
                    <li>게시판 <?php echo $board_count ?>개</li>
                    <li>게시물 <?php echo number_format($total_count) ?>개</li>
                    <li><?php echo number_format($page) ?>/<?php echo number_format($total_page) ?> 페이지 열람 중</li>
                </ul> -->
            </section>
            <?php
                }
            }
            ?>

            <?php
            if ($stx) {
                if ($board_count) {
            ?>
           <ul id="sch_res_board">
                <li><a href="?<?php echo $search_query ?>&amp;gr_id=<?php echo $gr_id ?>" <?php echo $sch_all ?>>전체게시판</a></li>
                <?php echo $str_board_list; ?>
            </ul>
            <?php
                } else {
            ?>

            <section id="sch_res_ov">
               <h2>검색어 <strong>‘<?php echo $stx ?>’</strong>에 대한 <br class="mo"> 전체 <strong>‘<?php echo number_format($board_count) ?>’</strong>개의 결과를 찾았습니다.</h2>
            </section>
            <div class="empty_list"><p>검색 결과가 없습니다.</p></div>
            <?php } }  ?>

            <hr>


            
            <?php if ($stx && $board_count) { ?><section class="sch_res_list"><?php }  ?>
            <?php


            $k=0;
            for ($idx=$table_index, $k=0; $idx<count($search_table) && $k<$rows; $idx++) {
            ;

            ?>
            
                <div class="search_board_result">
                <h2>
                    <a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>">
                        <strong><?php echo $bo_subject[$idx] ?></strong>
                        내 결과 
                        <!-- (<strong><?php echo $table_cnt[$search_table[$idx]]; ?></strong>건) -->
                    </a>
                </h2>


                <a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>" class="sch_more">+ 더보기</a>
                <ul>
                <?php
                for ($i=0; $i<count($list[$idx]) && $k<$rows; $i++, $k++) {
                    if ($list[$idx][$i]['wr_is_comment'])
                    {
                        $comment_def = '<span class="cmt_def"><i class="fa fa-commenting-o" aria-hidden="true"></i><span class="sound_only">댓글</span></span> ';
                        $comment_href = '#c_'.$list[$idx][$i]['wr_id'];
                    }
                    else
                    {
                        $comment_def = '';
                        $comment_href = '';
                    }
                ?>

                    <li>
                                
                        <!-- <p class="search-lnb">
                            <span>홈</span>
                            <span>></span>
                            <span><?php echo $bo_subject[$idx] ?></span>
                        </p> -->
                        <div class="search-result--cont">
                            <div class="sch_tit">
                                <a href="<?php echo get_pretty_url($search_table[$idx], '', $search_query); ?>" class="sch_res_title"><?php echo $comment_def ?><?php echo $list[$idx][$i]['subject'] ?></a>
                                
                            </div>
                            <p><?php echo $list[$idx][$i]['content'] ?></p>
                            <!-- <div class="sch_info">
                                <?php echo $list[$idx][$i]['name'] ?>
                                <span class="sch_datetime"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $list[$idx][$i]['wr_datetime'] ?></span>
                            </div> -->


                        </div>
                        
                    </li>
                <?php }  ?>
                </ul>
                </div>
            <?php }		//end for?>
            <?php if ($stx && $board_count) {  ?></section><?php }  ?>

            <?php echo $write_pages ?>

        </div>
    </div>
</div>
<!-- 전체검색 시작 { -->

<!-- } 전체검색 끝 -->