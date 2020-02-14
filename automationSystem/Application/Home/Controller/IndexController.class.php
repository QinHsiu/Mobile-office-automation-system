<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //public function index(){
      //  echo time();
    //}
    public function index(){

        /*
        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页

          */
        $this->display();
    }
    public function solutions(){
        $this->display();
    }
    public function showProducts(){
        $this->display();
    }
    public function useCase(){
        $this->display();
    }
    public function service(){
        $this->display();
    }
    public function news(){
        $this->display();
    }
    public function aboutUs(){
        $this->display();
    }
    public function recruit(){
        $this->display();
    }
    public function caseInformation(){
        $this->display();
    }
    public function solutionsInformation(){
        $this->display();
    }
    public function newsInformation(){
        $this->display();
    }
}