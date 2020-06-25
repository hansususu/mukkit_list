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
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect( 'localhost', 'minji', 'alswl123', 'new_mukkit' );
          $jb_sql = "SELECT * FROM new_mukkit;";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr>
            <td>' . $jb_row[ 'ID' ] . '</td>
            <td>' . $jb_row[ 'store_name' ] . '</td>
            <td>' . $jb_row[ 'description' ] . '</td>
            <td>' . $jb_row[ 'location' ] . '</td>
            <td>' . $jb_row[ 'score' ] . '</td>
            </tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>