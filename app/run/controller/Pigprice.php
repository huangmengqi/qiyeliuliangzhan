<?php
namespace app\run\controller;

use app\common\controller\Run;

class Pigprice extends Run
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
                'name',
                'date'
            ];
        }
        ## 列表
        if (!$this->local['list_fields']) {
            $this->local['list_fields'] = [
                'name',
                'price1',
                'price2',
                'price3',
                'price4',
                'price5',
                'date'
            ];
        }       
        
        call_user_func(['parent', __FUNCTION__]);
        $this->addAction("每日采集", array('Home/index/get_price', ['token' => 'eduask']), 'fa-download');
        $this->addAction("清空历史数据", array('clear'), 'fa-close');
    }
    
    public function clear()
    {
        db('Pigprice')->where(['date' => ['lt', date('Y-m-d')]])->delete();
        return $this->message('success', '历史数据已经清空');
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
