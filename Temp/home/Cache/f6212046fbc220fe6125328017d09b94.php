<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
<script src="http://apps.bdimg.com/libs/zepto/1.1.3/zepto.min.js"></script>
<link rel="stylesheet" href="http://apps.bdimg.com/cloudaapi/res/css/crema.css">
<script type="text/javascript" name="baidu-tc-cerfication" data-appid="{appid}" src="http://apps.bdimg.com/cloudaapi/lightapp.js"></script>
</head>
<body>
     <a class="testLink" href="http://news.baidu.com">百度新闻</a>
</body>

<script>
        Blend.lightInit({
            ak:'xxxx',
            module:["blendui"]
        });

        document.addEventListener("blendready",function(){
            Blend.ui.layerInit("0",function(){
                $(".testLink").on("click",function(e){
                    alert(1);
                    e.preventDefault();
                });
            });
        });
    </script>
</html>