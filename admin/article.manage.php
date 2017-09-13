<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31
 * Time: 14:02
 */
require_once ('../connect.php');
$selectsql = "select * from article order by description desc";
$query = mysqli_query($con,$selectsql);
//echo"<pre>";
//var_dump($query);
if($query&&mysqli_num_rows($query)){
    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;

    }
   // var_dump($data);
}else{
    $data = array();
}
//exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章管理</title>
    <style type="text/css">
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
    <tr>
        <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
    </tr>
    <tr>
        <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="article.add.php">发布文章</a></p>
            <p><a href="article.manage.php">管理文章</a></p></td>
        <td width="837" valign="top" bgcolor="#FFFFFF"><table width="743" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
                <tr>
                    <td colspan="3" align="center" bgcolor="#FFFFFF">文章管理列表</td>
                </tr>
                <tr>
                    <td width="37" bgcolor="#FFFFFF">编号</td>
                    <td width="572" bgcolor="#FFFFFF">标题</td>
                    <td width="82" bgcolor="#FFFFFF">操作</td>
                </tr>
                <?php
                if(!empty($data)){
                    foreach($data as $value){
                        ?>
                        <tr>
                            <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
                            <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
                            <td bgcolor="#FFFFFF"><a href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="article.modify.php?id=<?php echo $value['id']?>">修改</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table></td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
    </tr>
</table>
</body>
</html>




