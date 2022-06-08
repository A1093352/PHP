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
  }
  .example1 {
 border: 1px dashed orange;
 height: 50px;	
 overflow: hidden;
 position: relative;
}
.example1 h3 {
 font-size: 3em;
 color: red;
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: example1 13s linear infinite;
 -webkit-animation: example1 13s linear infinite;
 animation: example1 13s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 20%,#bbf0aa 20%,  #bbf0aa 100%);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="heading"><a href="index.php"><img src="img/FAYA_logo2.jpg" style="width:80px; height: 80px;"><font color="black" size="7">FAYA</font></a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a class="drop" href="information.php"><font color="#70ad47" size="6">最新消息</font></a></li>
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
  <br/><br/>
    <div class="example1" style='width:80%;margin:auto;'><h3>恭喜FAYA榮獲第五屆挺好campus永續創新獎第一名！</h3></div>
  <div class="hoc clear">
      <br/><br/><br/>
      <!-- ################################################################################################ -->
      <?php
        require("DBconnected.php");

        $SQL="SELECT * FROM article";

        if ($result=mysqli_query($link, $SQL)){
            echo "<table border='1' style='border:2px #000000 solid;' cellpadding='5'>";
            echo "<td class='tdBlack' style='text-align:center;'>序號</td>";
            echo "<td class='tdBlack' style='text-align:center;'>標題</td>";
            echo "<td class='tdBlack' style='text-align:center;'>日期</td>";
            $i = 1;
            while($row=mysqli_fetch_assoc($result)){
            $url = $row["aUrl"] ;
            echo "<tr>";
            echo "<td class='tdBlack' style='text-align:center;'>".($i++)."</td>";
            echo "<td class='tdBlack'><a href='$url' style='color:black;'>".$row["aTitle"]."</a></td>";
            echo "<td class='tdBlack' style='text-align:center;'>".$row["aDate"]."</td>"; 
            echo "</tr>";
            }
            echo "</table>";
        }
      ?>
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