$(document).ready(function(){
    $('#frm input[type=checkbox]').click(function(){
        var els = $('#frm input:checked');
        var data = {};
        for (var i=0; i<els.length; i++){
            data[$(els[i]).attr('name')] = $(els[i]).val();
        }
        $.ajax({
            method: "POST",
            url: "next-ajax-calc.php",
            dataType: 'json',
            data: data,
            success: function(data){
                $('#frm input[name=kaina]').val(data);
            }
        });
    });
});