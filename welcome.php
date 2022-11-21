<?php

session_start();
$name = $_POST['name'];

if (empty($name))
{
    $_SESSION['emptyName'] = true;
    header('Location: form_validtation.php');
}