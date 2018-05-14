<?php
namespace app\wap\controller;

use app\common\controller\Home;
use app\common\controller\Wap;

class Page extends Wap
{
    public function _initialize()
    {
        
        call_user_func(array('parent', __FUNCTION__)); 
    }
    
    public function show()
    {

        $menu_id = intval($this->args['menu_id']);

        if (empty($menu_id)) {
            return $this->notFound();
        }
			
        $this->local['where']['menu_id'] =   $menu_id; 
        $this->local['order'] = array('id'=>'ASC' );
        $this->local['limit'] =  1 ;
        call_user_func(array('parent', __FUNCTION__)); 
        if (empty($this->assign->list)) {
             return $this->notFound();
        }
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        $this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    
    public function view(){
        call_user_func(array('parent', __FUNCTION__)); 
        if ($this->assign->meta['title'][0] == $this->assign->meta['title'][1]) {
            unset($this->assign->meta['title'][0]);
        }
    }
}
