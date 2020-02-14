<?php
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;

//声明类并且继承父类
class KnowledgeController extends CommonController{

	//add方法
	public function add(){
		//请求类型判断
		if(IS_POST){
			//如果是post 则处理请求
			$post = I('post.');
			//实例化自定义模型
			$model = D('Knowledge');
			//数据保存方法
			$result = $model -> addData($post,$_FILES['thumb']);
			//判断结果
			if($result){
				//成功
				$this -> success('添加成功！',U('showList'),3);
			}else{
				//失败
				$this -> error('添加失败！');
			}
		}else{
			//展示模版
			$this -> display();
		}
	}

	//showList方法
	public function showList(){
		//获取数据
		//$data = M('Knowledge') -> select();
		$count=M('Knowledge')->count();
		$page=new \Think\Page($count,10);
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
        //分页第五步：展示数据
        $data = M('Knowledge') -> limit($page -> firstRow,$page -> listRows) -> select();
		//传递给模版
		$this -> assign('data',$data);
		$this->assign('count',$count);
		$this->assign('page',$page);
		$this->assign('show',$show);
		//展示模版	
		$this -> display();
	}

	//download方法
	public function download(){
		//获取id
		$id = I("get.id");
		//查询数据信息
		$data = M('Knowledge') -> find($id);
		//下载代码
		$file = WORKING_PATH . $data['picture'];
		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header("Content-Length: ". filesize($file));
		readfile($file);
	}
    public function del(){
        //接收参数
        $id = I('get.id');
        //模型实例化
        $model = M('Knowledge');
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
    public function edit(){
        if(IS_POST){
            //处理post请求
            $post = I('post.');
            //实例化
            $model = M('Knowledge');
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
            $model = M('Knowledge');
            //查询知识信息
            $data = $model -> find($id);
            //查询全部的知识信息，给下拉列表使用
            $info = $model -> where("id != $id") -> select();
            //变量分配
            $this -> assign('data',$data);
            $this -> assign('info',$info);
            //展示模版
            $this -> display();
        }
    }
}