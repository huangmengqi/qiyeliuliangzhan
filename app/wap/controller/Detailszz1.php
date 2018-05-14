<?php
namespace app\wap\controller;

use app\common\controller\Wap;

class Detailszz1 extends Wap
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }
    public function show()
    {
        $this->getMenuData(5, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','chengfen','gongxiao','bing'],
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
        $this->getMenuData(40, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['menu_id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id'],
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
        $this->getMenuData(17, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        call_user_func(array('parent', __FUNCTION__));

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】打什么针最好？【{$title}】怎么办？");

        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function reason()
    {
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
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
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','reason','symptom1'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(3, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','reason','symptom1'],
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
        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->meta['keywords'];
        //$this->loadModel('Detailszz1');
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】是什么原因？【{$title}】怎么回事？");
        $this->fetch=true;
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function how()
    {
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
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
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','reason','symptom1'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(3, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','reason','symptom1'],
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

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->assign->meta['keywords'];
        //$this->loadModel('Detailszz1');
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】怎么办？【{$title}】打什么针最好？");
        $this->fetch=true;
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function symptom()
    {
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(5,1, [
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
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','symptom'],
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

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        $this->fetch=true;

        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】的发病症状？【{$title}】的症状鉴别？");
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function prevent()
    {
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
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
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','prevent'],
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

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】预防净化？怎样预防【{$title}】？");
        $this->fetch=true;
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function treat()
    {
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
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
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','treat'],
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

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】怎么治疗？【{$title}】最佳治疗方法");
        $this->fetch=true;
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function drug()
    {
        $this->getMenuData(7, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
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
        $this->getMenuData(9, 5, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','menu_id','drug'],
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

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.11.1.min.js');
        $this->assign->addCss('/home/views/default/resource/css/style1.css');
        $this->assign->addCss('/homewap/views/default/resource/css/style.css');
        $this->assign->addCss('/homewap/views/default/resource/css/news.css');
        call_user_func(array('parent', __FUNCTION__));
        $title = $this->assign->meta['title'][0];
        unset($this->assign->meta['title'][0]);
        $this->addTitle("【{$title}】的特效药？【{$title}】用什么药");
        $this->fetch=true;
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }
    public function view(){
        call_user_func(array('parent', __FUNCTION__));

    }
}
