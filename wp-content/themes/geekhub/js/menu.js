function showIndex(index) {
    $('.sidebar li.current').removeClass('current');
    $('.sidebar > ul > li:eq('+index+')').addClass('current');

    $('.details li.current').slideUp().removeClass('current');
    var li = $('.details > ul > li:eq('+index+')');
    li.addClass('current').slideDown();
}
$(function(){
    var location = window.location.href;
    var index = 0;
    if(location.split('?').length > 1)
    {
        index = location.split('?')[1].replace("#","");
    }
    showIndex(index)

    $('.sidebar li a').click(function(){
        var index = $(this).parent().index();
        showIndex(index);

        return false;
    });
    $('.details a.register').click(function(){
        var index = $(this).parent().index();
        window.location = '/register/?'+index;

        return false;
    });
});