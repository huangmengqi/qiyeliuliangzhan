<?php
namespace app\home\controller;

use app\common\controller\Home;
use think\paginator;
class Organization extends Home
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
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');

        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        $this->local['limit']=10;
        call_user_func(array('parent',__FUNCTION__));

    }
/*
    public function index(){

        if ($this->args['keyword']) {
            //$map['code'] = ['like', "%{$keyword}%"];
            $this->local['where']['code'] = ['like', "%{$keyword}%"];
            $this->assign->keyword = $this->args['keyword'];//页面上 $keyword 获取关键词
        }
        //$list=Db('package')->where($map)->paginate(10, false, ['page' => $page]);
        $this->local['limit'] = 1;//每页10条数据
        $this->getPage($this->mdl);//调用翻页方法
        $this->assign->list = $this->list;//页面上使用 $list获取当前页数据  调试打印数据 可以{pr($list)}
        unset($this->page['data']);
        $this->assign->page = $this->page;
        $this->assign->render = $this->render;   //页面上使用 $render 获取翻页html
        $this->fetch = true;
        //return $this->fetch('/Organization/show',['list'=>$list,'keyword'=>$keyword]);
    }*/


    public function view()
    {
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
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
        $this->getMenuData(105, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));
    }
}
