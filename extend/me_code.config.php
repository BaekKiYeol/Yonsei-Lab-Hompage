<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
//ver190801

//echo _INDEX_;

//메뉴코드 설정
//메뉴url은 G5_URL+uri로 
if($bo_table){
$menu_url = "bo_table=".$bo_table;
}else if($co_id){
$menu_url = "co_id=".$co_id;
}else if($pa_id){
$menu_url = "pa_id=".$pa_id;
}else if($gr_id){
$menu_url = "gr_id=".$gr_id;

/*}else if($ca_id){
$menu_url = "ca_id=".$ca_id;*/
}else if((strrpos($_SERVER['REQUEST_URI'], "/shop/list") !== false) || (strrpos($_SERVER['REQUEST_URI'], "/shop/item") !== false)){
$menu_url = "ca_id=10";
}else{$menu_url = G5_URL.$_SERVER['REQUEST_URI'];
}



//$me = sql_fetch(" select * from {$g5['menu_table']} where me_use = '1' and me_link = '$menu_url' ");
//현재메뉴코드
//$me_code = $me[me_code]; 
//현재메뉴명
//$me_name = $me[me_name]; 
//$me_code_1 = substr($me[me_code],0,2);
//if(strlen($me[me_code]) == 4) $me_code_2 = substr($me[me_code],0,4);
//if(strlen($me[me_code]) == 6) $me_code_3 = substr($me[me_code],0,6);

//$sql = " select * from {$g5['menu_table']} where me_link like '%$menu_url%'";
$sql = " select * from {$g5['menu_table']} where INSTR(me_link,'$menu_url');";
$result = sql_query($sql, false);
 for ($i=0; $row=sql_fetch_array($result); $i++) {
	 
	//현재메뉴코드
	$me_code = $row['me_code']; 
	//현재메뉴명
	$me_name = $row['me_name']; 
	//현재주소
	$me_link = $row['me_link'];
	//사용여부
	$me_use = $row['me_use'];
	$me_code_1 = substr($row['me_code'],0,2);
	if(strlen($row['me_code']) == 4) $me_code_2 = substr($row['me_code'],0,4);


}

$me1 = sql_fetch(" select * from {$g5['menu_table']} where me_code = '$me_code_1' ");
$me_name_1=$me1['me_name'];//대분류명 구하기
$me_link_1=$me1['me_link'];//대분류url 구하기


$me2 = sql_fetch(" select * from {$g5['menu_table']} where me_code = '$me_code_2' ");
$me_name_2=$me2['me_name'];//중분류명 구하기
$me_link_2=$me2['me_link'];//중분류url 구하기



?>