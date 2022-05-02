<?php
require("DBconnect.php");

$pNo = $_GET['pNo'];

$sql = "SELECT *
        FROM photo
        WHERE pNo='$pNo'";

if ( $result = mysqli_query($link, $sql) ) {
    while( $row = mysqli_fetch_assoc($result) ){ 
        $pNo = $row['pNo'];
        $ppath = $row['ppath'];
        $pdate = $row['pdate'];
    }
}

?>

<html>

<head></head>

<body>
    <form action='photoUpdateConfirm.php' method='post' enctype="multipart/form-data">
        <input type="hidden" name="pNo" value='<?php echo $pNo;?>'>
        <input type='file' name='newPhoto' accept='image/*'><br/>
        <input type ='submit'>

    </form>

</body>


</html>