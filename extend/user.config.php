<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가




// 코드테이블 불러오기
function get_code_dt_list($CC_CODE) {
    $sql = " SELECT CD_CODE, CD_NAME FROM g5_cmncodedet WHERE CC_CODE = {$CC_CODE} ORDER BY cd_alignno ASC";
    $result = sql_query($sql);
    return $result;
}



//코드테이블 option만들기
function get_code_det_for_option($CC_CODE, $INIT_CODE){
    $str = '';
    $result = get_code_dt_list($CC_CODE);
    while ($row = sql_fetch_array($result))
    {
        $str .= '<option value="'.$row['CD_CODE'].'" ';
        if($INIT_CODE == $row['CD_CODE']){
            $str .= 'selected="selected"';
        }
        $str .= '>'.$row['CD_NAME'].'</option>';
    }
    return $str;
}


// 하위 코드테이블 불러오기
function get_code_dt_list_sub($CC_CODE, $CD_VALUE) {
    $sql = " SELECT CD_CODE, CD_NAME FROM g5_cmncodedet WHERE CC_CODE = {$CC_CODE} AND CD_VALUE = {$CD_VALUE} ORDER BY cd_alignno ASC";
    $result = sql_query($sql);
    return $result;
}

// 하위 코드테이블 option만들기
function get_code_det_for_option_sub($CC_CODE, $CD_VALUE, $INIT_CODE){
    $str = '';
    $result = get_code_dt_list_sub($CC_CODE, $CD_VALUE);
    while ($row = sql_fetch_array($result))
    {
        $str .= '<option value="'.$row['CD_CODE'].'" ';
        if($INIT_CODE == $row['CD_CODE']){
            $str .= 'selected="selected"';
        }
        $str .= '>'.$row['CD_NAME'].'</option>';
    }
    return $str;
}

//select tag 만들기
function get_code_det_for_select_html($ID_NAME, $CC_CODE, $INIT_CODE, $ALL_YN, $ADD_ATTR) {
    $str ='';
    $str .= '<select id="'.$ID_NAME.'" name="'.$ID_NAME.'" '.$ADD_ATTR.' >';
    if($ALL_YN == "S") {
        $str .= '<option value="">-선택-</option>';
    } else if($ALL_YN == "Y") {
        $str .= '<option value="">-전체-</option>';
    }
    $str .= get_code_det_for_option($CC_CODE, $INIT_CODE);
    $str .= '</select>';
    return $str;
}

//select 공톧코드 라디오
function get_code_det_for_radio_html($ID_NAME, $CC_CODE, $INIT_CODE) {
    $str = '';
    $result = get_code_dt_list($CC_CODE);
    $cnt = 1;
    while ($row = sql_fetch_array($result))
    {
        $selectedTag = '';
        if($row['CD_CODE'] == $INIT_CODE) {
            $selectedTag = ' checked="checked" ';
        }
        $str .= '<div class="flex-c-space radio">';
        $str .= '  <input type="radio" id="'.$ID_NAME.$cnt.'" name="'.$ID_NAME.'" value="'.$row['CD_CODE'].'" '.$selectedTag.' ><label for="'.$ID_NAME.$cnt.'">'.$row['CD_NAME'].'</label>';
        $str .= '</div>';

        $cnt++;
    }

    return $str;
}

function get_custom_select_html($ID_NAME, $QUERY, $INIT_CODE, $ALL_YN, $ADD_ATTR) {
    $result = sql_query($QUERY);

    $str ='';
    $str .= '<select id="'.$ID_NAME.'" name="'.$ID_NAME.'" '.$ADD_ATTR.' >';
    if($ALL_YN == "S") {
        $str .= '<option value="">-선택-</option>';
    } else if($ALL_YN == "Y") {
        $str .= '<option value="">-전체-</option>';
    }

    while ($row = sql_fetch_array($result))
    {
        $str .= '<option value="'.$row['CD_CODE'].'" ';
        if($INIT_CODE == $row['CD_CODE']){
            $str .= 'selected="selected"';
        }
        $str .= '>'.$row['CD_NAME'].'</option>';
    }

    $str .= '</select>';
    return $str;
}



//radio 공통코드 라디오 + ETC 
function get_code_det_for_radio_add_etc_html($ID_NAME, $CC_CODE, $INIT_CODE, $ETC_CODE, $ETC_ID_NAME, $ETC_ADD_ATTR) {
    $str = '';
    $result = get_code_dt_list($CC_CODE);
    $cnt = 1;
    while ($row = sql_fetch_array($result))
    {
        $selectedTag = '';
        if($row['CD_CODE'] == $INIT_CODE) {
            $selectedTag = ' checked="checked" ';
        }
        $str .= '<div class="check-box radio-02">';
        $str .= '  <input type="radio" id="'.$ID_NAME.$cnt.'" name="'.$ID_NAME.'" value="'.$row['CD_CODE'].'" '.$selectedTag.' ><label for="'.$ID_NAME.$cnt.'">'.$row['CD_NAME'].'</label>';
        if($row['CD_CODE'] == $ETC_CODE) {
            $str .= ' <input type="text"  id="'.$ETC_ID_NAME.'" name="'.$ETC_ID_NAME.'" '.$ETC_ADD_ATTR.'  >';
        }
        
        $str .= '</div>';

        $cnt++;
    }

    return $str;
}


//checkbox 공통코드 체크박스
function get_code_det_for_checkbox_html($ID_NAME, $CC_CODE, $INIT_CODE) {
    $str = '';
    $result = get_code_dt_list($CC_CODE);
    $cnt = 1;
    $INIT_CODE = explode(',',$INIT_CODE);
    while ($row = sql_fetch_array($result))
    {
        $selectedTag = '';
        // if($row['CD_CODE'] == $INIT_CODE) {
        if(in_array($row['CD_CODE'], $INIT_CODE)) {
            $selectedTag = ' checked="checked" ';
        }
        $str .= '<li class="chk_box">';
        $str .= '  <input type="checkbox" id="'.$ID_NAME.$cnt.'" name="'.$ID_NAME.'[]" class="selec_chk" value="'.$row['CD_CODE'].'" '.$selectedTag.' ><label for="'.$ID_NAME.$cnt.'"><span></span>'.$row['CD_NAME'].'</label>';
        $str .= '</li>';

        $cnt++;
    }

    return $str;
}


//공통코드 a태그
function get_code_det_for_a($CC_CODE, $INIT_CODE) {
    $str = '';
    $result = get_code_dt_list($CC_CODE);

    while ($row = sql_fetch_array($result))
    {
        $active = '';

        if($row['CD_CODE'] == $INIT_CODE) {
            $active = ' class="active" ';
        }

        $str .= '<li class="tabList">';
        $str .= '  <a '.$active.' href="'.G5_URL.'/bbs/group.php?gr_id=portfolio&amp;wr_10='.$row['CD_CODE'].'">'.$row['CD_NAME'].'</a>';
        $str .= '</li>';

    }

    return $str;
}


//공통코드 카테고리 태그
function get_code_det_for_tag($CC_CODE, $INIT_CODE) {
    $str = '';
    $result = get_code_dt_list($CC_CODE);
    $INIT_CODE = explode(',',$INIT_CODE);
    
    while ($row = sql_fetch_array($result))
    {

        if(in_array($row['CD_CODE'], $INIT_CODE)) {
            $str .= '<li>';
            $str .= '#'.$row['CD_NAME'].'';
            $str .= '</li>';
        }

    }

    return $str;
}



?>