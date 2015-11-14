<?php
    namespace Admin\Controller;
    use Component\AdminController;

    // 商品信息类
    class CateController extends AdminController{

        // 商品列表
        public function showlist(){
            $info = D('Categorys') -> select();
            $this -> assign('info', $info);
            $this -> display('list');
        }

        // 添加分类
        public function add($id){
            //var_dump($id);
            if($id == 0){
                // echo '调用成功';
                $this -> assign('catename', '顶级分类');
                $this -> assign('pid', '0');
                $this -> assign('path', '0,');
            } else {
                $info = D('Categorys') -> find($id);
                //var_dump($info);
                //echo  $info['catename'];
                //echo $info['pid'];
                //echo $info['path'].$info['id'].',';
                $this -> assign('catename', $info['catename']);
                $this -> assign('pid', $info['id']);
                $this -> assign('path', $info['path'].$info['id'].',');
            }
        	$this -> display();
        }

        // 添加数据
        public function insert(){
            // 模块分类为3 登录 权限 ...
            // 技术分类为2 html css
            $_POST['cate'] = '3';
            $_POST['addtime'] = time();
            // print_r($_POST);
            $res = D('Categorys') -> add($_POST);
            if($res){
                $this -> assign('mess', '添加权限成功');
                //$this -> display('list');
                $this -> showlist();
            } else {
                $this -> assign('mess', '添加权限失败');
                $this -> display('list');
            }
        }
    }