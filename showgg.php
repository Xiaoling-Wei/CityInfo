<?php
include("conn/conn.php");
include("JS/function.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告信息</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<table width="690" border="0" cellspacing="0" cellpadding="0">
  <tr height="20">
    <td background="Images/default_t.jpg"></td>
  </tr>
  <tr>
    <td valign="top" background="Images/default_m.jpg"><br>
      <br>
      <table width="530"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFA200">
      <?php
		     $id=$_GET['id'];
			 $sql=mysqli_query($conn,"select * from tb_advertising where id='".$id."'");
			 $info=mysqli_fetch_array($sql);
		   ?>
      <tr>
        <td width="72" height="35" bgcolor="#FFFFFF"><div align="center">广告主题：</div></td>
        <td width="256" height="35" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo unhtml($info['title']);?></div></td>
        <td width="73" height="35" bgcolor="#FFFFFF"><div align="center">发布时间：</div></td>
        <td width="134" height="35" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info['fdate'];?></div></td>
      </tr>
      <tr>
        <td height="125" bgcolor="#FFFFFF"><div align="center">广告内容：</div></td>
        <td colspan="3" valign="top" bgcolor="#FFFFFF"><div align="left">
          <p><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($info['content']);?></p>
          </div></td>
      </tr>
    </table><br>
      <br></td>
  </tr>
  <tr height="27">
    <td background="Images/default_e.jpg"></td>
  </tr>
</table>

</body>
</html>
