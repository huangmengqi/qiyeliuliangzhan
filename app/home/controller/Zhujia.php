<?php
namespace app\home\controller;

use app\common\controller\Home;

class Zhujia extends Home
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
        $this->assign->addCss('/home/views/default/resource/zhujia/zhujia.css');
        $this->local['limit']=32;

        $this->getMenuData(57, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent',__FUNCTION__));
    }
}
