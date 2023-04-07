<?php
$sub_menu = "800310";
include_once("./_common.php");


auth_check($auth[$sub_menu], "w");

if (!count($_POST['chk'])) {
    alert($_POST['act_button']." 하실 항목을 하나 이상 체크하세요.");
}


if ($_POST['act_button'] == "선택수정") {

    auth_check($auth[$sub_menu], 'w');

    for ($i=0; $i<count($_POST['chk']); $i++) {

        // 실제 번호를 넘김
        $k = $_POST['chk'][$i];


        $sql = " update g5_cmncodedet
                    set cd_alignno               = '".sql_real_escape_string($_POST['cd_alignno'][$k])."',
                        cd_delyn            = '".sql_real_escape_string($_POST['cd_delyn'][$k])."'
                  where cd_code            = '".sql_real_escape_string($_POST['cd_code'][$k])."' ";

        sql_query($sql);
    }

} 

$qstr .= "opt_code=$_POST[opt_code]&opt_refcode=$_POST[opt_refcode]";

goto_url('./code_list.php?'.$qstr);
?>