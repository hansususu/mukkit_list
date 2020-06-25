<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Add mukkit</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Noto Sans KR', monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <h1>Add Mukkit_list</h1>
    <form action="mukkit_insert.php" method="POST">
      <!-- <p><input type="number" name="ID" placeholder="NO" required></p> -->
      <!-- <p><input type="date" name="birth_date" required></p> -->
      <!-- <p><input type="text" name="first_name" placeholder="First Name" required></p> -->
      <!-- <p><input type="text" name="last_name" placeholder="Last Name" required></p> -->
      <!-- <p><select name="gender" required> -->
        <!-- <option value="M" selected>M</option> -->
        <!-- <option value="F">F</option> -->
      <!-- </select></p> -->
      <!-- <p><input type="date" name="hire_date" required></p> -->
      <p><input type="number" name="ID" placeholder="number" required></p>
      <p><input type="text" name="store_name" placeholder="store_name" required></p>
      <p><input type="text" name="description" placeholder="description" required></p>
      <p><input type="text" name="location" placeholder="location" required></p>
      <p><input type="number" name="score" placeholder="5점 만점" required></p>



      <button>추가하기</button>
    </form>
  </body>
</html>