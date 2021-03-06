<?php
namespace app\wap\controller;

use app\common\controller\Home;
use app\common\controller\Wap;

class Product extends Wap
{
    public function _initialize()
    {
        
        call_user_func(array('parent',__FUNCTION__)); 
    }
    public function show()
    {
        /*
        ##如果列表页也需要将每个产品的关联图片查询出来打开注释即可
        if (in_array($this->m, json_decode(setting('use_picture_model')))) {
            $this->local['contain']  = [
                'ProductPicture' => [
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
        call_user_func(array('parent',__FUNCTION__)); 
    }
             
    public function view()
    {
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        if (in_array($this->m, json_decode(setting('use_picture_model')))) {
            $this->local['contain']  = [
                'ProductPicture' => [
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
        call_user_func(array('parent',__FUNCTION__)); 
    }        
}
