<?php
  if($_POST){
    $emailTo="automarket24us@gmail.com";
    $subject=$_POST['subject'];
    $content=$_POST['content'];
    $headers='From: '.$_POST['email'];

    if(mail($emailTo,$subject,$content,$headers)){
      echo '<div class="container alert alert-success text-center">
            Your message was sent, we will get back to you ASAP!</div>';
    }else{
      echo '<div class="container alert alert-danger text-center">
            Your message couldn\'t be sent, please try again later</div>';
    }
  }



?>