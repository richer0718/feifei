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
		$(function(){
			var sum = Number($('#sum').val());
			if(sum > 1){
				for(var i=2;i<= sum;i++){
				if(i == 2){
					var ml = 0;
				}else{
					var ml = 7;
				}
					$('#superdiv').append("<input class='btn' type='button'  style='margin-left:"+ml+"px' value='"+i+"号设备' onclick='addf("+i+")'/>");
				}
			}
			
		
			$('#add').click(function(){
				var ii = Number($('#sum').val());
				ii1= Number(ii)+1;
				if(ii1 == 2){
					var ml = 0;
				}else{
					var ml = 7;
				}
				$('#superdiv').append("<input class='btn' type='button'  style='margin-left:"+ml+"px' value='"+ii1+"号设备' onclick='addf("+ii1+")'/>");
				$('#sum').val(ii1);
			})

			
			
		})
		function addf(i){
				var url = "__URL__/ourList/num/"+i;
				window.location.href=url;
			}
	</script>
	<style>
		#super{
			display:none;
		}
		.btn{
			width:100px;
		}

	</style>
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
<input type="hidden" name="sum" value="<?php echo ($number); ?>" id="sum"/>

  <div class="bloc" style="margin-top:0px;">
    <div class="title">COK账号配置</div>
    <div class="content">
                    <table class="insert-tab" width="100%">
                        <tbody>
							

							<tr>
                                <th></th>
                                <td>
                                <div  class="submit" style=" margin-top:5xp; margin-bottom:5px;">
									<div>
									 

									</div>
									<div style="width:550px;" id="superdiv">
										<input class="btn" type="button" value="1号设备" onclick="addf(1)" style="margin-left:7px;">
										
									</div>
                                   
									<input class=" btn6 white" type="button" id="add" value="增加"/>
									<input class=" btn6 white" onClick="history.go(-1)" value="返回" type="button">
                                </div>
                                </td>
                            </tr>
                        </tbody></table>
                
    </div>
</div>
  
</div>

</body>
</html>