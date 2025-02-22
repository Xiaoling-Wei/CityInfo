
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link href="anti-bot-verification/anti-bot-style.css" rel="stylesheet"/>
<script type="text/javascript" src="../admin/anti-bot-verification/anti-bot-js.js"></script>

<link href="../css/style.css" rel="stylesheet">
<style type="text/css">
<!--
body {
	background:url(images/logon_bg.png);
}
-->
</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script language="javascript">
	  function chkinput(form){
	
	    if(form.name.value==""){
		  alert("请输入用户名!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("请输入用户密码!");
		  form.pwd.select();
		  return(false);
		}
		
		return(true);
	  }
	</script>
<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
  <table width="545" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td height="114" background="images/logon_top.png">&nbsp;</td>
	</tr>
	<tr>
		<td height="500" align="center" valign="middle" background="images/logon_middle.png"><table width="83%" height="160"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="39%" height="30" align="right">管理员名称：</td>
            <td width="61%" align="left"><input name="name" type="text" id="name"></td>
          </tr>
          <tr>
            <td height="50" align="right">管理员密码：</td>
            <td align="left"><input name="pwd" type="password" id="pwd"></td>
          </tr>
		  <tr>
	  		<td height="50" align="right">验证：</td>
			<td align="letf"><div id="anti_bot_frame" class="anti-bot-frame-medium"></td>
		  </tr>
          <tr align="center" valign="top">
            <td height="80" colspan="2"><input name="imageField" type="image" src="images/btn1.gif" class="input1">
            &nbsp;
            <input name="imageField2" type="image" src="images/btn2.gif" onClick="form.reset();return false;" class="input1">            </td>
          </tr>
		
      </table></td>
	</tr>
</table>
</form>

</body>
<script>anti_bot_verification_ini("anti-bot-verification");</script>
</html>