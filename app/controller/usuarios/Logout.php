<?php

session_start();

if((null !== isset($_SESSION['nome']) && (null !== isset($_SESSION['senha'])))){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location: ../../index.php');
}