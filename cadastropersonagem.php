<?php
session_start();
    $_SESSION['nome'] = $_GET['nome']; 
    $_SESSION['tipo'] = $_GET['tipo']; 
    $_SESSION['hp'] = $_GET['hp']; 
    $_SESSION['personagem'] = [$_SESSION['nome'], $_SESSION['tipo'], $_SESSION['hp']];
    $_SESSION['personagens'];
    if($_SESSION['personagens'] == null ){
        $_SESSION['personagens'] = [];
    }
    $_SESSION['personagens'][count($_SESSION['personagens'])] = $_SESSION['personagem'];

    header("Location:personagens.php");
?>