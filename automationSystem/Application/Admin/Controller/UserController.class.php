<?php
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
//use Admin\CommonController;
//声明类继承父类
class UserController extends CommonController{

	//add方法
	public function add(){
		//判断请求类型
		if(IS_POST){
			//处理表单提交
			$model = M('User');
			//创建数据对象
			$data = $model -> create();
			//添加时间字段
			$data['addtime'] = time();
			//保存数据表
			$result = $model -> add($data);
			//判断是否保存成功
			if($result){
				//成功
				$this -> success('添加成功！',U('showList'),3);
			}else{
				//失败
				$this -> error('添加失败！');
			}
		}else{
			//查询部门信息
			$data = M('Dept') -> field('id,name') -> select();
			//分配到模版
			$this -> assign('data',$data);
			//展示模版
			$this -> display();
		}
	}

	//showList
	public function showList(){
		//模型实例化
		$model = M('User');
		//分页第一步：查询总的记录数
        //$model1=D('User');
        //$model1->co
		$count = $model->count();
		//分页第二步：实例化分页类，传递参数
		$page = new \Think\Page($count,9);	//每页显示1个
		//分页第三步：可选步骤，定义提示文字
		$page -> rollPage = 5;
		$page -> lastSuffix = false;
		$page -> setConfig('prev','上一页');
		$page -> setConfig('next','下一页');
		$page -> setConfig('last','末页');
		$page -> setConfig('first','首页');
		//分页第四步：使用show方法生成url
		$show = $page -> show();
		//分页第五步：展示数据
		$data = $model -> limit($page -> firstRow,$page -> listRows) -> select();
		//分页第六步：传递给模版
        $this->assign('page',$page);
		$this -> assign('data',$data);
		$this -> assign('show',$show);
		$this -> assign('count',$count);
		//分页第七步：展示模版
		$this -> display();
	}

	//charts方法
	public function charts(){
		//select t2.name as deptname,count(*) as count from sp_user as t1,sp_dept as t2 where t1.dept_id = t2.id group by deptname;
		$model = M();
		//连贯操作
		$data = $model -> field('t2.name as deptname,count(*) as count') -> table('sp_user as t1,sp_dept as t2') -> where('t1.dept_id = t2.id') -> group('deptname') -> select();
		//如果当前使用的php版本是5.6之后的版本，则可以直接将data二维数组assign，不需要任何处理；但是当前的php是5.5，所以需要进行字符串拼接
		$str = '[';
		//循环遍历字符串
		foreach ($data as $key => $value) {
			$str .= "['" . $value['deptname'] . "'," . $value['count'] . "],";
		}
		//去除最后的逗号
		$str = rtrim($str,',') . ']';
		//[['总裁办',1],['程序部',2],['管理部',2],['财务部',1],['运营部',1]]
		//传递给模版
		$this -> assign('str',$str);
		//展示模版
		$this -> display();
	}
    //del
    public function del(){
        //接收参数
        $id = I('get.id');
        //模型实例化
        $model = M('User');
        //删除
        $result = $model -> delete($id);
        //判断结果
        if($result){
            //删除成功
            $this -> success('删除成功！');
        }else{
            //删除失败
            $this -> error('删除失败！');
        }
    }

    //showContent方法
    public function showContent(){
        //接收id
        $id = I('get.id');
       // dump($id);
        //查询数据
        $data = M('User') -> find($id);
        //dump($data);die;
        //输出内容，并且还原被转移的字符
        echo '昵称：';
        echo htmlspecialchars_decode($data['nickname']);
        echo"<br/>";
        echo '性别：';
        echo htmlspecialchars_decode($data['sex']);
        echo"<br/>";
        echo '所属部门：';
        echo htmlspecialchars_decode($data['dept_id']);
        echo "<br/>";
        echo '电话：';
        echo htmlspecialchars_decode($data['tel']);
        echo"<br/>";
        //print_r('\n');
       // echo '\n';
        echo '邮箱：';
        echo htmlspecialchars_decode($data['email']);

    }
    public function edit()
    {
        if(IS_POST){
            //处理post请求
            $post = I('post.');
            //dump($post['password']);
            //实例化
            $model = M('User');
            //dump($model->data());
            $username=session("username");
            $data['password']=$_REQUEST["password"];
            ///保存操作
            $result=$model->create($data);
            //$result = $model -> save($post);
            //判断结果成功与否
            if($result !== false){
                $Model = $model->where(array("username"=>$username))->save($data);
                //修改成功
                $this -> success('修改成功',U('Public/logout'),3);
            }else{
                //修改失败
                $this -> error('修改失败');
            }
        }else{
            //接收id
            $id = I('get.id');
            //实例化模型
            $model = M('User');
            $data = $model -> find($id);
            //变量分配
            $this -> assign('data',$data);
            //展示模版
            $this -> display();
        }
    }

}