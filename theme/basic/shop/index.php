<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

include_once(G5_THEME_PATH.'/head.php');

?>

<!-- 메인이미지 시작 { -->
<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
<!-- } 메인이미지 끝 -->


        <?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
        <?php echo display_banner('왼쪽', 'boxbanner.skin.php'); ?>

            
        <!-- e: main-left -->
        <div class="main-right">
            <div class="main-visit">
                <?php echo visit(); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
            </div>
            <div class="main-bookmark">
                <h3 class="bookmark-tit">즐겨찾기</h3>
                <ul class="bookmark-list">
                    <li>
                        <a href="https://www.facebook.com/dgburc" class="btn" target="_blank">
                            <div class="bookmark-bg ico">
                                <i class="ico-facebook"></i>
                            </div>
                            페이스북
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/dgburc1" class="btn" target="_blank">
                            <div class="bookmark-bg  ico">
                                <i class="ico-instagram"></i>
                            </div>
                            인스타그램
                        </a>
                    </li>
                    <li>
                        <a href="https://blog.naver.com/dgburc1" class="btn" target="_blank">
                            <div class="bookmark-bg  ico">
                                <i class="ico-blog"></i>
                            </div>
                            블로그
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCl8vsFt3_LVZmoftF6-YfKg" class="btn" target="_blank">
                            <div class="bookmark-bg  ico">
                                <i class="ico-youtube"></i>
                            </div>
                            유튜브
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- e: main-top -->


    <div class="main-area">
        <div class="area-list">

            <div class="area-list__top">
                <div class="area-list__tit ico ico-right">북구 도시재생<i></i></div>
                <ul class="area-list__menu">
                    <li><a href="javascript:;">관음동</a></li>
                    <li><a href="javascript:;">복현 1동</a></li>
                    <li><a href="javascript:;">산격 1동</a></li>
                    <li><a href="javascript:;">산격 3동</a></li>
                    <li class="active"><a href="javascript:;">칠성동</a></li>
                    <li><a href="javascript:;">침산 1동</a></li>
                </ul>
            </div>

            <div class="area-cont__wrap">
                <div class="area-cont__list">
                    <div class="area-cont">
                        <div class="area-tit">
                            <p>도시재생 정보</p>
                            <h3>관음동</h3>
                            <div class="area-tit__img">
                                <img src="<?php echo G5_URL?>/assets/images/user/main/area-gwaneum.svg" alt="">
                            </div>
                        </div>
                        <div class="area-box1">
                            <div class="area-box__img">
                                <div class="img">
                                    <img src="<?php echo G5_URL?>/assets/images/user/main/area-img01.png" alt="">
                                </div> 
                            </div>
                            <div class="area-box__txt">
                                <h4>칠성동 도시활력 증진사업 (라 스타트 칠성 별별상상여ㆍ행)</h4>
                                <p><b>사업유형</b>도시활력증신사업</p>
                                <p><b>사업기간</b>2016년 ~ 2020년(5년간)</p>
                            </div>
                        </div>
                        <div class="area-box2">
                            <div class="area-img">
                                <ul>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img02.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img03.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img04.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img05.png" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="area-cont__list">
                    <div class="area-cont">
                        <div class="area-tit">
                            <p>도시재생 정보</p>
                            <h3>복현 1동</h3>
                            <div class="area-tit__img">
                                <img src="<?php echo G5_URL?>/assets/images/user/main/area-bokhyeon.svg" alt="">
                            </div>
                        </div>
                        <div class="area-box1">
                            <div class="area-box__img">
                                <div class="img">
                                    <img src="<?php echo G5_URL?>/assets/images/user/main/area-img01.png" alt="">
                                </div> 
                            </div>
                            <div class="area-box__txt">
                                <h4>칠성동 도시활력 증진사업 (라 스타트 칠성 별별상상여ㆍ행)</h4>
                                <p><b>사업유형</b>도시활력증신사업</p>
                                <p><b>사업기간</b>2016년 ~ 2020년(5년간)</p>
                            </div>
                        </div>
                        <div class="area-box2">
                            <div class="area-img">
                                <ul>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img02.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img03.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img04.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img05.png" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="area-cont__list">
                    <div class="area-cont">
                        <div class="area-tit">
                            <p>도시재생 정보</p>
                            <h3>산격 1동</h3>
                            <div class="area-tit__img">
                                <img src="<?php echo G5_URL?>/assets/images/user/main/area-sangyeok1.svg" alt="">
                            </div>
                        </div>
                        <div class="area-box1">
                            <div class="area-box__img">
                                <div class="img">
                                    <img src="<?php echo G5_URL?>/assets/images/user/main/area-img01.png" alt="">
                                </div> 
                            </div>
                            <div class="area-box__txt">
                                <h4>칠성동 도시활력 증진사업 (라 스타트 칠성 별별상상여ㆍ행)</h4>
                                <p><b>사업유형</b>도시활력증신사업</p>
                                <p><b>사업기간</b>2016년 ~ 2020년(5년간)</p>
                            </div>
                        </div>
                        <div class="area-box2">
                            <div class="area-img">
                                <ul>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img02.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img03.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img04.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img05.png" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="area-cont__list">
                    <div class="area-cont">
                        <div class="area-tit">
                            <p>도시재생 정보</p>
                            <h3>산격 3동</h3>
                            <div class="area-tit__img">
                                <img src="<?php echo G5_URL?>/assets/images/user/main/area-sangyeok3.svg" alt="">
                            </div>
                        </div>
                        <div class="area-box1">
                            <div class="area-box__img">
                                <div class="img">
                                    <img src="<?php echo G5_URL?>/assets/images/user/main/area-img01.png" alt="">
                                </div> 
                            </div>
                            <div class="area-box__txt">
                                <h4>칠성동 도시활력 증진사업 (라 스타트 칠성 별별상상여ㆍ행)</h4>
                                <p><b>사업유형</b>도시활력증신사업</p>
                                <p><b>사업기간</b>2016년 ~ 2020년(5년간)</p>
                            </div>
                        </div>
                        <div class="area-box2">
                            <div class="area-img">
                                <ul>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img02.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img03.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img04.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img05.png" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="area-cont__list active">
                    <div class="area-cont">
                        <div class="area-tit">
                            <p>도시재생 정보</p>
                            <h3>칠성동</h3>
                            <div class="area-tit__img">
                                <img src="<?php echo G5_URL?>/assets/images/user/main/area-chilseong.svg" alt="">
                            </div>
                        </div>
                        <div class="area-box1">
                            <div class="area-box__img">
                                <div class="img">
                                    <img src="<?php echo G5_URL?>/assets/images/user/main/area-img01.png" alt="">
                                </div> 
                            </div>
                            <div class="area-box__txt">
                                <h4>칠성동 도시활력 증진사업 (라 스타트 칠성 별별상상여ㆍ행)</h4>
                                <p><b>사업유형</b>도시활력증신사업</p>
                                <p><b>사업기간</b>2016년 ~ 2020년(5년간)</p>
                            </div>
                        </div>
                        <div class="area-box2">
                            <div class="area-img">
                                <ul>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img02.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img03.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img04.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img05.png" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="area-cont__list">
                    <div class="area-cont">
                        <div class="area-tit">
                            <p>도시재생 정보</p>
                            <h3>침산동</h3>
                            <div class="area-tit__img">
                                <img src="<?php echo G5_URL?>/assets/images/user/main/area-chimsan.svg" alt="">
                            </div>
                        </div>
                        <div class="area-box1">
                            <div class="area-box__img">
                                <div class="img">
                                    <img src="<?php echo G5_URL?>/assets/images/user/main/area-img01.png" alt="">
                                </div> 
                            </div>
                            <div class="area-box__txt">
                                <h4>칠성동 도시활력 증진사업 (라 스타트 칠성 별별상상여ㆍ행)</h4>
                                <p><b>사업유형</b>도시활력증신사업</p>
                                <p><b>사업기간</b>2016년 ~ 2020년(5년간)</p>
                            </div>
                        </div>
                        <div class="area-box2">
                            <div class="area-img">
                                <ul>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img02.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img03.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img04.png" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img">
                                            <img src="<?php echo G5_URL?>/assets/images/user/main/area-img05.png" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
        </div>
    </div>
    <!-- e: main-area -->

    <div class="main-board">
        <div class="board board-notice">
            <?php  
                echo latest('pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판 
            ?>
        </div>
        <div class="board board-calendar">
            <?php  
                echo latest('pic_list', 'calednar', 4, 23);		 
            ?>
        </div>
        <div class="board board-prShare">
            <?php  
                echo latest('pic_list', 'prShare', 4, 23);		
            ?>
        </div>
        <div class="board board-news">
            <?php  
                echo latest('pic_list', 'news', 4, 23);		 
            ?>
        </div>
    </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');