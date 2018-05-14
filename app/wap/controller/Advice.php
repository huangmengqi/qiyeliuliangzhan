<?php
namespace app\wap\controller;
use think\db;
use app\common\controller\Wap;

class Advice extends Wap
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {
        $this->getMenuData(110, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(111, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(112, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->local['limit']=5;
        call_user_func(array('parent', __FUNCTION__));


        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/css/insider.css');
        $this->assign->addCss('/home/views/default/resource/css/public.css');
        $this->assign->addCss('/home/views/default/resource/css/wenda_list1.css');

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view(){
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/css/insider.css');
        $this->assign->addCss('/home/views/default/resource/css/public.css');
        $this->assign->addCss('/home/views/default/resource/css/inwenda1.css');
		 $data = Db::table('eduask_advice')->where('id',$this->args[id])->find();
        $eee = $data[menu_id];
        $data1 = Db::table('eduask_advice')->where('menu_id',$eee)->select();
        $this->assign->data1 = $data1;
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title','id'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(51, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title','id'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(52, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['title','id'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(57, 8, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(9, 8, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(22, 8, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent', __FUNCTION__));

    }
}
