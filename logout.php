<?php
session_start();
session_destroy();
header('location: login.php');
exit();
// Precisa do link de sair

?>