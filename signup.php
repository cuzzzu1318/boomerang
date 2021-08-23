<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" charset="utf-8">
    <title>부메랑</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <div class="top">
        <img class="bmr-back" src="이미지\색 뒤로가기.svg" alt="뒤로가기" onclick="history.back()">
        <h1>
          <span>회원가입</span>
        </h1>
      </div>
      <div class="bmr-headline"></div>
    </header>

    <div class="field">
      <form action="process_signup.php" id="signup-form" accept-charset="utf-8" name="user-info" method="post">
        <div class="field-id">
          <input type="email" class="bmr-text-light" id="id" name="id" placeholder="아이디를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-id" value="중복확인">
        </div>
        <div class="field-pw">
          <input type="password" class="bmr-text-light" id="password" name="password" placeholder="비밀번호를 입력해주세요.">
          <p id="pw-info"> 비밀번호는 영문, 특수기호, 숫자를 포함 ~~~~ </p>
          <input type="password" class="bmr-text-light" id="re-password" name="re_password" placeholder="비밀번호를 한번 더 입력해주세요.">
        </div>
        <div class="field-tel">
          <input type="text" class="bmr-text-light" id="tel" name="tel" placeholder="'-'없이 번호를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-tel" value="인증번호">
        </div>
        <div class="field-num">
          <input type="text" class="bmr-text-light" id="num" name="num" placeholder="인증번호를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-num" value="확인">
          <span id="timer">3:30</span>
        </div>
        <div class="field-nickname">
          <input type="text" class="bmr-text-light" id="nickname" name="nickname" placeholder="닉네임을 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-nickname" value="중복확인">
        </div>
        <div class="slc-area">
          <select class="bmr-slc" id="area" name="area">
            <option
              style="color: rgba(0, 0, 0, 0.54);">
                   거주지역을 선택해 주세요.
            </option>
            <option>
              창원
            </option>
            <option>
              마산
            </option>
            <option>
              진해
            </option>
            <option>
              구미
            </option>
          </select>
        </div>
        <div class="btn-signup">
          <input type="button" class="bmr-btn" id="signup" value="회원가입">
        </div>
      </form>
      <script>
        const signupForm = document.querySelector("#signup-form");
        const signupButton = document.querySelector("#signup");
        const password = document.querySelector("#password");
        const passwordCheck = document.querySelector("#re-password");
        signupButton.addEventListener("click", function(e) {
          if(password.value&& password.value === passwordCheck.value){

          signupForm.submit();
          }else{
             alert("비밀번호가 서로 일치하지 않습니다");
          }
        });
      </script>
    </div>
  </body>
</html>
