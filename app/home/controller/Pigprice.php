<?php
namespace app\home\controller;

use app\common\controller\Home;
use app\common\utility\Hash;

class Pigprice extends Home
{
    //初始化 需要调父级方法
    public function _initialize()
    {        
        call_user_func(['parent', __FUNCTION__]); 
    }
    
    public function show()
    {
		if ($this->isMobile) {
            $this->assign->addCss('/home/views/default/resource/css/stylewap.css');
			$this->assign->addCss('/home/views/default/resource/zhujia/zhujia1.css');
			$this->assign->addCss('/home/views/default/resource/zhujia/jinrizhujia.css');

        } else {
			$this->assign->addJs('/home/views/default/resource/js/jquery.js');
			$this->assign->addCss('/home/views/default/resource/css/style.css');
			$this->assign->addCss('/home/views/default/resource/css/neiye.css');
			$this->assign->addCss('/home/views/default/resource/zhujia/zhujia.css');
        }
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

        
        
        
        ##获取当前显示地区
        ##参数处理
        $parent_id  = intval($this->args['region']) > 0 ? intval($this->args['region']) : 1;
        
        ##获取当前地
        $region  = db('Region')->where(['id'  => $parent_id])->find();
       //pr($region);
        if (empty($region)) {
            return $this->message('error', '数据不存在');
        }
        $pp=$this->args['date'];
        ##防止区级连接没有数据显示 如果从区点进来 再跳转到父地区去
        $parent_ids  = model('Region')->getParentIds($parent_id, 100);
        if (count($parent_ids) > 4) {
            $this->redirect('show', ['region' => $region['parent_id'],'date' => date('Y-m-d', strtotime($pp))]);
        }
        ##获取当前地父级
        $region_parent  = db('Region')->where(['id'  => $region['parent_id']])->find();        
        
        
        
        ##获取到子地区列表
        $regionList = db('Region')->where(['parent_id' => $parent_id])->select();
        ##简单处理下数据结构，让键就是数据id值  可以自己对比下2次打印
        //pr($regionList);
        $regionList = Hash::combine($regionList, '{n}.id', '{n}');
        //pr($regionList);
        
        $middle  = $regionList;
        
        if (count($parent_ids) > 3) {
            $middle = [$parent_id => $parent_id];
        }
        
        $list  = db('Pigprice')->where([
            'region_id' => ['IN', array_keys($middle)],
            'date' => date('Y-m-d', strtotime($pp))
        ])->select();
        ##查询今日价格数据
        if (empty($pp)) {
            $list  = db('Pigprice')->where([
                'region_id' => ['IN', array_keys($middle)],
                'date' => date('Y-m-d')
            ])->select();
        }
        $title = $this->assign->regionlist['title'];
        unset($this->assign->regionlist['title']);
        $this->addTitle("{$pp}{$region[title]}猪价");
        ##如果今日没有价格数据，暂时查询昨天的价格进行显示

        ##将数据assign到页面
        $this->assign->regionList = $regionList;
        $this->assign->list  = $list;
        $this->assign->pp  = $pp;
        $this->assign->region = $region;
        $this->assign->region_parent = $region_parent;
        
       
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
        $this->fetch  = true;
        //call_user_func(array('parent',__FUNCTION__));
    }
    
}