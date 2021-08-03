<?php

session_start();

if(!isset($_SESSION['autenticador']) || $_SESSION['autenticador']=='NAO'){
    header('Location: index.php?login=erro2');
}


?>