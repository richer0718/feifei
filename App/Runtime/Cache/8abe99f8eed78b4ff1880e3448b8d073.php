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
		$("#superform").submit(function(){
		
			var sum = Number($('#sum').val()); //3 显示 1个

			for(var i=0;i<sum;i++){
				var j = i+"账号";
				var k = i+"密码";
				var jv = $("input[name="+j+"]").val();
				var kv = $("input[name="+k+"]").val();
				if(jv=="" || kv==""){
					alert("请填写账号密码");
					return false;
				}
			}

			  
		});
		//新增 修改全部功能
		$('.superchange').click(function(){
			var changevalue = '';
			var sum = $('#sum').val();
			//id
			var changeid = $(this).attr("data");
			//值
			var inputname = "input[name='"+changeid+"']" ;
			
			if($(inputname).val()){
				changevalue = $('input[name='+changeid+']').val();
			}else{
				changevalue = $('select[name='+changeid+'] option:selected').val();
			}
			
			
			if(changevalue){
				var trueid = '';

				for(var i=0;i<sum;i++){
					trueid_input = 'input[name='+i+changeid+']';
					$(trueid_input).val(changevalue);
					
					trueid_select = 'select[name='+i+changeid+'] option[value="'+changevalue+'"]';
					$(trueid_select).attr("selected", true);
					
					
					
				}
			}
			
			
			
			
		})
		
		
	})
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
	<div id="content" class="white" style="width:4000px;" >
	
<form name="form1" method="post" id="superform" action="__URL__/getChangeResult/num/<?php echo ($_GET['num']); ?>" enctype="multipart/form-data" onSubmit="javascript:return checkform(this)">
<input type="hidden" name="sum" id="sum" value="<?php echo $len; ?>" />
  <div class="bloc" style="margin-top:0px;">
	    <div class="title"><input type="submit" value="提交" /></div>
	    <div class="content" style="width:100px;padding-right:0;padding-left:0;">
                    <table class="insert-tab"  style="width:100px;">
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
<!-- 新增 begin-->
<div class="bloc" style="margin-top:0px;">
    <div class="title"></div>
    <div class="content" style="width:180px;padding-left:0;">
                    <table class="insert-tab"  style="width:180px;">
                        <tbody>
							<tr>
								<th height="40" style="text-align:left;">修改全部</th>
							</tr>
							<?php if(is_array($reslist)): $k = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
									<td height="40">
										<?php switch($vo["type"]): case "0": ?><select  name="<?php echo $vo['bname'] ?>">
												<option value="1"  >是</option>
												<option value="0"  >否</option>
											</select><?php break;?>
										
										<?php case "1": ?><select name ="<?php echo $vo['bname'] ?>" >
												<?php foreach($vo['sname'] as $key => $value){ ?>
												<option   value="<?php echo $key; ?>" > <?php echo $value; ?></option>
												<?php } ?>
											</select><?php break;?>
										<?php case "3": ?><input type="hidden" name="<?php echo $vo['bname'] ?>" value="0" />
											<div style="height:40px;"></div><?php break;?>
										
										<?php default: ?><input type="text" name ="<?php $find = array('(',')'); echo str_replace($find,'',$vo['bname']) ?>"   <?php if($vo['bname'] == "采集坐标"){ ?>value="0/0"<?php }elseif($vo['bname']=="造兵上限" || $vo['bname']=="收割间隔(分)"){ ?>value="0"<?php } ?>   style="width:60px;"/><?php endswitch;?>
										<?php if($vo["type"] != '3'): ?><input type="button" value="修改" data ="<?php $find = array('(',')'); echo str_replace($find,'',$vo['bname']) ?>" class="superchange" /><?php endif; ?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
					</table>
                
    </div>
</div>

<!-- 新增end -->

<?php for($ii=0;$ii<$len;$ii++){ ?>
<div class="bloc" id="superlist" style="margin-top:0px;">
    <div class="title"></div>
    <div class="content" style="width:70px;padding-left:0;">
                    <table class="insert-tab"  style="width:60px;">
                        <tbody>
							<tr>
								<th height="40" style="text-align:left;">账号<?php echo $ii+1 ?></th>
							</tr>
							<?php if(is_array($reslist)): $k = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
									<td height="40">
										<?php switch($vo["type"]): case "0": ?><select  name="<?php echo $ii.$vo['bname'] ?>">
												<option value="1" <?php if($vo['value'][$ii] == '1'): ?>selected="selected"<?php endif; ?> >是</option>
												<option value="0"  <?php if($vo['value'][$ii] == '0'): ?>selected="selected"<?php endif; ?>>否</option>
											</select><?php break;?>
										
										<?php case "1": ?><select name ="<?php echo $ii.$vo['bname'] ?>" >
												<?php foreach($vo['sname'] as $key => $value){ ?>
												<option  <?php if($vo['value'][$ii] == $key ){?>selected="selected" <?php } ?>  value="<?php echo $key; ?>" > <?php echo $value; ?></option>
												<?php } ?>
											</select><?php break;?>
										<?php case "3": ?><input type="hidden" name="<?php echo $ii.$vo['bname'] ?>" value="0" />
											<div style="height:40px;"></div><?php break;?>
										
										<?php default: ?><input type="text" name ="<?php $find = array('(',')'); echo $ii.str_replace($find,'',$vo['bname']) ?>" value="<?php echo ($vo['value'][$ii]); ?>" style="width:60px;"/><?php endswitch;?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
					</table>
                
    </div>
</div>
<?php } ?>

</form>
      
</div>
</body>
    
</body>
</html>