<?php 
// Send offer request email
if(isset($_POST['offer-submit'])){
    $receiver = "moikka@erikv.fi";
    $from = $_POST['offer-email'];
    $firstname = $_POST['offer-firstname'];
    $lastname = $_POST['offer-lastname'];
    $phone = $_POST['offer-phone'];
    $subject = "Offer request";
    $message = "Offer request from: " . $firstname . " " . $lastname . "\n" . $from . ", " . $phone . "\n\n" . "Message:" . "\n" . $_POST['offer-desc'];

    mail($receiver, $subject, $message);
}

// Send contact form email
if(isset($_POST['contact-submit'])){
    $receiver = "moikka@erikv.fi";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Contact form submission";
    $message = "Contact from: " . $name . "\n" . $from . ", " . $phone . "\n\n" . "Message:" . "\n" . $_POST['message'];

    mail($receiver, $subject, $message);
}

?>