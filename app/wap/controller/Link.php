<?php
namespace app\wap\controller;

use app\common\controller\Home;
use app\common\controller\Wap;

class Link extends Wap
{
    //初始化 需要调父级方法
    public function _initialize()
    {        
        call_user_func(['parent', __FUNCTION__]); 
    }
}
