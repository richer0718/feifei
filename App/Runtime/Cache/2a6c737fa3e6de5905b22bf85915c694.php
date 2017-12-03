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
	<style>
		#content table{
			width:230px;
		}
		.bloc{
			float:left;
			margin-top:0px;
		}
	</style>
	<script runat="server">
	$(function(){

		
		
		$('#add').click(function(){
			var sum = Number($('#sum').val());
			if(sum > 5){
				$('.white').css({width:"4200px"});
			}
			if(sum > 50){
				$('.white').css({width:"8200px"});
			}
			
			if(sum < 101){
				if(sum == 2){
					var but = "<input type='button' value='删除'  onclick='del()'/>";
				}else{
					var but ="";
				}
				$('#superdiv').before("<div class='bloc' id='"+sum+"superlist' style='margin-top:0px;'> <div class='title'>"+but+"</div><div class='content' style='width:70px;padding-left:0;'><table class='insert-tab'  style='width:60px;'> <tbody><tr><th height='40' style='text-align:left;'>账号"+sum+"</th></tr><?php if(is_array($reslist)): $k = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr><td height='40'><?php switch($vo["type"]): case "0": ?><select  name='"+sum+"-<?php echo ($k); ?>'><option value='1' <?php if($vo['value'] == '1'){ ?>selected='selected'<?php } ?> >是</option><option value='0'  <?php if($vo['value'] == '0'){ ?>selected='selected'<?php } ?>>否</option></select><?php break; case "1": ?><select style='width:95px;' name='"+sum+"-<?php echo ($k); ?>' ><?php if(is_array($vo["sname"])): $i = 0; $__LIST__ = $vo["sname"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value='<?php echo ($i-1); ?>' <?php if($i-1 == $vo['value']){ ?>selected='selected'<?php } ?> ><?php echo ($vol); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><?php break; case "3": ?><input type='hidden' name='"+sum+"-<?php echo ($k); ?>' value='0' /><div style='height:40px;'></div><?php break; default: ?><input type='text' <?php if($vo['value']){ ?>value='<?php echo $vo['value']; ?>'<?php }elseif($vo['bname'] == "采集坐标"){ ?>value='0/0'<?php }elseif($vo['bname']=="造兵上限" || $vo['bname']=="收割间隔(分)"){ ?>value='0'<?php } ?> name='"+sum+"-<?php echo ($k); ?>' style='width:60px;'/><?php endswitch;?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div>");
				sum = Number(sum)+1;
				$('#sum').val(sum);
			}else{
				alert("只可以添加100个")
			}
			
		})

		$("#superform").submit(function(){
		
			var sum = Number($('#sum').val()); //3 显示 1个

			for(var i=1;i<sum;i++){
				var j = i+"2";
				var k = i+"3";
				var jv = $("input[name="+j+"]").val();
				var kv = $("input[name="+k+"]").val();
				if(jv=="" || kv==""){
					alert("请填写账号密码");
					return false;
				}
			}

			  
		});
		
	})
	function del(){
				var sum = Number($('#sum').val());

				sum = Number(sum)-1;
				$('#sum').val(sum);
				var arr = sum+"superlist";
				var my = document.getElementById(arr);
				
				
				my.parentNode.removeChild(my);
			}
	
	

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
	<div id="content" class="white"  >
	
<form name="form1" id="superform" method="post" action="__URL__/getListResult/num/<?php echo ($number); ?>" enctype="multipart/form-data" >
<input type="hidden" name="sum" value="2" id="sum"/>
  <div class="bloc" style="margin-top:0px;">
    <div class="title"><input type="button" value="增加账号" id="add"/></div>
    <div class="content" style="width:110px;padding-right:0;padding-left:0;">
                    <table class="insert-tab"  style="width:110px;">
                        <tbody>
							<tr>
								<th height="40" style="text-align:left;">选项</th>
							</tr>
							<?php if(is_array($reslist)): $i = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									
									<td height="40"><?php echo ($vo["bname"]); ?></td>
									
									
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
					</table>
                
    </div>
</div>
<div class="bloc" id="superlist" style="margin-top:0px;">
    <div class="title"><input type="submit" value="提交" /></div>
    <div class="content" style="width:70px;padding-left:0;">
                    <table class="insert-tab"  style="width:60px;">
                        <tbody>
							<tr>
								<th height="40" style="text-align:left;">账号1</th>
							</tr>
							<?php if(is_array($reslist)): $k = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
									<td height="40">
										<?php switch($vo["type"]): case "0": ?><select  name="<?php echo "1".$k ?>">
												<option value="1" <?php if($vo["value"] == '1'): ?>selected="selected"<?php endif; ?> >是</option>
												<option value="0"  <?php if($vo["value"] == '0'): ?>selected="selected"<?php endif; ?>>否</option>
											</select><?php break;?>
										<?php case "1": ?><select style="width:95px;" name="<?php echo "1".$k ?>" >
												<?php if(is_array($vo["sname"])): $i = 0; $__LIST__ = $vo["sname"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($i-1); ?>" <?php if($i-1 == $vo['value']): ?>selected="selected"<?php endif; ?> ><?php echo ($vol); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select><?php break;?>
										<?php case "3": ?><input type="hidden" name="<?php echo "1".$k ?>" value="0" />
											<div style="height:40px;"></div><?php break;?>
										<?php default: ?><input type="text" <?php if($vo['value']){ ?>value="<?php echo $vo['value']; ?>"<?php }elseif($vo['bname'] == "采集坐标"){ ?>value="0/0"<?php }elseif($vo['bname']=="造兵上限" || $vo['bname']=="收割间隔(分)"){ ?>value="0"<?php } ?> name="<?php echo "1".$k ?>" style="width:60px;"/><?php endswitch;?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
					</table>
                
    </div>
</div>
<div id="superdiv"></div>

</form>
      
</div>
</body>
<script>

</script>
</html>