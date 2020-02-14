<?php
//命名空间声明
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//声明类并且继承父类
class PublicController extends Controller{

	//登录页面展示
	public function login(){
		//展示模版
		$this -> display();
		//获取模版内容
		//$str = $this -> fetch();
		//dump打印
		//dump($str);
		//echo $str;
	}

	//captcha方法
	public function captcha(){
		//配置
		$cfg = array(
				'fontSize'  =>  12,              // 验证码字体大小(px)
		        'useCurve'  =>  false,            // 是否画混淆曲线
		        'useNoise'  =>  false,            // 是否添加杂点	
		        'length'    =>  4,               // 验证码位数
		        'imageH'	=>	38,
		        'imageW'	=>	90,	
		        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
			);
		//实例化验证码类
		$verify = new \Think\Verify($cfg);
		//输出验证码
		$verify -> entry();
	}

	//checkLogin
	public function checkLogin(){
		//接收数据
		$post = I('post.');
		//验证验证码（不需要传参）
		$verify = new \Think\Verify();
		//验证
		$result = $verify -> check($post['captcha']);
		//判断验证码是否正确
		if($result){
			//验证码正确，继续处理用户名和密码
			$model = M('User');
			//删除验证码元素
			unset($post['captcha']);
			//查询
			$data = $model -> where($post) -> find();
			//判断是否存在用户
			if($data){
				//存在用户，用户信息持久化保存到session中，跳转到后台首页
				session('id',$data['id']);
				//session('password',$data['password']);
				session('username',$data['username']);
				session('role_id',$data['role_id']);
				//跳转
                if(session('role_id')==1) {
                    $this->success('登录成功@~@', U('Index/index'), 3);
                }else if(session('role_id')==2){
                    $this->success('登录成功@~@', U('Index/index2'), 3);
                }else{
                    $this->success('登录成功@~@', U('Index/index3'), 3);

                }
			}else{
				//不存在
				$this -> error('用户名或密码错误..');
			}
		}else{
			//验证码不正确
			$this -> error('您输出的验证码错误..');
		}
	}

	//退出方法
	public function logout(){
		//清除session
		session(null);
		//跳转到登录页面
		$this -> success('退出成功',U('Home/Index/index'),3);
	}
}