<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="webThemez.com">
	<title>飞飞辅助</title>
	<link rel="favicon" href="../Public/assets/images/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="../Public/new/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/new/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/new/css/min.css"/>
	
</head>
<body>

	<div id="content" class="white">
<form name="form1" method="post" action="__URL__/checkLogin" enctype="multipart/form-data" onSubmit="javascript:return checkform(this)">

  <div class="bloc" style="margin-top:0px;">
    <div class="title">请登录</div>
    <div class="content">
                    <table class="insert-tab" width="100%">
                        <tbody>
							<tr>
                                <th height="40"><i class="require-red">*</i>用户名：</th>
                                <td height="40">
                                   <div class="input medium">
										<input name="username" type="text" id="username"  style="width:420px;"/>
									</div>
                                </td>
                            </tr>
                            
							<tr>
                                <th height="40"><i class="require-red">*</i>密码：</th>
                                <td height="40">
                                   <div class="input medium">
										<input name="password" type="password" id="password"  style="width:420px;"/>
									</div>
									
                                </td>
                            </tr>
							

                           <input name="regtime" type="hidden" value="<?php echo date('Y-m-d  H:i');?>" />
							<tr>
                                <th></th>
                                <td>
                                <div class="submit" style=" margin-top:5xp; margin-bottom:5px;">
                                    <input class="btn btn6" type="submit" value="提交" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn6 white" onClick="history.go(-1)" value="返回" type="button">
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