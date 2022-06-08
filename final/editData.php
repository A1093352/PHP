<?php
    require("DBconnected.php");
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
<style type="text/css">
  tr:nth-of-type(even){
    background-color: #bbf0aa;
  }tr:nth-of-type(odd){
    background-color: #bbf0aa;
  }
  .tdBlack{
    color:black;
    font-size: 24px;
  }
  .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 210px;
    max-width: 210px;
    min-height: 35px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    text-align:center;
}

.dropdown:hover .dropdown-content {
    display: block;
}
table td {
    width: 360px;
    overflow: hidden;
    display: inline-block;
    white-space: nowrap;
}
dialog{
  border: none;
  box-shadow: 0 2px 6px #ccc;
  border-radius: 10px;
  min-width: 250px;
}
dialog::backdrop {
  background-color: rgba(0, 0, 0, 0.1);
}
.button1{
  background-color: #f9f9f9;
  min-width: 210px;
  min-height: 35px;
  border: none;
  color: green;
  font-size: 24px;
  cursor: pointer;
}
.img1{
    border:2px solid #000;
    border-radius: 105px;
    width: 210px;
    height: 210px;
  }
  .file {
    position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 8px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 22.5%,#bbf0aa 22.5%,  #bbf0aa 100%);"> 
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
    session_start();
    $uNo = $_SESSION['uNo'];
    $sql = "SELECT *
            FROM user
            WHERE uNo = '$uNo'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $uName = $row['uName'];
    $birthday = $row['birthday'];
    $tel = $row['tel'];
    $email = $row['email'];
    $uPhoto = $row['uPhoto'];
  ?>
  <br/>
  <div class = "hoc clear">
  <header id="header" class="hoc clear">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="dropdown">
        <img class="img1" src="img/<?php echo $uPhoto;?>" style="width:210px; height:210px"><br/><br/>
        <div class="dropdown-content">
            <br/>
            <button class="button1" id="show">更新大頭貼照</button>
            <dialog id="infoModal">
              <p><b><font size="5">更新大頭貼照</font></b></p>
              <img class="img1" id="blah" src="img/<?php echo $uPhoto;?>" />
              <form action="photoUpdateconfirm.php" method="post" enctype="multipart/form-data">
                  <br/>
                  <input type="hidden" name="uNo" value='<?php echo $uNo;?>'>
                  <a href="javascript:;" class="file" style="width: 200px;">選擇檔案
                  <input class="file" type="file" name="photo" accept="image/*" onchange="readURL(this);">
                  </a>
                  <script>
                    function readURL(input) {
                      if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                         };
                       reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                  <br/><br/>
                  <input class="file" type="submit" value="確定" style="width: 90px;background-color:#FFF;cursor:pointer;">&nbsp&nbsp&nbsp
                  <input class="file" type="button" id="close" value="取消" style="width: 90px;background-color:#FFF;cursor:pointer;text-align:center;">          
            </form>
            <script type="text/javascript">
              var upload = function (c, d) {"use strict";
              var $c = document.querySelector(c),
                  $d = document.querySelector(d),
                  file = $c.files[0],
                  reader = new FileReader();
                  reader.readAsDataURL(file);
                  reader.onload = function (e) {
                    $d.setAttribute("src", e.target.result);
                  };
              };
            </script>
            </dialog>
            <script>
              let btn=document.querySelector("#show");
              let close=document.querySelector("#close");
              let infoModal=document.querySelector("#infoModal");
              btn.addEventListener("click", function(){infoModal.showModal();})
               close.addEventListener("click", function(){infoModal.close();})
            </script>
            <br/>
            <a href="<?php echo "changePassword.php?uNo=".$uNo; ?>"><font color="green" size="5">修改密碼</font></a><br/><br/>
        </div>
    </div>   
    <div class ="fl_right">
    <form action="editConfirm.php" method = "post" style = "width: 100%;" enctype = "multipart/form-data">   
    <table cellpadding='2' style='width:8cm;height:8cm;'>
      <tr><td class='tdBlack' style="vertical-align:middle;">名稱</td><td class='tdBlack' style="vertical-align:middle;"><input type="text" name="uName" style="font-size:25px" placeholder='<?php echo $uName;?>'></td></tr>
      <tr><td class='tdBlack' style="vertical-align:middle;">生日</td><td class='tdBlack' style="vertical-align:middle;"><input placeholder="<?php echo $birthday;?>" class="textbox-n" type="text" style="font-size:25px" name='birthday' onfocus="(this.type='date')" id="date"></td></tr>
      <tr><td class='tdBlack' style="vertical-align:middle;">電話</td><td class='tdBlack' style="vertical-align:middle;"><input type="text" name="tel" style="font-size:25px" placeholder='<?php echo $tel;?>'></td></tr>
      
    </table>
    <br/>
    <button class="hoc clear" type="submit" style="width:120px;height:40px;background-color:#70ad47"><font color="white">確定</font></button>
    <input type="hidden" name="uNo" value="<?php echo $uNo;?>">
    </form>
    <br/>
    
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