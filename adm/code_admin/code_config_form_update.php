<?php
$me_code = "800300";
include_once('./_common.php');
auth_check($auth[$sub_menu], "w");

$cc_name = clean_xss_tags($_POST['cc_name']);
$cc_content = clean_xss_tags($_POST['cc_content']);

if($w=="")
{
	
	if($cc_refcode){
		$query ="SELECT  ifnull(max(cc_code),{$_POST['cc_refcode']})+1 as vCode,  ifnull(max(cc_alignno),0)+1 as nAlign FROM {$g5['cmncode']} WHERE cc_refcode = '{$_POST['cc_refcode']}'";
	}else{
		$query ="SELECT  ifnull(max(cc_code),0)+100 as vCode,  ifnull(max(cc_alignno),0)+1 as nAlign FROM {$g5['cmncode']} WHERE cc_refcode = ''";
	}

	$row = sql_fetch($query);
	$cc_code = $row['vCode'];
	$cc_alignno = $row['nAlign'];

	
	$sql = " insert into {$g5['cmncode']} set  ";
    $sql .= "cc_code = '{$cc_code}',";
	$sql .= "cc_name = '{$cc_name}',";
	$sql .= "cc_alignno = '{$cc_alignno}',";
	$sql .= "cc_refcode = '{$_POST['cc_refcode']}',	";			
if($_POST['cc_useyn']){
	$sql .= "cc_useyn = '{$_POST['cc_useyn']}',";
}
	$sql .= "cc_content = '{$cc_content}'    ";      
	sql_query($sql);



		if($_POST['add']=="Y"){
			$qstr = "cc_refcode=$_POST[cc_refcode]&add=$_POST[add]";
		}

		goto_url('./code_config_form.php?'.$qstr);

}
else if($w=="u")
{

	$sql = " update {$g5['cmncode']} set 
				cc_name = '{$cc_name}',
				cc_alignno = '{$cc_alignno}',
				cc_useyn = '{$cc_useyn}',
				cc_content = '{$cc_content}'          
                where cc_code='{$cc_code}'";
	sql_query($sql);

	goto_url('./code_config_list.php?'.$qstr);

}

?>