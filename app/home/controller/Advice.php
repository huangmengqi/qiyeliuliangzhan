<?php
namespace app\home\controller;
use think\db;
use think\Model;
use think\Request;
use app\common\controller\Home;

class Advice extends Home
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
        $this->local['limit']=3;
        call_user_func(array('parent', __FUNCTION__));


        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/public.css');
        $this->assign->addCss('/home/views/default/resource/css/wenda_list.css');
        $ff = $this->args[menu_id];

        $gg = db('menu')->where(['id' => (int)$ff])->select();
       


        $res = db('advice')->where(['tags' => $gg[0][title]])->update(['menu_id' => $gg[0][id]]);
        
        $data = db('advice')->where(['tags' => $gg[0][title]])->select();
        
        //$this->assign->data = $data1;
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view(){
        $this->assign->addJs('/home/views/default/resource/newjs/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jQuery.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/public.css');
        $this->assign->addCss('/home/views/default/resource/css/common.css');
        $this->assign->addCss('/home/views/default/resource/css/inwenda.css');
        $this->assign->addCss('/layui/css/layui1.css');
        $this->assign->addJs('/layui/layui.js');
		$data = Db::table('eduask_advice')->where('id',$this->args[id])->find();
        $eee = $data[menu_id];
        $data1 = Db::table('eduask_advice')->where('menu_id',$eee)->select();
	
        $this->assign->data1 = $data1;
        if ($this->request->isPost()) {  //form表单应该是 post提交

            $data = input('post.');//获取到你提交的数据
            /*pr($data);//打印看下获取到的数据
            pr($data['bh']);
            pr($data['nr']);*/


           /* $advice = new Advice;// save方法第二个参数为更新条件
            $advice->save([
                'consultant' => $data['bh'],
                'content' => $data['nr'],
            ],['id' => $this->args[id]]);*/
            $www = $this->args[id];
            Db::table('eduask_advice')
                ->where('id', $www)
                ->update([
                    'consultant' => $data['bh'],
                    'content' => $data['nr'],
                ]);

        }
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
