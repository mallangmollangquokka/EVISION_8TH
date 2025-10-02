## Extended description

**기간:** 2025.09.13 – 2025.09.21


---

### 한 줄 요약
로컬에서 웹 입력·렌더링·검색 흐름을 경험하고 storedXSS, reflectedXSS 를 실험해볼 수 있는 Flask 연습 프로젝트입니다.

---

### 목표 / 의도
- 웹 폼과 서버 사이의 데이터 흐름을 빠르게 이해하고 디버깅 루틴을 익히기 위함  
- 템플릿의 출력 방식(escape 처리 유무)에 따른 XSS(Reflected / Stored) 동작 차이를 직접 관찰  
- 간단한 검색(부분일치) 기능을 통해 SQL/DB 연동의 기본 동작을 확인


### 핵심 기능
- Python 3.8+ 기반 간단한 Flask 앱
- 글 작성(POST) 및 목록 표시 (SQLite 또는 메모리 저장 방식)
- 키워드 검색 (LIKE 기반 부분 일치)
- 템플릿 출력 방식에 따른 XSS 실습 포인트(Reflected / Stored)
- 단일 파일(`app.py`) + 템플릿(`templates/index.html`, `templates/search.html`) 구조

---

### 파일 트리
project-root/
├─ app.py
└─ templates/
├─ index.html
└─ search.html


### 엔드포인트 요약
- `GET /` : 방명록 목록 및 글 작성 폼  
- `POST /` : 글 저장(필드: `author`, `message`)  
- `GET /search?q=키워드` : 키워드 기반 부분 일치 검색

---

### 실습 포인트 
- **Reflected XSS**: `/search?q=<script>alert(1)</script>` 처리가 어떻게 되는지 확인  
- **Stored XSS**: 글 작성 폼에 `<script>alert('x')</script>` 입력 후 목록에서 실행 여부 관찰

##실제 서비스로 확장할 경우
-입력값 검증(길이·형식) 및 출력 시 escape 처리 필수
-비밀번호·민감정보는 절대 평문 저장 금지


#주의
XSS 테스트는 **로컬 환경에서만** 수행하세요. 외부에 노출된 서버에서 테스트하면 안 됩니다.
