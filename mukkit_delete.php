<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>mukkit_list</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Noto Sans KR', monospace;
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>store_name</th>
          <th>description</th>
          <th>location</th>
          <th>score</th>>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
          header("Content-Type: text/html; charset=UTF-8");
          $jb_conn = mysqli_connect( 'localhost', 'mukkit', 'list4241!', 'mukkit' );
          $delete_emp_no = $_POST[ 'delete_emp_no' ];
          if ( isset( $delete_emp_no ) ) {
            $jb_sql_delete = "DELETE FROM mukkit_list3 WHERE ID = '$delete_emp_no';";
            mysqli_query( $jb_conn, $jb_sql_delete );
            echo '<p style="color: red;">ID ' . $delete_emp_no . ' is deleted.</p>';
          }
          $jb_sql = "SELECT * FROM mukkit_list3;";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            $jb_delete='
              <form action="mukkit_delete.php" method="POST">
                <input type="hidden" name="delete_emp_no" value="' . $jb_row[ 'ID' ] . '">
                <input type="submit" value="Delete">
              </form>
            ';
            echo '<tr>
            <td>' . $jb_row[ 'ID' ] . '</td>
            <td>' . $jb_row[ 'store_name' ] . '</td>
            <td>' . $jb_row[ 'location' ] . '</td>
            <td>' . $jb_row[ 'description' ] . '</td>   
            <td>' . $jb_row[ 'score' ] . '</td>
            <td>' . $jb_delete . '</td>
            </tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>