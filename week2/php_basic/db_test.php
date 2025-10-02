<?php

// DB 연결 정보
$db_host = "localhost";   // DB 서버 주소 (내 컴퓨터)
$db_user = "root";        // db 사용자 이름 xampp의 기본값 root
$db_pass = "";            // db 비번 xampp의 기본값 빈 빈비번 ''
$db_name = "my_db";       // 사용할 데이터베이스 이름
$db_port = 3306;          // <-- 포트 번호 변수 추가

// MySQLi 객체로 DB 연결
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
// $conn mysqli클래스 이용해서MYSQL 서버 접속해라
// 연결 오류 확인
if($conn -> connect_error){
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}
echo "데이터베이스 연결 성공!<br>";

// 데이터 삽입
$username_to_insert = "Shin";
$password_to_insert = "1234";
$sql_insert = "INSERT INTO users (username, password) VALUES ('$username_to_insert', '$password_to_insert')";
// DB에 넣을 값을 변수로 잡음(하드코딩)
// sql_insert는 문자열로 된 sql문임 작은따옴표.
// 이런식으로 문자열 연결로 만들면 sql인젝션 위험있.
if($conn->query($sql_insert) == TRUE){
    echo "'$username_to_insert' 사용자가 성공적으로 추가되었습니다.<br>";
}else{
    echo "데이터 추가 오류: " . $conn->error . "<br>";
}

// 데이터 조회
$sql_select = "SELECT id, username FROM users";
// user테이블에서 id와 username 칼럼 가져오겟다.

$result = $conn->query($sql_select);
if($result->num_rows > 0){
    // 결과가 있으면 각 행(row)을 출력 $result ->num_rows는 결과 행의 개수
    echo "<h2>사용자 목록</h2>";
    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["id"]. " - 이름: " . $row["username"]. "<br>";
    }
    // fetch_assoc() 결과에서 한 행씩 꺼내서 연관배열(칼럼명으로 접근)으로 줌.
    // 반복하면서 id, username칼럼 출력 호출할떄마다 다음 행으로 이동
    // xss위험 있음.
}else{
    echo "저장된 사용자가 없습니다. ";
}

// db 연결 종료
$conn->close();

?>