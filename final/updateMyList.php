<?php

require("DBconnected.php");
$lNo=$_POST["lNo"];
$SQL="DELETE FROM liked WHERE lNo='$lNo'";
if(mysqli_query($link, $SQL)){
    echo "<meta http-equiv='Refresh' content='0; url=mylist.php'>";
}
?>