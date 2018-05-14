<?php
namespace app\home\controller;

use app\common\controller\Home;

class Companydrug extends Home
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        $this->local['limit']=5;
        call_user_func(array('parent', __FUNCTION__));
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));

    }

    public function view(){

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/public/css/insider.css');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        call_user_func(array('parent', __FUNCTION__));

    }
}
