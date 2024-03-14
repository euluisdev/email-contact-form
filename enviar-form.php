<?php
    $to = "fluisf00@gmail.com";
    $assunto = "Form do site";
    $mensagem = $_POST['mensagem']." - ".$_POST['nome'];
    $email = $_POST['email'];

    $status = mail($to, $assunto, $mensagem);