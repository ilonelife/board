<?php
    include "../db.php";
?>

<html>
    <head>
    </head>

    <body>

<center>
    <form method="post" action="session.php">
        <input type="text" name="id" placeholder="로그인 아이디">  <br />
        <input type="password" name="pw"> <br />
        <input type="submit" value="로그인">
    </form>

    <br/>
    <br/>
    아이디가 없으세요? <a href="join.php">회원 가입하기</a>

</center>

</body>
