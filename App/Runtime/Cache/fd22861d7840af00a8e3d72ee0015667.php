<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="webThemez.com">
	<title></title>
	<link rel="favicon" href="../Public/assets/images/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="../Public/new/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/new/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/new/css/min.css"/>
	
</head>
<body>
<div style="height:30px;line-height:30px;width:100%;">
	<?php if(empty($username)): ?><a style="float:right;font-size:18px;padding-right:100px;" href="__ROOT__/index.php/Index/findpassword">|找回密码</a>
	<a style="float:right;font-size:18px;" href="__ROOT__/index.php/Index/reg">|注册</a>
	<a style="float:right;font-size:18px;" href="__ROOT__/index.php/Index/login">登录</a>
	<?php else: ?>
	<a style="float:right;font-size:18px;padding-right:150px;" href="__ROOT__/index.php/Index/userCenter">个人中心</a>
	<a style="float:right;font-size:18px;padding-right:30px;" href="__ROOT__/index.php/Index/logOut">退出登录</a>
	<a style="float:right;font-size:18px;padding-right:30px;"><?php echo ($username); ?>，您好</a><?php endif; ?>
</div>
	<div id="content" class="white">
<form name="form1" method="post" action="__URL__/getResult" enctype="multipart/form-data" onSubmit="javascript:return checkform(this)">

  <div class="bloc" style="margin-top:0px;">
    <div class="title">用户中心</div>
    <div class="content">
                    <table class="insert-tab" width="100%">
                        <tbody>
							

							<tr>
                                <th></th>
                                <td>
                                <div class="submit" style=" margin-top:5xp; margin-bottom:5px;">
                                    <input class="btn btn6" type="button" value="修改密码" onClick="window.location='__URL__/changePass'"/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn6" type="button" value="COK账号配置" onClick="window.location='__URL__/select'" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input style="width:143px;" class="btn btn6" type="button" value="乱世王者账号配置" onClick="window.location='__ROOT__/index.php/Index2/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;<input style="width:166px;" class="btn btn6" type="button" value="阿瓦隆之王账号配置" onClick="window.location='__ROOT__/index.php/Index3/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									
									<!--
									<input style="width:166px;" class="btn btn6" type="button" value="预留1" onClick="window.location='__ROOT__/index.php/Index4/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									-->
									<!--
									<input style="width:166px;" class="btn btn6" type="button" value="预留2" onClick="window.location='__ROOT__/index.php/Index5/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									-->
									<!--
									<input style="width:166px;" class="btn btn6" type="button" value="预留3" onClick="window.location='__ROOT__/index.php/Index6/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									-->
									<!--
									<input style="width:166px;" class="btn btn6" type="button" value="预留4" onClick="window.location='__ROOT__/index.php/Index7/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									-->
									
									<!--
									<input style="width:166px;" class="btn btn6" type="button" value="预留5" onClick="window.location='__ROOT__/index.php/Index8/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									-->
									
									<!--
									<input style="width:166px;" class="btn btn6" type="button" value="预留6" onClick="window.location='__ROOT__/index.php/Index9/select'" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									-->
									
									
									<input class="btn btn6 white" onClick="history.go(-1)" value="返回" type="button">
                                </div>
                                </td>
                            </tr>
                        </tbody></table>
                
    </div>
</div>

</form>      
</div>
</body>
    
</body>
</html>