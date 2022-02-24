<?php 
    include "../db.php";
    

  $id= $_GET["_id"];

  $sql = "
  SELECT _id,name,title,content FROM board WHERE _id = ".$id."
  ";


  $result = $conn->query($sql);

  $row = $result->fetch_row();

// var_dump($row);

  $conn->close();
?>


<html>
    <head>
        <title>나만의 게시판</title>
    </head>
    <body>

        <form method="post" action="insert.php">

            작성자 : <input type="text" name="name" value="<?php echo $row[1]?>"> <br />

            제목 : <input type="text" name="title"  value="<?php echo $row[2]?>"> <br />

            내용 : <textarea style="width:400px;height:300px" name="content" ><?php echo nl2br($row[3])?></textarea>
            <br />
            <br />
            <input type="submit" value="수정하기">

        </form>

    </body>
</html>