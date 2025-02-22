<?php
header ( "Content-type: text/html; charset=utf-8" ); 
 class chkinput{
   var $name;
   var $pwd;
   var $yanzheng;

   function __construct($x,$y)
    {
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput()
   {
     include("../conn/conn.php");
     $sql=mysqli_query($conn,"select * from tb_admin where name='".$this->name."'");
     $info=mysqli_fetch_array($sql);
     if($info==false)
       {
        
          echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
          exit;
       }
      else
       {
          if($info['pwd']==$this->pwd){

            session_start();
            if(isset($_SESSION["anti_bot_verified"])) {
                if($_SESSION["anti_bot_verified"]) {
                  header("location:index.php");
                } else {
                    echo "<script language='javascript'>alert('验证未通过！');history.back();</script>";
                }
            }

               
               
            }
          else
           {
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }

      }    
   }
 }


    $obj=new chkinput(trim($_POST['name']),md5(trim($_POST['pwd'])));
    $obj->checkinput();

?>