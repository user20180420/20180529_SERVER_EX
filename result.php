<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連結資料庫
include("connfile/mysql_connect.inc.php");
?>
<?php //抓取所有資料
 $sql = "SELECT * FROM  data order by id ASC";
 $sql_result = mysql_query ($sql);
 $info = mysql_fetch_array($sql_result);
  ?>
<title>結果</title>
</head>

<body>

<table width="100%" border="0">
  <tr>
    <td>編號</td>
    <td>學校</td>
    <td>學院</td>
    <td>系所</td>
    <td>姓名</td>
    <td>TEL</td>
    <td>E-MAIL</td>
    <td>地址</td>
    <td>個人網址</td>
  </tr>
   <?php do { ?>
  <tr>
    <td><?php echo $info["id"];?></td>
    <td><?php echo $info["school"];?></td>
    <td><?php echo $info["college"];?></td>
    <td><?php echo $info["institute"];?></td>
    <td><?php echo $info["name"];?></td>
    <td><?php echo $info["tel"];?></td>
    <td><?php echo $info["email"];?></td>
    <td><?php echo $info["address"];?></td>
    <td><?php echo $info["website"];?></td>
  </tr>
  <?php } while ($info = mysql_fetch_assoc($sql_result)); ?>
</table>
<input type ="button" onClick="location.href='index.html'" value="回首頁">

</body>
</html>