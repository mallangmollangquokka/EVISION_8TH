#2025.09.13-2025.09.21
# Guestbook (Flask)

간단한 Flask 기반 방명록 애플리케이션입니다.  
로컬에서 빠르게 실행해보고 웹 취약점(XSS, CSRF 검사 등)을 학습 / 실험하기 위해 설계했습니다.

> 이 프로젝트는 로컬 테스트용으로 구성되어 있습니다. **인터넷에 노출하거나 공개 서버에 배포하지 마세요.**

## 주요 기능
- python 3.8+ 
- 글 작성 및 목록 표시 (SQLite 사용)
- 키워드 검색 (LIKE 기반)
- XSS(Reflected / Stored) 실습 포인트 포함 (템플릿 출력 방식에 따라 취약/안전한 동작 확인 가능)
- 단일 파일(`app.py`) + 템플릿(`templates/`) 구조로 간단하게 구성

## 핵심 기능
- 방명록 글 작성(POST) 및 목록 조회(READ)
- 키워드 검색 (LIKE 기반 부분 일치)
- XSS 관련 실습 포인트 포함 (Reflected / Stored)
- 단일 파일 기반 서버 구조로 빠른 이해 및 실행 가능

## 폴더 구조
├─ app.py
└─ templates/
   ├─ index.html
   └─ search.html
