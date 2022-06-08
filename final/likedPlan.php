<?php
require("DBconnected.php"); 
$pNo = $_POST['pNo']; 
$uNo = $_POST['uNo']; 
if(!isset($pNo) || empty($pNo)) exit; 
$plan_sql=mysqli_query($link,"select * from liked where pNo='$pNo' and uNo='$uNo'"); 
$count=mysqli_num_rows($plan_sql); 
if($count==0){ 
 $sql_in = "insert into liked (pNo, uNo) values ('$pNo', '$uNo')"; 
 mysqli_query($link, $sql_in); 
}else{ 
 $sql_del = "DELETE FROM liked WHERE pNo='$pNo' and uNo='$uNo'";
 mysqli_query($link, $sql_del); 
} 
?>