<?php
    session_start();
    
    if ($_SESSION["name"] == '')
    {
        echo "로그인이 필요합니다  <a href='login.php'> 로그인하러 가기 </a>";
        exit();
    }

?>

<html>
    <head>
        <title>나만의 게시판</title>
    </head>
    <body>

        <form method="post" action="insert.php">

            작성자 : <input type="text" name="name" value="<?php echo $_SESSION["name"] ?>""> <br />

            제목 : <input type="text" name="title"> <br />

            내용 : <textarea style="width:400px;height:300px" name="content"></textarea>
            <br />
            <input type="submit" value="등록하기"> 

        </form>

    </body>
</html>