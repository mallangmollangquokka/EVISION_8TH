<?php
// GET 방식으로 데이터 받기
if (isset($_GET['username'])){
    $username = $_GET['username']; 
    // php에서는 변수선언 $
    echo "GET방식으로 받은 이름, ".$username;
    // .은 문자열 서로 연결함
    // echo:php에서 화면에 출력하라는 명령 프린트랑 비슷한데 좀 더 빠르고 여러개 출력 가능. print써도 되긴 함
} 
// POST 방식으로 데이터 받기
if (isset($_POST['password'])){
    $password = $_POST['password'];
    echo "POST방식으로 받은 비밀번호, ".$password;
    // isset() 값이 존재하는지 확인(없으면 오류안나게)
    // $_GET 수조스이 쿼리스트링에서 값을 가져옴

}
?>