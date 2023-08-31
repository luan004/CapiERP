<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: panel.php');
    } else {
        header('Location: login.php');
    }
?>