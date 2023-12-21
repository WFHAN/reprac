<?
   session_start();
   if (isset($_SESSION['userid'])) 
   {
   $composer = $_GET['composer'];
   include "../lib/dbconn.php";
 
   $sql = "update survey set $composer = $composer + 1";
   mysql_query($sql, $connect);

   mysql_close();
   }
   Header("location:result.php");
?>

