<?php
namespace app\common\model;
class Detailssy extends App
{
    public $display = 'title';
    public $parentModel = 'Menu';

    public $assoc = array(
        'Menu' => array(
            'type' => 'belongsTo'
        ),
        'User' => array(
            'type' => 'belongsTo'
        )
    );

    public function initialize()
    {
        $this->form = array(
            'id' => array(
                'type' => 'integer',
                'name' => 'ID',
                'elem' => 'hidden',
            ),
            'menu_id' => array(
                'type' => 'integer',
                'name' => '所属栏目',
                'elem' => 'nest_select.Menu',
                'foreign' => 'Menu.title',
                'list' => 'assoc'
            ),
            'user_id' => array(
                'type' => 'integer',
                'name' => '所属用户',
                'foreign' => 'User.username',
                'elem' => 0,
                'list' => 'assoc'
            ),
            'title' => array(
                'type' => 'string',
                'name' => '标题',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'ex_title' => array(
                'type' => 'string',
                'name' => '副标题',
                'elem' => 'text',
                'list' => 'show',
            ),
            'is_verify' => array(
                'type' => 'boolean',
                'name' => '审核',
                'elem' => 'checker',
                'list' => 'checker',
            ),
            'image' => array(
                'type' => 'string',
                'name' => '封面图片',
                'elem' => 'image.upload',
                'list' => 'image',
                'image' => array(
                    'thumb' => array(
                        'field' => 'thumb'
                    ),
                ),
                'upload' => array(
                    'maxSize' => 2048,
                    'validExt' => array('jpg', 'png', 'gif')
                )
            ),
            'thumb' => array(
                'type' => 'string',
                'name' => '缩略图',
                'elem' => 0,
                'list' => 0,
            ),
            'image1' => array(
                'type' => 'string',
                'name' => '详情图片1',
                'elem' => 'image.upload',
                'list' => 'image',
                'image' => array(
                    'thumb' => array(
                        'field' => 'thumb'
                    ),
                ),
                'upload' => array(
                    'maxSize' => 2048,
                    'validExt' => array('jpg', 'png', 'gif')
                )
            ),
            'image2' => array(
                'type' => 'string',
                'name' => '详情图片2',
                'elem' => 'image.upload',
                'list' => 'image',
                'image' => array(
                    'thumb' => array(
                        'field' => 'thumb'
                    ),
                ),
                'upload' => array(
                    'maxSize' => 2048,
                    'validExt' => array('jpg', 'png', 'gif')
                )
            ),
            'image3' => array(
                'type' => 'string',
                'name' => '详情图片3',
                'elem' => 'image.upload',
                'list' => 'image',
                'image' => array(
                    'thumb' => array(
                        'field' => 'thumb'
                    ),
                ),
                'upload' => array(
                    'maxSize' => 2048,
                    'validExt' => array('jpg', 'png', 'gif')
                )
            ),

            'chengfen' => array(
                'type' => 'text',
                'name' => '药品成分',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'gongxiao' => array(
                'type' => 'text',
                'name' => '产品功效',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'gaishu' => array(
                'type' => 'text',
                'name' => '案例概述',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'zhenduan' => array(
                'type' => 'text',
                'name' => '病情诊断',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'chufang' => array(
                'type' => 'text',
                'name' => '用药处方',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'fankui' => array(
                'type' => 'text',
                'name' => '处方反馈',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'dingzhu' => array(
                'type' => 'text',
                'name' => '畜牧师叮嘱',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'visit_count' => array(
                'type' => 'integer',
                'name' => '访问计数',
                'elem' => 0,
                'list' => 'show',
            ),
            'summary' => array(
                'type' => 'text',
                'name' => '摘要说明',
                'elem' => 'textarea',
                'list' => 'show',
                'elem_group' => 'advanced',
            ),
            'link' => array(
                'type' => 'string',
                'name' => '外部链接',
                'elem' => 'text',
                'list' => 'show',
                'elem_group' => 'advanced',
            ),
            'is_index' => array(
                'type' => 'boolean',
                'name' => '首页优先',
                'elem' => 'checker',
                'list' => 'checker',
                'elem_group' => 'advanced',
            ),
            'is_recommend' => array(
                'type' => 'boolean',
                'name' => '推荐',
                'elem' => 'checker',
                'list' => 'checker',
                'elem_group' => 'advanced',
            ),
            'created' => array(
                'type' => 'datetime',
                'name' => '添加时间',
                'elem' => 0,
                'list' => 'datetime',
                'elem_group' => 'advanced',
            ),
            'modified' => array(
                'type' => 'datetime',
                'name' => '修改时间',
                'elem' => 0,
                'list' => 'datetime',
                'elem_group' => 'advanced',
            ),
            'list_order' => array(
                'type' => 'integer',
                'name' => '排序权重',
                'elem' => 'number',
                'list' => 'show',
                'elem_group' => 'advanced',
            ),
            'keywords' => array(
                'type' => 'string',
                'name' => 'SEO关键字',
                'elem' => 'text',
                'elem_group' => 'advanced',
            ),
            'description' => array(
                'type' => 'string',
                'name' => 'SEO描述',
                'elem' => 'textarea',
                'elem_group' => 'advanced',
            ),
            'symptom' => array(
                'type' => 'string',
                'name' => '相关症状',
                'elem' => 'checkbox',
                'list' => 'show'
            ),
            'bing' => array(
                'type' => 'string',
                'name' => '相关疾病',
                'elem' => 'checkbox',
                'list' => 'show'
            ),
            'yao' => array(
                'type' => 'string',
                'name' => '相关兽药',
                'elem' => 'checkbox',
                'list' => 'show'
            )
        );

        $zzlist = db('Menu')->where(['level' =>['egt', 3],'family'=>['like','%,4,%']])->select();
        $zzlist = \app\common\utility\Hash::combine($zzlist, '{n}.id', '{n}.title');
        $this->form['symptom']['options'] = $zzlist;

        $jblist = db('Menu')->where(['level' =>['egt', 3],'family'=>['like','%,3,%']])->select();
        $jblist = \app\common\utility\Hash::combine($jblist, '{n}.id', '{n}.title');
        $this->form['bing']['options'] = $jblist;

        $sylist = db('Menu')->where(['level' =>['egt', 3],'family'=>['like','%,5,%']])->select();
        $sylist = \app\common\utility\Hash::combine($sylist, '{n}.id', '{n}.title');
        $this->form['yao']['options'] = $sylist;

        call_user_func_array(array('parent', __FUNCTION__), func_get_args());
    }

    public $formGroup = array(
        'advanced' => '高级选项'
    );

    protected $_validate = array(
        'title' => array(
            'rule' => 'require',
            'message' => '请填写标题'
        ),
        'menu_id' => array(
            array(
                'rule' => array('egt', 1),
                'message' => '请选择父级导航'
            ),
            array(
                'rule' => array('call', 'checkTypeOfMenu')
            )
        )
    );


}
