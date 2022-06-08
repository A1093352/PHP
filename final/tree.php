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
<style>
.container {
  border: 1px solid #F8ECEC;
  height: 490px;
  text-align: center;
  background-color:#F8ECEC;
  z-index:-1;
}
.content {
  width: 50%;
  display: inline-block;
}
.container1 {
  border: 1px solid #F8ECEC;
  height: 90px;
  text-align: center;
  background-color:#F8ECEC;
  z-index:1;
}
.content1 {
  display: inline;
  text-align:center;
  margin: 8px;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 60px;
    max-width: 60px;
    min-height: 25px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius:5px;
    font-size: 10px;
    color: black;
    z-index:99;
    margin:11px;
}

.dropdown:hover .dropdown-content {
    display: block;
}   
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 133px,#bbf0aa 133px, #bbf0aa 100%);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="heading"><a href="index.php"><img src="img/FAYA_logo2.jpg" style="width:80px; height: 80px;"><font color="black" size="7">FAYA</font></a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a class="drop" href="donate.php"><font color="#70ad47" size="6">最新消息</font></a></li>
          <li><a class="drop" href="donate.php"><font color="#70ad47" size="6">我要捐款</font></a></li>
          <li><a class="drop" href="about.php"><font color="#70ad47" size="6">關於</font></a></li>
          <li><a class="drop" href="login.php"><img class="heading" src="img/profile.png" style="width:50px; height: 50px;"></a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="hoc clear">
      <!-- ############################################################################################### -->
      <?php
        require("DBconnected.php");
        $SQL = "SELECT *
                FROM user
                WHERE uRole = 'user'";
        $result = mysqli_query($link, $SQL);
        $total = mysqli_num_rows($result);
        $i = floor($total / 2); 
        if($i > 9){
            $i %= 10;
        }
        $tree=array('種下','澆水','破土','發芽','施肥','成長','茁壯','開花','結果','再生');
      ?>
      <div class="container1">
        <br/>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='dropdown'>";
                echo "<div class='content1'>";
                echo "<img src='img/".$row['uPhoto']."' style='height:70px;width:70px;border-radius:35px;border:2px solid #000;;border-color:#000;'>";
                echo "</div>";
                echo "<div class='dropdown-content'>";
                echo $row['uName'];
                echo "</div>";
                echo "</div>";
            }
        ?>
      </div>
      <div class="container">
        <div class="content"><img src="img/<?php echo $i?>.jpg" style='width:350px;height:350px;z-index:-1;'></div>
        <h1 style='color:#000;font-size:41px; border:2px solid #000;'><?php echo $tree[$i-1]?><h1> 
      </div>
      <div class='inspace-15'></div>
      
        
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