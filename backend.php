<?php include_once "base.php";?>
<?php

if(isset($_SESSION['admin'])){
    $user=$Admin->find(['acc'=>$_SESSION['admin']]);
    $mpr=unserialize($user['pr']);
}else{
    echo "請先登入";
    exit();
}

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>cake shop</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <iframe name="back" style="display:none;"></iframe>
    <div id="main">
        <div id="top">
            <a href="index.php">
                <img src="./icon/0416.jpg">
            </a>
            <img src="./icon/0417.jpg">
        </div>
        <div id="left" class="ct">
            <div style="min-height:400px;">
                <a href="?do=admin">管理權限設置</a>
                <?=(in_array(1,$mpr))?"<a href='?do=th'>商品分類與管理</a>":'';?>
                <?=(in_array(2,$mpr))?"<a href='?do=order'>訂單管理</a>":'';?>
                <?=(in_array(3,$mpr))?"<a href='?do=mem'>會員管理</a>":'';?>
                <?=(in_array(4,$mpr))?"<a href='?do=bot'>頁尾版權管理</a>":'';?>
                <?=(in_array(5,$mpr))?"<a href='?do=news'>最新消息管理</a>":'';?>
                <a href="javascript:location.href='frontend/logout.php'" style="color:#f00;" >登出</a>
            </div>
        </div>
        <div id="right">

            <?php
        $do=$_GET['do']??'admin';
        $file='backend/'.$do.".php";
        if(file_exists($file)){
                include $file;
        }else{
                include 'backend/admin.php';
        }

        ?>
        </div>
    </div>

</body>

</html>