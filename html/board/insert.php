<?php

include "../db.php";

$name = $_POST["name"];
$title = $_POST["title"];

$sql = "
INSERT INTO board (name,title)
VALUES ('". $name ."','". $title ."')
";

$conn->query($sql);

$conn->close();

?>

<script>

    location.href="list.php";

</script>