<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');

?>
<?php 
$loca_lv = 0;
if($me_code_1 != '' ){
    $loca_lv = 1;
}
if($me_code_2 != '' ){
    $loca_lv = 2;
}
if($me_code_3 != '' ){
    $loca_lv = 3;
}
?>	




<div class="loca">
    <div class="loca_wrap">
        <div class="home_btn">
            <a href="<?php echo G5_URL ?>" title="홈으로 바로가기" tabindex="0" class="btn ico">
                <i class="ico-home"></i>
            </a> 
        </div>
        <div class="loca_btn_wrap">
            <div class="loca_btn_wrap_">
                <button class="loca_btn loca_btn_1" type="button"></button>
                <button class="loca_btn loca_btn_2" type="button"></button>
            </div>
        </div>
        <ul class="loca_ul1">
            <?php
            //다단 메뉴 구성
            $menu_datas = get_menu_db_all(0, true, '');
            $i = 0;
            foreach( $menu_datas as $row ){
                $add_class = '';
                if((isset($row['sub']) && $row['sub'])) {
                    $add_class .= ' open';
                    //$row['me_link'] = 'javascript:void(0)';
                }
                if($row['me_code'] == $me_code_1) $add_class .= ' selected';
            ?>
            <li class="loca_li1<?php echo $add_class ?>">
                <a href="javascript:;" target="_<?php echo $row['me_target']; ?>" class="loca_href1"><?php echo $row['me_name'] ?></a>
                <?php
                $cnt_li2 = count((array) $row['sub']);
                $k = 0;
                foreach( (array) $row['sub'] as $row2 ){
                    $add_class2 = '';
                    if((isset($row2['sub']) && $row2['sub'])) {
                        $add_class2 .= ' open';
                        //$row2['me_link'] = 'javascript:void(0)';
                    }
                    if($row2['me_code'] == $me_code_2) $add_class2 .= ' selected';

                    if($k == 0)
                        echo '<ul class="loca_ul2" data-cnt="'.$cnt_li2.'">'.PHP_EOL;
                ?>
                    <li class="loca_li2<?php echo $add_class2 ?>"><a href="<?php echo $row2['me_link'] ?>" target="_<?php echo $row2['me_target']; ?>" class="loca_href2"><?php echo $row2['me_name'] ?></a>
                    
                    <?php
                    $j = 0;
                    foreach( (array) $row2['sub'] as $row3 ){
                        $add_class3 = '';
                        if((isset($row3['sub']) && $row3['sub'])) {
                            $add_class3 .= ' open';
                            //$row3['me_link'] = 'javascript:void(0)';
                        }
                        if($row3['me_code'] == $me_code_3) $add_class3 .= ' selected';

                        if($j == 0)
                            echo '<ul class="loca_ul3">'.PHP_EOL;
                    ?>
                        <li class="loca_ul3<?php echo $add_class3 ?>"><a href="<?php echo $row3['me_link'] ?>" target="_<?php echo $row3['me_target']; ?>" class="loca_href3"><?php echo $row3['me_name'] ?></a>
                        
                        

                        </li>
                    <?php
                    $j++;
                    }   //end foreach $row3

                    if($j > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>

                    </li>
                <?php
                $k++;
                }   //end foreach $row2

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
            <?php
            $i++;
            }   //end foreach $row

            ?>
        </ul>
    </div>
</div>

<script>
//loca_btn text, show
function fnBtnText(){
    $('.loca_btn').hide();
    $('.loca_btn').each(function(i){
        	
        if($('.loca_li'+(i+1)+'.selected').length < 1){
            var text = $('.loca_li'+(i)+'.selected>ul>li:first-child>a').text();
            if(text != ''){
                $(this).text(text).show();
            }

        }else{
            var text = $('.loca_li'+(i+1)+'.selected .loca_href'+(i+1)).text();
            if(text != ''){
                $(this).text(text).show();
            }
        }
    });
}
//initialize
fnBtnText();
/*$('.loca a').attr('tabindex','-1');*/


//loca open class
function fnOpen(s,t){
    var $this = $(s);
    var $target = $(t);
    if($target.hasClass('open')){
        $target.removeClass('open');
        $this.removeClass('open');
    }else{
        $('.loca ul').removeClass('open');
        $('.loca_btn').removeClass('open');
        $target.addClass('open');
        $('.loca li a').attr('tabindex','-1')
        $target.children('li').children('a').attr('tabindex','0').first().focus();
        $this.addClass('open');
    }
}

$('.loca_btn').each(function(i){
    $(this).click(function(){
        if(i>0){
            fnOpen(this,$('.loca_li'+i+'.selected .loca_ul'+(i+1)));
        }else{
            fnOpen(this,$('.loca_ul'+(i+1)));
        }
    });
});

//loca click selected class
$('.loca li a').click(function(){
    var $li = $(this).parent();
    //if(!$li.hasClass('selected')){
        if($(this).hasClass('loca_href1')){
            $('.loca_ul2 .selected').removeClass('selected');
            $li.addClass('selected').siblings().removeClass('selected');
            $('.loca_btn_2').trigger('click');
        }else if($(this).hasClass('loca_href2')){
            $('.loca_ul3 .selected').removeClass('selected');
            $li.addClass('selected').siblings().removeClass('selected');
            $('.loca_btn_3').trigger('click');
        }else if($(this).hasClass('loca_href3')){
            $('.loca_ul4 .selected').removeClass('selected');
            $li.addClass('selected').siblings().removeClass('selected');
            $('.loca_btn_4').trigger('click');
        }else if($(this).hasClass('loca_href4')){
            $li.addClass('selected').siblings().removeClass('selected');
        }
        
        fnBtnText();
    //}
});


// 닫기 및 초기화
var iniLiLv1 = $('.loca_li1.selected').index();

var iniLiLv2 = $('.loca_li2.selected').index();
var iniLiLv3 = $('.loca_li3.selected').index();
var iniLiLv4 = $('.loca_li4.selected').index();
$("body").click(function(e){
    if($(".loca ul").hasClass("open")){ // 열려있을 경우
        if(!$(".loca_wrap").has(e.target).length){ // 클릭 이벤트
            $('.loca ul').removeClass('open');
            $('.loca_btn').removeClass('open');
            $('.loca li').removeClass('selected');
            $('.loca_li1:eq('+iniLiLv1+')').addClass('selected');
            $('.loca_li1:eq('+iniLiLv1+') .loca_li2:eq('+iniLiLv2+')').addClass('selected');
            $('.loca_li1:eq('+iniLiLv1+') .loca_li2:eq('+iniLiLv2+') .loca_li3:eq('+iniLiLv3+')').addClass('selected');
            $('.loca_li1:eq('+iniLiLv1+') .loca_li2:eq('+iniLiLv2+') .loca_li3:eq('+iniLiLv3+') .loca_li4:eq('+iniLiLv4+')').addClass('selected');
            fnBtnText();
        }
    }
})	
</script>

<?php if($bo_table == 'search') { ?>

<script>
    $(document).ready(function(){
        $('.loca').addClass('active');
        $('.loca_btn').text('통합검색');
    })
</script>

<?php } ?>

<?php if (!defined("_INDEX_")) { ?>
    <div class="inner">
<?php } ?>


