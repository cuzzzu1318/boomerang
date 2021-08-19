<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" charset="utf-8">
    <title>부메랑</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div>
      <img src="이미지\뒤로가기.png" class="bmr-back" onclick="history.back()">
      <a href="main.html">
        <img src="이미지\부메랑 로고.png" class="bmr-logo">
      </a>
    </div>
    <div class="bmr-headline">
      입력사항
    </div>
    <div>
      <form action="process_signup.php" accept-charset="utf-8" name="user-info" method="post">
        <input type="email" class="bmr-text" id="id" name="id" placeholder="아이디를 입력해주세요.">
        <input type="button" class="bmr-btn" id="check-id" value="중복확인">
        <input type="password" class="bmr-text" id="password" name="password" placeholder="비밀번호를 입력해주세요.">
        <p id="pw-info"> 비밀번호는 영문, 특수기호, 숫자를 포함 ~~~~ </p>
        <!-- <input type="text" id="pw-info" value="비밀번호는 영문, 특수기호, 숫자를 포함 ~~~~"> -->
        <input type="text" class="bmr-text" id="nickname" name="nickname" placeholder="닉네임을 입력해주세요.">
        <input type="button" class="bmr-btn" id="check-nickname" value="중복확인">
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
        <input type="submit" class="bmr-btn" id="signup" value="회원가입">
      </form>
    </div>
  </body>
</html>