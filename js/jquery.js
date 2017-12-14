$(document).ready(function(){
    // suasti pagal id
    var a = $("#para").html();
    console.log(a);

    // surasti visus p
    var p = $("p");
    for (var i=0; i<p.length; i++) console.log($(p[i]).html());

    // uzdeti css
    $("#para").css({
        'font-weight': 'bold'
    });
    $("p span").css('color', 'red');
    $("span", '#para').css('color', 'blue');
    $('#para').find('span').css('color', 'green');
    $(".antras").closest('.virsus').find('.pirmas').text('labukas');
    $.each($('#sekantis'), function(){
        $(this).css('color', 'red');
    });
    $('#lentele tr > td:first-child').css('color', 'blue');
    $('#kitas').append('<p>rytas</p>');
    $('#kitas').prepend('<p>pradzia</p>');

    $('#lentele tr > td:last-child').css('color', 'yellow');
    $('#lentele tr td:eq(0)').css('color', 'brown');
});