<?php
namespace app\wap\controller;

use app\common\controller\Wap;

class Drugs extends Wap
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {
        call_user_func(array('parent', __FUNCTION__));

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view(){
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        call_user_func(array('parent', __FUNCTION__));

    }
}
