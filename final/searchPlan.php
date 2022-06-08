<?php session_start();?>
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
.button2{display:inline; width: 50px;height: 50px;padding:0;}
.input1{
    display:inline;
    font-size: 22px;
    color: #000;
}
table{
    max-width: 230px;
    min-height: 150px;
    max-height:150px; 
    text-align:center;    
    display:inline; 
}
.td1{
    width: 230px;
    height: 65px;
    color: #000;
    vertical-align:middle;
    border:1.2px solid #4b993d;
    font-size:24px;
    padding: 2px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.like{ font-size:25px;  color:#ccc; cursor:pointer;background-color: rgba(0, 0, 0, 0);border:0;} 
.cs{color:#f00;}
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
    font-size: 10px;
    color: black;
    z-index:99;
    border:1px solid #000;
    text-align:center;
}

.dropdown:hover .dropdown-content {
    display: block;
}    
</style>
<script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
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
    <div class="hoc clear">
    <div class="fl_right">  
        <br/>
        <form action="searchPlan.php" method = "post" style = "width: 100%;" enctype = "multipart/form-data">
            <input type="text" class="input1" placeholder="搜尋關鍵字或募款計畫名稱" name="searchTag" style="width: 275px;height: 50px;">
            <button class="button2" type="submit"><img src="img/searchButton.jpg"></button>
        </form>
    </div>
    </div>
    
  <div class="hoc clear">
      <br/>

      <!-- ################################################################################################ -->
      <?php 
        require("DBconnected.php");
        if(isset($_SESSION['login'])){
          $uNo = $_SESSION['uNo'];
        }else{
          $uNo = 0;
        }
        $searchTag = $_POST['searchTag'];
        $SQL = "SELECT *
                FROM plan";
        $result = mysqli_query($link, $SQL);
        $i = 0;
        $total = 0;
        while($row = mysqli_fetch_assoc($result)){
          $pTags = explode("#",  $row['pTag']);
          if(in_array($searchTag, $pTags)){
              $total++;
          }
        }
        $SQL1 = "SELECT pNo FROM liked WHERE uNo ='$uNo'";
        $result1 = mysqli_query($link, $SQL1);
        $j = 0;
        $pNum[0] = 0;
        while( $row1 = mysqli_fetch_assoc($result1) ){
          $pNum[$j] = $row1['pNo'];
          $j++; 
        }
        echo "<font size='5' color='#004B97'>共搜尋到".$total."筆募款計畫！</font><br/><br/><br/>";
        $NPOs = 1;     
        $result = mysqli_query($link, $SQL);
        while( $row = mysqli_fetch_assoc($result) ){ 
            $tagString = $row["pTag"];
            $tags= explode("#", $tagString);
            if(in_array($searchTag, $tags)){
                $pNo = $row['pNo'];
                $link = $row['pLink'];
                if(in_array($pNo, $pNum)){
                  $heart = "color: #f00;";
                }else{
                  $heart = "color: #ccc;";
                }
                echo "<table>";
                echo "<tr><td class='td1' style='height:40px;'>
                  <div align='right'><div class = 'dropdown'>
                  <button rel='".$pNo."' class='like' style='margin:auto;margin-right:1px;".$heart."'>&#10084;</button>
                  <div class='dropdown-content'>加入收藏</div></div></div></td></tr>";
                echo "<tr><td class='td1'><b><a href='$link' style='color: #257e27' target='new'>".$row['pName']."</a></b></td></tr>";
                echo "<tr><td class='td1' style='font-size: 15px; text-align:left; '>".$row['pDescription']."</td></tr>";
                echo "<tr><td class='td1' style='height:50px; padding:6px;'>".$row['pNPO']."</td></tr>";
                echo "</table>";
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                if($NPOs % 3 == 0){
                    echo "<br/><br/><br/>";
                }
                $NPOs++;           
            }
        }
        
        
    ?>
<script>
$(function () {            
    $(".like").click(function () {
       var love = $(this); 
       var pNo = love.attr("rel"); 
       var uNo = <?php echo $uNo?>;
       if(uNo == 0){
        window.alert("請先登入帳號");
        location.href='login.php';
        return false;
       }
      $.ajax({ 
      type:"POST", 
      url:"likedPlan.php", 
      data:{
        "pNo":pNo,
        "uNo":uNo
      }, 
      cache:false,  
      success:function(data){  
        location.reload();
      } 
      }); 
      return false; 
      });                 
    })
</script>
      <!-- ################################################################################################ -->
    
  </div>
  <div class='inspace-50'>
  
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