<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/json.lib.php');
$name = isset($_REQUEST['name']) ? strip_tags($_REQUEST['name']) : '';
$board_ = isset($_REQUEST['board']) ? strip_tags($_REQUEST['board']) : '';
$bo_table = $board_;
if ($bo_table) {
    $board = get_board_db($bo_table, true);
    if (isset($board['bo_table']) && $board['bo_table']) {
        set_cookie("ck_bo_table", $board['bo_table'], 86400 * 1);
        $gr_id = $board['gr_id'];
        $write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름
    }
}

$data = array();
$sql = " select wr_subject, wr_content, wr_1, wr_2, wr_3, wr_4, wr_5, wr_link1, wr_link2, wr_link3
            from {$write_table}
            where wr_id = '$name' ";
$port = sql_query($sql);
for($i=0;$row=sql_fetch_array($port);$i++){
    $data['title'] = $row['wr_4'];
    $data['content1'] = $row['wr_content'];
    $data['content2'] = $row['wr_3'];
    $data['color1'] = $row['wr_subject'];
    $data['color2'] = $row['wr_2'];
    $data['link1']= $row['wr_link1'];
    $data['link2']= $row['wr_link2'];
    $data['link3']= $row['wr_link3'];
    $data['detail']= $row['wr_1'];
    $data['txtColor']= $row['wr_5'];
}


$data2 = array();
$sql2 = " select bf_file, bf_content from {$g5['board_file_table']}
                where bo_table = '$bo_table' and wr_id = '$name' and bf_type between '1' and '3' order by bf_no limit 1";
$port2 = sql_query($sql2);
for($i=0;$row2=sql_fetch_array($port2);$i++){
    $data2['img']= $row2['bf_file'];
}

$data3 = array();
$sql3 = " select bf_file, bf_content from {$g5['board_file_table']}
                where bo_table = '$bo_table' and wr_id = '$name' and bf_type between '1' and '3' order by bf_no limit 2";
$port3 = sql_query($sql3);
for($i=0;$row3=sql_fetch_array($port3);$i++){
    $data3['img']= $row3['bf_file'];
}

$data4 = array();
$sql4 = " select bf_file, bf_no from {$g5['board_file_table']}
                where bo_table = '$bo_table' and wr_id = '$name' and bf_type between '1' and '3' order by bf_no limit 3";
$port4 = sql_query($sql4);
for($i=0;$row4=sql_fetch_array($port4);$i++){
    $data4['no']= $row4['bf_no'];
    $data4['img']= $row4['bf_file'];
}
// $data['error'] = '';
// die(json_encode($data));
?>

<div class="portfolio-modal" style="background: <?php echo $data['color2']; ?>">
    <button type="button" onclick="$.modal.close();" class="btn modal__close"></button> 
    <div class="modal-top">
        <div class="modal-top_ overview" style="color: <?php echo $data['txtColor']; ?>">
            <h2>
            Overview
            </h2>
            <p>
                <?php echo nl2br($data['content2']); ?>
            </p>
        </div>
        <div class="modal-top_ link" style="color: <?php echo $data['txtColor']; ?>">
            <h2>
                Link
            </h2>
            <div class="link_url">
                <?php if($data['link1']){ ?>
                    <a href="<?php echo $data['link1']; ?>" target="_blank" style="color: <?php echo $data['txtColor']; ?>">🔗URL1</a>
                <?php } ?>
                <?php if($data['link2']){ ?>
                    <a href="<?php echo $data['link2']; ?>" target="_blank" style="color: <?php echo $data['txtColor']; ?>">🔗URL2</a>
                <?php } ?>
                <?php if($data['link3']){ ?>
                    <a href="<?php echo $data['link3']; ?>" target="_blank" style="color: <?php echo $data['txtColor']; ?>">🔗URL3</a>
                <?php } ?>
            </div>
        </div>
        <?php if($data['detail']){ ?>
            <a class="detail_" href="<?php echo $data['detail']; ?>" target="_blank">자세히보기</a>
        <?php } ?>
    </div>
    <div class="modal-img">
        <div>
            <img src="<?php echo G5_URL ?>/data/file/<?php echo $bo_table.'/'.$data3['img']; ?>" alt="">
        </div>
        <?php if($data4['no'] == 2){ ?>
        <div>
            <img src="<?php echo G5_URL ?>/data/file/<?php echo $bo_table.'/'.$data4['img']; ?>" alt="">
        </div>
        <?php } ?>
        <div>
            <img src="<?php echo G5_URL ?>/data/file/<?php echo $bo_table.'/'.$data2['img']; ?>" alt="">
        </div>
    </div>
</div>


<script>
    $('.btn.modal__close').click(function(){
        smoothscroll.init();
    });
</script>

<?php
/*
$result = array(
    'error'  => '',
    'html'   => $content
);
die(json_encode($result));
*/
?>

