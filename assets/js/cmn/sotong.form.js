var _modalCount = 1;
function fnMsgModal(msg, title, afterOffEvent, afterOnEvent){
	var modalId = "msgModal" + _modalCount++;
	title = title == null ? "" : title;
	var html = '<div id="'+modalId+'" class="modal modal-alert" >';
		html += '	<div class="modal-txt">';
		html += '		<h2 class="modal-txt__tit">'+title+'</h2>';
		html += '		<div class="modal-txt__cont">'+msg+'</div>';
		html += '	</div>';

		html += '	<div class="modal__btn"><button type="button" class="btn btn-submit" onclick="$.modal.close();" >확인</button></div>';
		html += '</div>';
	$('body').append(html);
	
	$('#' + modalId).on($.modal.AFTER_CLOSE, function(event, modal) {
		$('#' + modalId).off($.modal.OPEN);
		$('#' + modalId).off($.modal.AFTER_CLOSE);
		
		if (afterOffEvent != null && afterOffEvent != undefined) {
			afterOffEvent(event, modal);
		}
	});
	
	$('#' + modalId).on($.modal.OPEN, function(event, modal) {
		$('#' + modalId).find("#immClose").focus();
		
		if (afterOnEvent != null && afterOnEvent != undefined) {
			afterOnEvent(event, modal);
		}
	});
	
	$('#' + modalId).modal({escapeClose: false, clickClose: false, showClose: false});
}

var _confirmResult = false;
function _confirmModalAfter(result) {
	_confirmResult = result;
	$.modal.close();
}

function confirmMsgModal(msg, title, eventFnc){
	var modalId = "msgModal" + _modalCount++;
	title = title == null ? "" : title;
	var html = '<div id="'+modalId+'" class="modal" >';
		html += '	<div class="modal-txt">';
    html += '			<h2 class="modal-txt__tit">'+title+'</h2>';
    html += '			<div class="modal-txt__cont">'+msg+'</div>';
		html += '	</div>';

		html += '	<div class="modal__btn btn-2ea">';
		html += '		<a href="javascript:_confirmModalAfter(true)" class="btn btn-submit">확인</a>';
		html += '		<button type="button" onclick="_confirmModalAfter(false)" class="btn gray02">닫기</button>';
		html += '	</div>';
		html += '</div>';
	$('body').append(html);
	
	$('#' + modalId).on($.modal.AFTER_CLOSE, function(event, modal) {
		$('#' + modalId).off($.modal.AFTER_CLOSE);
		
		if (eventFnc != null && eventFnc != undefined) {
			eventFnc(_confirmResult);
		}
	});
	
	$('#' + modalId).modal({escapeClose: false, clickClose: false, showClose: false});
}





function isMobile(){
    var UserAgent = navigator.userAgent;
        if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null){
            return true;
        }else{
            return false;
        }
    }
    if(isMobile()){
        console.log('device_check : mobile');
    }else{
        console.log('device_check : pc');
    }

/********* sfemail{ ********/

function CheckEmail(f){
    //f = input[type=mail]
    var $parent = $(f).parent();
    //console.log('parent :'+ $parent);
    if(CheckEmailStr($(f).val())){
        $parent.next('.infoText').remove();
        //console.log('true');
    }else{
        if($parent.next('.infoText').length < 1){
            $parent.after('<div class="infoText">이메일 형식이 아닙니다</div>');
            //console.log('false');
        }
    }
}

function CheckEmailStr(str){                                                 
    var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
    if(!reg_email.test(str)) {                            
        return false;         
    } else {                       
        return true;         
    }                            
}

/********* }sfemail ********/


/********* sftext:date{ ********/

//useage #1 javascript initialization
//모바일일떄 브라우저 ui 사용
//datepicker는 예시임, 다른 플러그인 써도 무방함
// $(function(){
//     if(isMobile()){
//         //useage #1 
//         $('#datepick').attr('type','date');
        
//         //useage #2
//         $('.datepicker-here').attr('type','date');
//         var myDatepicker = $('.datepicker-here').datepicker().data('datepicker');
//         myDatepicker.destroy();



//         //mobile에서 placeholder 문제
//         $('input').focusin(function(){
//             $(this).siblings('.likePlaceholder').hide();
//         }).focusout(function(){
//             if($(this).val() == ''){
//                 $(this).siblings('.likePlaceholder').show();
//             }
//         });
//     }else{
//         $('#datepick').datepicker({language: 'kr'});
//         //mobile에서 placeholder 문제
//         $('.likePlaceholder').hide();
//     }
// });

//index 위치에 문자 치환
String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}

/********* }sftext:date ********/





/********* sfaddress{ ********/

//one address(주소)
//본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
function DaumPostcode() {
    new daum.Postcode({
        oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var roadAddr = data.roadAddress; // 도로명 주소 변수
            var extraRoadAddr = ''; // 참고 항목 변수

            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                extraRoadAddr += data.bname;
            }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if(data.buildingName !== '' && data.apartment === 'Y'){
                extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
            }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if(extraRoadAddr !== ''){
                extraRoadAddr = ' (' + extraRoadAddr + ')';
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('postcode').value = data.zonecode;
            document.getElementById("roadAddress").value = roadAddr;
            document.getElementById("jibunAddress").value = data.jibunAddress;
            
            // 참고항목 문자열이 있을 경우 해당 필드에 넣는다.
            if(roadAddr !== ''){
                document.getElementById("extraAddress").value = extraRoadAddr;
            } else {
                document.getElementById("extraAddress").value = '';
            }

            var guideTextBox = document.getElementById("guide");
            // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
            if(data.autoRoadAddress) {
                var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                guideTextBox.innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';
                guideTextBox.style.display = 'block';

            } else if(data.autoJibunAddress) {
                var expJibunAddr = data.autoJibunAddress;
                guideTextBox.innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';
                guideTextBox.style.display = 'block';
            } else {
                guideTextBox.innerHTML = '';
                guideTextBox.style.display = 'none';
            }
        }
    }).open();
}


//two address(도로명주소, 지번주소)
//본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
function DaumPostcode2() {
    new daum.Postcode({
        oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var addr = ''; // 주소 변수
            var extraAddr = ''; // 참고항목 변수

            //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                addr = data.roadAddress;
            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                addr = data.jibunAddress;
            }

            // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
            if(data.userSelectedType === 'R'){
                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if(data.buildingName !== '' && data.apartment === 'Y'){
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if(extraAddr !== ''){
                    extraAddr = ' (' + extraAddr + ')';
                }
                // 조합된 참고항목을 해당 필드에 넣는다.
                document.getElementById("extraAddress2").value = extraAddr;
            
            } else {
                document.getElementById("extraAddress2").value = '';
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('postcode2').value = data.zonecode;
            document.getElementById("address").value = addr;
            // 커서를 상세주소 필드로 이동한다.
            document.getElementById("detailAddress2").focus();
        }
    }).open();
}



$(function(){
    $('.alert__btn').on('click', function(){
        $(this).next('.alert').addClass('show');
    });

    $('.alert__close').on('click', function(){
        $(this).parent().parent().removeClass('show');
    });
});