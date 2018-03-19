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
});