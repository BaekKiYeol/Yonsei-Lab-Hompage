<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$page_skin_url.'/style.css">', 0);
?>
<!-- Content -->
<section id="ctt" class="ctt_<?php echo $pa_id; ?>">
  <div class="sec_1"> 
    <din class="inner">
      <div class="con_1">
        <h1><img src="<?php echo G5_IMG_URL?>/logo.svg" alt=""></h1>
        <div class="con__tit">모든 문제를 해결하는 기업고민 전문해결사</div>
        <div class="video_bg">
          <video autoplay muted loop playsinline src="<?php echo $page_skin_url ?>/img/company_bg.mp4"></video>
        </div>
        <div class="gradi_bg"></div>
      </div>
      <div class="con_2">
        <div class="con__img">
          <img src="<?php echo $page_skin_url ?>/img/bag.png" alt="">
        </div>
        <p class="con__desc">
          SW 개발·UXUI디자인·브랜드 디자인·콘텐츠 
          <br class="br-m">
          마케팅 & 영상 등 신규/기존 사업 운영 시 
          <br>
          필요한 전 범위의 
          <br class="br-m">
          애로사항을 해결할 수 있는 토탈 서비스 플랫폼입니다.
          <br><br class="br-m">
          기업 및 비즈니스 운영에 필요한 모든 고민들을 각 분야의 
          <br class="br-m">
          스폐셜리스트가 해결해 드리겠습니다.
        </p>
      </div>
    </din>
  </div>

  <div class="sec_wrap">
    <div class="sec_2">
      <div class="inner">
        <ul>
          <li>
            <figure>
              <img src="<?php echo $page_skin_url ?>/img/sec2_img1.png" alt="">
            </figure>
            <h2>SMART SOLUTION</h2>
            <p>
              필요한 서비스 를 간편하게
              <br>
              한 번에 해별하는 솔루션
            </p>
            <p>
              기획부터 디자인, 개발까지 파트너의 
              <br>
              성공적인 비즈니스를 위한 가장 효율적인 솔루션을 제시합니다.
              <br><br>
            </p>
          </li>

          <li>
            <figure>
              <img src="<?php echo $page_skin_url ?>/img/sec2_img2.png" alt="">
            </figure>
            <h2>CUSTOM SERVICE</h2>
            <p>
              고객 니즈에 맞춘
              <br>
              SW개발·디자인·마케팅 토탈 서비스
            </p>
            <p>
              파트너의 니즈를 탐구하기 위해 끊임없이 질문하고 고민합니다.
              <br> 
              지속적인 소통을 기반으로 집중해야할 가치를 발굴하고 
              <br>
              아이디어를 더한 맞춤형 서비스를 제공합니다. 
            </p>
          </li>

          <li>
            <figure>
              <img src="<?php echo $page_skin_url ?>/img/sec2_img3.png" alt="">
            </figure>
            <h2>SPECIALIST</h2>
            <p>
              고객의 고민에 따라
              <br>
              각 분야 전문가를 통한 서비스 제공
            </p>
            <p>
              유연한 사고와 적극적인 의사소통을 통해 파터너의
              <br>
              고민에 공감하며,BX·UX·SW 각 분야스페셜리스트를 통해
              <br>
              고민을 해결하고 새로운 가치를 창출합니다.
            </p>
          </li>
        </ul>
      </div>
    </div>

    <div class="border_wrap">
      <ul>
        <li class="dorder_column"></li>
        <li class="dorder_column"></li>
        <li class="dorder_column"></li>
      </ul>
    </div>
  </div>

  <section class="sec_3">
    <div class="inner">
      <h1 class="sec_tit">PARTNER COMPANY</h1>
      <h1 class="sec_sub-tit">파트너사</h1>
      
      <ul class="sec_con">

        <li class="card--partner">
            <figure class="card--partner__img">
              <img src="<?php echo $page_skin_url ?>/img/sec3_img1.svg"" alt="">
            </figure>

            <div class="card--partner__tit">
              <div class="btn-partner puple">소통파이브</div>
            </div>

            <div class="card--partner__desc">
              <p>
                소통파이브는 클라이언트의 성장을 위해 공감하며,
                <br><br class="br-m">
                브랜드의 가치와 솔루션을 
                <br class="br-m">
                함께 소통하고 디자인합니다.
              </p>
              <p>
                사업 전반의 기획에서부터 전문 디자인 및
                <br><br class="br-m">
                소프트웨어 개발, 콘텐츠 개발을 담당합니다.
              </p>
            </div>

            <ul class="card--partner__category">
              <li>WEB</li>
              <li>Uxui</li>
              <li>BX</li>
              <li>CONTENTS</li>
            </ul>
        </li>

        <li class="card--partner">
            <figure class="card--partner__img">
              <img src="<?php echo $page_skin_url ?>/img/sec3_img2.svg"" alt="">
            </figure>

            <div class="card--partner__tit">
              <div class="btn-partner green">민트소프트</div>
            </div>

            <div class="card--partner__desc">
              <p>
                민트소프트는 모바일 앱 및 솔루션 등 
                <br class="br-m">
                개발 전반의 분야를
                <br><br class="br-m">
                수행하는 전문 개발사입니다.
              </p>
              <p>
                하이브리드 웹앱, 크로스플랫폼, 네이티브앱 등을
                <br><br class="br-m">
                전문적으로 개발하고 있습니다.
              </p>
            </div>

            <ul class="card--partner__category">
              <li>app</li>
              <li>SOLUTION</li>
            </ul>
        </li>

        <li class="card--partner">
            <div class="card--partner__tit">
              <div class="btn-partner blue">주식회사 윔</div>
            </div>

            <div class="card--partner__desc">
              <p>
                윔은 상상을 현실로 만드는 소프트웨어 기업으로,
                <br><br class="br-m">
                클라이언트의 상상을 구체화하여 
                <br class="br-m">
                제품과 서비스로 탈바꿈시킵니다.
              </p>
              <p>
                인공지능, 모바일 어플리케이션, 웹 서비스 등
                <br><br class="br-m">
                각 분야 전문가들이 맞춤형 서비스를 제공합니다.
              </p>
            </div>

            <ul class="card--partner__category">
              <li>AI</li>
              <li>APP</li>
              <li>WEB</li>
            </ul>
        </li>

        <li class="card--partner">
            <div class="card--partner__tit">
              <div class="btn-partner dip-blue">퀘스</div>
            </div>

            <div class="card--partner__desc">
              <p>
                퀘스는 보안 기술을 기반으로 플랫폼을 만들고 
                <br class="br-m">
                서비스하는
                <br>
                사용자 중심 
                <br class="br-m">
                고급 소프트웨어 개발 전문기업입니다.
              </p>
              <p>
                모바일 신분증, 온라인 투표 시스템 등
                <br>
                독자적인 보안
                <br class="br-m">
                기술을 바탕으로 미래지향적인 솔루션을 제공합니다.
              </p>
            </div>

            <ul class="card--partner__category">
              <li>SECURITY SOLUTION</li>
            </ul>
        </li>


      </ul>
  </section>
</section>