<?php
include "../db.php";

$id = $_POST["_id"];
$name = $_POST["name"];
$title = $_POST["title"];
$content = $_POST["content"];

$sql = "
UPDATE
    board
SET
    name = '".$name."',
    title = '".$title."',
    content = '".$content."'
WHERE
    _id = ".$id."
";

$conn->query($sql);

$conn->close();

?>