 <?php
          header("Content-Type: text/html; charset=UTF-8");
          $jb_conn = mysqli_connect( 'localhost', 'mukkit', 'list4241!', 'mukkit' );
          $jb_sql = "SELECT * FROM mukkit_list2;";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr>
            <td>' . $jb_row[ 'ID' ] . '</td>
            <td>' . $jb_row[ 'store_name' ] . '</td>
            <td>' . $jb_row[ 'location' ] . '</td>
            <td>' . $jb_row[ 'description' ] . '</td>   
            <td>' . $jb_row[ 'score' ] . '</td>
            <td>' . $jb_row[ 'longitude' ] . '</td>
            <td>' . $jb_row[ 'latitude' ] . '</td>
            </tr>';
          }
        ?>