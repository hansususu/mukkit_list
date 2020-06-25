<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
<?
$jb_conn = mysqli_connect( 'localhost', 'mukkit', 'list4241!', 'mukkit' );
$query = "select * from mukkit_list3 where".$searchtype."list '%".$searchterm."%'";
$jb_sql = "SELECT * FROM mukkit_list3;";
$result = mysqli_query( $jb_conn, $query );
$records = mysqli_num_rows($result); //개수를 알려줌
$fields=mysqli_num_fields($result); //필드개수를 알려줌
echo "<p> 일치하는 맛집을 ".$records."개 찾았습니다.</p>";
$number=1;
?>

<h2> 맛집정보 검색결과</h2>
<table width="800" border="1" cellspacing="0" cellpadding="5">
<tr align="center">
<td bgcolor="#cccccc">순번</td>
<td bgcolor="#cccccc">맛집명</td>
<td bgcolor="#cccccc">위치</td>
<td bgcolor="#cccccc">메뉴</td>
<td bgcolor="#cccccc">평점</td>
</tr>
<?
function mysqli_result($res,$row=0)
{
	$data=mysqli_fetch_row($res);
	return $data[$row];
}

for($i=0;$i<$records;$i++){
    echo"<tr align='center'>>";
    echo"<td>$number</td>";
    for($j=0;$j<$fields;$j++){
        $data = mysqli_result($result,$i,$j);
        echo "<td>$data</td>";
    }
    echo "<tr>";
    $number++;
}
mysqli_close($jb_conn);
?>