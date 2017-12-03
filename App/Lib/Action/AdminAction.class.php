 <?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends Action {
	
	//公共函数，不接受权限检查，写法 array('index');
	public $public_functions = array();
	
	
    public function index(){
		$this -> check();
		$model = M('admininfo');
		$map1['type'] = "产品介绍";
		$res = $model -> where($map1) -> find();
		$this -> assign('content1',$res['content']);
		
		$map2['type'] = "使用教程";
		$res2 = $model -> where($map2) -> find();
		$this -> assign('content2',$res2['content']);
		
		$map3['type'] = "辅助下载";
		$res3 = $model -> where($map3) -> find();
		$this -> assign('content3',$res3['content']);
		
		$map4['type'] = "购买正版";
		$res4 = $model -> where($map4) -> find();
		$this -> assign('content4',$res4['content']);
		
		$map5['type'] = "问题汇总";
		$res5 = $model -> where($map5) -> find();
		$this -> assign('content5',$res5['content']);
		
		$model_list = M('note');
		
		$list = $model_list -> order('username') -> select();
		
		$note_count = $model_list -> count();
		
		$model_user = M('userinfo');
		
		$user_count = $model_user -> count();
		
		
		$model_list2 = M('2note');
		
		$list2 = $model_list2 -> order('username') -> select();
		
		$note_count2 = $model_list2 -> count();
		
		$model_list3 = M('3note');
		
		$list3 = $model_list3 -> order('username') -> select();
		
		$note_count3 = $model_list3 -> count();
		
		
		
		
		$this -> assign('note_count',$note_count);
		
		
		$this -> assign('user_count',$user_count);
		
		$this -> assign('list',$list);
		
		
		$this -> assign('note_count2',$note_count2);
		
		$this -> assign('list2',$list2);
		
		
		$this -> assign('note_count3',$note_count3);
		
		$this -> assign('list3',$list3);
		
		
		
		$this -> display();
	}
	public function getUditor1(){
		$data['content'] = $_POST['editor'];
		
		$model = M('admininfo');
		
		$map['type'] = "产品介绍";
		
		$model -> where($map) -> save($data);
		
		$this -> success("修改成功");
	}
	
	public function getUditor2(){
		$data['content'] = $_POST['editor2'];
		
		$model = M('admininfo');
		
		$map['type'] = "使用教程";
		
		$model -> where($map) -> save($data);
		
		$this -> success("修改成功");
	}
	public function getUditor3(){
		$data['content'] = $_POST['editor3'];
		
		$model = M('admininfo');
		
		$map['type'] = "辅助下载";
		
		$model -> where($map) -> save($data);
		
		$this -> success("修改成功");
	}
	
	public function getUditor4(){
		$data['content'] = $_POST['editor4'];
		
		$model = M('admininfo');
		
		$map['type'] = "购买正版";
		
		$model -> where($map) -> save($data);
		
		$this -> success("修改成功");
	}
	
	public function getUditor5(){
		$data['content'] = $_POST['editor5'];
		
		$model = M('admininfo');
		
		$map['type'] = "问题汇总";
		
		$model -> where($map) -> save($data);
		
		$this -> success("修改成功");
	}
	public function deletelist(){
		$model = M('note');
		
		$map['id'] = $_GET['id'];
		
		$res = $model -> where($map) -> delete();
		
		if($res){
			$this -> success("删除成功");
		}else{
			$this -> error("删除失败");
		}
	}
	public function deletelist2(){
		$model = M('2note');
		
		$map['id'] = $_GET['id'];
		
		$res = $model -> where($map) -> delete();
		
		if($res){
			$this -> success("删除成功");
		}else{
			$this -> error("删除失败");
		}
	}
	
	public function deletelist3(){
		$model = M('3note');
		
		$map['id'] = $_GET['id'];
		
		$res = $model -> where($map) -> delete();
		
		if($res){
			$this -> success("删除成功");
		}else{
			$this -> error("删除失败");
		}
	}
	
	//检验是否登录
	public function check(){
		if(empty($_SESSION['adminusername'])){
			$this -> assign('jumpUrl','login');
			$this -> assign('waitSecond','2');
			$this -> error('您没有登录，请登录');
		}
	}
	
	public function login(){
		$this -> display();
	}
	public function checkLogin(){
		$model = M('adminuser');
		//var_dump($model -> select());exit;
		//c5db07c75a46bc552033790635dfa209
		$map['username'] = $_POST['username'];
		
		$map['password'] = md5($_POST['password']);
		
		$res = $model -> where($map) -> find();
		
		if($res){
			$_SESSION['adminusername'] = md5($_POST['password']);
			$this -> assign('jumpUrl','index');
			$this -> assign('waitSecond','2');
			$this -> success('登录成功');
		}else{
			$this -> error('登录失败');
		}
	}
	public function logOut(){
		$_SESSION['adminusername'] = '';
		$this -> assign('jumpUrl','login');
		$this -> assign('waitSecond','2');
		$this -> success('退出成功');
	}
	
	public function reglist(){
		$this -> check();
		
		
		if($_POST['zhucema']){
			$map['zhucema'] = $_POST['zhucema'];
		}
		
		$model = M('reglist');
		$order = 'daoqishijian asc';
		$res = $model -> where($map) -> order($order) -> select();
		
		//统计总体个数
		$count = $model -> where($map) -> count();
		$this -> assign('count',$count);
		
		//统计解绑个数
		$map['status'] = '0';
		$count_jiebang = $model -> where($map) -> count();
		$this -> assign('count_jiebang',$count_jiebang);
		
		$this -> assign('res',$res);
		$this -> display();
	}
	
	public function jiebang(){
		$this -> check();

		if($_POST['type'] == '冻结选中' || $_GET['type'] == 'dongjie'){
			//冻结选中的操作
			$model = M('reglist');
			
			if($_POST['dongjieidarray']){
				$map['id'] = array('in',$_POST['dongjieidarray']);
			}
			if($_GET['id']){
				$map['id'] = $_GET['id'];
			}
			
			
			$data['bh1'] = '1';
			$data['bh2'] = '1';
			$data['bh3'] = '1';
			$data['bh4'] = time();
			$data['dongjie_status'] = '0';
			$data['addtime'] = time();
			
			$res = $model -> where($map) -> save($data);
			if($res){
				$this -> success('冻结成功','__URL__/reglist');
			}else{
				$this -> error('错误操作');
			}
			
			
		}else{
			//解绑选中的操作
			$model = M('reglist');
			
			if($_POST['idarray']){
				$map['id'] = array('in',$_POST['idarray']);
			}
			if($_GET['id']){
				$map['id'] = $_GET['id'];
			}
			
			
			$data['bh1'] = '0';
			$data['bh2'] = '0';
			$data['bh3'] = '0';
			$data['bh4'] = '0';
			$data['status'] = '0';
			$data['addtime'] = time();
			
			$res = $model -> where($map) -> save($data);
			if($res){
				$this -> success('解绑成功','__URL__/reglist');
			}else{
				$this -> error('错误操作');
			}
		}
		
		
		
	}
	
	//通过链接上传代码
	public function uploadNumber(){
		$model = M('reglist');
		$data['bh1'] = $_GET['bh1'];
		$data['bh2'] = $_GET['bh2'];
		$data['bh3'] = $_GET['bh3'];
		$data['bh4'] = $_GET['bh4'];
		$data['youxi'] = $_GET['youxi'];
		$data['shuliang'] = $_GET['shuliang'];
		$data['zhucema'] = $_GET['zhucema'];
		$data['leixing'] = $_GET['leixing'];
		$data['daoqishijian'] = $_GET['daoqishijian'];
		$data['status'] = '1';
		$data['dongjie_status'] = '1';
		$data['addtime'] = time();
		//dump($data);exit;
		$map['zhucema'] = $_GET['zhucema'];
		$is_set = $model -> where($map) -> find();
		if($is_set){
			$model -> where($map) -> save($data);
			echo "success"; exit;
		}else{
			$res = $model -> add($data);
			if($res){
				echo "success";
			}else{
				echo "error";
			}
		}
		
		
		
	}
	
	
	//通过链接 删除代码
	public function deleteNumber(){
		$model = M('reglist');
		$map['zhucema'] = $_GET['zhucema'];
		$res = $model -> where($map) -> delete();
		if($res){
			echo "success";
		}else{
			echo "error";
		}
	}
	
	//通过链接获取代码
	public function getCode(){
		$model = M('reglist');
		$map['zhucema'] = $_GET['zhucema'];
		$map['youxi'] = $_GET['youxi'];
		$res = $model -> where($map) -> find();
		if($res){
			$newarray['bh1'] = $res['bh1'];
			$newarray['bh2'] = $res['bh2'];
			$newarray['bh3'] = $res['bh3'];
			$newarray['bh4'] = $res['bh4'];
			$newarray['youxi'] = $res['youxi'];
			$newarray['shuliang'] = $res['shuliang'];
			$newarray['zhucema'] = $res['zhucema'];
			$newarray['leixing'] = $res['leixing'];
			$newarray['daoqishijian'] = $res['daoqishijian'];
			
			echo implode(',', $newarray);
		}else{
			echo "error";
		}
	}
	
	public function changeurl(){
	    $this -> check();
	    $url = file_get_contents('url.txt');
	    $this -> assign('url',$url);
	    $this -> display();
	}
	public function changeUrlRes(){
	    $url = $_POST['url'];
	    file_put_contents('url.txt',$url);
	    $this -> success('修改成功','__URL__/changeurl');
	}
	
	
	
}