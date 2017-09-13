<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31
 * Time: 10:52
 */
require_once ('..\connect.php');
//把传递进来的信息入库
if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
    echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>>";
    exit();
}
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();
$insertsql = "insert into article(title,author,description,content,dateline) value('$title','$author','$description','$content',$dateline)";

if(mysqli_query($con,$insertsql)){
    echo "<script>alert('成功！！！');window.location.href='article.add.php'</script>>";
}else{
    $error = mysqli_error($con);
    echo "<script>alert('发布失败')$error;window.location.href='article.add.php'</script>>";
    exit();
}