<?php
namespace app\home\controller;

use app\common\controller\Home;

class Menu extends Home
{
    //初始化 需要调父级方法
    public function _initialize()
    {        
        call_user_func(['parent', __FUNCTION__]); 
    }
    
    public function show(){
        $this->getMenuData(136, 8, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(62, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $id  = intval($this->args['menu_id']);
        $this->assign->addJs('/home/views/default/resource/js/jquery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        if ($id <= 0) {
            return $this->notFound();
        }        
        $menu_data = menu($id);
        if (empty($menu_data)) {
            return $this->notFound();
        }
        
        if ($menu_data['type'] == 'Menu') {
            $this->processMenu($id);
            $list  = [];
            foreach ($this->assign->side_menu['menus'] as $menu_id) {
                $list[]= menu($menu_id);
            }
            $this->assign->list = $list;
            $this->assign->page = [];
            $this->assign->render = '';
            $this->fetch = 'show';
            
        } else {
            switch ($menu_data['type']) {
                case 'Exlink':
                    $this->redirect($this->furl($menu_data['ex_link']));
                    break;
                default:
                    $alias = $menu_data['alias'];
                    if (!$alias) {
                        $this->redirect($menu_data['type'] . '/show', ['menu_id' => $menu_data['id']]);
                    } else {
                        $this->redirect($this->absroot . $alias . '.' . config('url_html_suffix'));
                    }
                    break ;
            }            
        }
    }
}
