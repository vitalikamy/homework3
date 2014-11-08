$(document).ready(function() {
    $('.sidebar a').each(function () {             // получаем все нужные нам ссылки
        var location = window.location.href;       // получаем адрес страницы
        var link = this.href;                      // получаем адрес ссылки
        if(location == link) {                     // при совпадении адреса ссылки и адреса окна
        $(this).parent().addClass('current');                //добавляем класс
        }
    });
    $('div.details').css('display', 'none');
    $('div.details ul li').css('display', 'list-item');
    $('div.details').slideDown(500);
});
