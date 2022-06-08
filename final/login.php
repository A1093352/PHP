<?php
    require("DBconnected.php");
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            header('Location: userData.php');
        }
     }
?>
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
dialog{
  border: none;
  box-shadow: 0 2px 6px #ccc;
  border-radius: 10px;
}
dialog::backdrop {
  background-color: rgba(0, 0, 0, 0.1);
}
.button1 {
    position: relative;
    display: inline;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.button1 input {
    display: inline;
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.button1:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}
.button2{
    border:2px solid #000;
    width:120px;
    height:40px;
    background-color:		#02C874;
    font-size:18px;
    cursor:pointer;
    color:#FFF;
  }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 10%,#bbf0aa 10%,  #bbf0aa 100%);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="heading"><a href="index.php"><img src="img/FAYA_logo2.jpg" style="width:80px; height: 80px;"><font color="black" size="7">FAYA</font></a></h1>  
     </div>
     <div class ="fl_right">
        <br/>
        <h1 class="heading"><font color="black" size="7">會員登入</font></h1>   
    </div>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="hoc clear">
      <!-- ################################################################################################ -->
      <br/><br/><br/>
      <img src="img/SDGs.jpg" style="width:500px; height: 500px;">
     
      <div class="fl_right">
          <br/><br/><br/><br/>
      <form action = "login.php" method = "post" style = "width: 100%;" enctype = "multipart/form-data">
            <font color="black" size="6">帳號：</font>
            <input type="email" name="email" style="font-size:22px;color:black;" required>
            <br/>
            <br/>
            <font color="black" size = "6">密碼：</font>
            <input type="password" name="uPwd" style="font-size:22px;color:black;" required>
            <br/>
            <a id="show" style="cursor:pointer;"><font color="black" size="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp忘記密碼</font></a>
            <a href="enroll.php"><font color="black" size="4">&nbsp&nbsp&nbsp&nbsp&nbsp申請帳號</font></a>
            <br/><br/>
            <button class="hoc clear" type="submit" style="width:120px;height:40px;background-color:#70ad47;cursor:pointer;font-size:18px;"><font color="white">登入</font></button>
      </form>
            <br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <button style='display:inline;' class='button2' onclick="location.href='tree.php'">前往會員樹</button>
            <dialog id="infoModal">
              <button class="fl_right" id="close">X</button> 
              <p><b><font size="4">寄送驗證碼至您的電子信箱</font></b></p>
              <form action="sendCode.php" method = "post" style = "width: 100%;"> 
                <input type="email" name="email" placeholder="請輸入您的電子郵件" style="width: 300px;height: 40px;font-size: 20px;display:inline;">
                <input class="button1" type="submit" value="寄送驗證碼" style="width: 100px; height: 40px;background-color:#FFF;cursor:pointer;">
              </form>
            </dialog>
            <script>
              let btn=document.querySelector("#show");
              let close=document.querySelector("#close");
              let infoModal=document.querySelector("#infoModal");
              btn.addEventListener("click", function(){infoModal.showModal();})
              close.addEventListener("click", function(){infoModal.close();})
            </script>

            
      <!-- ################################################################################################ -->
    
  </div>
  <div class='inspace-30'></div>
  <!-- ################################################################################################ -->
</div>
<?php
    if(isset($_POST["email"])){
        if($_POST["email"]!=null){
            $email = $_POST["email"];
            $uPwd = $_POST["uPwd"];

            $sql = "SELECT *
                    FROM user
                    WHERE email='$email' AND uPwd='$uPwd'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result)==1) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION["login"]="Yes";
                $uNo = $row['uNo'];
                setcookie("uNo", $uNo, time()+300);
                $_SESSION['uNo'] = $uNo;
                $uRole = $row['uRole'];
                if($uRole == 'user')
                  echo "<meta http-equiv='Refresh' content='0; url=userData.php'>";
                else if($uRole == 'admin'){
                  echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
                }
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('帳號或密碼錯誤！');";
                echo "</script>";
            }
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('帳號或密碼錯誤！');";
            echo "</script>";
        }
    }
?>

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