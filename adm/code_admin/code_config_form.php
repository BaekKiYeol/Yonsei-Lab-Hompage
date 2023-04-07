<?php
$sub_menu = "800300";
include_once("./_common.php");

auth_check($auth[$sub_menu], "w");

$g5['title'] = "코드환경 관리";

include_once(G5_ADMIN_PATH.'/admin.head.php');


if ($w == 'u'){
	 $view = get_code(1,$cc_code);

	$qstr .= "&opt_code={$cfg['cd_refcode']}&opt_refcode={$cfg['cc_code']}";

}

?>

<form name="fcodeform" id="fcodeform" action="./code_config_form_update.php" onsubmit="return fcodeform_submit(this)" method="post">
<input type="hidden" name="w" value="<?php echo $w ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="">
<?php if($w=="u"){?><input type="hidden" name="cc_code" value="<?php echo $cc_code ?>"><?php }?>


<section id="anc_bo_basic">
    <h2 class="h2_frm">코드환경 <?php if($w=="u"){echo "수정";}else{echo "추가";}?></h2>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption>코드 설정</caption>
        <colgroup>
            <col class="grid_4">
            <col>
            <col class="grid_3">
        </colgroup>
        <tbody>
<?php
if($w==""){
?>
        <tr>
            <th scope="row"><label for="bo_table">코드구분<?php echo $sound_only ?></label></th>
            <td colspan="2">
				 <?php echo help('대분류 등록시 해당사항을 선택하지 마세요') ?>
				<SELECT NAME="cc_refcode" style="width:150px">
				<option value="">코드구분</option>
				<?php
				$strSql="Select * From {$g5['cmncode']}  where cc_refcode='' and cc_useyn='Y' order by cc_code asc, cc_refcode asc";
				$strResult=sql_query($strSql);
				while($arr=sql_fetch_array($strResult)){
				?>
				<option value="<?php echo $arr['cc_code']?>" <?php echo get_selected($cc_refcode,$arr['cc_code']); ?>><?php echo $arr['cc_name']?> (<?php echo $arr['cc_code']?>)</option>
				<?php
				}
				?>
				</select> 
				<input type="checkbox" name="add"  id="add" value="Y" <?php echo get_checked($_GET['add'],'Y'); ?>> <label for="add">계속등록</label> 
               
            </td>
        </tr>
<?php }?>
        <tr>
            <th scope="row"><label for="gr_id">항목명<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
				<input type="text" name="cc_name" required class="frm_input required" size="50" value="<?php echo $view['cc_name']?>">                 
            </td>
        </tr>
		
		 <tr>
            <th scope="row"><label for="gr_id">코드정렬<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
				 <?php echo help('코드의 정렬순서를 지정합니다. (올림차순)') ?>
				<input type="text" name="cc_alignno" class="frm_input number" size="10" value="<?=$view['cc_alignno']?>">                 
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="bo_subject">사용여부<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
				 <?php echo help('기본값은 사용함입니다.') ?>
				<input type="radio" name="cc_useyn" value="Y" id="rad_delyn1"   <?php echo get_checked($view['cc_useyn'],'Y'); ?>> <label for="rad_delyn1">사용</label>&nbsp;&nbsp;
				<input type="radio" name="cc_useyn" value="N" id="rad_delyn2"   <?php echo get_checked($view['cc_useyn'],'N'); ?>> <label for="rad_delyn2">미사용</label>
            </td>
        </tr>       
        <tr>
            <th scope="row"><label for="bo_device">비고</label></th>
             <td colspan="2">
                <textarea name="cc_content" class="frm_input"><?php echo $view['cc_content']?></textarea>
            </td>            
        </tr>    	
		
       
        </tbody>
        </table>
    </div>
</section>





<div class="btn_fixed_top">
    <a href="./code_config_list.php?<?php echo $qstr?>" class=" btn_02 btn">코드환경</a>       
    <input type="submit" value="코드환경<?php if($w=="u"){echo "수정";}else{echo "추가";}?>" class="btn_submi btn btn_01" accesskey="s">
</div>

</form>


<script type="text/javascript">
<!--
	function fboardform_submit(f){

    return true;
}
//-->
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>