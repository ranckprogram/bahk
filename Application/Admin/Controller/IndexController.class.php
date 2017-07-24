<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
   public function login(){
        $this->display();
   }
   public function verify(){
        $map["user"] = $_POST['username'];
        $map["pass"] = $_POST['password'];
        $admin = M("admin");
        $exist = $admin->where($map)->select(); //存在
        $uid = $exist[0]['id'];
        if ($exist) {
            session('name', $username);
            session('uid', $uid);
            $this->success('登陆成功', U('Admin/alist'));
        } else {
            $this->display("login");
        }
   }
   public function signOut(){
      session('uid', null);
      //$this->redirect("login","注销中。。。",3);
      $this->success("注销中。。。", U('Index/login'),3);
   }
  
}