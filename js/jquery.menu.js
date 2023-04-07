$(document).ready(function(){

    var device_w;
	var winW = $(window).outerWidth();


    function fnGnbPc(){
        $("#gnb .gnb_1dli .ico-ani__toggle").off('click');

        $('.gnb_list  #gnb_1dul >  li > a').on('focus mouseenter',function(e){
            $("#hd").addClass("show");
            $(".topMenu-bg").slideDown(300);
            $(".gnb_2dul").slideDown(300);
            $("#gnb_logo").slideDown(200);
            $("#gnb_logo").css({"display":"block","opacity":"1","transition":"all 1.8s"});
        });

        $("#gnb_1dul").mouseleave(function(){
            $("#hd").removeClass("show");
            $(".topMenu-bg").slideUp(300);
            $(".gnb_2dul").slideUp(300);
            $("#gnb_logo").slideUp(200);
            $("#gnb_logo").css({"display":"none","opacity":"0","transition":"all 1.8s"});
        });
    }

    function fnGnbMo(){
        $(".gnb_list  #gnb_1dul >  li > a").off('focus mouseenter');

        $("#gnb .gnb_1dli .ico-ani__toggle").on('click',function(e) {
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $('.gnb_1dli').removeClass('active');
                $('.gnb_2dul').removeClass('active');
                $('.gnb_2dul').slideUp(300); 
            } else {
                $(this).addClass('active');
                $(this).parent('.gnb_1dli').addClass('active');
                $(this).next('.gnb_2dul').addClass('active');
                $(this).next('.gnb_2dul').slideDown(300); 
            }
        });

    }

    $(".hambur-wrap").click(function(){
        $(this).toggleClass('open');
        $("#gnb_1dul").toggleClass('active');
    });


    if(winW > 1250){
        fnGnbPc();
        device_w = 'pc';
    }else if(winW <= 1250 ) {
        fnGnbMo();
        device_w = 'mo';

    }

    /* resize 체크 */
    $(window).resize(function(){
        var winW = $(window).outerWidth();

        if(winW > 1250  && device_w =='mo') {
            fnGnbPc();
            device_w ='pc';

        } else if(winW <= 1250 && device_w =='pc') {
            fnGnbMo();
            device_w = 'mo';

        }
    });

});