<html>

<head>
    <title>用戶資料</title>
</head>

<body bgcolor = "#fbfeec">
   <?php
        $userName = $_POST["userName"];
        $passwd = $_POST["passwd"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];

        
        echo "<h1>用戶資料</h1>";
        echo "<b>姓名：</b>".$userName." 先生/小姐</br>";
        echo "<b>密碼：</b>".$passwd."</br>";
        echo "<b>Email：</b>".$email."</br>";
        echo "<b>電話號碼：</b>".$tel."</br>";
   
   ?>





<body>











</html>