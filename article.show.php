<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31
 * Time: 15:53
 */
//echo "<pre>";
require_once ('connect.php');
$id = intval($_GET['id']);
$selectsql = "select * from article where id=$id";
$query = mysqli_query($con,$selectsql);
if(isset($query)&&mysqli_num_rows($query)){
    $date = mysqli_fetch_assoc($query);
  //  var_dump($date);
}else{
    echo "这篇文章不存在";
    exit();
}


//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章发布系统</title>
    <link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <!-- start header -->
    <div id="header">
        <div id="logo">
            <h1><a href="#">php与mysql<sup></sup></a></h1>
            <h2></h2>
        </div>
        <div id="menu">
            <ul>
                <li class="active"><a href="#">文章</a></li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
        </div>
    </div>
    <!-- end header -->
</div>

<!-- start page -->
<div id="page">
    <!-- start content -->
    <div id="content">
        <div class="post">

            <h1 class="title"><!--文章标题放置到这里--><?php echo $date['title']?><span style="color:#ccc;font-size:14px;">　　作者：<!--作者放置到这里--><?php echo $date['author'];?></span></h1>
            <div class="entry">
                <!--文章内容放置到这里-->
                <?php echo $date['content']?>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- start sidebar -->
    <div id="sidebar">
        <ul>
            <li id="search">
                <h2><b class="text1">Search</b></h2>
                <form method="get" action="article.search.php">
                    <fieldset>
                        <input type="text" id="s" name="key" value="" />
                        <input type="submit" id="x" value="Search" />
                    </fieldset>
                </form>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
    <p id="legal"></p>
</div>
<!-- end footer -->
</body>
</html>

