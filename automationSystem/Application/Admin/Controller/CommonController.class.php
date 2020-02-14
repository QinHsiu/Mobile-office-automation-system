<?php
//命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
//声明类并且继承父类
class CommonController extends Controller{

	//构造方法
	// public function __construct(){
	// 	//构造父类
	// 	parent::__construct();
	// 	echo '你好，世界';
	// }

	//ThinkPHP提供
	public function _initialize(){
		$id = session('id');
		//判断用户是否登录
		if(empty($id)){
			//没有登录，跳转到登录页面
			//$this -> error('请先登录...',U('Public/login'),3);exit;
			//编写javascript代码
			$url = U('Public/login');
			echo "<script>top.location.href='$url'</script>";exit;	
		}
		//RBAC部分
		$role_id = session('role_id');	//获取当前用户的角色id
		$rbac_role_auths = C('RBAC_ROLE_AUTHS');	//获取全部的用户组的权限
		$currRoleAuth = $rbac_role_auths[$role_id];	//获取到当前用户对应的权限

		//使用常量获取当前路由中的控制器名和方法名
		$controller = strtolower(CONTROLLER_NAME);
		$action = strtolower(ACTION_NAME);

		//判断权限是否具有
		if($role_id > 1){
			//当用户不是超级管理员的时候进行权限判断
			if(!in_array($controller . '/' . $action, $currRoleAuth) && !in_array($controller . '/*', $currRoleAuth)) {
                //用户没有权限
                if ($role_id == 2) {
                    $this->error('您没有权限', U('Index/home2'), 3);
                    exit;
                }else{
                    $this->error('您没有权限', U('Index/home3'), 3);
                    exit;
                }
            }
		}
	}
}