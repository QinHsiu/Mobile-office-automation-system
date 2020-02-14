<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2019/12/21
 * Time: 19:36
 */
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
class SystemController extends CommonController{
    public function edit(){
        if(IS_POST){
            //处理post请求
            $post = I('post.');
            //实例化
            $model = M('System');
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
            $this -> display();
        }
    }
    public function add()
    {
        if (IS_POST) {
            //处理表单提交
            //$post = I('post.');
            //写入数据
            $model = D('System');
            //数据对象创建
            $data = $model->create();    //不传递参数则接收post数据
            //判断验证结果
            if (!$data) {
                //提示用户验证失败
                //dump($model -> getError());die;
                $this->error($model->getError());
                exit;
            }
            //dump($data);die;
            $result = $model->add($data);
            //判断返回值
            if ($result) {
                //成功
                $this->success('添加成功', U('showList'), 3);
            } else {
                //失败
                $this->error('添加失败');
            }
        } else {
            $this->display();
        }
    }
    public function showList(){
        $model = M('System');
        //查询
        //$data = $model -> order('sort asc') -> select();
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
        //使用load方法载入文件
        //load('@/tree');
        //$this->assign('data',$data);
        $this->assign('show',$show);
        $this->display();
    }
}