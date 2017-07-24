<?php
namespace Common\Controller;
use Think\Controller;
class SessionController extends Controller {
    public function __construct()
    {
        //调用父类构造
        parent::__construct();
         
        //判断SESSION是否存在
        if(!session('?uid'))
        {
            $this->redirect('Index/login', '页面跳转中...'); 
        }
    }
}