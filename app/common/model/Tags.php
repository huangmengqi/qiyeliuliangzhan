<?php
namespace app\common\model;
class Tags extends App
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
            'date' => array(
                'type' => 'date',
                'name' => '发布日期',
                'elem' => 'date',
                'list' => 'date',
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
            'title1' => array(
                'type' => 'string',
                'name' => '标题1',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'analysis' => array(
                'type' => 'text',
                'name' => '病因分析',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'title2' => array(
                'type' => 'string',
                'name' => '标题2',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'misunderstandings' => array(
                'type' => 'text',
                'name' => '治疗误区',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'title3' => array(
                'type' => 'string',
                'name' => '标题3',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'complication' => array(
                'type' => 'text',
                'name' => '并发症',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'title4' => array(
                'type' => 'string',
                'name' => '标题4',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'thinking' => array(
                'type' => 'text',
                'name' => '用药思路',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'title5' => array(
                'type' => 'string',
                'name' => '标题5',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'plan' => array(
                'type' => 'text',
                'name' => '用药方案',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'title6' => array(
                'type' => 'string',
                'name' => '标题6',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'remind' => array(
                'type' => 'text',
                'name' => '专家提醒',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'title7' => array(
                'type' => 'string',
                'name' => '标题7',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'recommend' => array(
                'type' => 'string',
                'name' => '推荐药品',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'title8' => array(
                'type' => 'string',
                'name' => '标题8',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'effect1' => array(
                'type' => 'string',
                'name' => '核心功效1',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'effect2' => array(
                'type' => 'string',
                'name' => '核心功效2',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'effect3' => array(
                'type' => 'string',
                'name' => '核心功效3',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'effect4' => array(
                'type' => 'string',
                'name' => '核心功效4',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'effect5' => array(
                'type' => 'string',
                'name' => '核心功效5',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'imagel' => array(
                'type' => 'string',
                'name' => '左图',
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
            'title9' => array(
                'type' => 'string',
                'name' => '标题9',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'component' => array(
                'type' => 'text',
                'name' => '核心成分',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'mechanism' => array(
                'type' => 'text',
                'name' => '药品功效机理',
                'elem' => 'editor',
                'length' => 80,
                'list' => 0,
                'auto_img' => true
            ),
            'imager' => array(
                'type' => 'string',
                'name' => '右图',
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
            'title10' => array(
                'type' => 'string',
                'name' => '标题10',
                'elem' => 'text.title',
                'list' => 'show',
            ),
            'action' => array(
                'type' => 'text',
                'name' => '作用机理',
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
            )
        );
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
