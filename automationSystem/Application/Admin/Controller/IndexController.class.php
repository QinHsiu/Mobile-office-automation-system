<?php
/**
 * 
 * @authors	九炼
 * @wat 传智播客教育集团 PHP学院
 * @date    2016-10-09 19:12:01
 * @url 	http://www.itcast.cn/php
 * @desc	请将此替换为文件描述...
 */
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
//声明并继承父类
class IndexController extends CommonController{

	//index方法
	public function index(){
		//展示模版
		$this -> display();
	}
    public function index2(){
        //展示模版
        $this -> display();
    }

    public function index3(){
        //展示模版
        $this -> display();
    }
	//home方法
	public function home(){
		//展示模版
		$this -> display();
	}
    public function home2(){
        //展示模版
        $this -> display();
    }
    public function home3(){
        //展示模版
        $this -> display();
    }

}

