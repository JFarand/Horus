<?php
if(isset($_POST['postTitle'])) {
//initialize message variable with template content
    $message = file_get_contents('cannisters/postBlast_onePost.html');
//initialize and set date variable
    $dateraw = new DateTime();
    $datego = $dateraw->format('l jS F Y');
//initialize and set variables from POST
    $editorNotes = htmlspecialchars($_POST["editorNotes"]);
    $postTitle = htmlspecialchars($_POST["postTitle"]);
    $postBlurb = htmlspecialchars($_POST["postBlurb"]);
    $postImageSrc = $_POST["postImageSrc"];
    $postLink = $_POST["postLink"];

//replace template variables with POST data
    $message = str_replace('%MONTH_DAY_YEAR%', $datego, $message);
    $message = str_replace('%REPLACE_WITH_EDITOR_TEXT%', $editorNotes, $message);
    $message = str_replace('%ENTER_TITLE_HERE%', $postTitle, $message);
    $message = str_replace('%INSERT_POST_IMAGE_HERE%', $postImageSrc, $message);
    $message = str_replace('%ENTER_BLURB_HERE%', $postBlurb, $message);
    $message = str_replace('%POST_LINK_HERE%', $postLink, $message);
    require_once('PHPMailerAutoload.php');

    //PHPMailer Object
    $mail = new PHPMailer;

    //From email address and name
    $mail->From = "subscription@owlasylum.net";
    $mail->FromName = "OWL's Asylum";

    //To address and name
    $mail->addAddress("owlasylum@gmail.com");



    //Address to which recipient will reply
    $mail->addReplyTo("no-reply@owlasylum.net", "Reply");//Recipient name is optional

    //Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Your Favorite Updates From OWL's Asylum";
    $mail->Body = $message;
    $mail->AltBody = "This is the plain text version of the email content";

    if (!$mail->send()) {
        echo "<div id='submitMessage'><span>Mailer Error: " . $mail->ErrorInfo . "</span></div>";
    } else {
        echo "<div id='submitMessage' style='margin: 0px auto; width: '><span>We Are Almost Done. Please Check Your Email To Complete Subscription.</span></div>";
    }
}//completed mail processing
?>