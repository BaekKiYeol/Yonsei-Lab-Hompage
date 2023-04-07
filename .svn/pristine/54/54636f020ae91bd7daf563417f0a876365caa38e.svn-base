<?php
$sub_menu = "800310";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

$g5['title'] = "코드 관리";

include_once(G5_ADMIN_PATH.'/admin.head.php');

if ($w == 'u'){
	 $view = get_code(2,$cd_code);

	$qstr .= "&opt_code={$cfg['cd_refcode']}&opt_refcode={$cfg['cc_code']}";

}

?>

<form name="fcodeform" id="fcodeform" action="./code_form_update.php" onsubmit="return fcodeform_submit(this)" enctype='multipart/form-data' method="post">
<input type="hidden" name="w" value="<?php echo $w ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="">
<input type="hidden" name="cd_code" value="<?php echo $view['cd_code']?>">

<section id="anc_bo_basic">
    <h2 class="h2_frm">코드 <?php if($w=="u"){echo "수정";}else{echo "추가";}?></h2>
    <?php echo $pg_anchor ?>

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
				<SELECT NAME="opt_code" onChange="goCode(this.value)" class="required" style="width:150px" required>
				<option value="">코드구분</option>
				<?php
				$strSql="Select * From {$g5['cmncode']}  where cc_refcode='' and cc_useyn='Y' order by cc_code asc, cc_refcode asc";
				$strResult=sql_query($strSql);
				while($arr=sql_fetch_array($strResult)){
				?>
				<option value="<?php echo $arr['cc_code']?>" <?php echo get_selected($opt_code,$arr['cc_code']); ?>><?php echo $arr['cc_name']?> (<?php echo $arr['cc_code']?>)</option>
				<?php
				}
				?>
				</select> 

				<select name="opt_refcode" id="opt_refcode2" class="required" style="width:150px" required>
				<option value="">참조코드</option>
				<?
				$Qry="Select * From {$g5['cmncode']}  where cc_refcode='$opt_code' order by cc_code asc, cc_refcode asc";
				$sResult=sql_query($Qry);
				while($data=sql_fetch_array($sResult)){
				?>
				<option value="<?php echo $data['cc_code']?>" <?php echo get_selected($opt_refcode,$data['cc_code']); ?> ><?php echo $data['cc_name']?> (<?php echo $data['cc_code']?>)</option>
				<?
				}
				?>
				</select>						
				<input type="checkbox" name="add" id="add" value="Y" <?php echo get_checked($_GET['add'],'Y'); ?>> <label for="add">계속등록</label> 
               
            </td>
        </tr>
<?php }?>
        <tr>
            <th scope="row"><label for="gr_id">항목명<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
				<input type="text" name="cd_name" required class="frm_input required" size="50" value="<?php echo $view['cd_name']?>">                 
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="bo_subject">사용여부<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
                <?php echo help('기본값은 사용함입니다.') ?>
				<input type="radio" name="rad_delyn" value="Y" id="rad_delyn1"   <?php echo get_checked($view['cd_delyn'],'Y'); ?>> <label for="rad_delyn1">사용</label>&nbsp;&nbsp;
				<input type="radio" name="rad_delyn" value="N" id="rad_delyn2"   <?php echo get_checked($view['cd_delyn'],'N'); ?>> <label for="rad_delyn2">미사용</label>
            </td>
        </tr>     
		<?php if($w=="" && $cd_refcode){?>
		 <tr>
            <th scope="row"><label for="gr_id">CODE JOIN<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
				<select name="cd_refcode" id="cd_refcode" style="width:150px" required>
				<option value="">코드조인</option>
				</select>
            </td>
        </tr>

		  <tr>
            <th scope="row"><label for="gr_id">CODE LEVEL<strong class="sound_only">필수</strong></label></th>
            <td colspan="2">
				 <?php echo help('기본값은 1입니다. 해당 코드에 하위 코드를 넣으실 경우 단계에 맞춰서 숫자를 증가하시면 됩니다.') ?>
				<input type="text" name="cd_level" required class="frm_input required" size="10" value="<?php echo $view['cd_level']?>">                 
            </td>
        </tr>
		<?php }?>

        <tr>
            <th scope="row"><label for="bo_device">비고</label></th>
             <td colspan="2">
                <textarea name="cd_value" class="frm_input"><?=$view['cd_value']?></textarea>
            </td>            
        </tr>    
		
		<tr>
            <th scope="row"><label for="bo_device">아이콘[OFF]</label></th>
             <td colspan="2">
				 <?php echo help('on/off 이미지를 사용하지 않는 경우에는 이곳에만 이미지를 올려주세요.') ?>
				<div class="file_wr write_div">
					<input type="file" name="ps_file[]" title="OFF용 이미지" class="frm_file ">
						<?php if($w == 'u' && $view['pic']) { ?>
							<span><?php echo $view['pic'];?></span> <a href="./img_del.php?<?php echo $qstr?>&w=u&cd_code=<?php echo $cd_code?>&gubun=1" class=" btn_01 btn">삭제</a>       
						<?php } ?>
				</div>               
				
            </td>            
        </tr>   
		<tr>
            <th scope="row"><label for="bo_device">아이콘[ON]</label></th>
             <td colspan="2">
				<div class="file_wr write_div">
					<input type="file" name="ps_file[]" title="ON용 이미지" class="frm_file ">
					<?php if($w == 'u' && $view['pic2']) { ?>
							<span><?php echo $view['pic2'];?></span> <a href="./img_del.php?<?php echo $qstr?>&w=u&cd_code=<?php echo $cd_code?>&gubun=2" class=" btn_01 btn">삭제</a>       
					<?php } ?>
				</div>               
				
            </td>            
        </tr>   
       
        </tbody>
        </table>
    </div>
</section>





<div class="btn_fixed_top">
    <a href="./code_list.php?<?php echo $qstr?>" class=" btn_02 btn">코드관리</a>       
    <input type="submit" value="코드<?php if($w=="u"){echo "수정";}else{echo "추가";}?>" class="btn_submi btn btn_01" accesskey="s">
</div>

</form>

<script>
function goCode(v){
		
 var url = '<?php echo G5_BBS_URL?>/ajax.codesearch.php';

    var params = $("#fcodeform").serializeArray();
    $.post(url, params, function(data){
        $("#opt_refcode2").html(data);
    });

}




function fcodeform_submit(f)
{

    return true;
}
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>