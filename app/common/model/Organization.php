<?php
namespace app\common\model;
use think\paginator;
class Organization extends App
{
    public $display = 'title';
    public $parentModel = 'Menu';

    public $assoc = array(
        'Menu' => array(
            'type' => 'belongsTo'
        ),
        'User' => array(
            'type' => 'belongsTo'
        ),
        'ArticlePicture'=>array(
            'type'=>'hasMany',
            'foreignKey'=>'foreign_id',
            'where'=>array('module'=>'ArticlePicture')
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
                'elem' => 'text',
                'list' => 'show'
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
            'author' => array(
                'type' => 'string',
                'name' => '作者',
                'elem' => 'text',
                'list' => 'text',
                'quick' => true
            ),
            'from' => array(
                'type' => 'string',
                'name' => '来源',
                'elem' => 'text',
                'list' => 'show',
                'quick' => true
            ),
            'is_verify' => array(
                'type' => 'boolean',
                'name' => '审核',
                'elem' => 'checker',
                'list' => 'checker',
                'sortable' => true
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
            'content' => array(
                'type' => 'text',
                'name' => '内容',
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
                'list' => 'edit.text',
                'elem_group' => 'advanced',
            ),
            'picture_count' => array(
                'type' => 'integer',
                'name' => '图片数量',
                'elem' => 0,
                'list' => 'counter',
                'counter' => 'ArticlePicture',
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


    protected function getPage($query_mdl = null)
    {
        if ($query_mdl && is_string($query_mdl)) {
            $query_mdl = $this->loadModel($query_mdl);
        }

        if ($query_mdl === null) {
            $query_mdl = $this->mdl;
        }

        $this->list = $query_mdl->with($query_mdl->parseWith(isset($this->local['contain']) ? (array)$this->local['contain'] : null))->where(isset($this->local['where']) ? $this->local['where'] : [])->field(isset($this->local['fields'][$this->m]) ? $this->local['fields'][$this->m] : $this->local['fields'])->order(isset($this->local['order']) ? $this->local['order'] : [])->paginate(isset($this->local['limit']) ? $this->local['limit'] : 10, isset($this->local['total']) ? $this->local['total'] : false, isset($this->local['paginate']) ? (array)$this->local['paginate'] : []);

        // 获取分页显示
        $this->render = $this->list->render();
        $this->page = $this->list->toArray();

        //数据数据处理到数组
        $list = [];
        foreach ($this->list as $key => $item) {
            $list[$key] = $item->getArray($item);
            //$list[$key] = $item->getArray($item,$this->local['contain']);
        }
        $this->list = $list;
    }



    protected $_validate = array(
        'title' => array(
            'rule' => 'require',
            'message' => '请填写标题'
        ),
        'menu_id' => array(
            array(
                'rule' => 'number',
                'message' => '请选择父级导航'
            ),
            
            array(
                'rule' => array('call', 'checkTypeOfMenu')
            )
        )
    );

}
