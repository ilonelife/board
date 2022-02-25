<?php
    session_start();  // 세션 사용한다고 선언함

    // 세션 변수를 공유하기 위해 세션 사용... 서버와 클라이언트 간에...
    $_SESSION["test"] = "123";   // 세션 변수 test 에 123 값을 넣어줌

    echo $_SESSION["test"];   // 세션값을 표시함

?>