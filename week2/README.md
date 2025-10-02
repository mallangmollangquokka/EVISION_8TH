# 기간
2025.09.21-2025.10.04


# Login Project — 로컬 연습용 로그인 구현

간단한 로컬 연습용 프로젝트입니다.  
XAMPP 환경에서 로그인 폼과 서버측 처리 로직을 직접 올리고, 동작 확인과 간단한 디버깅을 해본 기록을 정리해두었습니다. 목적은 로컬에서 웹 폼 → 서버 처리 → 결과 확인 흐름을 경험하는 것입니다.
로컬(XAMPP)에서 로그인 우회(SQL Injection) 문제를 재현하고, Prepared Statement 기반으로 안전하게 리팩터링했습니다. 또한 비밀번호 해시 처리 예시를 추가해 실제 서비스 관점에서의 보안성도 검증했습니다.

---

## 한 줄 설명
`login.html`에서 입력한 아이디/비밀번호를 `login_process.php`에서 받아 처리하는 로컬 연습 프로젝트입니다.

---

## 로컬 파일 트리
htdocs/
├─ dashboard/
├─ img/
├─ login_project/
│ ├─ login_process.php
│ └─ login.html
├─ php_basic/
│ ├─ db_test.php
│ ├─ form.html
│ ├─ php_basic.php
│ └─ process.php
├─ webalizer/
├─ xampp/
│ ├─ .modell
│ ├─ .modell-usb
│ └─ .version
├─ applications.html
├─ bitnami.css
├─ favicon.ico
└─ index.php


---

## 내용 요약
- `login.html` : 로그인 입력 폼(아이디/비밀번호).  
- `login_process.php` : 폼 데이터를 받아 처리하는 서버측 스크립트(로컬 Apache+PHP 환경에서 실행).  
- 연습 목적의 간단한 구성으로, 로컬에서 동작 확인 및 디버깅을 주로 했습니다.

---

## 빠른 실행 방법 (로컬)
1. XAMPP에서 Apache와 MySQL(Apache만 사용해도 됨)을 켭니다.  
2. 폴더를 `htdocs` 아래(`htdocs/login_project/`)에 둡니다.  
3. (DB 사용시) phpMyAdmin에서 데이터베이스를 생성하고 `users` 테이블을 직접 생성한 뒤 테스트 계정을 넣습니다.  
   - DB/테이블/컬럼 이름은 현재 프로젝트의 코드(`login_process.php`)와 맞게 설정하세요.  
4. 브라우저에서 `http://localhost/login_project/login.html` 접속해 동작을 확인합니다.

---

## 주의
- 이 저장소/코드는 로컬 실습용입니다. 공개 서버에 올릴 때는 환경설정, DB 자격 정보, HTTPS 등 운영 보안 조치를 반드시 적용하세요.
