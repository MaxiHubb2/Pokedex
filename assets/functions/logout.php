<?php
    session_start();
    $_SESSION['id'] = null;
    header("Location: ../../vistas/index.php");
    exit();
?>