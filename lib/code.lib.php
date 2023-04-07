<?php
//==============================================================================
// 코드 함수
//==============================================================================

function plus_zero($val){

	if($val < 10){ 		$str = "00000".$val; 	}
	elseif($val < 100){ 		$str = "0000".$val; 	}
	elseif($val < 1000){ 		$str = "000".$val; 	}
	elseif($val < 10000){ 		$str = "00".$val; 	}
	elseif($val < 100000){ 		$str = "0".$val; 	}
	elseif($val < 1000000){ 		$str = $val; 	}

	return $str;
}


function CodeName($gubun,$val){
	global $g5;

	if($gubun==1){
		$row = sql_fetch(" select cc_name as name  from  {$g5['cmncode']} where cc_code = '$val'");
	}else{
		$row = sql_fetch(" select cd_name as name  from  {$g5['cmncodedet']} where cd_code = '$val'");
	}
	$codename = $row['name'];
	
	return $codename;
}

// 코드 정보를 얻는다.
function get_code($gubun,$code, $fields='*'){
    global $g5;
    
	if($gubun==1){
		return sql_fetch(" select $fields from {$g5['cmncode']} where cc_code = TRIM('$code') ");
	}else{
		return sql_fetch(" select $fields from {$g5['cmncodedet']} where cd_code = TRIM('$code') ");
	}

	echo " select $fields from {$g5['cmncode']} where cc_code = TRIM('$code') ";

}


// 코드 셀렉트 
function selCodeList($val,$str,$gubun){

	 global $config;
     global $g5;

	$CodeList = "";
	$Query = "Select * From {$g5['cmncodedet']} where cc_code='$val' and cd_delyn='Y' order by cd_alignno asc";
	$result = sql_query($Query);


	for ($i=0; $row=sql_fetch_array($result); $i++) {

		 switch($gubun){
			
			 case "self":
				$CodeList .= "<option value='{$row['cd_name']}'  ".get_selected($row['cd_name'],$str)." >".$row['cd_name'];	
			break;

			case "value":
				$CodeList .= "<option value='{$row['cd_code']}'  ".get_selected($row['cd_code'],$str)." >".$row['cd_name'];		 			
			break;

			case "txt":
				$CodeList .= "<option value='{$row['cd_value']}'  ".get_selected($row['cd_value'],$str)." >".$row['cd_name'];	 
			break;

		 }	
	
	}

	return $CodeList;

}


// 코드 라디오 
function radioCodeList($val,$str,$gubun,$name,$cs_name,$required=false){

	 global $config;
     global $g5;

	if($required){	$required = "required"; }
	$CodeList = "";
	$Query = "Select * From {$g5['cmncodedet']} where cc_code='$val' and cd_delyn='Y' order by cd_alignno asc";
	$result = sql_query($Query);

	for ($i=0; $row=sql_fetch_array($result); $i++) {

		 switch($gubun){
			
			 case "self":
				 $CodeList .= "<input type='radio'  name='{$name}' value='{$row['cd_name']}' class='{$cs_name}' id='{$name}_{$row['cd_code']}' ".get_checked($row['cd_name'],$str)." {$required}><label for='{$name}_{$row['cd_code']}' >".$row['cd_name']."</label>";	 
			break;

			case "value":
				 $CodeList .= "<input type='radio'  name='{$name}' value='{$row['cd_code']}' class='{$cs_name}' id='{$name}_{$row['cd_code']}' ".get_checked($row['cd_code'],$str)." {$required}><label for='{$name}_{$row['cd_code']}' >".$row['cd_name']."</label>";	
			break;

			case "txt":
				 $CodeList .= "<input type='radio'  name='{$name}' value='{$row['cd_value']}' class='{$cs_name}' id='{$name}_{$row['cd_code']}' ".get_checked($row['cd_value'],$str)." {$required}><label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";		
			break;

		 }
	
	
	}

	return $CodeList;

}


// 코드 체크박스 

function checkCodeList($val,$str,$gubun,$name,$cs_name,$required=false){

	 global $config;
     global $g5;

	if($required){	$required = "required"; }
	$CodeList = "";
	$Query = "Select * From {$g5['cmncodedet']} where cc_code='$val' and cd_delyn='Y' order by cd_alignno asc";
	$result = sql_query($Query);
	for ($i=0; $row=sql_fetch_array($result); $i++) {
		
		 switch($gubun){
		
		 case "self":
			if (strpos($str,$row['cd_name']) !== false){
			$CodeList .= "<input type='checkbox' name='".$name."' value='".$row['cd_name']."' class='{$cs_name}' id='{$name}_{$row['cd_code']}' {$required} checked> <label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";
			}else{
			$CodeList .= "<input type='checkbox' name='".$name."' value='".$row['cd_name']."' class='{$cs_name}' id='{$name}_{$row['cd_code']}' {$required}> <label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";
			}
		break;

		case "value":
			if (strpos($str,$row['cd_code']) !== false){
			$CodeList .= "<input type='checkbox' name='".$name."' value='".$row['cd_code']."' class='{$cs_name}' id='{$name}_{$row['cd_code']}' {$required} checked> <label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";
			}else{
			$CodeList .= "<input type='checkbox' name='".$name."' value='".$row['cd_code']."' class='{$cs_name}' id='{$name}_{$row['cd_code']}' {$required}> <label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";
			}
		break;

		case "txt":
			if (strpos($str,$row['cd_value']) !== false){
			$CodeList .= "<input type='checkbox' name='".$name."' value='".$row['cd_value']."' class='{$cs_name}' id='{$name}_{$row['cd_code']}' {$required} checked> <label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";
			}else{
			$CodeList .= "<input type='checkbox' name='".$name."' value='".$row['cd_value']."' class='{$cs_name}' id='{$name}_{$row['cd_code']}' {$required}> <label for='{$name}_{$row['cd_code']}'>".$row['cd_name']."</label>";
			}
		break;

		 }
	}

	return $CodeList;

}



?>