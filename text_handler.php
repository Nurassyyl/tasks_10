<?php 

session_start();

$connect= mysqli_connect("localhost", "root", "", "users");

$text = $_POST['text'];

$text_db = mysqli_query($connect, "SELECT * FROM `texts` WHERE `text` = '$text' ");
$num =  mysqli_num_rows($text_db);
// echo $num;
if ($num >= 1) {
  $_SESSION['error_text'] = "You should check in on some of those fields below.";
} else {
  $text_upload = mysqli_query($connect, " INSERT INTO `texts` (`id`, `text`) VALUES (NULL, '$text') ");
}

header("Location: task_10.php");

?>