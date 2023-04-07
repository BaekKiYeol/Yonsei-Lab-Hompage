<?php


if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$sql = " update $write_table
            set wr_11 = '$wr_11',
                 wr_12 = '$wr_12',
                 wr_13 = '$wr_13',
                 wr_14 = '$wr_14',
                 wr_15 = '$wr_15',
                 wr_16 = '$wr_16',
                 wr_17 = '$wr_17',
                 wr_18 = '$wr_18',
                 wr_19 = '$wr_19'
          where wr_id = '$wr_id' ";
sql_query($sql);

// ob_start();
// include_once ('./write_update_mail.php');
// $content = ob_get_contents();
// ob_end_clean();


// 관리자의 정보를 얻고
$super_admin = get_admin('super');
$group_admin = get_admin('group');
$board_admin = get_admin('board');

$array_email = array();
// 게시판관리자에게 보내는 메일
if ($config['cf_email_wr_board_admin']) $array_email[] = $board_admin['mb_email'];
// 게시판그룹관리자에게 보내는 메일
if ($config['cf_email_wr_group_admin']) $array_email[] = $group_admin['mb_email'];
// 최고관리자에게 보내는 메일
if ($config['cf_email_wr_super_admin']) $array_email[] = $super_admin['mb_email'];

// 원글게시자에게 보내는 메일
if ($config['cf_email_wr_write']) {
    if($w == '')
        $wr['wr_email'] = $wr_email;

    $array_email[] = $wr['wr_email'];
}

// 옵션에 메일받기가 체크되어 있고, 게시자의 메일이 있다면
if (strstr($wr['wr_option'], 'mail') && $wr['wr_email'])
    $array_email[] = $wr['wr_email'];

// 중복된 메일 주소는 제거
$unique_email = array_unique($array_email);
$unique_email = run_replace('write_update_mail_list', array_values($unique_email), $board, $wr_id);

/* echo $config['cf_email_wr_super_admin'];
print_r($unique_email);
exit; */

include_once(G5_LIB_PATH.'/sotong_sendmail_function.php');


//웍스 알림
$msg = 'solv-it request 문의가 등록되었습니다';

// fnSendWorksMsg('fmlee@sotongfive.kr',$msg,short_url_clean(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id.'&sp=2cbmf3b4h6ub2gchqf'));
// fnSendWorksMsg('jhwoo@sotongfive.kr',$msg,short_url_clean(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id.'&sp=2cbmf3b4h6ub2gchqf'));

$worksmail = array(
    'fmlee@sotongfive.kr',
    'jhwoo@sotongfive.kr',
    'so1209@sotongfive.kr',
    'woon@sotongfive.kr',
    'yoohoo@sotongfive.kr'
);

for ($i=0; $i<count($worksmail); $i++) {
    fnSendWorksMsg($worksmail[$i],$msg,short_url_clean(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id.'&sp=2cbmf3b4h6ub2gchqf'));

}

for ($i=0; $i<count($unique_email); $i++) {
    fnSotongSendMail($unique_email[$i], 'solv-it request('.$wr_5.')', $content);
}
//fnSotongSendMail('fmlee@sotongfive.kr', 'sotongfive request('.$wr_5.')', $content);


goto_url(short_url_clean(G5_HTTP_BBS_URL.'/write.php?bo_table='.$bo_table.'&check=complete'));



?>