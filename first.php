<?php

header('content-Type: text/html; charset-8');
if(isset($_POST['email'])) {
    
    $email_to = "delshano.399@gmail.com";
    $email_subject = "email from:";
    
    
    
    $first_name = $_POST['first_name'];//required
    $last_name = $POST['last_name'];//required
    $email = $_POST['email'];//required
    $telephone = $_POST['telephone'];// not required
    $comments = $_POST['commects']; //required
    
    
    $email_message ="from details below.\n\n";
    
    
    function clean_string($string) {
        $bad = array("contant_type","bcc:","to","cc:","href");
        return str_replace($bad,$string);
        
        
    }
    
    $email_message .= "first name : " .clean_string($first_name)."\n\n";
    $email_message .= "last_name: " .clean_srting($last_name)."\n\n";
      $email_message .= "email: " .clean_srting($email_from)."\n\n";
      $email_message .= "telephone: " .clean_srting($telephone)."\n\n";
      $email_message .= "comments: " .clean_srting($comments)."\n\n";

    //CREATE EMAIL HEADERS 
    $headers = 'from: '.$email_from."\r\n".
        'x_mailer: php/' .phpversion();
    @mail($email_to,$email_subject,$email_message, $headers);
    ?>


<?php
    echo "<script type='text/javascript'>alert('شكرا لتواصلك سيتم قراءة الرسالة والرد باقرب وقت ممكن')</script>";
    echo "<script> window.location.assign('index.html'); </script>";
    ?>

<?php } ?>



    
    
    
