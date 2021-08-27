<!DOCTYPE html>
<html lang="ko">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>부메랑-로그인</title>
      <link rel="stylesheet" href="./login.css">
      <link rel="stylesheet" href="./style.css">
  </head>

  <body>
    <header>
      <div class="top">
        <img class="bmr-back" src="이미지\색 뒤로가기.svg" alt="뒤로가기" onclick="history.back()">
        <h1>
          <span>로그인</span>
        </h1>
      </div>
      <div class="bmr-headline"></div>
    </header>

    <div class="field">
      <form action="login_process.php" method="post">
        <div class="field-login">
          <div class="field-id">
              <input type="id" class="bmr-text-light" name="id" id="id" placeholder="아이디">
          </div>
          <div class="field-pw">
              <input type="password" class="bmr-text-light" name="password" id="pw" placeholder="비밀번호">
          </div>
          <input type="submit" class="bmr-btn" id="submit" value="로그인">
        </div>
      </form>


      <!--<script>
          document.getElementById('submit').onclick = function() {
            var ID = document.getElementById('id').value;
            var pass = document.getElementById('pw').value;
            if (ID === "1111" && pass === "1111") {
              location.href="main.html";
            }
            else {
              alert("아이디 패스워드가 올바르지 않습니다.");
            }
          }
      </script>-->


      <div class="find">
        <a href="findID.html">아이디 찾기</a>
        <a href="pwfinder.html">비밀번호 찾기</a>
      </div>
      <div class="bottom">
        <button type="button" class="kakao-loginbtn" onclick="location.href='kakao.html'">
          <span class="inner">
            <span class="kakao-img"></span>
            <span>카카오로 시작하기</span>
          </span>
        </button>
        <input type="button" class="bmr-btn" id="signup" value="회원가입" onclick="location.href='signup.php'">
      </div>
    </div>

    <footer>
      <div class="bottom-bar">
        <button type="button" class="bar" onclick="location.href='main.html'">
          <span class="bar-inner">
            <img src="이미지/홈.svg" class="ico">
          </span>
        </button>
        <button type="button" class="bar" onclick="location.href='Map.html'">
          <span class="bar-inner">
            <img src="이미지/지도 아이콘.svg" class="ico">
          </span>
        </button>
        <button type="button" class="bar" onclick="location.href='list.php'">
          <span class="bar-inner">
            <img src="이미지/게시판아이콘.svg" class="ico">
          </span>
        </button>
        <button type="button" class="bar" onclick="location.href='mypage.html'">
          <span class="bar-inner">
            <img src="이미지/마이페이지.svg" class="ico">
          </span>
        </button>
      </div>
    </footer>
  </body>
</html>
