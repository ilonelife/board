<?php
    include "../db.php";

    $id =  $_POST["id"];
    $pw =  $_POST["pw"];
    $name =  $_POST["name"];



    $sql = "
    SELECT 
        name
    FROM 
        member
    WHERE
        id = '".$id."'  
    ";
 
    $result = $conn->query($sql);
 
    $row = $result->fetch_row();
      
    if($row[0] != '')
    {
        echo "이미 있는 아이디 입니다. <a href='join.php'>회원가입으로 돌아가기</a> "; 
       
    }
    else
    {
        echo "회원가입을 축하합니다.  <a href='login.php'>로그인하기</a>";
        
        $sql = "
        INSERT INTO member (id,pw,name)
        VALUES ('". $id ."','". $pw ."','". $name ."')
        ";
 
          
        $conn->query($sql);
    }

    $conn->close();
    
    ?>
     

