<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,no-cache" charset="utf-8">
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
          <input type="button" class="bmr-btn" id="check-id" disabled="" value="중복확인">
        </div>

        <div class="field-pw" id="field-pw">
          <input type="password" class="bmr-text-light" id="password" name="password" placeholder="비밀번호를 입력해주세요.">
          <div class="info" id="pw-info">
            <span class=pw-info>영문/숫자를 조합하여 8자 이상 입력</span>
          </div>
          <input type="password" class="bmr-text-light" id="re-password" name="re_password" placeholder="비밀번호 확인">
          <div class="match" id="pw-match">
            <span class=pw-match>비밀번호가 일치합니다.</span>
          </div>
          <div class="match" id="pw-unmatch">
            <span class=pw-unmatch>비밀번호가 일치하지 않습니다.</span>
          </div>
        </div>

        <div class="field-tel">
          <input type="text" class="bmr-text-light" id="tel" name="tel" placeholder="'-'없이 번호를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-tel" disabled="" value="인증번호">
        </div>

        <div class="field-num" id="div-num">
          <input type="text" class="bmr-text-light" id="num" name="num" placeholder="인증번호를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-num" disabled="" value="확인">
          <span id="timer">3:00</span>
        </div>

        <div class="field-nickname">
          <input type="text" class="bmr-text-light" id="nickname" name="nickname" placeholder="닉네임을 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-nickname" disabled="" value="중복확인">
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

    <script>
      let id = document.getElementById("id");
      let nickname = document.getElementById("nickname");
      let tel = document.getElementById("tel");
      let num = document.getElementById("num");
      let check_id = document.getElementById("check-id");
      let check_nickname = document.getElementById("check-nickname");
      let check_tel = document.getElementById("check-tel");
      let check_num = document.getElementById("check-num");
      let timer = document.getElementById("timer");
      let div_num = document.getElementById("div-num");
      let field_pw = document.getElementById("field-pw");
      let pw = document.getElementById("password");
      let pw_info = document.getElementById("pw-info");
      let pw_check = document.getElementById("re-password");
      let pw_match = document.getElementById("pw-match");
      let pw_unmatch = document.getElementById("pw-unmatch");

      id.addEventListener("keyup", function(){
        if(id.value.length > 0){
          check_id.disabled = false;
          check_id.style.color = "#FEB3B3";
        }
        else{
          check_id.disabled = true;
          check_id.style.color = "#CCCCCC";
        }
      });

      nickname.addEventListener("keyup", function(){
        if(nickname.value.length > 0){
          check_nickname.disabled = false;
          check_nickname.style.color = "#FEB3B3";
        }
        else{
          check_nickname.disabled = true;
          check_nickname.style.color = "#CCCCCC";
        }
      });

      pw.addEventListener("click",function(){
        pw_info.style.display = "block";
      });

      pw_check.addEventListener("click",function(){
        pw_unmatch.style.display = "block";
      });

      field_pw.addEventListener("keyup",function(){
        if(pw_check.value.length > 0){
          if(pw.value == pw_check.value){
            pw_match.style.display = "block";
            pw_unmatch.style.display = "none";
          }
          else{
            pw_match.style.display = "none";
            pw_unmatch.style.display = "block";
          }
        }
      });

      tel.addEventListener("keyup", function(){
        if(tel.value.length == 11){
          check_tel.disabled = false;
          check_tel.style.color = "#FEB3B3";
        }
        else{
          check_tel.disabled = true;
          check_tel.style.color = "#CCCCCC";
        }
      });

      num.addEventListener('keyup', function(){
        if(num.value.length == 6){
          check_num.disabled = false;
          check_num.style.color = "#FEB3B3";
        }
        else{
          check_num.disabled = true;
          check_num.style.color = "#CCCCCC";
        }
      });

      check_tel.addEventListener("click",function(){
        div_num.style.display = "block";
      });

      check_tel.addEventListener("click",function(){
        var time = 179;
        var min;
        var sec;
        check_tel.disabled = true
        check_tel.style.color = "#CCCCCC";

        var x = setInterval(function(){
          min = parseInt(time / 60);
          sec = time % 60;

          if(sec < 10){
            timer.innerHTML = min + ":0" + sec;
          }
          else{
            timer.innerHTML = min + ":" + sec;
          }

          time--;

          if(time < 0){
            clearInterval(x);
            alert("인증시간이 초과하였습니다. 다시 인증해주시기 바랍니다.");
            tel.value = null;
            num.value = null;
            check_num.disabled = true;
            check_num.style.color = "#CCCCCC";
            timer.innerHTML = "3:00";
          }
        }, 1000);
      });
    </script>
  </body>
</html>
