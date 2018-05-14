<?php
namespace app\common\model;

class Pigprice extends App
{
    //关联模型
    public $assoc = [];
    
    public function initialize()
    {        
        $this->form = [
            'id' => [
            	'type' => 'integer',
            	'name' => 'ID',
            	'elem' => 'hidden',
            ],
            'region_id' => array(
                'type' => 'integer',
                'name' => '所在地区',
                'elem' => 'multi_select.ajax',
                
                'multi_options' => [
                    'order' => ['list_order' => 'DESC','id' => 'ASC'],
                    'where' => []
                ],
                'foreign' => 'Region.title'
            ),
            'name' => [
            	'type' => 'string',
            	'name' => '地区名',
            	'elem' => 0,
            ],
            'date' => [
            	'type' => 'string',
            	'name' => '日期',
            	'elem' => 'date',
            ],
            'price1' => [
            	'type' => 'float',
            	'name' => '外三元',
            	'elem' => 'text',
                'list' => 'show'
            ],
            'price2' => [
            	'type' => 'float',
            	'name' => '内三元',
            	'elem' => 'text',
            ],
            'price3' => [
            	'type' => 'float',
            	'name' => '土杂猪',
            	'elem' => 'text',
            ],
            'price4' => [
            	'type' => 'float',
            	'name' => '玉米',
            	'elem' => 'text',
            ],
            'price5' => [
            	'type' => 'float',
            	'name' => '豆粕',
            	'elem' => 'text',
            ]            
            //其他字段
        ];
        call_user_func_array(['parent', __FUNCTION__], func_get_args());
    }
    
    /*
    //表单分组
    public $formGroup = [
        'advanced' => '高级选项'
    ];
    */
    
    //数据验证    
    protected $_validate = [];
}
