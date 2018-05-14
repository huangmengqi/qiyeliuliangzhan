<?php
namespace app\home\controller;
use think\db;
use app\common\controller\Home;

class Detailssy extends Home
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
		$this->getMenuData(137, 7, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','zhuzhi','yongliang'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent', __FUNCTION__));
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));

    }

    public function view(){

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/public/css/insider.css');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
		 if ($this->request->isPost()) {  //form表单应该是 post提交

            $data = input('post.');//获取到你提交的数据
            $data1 = [
                'title' => $data['yname'],
                'truename' => $data['name'],
                'mobile' => $data['phone'],
                'content' => $data['juti'],
                'ip' => $this->request->ip(),
                'menu_id' => 61,
                'is_verify' => 0,
                'description' => '求购信息',
            ];
            Db::table('eduask_feedback')->insert($data1);
        }
        call_user_func(array('parent', __FUNCTION__));

    }
}
