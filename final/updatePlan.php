<!DOCTYPE html>
<!--
Template Name: Decentium
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html>
<head>
<title>FAYA</title>
<link rel="icon" href="img/FAYA_logo.png" type="image/x-icon" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
tr:nth-of-type(even){
background-color: #76dd55;
vertical-align:middle;
}tr:nth-of-type(odd){
background-color: #FFFFFF;
vertical-align:middle;
}
tr{
width: 180px;
height: 50px;
vertical-align:middle;
}

.tdBlack{
font-size: 22px;
color:black;
vertical-align:middle;
text-align:center;
overflow:hidden;
}
.input1{
border: 0;
outline:none;
background-color: rgba(0, 0, 0, 0);
color:#000;
}
button{
background-color: rgba(0, 0, 0, 0);
border:0;
cursor:pointer;
}

input[type = "checkbox"]{
    vertical-align:middle;
    display:inline;
    width:15px;height:15px;
}
.magic-checkbox + label:before {
  border-radius: 3px; 
}

.magic-checkbox + label:after {
  top: 2px;
  left: 7px;
  box-sizing: border-box;
  width: 6px;
  height: 12px;
  transform: rotate(45deg);
  border-width: 2px;
  border-style: solid;
  border-color: #fff;
  border-top: 0;
  border-left: 0; }

.magic-checkbox:checked + label:before {
  border: #3e97eb;
  background: #3e97eb; }

.magic-checkbox:checked[disabled] + label:before {
  border: #c9e2f9;
  background: #c9e2f9; }
label{
    color:#000;
    display:inline;
    font-size: 25px;
    line-height: 3vw; 
}
.button1{
width:60px;
height:33px;
border:1;
display:inline;
background-color:green;
border-color:#000;
cursor:pointer;
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 130px,#bbf0aa 130px,  #bbf0aa 100%);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="heading"><a href="#"><img src="img/FAYA_logo2.jpg" style="width:80px; height: 80px;"><font color="black" size="7">FAYA</font></a></h1>
      </div>
      <div class ="fl_right">
        <br/>
        <h1 class="heading"><font color="black" size="7">?????????&nbsp&nbsp&nbsp</font><a href="admin.php"><img class="heading" src="img/profile.png" style="width:60px; height: 60px;"></a></h1> 
    </div>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

      <!-- ################################################################################################ -->
      <br/><br/>
      <div class="hoc">
      <?php
        session_start();
        require("DBconnected.php");
        $pNo = $_GET['pNo'];
        $i = $_SESSION['i'];
        $SQL="SELECT * FROM plan WHERE pNo='$pNo'";

        if ($result=mysqli_query($link, $SQL)){
            echo "<table border='1' style='border:2px #000000 solid;' cellpadding='5'>";
            echo "<td class='tdBlack'></td>";
            echo "<td class='tdBlack'>????????????</td>";
            echo "<td class='tdBlack'>????????????</td>";
            echo "<td class='tdBlack'>??????</td>";
            echo "<td class='tdBlack'>??????</td>";
            echo "<td class='tdBlack'></td>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<form action='updatePlanConfirm.php' method = 'post' style = 'width: 100%;' enctype = 'multipart/form-data'>";
                echo "<tr>
                <td class='tdBlack'><input type='hidden' name='pNo' value='".$row['pNo']."'>".$i."</td>
                <td class='tdBlack'><input type='text' class='input1' style='width: 130px;' name='pName' placeholder='".$row['pName']."'></td>
                <td class='tdBlack'><input type='text' class='input1' style='width: 190px; font-size:12px;' name='pDescription' placeholder='".$row['pDescription']."'></td>
                <td class='tdBlack'><input type='text' class='input1' style='width: 210px;' name='pNPO' placeholder='".$row['pNPO']."'></td>
                <td class='tdBlack'><input type='text' class='input1' style='width: 180px; font-size:12px;' name='pLink' placeholder='".$row['pLink']."'></td>
                <td class='tdBlack'style='color: #345998;'><button type='submit'><u>??????</u></button></td>
                </tr>";
            } 
            echo "</table>";
            echo "</form>";
        }
    ?>
 
    <br/><br/>

    <h1 style='color:#000; font-size:27px;'>????????????</h1>
    <?php
        $SQL1 = "SELECT pTag FROM plan WHERE pNo='$pNo'";
        $result = mysqli_query($link, $SQL1);
        $row = mysqli_fetch_assoc($result);
        $tagString = $row["pTag"];
        $tags= explode("#", $tagString);
        $_SESSION['tags'] = $tags;
        echo "<form action='deleteTag.php' method = 'post' style = 'width: 100%;' enctype = 'multipart/form-data'>";
        echo "<input type='hidden' name='pNo' value='".$pNo."'>";
        for($i = 1 ; $i < count($tags) -1 ; $i++){   
            echo "<input class='magic-checkbox' type='checkbox' name='delTag[]' id='c1' value='".$tags[$i]."'>";
            echo "<label for='c1'>".$tags[$i]."</label>";
            echo "&nbsp&nbsp&nbsp";
        }
        echo "<br/><br/>";
        echo "<button type='submit' class='button1'>??????</button>";
        echo "</form>";
    ?>
    <br/><br/>
    <h1 style='color:#000; font-size:27px;'>????????????</h1>
    <form action='addTag.php' method = 'post' style = 'width: 100%;' enctype = 'multipart/form-data'>
        <input type='hidden' name='pNo' value='<?php echo $pNo?>'>
        <input type='hidden' name='tagString' value='<?php echo $tagString?>'>
        <input type='text' name='newTag' style='display:inline;font-size:22px;width:260px;color:#000;' placeholder='??????????????????"#"??????' required>
        <button type='submit' class='button1'>??????</button>
    </form>
    <div class="inspace-50"></div>
      <!-- ################################################################################################ -->
    
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">????????????</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          ?????????????????????????????????700???
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +886 0980-689-620</li>
        <li><i class="fa fa-envelope-o"></i> a1093306@mail.nuk.edu.tw</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/FAYA-100346345957025"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-instagram" href="https://www.instagram.com/faya_npo/"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">????????????</h6>
      <p class="nospace btmspace-30">????????????email?????????????????????????????????</p>
      <form method="post" action="mailSend.php">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" name="email" placeholder="Email">
          <button type="submit" value="subscribe">??????</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="https://im.nuk.edu.tw/" target="_blank">NUKIM, Taiwan</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>