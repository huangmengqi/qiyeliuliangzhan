<?php
namespace app\wap\controller;
use think\db;
use app\common\controller\Wap;

class Detailssy extends Wap
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {

        call_user_func(array('parent', __FUNCTION__));

        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view(){

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
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
