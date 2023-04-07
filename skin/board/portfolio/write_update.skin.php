<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
$sql = " update $write_table
            set wr_link3 = '$wr_link3'
          where wr_id = '$wr_id' ";
sql_query($sql);


sql_query("ALTER TABLE  `g5_write_".$bo_table."` CHANGE  `wr_4`  `wr_4` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;");
sql_query("ALTER TABLE  `g5_write_".$bo_table."` CHANGE  `wr_3`  `wr_3` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;");
?>