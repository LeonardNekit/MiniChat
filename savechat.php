<?php
$chatMessage = $_POST['chatMessage'];

$chatlog = file_get_contents('chatlog.txt');
$chatlog .= $chatMessage;
file_put_contents('chatlog.txt', $chatlog);
?>
