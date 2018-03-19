$(document).ready(function(){
    $("#pvz").click(function(){
        alert('Click');
    });
    $(".lentele td").css('background-color', '#ddd');
    $(".lentele tr:first-child > td:first-child").css('color', 'red');
    $(".lentele tr:first-child").find('> td:last-child').css('color', 'blue');
    $(".lentele tr:first-child").find('> td').eq(1).css('color', 'yellow');
    $(".spn").css({
        'font-weight': 'bold',
        'text-decoration': 'underline'
    });
    $(".spn").parent().css('color', 'blue');
    $(".spn").parent().css('color', 'blue');
    $(".spn").closest('div').find('p').eq(1).css('color', 'red');
    var a = $(".spn").closest('div').find('p').eq(2);
    $(a).text('tekstas');
    var $b = $("#pvz").closest('div').find('p').eq(2);
    $('#aaa').text($b.text()).css('color', 'red');
    $('#div').html('<p style="color:blue">paragrafas div</p>').css('border', '1px solid blue');
    // savarankisko 1 sprendimas
    $('ul>li').eq(0).css('color', 'red');
    $('ul>li').eq(1).text('antras elements');
    $('ul>li').eq(2).html($('ul>li').eq(2).text() + '<span style="font-weight:bold"> antras elementas</span>');
});