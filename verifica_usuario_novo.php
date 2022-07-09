<?php

session_start();
if(!$_SESSION['usuario']){
    header('location:nao_tem_conta.php');
    exit();
}

?>