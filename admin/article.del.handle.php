<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31
 * Time: 13:12
 */
require_once ('../connect.php');
$id = $_GET['id'];
$deletesql = "delete from article where id=$id";
if(mysqli_query($con,$deletesql)){
    echo "<script>alert('删除成功');window.location.href='article.manage.php';</script>";
}else{
    $error = mysqli_error($con);
    echo "<script>alert('删除失败')$error;window.location.href='article.manage.php'</script>";
    exit();
}