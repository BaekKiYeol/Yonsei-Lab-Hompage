<?php
$me_code = "800310";
include_once('./_common.php');
auth_check($auth[$sub_menu], "w");

	// 디렉토리가 없다면 생성합니다. (퍼미션도 변경하구요.)
	@mkdir(G5_DATA_PATH.'/code/', G5_DIR_PERMISSION);
	@chmod(G5_DATA_PATH.'/code/', G5_DIR_PERMISSION);


$cd_name = clean_xss_tags($_POST['cd_name']);
$cd_value = clean_xss_tags($_POST['cd_value']);

if($w=="")
{
	$query ="SELECT  ifnull(max(cd_code),0)+1 as vCode,  ifnull(max(cd_alignno),0)+1 as nAlign FROM {$g5['cmncodedet']} WHERE cc_code = '{$_POST['opt_refcode']}'";
	$row = sql_fetch($query);

	if($row['vCode']>1){
		$vCode = $row['vCode'];
	}else{
		$vCode = $_POST['opt_refcode'].plus_zero($row['vCode']);	
	}

}else{
	$vCode = $_POST['cd_code'];
}


	// 파일저장

	$upload = array();


	for ($i=0; $i<count($_FILES['ps_file']['name']); $i++) {
		
		$upload[$i]['file']     = '';
		$upload[$i]['source']   = '';
		$upload[$i]['filesize'] = 0;
		$upload[$i]['image']    = array();
		$upload[$i]['image'][0] = '';
		$upload[$i]['image'][1] = '';
		$upload[$i]['image'][2] = '';

		$tmp_file  = $_FILES['ps_file']['tmp_name'][$i];
		$filesize  = $_FILES['ps_file']['size'][$i];
		$filename  = $_FILES['ps_file']['name'][$i];
		$filename  = get_safe_filename($filename);

		$file_path = pathinfo($filename);
		$ext = $file_path['extension'];

        if($i==0){
			$upload[$i]['file'] = $vCode.".".$ext;
		}else{
			$upload[$i]['file'] = "on_".$vCode.".".$ext;
		}
        $dest_file = G5_DATA_PATH.'/code/'.$upload[$i]['file'];

		 @move_uploaded_file($tmp_file, $dest_file);
		 @chmod($dest_file, G5_FILE_PERMISSION);

	}



if($w=="")
{
		
	    $sql = " insert into  {$g5['cmncodedet']} set ";
		$sql .= " cd_code='$vCode',";
		$sql .= " cd_name='{$cd_name}',";
		$sql .= " cd_alignno='{$row['nAlign']}',";		
		$sql .= " cc_code='{$_POST['opt_refcode']}', ";


	if($_FILES['ps_file']['tmp_name'][0]){
		$sql .= " pic='{$upload[0]['file']}',";
	}
	if($_FILES['ps_file']['tmp_name'][1]){
		$sql .= " pic2='{$upload[1]['file']}',";
	}
	if($_POST['rad_delyn']){
		$sql .= " cd_delyn = '{$_POST['rad_delyn']}',";	
	}	
		$sql .= " cd_value='{$cd_value}'";
		sql_query($sql);
		//echo $sql."<br>";


	if($_POST['add']=="Y"){
			$qstr = "opt_code=$_POST[opt_code]&opt_refcode=$_POST[opt_refcode]&add=$_POST[add]";
	}
	goto_url('./code_form.php?'.$qstr);


}

else if($w=="u")
{	
	
    $sql = " update {$g5['cmncodedet']}  set ";
    $sql .= "cd_name = '{$cd_name}',";
	$sql .= "cd_value = '{$cd_value}',";

	if($_FILES['ps_file']['tmp_name'][0]){
		$sql .= " pic='{$upload[0]['file']}',";
	}
	if($_FILES['ps_file']['tmp_name'][1]){
		$sql .= " pic2='{$upload[1]['file']}',";
	}
	
	$sql .= " cd_delyn = '{$_POST['rad_delyn']}'";
	$sql .= " where cd_code = '{$_POST['cd_code']}'";

		
		sql_query($sql);



		goto_url('./code_form.php?w=u&cd_code='.$_POST['cd_code'].'&'.$qstr);



}
?>