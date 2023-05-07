<?php
echo "<p> SUCCESS 1! </p>";
// $query = "INSERT INTO `messages` (`message_id`, `email`, `content`) VALUES (5, 'Test', 'TEST 2');";
$query = "SELECT * FROM messages";
echo "<p> SUCCESS 2! </p>";
$success = mysqli_query($db, $query);
echo "<p> SUCCESS 3! </p>";
?>