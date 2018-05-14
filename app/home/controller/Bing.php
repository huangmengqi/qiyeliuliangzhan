<?php
namespace app\home\controller;

use app\common\controller\Home;

class Bing extends Home
{
    public function _initialize()
    {
        
        call_user_func(array('parent', __FUNCTION__)); 
    }
    
    public function show()
    {
        call_user_func(array('parent', __FUNCTION__));
        
        $this->getMenuData(62, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    
    public function view(){
        call_user_func(array('parent', __FUNCTION__)); 

    }
}
