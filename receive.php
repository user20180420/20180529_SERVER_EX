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

<?php
if(isset($_POST["Submit"])) {

	//執行新增的動作
		$query_insert = "INSERT INTO `data` (`school`, `college`, `institute`, `name`,`tel`, `email`, `address`, `website`) VALUES (";
		$query_insert .= "'".$_POST["school"]."',";
		$query_insert .= "'".$_POST["college"]."',";
		$query_insert .= "'".$_POST["institute"]."',";
		$query_insert .= "'".$_POST["name"]."',";
		$query_insert .= "'".$_POST["tel"]."',";
		$query_insert .= "'".$_POST["email"]."',";
		$query_insert .= "'".$_POST["address"]."',";
		$query_insert .= "'".$_POST["website"]."')";
		mysql_query($query_insert);
		
		echo '<script>alert("您已成功新增資料！");</script>';
		echo '<script>location.href="result.php";</script>';
	
}
?>
<title>個人名片</title> 
</head> 

<body>
<form action="receive.php" method="POST" >
<table width="289" border="1">
  <tr>
    <td width="279"><p align="center"> <b><input type="hidden" name="school" id="school" value="<?php echo $_POST["school"];?>" /><?php echo $_POST["school"];?>
          
    </b><br />
    <strong><input type="hidden" name="college" id="college" value="<?php echo $_POST["college"];?>" /><?php echo $_POST["college"];?> </strong><b>
    </b></p>
      <table width="278" border="1">
        <tr>
          <td width="268"><p align="center"><strong><input type="hidden" name="institute" id="institute" value="<?php echo $_POST["institute"];?>" /><?php echo $_POST["institute"];?></strong><b>
          </b></p></td>
        </tr>
        <tr>
          <td><p align="center"><strong>姓名：<input type="hidden" name="name" id="name" value="<?php echo $_POST["name"];?>" /><?php echo $_POST["name"];?></strong><b>
          </b></p></td>
        </tr>
        <tr>
          <td><p align="center"><b>TEL：<input type="hidden" name="tel" id="tel" value="<?php echo $_POST["tel"];?>" /><?php echo $_POST["tel"];?></b><b>
  
          </b></p></td>
        </tr>
        <tr>
          <td><p align="center"><b>E-MAIL:<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"];?>" /><?php echo $_POST["email"];?></b><b>
           
          </b></p></td>
        </tr>
        <tr>
          <td><b>地址:<input type="hidden" name="address" id="address" value="<?php echo $_POST["address"];?>" /><?php echo $_POST["address"];?></b><b>
          </b></td>
        </tr>
      </table>
    <p align="right"><strong><input type="hidden" name="website" id="website" value="<?php echo $_POST["website"];?>" /><?php echo $_POST["website"];?></strong><b>
    </b></p></td>
  </tr>
</table>

<input name="Submit" type="submit" value="確定送出">
<input type ="button" onclick="history.back()" value="回上一頁">

</form>

</body>
</html>