
<?php
date_default_timezone_set('UTC');
$check="admin";
$name=$_POST["name"];
$pas=$_POST["pas"];
if(strlen($name) > 0 && strlen($pas) > 0){
    if($name === $check && $pas === $check ){
        echo "Đã đăng nhập đúng";
    }else{
        echo "Thông tin sai rồi ku";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            border: 2px solid black;
            padding: 50px;
            width: 400px;
            box-sizing: border-box;

        }
        div{
            padding: 10px 0px;
            overflow: auto;
        }
        span{
            width: 20%;
            float: left;
        }
        input{
            float: right;
            padding: 5px;
            width: 70%;
        }
        button{
            font-size: 15px;
            border: none;
            background: deepskyblue;
            border-radius: 5px;
            padding: 10px 30px;
        }
    </style>
</head>
<body>
<h2>Hôm nay là ngày: <?= date('Y-M-d h:m:s'); ?></h2>
<form action="" method="post">
    <h2 STYLE="text-align: center">Login</h2>
    <div>
        <span>ID: </span><input type="text" name="name">
    </div>
    <div>
        <span>PASS: </span><input type="password" name="pas"><br>
    </div>
   <div STYLE="text-align: center"><button type="submit">ấn đê</button></div>
</form>
</body>
</html>