<?php
namespace app\wap\controller;

use app\common\controller\Wap;


class Symptom extends Wap
{
    public function _initialize()
    {
        
        call_user_func(array('parent', __FUNCTION__)); 
    }
    
    public function show()
    {
        call_user_func(array('parent', __FUNCTION__));
       
        $this->getMenuData(141, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
		$this->getMenuData(56, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    
    public function view(){
        call_user_func(array('parent', __FUNCTION__)); 

    }
}
