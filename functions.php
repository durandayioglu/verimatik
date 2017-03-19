<?php
ob_start();
session_start();
require_once 'database.php';

function ifIsLoggedIn()
{
    return array_key_exists('user', $_SESSION);
}

function redirect($page)
{
    header('Location: http://localhost/verimatik/' . $page);
}

function ifIsNotLoggedInRedirect()
{
    if (!ifIsLoggedIn()) {
        redirect('../index.php');
    }
}

function h($string)
{
    return htmlspecialchars($string);
}