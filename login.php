<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>부메랑</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        img {display: block; margin: 0px auto;}
    </style>
</head>
<body>
  <img class="bmr-back" src="이미지\뒤로가기.svg" alt="뒤로가기" onclick="history.back()">
  <a href="main.html">
    <div id="top" class="div-logo">
      <img src="이미지\부메랑 로고.svg" class="bmr-logo" onclick="location.href='main.html'">
    </div>
  </a>
  <div class="bmr-headline">
    로그인
  </div>
  <div class="wrap">
      <form class="login" action="process_login.php" method="post">
          <div class="input">
              <input type="email" class="bmr-text" name="id" id="id" placeholder="아이디를 입력하세요">
              <input type="password" class="bmr-text" name="password" id="pw" placeholder="비밀번호를 입력하세요">
          </div>
          <label class="submit">
            <input type="submit" class="bmr-btn" id="submit" value="로그인">
          </label>
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
      <div class="login_etc">
          <div class="sign_up">
              <a href="signup.php">회원가입</a>
          </div>
          <div class="forgot_id">
              <a href="findID.html">아이디 찾기</a>
          </div>
          <div class="forgot_pw">
              <a href="pwfinder.html">비밀번호 찾기</a>
          </div>
      </div>
      <div class="kakao_login">
          <input type="button" value="카카오로 로그인">
      </div>
  </div>
</body>
</html>