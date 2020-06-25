<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Insert mukkit_list</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Noto Sans KR', monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <?php
      $ID = $_POST[ 'ID' ];
      $store_name = $_POST[ 'store_name' ];
      $description = $_POST[ 'description' ];
      $location = $_POST[ 'location' ];
      $score = $_POST[ 'score' ];
      // $emp_no = $_POST[ 'emp_no' ];
      // $birth_date = $_POST[ 'birth_date' ];
      // $first_name = $_POST[ 'first_name' ];
      // $last_name = $_POST[ 'last_name' ];
      // $gender = $_POST[ 'gender' ];
      // $hire_date = $_POST[ 'hire_date' ];
      if ( is_null( $ID ) ) {
        echo '<h1>Fail!</h1>';
      } else {
        $jb_conn = mysqli_connect( 'localhost', 'minji', 'alswl123', 'new_mukkit' );
        $jb_sql = "INSERT INTO new_mukkit ( ID, store_name, description, location, score ) VALUES ( '$ID', '$store_name', '$description', '$location', '$score' );";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>Success!</h1>';
      }
    ?>
    <p>
      <a href="mukkit_list.php">Mukkit Lists</a>
      <a href="mukkit_add.php">Add Mukkit_list</a>
     </p>
  </body>
</html>