<?php
require("DBconnect.php");

$sql = "SELECT *
        FROM photo";



echo "<h1>我的相簿</h1>";

if($result=mysqli_query($link, $sql)){
    echo "<table border='1' width=20%>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo "<a href='".$row["ppath"]."'>";
        echo "<img src='".$row["ppath"]."' width='100%'>";
        echo "<a href = 'photoUpdate.php?pNo=".$row["pNo"]."'>更新圖片</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}







?>