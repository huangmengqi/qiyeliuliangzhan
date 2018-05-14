<?php
namespace app\run\controller;

use app\common\controller\Run;
use think\db;
use think\Model;
use think\Request;
class Bufq extends Run
{
    public function _initialize(){

        call_user_func(array('parent', __FUNCTION__));
    }

    public function lists(){
        if (!$this->local['filter']) {
            $this->local['filter'] = [
                'title',
                'menu_id',
                'date'
            ];
        }

        if (!$this->local['list_fields'])
            $this->local['list_fields'] = array(
                'title',
                //'ex_title',
                'menu_id',
                'image',
                'date',
                //'user_id',
                //'created',
                'is_verify',
                'is_index',
                'list_order'
            );
        call_user_func(array('parent',__FUNCTION__));
    }


    public function create()
    {
        $this->mdl->form['created']['elem'] = 'format';
        $this->mdl->form['modified']['elem'] = 'format';
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.6.min.js');
        $this->assign->addJs('/home/views/default/resource/js/jjquery.reveal.js');
        $this->assign->addJs('/zt_muzhu/js/jQuery.js');
        $this->assign->addJs('/zt_muzhu/js/jquery.min.js');
        $this->assign->addJs('/zt_muzhu/js/jquery-1.7.2.min.js');
        $this->assign->addJs('/zt_muzhu/js/jquery.min.js');
        $this->assign->addJs('/zt_muzhu/js/Marquee-min.js');
        $this->assign->addJs('/zt_muzhu/js/gongyong.js');
        $this->assign->addCss('/zt_muzhu/css/style.css');
        $this->assign->addCss('/zt_muzhu/css/neiye.css');
        $this->assign->addCss('/zt_muzhu/css/topic.css');
        $this->assign->addCss('/home/views/default/resource/css/reveal.css');
        if ($this->request->isPost()) {  //form表单应该是 post提交

            //当点击提交进入
            $data = input('post.');
            $data['menu_id'] = $this->args['parent_id'];
            
            //begin
            if ($_FILES['image']) {
                $filepath = uploadFile($_FILES['image'], 'Bufq');
                $data['image'] = $filepath;
            }
            if ($_FILES['imagel']) {
                $filepath = uploadFile($_FILES['imagel'], 'Bufq');
                $data['imagel'] = $filepath;
            }
            if ($_FILES['imager']) {
                $filepath = uploadFile($_FILES['imager'], 'Bufq');
                $data['imager'] = $filepath;
            }
            
            db('Bufq')->insert($data);
            $id = db('Bufq')->getLastInsID();
            $this->redirect('run/Bufq/modify', ['id' => $id]);
            //end
            
            
            /*
            Db::table('eduask_bufq')->insert($data);

            $filepath = uploadFile($_FILES['image'], 'Bufq');

            if ($filepath) {

                $data['image'] = $this->args['parent_id'];
                Db::table('eduask_bufq')->insert($data);
            }
            $filepath = uploadFile($_FILES['imagel'], 'Bufq');

            if ($filepath) {
                $data['imagel'] = $this->args['filepath'];
                Db::table('eduask_bufq')->insert($data);
            }
            $filepath = uploadFile($_FILES['imager'], 'Bufq');
            if ($filepath) {
                $data['imager'] = $this->args['filepath'];
                Db::table('eduask_bufq')->insert($data);
            }
            $id = db('Bufq')->getLastInsID();
            $this->redirect('http://www.hmq.com/run/bufq/modify/id/$id.html');
            */
        }
        $this->fetch = true;

    }

    public function delete()
    {
        return call_user_func(array('parent', __FUNCTION__));
    }

    public function modify()
    {
        $this->mdl->form['created']['elem'] = 'format';
        $this->mdl->form['modified']['elem'] = 'format';
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.6.min.js');
        $this->assign->addJs('/home/views/default/resource/js/jjquery.reveal.js');
        $this->assign->addJs('/zt_muzhu/js/jQuery.js');
        $this->assign->addJs('/zt_muzhu/js/jquery.min.js');
        $this->assign->addJs('/zt_muzhu/js/jquery-1.7.2.min.js');
        $this->assign->addJs('/zt_muzhu/js/jquery.min.js');
        $this->assign->addJs('/zt_muzhu/js/Marquee-min.js');
        $this->assign->addJs('/zt_muzhu/js/gongyong.js');
        $this->assign->addCss('/zt_muzhu/css/style.css');
        $this->assign->addCss('/zt_muzhu/css/neiye.css');
        $this->assign->addCss('/zt_muzhu/css/topic.css');
        $this->assign->addCss('/home/views/default/resource/css/reveal.css');
        call_user_func(array('parent', __FUNCTION__));
        if ($this->request->isPost()) {  //你的form表单应该是 post提交
            //当点击提交进入
            $data = input('post.');//获取到你提交的数据
            //pr($data);//打印看下获取到的数据
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title', $data['title']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title1', $data['title1']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('analysis', $data['analysis']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title2', $data['title2']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('misunderstandings', $data['misunderstandings']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title3', $data['title3']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('complication', $data['complication']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title4', $data['title4']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('thinking', $data['thinking']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title5', $data['title5']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('plan', $data['plan']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title6', $data['title6']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('remind', $data['remind']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title7', $data['title7']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('recommend', $data['recommend']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title8', $data['title8']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect1', $data['effect1']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect2', $data['effect2']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect3', $data['effect3']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect4', $data['effect4']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect5', $data['effect5']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title9', $data['title9']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('mechanism', $data['mechanism']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title10', $data['title10']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('action', $data['action']);
            $filepath = uploadFile($_FILES['image'], 'Bufq');
            if ($filepath) {
                db($this->m)->where(['id' => (int)$this->args['id']])->setField('image',$filepath);
            }
            $filepath = uploadFile($_FILES['imagel'], 'Bufq');
            if ($filepath) {
                db($this->m)->where(['id' => (int)$this->args['id']])->setField('imagel',$filepath);
            }
            $filepath = uploadFile($_FILES['imager'], 'Bufq');
            if ($filepath) {
                db($this->m)->where(['id' => (int)$this->args['id']])->setField('imager',$filepath);
            }

            $this->redirect('run/Bufq/modify',['id' => (int)$this->args['id']]);
        } else {
            $data = db($this->m)->where(['id' => (int)$this->args['id']])->find();//获取到你要修改的那天数据
            if (empty($data)) {
                //如果没有获取到数据 提示
                return $this->message('error', '数据不存在');
            }
            $this->assign->data = $data;//把查询到的数据传递到页面去 你页面上就可以使用$data获取数据了
        }
        $this->fetch = true;
    }

}
