<?php
$me_code = "800310";
include_once('./_common.php');
auth_check($auth[$sub_menu], "w");


 $view = get_code(2,$_GET['cd_code']);

 if($gubun == 1){
	$sql_common .= "pic='' ";	
	 $dest_file = G5_DATA_PATH.'/code/'.$view['pic'];
	 @unlink($dest_file);
 }else{
	$sql_common .= "pic2='' ";	
	$dest_file = G5_DATA_PATH.'/code/'.$view['pic2'];
	 @unlink($dest_file);
 }

	$sql = " update {$g5['cmncodedet']}  set  {$sql_common} where cd_code = '{$_GET['cd_code']}'";
	sql_query($sql);


	$qstr .= "&w=u&cd_code=".$_GET['cd_code'];
	goto_url('./code_form.php?'.$qstr);
?>