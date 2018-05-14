<?php
namespace app\run\controller;

use app\common\controller\Run;

class Region extends Run
{
    //初始化 需要调父级方法
    public function _initialize()
    {        
        call_user_func(['parent', __FUNCTION__]); 
    }
    
    //列表 
    public function lists()
    {
        
        ## 搜索
        if (!$this->local['filter']) {
            $this->local['filter'] = [
                'title'
            ];
        }
        ## 列表
        if (!$this->local['list_fields']) {
            $this->local['list_fields'] = [
                'title',
                'list_order'
            ];
        }
        $this->local['order'] = [/*'parent_id' => 'ASC', 'list_order' => 'DESC',*/ 'id'=>'ASC'];
        $this->local['where']['id'] = ['>', 1]; 
        return call_user_func(['parent', __FUNCTION__]);
    }
    
    //添加
    public function create()
    {        
        return call_user_func(['parent', __FUNCTION__]);
    }
    
    //修改
    public function modify()
    {        
        return call_user_func(['parent', __FUNCTION__]);
    } 
    
    //删除
    public function delete()
    {        
        return call_user_func(['parent', __FUNCTION__]);
    }  
}
