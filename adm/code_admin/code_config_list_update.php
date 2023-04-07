<?php
$me_code = "800300";
include_once('./_common.php');
auth_check($auth[$sub_menu], "w");


if (!count($_POST['chk'])) {
    alert($_POST['act_button']." 하실 항목을 하나 이상 체크하세요.");
}

check_admin_token();


if ($_POST['act_button'] == "선택수정") {


    for ($i=0; $i<count($_POST['chk']); $i++) {

        // 실제 번호를 넘김
        $k = $_POST['chk'][$i];


        $sql = " update {$g5['cmncode']}
                    set cc_alignno               = '".sql_real_escape_string($_POST['cc_alignno'][$k])."',
                        cc_useyn            = '".sql_real_escape_string($_POST['cc_delyn'][$k])."'
                  where cc_code            = '".sql_real_escape_string($_POST['cc_code'][$k])."' ";

        sql_query($sql);
    }

} 

$qstr .= "opt_code=$_POST[opt_code]";

goto_url('./code_config_list.php?'.$qstr);

?>