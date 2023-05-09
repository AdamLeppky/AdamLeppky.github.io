<?php

include("connectToDatabase.php");
     
if(isset($_POST['send']) && isset($_POST['message']) && strlen($_POST['message']) > 0 && isset($_POST['email']) && strlen($_POST['email']) > 0)
{
    $message = $_POST['message'];
    $email = $_POST['email'];

    $SQL = "INSERT INTO `messages` (`message_id`, `email`, `content`) VALUES (NULL, '$email', '$message');";
    $result = mysqli_query($db, $SQL);
    echo "<h1>Message Sent!</h1>";
    echo "<p>\"$message\" - $email</p>";
}
else
{
    echo "<p>Could not send message.</p>";
}

?>