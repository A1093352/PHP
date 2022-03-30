<?php
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href = 'logout.php'>登出<a>";
        }
        else{
            echo "非法進入系統";
            exit();
        }
    }else{
        echo "非法進入系統";
        exit();
    }
?>


<html>

<head>
    <title>註冊帳戶！</title>
</head>

<body bgcolor = "#fbfeec">
    <div align = "center">
        </br>
        <font size = "7"><b>用戶註冊</b></font></br></br></br>
        <form action = "userData.php" method = "post" style = "width: 80%;" enctype = "multipart/form-data">
            <font size = "6"><b>帳號：</b></font>
            <input type = "text" name = "userName" style="font-size:20px" required>
            </br>
            </br>
            </br>
            <font size = "6"><b>密碼：</b></font>
            <input type="password" name="passwd" style="font-size:20px" required>
            </br>
            </br>
            </br>
            <font size = "6"><b>Email：</b></font>
            <input type="email" name="email" style="font-size:19px" required>
            </br>
            </br>
            </br>
            <font size = "6"><b>Tel：</b></font>
            <input type="text" name="tel" style="font-size:23px" required>
            </br>
            </br>
            </br>
            </br>
            <input type="submit">
        </form>

    </div>





<body>











</html>