<?php

function fnSotongSendMail($receiver, $title, $message) {
	/* 예약 API 사용시 여기서부터 삭제후 이용 하시기 바랍니다. */
	$ch = curl_init();

	/* 여기서부터 수정해주시기 바랍니다. */

	$secretKey = "n8b72cbmf3b4h6ub2gchqfs9hl8q44"; //key 

	// 예약발송 정보 추가
	$sms_type = 'NORMAL'; // NORMAL - 즉시발송 / ONETIME - 1회예약 / WEEKLY - 매주정기예약 / MONTHLY - 매월정기예약
	$start_reserve_time = date('Y-m-d H:i:s'); //  발송하고자 하는 시간(시,분단위까지만 가능) (동일한 예약 시간으로는 200회 이상 API 호출을 할 수 없습니다.)
	$end_reserve_time = date('Y-m-d H:i:s'); //  발송이 끝나는 시간 1회 예약일 경우 $start_reserve_time = $end_reserve_time
	// WEEKLY | MONTHLY 일 경우에 시작 시간부터 끝나는 시간까지 발송되는 횟수 Ex) type = WEEKLY, start_reserve_time = '2017-05-17 13:00:00', end_reserve_time = '2017-05-24 13:00:00' 이면 remained_count = 2 로 되어야 합니다.
	$remained_count = 1;

	/* 여기까지 수정해주시기 바랍니다. */
	$message = str_replace(' ', ' ', $message);  //유니코드 공백문자 치환

	/* $postvars = '"secretKey":"'.$secretKey.'"';
	$postvars = $postvars.', "subject":"'.$title.'"';
	$postvars = $postvars.', "cont":"'.$message.'"';
	$postvars = $postvars.', "receiver":"'.$receiver.'"';
	$postvars = '{'.$postvars.'}';      //JSON 데이터 */
	$postvars = array('secretKey' => $secretKey, 'subject' => $title, 'cont' => $message, 'receiver' => $receiver);
	$url = "http://s5dev.synology.me:59981/user/mail/sendMail.do";         //URL

	//헤더정보
	$headers = array("cache-control: no-cache","content-type: application/json; charset=utf-8");

	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($postvars));
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
	curl_setopt($ch,CURLOPT_TIMEOUT, 20);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($ch);

	//curl 에러 확인
	/*if(curl_errno($ch)){
		echo 'Curl error: ' . curl_error($ch);
	}else{
		print_r($response);
	}*/
	
	// $jsonObj = json_decode($response);
	
	curl_close ($ch);
	
	
	/* if($jsonObj["result"] == "success") {
		return true;
	} else {
		return false;
	} */
}


function fnSendWorksMsg($targt,$message,$linkUrl) {

	$ch = curl_init();

	$message = str_replace(' ', ' ', $message);  //유니코드 공백문자 치환

    $postvars = array('targt' => $targt, 'msg' => $message, 'linkUrl' => $linkUrl);
	$url = "http://ssangttolu.iptime.org:8052/user/api/sendPushMsg.do";         //URL

	//헤더정보
	$headers = array("cache-control: no-cache","content-type: application/json; charset=utf-8");

	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($postvars));
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
	curl_setopt($ch,CURLOPT_TIMEOUT, 20);
	curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($ch);
	
	curl_close ($ch);
	
}


?>