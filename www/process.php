<?php
session_start();


$username = htmlspecialchars($_POST['username'] ?? NAN);
$number_of_ticket = htmlspecialchars($_POST['number_of_ticket'] ?? '');
$genre = htmlspecialchars($_POST['genre']?? NAN);
$subscribe = htmlspecialchars($_POST['subscribe'] ?? FALSE);
$time = htmlspecialchars($_POST['time']?? NAN);

$_SESSION['username'] = $username;
$_SESSION['number_of_ticket'] = $number_of_ticket;
$_SESSION['genre'] = $genre;
$_SESSION['subscribe'] = $subscribe;
$_SESSION['time'] = $time;


$line = $username . ";" . $number_of_ticket . ";" . $genre . ";" . $subscribe . ";" . $time . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);


header("Location: index.php");
exit();

