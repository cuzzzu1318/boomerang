<!DOCTYPE html>
<html>
  <head>
    <title>아이디 찾기</title>
    <meta charset="utf-8"
    name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,
    maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="findID.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <div class="top">
        <img class="bmr-back" src="이미지\색 뒤로가기.svg" alt="뒤로가기" onclick="history.back()">
        <h1>
          <span>아이디 찾기</span>
        </h1>
      </div>
      <div class="bmr-headline"></div>
    </header>

    <div class="field">
      <form action="process_findID.php" accept-charset="utf-8" name="user-info" method="post">
        <div class="field-tel">
          <input type="text" class="bmr-text-light" id="tel" name="tel" placeholder="'-'없이 번호를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-tel" value="인증번호">
        </div>
        <div class="field-num">
          <input type="text" class="bmr-text-light" id="num" name="num" placeholder="인증번호를 입력해주세요.">
          <input type="button" class="bmr-btn" id="check-num" value="확인">
          <span id="timer">3:30</span>
        </div>
        <div class="btn-next">
          <a href="pwreset.html" style="text-decoration: none;">
            <input type="submit" class="bmr-btn" id="findID" value="아이디 찾기">
          </a>
        </div>
      </form>
    </div>
  </body>
</html>
