<?php
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
//声明并且继承父类
class EmailController extends CommonController{

	//send方法，展示模版+数据保存
	public function send(){
		//判断请求类型
		if(IS_POST){
			//处理数据
			//接收数据
			$post = I('post.');
			//实例化自定义模型
			$model = D('Email');
			//调用具体类中方法实现数据的保存
			$result = $model -> addData($post,$_FILES['file']);
			//判断结果
			if($result){
				//成功
				$this -> success('邮件发送成功！',U('sendBox'),3);
			}else{
				//失败
				$this -> error('邮件发送失败！');
			}
		}else{
			//展示模版
			//查询收件人信息
			$data = M('User') -> field('id,truename') -> where("id != " . session('id')) ->select();
			//传递数据给模版文件
			$this -> assign('data',$data);
			//展示模版
			$this -> display();
		}
	}

	//sendBox方法
	public function sendBox(){
		//查询当前用户已经发送的邮件
		//select t1.*,t2.truename as truename from sp_email as t1 left join sp_user as t2 on t1.to_id = t2.id where t1.from_id = 当前用户的id;
        $count=M('Email')->count();
        $page = new \Think\Page($count,10);	//每页显示1个
        //分页第三步：可选步骤，定义提示文字
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
        $data = M("Email") -> field('t1.*,t2.truename as truename') -> alias('t1') -> join('left join sp_user as t2 on t1.to_id = t2.id') -> where('t1.from_id = ' . session('id')) -> select();
		//将数据传递给模版
		$this -> assign('data',$data);
		$this->assign('show',$show);
		$this->assign('count',$count);
		//展示模版
		$this -> display();
	}

	//download
	public function download(){
		//接收id
		$id = I('get.id');
		//查询信息
		$data = M('Email') -> find($id);
		//下载代码
		$file = WORKING_PATH . $data['file'];
		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header("Content-Length: ". filesize($file));
		readfile($file);
	}

	//空操作方法
	public function _empty(){
		//输出
		$this -> display('Empty/error');
	}

	//recBox方法，获取数据展示模版
	public function recBox(){
		//select t1.*,t2.truename as truename from sp_email as t1 left join sp_user as t2 on t1.from_id = t2.id where t1.to_id = 3;
		$count=M('Email')->count();
        $page = new \Think\Page($count,10);	//每页显示1个
        //分页第三步：可选步骤，定义提示文字
        $page -> rollPage = 5;
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $page -> setConfig('first','首页');
        //分页第四步：使用show方法生成url
        $show = $page -> show();
        //获取数据
		$data = M('Email') -> field('t1.*,t2.truename as truename') -> alias('t1') -> join('left join sp_user as t2 on t1.from_id = t2.id') -> where('t1.to_id = ' . session('id')) -> select();
		//传递数据给模版
		$this -> assign('data',$data);
		$this->assign('count',$count);
		$this->assign('show',$show);
		//展示模版
		$this -> display();
	}

	//getContent
	public function getContent(){
		//获取id
		$id = I('get.id');
		//查询数据
		$data = M('Email') -> where("id = $id and to_id = " . session('id')) -> find();
		//如果data为真则修改邮件的状态
		if($data['isread'] == '0'){
			//修改状态
			M('Email') -> save(array('id' => $id,'isread' => 1));
		}
		//输出内容
		echo $data['content'];
	}

	//getCount
	public function getCount(){
		if(IS_AJAX){
			//实例化模型
			$model = M('Email');
			//查询当前用户未读邮件的数量
			$count = $model -> where("isread = 0 and to_id = " . session('id')) -> count();
			//输出数字
			echo $count;
		}
	}
    public function del(){
        //接收参数
        $id = I('get.id');
        //模型实例化
        $model = M('Email');
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
}