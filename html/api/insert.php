<?php

include "../db.php";

$name = $_POST["name"];
$title = $_POST["title"];
$content = $_POST["content"];

$sql = "
INSERT INTO board (name,title,content)
VALUES ('". $name ."','". $title ."','". $content ."')
";

$conn->query($sql);

$conn->close();

?>