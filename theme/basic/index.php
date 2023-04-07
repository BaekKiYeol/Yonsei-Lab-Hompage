<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<!-- main 시작 -->
<div id="full-page">
    <section class="section1 section">
        
        <div class="section1-wrapper">
            <div class="slide-innerWrap">
                <div class="slide-inner">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo G5_URL ?>/assets/images/user/slide1.svg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo G5_URL ?>/assets/images/user/slide2.svg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo G5_URL ?>/assets/images/user/slide3.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="typing-demo">
                <p>Stem Cell and</p>
            </div>
            <div class="typing-demo2">
                <p>Biomaterial<br>Engineering Lab</p>
            </div>
            </div>
            <div class="text-inner">
                <h2>Promising technology in tissue engineering<br>
                    And regenerative medicine</h2>
                <p>Stem Cell and Biomaterial Engineering Lab (SCBEL) develops advanced biomedical platforms for tissue engineering and regenerative medicineto improve human health.</p>
            </div>
        </div>


        <div class="scroll-down">
            <i class="ico-down">
                <img src="<?php echo G5_URL ?>/assets/images/user/ico-down.svg" alt="">
            </i>
        </div>
        <div class="s1_arrow">
            <div class="scroll-arrow"></div>
            <div class="scroll-arrow"></div>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <section class="section2 section">
        <div class="section2-top">

        <div class="info">
            <h1>Information</h1>
        </div>
        <div class="link-list">
            <ul>
                <li>
                    <a href="" id="list1">
                        <div class="info-top">
                            <div class="title">Publications</div>
                            <div class="ico-detail" id="ico-detail"></div>
                        </div>
                        <div class="info-bottom">
                            <p>Professor Pubmed Profile</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" id="list2">
                        <div class="info-top">
                            <div class="title">Citations</div>
                            <div class="ico-detail" id="ico-detail2"></div>
                        </div>
                        <div class="info-bottom">
                            <p>Professor Google Scholar Profile</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" id="list3">
                        <div class="info-top">
                            <div class="title">H-Index</div>
                            <div class="ico-detail" id="ico-detail3"></div>
                        </div>
                        <div class="info-bottom">
                            <p>Professor Google Scholar Profile</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" id="list4">
                        <div class="info-top">
                            <div class="title">Company</div>
                            <div class="ico-detail" id="ico-detail4"></div>
                        </div>
                        <div class="info-bottom">
                            <p>Cellartgen</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        </div>

        <div class="section2-bottom">
            <div class="topics">Research Topics</div>
            <div class="topics-list">
                <ul>
                    <li>
                        <a href="" class="topic-img">
                            <img src="<?php echo G5_URL ?>/assets/images/user/topics1.svg" alt="">
                            <div class="topics-txt">보러가기</div>
                        </a>
                        <p>Tissue<br>Engineering</p>
                    </li>
                    <li>
                        <a href="" class="topic-img">
                            <img src="<?php echo G5_URL ?>/assets/images/user/topics2.svg" alt="">
                            <div class="topics-txt">보러가기</div>
                        </a>
                        <p>Stem Cell<br>& Reprogramming </p>
                    </li>
                    <li>
                        <a href="" class="topic-img">
                            <img src="<?php echo G5_URL ?>/assets/images/user/topics3.svg" alt="">
                            <div class="topics-txt">보러가기</div>
                        </a>
                        <p>Biomaterial<br>Science</p>
                    </li>
                    <li>
                        <a href="" class="topic-img">
                            <img src="<?php echo G5_URL ?>/assets/images/user/topics4.svg" alt="">
                            <div class="topics-txt">보러가기</div>
                        </a>
                        <p>Gene<br>& Drug Delivery</p>
                    </li>
                    <li>
                        <a href="" class="topic-img">
                            <img src="<?php echo G5_URL ?>/assets/images/user/topics5.svg" alt="">
                            <div class="topics-txt">보러가기</div>
                        </a>
                        <p>Organoid<br>& Organ-on-a-Chip</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section3 section" id="section3">
        <ul class="list-wrap">
            <li class="list">
                <div class="notice">
                <?php
                    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                    echo latest('theme/basic', 'notice', 8, 35);
                    ?>
                </div>
            </li>
            <li class="list">
                <div class="gallery">
                <?php
                    echo latest('theme/pic_block', 'gallery', 4, 25);
                ?>
                </div>
            </li>
        </ul>
    </section>

    <?php if(defined("_INDEX_")){ ?>
    <section class="section footer fp-auto-height">
    <footer>
       <div class="footer-inner">
                <ul>
                    <img src="<?php echo G5_URL ?>/assets/images/user/yonsei-logo.svg" alt="" class="footer-logo">
                    <li>
                        <div class="li1">
                            <div class="list"><a href="https://www.yonsei.ac.kr">연세대학교</a></div>
                            <div class="line"></div>
                            <div class="list"><a href="https://bio.yonsei.ac.kr">연세대학교 생명시스템대학</a></div>
                            <div class="line noline"></div>
                        </div>
                        <div class="li2">
                            <div class="list"><a href="https://biotech.yonsei.ac.kr">연세대학교 생명공학과</a></div>
                            <div class="line"></div>
                            <div class="list"><a href="https://ibs.yonsei.ac.kr">연세대학교 IBS</a></div>
                        </div>
                    </li>
                </ul>
                <div class="address">
                        <span class="b1">Stem Cell and Biomaterial Engineering Lab</span>
                        <span class="b2">Department of Biotechnology,<br> Yonsei University 50 Yonsei-ro,<br class="tiny"> Seodaemun-gu, Seoul 120-749, Korea.</span>
                        <div class="foot_">
                            <span>TEL : 82-2-2123-7743</span>
                            <div class="line line2"></div>
                            <span>FAX : 82-2-362-7265</span>
                        </div>
                        <span class="ft-copy">COPYRIGHT (C) 2011 yonsei university.<br> Stem cell and Biomaterial Engineering Lab.<br class="tiny"> All rights reserved</span>
                        <span class="ft-copy2">ⓒ Copyright  2023 Yonsei University.<br class="tiny"> All Rights Reserved.Website made by SOTONGFIVE</span>
                </div>

                <!-- <button type="button" onclick="btnTop()" class="btn-top"><img src="./assets/images/img_top.svg" alt="상단이동"></button> -->
            </div>

       </footer>
    </section>
    <?php }?>
</div>


<script>
    /* fullpage */
    // $('#full-page').fullpage({
    // responsiveWidth: 1200,
    // scrollingSpeed: 1300,
    // // scrollOverflow: true,
    // keyboardScrolling: true
    // });

    /* main typing effect */
    $('.typing-demo').css({
        "animation":"fadeLeft 2s .3s 1 cubic-bezier(0.24, 0.77, 0.32, 0.95) both",
        "animation-play-state":"running"
    })
    $('.typing-demo2').css({
        "opacity":"0"
    })
    setTimeout(function(){
        $('.typing-demo2').css({
            "animation":"fadeLeft 2s .3s 1 cubic-bezier(0.24, 0.77, 0.32, 0.95) both",
            "animation-play-state":"running",
            "opacity":"1"
        })
    },800);

    window.onload = function() {
        $('.link-list').css({"opacity":"0"})
        $('.topics-list').css({"opacity":"0"})
        $('.notice').css({"opacity":"0"})
        $('.gallery').css({"opacity":"0"})
    };  

    $(window).scroll(function(){
        if($(this).scrollTop()>400){
        $('.info').css({
                "animation":"fadeInDown 1.8s",
                "animation-play-state":"running"
            })
        }
        if($(this).scrollTop()>600){
            $('.link-list').css({
                "animation":"fadeLeft 2s .3s 1 cubic-bezier(0.24, 0.77, 0.32, 0.95) both",
                "animation-play-state":"running",
                "opacity":"1"
            })
        }
        if($(this).scrollTop()>1200){
        $('.topics').css({
                "animation":"fadeInDown 1.8s",
                "animation-play-state":"running"
            })
        }
        if($(this).scrollTop()>1400){
            $('.topics-list').css({
                "animation":"fadeInRight 2s",
                "animation-play-state":"running",
                "opacity":"1"
            })
        }
        if($(this).scrollTop()>2000){
            $('.notice').css({
                "animation":"fadeInLeft 1.5s",
                "animation-play-state":"running",
                "visibility":"visible",
                "opacity":"1"
            })
            $('.gallery').css({
                "animation":"fadeInRight 1.5s",
                "animation-play-state":"running",
                "visibility":"visible",
                "opacity":"1"
            })
        }
    });
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2800,
        disableOnInteraction: false,
    },
    speed: 1800,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
    });

    // hover시 이미지 변경
    $("#list1").mouseover(function(){
        $("#ico-detail").css("background-image", "url('assets/images/user/ico-detail2.svg')");
        $(".section2").css({"transition": "0.3s"})
    });
    $("#list1").mouseout(function(){
        $("#ico-detail").css("background-image", "url('assets/images/user/ico-detail.svg')");
    });
    $("#list2").mouseover(function(){
        $("#ico-detail2").css("background-image", "url('assets/images/user/ico-detail2.svg')");
        $(".section2").css({"transition": "0.3s"})
    });
    $("#list2").mouseout(function(){
        $("#ico-detail2").css("background-image", "url('assets/images/user/ico-detail.svg')");
    });
    $("#list3").mouseover(function(){
        $("#ico-detail3").css("background-image", "url('assets/images/user/ico-detail2.svg')");
        $(".section2").css({"transition": "0.3s"})
    });
    $("#list3").mouseout(function(){
        $("#ico-detail3").css("background-image", "url('assets/images/user/ico-detail.svg')");
    });
    $("#list4").mouseover(function(){
        $("#ico-detail4").css("background-image", "url('assets/images/user/ico-detail2.svg')");
        $(".section2").css({"transition": "0.3s"})
    });
    $("#list4").mouseout(function(){
        $("#ico-detail4").css("background-image", "url('assets/images/user/ico-detail.svg')");
    });
    
</script>

<script>
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
   let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    // We listen to the resize event
    window.addEventListener('resize', () => {
        // We execute the same script as before
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
</script>



<?php
include_once(G5_THEME_PATH.'/tail.php');