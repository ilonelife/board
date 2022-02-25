<?php
    include "../db.php";

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    
    $sql = "
    SELECT 
        name
    FROM 
        member
    WHERE
        id = '".$id."' and pw = '".$pw."'
    ";
 
    $result = $conn->query($sql);
 
    $row = $result->fetch_row();
     
    $conn->close();

    
    if($row[0] != '')
    {
        echo "로그인 성공 <a href='list.php'>리스트로 돌아가기</a> ";
        $_SESSION["name"] = $row[0];
    }
    else
    {
        echo "로그인 실패";
    }
    
?>