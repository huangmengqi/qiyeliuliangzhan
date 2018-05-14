<?php
namespace app\home\controller;

use app\common\controller\Home;

class Company extends Home
{
    public function _initialize()
    {

        call_user_func(array('parent',__FUNCTION__));
    }

    public function show()
    {
        /*
        ##如果列表页也需要将每个文章的关联图片查询出来打开注释即可
        if (in_array($this->m, json_decode(setting('use_picture_model')))) {
            $this->local['contain']  = [
                'ArticlePicture' => [
                    'where' => [
                        'is_verify' => 1
                    ],
                    'order' => [
                        'list_order' => 'DESC',
                        'id' => 'ASC'
                    ]
                ]
            ];
        }*/
        $this->assign->addJs('/home/views/default/resource/js/jquery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        $this->assign->addCss('/home/views/default/resource/newcss/qiugoulist.css');
        $this->getMenuData(5, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);

        call_user_func(array('parent',__FUNCTION__));
    }
    public function view()
    {
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');
        $ff = $this -> args['id'];
        $this->getMenuData(56, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','date'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);

        $this->getMenuData(137, 6, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => ['chang_id' => $ff],
            'field' => ['id','title','image','chengfen','zhuzhi','yongliang'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));
    }
    public function product()
    {
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');
        $ff=$this->args[id];
        $this->getMenuData(56, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','date'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 6, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(137, 6, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => ['chang_id' => "$ff"],
            'field' => ['id','title','image','chengfen','zhuzhi','yongliang'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));

    }
    public function contact()
    {
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');
        $this->getMenuData(56, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','date'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 6, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));

    }
    public function liuyan()
    {
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/buy.css');
        if ($this->request->isPost() /*&& $this->Form->check_token()*/) {

            //if(captcha_check(input('post.captcha'))){
            $this->Form->data[$this->m]['truename'] = trim($this->Form->data[$this->m]['truename']);
            $this->Form->data[$this->m]['mobile']   = trim($this->Form->data[$this->m]['mobile']);
            $this->Form->data[$this->m]['title']    = /*$this->Form->data[$this->m]['title'] ? */trim($this->Form->data[$this->m]['title'])/*:menu($this->args['menu_id'],'title')*/;
            $this->Form->data[$this->m]['user_id']  = $this->Auth->user('id');
            $this->Form->data[$this->m]['ip']       = $this->request->ip();
            $this->Form->data[$this->m]['menu_id']  = intval($this->args['menu_id']);

            $rslt  = $this->mdl->isUpdate(false)->save($this->Form->data[$this->m]);
            if ($rslt) {
                return $this->message('success','恭喜你！留言成功！');
            } else {
                $this->assign->error = $this->mdl->getError();
            }
            //}else{
            $this->assign->error[] = '验证码填写错误';
            //}
        }

        call_user_func(array('parent',__FUNCTION__));
    }
    public function details()
    {

        $this->assign->addJs('/home/views/default/resource/newjs/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/newcss/qyrz.css');
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');


        $this->assign->data = db('companydrug')->where(['id' => $this->args['id']])->find();
		 $this->assign->data1 = db('company')->where(['id' => $this->assign->data[chang_id]])->find();
		
        //pr($this->assign->data1[title]);



        $this->getMenuData(21, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','chengfen'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(9, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(21, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);

        $this->fetch = 'details';
    }

    public function honor()
    {
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');
        $this->getMenuData(56, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','date'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));

    }
    public function news()
    {
        $this->assign->addJs('/home/company/js/jquery.SuperSlide.2.1.1.js');
        $this->assign->addJs('/home/company/js/bootstrap.min.js');
        $this->assign->addJs('/home/company/js/jquery-1.10.2.min.js');
        $this->assign->addCss('/home/company/css/bootstrap.css');
        $this->assign->addCss('/home/company/css/style.css');
        $this->getMenuData(56, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','date','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));
    }
}
