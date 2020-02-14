<?php
//声明命名空间
namespace Admin\Model;
//引入父类
use Think\Model;
//声明并且实例化父类
class KnowledgeModel extends Model{

	//addData方法
	public function addData($post,$file){
		//判断是否有文件需要处理
		//要求size大于0，或者是error等于0
		if($file['error'] == '0'){
			//有文件
			$cfg = array('rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH);
			//实例化上传类
			$upload = new \Think\Upload($cfg);
			///上传
			$info = $upload -> uploadOne($file);
			//dump($info);die;
			if($info){
				//成功之后补全字段
				$post['picture'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
				//制作缩略图
				//1、实例化类
				$image = new \Think\Image();
				//2、打开图片，传递图片的路径
				$image -> open(WORKING_PATH . $post['picture']);
				//3、制作缩略图，等比缩放
				$image -> thumb(100,100);
				//4、保存图片，传递保存完整路径（目录+文件名）
				$image -> save(WORKING_PATH . UPLOAD_ROOT_PATH . $info['savepath'] . 'thumb_' . $info['savename']);
				//补全thumb字段
				$post['thumb'] = UPLOAD_ROOT_PATH . $info['savepath'] . 'thumb_' . $info['savename'];
			}
		}
		//补全字段addtime
		$post['addtime'] = time();
		//dump($post);die;
		//添加操作
		return $this -> add($post);
	}
}