<?php 
    include "../db.php";

    $id = $_GET["_id"];

    $sql = "
    SELECT _id,name,title,content FROM board WHERE _id = ".$id."
    ";


    $result = $conn->query($sql);

    $row = $result->fetch_row();

   var_dump($row);

    $conn->close();
?>
<html>
    <head>
        <title>상세</title>
    </head>
    <body>

        <table style="border:1px solid #000; width:100%">

            <tr>
                <td>제목</td>
                <td><?php echo $row[1]?></td>
            </tr> 
            <tr>
                <td>작성자</td>
                <td><?php echo $row[2]?></td>
            </tr> 
            <tr>
                <td>내용</td>
                <td><?php echo nl2br($row[3])?></td>
            </tr> 

        </table>
        <br />

        <a href="list.php">목록으로</a>

    </body>
</html>
