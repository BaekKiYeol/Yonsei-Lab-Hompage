<?php
include_once('./_common.php');
?>
<option value=''>선택하세요</option>
<?php
if($_POST['opt_code']){
$sql="Select * From {$g5['cmncode']}  where cc_refcode='$_POST[opt_code]' and cc_useyn='Y'  order by cc_alignno asc";
$result=sql_query($sql);
while($row=sql_fetch_array($result)){

?>
<option value="<?php echo $row['cc_code'];?>" ><?php echo $row['cc_name']?>(<?php echo $row['cc_code'];?>)</option>
<?php
}
}
?>