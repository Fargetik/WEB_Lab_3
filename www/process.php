<?php
session_start();


$username = htmlspecialchars($_POST['username']);
$number_of_ticket = htmlspecialchars($_POST['number_of_ticket'] ?? '');
$genre = htmlspecialchars($_POST['genre']);
$subscribe = htmlspecialchars($_POST['subscribe'] ?? FALSE);
$time = htmlspecialchars($_POST['time']);

$_SESSION['username'] = $username;
$_SESSION['number_of_ticket'] = $number_of_ticket;
$_SESSION['genre'] = $genre;
$_SESSION['subscribe'] = $subscribe;
$_SESSION['time'] = $time;

header("Location: index.php");
exit();

