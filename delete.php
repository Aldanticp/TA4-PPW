<?php
require 'config.php';
if (!isset($_SESSION['login'])) header("Location: login.php");

$id = $_GET['id'];
unset($_SESSION['kontak'][$id]);

// reindex array
$_SESSION['kontak'] = array_values($_SESSION['kontak']);

header("Location: index.php");
exit;
