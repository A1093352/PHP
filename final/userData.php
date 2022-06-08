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
    background-color: #bbf0aa;
  }tr:nth-of-type(odd){
    background-color: #bbf0aa;
  }
  .tdBlack{
    color:black;
    font-size: 24px;
    border-bottom:5px solid #02DF82;
  }
  .img1{
    border:2px solid #000;
    border-radius: 100px;
  }
  .button1{
    border:2px solid #000;
    border-radius: 10px;
    width:140px;
    height:50px;
    background-color:		#02C874;
    font-size:20px;
    cursor:pointer;
    color:#FFF;
  }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php
    require("DBconnected.php");
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href = 'logout.php'><font size ='5'>登出</font><a>";
        }
        else{
            echo "非法進入系統";
            exit();
        }
     }
?>
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 24%,#bbf0aa 24%,  #bbf0aa 100%);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="heading"><a href="index.php"><img src="img/FAYA_logo2.jpg" style="width:80px; height: 80px;"><font color="black" size="7">FAYA</font></a></h1>  
     </div>
     <div class ="fl_right">
        <br/>
        <h1 class="heading"><font color="black" size="7">會員資訊&nbsp&nbsp&nbsp</font><a href="editData.php"><img class="heading" src="img/editButton.jpg" style="width:60px; height: 60px;"></a></h1> 
    </div>
    
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
  <?php
    $uNo = $_SESSION['uNo'];
    $sql = "SELECT *
            FROM user
            WHERE uNo = '$uNo'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
  <br/><br/>
  <div class = "hoc clear">
  <header id="header" class="hoc clear">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
    <?php
        $uPhoto='img/'.$row['uPhoto'];
        echo "<img class='img1' src='$uPhoto' style='width:200px; height:200px'>";
    ?>

    <div class ="fl_right">
    <table cellpadding='5' style='width:15cm;height:8cm;'>
      <tr><td class='tdBlack' style="vertical-align:middle;">名稱：<?php echo $row['uName'];?></td></tr>
      <tr><td class='tdBlack' style="vertical-align:middle;">生日：<?php echo $row['birthday'];?></td></tr>
      <tr><td class='tdBlack' style="vertical-align:middle;">電話：<?php echo $row['tel'];?></td></tr>
      <tr><td class='tdBlack' style="vertical-align:middle;">電子郵件：<?php echo $row['email'];?></td></tr>
    </table>
    <br/>
    <button style='display:inline;' class='button1' onclick="location.href='mylist.php'">我的收藏</button>&nbsp&nbsp&nbsp&nbsp
    <button style='display:inline;' class='button1' onclick="location.href='tree.php'">前往會員樹</button>
    <br/><br/>
    </div>
  </div>
  <!-- ############################################################################################### -->
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">聯絡資訊</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          高雄市楠梓區高雄大學路700號
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
      <h6 class="heading">訂閱我們</h6>
      <p class="nospace btmspace-30">輸入您的email追蹤我們的活動訊息吧！</p>
      <form method="post" action="mailSend.php">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" name="email" placeholder="Email">
          <button type="submit" value="subscribe">訂閱</button>
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