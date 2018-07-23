$(document).ready(function(){
    $('#frm input[type=checkbox]').click(function(){
        var els = $('#frm input:checked');
        var parametrai = {};
        for (var i=0; i<els.length; i++){
            parametrai[$(els[i]).attr('name')] = $(els[i]).val();
        }
        //alert(JSON.stringify(data));
        $.ajax({
            method: "POST",
            url: "next-ajax-calc.php",
            dataType: 'json',
            data: parametrai,
            success: function(gauta){
                $('#frm input[name=kaina]').val(gauta);
            }
        });
    });
});