<?php
    require("DBconnected.php");
    session_start();
    $pNo = $_POST['pNo'];
    $delTag = $_POST['delTag'];
    $tags = $_SESSION['tags'];
    for($i = 0 ; $i < count($delTag) ; $i++){
        if (($key = array_search($delTag[$i], $tags)) !== false) {
            unset($tags[$key]);
        }
    }
    array_filter($tags);
    $tagString = implode('#',$tags);
    $tagString = $tagString;
    $SQL = "UPDATE plan 
            SET pTag = '$tagString'
            WHERE pNo='$pNo'";
    mysqli_query($link, $SQL);
    header('Location: NPOManagement.php');

?>