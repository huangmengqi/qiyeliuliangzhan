<?php
namespace app\wap\controller;

use app\common\controller\Wap;

class Company extends Wap
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
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
		$this->assign->addCss('/css/insider.css');
        $this->getMenuData(8, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image'],
            'order' => ['is_index' => 'ASC','id'=>'ASC']
        ]);
        call_user_func(array('parent',__FUNCTION__));
    }

    public function view()
    {
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
		$ff = $this -> args['id'];
		 $data2 = db('company')->where(['id' => $ff])->find();
        $this->addTitle("【{$data2[title]}】怎么样？");
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
        }
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
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
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
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
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
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
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

        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
		$this->assign->addCss('/homewap/views/default/resource/css/qyneiye.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
		
		
        $this->assign->data = db('companydrug')->where(['id' => $this->args['id']])->find();
		$this->assign->data1 = db('company')->where(['id' => $this->assign->data[chang_id]])->find();
		
		
		$title = $this->assign->data[title];
		$title1 = $this->assign->data1[title];
        unset($this->assign->data[title]);
		$this->addTitle("【{$title}】价格,生产厂家,批准文号,招商代理_【{$title}】主治效果,好不好,哪里买,多少钱-【{$title1}】");
		
        //pr($this->assign->data);

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
            'field' => ['id','title'],
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
        $this->getMenuData(22, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
		 $this->getMenuData(62, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title1','imagel','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->fetch = 'details';
    }

    public function honor()
    {
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
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
    {$this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyrz.css');
        $this->assign->addCss('/homewap/views/default/resource/css/qyindex.css');
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
