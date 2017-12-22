<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/screen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/cmxform.js"></script>
</head>
<body>

<form class="cmxform" id="signupForm" method="get" action="">
    <fieldset>
        <legend>Validating a complete form</legend>
        <p>
            <label for="firstname">Firstname</label>
            <input id="firstname" name="firstname" type="text">
        </p>
        <p>
            <label for="lastname">Lastname</label>
            <input id="lastname" name="lastname" type="text">
        </p>
        <p>
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </p>
        <p>
            <label for="confirm_password">Confirm password</label>
            <input id="confirm_password" name="confirm_password" type="password">
        </p>
        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
        </p>
        <p>
            <label for="agree">Please agree to our policy</label>
            <input type="checkbox" class="checkbox" id="agree" name="agree">
        </p>
        <p>
            <label for="newsletter">I'd like to receive the newsletter</label>
            <input type="checkbox" class="checkbox" id="newsletter" name="newsletter">
        </p>
        <fieldset id="newsletter_topics">
            <legend>Topics (select at least two) - note: would be hidden when newsletter isn't selected, but is visible here for the demo</legend>
            <label for="topic_marketflash">
                <input type="checkbox" id="topic_marketflash" value="marketflash" name="topic">Marketflash
            </label>
            <label for="topic_fuzz">
                <input type="checkbox" id="topic_fuzz" value="fuzz" name="topic">Latest fuzz
            </label>
            <label for="topic_digester">
                <input type="checkbox" id="topic_digester" value="digester" name="topic">Mailing list digester
            </label>
            <!--<label for="topic" class="error">Please select at least two topics you'd like to receive.</label>-->
        </fieldset>
        <p>
            <input class="submit" type="submit" value="Submit">
        </p>
    </fieldset>
</form>

<?php
if (count($_GET)>0){
    foreach($_GET as $key => $value){
        echo "{$key}: {$value}<br>";
    }
}
?>

</body>
</html>