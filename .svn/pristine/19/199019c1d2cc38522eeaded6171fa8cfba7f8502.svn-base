<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
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
   
   <script type="text/javascript"> 
    //즐겨찾기 추가 코드
    $(document).ready(function(){
        $('#favorite').on('click', function(e) {
            var bookmarkURL = window.location.href;
            var bookmarkTitle = document.title;
            var triggerDefault = false;

            if (window.sidebar && window.sidebar.addPanel) {
                // Firefox version &lt; 23
                window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
            } else if ((window.sidebar && (navigator.userAgent.toLowerCase().indexOf('firefox') < -1)) || (window.opera && window.print)) {
                // Firefox version &gt;= 23 and Opera Hotlist
                var $this = $(this);
                $this.attr('href', bookmarkURL);
                $this.attr('title', bookmarkTitle);
                $this.attr('rel', 'sidebar');
                $this.off(e);
                triggerDefault = true;
            } else if (window.external && ('AddFavorite' in window.external)) {
                // IE Favorite
                window.external.AddFavorite(bookmarkURL, bookmarkTitle);
            } else {
                // WebKit - Safari/Chrome
                alert((navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Cmd' : 'Ctrl') + '+D 를 이용해 이 페이지를 즐겨찾기에 추가할 수 있습니다.');
            }

            return triggerDefault;
        });
    });
    </script> 	

    <div id="hd_wrapper">
        <nav id="gnb">
            <div class="gnb_wrap">
                <div class="gnb_list">
                    <div id="logo">
                        <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_URL ?>/assets/images/user/yonsei-logo.svg" alt="<?php echo $config['cf_title']; ?>"></a>
                    </div>
                    <div id="gnb_logo">
                        <img src="<?php echo G5_URL ?>/assets/images/user/gnb-logo.svg" alt="<?php echo $config['cf_title']; ?>">
                    </div>
                    
                    <div class="menu-wrap ico_detect">
                        <ul id="gnb_1dul">
                            <?php
                            $sql = " select *
                                        from {$g5['menu_table']}
                                        where me_use = '1'
                                        and length(me_code) = '2'
                                        order by me_order, me_id ";
                            $result = sql_query($sql, false);
                            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                            $menu_datas = array();

                            for ($i=0; $row=sql_fetch_array($result); $i++) {
                                $menu_datas[$i] = $row;

                                $sql2 = " select *
                                            from {$g5['menu_table']}
                                            where me_use = '1'
                                            and length(me_code) = '4'
                                            and substring(me_code, 1, 2) = '{$row['me_code']}'
                                            order by me_order, me_id ";
                                $result2 = sql_query($sql2);
                                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                                    $menu_datas[$i]['sub'][$k] = $row2;
                                }

                            }

                            $i = 0;
                            foreach( $menu_datas as $row ){
                                if( empty($row) ) continue; 
                            ?>
                            <li class="gnb_1dli<?php if($row['me_code'] == $me_code_1)?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"> <span> <?php echo $row['me_name'] ?></span></a>
                                
                                <!-- 3번째 빼고 다 토글생성 -->
                                <?php if( $i !== 3)  { ?>
                                    <i class="ico-ani__toggle"></i>
                                <?php } ?>  
                                
                                <?php
                                $k = 0;
                                foreach( (array) $row['sub'] as $row2 ){

                                    if( empty($row2) ) continue; 

                                    if($k == 0)
                                    echo '<div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                                    ?>
                                    <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                                <?php
                                $k++;
                                }   //end foreach $row2

                                if($k > 0)
                                    echo '</ul>'.PHP_EOL;
                                ?>
                            </li>
                            <?php
                            $i++;
                        }   //end foreach $row
                        
                        if ($i == 0) {  ?>
                                <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                                <?php } ?>
                        </ul>

                        <div class="search">
                            <button type="submit" onclick="searchOpen()">
                                <i class="ico-search">
                                    <img src="<?php echo G5_URL ?>/assets/images/user/ico-search.svg">
                                </i>
                            </button>
                        </div>

                        <div class="hambur-wrap ico_detect active" id="nav-icon3">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="search-top" id="search-top">
                <div class="search-open">
                    <fieldset id="hd_sch">
                        <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                        <input type="hidden" name="sfl" value="wr_subject||wr_content">
                        <input type="hidden" name="sop" value="and">
                        <label for="sch_stx" class="sound_only">검색어 필수</label>
                        <div class="search-wrap">
                            <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                            <button type="submit" id="sch_submit" value="검색">
                                <i class="ico-search">
                                    <img src="<?php echo G5_URL ?>/assets/images/user/ico-search.svg">
                                </i><span class="sound_only">검색</span>
                            </button>
                        </div>
                        </form>

                        <script>
                        function fsearchbox_submit(f)
                        {
                            var stx = f.stx.value.trim();
                            if (stx.length < 2) {
                                alert("검색어는 두글자 이상 입력하십시오.");
                                f.stx.select();
                                f.stx.focus();
                                return false;
                            }

                            // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                            var cnt = 0;
                            for (var i = 0; i < stx.length; i++) {
                                if (stx.charAt(i) == ' ')
                                    cnt++;
                            }

                            if (cnt > 1) {
                                alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                                f.stx.select();
                                f.stx.focus();
                                return false;
                            }
                            f.stx.value = stx;

                            return true;
                        }
                        </script>

                    </fieldset>
                </div>
                <button class="search-cancel active" onclick="searchClose()">
                    <i class="ico-cancel">
                        <img src="<?php echo G5_URL ?>/assets/images/user/ico-cancel2.svg">
                    </i>
                </button>
            </div>
            <div class="search-bottom" id="search-bottom"></div>
            <script>
                $("#search-top").hide();
                $("#search-bottom").hide();
                function searchOpen() {
                    $("#search-top").show();
                    $("#search-bottom").show();
                    $("#searchBtn").hide();
                }

                function searchClose() {
                    $("#search-top").hide();
                    $("#search-bottom").hide();
                    $("#searchBtn").show();
                }
            </script>

            <div class="topMenu-bg"><p></p></div>
            
        </nav>
    </div>
</div>
<!-- } 상단 끝 -->


<hr>

<?php 
//SNB호출
// if (!defined("_INDEX_")) include_once(G5_PATH.'/snb.php');
?>  
    <div id="container">
    <?php if (defined("_INDEX_")) { ?>
		<div class="inner">
			
    <?php }?>