<?php
     function unhtml($content){
			 $content=str_replace("&","&amp;",$content);
			 $content=str_replace("<","&lt;",$content);
			 $content=str_replace(">","&gt;",$content);
			 $content=str_replace(" ","&nbsp;",$content);
			 $content=str_replace(chr(13),"<br>",$content);
 			 $content=str_replace("\\","\\\\",$content);
 			 $content=str_replace(chr(34),"&quot;",$content);
			 return $content;
	}
	
   function msubstr($str,$start,$len){   		 
	$strlen=$start+$len;				   	
	$tmpstr="";
	for($i=0;$i<$strlen;$i++){			   		
	if(ord(substr($str,$i,1))>0xa0){       		
 	   $tmpstr.=substr($str,$i,3);			   
	   $i+=2;								    
	}else{								   		
 	 $tmpstr.=substr($str,$i,1);}
	}
		return $tmpstr;					
	}
?>
