<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
 <head>
  <title>thinkphp + flash 上传头像组件</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="thinkphp头像上传预览，ThinkPHP剪切预览头像" />
  <meta name="Description" content="thinkphp头像上传组件是使用flash+thinkphp技术实现的，适用于与大多数的SNS、微博网站，qq空间等社交网站" />
  <style type="text/css" media="screen">
  html, body { height:100%; background-color: #ffffff;}
  #flashContent { width:100%; height:100%; }
  </style>
  
 <script type="text/javascript">
   function uploadevent(status){
	//alert(status);
        status += '';
     switch(status){
     case '1':
		var time = new Date().getTime();
		alert('相片上传成功') ;
		
	break;
     break;
     case '-1':
	  window.location.reload();
     break;
     default:
     window.location.reload();
    } 
   }
  </script>
 </head>
 <body>
  <div id="altContent">

<input  id="username" type="hidden" value="20130101232565" />

<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="650" HEIGHT="450" id="myMovieName">
<PARAM NAME=movie VALUE="../Public/flash/avatar.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>
<param name="flashvars" value="imgUrl=../Public/flash/default.jpg&uploadUrl=__URL__/upfile&uploadSrc=false" />
<EMBED src="../Public/flash/avatar.swf"  quality=high  bgcolor=#FFFFFF  WIDTH="650"  HEIGHT="450"  wmode="transparent"  flashVars="imgUrl=../Public/flash/default.jpg&uploadUrl=__URL__/upfile.php&uploadSrc=false"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
 

  </div>

  <div id="avatar_priview"></div>

</body>
</html>