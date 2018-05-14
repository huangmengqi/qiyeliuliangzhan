<?php
namespace app\wap\controller;

use app\common\controller\Wap;

class Index extends Wap
{
    public function _initialize()
    {        
        call_user_func(array('parent',__FUNCTION__)); 
        $this->assign->top_id = 0;
    }
    //首页
    public function index()
    {

        $this->assign->addCss('/home/views/default/resource/css/stylewap.css');
        $this->getMenuData(5, 8, [
        'family' => true,
        'type' => 'select',
        'contain' => [],
        'where' => [],
        'field' => ['id','title','image'],
        'order' => ['is_index' => 'DESC','id'=>'DESC']
    ]);
		$this->getMenuData(52, 13, [
			'family' => true,
			'type' => 'select',
			'contain' => [],
			'where' => [],
			'field' => ['id','title'],
			'order' => ['is_index' => 'DESC','id'=>'DESC']
		]);
        $this->getMenuData(56, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(57, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(59, 10, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(136, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content1'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(141, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(110, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(111, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(112, 13, [
        'family' => true,
        'type' => 'select',
        'contain' => [],
        'where' => [],
        'field' => ['id','title'],
        'order' => ['is_index' => 'DESC','id'=>'DESC']
    ]);
		$title = $this->assign->meta['title'][0];
			unset($this->assign->meta['title'][0]);
			$this->addTitle("{$title}");
        $this->fetch = true;
    }

    //引导页，需要在app/route中配置
    public function guide()
    {
        $this->fetch = true;
    }
    
    //网站地图
    public function sitemap()
    {  
        $this->fetch = true;
    }
    
    /*
    //忘记密码可以访问该方法来获取加密字符串 domain/index/getpwd/pwd/需加密的字符串
    public function getpwd()
    {
        echo $this->Auth->password($this->args['pwd']);
    }
    */
}
