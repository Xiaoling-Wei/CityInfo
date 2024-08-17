<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet">
<script language="javascript">
	  function chkinput(form){
	    if(form.content.value==""){
		  alert("请输入查询关键字!");
		  form.content.select();
		  return false;
		}
	  }

    function scroll(){
      let div = document.getElementById("scrollCon");
      let row = div.insertRow(0);
      alert(div.toString());
    }

  function opengg(id){
    window.open("showgg.php?id="+id,"","width=700,height=296");
  }  

</script>


<table  width="240" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="31">&nbsp;<img src="Images/landian.gif" width="9" height="9"><strong>推荐企业广告信息</strong></td>
  </tr>
  <tr >
    <td valign="top"><table width="225"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="Images/leftD.jpg" height="215">
        <marquee  direction="up" behavior = 'alternate' height='180' vspace='15' onmouseover=this.stop() onmouseout=this.start() scrollamount="2" scrolldelay="10"> 
        <div id="rollCon" class="rollCon" height:215px;>
        <table width="190"  border="0" align="center" cellpadding="0" cellspacing="0">
              
        <tr>
              <td height="5" colspan="2"></td>
            </tr>
            <?php
				 include("conn/conn.php");
				 include("JS/function.php");
				 $gsql=mysqli_query($conn,"select * from tb_advertising where flag=1 order by id desc limit 0,1000");
				 $ginfo=mysqli_fetch_array($gsql);
				 if($ginfo==false){
			?>
            <tr>
              <td width="10" height="5">&nbsp;</td>
              <td height="20"><div align="left">暂无推荐企业广告信息!</div></td>
            </tr>
            <?php
			 }
			 else{
			   do{
			?>
            <tr>
              <td width="10" height="5"><div align="center">·</div></td>
              <td height="20"><div align="left"> <a href="javascript:opengg(<?php echo $ginfo['id'];?>);">
             <?php 
			 echo substr($ginfo['title'],0,30);
			 if(strlen($ginfo['title'])>30){
				echo "...";
			 }
		    ?>
              </a> </div></td>
            </tr>
            <?php
			 }while($ginfo=mysqli_fetch_array($gsql));
			 }
			?>
       </marquee> </table></div>  </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="31">&nbsp;<img src="Images/landian.gif" width="9" height="9"><strong>信息快速检索</strong></td>
  </tr>
<form name="form1" method="post" action="findinfo.php"> 
  <tr>
    <td height="103" align="center">
      <table width="225" height="103" border="0" background="Images/leftS.jpg" 
      cellspacing="0" cellpadding="0"><tr><td><table width="190" align="center">
        <tr>
          <td width="225" height="30">关键字：
            <input name="content" type="text" id="content" size="20"></td>
        </tr>
        <tr>
          <td height="26">条&nbsp;件：
            <select name="type">
              <option value="招聘信息">-招聘信息-</option>
              <option value="求职信息" selected>-求职信息-</option>
              <option value="培训信息">-培训信息-</option>
              <option value="家教信息">-家教信息-</option>
              <option value="房屋信息">-房屋信息-</option>
              <option value="车辆信息">-车辆信息-</option>
              <option value="求购信息">-求购信息-</option>
              <option value="出售信息">-出售信息-</option>
              <option value="招商引资">-招商引资-</option>
              <option value="公寓信息">-公寓信息-</option>
              <option value="寻人/物启示">-寻人/物启示-</option>
            </select>
</td>
        </tr>
        <tr>
          <td height="33" align="center"><input name="search" type="image" class="input1" id="search" src="Images/btn1.gif" width="67" height="23" border="0" onClick="return chkinput(form)">            </td>
        </tr></table></td></tr>
      </table>
    </td>
  </tr>
</form>
  <tr>
    <td height="31">&nbsp;<img src="Images/landian.gif" width="9" height="9"><strong>联系我们</strong></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="225" height="103" background="Images/leftS.jpg" border="0" cellspacing="0" cellpadding="0"><tr><td><table width="190" align="center">
      <tr>
        <td height="20">&nbsp;<span class="style1">52同城信息网</span></td>
      </tr>
      <tr>
        <td height="3" background="Images/tiao.gif"></td>
      </tr>
      <tr>
        <td height="16">联系地址：南岸区**街*号</td>
      </tr>
      <tr>
        <td height="16">联系电话：400-675-1066</td>
      </tr>
      <tr>
        <td height="16">邮政编码：130000</td>
      </tr></table></td></tr>
    </table></td>
  </tr>
</table>
