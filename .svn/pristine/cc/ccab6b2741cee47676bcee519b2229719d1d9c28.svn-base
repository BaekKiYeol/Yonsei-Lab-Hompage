<?php
$sub_menu = "800300";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

$g5['title'] = "코드 환경설정";

include_once(G5_ADMIN_PATH.'/admin.head.php');

// cmncode 테이블이 없을 경우 생성
if(!sql_query(" DESC {$g5['cmncode']} ", false)) {
    sql_query(" CREATE TABLE `{$g5['cmncode']}` (
	`cc_code` VARCHAR(3) NOT NULL,
	`cc_name` VARCHAR(100) NOT NULL,
	`cc_alignno` INT(4) NOT NULL,
	`cc_refcode` VARCHAR(3) NOT NULL,
	`cc_useyn` ENUM('Y','N') NOT NULL DEFAULT 'Y',
	`cc_content` VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY (`cc_code`)
) ", false);
}



$sql_common = " from {$g5['cmncode']} where (1)";
$sql_search = "  ";

if ($opt_code) {
    $sql_search .= " and ( ";
    $sql_search .= " cc_code='$opt_code' or cc_refcode='$opt_code' ";
    $sql_search .= " ) ";
}

$sql_order = " order by cc_code asc, cc_refcode asc ";

$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함
$list_num = $total_count - ($page - 1) * $rows;

$sql = " select * {$sql_common} {$sql_search} {$sql_order} limit {$from_record}, {$rows} ";
$result = sql_query($sql);

$colspan = 8;


?>

<form id="fsearch" name="fsearch" class="local_sch03 local_sch" method="get">
<div class="sch_last">
<SELECT NAME="opt_code" onchange="this.form.submit();"  style="width:180px;">
	<option value="">코드전체</option>
	<?php
	$strSql="Select * from {$g5['cmncode']}  where cc_refcode='' and cc_useyn='Y' order by cc_code asc, cc_refcode asc";
	$strResult=sql_query($strSql);
	while($arr=sql_fetch_array($strResult)){
	?>
		<option value="<?php echo $arr['cc_code']?>"  <?php echo get_selected($opt_code,$arr['cc_code']); ?>><?php echo $arr['cc_name']?> (<?php echo $arr['cc_code']?>)</option>
	<?php
	}
	?>
</select> 
					
</div>
</form>


<form name="fcodelist" id="fcodelist" action="./code_config_list_update.php" onsubmit="return fcodelist_submit(this);" method="post">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="<?php echo $token ?>">
<input type="hidden" name="opt_code" value="<?php echo $opt_code ?>">


<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <colgroup>
		<col width="50">
		<col width="50">
		<col width="150">
		<col width="300">
		<col width="120">
		<col width="100">
		<col width="*">
		<col width="150">
		<col width="100">
	</colgroup>
	<thead>
    <tr>
        <th scope="col">
			<label for="chkall" class="sound_only">게시판 전체</label>
            <input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
		</th>
		<th scope="col">순서</th>
		<th scope="col">구분</th>
		<th scope="col">항목명</th>
		<th scope="col">CODE</th>
		<th scope="col">사용유무</th>
		<th scope="col">비고</th>       
		<th scope="col">관리</th>     
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++) {

        $list[$i] = $row;
		$list[$i]['num'] = $list_num - $i;
		
		$bg = 'bg'.($i%2);

		
		$s_mod = '<a href="./code_config_form.php?'.$qstr.'&amp;w=u&amp;cc_code='.$row['cc_code'].'" class="btn_02 btn">수정</a>';
    ?>
    <tr class="<?php echo $bg; ?> <?php if($row['cd_delyn']=="N"){echo "del_txt";}?>">
         <td>
            <input type="checkbox" name="chk[]" value="<?php echo $i ?>" id="chk_<?php echo $i ?>">
        </td>
		<td>
					<input type="text" name="cc_alignno[<?php echo $i ?>]" value="<?=$row['cc_alignno']?>" class="frm_input "  style="text-align:center;font-weight:bold;">
					<input type="hidden" name="cc_code[<?php echo $i ?>]" value="<?=$row['cc_code']?>">
		</td>
		<td><?php if($row['cc_refcode'] ==""){echo "대분류";}?></td>
		<td style="text-align:left;padding-left:10px;"><?php echo $row['cc_name'] ?></td>
		<td><strong><?php echo $row['cc_code'] ?></strong></td>
		<td>
		<select name="cc_delyn[<?php echo $i ?>]">
		<option value="Y" <?php echo get_selected($row['cc_useyn'], 'Y'); ?>>사용
		<option value="N" <?php echo get_selected($row['cc_useyn'], 'N'); ?> style="background-color:#ff0000;">미사용
		</select>
		</td>
		<td><?php echo $row['cd_value'] ?></td>
		<td><?=$s_mod ?></td>
    </tr>

    <?php
    }
    if ($i == 0)
        echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 존재하지 않습니다.</td></tr>';
    ?>
    </tbody>
    </table>
</div>


<div class="btn_fixed_top">	
	<input type="submit" name="act_button" value="선택수정" onclick="document.pressed=this.value" class="btn_02 btn">
	<a href="./code_config_form.php" id="bo_add" class="btn_01 btn">코드환경 추가</a>
    
</div>

</form>


<script type="text/javascript">
<!--
		function fcodelist_submit(f)
{
    if (!is_checked("chk[]")) {
        alert(document.pressed+" 하실 항목을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택삭제") {
        if(!confirm("선택한 자료를 정말 삭제하시겠습니까?")) {
            return false;
        }
    }

   return true;
}

//-->
</script>

<?php

$qstr .= "&amp;page=";

$pagelist = get_paging($config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr");
echo $pagelist;


include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>