<?php
namespace app\home\controller;

use app\common\controller\Home;

class Detailswd extends Home
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {
        call_user_func(array('parent', __FUNCTION__));

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/home/views/default/resource/css/style.css');


        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view(){

        call_user_func(array('parent', __FUNCTION__));
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');

        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');

    }
}
