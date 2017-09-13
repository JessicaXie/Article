<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31
 * Time: 12:35
 */
require_once ("..\connect.php");
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();

$updatesql = "update article set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id='$id'";
//echo $updatesql;
if(mysqli_query($con,$updatesql)){
    echo "<script>alert('修改成功');window.location.href='article.manage.php'</script>>";
}else{
    $error = mysqli_error($con);
    echo "<script>alert('发布失败')$error;window.location.href='article.modify.php'</script>>";
    exit();
}