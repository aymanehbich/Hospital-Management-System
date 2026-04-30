<?php
function require_patient() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['pid'])) {
        header('Location: index1.php');
        exit;
    }
}

function require_receptionist() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['username'])) {
        header('Location: index.php');
        exit;
    }
}

function require_doctor() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (empty($_SESSION['dname'])) {
        header('Location: index.php');
        exit;
    }
}
