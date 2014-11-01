$(function(){

    var t1 = new Date("September 17, 2014 00:00:00");
    var t2 = new Date();
    var seconds = (t1.getTime() - t2.getTime()) / 1000;

    var Seconds_Between_Dates = Math.abs(seconds);

    var clock = $('.countdown').FlipClock(Seconds_Between_Dates,{clockFace:'DailyCounter',countdown:true,	showSeconds: false});


    function isEmailValid(email){
        var pass = /^[a-z0-9._%+-]+@[a-z0-9._-]+\.[a-z]{2,6}$/i;
        if(!pass.test(email)){
            return false;
        }
        return true;
    }

    $('.types li').click(function(){
        var index = $(this).index();
        window.location = '/detail/?'+index;
        return false;
    })

    $('#header form').submit(function(){
        var email = $(this).find('.email');
        var loader = $(this).find('span');
        var val = email.val();

        if (!isEmailValid(val)) {
            email.addClass('error');
            email.focus();
            return false;
        }
        email.removeClass('error');
        email.attr('disabled',true);
        loader.fadeIn(300);

        var data = { email: val };

        $.post('notify.php', data, function(){
            loader.fadeOut(300);
            email.attr('disabled',false);
            email.val('');
            alert('Готово');
        });

        return false;
    });
});