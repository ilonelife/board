<?php

include "../db.php";

 // echo $_GET["_id"];

$id = $_GET["_id"];

$sql = "
DELETE FROM board
WHERE _id = ".$id."
";


$conn->query($sql);

$conn->close();

?>