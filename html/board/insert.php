<?php

include "../db.php";

$board_name =  $_POST["board_name"];
$name = $_POST["name"];
$title = $_POST["title"];
$content = $_POST["content"];

$sql = "
INSERT INTO board (name,title,content,board_name)
VALUES ('". $name ."','". $title ."','". $content ."','". $board_name ."')
";

$conn->query($sql);

$conn->close();

?>

<script>

    location.href="list.php";

</script>