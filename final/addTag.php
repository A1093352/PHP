<?php
    require("DBconnected.php");
    $pNo = $_POST['pNo'];
    $newTag = $_POST['newTag'];
    $tagString = $_POST['tagString'];
    $tagString = $tagString.$newTag."#";
    $SQL = "UPDATE plan
            SET pTag = '$tagString'
            WHERE pNo = '$pNo'";
    mysqli_query($link, $SQL);
    header('Location: NPOManagement.php');
?>
