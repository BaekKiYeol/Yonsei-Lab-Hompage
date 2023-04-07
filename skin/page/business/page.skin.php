<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$page_skin_url.'/style.css">', 0);
?>

<!-- Content -->
<section id="ctt" class="ctt_<?php echo $pa_id; ?>">
  <div class="sec_1"> 
    <div class="con_1">
      <div class="con__tit">
        <span>“</span>
        <br><br class="br-m">
        새로운 도전을 하는
        <br><br class="br-m">
        당신의 TF팀이 되어 드립니다.
        <br><br class="br-m">
        <span>”</span>
      </div>
      <div class="video_bg">
        <video autoplay muted loop playsinline src="<?php echo $page_skin_url ?>/img/business_bg.mp4"></video>
      </div>
      <div class="gradi_bg"></div>
    </div>
    <div class="con_2">
      <div class="con__img">
        <img src="<?php echo $page_skin_url ?>/img/pone.png" alt="">
      </div>
      <p class="con__desc">
        프로젝트의 시작은 파트너의 비즈니스에 대한 연구부터 
        <br class="br-m">
        시작합니다.
        <br>
        비즈니스에 대한 끊임없이 질문하며, 
        <br class="br-m">
        답을 찾아내는 과정에서 집중해야할 가치를 발굴합니다.
        <br><br class="br-m">
        그 가치에 아이디어를 더해 창의적이고 논리적인 전략을 
        <br class="br-m">
        기반으로 솔루션을 제공합니다.
      </p>
    </div>
  </div>

  <div class="sec_tap">
    <div class="gradi_bg"></div>

    <ul class="tap_list">
      <li class="uxui_sw active">UXUI·SW</li>
      <li class="bx">BX</li>
      <li class="content_media">CONTENTS<br class="br-m">& MEDIA</li>
    </ul>
  
    <div class="tab_content">

      <div class="cont-area uxui">
        <div class="bg-wrap">
          <section class="con_1">
            <div class="inner">
              <div class="con_1__btns">
                <div class="con_1__btn fist active">UXUI 디자인</div>
                <span></span>
                <div class="con_1__btn second ">SW 개발</div>
              </div>
              <div class="con_1__left con__1__">
                <h1 class="con_1__left_tit">UXUI 디자인</h1>
                <p>UX, UI, GUI, MOTION</p>
                <ul>
                  <li>
                    <h2>UX 기획</h2>
                    <p>리서치, 유저플로우/와이어프레임</p>
                  </li>
    
                  <li>
                    <h2>스킬 / 툴</h2>
                    <p>
                      Adobe XD<br>
                      Adobe Illustrator<br>
                      Adobe Photoshop<br>
                      Adobe AfterEffect<br>
                      Zeplin
                    </p>
                  </li>
    
                  <li>
                    <h2>UXUI 컨설팅</h2>
                    <p>
                      UXUI 리터칭<br>
                      MVP 모델-프로토타입 
                    </p>
                  </li>
    
                  <li>
                    <h2>UI / GUI 디자인</h2>
                    <p>WEB, APP, System, Motion</p>
                  </li>
                </ul>
              </div>
  
              <span class="line_column"></span>
  
              <div class="con_1__right con__1__">
                <h1 class="con_1__right_tit">SW 개발</h1>
                <p>WEB, APP, ERP, CRM</p>
                <ul>
                  <li>
                    <h2>프론트,백엔드 개발</h2>
                  </li>
    
                  <li>
                    <h2>iOS / Android</h2>
                    <p>
                      웹앱, 크로스 플랫폼, 네이티브
                    </p>
                  </li>
    
                  <li>
                    <h2>윈도우 프로그래밍</h2>
                    <p>
                      C#
                    </p>
                  </li>
    
                  <li>
                    <h2>크롤링</h2>
                    <p>Nodes, Python</p>
                  </li>
  
                  <li>
                    <h2>서버</h2>
                    <p>AWS, Firebase, Cafe 24 등 클라우드서버 외 다양한 서버</p>
                  </li>
  
                  <li>
                    <h2>DB</h2>
                    <p>MySqL, Oracle, Dynamodb, Mongodb 등</p>
                  </li>
                </ul>
              </div>              
            </div>
          </section>
  
          <section class="con_2">
            <div class="inner">
              <h1 class="con_tit">
                UXUI·SW
                <br>
                <span>프로세스</span>
              </h1>
              <p class="con_sub_tit">
                “프로젝트 착수가 확정되면, 실무 메신저방 
                <br class="br-m">
                개설을 통해 실무 담당자가 투입 됩니다”
              </p>
              <div class="swiper-container--process1 ">
                <ul class="swiper-wrapper">
                  <li class="swiper-slide">최초 요구사항 확인</li>
                  <li class="swiper-slide">사전미팅<br>(대면/줌 인터뷰)</li>
                  <li class="swiper-slide">테크니컬 이슈/일정<br>& 리스크 체크</li>
                  <li class="swiper-slide">검토의견서 제공</li>
                  <li class="swiper-slide">최종미팅<br>(대면/줌 미팅)</li>
                  <li class="swiper-slide">최종 의사결정 및<br>프로젝트 착수</li>
                </ul>
              </div>
            </div>
          </section>
  
          <section class="con_3">
            <div class="inner">
              <h1 class="con_tit">
                UXUI·SW
                <br>
                <span>수행단계</span>
              </h1>
              <ul class="con_info">
    
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >01</span>
                    <h2 class="con_info__head__tit">기획/설계 단계</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      사이트맵 / 유저플로우 정립
                    </h3>
                    <p>
                      - 초기 기획 단계이며 클라이언트와 상세내용 협의, 수정사항을 반영
                      <br>
                      - 사이트맵 및 유저플로우 확인 작업 착수 + 와이어프레임 기획작업 착수 
                      <br>
                      ( 프로젝트 특성에 따라서 일부 과정이 생략될수 있습니다.)
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >02</span>
                    <h2 class="con_info__head__tit">UXUI 디자인 단계</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      레퍼런스 리서치 및 분석, 핵심 키워드 및 컨셉시안 도출
                    </h3>
                    <p>
                      - 컨셉 디자인시안 도출 전 필요한 레퍼런스 리서치 및 분석
                      <br>
                      - UIUX디자인 관련 클라이언트 니즈/차별점을 도출
                      <br>
                      - 핵심키워드 및 코어벨류 도출, 와이어프레임 기반 기획의도에 맞는 컨셉디자인 제안
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >03</span>
                    <h2 class="con_info__head__tit">퍼블리싱 단계</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      UI / GUI 디자인, 모션디자인 등 수행
                    </h3>
                    <p>
                      - 선택된 컨셉 시안 최종수정 및 디벨롭
                      <br>
                      - 선택 시안을 바탕으로 전체페이지 디자인 및 최종 디자인 보고서 제공
                      <br>
                      - 퍼블리싱 수행(일정에 따라 백엔드 동시 수행)
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >04</span>
                    <h2 class="con_info__head__tit">개발/테스트 검수 단계</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      개발 테스트 및 검수, 아웃풋 릴리즈 진행
                    </h3>
                    <p>
                      - 최종 디자인으로 프론트/백엔드 개발 수행
                      <br>
                      - 오픈전 통합테스트 수행 및 수정작업 진행
                      <br>
                      - 디자인가이드 파일 작업 및 제공 (향후 고객사에서 원활한 관리가 가능하도록)
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >05</span>
                    <h2 class="con_info__head__tit">
                      프로젝트 완료 이후 단계
                      <br>
                      (후속관리)
                    </h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      디자인 가이드 진행, 하자 및 유지보수
                    </h3>
                    <p>
                      - 프로젝트 완료 이후 자사에서는 전용 하자/유지보수 CMS를 운영하며,
                      <br>  
                      수정사항에 대한 응대를 수행하고 있습니다. ( 프로젝트 완료시 고객사별 별도 아이디 제공)
                      <br>
                      - 슬라이드 / 팝업배너 등 관리요소에 디자인 퀄리티를 유지하기 위해, 디자인 비전문가도 
                      <br>  
                      손쉽게 활용 가능한 별도의 디자인 가이드라인을 서비스로 제공해드립니다.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>

        <section class="con_4 inner">
          <?php echo latest_all2('101000001' ,'basic3', '2022,2021', 4, 100); ?>
        </section>
      </div>

      <div class="cont-area bx">
        <div class="bg-wrap">
          <section class="con_1">
            <div class="con_1__head">
              <h1 class="con_1__left_tit">BX 디자인</h1>
              <p>UX, UI, GUI, MOTION</p>
            </div>
            <div class="inner">
              <div class="con_1__left">
                <ul>
                  <li>
                    <h2>네이밍</h2>
                  </li>
    
                  <li>
                    <h2>CI, BI (로고)</h2>
                  </li>
    
                  <li>
                    <h2>풀브랜딩</h2>
                  </li>
    
                  <li>
                    <h2>캐릭터</h2>
                  </li>
                </ul>
              </div>
  
              <span class="line_column"></span>
  
              <div class="con_1__right">
                <ul>
                  <li>
                    <h2>편집디자인</h2>
                    <p>
                      리블렛, 브로슈어, 포스터 등
                    </p>
                  </li>
    
                  <li>
                    <h2>패키지 디자인</h2>
                  </li>
    
                  <li>
                    <h2>인쇄</h2>
                    <p>
                      편집, 패키지 등
                    </p>
                  </li>
    
                  <li>
                    <h2>온라인 홍보물</h2>
                    <p>카드뉴스, 뉴스레터 디자인</p>
                  </li>
                </ul>
              </div>              
            </div>
          </section>
  
          <section class="con_2">
            <div class="inner">
              <h1 class="con_tit">
                BX
                <br>
                <span>프로세스</span>
              </h1>
              <p class="con_sub_tit">
                “프로젝트 착수가 확정되면, 실무 메신저방 
                <br class="br-m">
                개설을 통해 실무 담당자가 투입 됩니다”
              </p>
              <div class="swiper-container--process2">
                <ul class="swiper-wrapper">
                  <li class="swiper-slide">최초 요구사항 확인</li>
                  <li class="swiper-slide">사전미팅<br>(대면/줌 인터뷰)</li>
                  <li class="swiper-slide">상세요청사항<br>및 일정 체크</li>
                  <li class="swiper-slide">최종 의사결정<br>및 프로젝트 착수</li>
                </ul>
              </div>
            </div>
          </section>
  
          <section class="con_3">
            <div class="inner">
              <h1 class="con_tit">
                BX Project
                <br>
                <span>수행단계</span>
              </h1>
              <ul class="con_info">
    
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >01</span>
                    <h2 class="con_info__head__tit">브랜드 개발전략 수립</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      기업분석·브랜드 전략 피라미드·브랜드 에센스 도출
                    </h3>
                    <p>
                      - 내·외부 시장 및 트렌드 분석
                      <br>
                      - 수혜기업 상세 분석
                      <br>
                      - 브랜드 전략 피라미드
                      <br>
                      - 브랜드 에센스 도출
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >02</span>
                    <h2 class="con_info__head__tit">브랜드 네임 개발</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      브랜드 네이밍
                    </h3>
                    <p>
                      - 경쟁사 네이밍 분서 및 개발 방향 설정
                      <br>
                      - 네이밍 개발: 키워드 도출/개발 가이드 설정/ 적합성 검토
                      <br>
                      - 최종안 선정 및 상표 등록 가능성 검토
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >03</span>
                    <h2 class="con_info__head__tit">브랜드 베이직 디자인 개발</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      브랜드 베이직 디자인 개발
                    </h3>
                    <p>
                      - 기본 디자인 선호도 조사
                      <br>
                      - 비주얼 모티브 개발
                      <br>
                      - 디자인 개발 및 선정
                      <br>
                      - 기본디자인 시스템 정립
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >04</span>
                    <h2 class="con_info__head__tit">브랜드 어플리케이션<br>디자인 개발</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      브랜드 어플리케이션 디자인 개발
                    </h3>
                    <p>
                      - 디자인 적용 매체 계획
                      <br>
                      - 비주얼 모티브 확대 및 적용
                      <br>
                      - 어플리케이션 디자인 및 가이드 개발
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >05</span>
                    <h2 class="con_info__head__tit">
                      브랜드 가이드북 개발
                    </h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      브랜드 가이드북 개발
                    </h3>
                    <p>
                      - 브랜드 가이북 아트웍
                      <br>
                      - 재질 및 제작사양 표기
                      <br>
                      - 디자인 사용 가이드 및 데이터 전달
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>

        <section class="con_4 inner">
          <?php echo latest_all2('101000002' ,'basic4', '2022,2021', 4, 100); ?>
        </section>
      </div>

      <div class="cont-area contents">
        <div class="bg-wrap">
          <section class="con_1">
            <div class="inner">
              <div class="con_1__btns">
                <div class="con_1__btn fist active">CONTENTS</div>
                <span></span>
                <div class="con_1__btn second ">MEDIA</div>
              </div>
  
              <div class="con_1__left con__1__">
                <h1 class="con_1__left_tit">CONTENTS</h1>
                <p>SNS, AR.VR,MAGAZINE</p>
                <ul>
                  <li>
                    <h2>SNS 운영 및 콘텐츠 제작</h2>
                  </li>
    
                  <li>
                    <h2>웹 매거진</h2>
                  </li>
    
                  <li>
                    <h2>기자단 및 체험단 운영</h2>
                  </li>
    
                  <li>
                    <h2>온·오프라인 행사 기획 및 운영</h2>
                  </li>
    
                  <li>
                    <h2>AR·VR</h2>
                  </li>
                </ul>
              </div>
  
              <span class="line_column"></span>
  
              <div class="con_1__right con__1__">
                <h1 class="con_1__right_tit">MEDIA</h1>
                <p>MOTION, 3D, ANIMATION</p>
                <ul>
                  <li>
                    <h2>모션그래픽</h2>
                  </li>
    
                  <li>
                    <h2>홍보영상</h2>
                  </li>
    
                  <li>
                    <h2>3D 모델링 및 애니메이션 제작</h2>
                  </li>
                </ul>
              </div>              
            </div>
          </section>
  
          <section class="con_2">
            <div class="inner">
              <h1 class="con_tit">
                CONTENTS·MEDIA
                <br><br class="br-m">
                <span>프로세스</span>
              </h1>
              <p class="con_sub_tit">
                “프로젝트 착수가 확정되면, 실무 메신저방 
                <br class="br-m">
                개설을 통해 실무 담당자가 투입 됩니다”
              </p>
              <div class="swiper-container--process3">
                <ul class="swiper-wrapper">
                  <li class="swiper-slide">최초 요구사항 확인</li>
                  <li class="swiper-slide">사전미팅<br>(대면/줌 인터뷰)</li>
                  <li class="swiper-slide">상세요청사항<br>및 일정 체크</li>
                  <li class="swiper-slide">최종 의사결정<br>및 프로젝트 착수</li>
                </ul>
            </div>
            </div>
          </section>
  
          <section class="con_3">
            <div class="inner">
              <h1 class="con_tit">
                CONTENTS·MEDIA
                <br>
                <span>수행단계</span>
              </h1>
              <ul class="con_info">
    
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >01</span>
                    <h2 class="con_info__head__tit">소재 발굴 및 레퍼런스 분석</h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      소재 발굴 및 레퍼런스 분석 
                    </h3>
                    <p>
                      - 콘텐츠 및 영상 트렌드 분석
                      <br>
                      - 소비자 니즈 및 키워드 분석
                      <br>
                      - 유사 레퍼런스 분석
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >02</span>
                    <h2 class="con_info__head__tit">
                      Contents & Media
                      <br>
                      개발 기획
                    </h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      Contents 
                      & Media 개발 기획
                    </h3>
                    <p>
                      - 콘텐츠 및 영상 개발 컨셉 설정
                      <br>
                      - 상세 스크립트 및 시나리오 작성
                      <br>
                      - 현장 취재 및 촬영 일정 계획
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >03</span>
                    <h2 class="con_info__head__tit">
                      Contents & Media
                      <br>
                      소스 제작
                    </h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      Contents & Media 소스 제작
                    </h3>
                    <p>
                      - 오프라인 취재 시, 현장 협조 요청
                      <br>
                      - 현장 취재 및 촬영
                      <br>
                      - 콘텐츠 개발을 위한 소스 제작
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >04</span>
                    <h2 class="con_info__head__tit">
                      Contents & Media
                      <br>
                      가공, 검수 및 수정
                    </h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      Contents & Media 가공, 검수 및 수정
                    </h3>
                    <p>
                      - 콘텐츠 초안 작성 및 피드백 요청
                      <br>
                      - 피드백 반영 완성 콘텐츠 제작
                      <br>
                      - 홍보 채널별 맞춤형 콘텐츠 제작
                    </p>
                  </div>
                </li>
                              
                <li>
                  <div class="con_info__head">
                    <span class="con_info__head__num" >05</span>
                    <h2 class="con_info__head__tit">
                      Contents & Media
                      <br>
                      발행
                    </h2>
                  </div>
                  <div class="con_info__desc">
                    <h3>
                      주요 업무
                      <br>
                      Contents & Media 발행
                    </h3>
                    <p>
                      - 홍보 채널별 SEO(검색최적화)를 통한 콘텐츠 배포
                      <br>
                      - SNS 및 블로그 광고 진행(블로그 체험단 마케팅 가능)
                      <br>
                      - 홍보 채널 결과 Report 제공
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>

        <section class="con_4 inner">
          <?php echo latest_all2('101000005' ,'basic5', '2022,2021', 4, 100); ?>
        </section>
      </div>

    </div>
  </div>

</section>


<script>



  $(window).load(function() {

    var ww = $(window).width();
    var swiper_process1 = undefined;
    var swiper_process2 = undefined;
    var swiper_process3 = undefined;
    var swiper_portfolio1 = undefined;
    var swiper_portfolio2 = undefined;
    var swiper_portfolio3 = undefined;

    function initSwiper() {
      if (ww < 650 && swiper_process1 == undefined && swiper_process2 == undefined  && swiper_process3 == undefined ) {
        swiper_process1 = new Swiper(".swiper-container--process1", {
          slidesPerView: 'auto',
          freeMode: true,
          spaceBetween: 20, 
        });

        swiper_process2 = new Swiper(".swiper-container--process2", {
          slidesPerView: 'auto',
          freeMode: true,
          spaceBetween: 20, 
        });

        swiper_process3 = new Swiper(".swiper-container--process3", {
          slidesPerView: 'auto',
          freeMode: true,
          spaceBetween: 20, 
        });

      } else if (ww >= 650 && swiper_process1 != undefined && swiper_process2 != undefined && swiper_process3 != undefined) {
        swiper_process1.destroy();
        swiper_process2.destroy();
        swiper_process3.destroy();
        swiper_process1 = undefined;
        swiper_process2 = undefined;
        swiper_process3 = undefined;
      }


      if (ww < 1250 && swiper_portfolio1 == undefined && swiper_portfolio2 == undefined && swiper_portfolio3 == undefined) {
        swiper_portfolio1 = new Swiper(".swiper-ccontainer--portfolio1", {
          slidesPerView: 'auto',
          freeMode: true,
          spaceBetween: 0, 
        });

        swiper_portfolio2 = new Swiper(".swiper-ccontainer--portfolio2", {
          slidesPerView: 'auto',
          freeMode: true,
          spaceBetween: 0, 
        });

        swiper_portfolio3 = new Swiper(".swiper-container--portfolio3", {
          slidesPerView: 'auto',
          freeMode: true,
          spaceBetween: 0, 
        });
        
      } else if (ww >= 1250 && swiper_portfolio1 != undefined && swiper_portfolio2 != undefined && swiper_portfolio3 != undefined) {
        swiper_portfolio1.destroy();
        swiper_portfolio2.destroy();
        swiper_portfolio3.destroy();
        swiper_portfolio1 = undefined;
        swiper_portfolio2 = undefined;
        swiper_portfolio3 = undefined;
      }
    }
    
    initSwiper();

    $(window).on('resize', function () {
      ww = $(window).width();

      initSwiper();
    });




    $('.tap_list li').each(function(idx){
      
    $(this).click(function(){

      $('.tap_list li').removeClass('active');
      $(this).addClass('active');
      
      $('.cont-area').css({'display':'none','opacity':'0'});
      $('.cont-area:eq(' + (idx) + ')').show().stop().animate({'opacity':'1'},800);


      if(window.innerWidth < 650 ) {
        
        $('.con_1__btn').removeClass('active');
        $('.con_1__btn:eq(' + (idx) + ')').addClass('active');
  
        $('.con__1__').css({'display':'none','opacity':'0'});
        $('.con__1__:eq(' + (idx) + ')').show().stop().animate({'opacity':'1'},800);

        $('.ctt_business .sec_tap .tab_content .cont-area .con_1').removeClass('right');

        $('.con__1__').css({'display':'none','opacity':'0'});
        $('.con__1__:eq(' + (idx) + ')').show().stop().animate({'opacity':'1'},800);

        }
        



        // 탭 클릭시 swiper-container--business 초기화 
        // 탭 클릭시 swiper_portfolio 초기화 
        if ($(this).hasClass('uxui_sw') && $('.swiper-container--process1').hasClass('swiper-container-horizontal')  && $('.swiper-ccontainer--portfolio1').hasClass('swiper-container-horizontal')) {
          swiper_process1.destroy();
          swiper_portfolio1.destroy();
          swiper_process1 = undefined;
          swiper_portfolio1 = undefined;

          swiper_process1 = new Swiper(".swiper-container--process1", {
            slidesPerView: 'auto',
            freeMode: true,
            spaceBetween: 20, 
          });
          swiper_portfolio1 = new Swiper(".swiper-ccontainer--portfolio1", {
            slidesPerView: 'auto',
            freeMode: true,
            spaceBetween: 0, 
          });
        } 

        if ($(this).hasClass('bx') && $('.swiper-container--process2').hasClass('swiper-container-horizontal')  && $('.swiper-ccontainer--portfolio2').hasClass('swiper-container-horizontal')) {
          swiper_process2.destroy();
          swiper_portfolio2.destroy();
          swiper_process2 = undefined;
          swiper_portfolio2 = undefined;

          swiper_process2 = new Swiper(".swiper-container--process2", {
            slidesPerView: 'auto',
            freeMode: true,
            spaceBetween: 20, 
          });
          swiper_portfolio2 = new Swiper(".swiper-ccontainer--portfolio2", {
            slidesPerView: 'auto',
            freeMode: true,
            spaceBetween: 0, 
          });
        } 

        if ( $(this).hasClass('content_media') && $('.swiper-container--process3').hasClass('swiper-container-horizontal')  && $('.swiper-container--portfolio3').hasClass('swiper-container-horizontal') ) {
          swiper_process3.destroy();
          swiper_process3 = undefined;
          swiper_portfolio3.destroy();
          swiper_portfolio3 = undefined;

          swiper_process3 = new Swiper(".swiper-container--process3", {
            slidesPerView: 'auto',
            freeMode: true,
            spaceBetween: 20, 
          });
          swiper_portfolio3 = new Swiper(".swiper-container--portfolio3", {
            slidesPerView: 'auto',
            freeMode: true,
            spaceBetween: 0, 
          });
        } 



      });
    });



    $('.con_1__btn').each(function(idx){

      $(this).click(function(){

        $('.con_1__btn').removeClass('active');
        $(this).addClass('active');
        
        $('.con__1__').css({'display':'none','opacity':'0'});
        $('.con__1__:eq(' + (idx) + ')').show().stop().animate({'opacity':'1'},800);

        // 백그라운드 포지션 - left
        if ($(this).hasClass('fist')) {
          $('.ctt_business .sec_tap .tab_content .cont-area .con_1').addClass('left');
        } else {
          $('.ctt_business .sec_tap .tab_content .cont-area .con_1').removeClass('left');
        }

        // 백그라운드 포지션 - right
        if ($(this).hasClass('second')) {
          $('.ctt_business .sec_tap .tab_content .cont-area .con_1').addClass('right');
        } else {
          $('.ctt_business .sec_tap .tab_content .cont-area .con_1').removeClass('right');
        }


        $(window).resize(function() {

          if(window.innerWidth > 650 ) {
            // 윈도우창 커지면 컨텐츠 보이하기 
            $('.con__1__').css({'display':'block','opacity':'1'});



          } else {
            $('.con__1__').css({'display':'none','opacity':'0'});

            $('.con__1__:eq(0)').show().stop().animate({'opacity':'1'},0);
            $('.con__1__:eq(2)').show().stop().animate({'opacity':'1'},0);

            $('.con_1__btn').removeClass('active');
            $('.con_1__btn:eq(0)').addClass('active');
            $('.con_1__btn:eq(2)').addClass('active');
            $('.ctt_business .sec_tap .tab_content .cont-area .con_1').removeClass('right');
            $('.ctt_business .sec_tap .tab_content .cont-area .con_1').addClass('left');



          }


        });
      });
    });











  });

</script>

<script src="<?php echo G5_URL ?>/js/jquery.blockUI.js"></script>

<script>
    // var btn = $('.basic_li');
    $('.basic_li').click(function(e){
        $.blockUI({
            message: '<img src="<?php echo G5_URL ?>/img/loading_img.gif"/>' 
            , overlayCSS: { background: 'transparent'}
            , css:{background: 'transparent', border:'none'}
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
</script>

<div class="modal-common"></div>