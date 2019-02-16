<?php
    session_start();
    unset($_SESSION["usuarioActual"]);
    header('Location: /PRO_RGC_Task/index.php');
?>

