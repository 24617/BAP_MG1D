<?php
// MAILVARIABELEN AANMAKEN
$to = '24617@ma-web.nl';
$subjext = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

// MAIL VERSTUREN
mail($to, $subject, $message, $header);

// BEVESTIGEN VOOR DE GEBRUIKER
echo 'Uw mail is verstuurd. Bedankt!'
