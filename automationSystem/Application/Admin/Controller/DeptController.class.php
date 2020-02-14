<?php
//命名空间声明
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//声明类并且继承父类
class DeptController extends CommonController{

	//add方法
	public function add(){
		//判断请求类型
		if(IS_POST){
			//处理表单提交
			//$post = I('post.');
			//写入数据
			$model = D('Dept');
			//数据对象创建
			$data = $model -> create();	//不传递参数则接收post数据
			//判断验证结果
			if(!$data){
				//提示用户验证失败
				//dump($model -> getError());die;
				$this -> error($model -> getError());exit;
			}
			//dump($data);die;
			$result = $model -> add($data);
			//判断返回值
			if($result){
				//成功
				$this -> success('添加成功',U('showList'),3);
			}else{
				//失败
				$this -> error('添加失败');
			}
		}else{
			//查询出顶级部门
			$model = M('Dept');
			$data = $model -> where('pid = 0') -> select();
			//展示数据
			$this -> assign('data',$data);
			//展示模版
			$this -> display();
		}
	}

	//showList
	public function showList(){
		//模型实例化
		$model = M('Dept');
		//查询
		$data = $model -> order('sort asc') -> select();
		$count=$model->count();
        $page=new \Think\Page($count,10);
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
		//二次遍历查询顶级部门
		foreach ($data as $key => $value) {
			if($value['pid'] > 0){
				//查询pid对应的部门信息
				$info = $model -> find($value['pid']);
				//只需要保留其中的name
				$data[$key]['deptname'] = $info['name'];
			}
		}
		//使用load方法载入文件
		load('@/tree');
		$data = getTree($data);
		//dump($data);die;
		//传递模版
		$this -> assign('data',$data);
		$this->assign('count',$count);
		$this->assign('show',$show);
		//展示模版
		$this -> display();
	}

	//edit
	public function edit(){
		if(IS_POST){
			//处理post请求
			$post = I('post.');
			//实例化
			$model = M('Dept');
			//保存操作
			$result = $model -> save($post);
			//判断结果成功与否
			if($result !== false){
				//修改成功
				$this -> success('修改成功',U('showList'),3);
			}else{
				//修改失败
				$this -> error('修改失败');
			}
		}else{
			//接收id
			$id = I('get.id');
			//实例化模型
			$model = M('Dept');
			//查询部门信息
			$data = $model -> find($id);
			//查询全部的部门信息，给下拉列表使用
			$info = $model -> where("id != $id") -> select();
			//变量分配
			$this -> assign('data',$data);
			$this -> assign('info',$info);
			//展示模版
			$this -> display();
		}
	}

	//del
	public function del(){
		//接收参数
		$id = I('get.id');
		//模型实例化
		$model = M('Dept');
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
	public function no(){
        //$this -> success('退出成功',U('login'),3);
	    $this->error('你没有权限！',U('Index/index'),3);
    }
}