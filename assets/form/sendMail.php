<?php
    $to = "vinicius.gf.padilha@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    var_dump($to);

    //5 – agora inserimos as codificações corretas e  tudo mais.
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n";
    //Vai ser //mostrado que  o email partiu deste email e seguido do nome
    $headers .= "X-Sender:  <$to>\n";
    //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <vp2002@gmail.com>\n";
    //caso a msg //seja respondida vai para  este email.
    $headers .= "MIME-Version: 1.0\n";

    mail($to, $subject, $message, $headers);  //função que faz o envio do email.
?>