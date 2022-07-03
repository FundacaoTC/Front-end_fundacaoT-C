<?php 
    //linkar essa arquivo em um <a></a> como botão de SAIR/DESLOGAR/LOG OUT
    session_start();
    session_destroy();
    header('Location: index.php');
?>