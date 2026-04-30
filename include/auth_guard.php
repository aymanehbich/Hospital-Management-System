<?php
function require_patient() {
    if (empty($_SESSION['pid'])) {
        header('Location: index1.php');
        exit;
    }
}

function require_receptionist() {
    if (empty($_SESSION['username'])) {
        header('Location: index.php');
        exit;
    }
}

function require_doctor() {
    if (empty($_SESSION['dname'])) {
        header('Location: index.php');
        exit;
    }
}
