<?php
namespace app\wap\controller;

use app\common\controller\Wap;

class Detailszz extends Wap
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {
        $this->getMenuData(62, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao','bing'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(40, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        foreach (menu('nav_children',9) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',12) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',13) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',14) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',15) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',16) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
$this->getMenuData(56, 2, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】怎么办？【{$title}】打什么针最好？");
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function reason1()
    {
        $this->getMenuData(62, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao','bing'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(40, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
		$this->getMenuData(56, 2, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        foreach (menu('nav_children',9) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',12) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',13) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',14) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',15) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',16) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】的原因，【{$title}】怎么回事？");
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function prevent1()
    {
        $this->getMenuData(62, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao','bing'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(40, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        foreach (menu('nav_children',9) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',12) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',13) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',14) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',15) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',16) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
		$this->getMenuData(56, 2, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("怎样预防【{$title}】？【{$title}】的预防净化？");
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function method()
    {
        $this->getMenuData(62, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao','bing'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(40, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
		$this->getMenuData(56, 2, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        foreach (menu('nav_children',9) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',12) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',13) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',14) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',15) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',16) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】怎么治疗，【{$title}】的治疗方案");
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function drug1()
    {
        $this->getMenuData(62, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao','bing'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(40, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
		$this->getMenuData(56, 2, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        foreach (menu('nav_children',9) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',12) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',13) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',14) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',15) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        foreach (menu('nav_children',16) as $level1_id){
            $this->getMenuData( $level1_id, 13, [
                'family' => true,
                'type' => 'select',
                'contain' => [],
                'where' => [],
                'field' => ['id', 'title', 'how','reason','symptom','prevent','drug','treat'],
                'order' => ['is_index' => 'DESC', 'id' => 'DESC']
            ]);
        }
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】用什么药，【{$title}】特效药");
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view(){
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');

        call_user_func(array('parent', __FUNCTION__));

    }
}
