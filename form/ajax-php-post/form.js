$(document).ready(function(){
    $("#signupForm").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            topic: {
                required: "#newsletter:checked",
                minlength: 2
            },
            agree: "required"
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
        }
    });
    $('#signupForm input[type=submit]').on('click', function(){
        if ($("#signupForm").valid()) {
            var post = {
                firstname: $('#signupForm input[name=firstname]').val()
            }
            $.ajax({ // AJAX call
                type: 'POST',
                url: 'form.php',
                dataType: "json", // AJAX data type
                data: JSON.stringify(post),
                success: function(data, textStatus, jqXHR){ // AJAX call success function
                    if (data.rc == "0") alert(JSON.stringify(data.post));
                    else alert(data.msg);
                },
                error: function(jqXHR, textStatus, errorThrown){ // AJAX call failure function
                    var msg = jqXHR.responseText; if (msg.length==0) msg = errorThrown;
                    alert(msg);
                }
            })
        }
        return false;
    })
});