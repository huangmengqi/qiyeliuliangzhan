<?php
namespace app\wap\controller;

use app\common\controller\Home;
use app\common\controller\Wap;

class User extends Wap
{
    //初始化 需要调父级方法
    public function _initialize()
    {
        $this->Auth->allow(['login']);
        call_user_func(['parent', __FUNCTION__]); 
    }
    
    public function login()
    {
        $this->redirect('manage/User/login');
    }
}
