<!doctype html>

<head>
  <title>부메랑 - 글 쓰기 정보</title>
  <meta charset="utf-8"
  name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,
  maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body><h1>
  <?php
  echo "글 제목: ".$_GET['title'];
   ?>
</h1>
<h2>
  <?php
  echo "글 내용: ".$_GET['content'];
   ?>
</h2>
<h2>
  사진:
  <img src="이미지\<?php
  echo $_GET['picture'];
   ?>">


</h2>


</body>
