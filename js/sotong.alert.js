var _modalCount = 1;
function fnMsgModal(msg, title, afterOffEvent, afterOnEvent, ){
	var modalId = "msgModal" + _modalCount++;
	title = title == null ? "" : title;
	var html = '<div id="'+modalId+'" class="modal modal_alert" >';
		html += '	<div class="modal_txt">';
		html += '		<div class="modal_txt_">';
		html += '			<div class="modal_tit">'+title+'</div>';
		html += '			<div class="modal_cont">'+msg+'</div>';
		html += '		</div>';
		html += '	</div>';

		html += '		<div class="btn btn_black"><a href="javascript:void(0)" onclick="$.modal.close();" ><span>확인</span></a></div>';

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
	var html = '<div id="'+modalId+'" class="modal modal_alert" >';
		html += '	<div class="modal_txt">';
		html += '		<div class="modal_txt_">';
		html += '			<div class="modal_tit">'+title+'</div>';
		html += '			<div class="modal_cont">'+msg+'</div>';
		html += '		</div>';
		html += '	</div>';
		html += '	<div class="modal_btn_wrap">';
		html += '		<div class="btn btn_black"><a href="javascript:_confirmModalAfter(true)"><span>확인</span></a></div>';
		html += '		<div class="btn btn_gray"><a href="javascript:_confirmModalAfter(false)"><span>닫기</span></a></div>';
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

