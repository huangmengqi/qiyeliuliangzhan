<?php
namespace app\home\controller;

use app\common\controller\Home;

class Detailszb extends Home
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
        $this->getMenuData(12, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title','reason'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(4, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(141, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(110, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->fetch=true;

    }

    public function view(){
        $this->getMenuData(5, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title','image1','chengfen','gongxiao'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(4, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);

        $this->fetch = true;

        call_user_func(array('parent', __FUNCTION__));
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');

        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');

    }
}
