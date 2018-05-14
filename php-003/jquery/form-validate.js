$(document).ready(function(){

    $('#btn').click(function(){
        if ($("#forma").valid()){
            console.log('Forma užpildyta teisingai');
            var data = {
                'vardas': $('#forma input[name=vardas]').val(),
                'pavarde': $('#forma input[name=pavarde]').val(),
                'amzius': $('#forma input[name=amzius]').val(),
                'epastas': $('#forma input[name=epastas]').val()
            };
            $.ajax({
                method: "POST",
                url: "form-validate.php",
                dataType: 'json',
                data: data,
                success: function(data){
                    console.log(data);
                    $('#tekstas').text(data);
                }
            });

        }
        else {
            console.log('Forma užpildyta neteisingai: ištaisykite');
        }
        return false;
    });

    $("#forma").validate({
        rules: {
            'vardas': {
                required: true,
                maxlength: 15
            },
            'pavarde': {
                required: true,
                maxlength: 15
            },
            'amzius': {
                required: true,
                min: 18,
                max: 100
            },
            'epastas': {
                required: false,
                email: true
            }
        },
        messages: {
            'vardas': {
                required: 'Prašome įvesti vardą',
                maxlength: 'Maksimalus vardo ilgis yra 15'
            },
            'pavarde': {
                required: 'Prašome įvesti pavardę',
                maxlength: 'Maksimalus pavardės ilgis yra 15'
            },
            'amzius': {
                required: 'Prašome įvesti amžių',
                min: 'Minimalus amžius yra 18 metų',
                max: 'Maksimalus amžius yra 100 metų'
            },
            'epastas': {
                email: "Prašome įvesti teisingą el. paštą"
            }
        }
    });


});