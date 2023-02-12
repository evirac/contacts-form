<?php
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$country_code = $_POST['country-code'];
$phone = $_POST['phone'];
$additional_information = $_POST['additional-info']


$sender = "From:".$first_name." " .$last_name."<".$email.">\r\n"
$subject = $first_name." wants to contact you";

$recipient = "ayushguptanew2@gmail.com ";


mail($recipient,$subject,$additional_information,$sender)
or die("error: could not send mail. Try again")


echo('
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&family=Comfortaa&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Thank you for reaching out to us. We will try to contact you as soon as possible</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</body>
</html>


')

?>