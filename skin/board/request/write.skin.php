<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sotong.form.css">', 0);

?>



<!-- jQuery Modal -->
<script src="<?php echo G5_JS_URL ?>/jquery.modal.min.js"></script>
<link rel="stylesheet" href="<?php echo G5_CSS_URL ?>/jquery.modal.min.css" />
<script src="<?php echo G5_JS_URL ?>/sotong.alert.js"></script>
<link rel="stylesheet" href="<?php echo G5_CSS_URL ?>/sotong.alert.css" />
<script type="text/javascript" src="<?php echo G5_JS_URL ?>/sotong.form.js"></script>
<script src="<?php echo G5_URL ?>/js/jquery.blockUI.js"></script>


<!-- 전송완료 모달창 -->
<?php if($_GET['check']=='complete'){ ?>
<div class="modal_submitCmp"></div><!-- 대상지정 -->
<script>

    $.unblockUI();
    $('.modal_submitCmp').load('<?php echo G5_URL ?>/modal/modal_submitCmp.php'); //호출
	$('.modal_submitCmp').modal({escapeClose: false, clickClose: false, showClose: false, closeExisting: false}); //모달실행

</script>
<?php } ?>


<section id="request" class="">
    
    <div class="request_wrap">

        <section id="bo_w">
            <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

            <!-- 게시물 작성/수정 시작 { -->
            <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
            <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
            <input type="hidden" name="w" value="<?php echo $w ?>">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">


            <section class="request sec1">
              <div class="video_bg">
                <video autoplay muted loop playsinline src="<?php echo $board_skin_url ?>/img/sec1_bg.mp4"></video>
              </div>
              <div class="gradi_bg"></div>
                        <div class="inner">
                          <div class="con1">
                            <h1>정확하고 꼼꼼한 응대로 <br class="br-m"> 최선을 다하겠습니다.</h1>
                            <p>
                              프로젝트의 시작은 파트너의 비즈니스에 대한 연구부터 시작합니다.
                              <br>
                              비즈니스에 대한 끊임없이 질문하며, 답을 찾아내는 과정에서 집중해야할 가치를 발굴합니다. 
                              <br>
                              그 가치에 아이디어를 더해 창의적이고 논리적인 전략을 기반으로 솔루션을 제공합니다.
                            </p>

                            <p class="pone_number">
                              언제든지 문의주세요 (070-4820-6437)
                            </p>
                          </div>

                        <div class="request_ca">
                            <div class="request_ca_title">진행하고자 하는 프로젝트의 내용을 알려주세요.</div>
                            
                            <ul>
                                <li>
                                    <input type="radio" name="ca_name" id="ca_name_2" value="UX·SW">
                                    <label for="ca_name_2">
                                        <div class="label_">
                                            <div class="request_ca_name">UXUI·SW</div>
                                            <div class="request_ca_txt">(WEB·APP 디자인 및 개발)</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="ca_name" id="ca_name_1" value="BX">
                                    <label for="ca_name_1">
                                        <div class="label_">
                                            <div class="request_ca_name">BX</div>
                                            <div class="request_ca_txt">(브랜딩·로고·캐릭터·편집 디자인)</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="ca_name" id="ca_name_3" value="CONTENTS·MEDIA">
                                    <label for="ca_name_3">
                                        <div class="label_">
                                            <div class="request_ca_name">CONTENTS<br class="br-m">& MEDIA</div>
                                            <div class="request_ca_txt">(SNS 운영·콘텐츠 제작·홍보 영상·모션 그래픽)</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" name="ca_name" id="ca_name_4" value="SOLUTION">
                                    <label for="ca_name_4">
                                        <div class="label_">
                                            <div class="request_ca_name">SOLUTION</div>
                                            <div class="request_ca_txt">(솔루션)</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </section>

                        <div class="request_form inner">

                            <ul class="other">
                                <!--kind of proejct{-->
                                <li>
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">01.</strong>
                                            <strong class="required">프로젝트 종류</strong>
                                            <span>(복수선택 가능)</span>
                                        </div>
                                        <div class="li_cont">
                                            <ul class="selectBtn">
                                            <input type="hidden" name="wr_1" id="wr_1">

                                                <!-- BX{ -->
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_1" class="kindof" value="네이밍" >
                                                    <label for="wr_1_1">
                                                        <div class="label_">
                                                            <div class="label_name">네이밍</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_2" class="kindof" value="CI·BI">
                                                    <label for="wr_1_2">
                                                        <div class="label_">
                                                            <div class="label_name">CI·BI <span>(로고)<span></div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_3" class="kindof" value="브랜딩">
                                                    <label for="wr_1_3">
                                                        <div class="label_">
                                                            <div class="label_name">브랜딩</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_4" class="kindof" value="캐릭터">
                                                    <label for="wr_1_4">
                                                        <div class="label_">
                                                            <div class="label_name">캐릭터</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_5" class="kindof" value="편집">
                                                    <label for="wr_1_5">
                                                        <div class="label_">
                                                            <div class="label_name">편집</div>
                                                            <div class="label_txt">(리플렛·브로슈어·포스터)</div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_6" class="kindof" value="패키지">
                                                    <label for="wr_1_6">
                                                        <div class="label_">
                                                            <div class="label_name">패키지</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_7" class="kindof" value="인쇄">
                                                    <label for="wr_1_7">
                                                        <div class="label_">
                                                            <div class="label_name">인쇄</div>
                                                            <div class="label_txt">(편집·패키지)</div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="bx">
                                                    <input type="checkbox" name="" id="wr_1_8" class="kindof" value="온라인 홍보물">
                                                    <label for="wr_1_8">
                                                        <div class="label_">
                                                            <div class="label_name">온라인 홍보물</div>
                                                            <div class="label_txt">(카드뉴스·뉴스레터)</div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <!-- }BX -->

                                                <!-- UXSW{ -->
                                                <li class="uxsw">
                                                    <input type="checkbox" name="" id="wr_1_9" class="kindof" value="WEB">
                                                    <label for="wr_1_9">
                                                        <div class="label_">
                                                            <div class="label_name">WEB</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="uxsw">
                                                    <input type="checkbox" name="" id="wr_1_10" class="kindof" value="APP(Android)">
                                                    <label for="wr_1_10">
                                                        <div class="label_">
                                                            <div class="label_name">APP <span>(Android)</span></div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="uxsw">
                                                    <input type="checkbox" name="" id="wr_1_11" class="kindof" value="APP(iOS)">
                                                    <label for="wr_1_11">
                                                        <div class="label_">
                                                            <div class="label_name">APP <span>(iOS)</span></div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="uxsw">
                                                    <input type="checkbox" name="" id="wr_1_12" class="kindof" value="SW">
                                                    <label for="wr_1_12">
                                                        <div class="label_">
                                                            <div class="label_name">SW</div>
                                                            <div class="label_txt">(ERP·CRM·MIS등 <br class="mo_only"> 관리시스템)</div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <!-- }UXSW -->

                                                <!-- CONTENTS & MEDIA{ -->
                                                    <li class="contents">
                                                    <input type="checkbox" name="" id="wr_1_13" class="kindof" value="온·오프라인 행사 운영">
                                                    <label for="wr_1_13">
                                                        <div class="label_">
                                                            <div class="label_name">온·오프라인 행사 운영</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="contents">
                                                    <input type="checkbox" name="" id="wr_1_14" class="kindof" value="모션 그래픽 영상">
                                                    <label for="wr_1_14">
                                                        <div class="label_">
                                                            <div class="label_name">모션 그래픽 영상</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="contents">
                                                    <input type="checkbox" name="" id="wr_1_15" class="kindof" value="실사 영상">
                                                    <label for="wr_1_15">
                                                        <div class="label_">
                                                            <div class="label_name">실사 영상</span></div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="contents">
                                                    <input type="checkbox" name="" id="wr_1_16" class="kindof" value="콘텐츠 개발 및 운영">
                                                    <label for="wr_1_16">
                                                        <div class="label_">
                                                            <div class="label_name">콘텐츠 개발 및 운영</div>
                                                            <div class="label_txt">(홈페이지·SNS·blog 등)</div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="contents">
                                                    <input type="checkbox" name="" id="wr_1_17" class="kindof" value="스케치 영상">
                                                    <label for="wr_1_17">
                                                        <div class="label_">
                                                            <div class="label_name">스케치 영상</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <!-- }UXSW -->

                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <!--}kind of proejct-->

                                <!--character of proejct{-->
                                <li>
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">02.</strong>
                                            <strong class="required">프로젝트 성격</strong>
                                        </div>
                                        <div class="li_cont">
                                            <ul class="selectBtn">
                                                <input type="hidden" name="wr_2" >
                                                <li>
                                                    <input type="radio" name="wr_2r" id="wr_2_1" class="charof" value="신규">
                                                    <label for="wr_2_1">
                                                        <div class="label_">
                                                            <div class="label_name">신규</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_2r" id="wr_2_2" class="charof" value="리뉴얼">
                                                    <label for="wr_2_2">
                                                        <div class="label_">
                                                            <div class="label_name">리뉴얼</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_2r" id="wr_2_3" class="charof" value="고도화">
                                                    <label for="wr_2_3">
                                                        <div class="label_">
                                                            <div class="label_name">고도화</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_2r" id="wr_2_4" class="charof" value="유지관리">
                                                    <label for="wr_2_4">
                                                        <div class="label_">
                                                            <div class="label_name">유지관리</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="mobile">
                                                    <input type="radio" name="wr_2r" id="wr_2_5" class="charof" value="기타" >
                                                    <label for="wr_2_5">
                                                        <div class="label_">
                                                            <div class="label_name">기타</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="etc_text">
                                                    <div class="sftext width-full height-60 ">
                                                        <input id="wr_2_6" name="" type="text" maxlength="100" placeholder="기타 사항을 입력해주세요." readonly>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                    <script>

                                        $('.charof').on('change', function(){
                                            var val = $('.charof:checked').val();
                                            if(val == '기타'){
                                                $('#wr_2_6').removeAttr('readonly').attr('required',true);
                                                val = $('#wr_2_6').val();
                                            }else{
                                                $('#wr_2_6').removeAttr('required').attr('readonly',true);
                                            }
                                            $('input[name=wr_2]').val(val);
                                        });
                                        $('#wr_2_6').on('keyup', function(){
                                            $('input[name=wr_2]').val($(this).val());
                                        });
                                    </script>

                                </li>
                                <!--}character of proejct-->

                                <!--period of proejct{-->
                                <li class="width-half">
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">03.</strong>
                                            <strong class="required">프로젝트 기간</strong>
                                        </div>
                                        <div class="li_cont">
                                            <div class="sfselect width-full height-60 radius-3">
                                                <select id="wr_3" name="wr_3">
                                                    <option value="" disabled="" selected="">기간을 선택해주세요.</option>
                                                    <option class="bx" value="1개월 이상 ~ 2개월 미만">1개월 이상 ~ 2개월 미만</option>
                                                    <option class="bx" value="2개월 이상 ~ 4개월 미만">2개월 이상 ~ 3개월 미만</option>
                                                    <option class="bx" value="5개월 이상">5개월 이상</option>
                                                    <option class="uxsw" value="2개월 이상 ~ 3개월 미만">3개월 이상 ~ 3개월 미만</option>
                                                    <option class="uxsw" value="3개월 이상 ~ 6개월 미만">3개월 이상 ~ 6개월 미만</option>
                                                    <option class="uxsw" value="6개월 이상 ~ 1년 미만">6개월 이상 ~ 1년 미만</option>
                                                    <option class="uxsw" value="1년 이상">1년 이상</option>
                                                    <option class="contents" value="1개월 이상 ~ 2개월 미만">1개월 이상 ~ 2개월 미만</option>
                                                    <option class="contents" value="2개월 이상 ~ 4개월 미만">2개월 이상 ~ 3개월 미만</option>
                                                    <option class="contents" value="5개월 이상">5개월 이상</option>
                                                    <option value="미정">미정</option>
                                                </select>
                                                <label for="wr_3" class="sound_only">기간을 선택해주세요.</label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--}period of proejct-->

                                <!--period of proejct{-->
                                <li class="width-half">
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">04.</strong>
                                            <strong class="required">프로젝트 예산</strong>
                                        </div>
                                        <div class="li_cont">
                                            <div class="sfselect width-full height-60 radius-3">
                                                <select id="wr_4" name="wr_4">
                                                    <option value="" disabled="" selected="">예산을 선택해주세요.</option>
                                                    <option class="bx" value="5백만원 미만">5백만원 미만</option>
                                                    <option class="bx" value="5백만원 이상 ~ 1천만원 미만">5백만원 이상 ~ 1천만원 미만</option>
                                                    <option class="bx" value="1천만원 이상 ~ 2천만원 미만">1천만원 이상 ~ 2천만원 미만</option>
                                                    <option class="bx" value="2천만원 이상 ~ 3천만원 미만">2천만원 이상 ~ 3천만원 미만</option>
                                                    <option class="bx" value="3천만원 이상">3천만원 이상</option>
                                                    <option class="uxsw" value="2천만원 미만">2천만원 미만</option>
                                                    <option class="uxsw" value="2천만원 이상 ~ 5천만원 미만">2천만원 이상~ 5천만원 미만</option>
                                                    <option class="uxsw" value="5천만원 이상 ~ 1억원 미만">5천만원 이상 ~ 1억원 미만</option>
                                                    <option class="uxsw" value="1억원 이상">1억원 이상</option>
                                                    <option class="contents" value="5백만원 미만">5백만원 미만</option>
                                                    <option class="contents" value="5백만원 이상 ~ 1천만원 미만">5백만원 이상 ~ 1천만원 미만</option>
                                                    <option class="contents" value="1천만원 이상 ~ 2천만원 미만">1천만원 이상 ~ 2천만원 미만</option>
                                                    <option class="contents" value="2천만원 이상 ~ 3천만원 미만">2천만원 이상 ~ 3천만원 미만</option>
                                                    <option class="contents" value="3천만원 이상">3천만원 이상</option>
                                                    <option value="미정">미정</option>
                                                </select>
                                                <label for="wr_4" class="sound_only">예산을 선택해주세요.</label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--}period of proejct-->


                                <!--basic info{-->
                                <li>
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">05.</strong>
                                            <strong class="">기본정보 </strong>
                                        </div>
                                        <div class="li_cont">
                                            <ul class="basicInfo">
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">회사명</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                                            <input id="wr_5" name="wr_5" type="text" maxlength="100" placeholder="회사명을 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">담당자명/직책</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                                            <input id="wr_name" name="wr_name" type="text" maxlength="100" placeholder="담당자명/직책을 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">이메일</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                                            <input id="wr_email" name="wr_email" type="text" maxlength="100" placeholder="이메일을 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">연락처</span></div>
                                                        <div class="sftel width-full height-60 radius-3">
                                                            <input id="wr_6" name="wr_6" type="tel" maxlength="13" placeholder="연락처를 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="">회사 홈페이지</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                            
                                                            <input id="wr_homepage" name="wr_homepage" type="url" maxlength="100" placeholder="회사 홈페이지를 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">프로젝트 내용</span></div>
                                                        <div class="sftext width-full height-250 radius-3">
                                                            <textarea id="wr_content" name="wr_content" maxlength="65536" placeholder="프로젝트 내용을 간략하게 입력해주세요."></textarea>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="">첨부 파일</span></div>
                                                        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                                                        <div class="sffile_wrap">
                                                            <div class="sffile sftext height-30">
                                                                <input class="sffile_txt" type="text" disabled="disabled" placeholder="파일을 첨부해주세요.">
                                                            </div>
                                                            <div class="sffile-upload sfbtn ico-plus">
                                                                <button type="button">
                                                                    <label class="sfbtn_wr" for="bf_file_<?php echo $i+1 ?>">
                                                                        첨부하기
                                                                        <!-- 실제 file input 값 -->
                                                                        <input class="upload" id="bf_file_<?php echo $i+1 ?>" name="bf_file[]" type="file" tabindex="-1">
                                                                    </label>
                                                                </button> 
                                                            </div>
                                                            
                                                        </div>
                                                        <?php } ?>
                                                        <script>
                                                        //input file
                                                        // 파일업로드
                                                            $('.upload').on('change',function(){
                                                                var fileValue = $(this).val().split("\\");
                                                                var fileName = fileValue[fileValue.length-1]; // 파일명
                                                                $(this).parents('.sffile-upload').siblings('.sffile').find('.sffile_txt').val(fileName);
                                                            });

                                                            //전화번호 하이픈(-)자동입력
                                                            $('.sftel input').on('blur keyup', function() { 
                                                                var $sftel = $(this).parent('.sftel');
                                                                if($sftel.find('input').length == 1){
                                                                    $(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
                                                                }
                                                            });
                                                            $('.sftel input').on('blur keyup', function() { 
                                                                var $sftel = $(this).parent('.sftel');
                                                                if($sftel.find('input').length == 1){
                                                                    $(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
                                                                }
                                                            });
                                                            $(function(){
                                                                $('input[type="url"]').on('blur', function(){
                                                                    var string = $(this).val();
                                                                    if (!string.match(/^https?:/) && string.length) {
                                                                        string = "https://" + string;
                                                                        $(this).val(string)
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                            
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!--}basic info-->

                                <!--etc{-->
                                <li>
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">06.</strong>
                                            <strong class="required check">
                                              <span>기타 </span>
                                              <span class="font-weight-r">(솔브잇을 어떻게 알게 되었나요?)</span>
                                            </strong>
                                        </div>
                                        <div class="li_cont">
                                            <ul class="selectBtn">
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_1" value="사이트검색">
                                                    <label for="wr_7_1">
                                                        <div class="label_">
                                                            <div class="label_name">사이트검색</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_2" value="지원사업">
                                                    <label for="wr_7_2">
                                                        <div class="label_">
                                                            <div class="label_name">지원사업</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_3" value="인스타그램">
                                                    <label for="wr_7_3">
                                                        <div class="label_">
                                                            <div class="label_name">인스타그램</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_4" value="페이스북">
                                                    <label for="wr_7_4">
                                                        <div class="label_">
                                                            <div class="label_name">페이스북</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_5" value="지인소개">
                                                    <label for="wr_7_5">
                                                        <div class="label_">
                                                            <div class="label_name">지인소개</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_6" value="오프라인">
                                                    <label for="wr_7_6">
                                                        <div class="label_">
                                                            <div class="label_name">오프라인</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_7" id="wr_7_7" value="기타">
                                                    <label for="wr_7_7">
                                                        <div class="label_">
                                                            <div class="label_name">기타</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>



                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <!--}etc-->


                                <li>
                                    <div class="li_">
                                        <div class="sfchkra size-3 color-2 border-radius-2 shape-fill">
                                            <input id="agreeCheck" name="agreeCheck" type="checkbox">
                                            <label for="agreeCheck"><i></i></label>
                                        </div>
                                        <div class="agree_txt"><a href="javascript:void(0)" onClick="modalPerInfo();">개인정보보호정책</a>에 동의합니다.</div>
                                        
                                    </div>
                                </li>


                            </ul>

                            <ul class="solution">
                                <!--basic info{-->
                                <li>
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">01.</strong>
                                            <strong class="">기본정보 </strong>
                                        </div>
                                        <div class="li_cont">
                                            <ul class="basicInfo">
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">회사명</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                                            <input id="wr_11" name="wr_11" type="text" maxlength="100" placeholder="회사명을 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">담당자명/직책</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                                            <input id="wr_12" name="wr_12" type="text" maxlength="100" placeholder="담당자명/직책을 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">이메일</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                                            <input id="wr_13" name="wr_13" type="text" maxlength="100" placeholder="이메일을 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="width-half">
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">연락처</span></div>
                                                        <div class="sftel width-full height-60 radius-3">
                                                            <input id="wr_14" name="wr_14" type="tel" maxlength="13" placeholder="연락처를 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="">회사 홈페이지</span></div>
                                                        <div class="sftext width-full height-60 radius-3">
                                            
                                                            <input id="wr_15" name="wr_15" type="url" maxlength="100" placeholder="회사 홈페이지를 입력해주세요." >
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="required">프로젝트 내용</span></div>
                                                        <div class="sftext width-full height-250 radius-3">
                                                            <textarea id="wr_16" name="wr_16" maxlength="65536" placeholder="프로젝트 내용을 간략하게 입력해주세요."></textarea>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="li_">
                                                        <div class="basicInfo_subj"><span class="">첨부 파일</span></div>
                                                        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                                                        <div class="sffile_wrap">
                                                            <div class="sffile sftext height-30">
                                                                <input class="sffile_txt" type="text" disabled="disabled" placeholder="파일을 첨부해주세요.">
                                                            </div>
                                                            <div class="sffile-upload sfbtn ico-plus">
                                                                <button type="button">
                                                                    <label class="sfbtn_wr" for="bf_file_<?php echo $i+1 ?>">
                                                                        첨부하기
                                                                        <!-- 실제 file input 값 -->
                                                                        <input class="upload" id="bf_file_<?php echo $i+1 ?>" name="bf_file[]" type="file" tabindex="-1">
                                                                    </label>
                                                                </button> 
                                                            </div>
                                                            
                                                        </div>
                                                        <?php } ?>
                                                        <script>
                                                        //input file
                                                        // 파일업로드
                                                            $('.upload').on('change',function(){
                                                                var fileValue = $(this).val().split("\\");
                                                                var fileName = fileValue[fileValue.length-1]; // 파일명
                                                                $(this).parents('.sffile-upload').siblings('.sffile').find('.sffile_txt').val(fileName);
                                                            });

                                                            //전화번호 하이픈(-)자동입력
                                                            $('.sftel input').on('blur keyup', function() { 
                                                                var $sftel = $(this).parent('.sftel');
                                                                if($sftel.find('input').length == 1){
                                                                    $(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
                                                                }
                                                            });
                                                            $('.sftel input').on('blur keyup', function() { 
                                                                var $sftel = $(this).parent('.sftel');
                                                                if($sftel.find('input').length == 1){
                                                                    $(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
                                                                }
                                                            });
                                                            $(function(){
                                                                $('input[type="url"]').on('blur', function(){
                                                                    var string = $(this).val();
                                                                    if (!string.match(/^https?:/) && string.length) {
                                                                        string = "https://" + string;
                                                                        $(this).val(string)
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                            
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!--}basic info-->

                                <!--etc{-->
                                <li>
                                    <div class="li_">
                                        <div class="li_title">
                                            <strong class="num">02.</strong>
                                            <strong class="required check">
                                              <span>기타 </span>
                                              <span class="font-weight-r">(솔브잇을 어떻게 알게 되었나요?)</span>
                                            </strong>
                                        </div>
                                        <div class="li_cont">
                                            <ul class="selectBtn">
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_1" value="사이트검색">
                                                    <label for="wr_17_1">
                                                        <div class="label_">
                                                            <div class="label_name">사이트검색</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_2" value="지원사업">
                                                    <label for="wr_17_2">
                                                        <div class="label_">
                                                            <div class="label_name">지원사업</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_3" value="인스타그램">
                                                    <label for="wr_17_3">
                                                        <div class="label_">
                                                            <div class="label_name">인스타그램</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_4" value="페이스북">
                                                    <label for="wr_17_4">
                                                        <div class="label_">
                                                            <div class="label_name">페이스북</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_5" value="지인소개">
                                                    <label for="wr_17_5">
                                                        <div class="label_">
                                                            <div class="label_name">지인소개</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_6" value="오프라인">
                                                    <label for="wr_17_6">
                                                        <div class="label_">
                                                            <div class="label_name">오프라인</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="wr_17" id="wr_17_7" value="기타">
                                                    <label for="wr_17_7">
                                                        <div class="label_">
                                                            <div class="label_name">기타</div>
                                                            <div class="label_txt"></div>
                                                        </div>
                                                    </label>
                                                </li>



                                            </ul>
                                        </div>
                                    </div>

                                </li>
                                <!--}etc-->


                                <li>
                                    <div class="li_">
                                        <div class="sfchkra size-3 color-2 border-radius-2 shape-fill">
                                            <input id="wr_18" name="wr_18" type="checkbox">
                                            <label for="wr_18"><i></i></label>
                                        </div>
                                        <div class="agree_txt"><a href="javascript:void(0)" onClick="modalPerInfo();">개인정보보호정책</a>에 동의합니다.</div>
                                        
                                    </div>
                                </li>


                            </ul>

                            <?php if ($is_use_captcha) { //자동등록방지  ?>
                            <div class="write_div captcha">
                                <?php echo $captcha_html ?>
                            </div>
                            <?php } ?>

                            <div class="btn_confirm write_div">
                                <div class="submitMsg"></div>
                                <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn" >프로젝트 문의하기</button>
                            </div>

                        </div>
                        


                        </form>

                        <script>

                        $(document).ready(function(){

                        $('input[name=ca_name]').on('change', function(){
                            var val = $('input[name=ca_name]:checked').val();
                            if(val == 'BX'){
                                $('.solution').removeClass('active');
                                $('.other').show();
                                $('.bx').show();
                                $('.uxsw').hide();
                                $('.contents').hide();
                                $('.solution').hide();
                            }else if(val == 'UX·SW'){
                                $('.solution').removeClass('active');
                                $('.other').show();
                                $('.bx').hide();
                                $('.uxsw').show();
                                $('.contents').hide();
                                $('.solution').hide();
                            } else if(val == 'CONTENTS·MEDIA') {
                                $('.solution').removeClass('active');
                                $('.other').show();
                                $('.contents').show();
                                $('.bx').hide();
                                $('.uxsw').hide();
                                $('.solution').hide();
                            } else {
                                $('.other').hide();
                                $('.contents').hide();
                                $('.bx').hide();
                                $('.uxsw').hide();
                                $('.solution').show();
                                $('.solution').addClass('active');
                            }
                        });
                        });

                        $('.kindof').on('change', function(){
                            var val = '';
                            var cnt = 0;
                            $('.kindof').each(function(){
                                if($(this).is(':checked')){
                                    if(cnt > 0){
                                        val += ', ';
                                    }
                                    val += $(this).val();
                                    cnt ++;
                                }
                            });
                            $('input[name=wr_1]').val(val);
                        });

                        function submitMsg(msg){
                            //var html = '<span class="required">'+msg+'</span>은(는) 필수입력입니다.';
                            $('.submitMsg').html(msg).css({'opacity': '1','display':'block'}).stop().delay(2000).animate({opacity: '0'}, 1000);
                        }

                        function fwrite_submit(f)
                        {

                            var $form = $(f);
                            
                            console.log($form.find('input[name=wr_1]').val());

                            if($('.solution').hasClass('active')){

                                if($form.find('input[name=wr_11]').val() == false){
                                    submitMsg('<span class="required">회사명</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_12]').val() == false){
                                    submitMsg('<span class="required">담당자명/직책</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_13]').val() == false){
                                    submitMsg('<span class="required">이메일</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_14]').val() == false){
                                    submitMsg('<span class="required">연락처</span>는 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('textarea[name=wr_16]').val() == false){
                                    submitMsg('<span class="required">프로젝트 내용</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_17]').is(":checked") == false){
                                    submitMsg('<span class="required">기타</span>는 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_18]').is(":checked") == false){
                                    submitMsg('개인정보보호정책에 동의해주세요');
                                    return false;
                                }

                            } else {

                                if($form.find('input[name=ca_name]').is(":checked") == false){
                                    alert('프로젝트 분야를 선택하세요');
                                    return false;
                                }

                                if($form.find('input[name=wr_1]').val() == false){
                                    submitMsg('<span class="required">프로젝트 종류</span>는 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_2]').val() == false){
                                    submitMsg('<span class="required">프로젝트 성격</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_3]').val() == false){
                                    submitMsg('<span class="required">프로젝트 기간</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_4]').val() == false){
                                    submitMsg('<span class="required">프로젝트 예산</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_5]').val() == false){
                                    submitMsg('<span class="required">회사명</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_name]').val() == false){
                                    submitMsg('<span class="required">담당자명/직책</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_email]').val() == false){
                                    submitMsg('<span class="required">이메일</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_6]').val() == false){
                                    submitMsg('<span class="required">연락처</span>는 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('textarea[name=wr_content]').val() == false){
                                    submitMsg('<span class="required">프로젝트 내용</span>은 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=wr_7]').is(":checked") == false){
                                    submitMsg('<span class="required">기타</span>는 필수입력입니다.');
                                    return false;
                                }

                                if($form.find('input[name=agreeCheck]').is(":checked") == false){
                                    submitMsg('개인정보보호정책에 동의해주세요');
                                    return false;
                                }

                            }

                            <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

                            document.getElementById("btn_submit").disabled = "disabled";

                            return $.blockUI({
                                message: '<img src="<?php echo G5_URL ?>/img/loading_img.gif"/>' 
                                , overlayCSS: { background: 'transparent'}
                                , css:{background: 'rgba(0,0,0,0.5)', border:'none', top: '0', left: '0', width: '100%', height: '100%', display: 'flex', alignItems: 'center', justifyContent: 'center'}
                            }, $('body').css('overflow', 'hidden'));
                            
                        }
                        </script>
                    </section>
                <div>
            </section>


<!-- } 게시물 작성/수정 끝 -->



<!-- 개인정보보호정책 모달창 -->
<div class="modal_perInfo"></div><!-- 대상지정 -->
<script>
	function modalPerInfo(){
        smoothscroll.destroy();
		$('.modal_perInfo').load('<?php echo G5_URL ?>/modal/modal_perInfo.php'); //호출
		$('.modal_perInfo').modal({escapeClose: false, clickClose: false, showClose: false, closeExisting: false}); //모달실행
	}
	//$.modal.close();  <-- 현재 모달만 닫는다
</script>


<script>

  let formEmle = document.querySelector('.request_form>ul');
  let formEmleTop = 0;

    $('.request_ca>ul>li').click(function(){
        $('.request_form').show();
        formEmleTop = formEmle.getBoundingClientRect().top + window.pageYOffset;

        $('html,body').stop().animate({scrollTop : formEmleTop - 120 }, 500);
    });
</script>

