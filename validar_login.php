<?php

    session_start();

    $_SESSION['autenticador'];

    $validador = false;

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarios = array(
        array('email'=>'marcos@email.com','senha'=>'12345'),
        array('email'=>'joao@email.com','senha'=>'321'),
        array('email'=>'janaina@email.com','senha'=>'12')
    );

    foreach($usuarios as $users){
        if($email == $users['email'] && $senha == $users['senha']){
            $validador = true;
        }
    }

    if($validador){
        header('Location: home.php');
        $_SESSION['autenticador'] = 'SIM';
    }else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticador'] = 'NAO';
    }



?>