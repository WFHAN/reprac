<?
#    $connect=mysql_connect( "localhost", "roror", "qhdks12") or  
#        die( "SQL server에 연결할 수 없습니다."); 
#
#    mysql_select_db("db_home",$connect);
error_reporting(0);
mysqli_report(MYSQLI_REPORT_OFF);
$connect = new mysqli('localhost', 'roror', 'qhdks12', 'db_home');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
#mysqli_set_charset($mysqli, 'utf8mb4');
?>
