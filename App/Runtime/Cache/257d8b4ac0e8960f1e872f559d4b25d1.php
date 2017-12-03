<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="webThemez.com">
	<title></title>
	<link rel="favicon" href="../Public/assets/images/favicon.png">
	<script src="../Public/admin/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Public/new/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/new/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/new/css/min.css"/>
	<script>

	</script>
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
<input type="hidden" name="sum" value="2" id="sum"/>
  <div class="bloc" style="margin-top:0px;">
    <div class="title">COK账号配置</div>
    <div class="content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="center">ID</th>
							<th class="center">配置</th>
							<th class="center">操作</th>
							
                        </tr>
						<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td align="center"><?php echo ($i); ?></td>
							<td align="center"><?php echo ($vo["list"]); ?></td>
							<td align="center">
								<a href="__URL__/deletelist/id/<?php echo ($vo["id"]); ?>"/>删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<tr>
							<td colspan="2">
						
								<form method="post" action="__URL__/selectList">
								<input type="submit" value="添加" style="margin-right:20px;"/>
								
								<input type="hidden" name="num" value="<?php echo ($number); ?>"/>
								<!-- 
								<?php if($mark == 'yes'): ?><input type="checkbox" name="select" />选择默认设置
								<a href="__URL__/setMysetting2">修改默认配置</a>
								<?php else: ?>
								<a href="__URL__/setMysetting">设置默认配置</a><?php endif; ?> -->
								<a>&nbsp;</a>
								</form>
								
							</td>
							<td>
								<input type="button" value="修改" onclick="window.location='__URL__/changeAll/num/<?php echo ($number); ?>'"/>
							</td>
						</tr>
                        </tbody></table>
                
    </div>
</div>
  
</div>
<script>
$(function(){

})
</script>
</body>
</html>