<?php
include "db_connect.php";
$newUserName = htmlspecialchars($_GET["fname"]);
$newEmail = htmlspecialchars($_GET["femail"]);
$newComment = htmlspecialchars($_GET["fcomment"]);

echo "<h2> Processing and validating your comment... Sending your comment through the tubes... Go back and refresh the page</h2>";

$sql = "INSERT INTO commentsTable (idComment, commentUserName, commentEmail, commentText)
 VALUES (NULL, '$newUserName', '$newEmail', '$newComment')";
$result = $mysqli->query($sql);

?>