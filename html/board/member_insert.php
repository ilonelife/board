<?php
    include "../db.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];


    $sql = "
    INSERT INTO member (id, pw, name)
    VALUES ('". $id ."','". $pw ."','". $name ."')
    ";

    $conn->query($sql);

    $conn->close();
    
    ?>
    
    <script>
    
        location.href="login.php";
    
    </script>

?>