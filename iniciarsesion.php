<?php
    session_start();
    $_SESSION["usuarioActual"] = $_GET["usuarioActual"];
    header('Location: /PRO_RGC_Task/index.php');
?> 

