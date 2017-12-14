$(document).ready(function(){
    $('#kontrole').click(function(){
        console.log('click: ' + $(this).val());
        var form = $(this).closest('form');
        //$('input[type=submit]', form).click();
        console.log('vardas: ' + $('input[name=vardas]', form).val());
        console.log('pareigos: ' + $('select[name=pareigos]', form).val());
    })
});