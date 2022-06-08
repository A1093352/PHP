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
  .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 270px;
    max-width: 270px;
    min-height: 35px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius:10px;
    font-size: 18px;
    color: black;
    z-index:1;
}

.dropdown:hover .dropdown-content {
    display: block;
}   
.button1{border: 1;
background-color:	#02DF82;
color:#fff;border-radius:10px;border-color:	#01B468; 
width:270px;height:100px;cursor:pointer;display:inline;
font-size: 27px;}
.button2{display:inline; width: 50px;height: 50px;padding:0;}
.input1{
    display:inline;
    font-size: 22px;
    color: black;
}
form{
  display:inline;
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 131px,#bbf0aa 131px,  #bbf0aa 100%);"> 
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
    <br/>
    <div class="hoc clear">
    <div class="fl_right">  
        <form action="searchPlan.php" method = "post" style = "width: 100%;" enctype = "multipart/form-data">
            <input type="text" class="input1" placeholder="搜尋關鍵字或募款計畫名稱" name="searchTag" style="width: 275px;height: 50px;">
            <button class="button2" type="submit"><img src="img/searchButton.jpg"></button>
        </form>
    </div>
    </div>
    
  <div class="hoc clear">
      <br/><br/><br/>
      <!-- ################################################################################################ -->
      <div class="dropdown">
      <form action='searchPlan.php' method = 'post'>
        <button type = "submit" class="button1" name="searchTag" value='社團法人臺灣兒童健康暨身心發展協會'><u>社團法人臺灣兒童<br/>健康暨身心發展協會</u></button>     
      </form> 
        <div class="dropdown-content">
            <br/>
            <a href="https://www.csitaiwan.org/?gclid=CjwKCAjwyryUBhBSEiwAGN5OCOvunA-K_35TKxnHkCDcC-Bpym_yx-iQxuoWltwFGB3RAVannHR8MBoClBYQAvD_BwE"><u>前往機構官網</u></a><br/><br/> 
            募款計畫查詢：<br/>
            <center><img src="img/兒童健康暨身心發展協會.jpg" style="width: 130px;height: 130px;"></center> <br/>
        </div>      
     </div> 
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <form action='searchPlan.php' method = 'post'>
     <div class="dropdown">
        <button type = "submit" class="button1" name="searchTag" value='社團法人世界和平會'><u>社團法人<br/>世界和平會</u></button>       
        <div class="dropdown-content">
            <br/>
            <a href="https://www.worldpeace.org.tw/"><u>前往機構官網</u></a><br/><br/> 
            募款計畫查詢：<br/>
            <center><img src="img/世界和平會.jpg" style="width: 130px;height: 130px;"></center> <br/>
        </div>      
     </div> 
    </form>
    <form action='searchPlan.php' method = 'post'>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <div class="dropdown">
        <button type = "submit" class="button1" name="searchTag" value='財團法人勵馨社會社會福利事業基金會'><u>財團法人勵馨社會<br/>社會福利事業基金會</u></button>       
        <div class="dropdown-content">
            <br/>
            <a href="https://www.goh.org.tw/"><u>前往機構官網</u></a><br/><br/> 
            募款計畫查詢：<br/>
            <center><img src="img/勵馨基金會.jpg" style="width: 130px;height: 130px;"></center> <br/>
        </div>      
     </div>
     <br/><br/><br/><br/><br/><br/><br/>
    </form>
    <form action='searchPlan.php' method = 'post'>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <div class="dropdown">
        <button type = "submit" class="button1" name="searchTag" value='社團法人台灣彩虹愛家生命教育協會'><u>社團法人台灣彩虹<br/>愛家生命教育協會</u></button>       
        <div class="dropdown-content">
            <br/>
            <a href="https://www.rainbowkids.org.tw/WordPress/"><u>前往機構官網</u></a><br/><br/> 
            募款計畫查詢：<br/>
            <center><img src="img/彩虹愛家協會.jpg" style="width: 130px;height: 130px;"></center> <br/>
        </div>      
     </div>
    </form>
    <form action='searchPlan.php' method = 'post'>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <div class="dropdown">
        <button type = "submit" class="button1" name="searchTag" value='社團法人台灣彩虹雙福協會'><u>社團法人台灣<br/>彩虹雙福協會</u></button>       
        <div class="dropdown-content">
            <br/>
            <a href="https://gospelwelfare.neticrm.tw/civicrm/contribute/transact?reset=1&id=2&fbclid=IwAR0gDPWlgjEBF0m1ojpt9EV7vCBSikmLU9OThd-bgMk2mbDgOjkSkx8yu-4"><u>前往機構官網</u></a><br/><br/> 
            募款計畫查詢：<br/>
            <center><img src="img/彩虹雙福協會.jpg" style="width: 130px;height: 130px;"></center> <br/>
        </div>      
     </div>  
    </form> 
      <!-- ################################################################################################ -->
    
  </div>
  <div class='inspace-30'></div>
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