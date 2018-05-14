<?php
namespace app\wap\controller;

use app\common\controller\Wap;
use think\db;
class Bufq extends Wap
{
    public function _initialize()
    {

        call_user_func(array('parent', __FUNCTION__));
    }

    public function show()
    {

        call_user_func(array('parent', __FUNCTION__));

        $this->assign->addJs('/home/views/default/resource/js/jQuery.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
        $this->assign->addCss('/home/views/default/resource/css/neiye.css');
        //$this->redirect($this->redirect($this->m.'/view', ['id' => $this->assign->list[0]['id']]));
    }

    public function view()
    {
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
       /* if ($this->request->isPost()) {  //你的form表单应该是 post提交
            //当点击提交进入
            $data = input('post.');//获取到你提交的数据
            //pr($data);//可以去除注释  打印看下获取到的数据
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title', $data['title']);//修改title字段 一次性修改多字段 自己看tp手册修改
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('analysis', $data['analysis']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('misunderstandings', $data['misunderstandings']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('complication', $data['complication']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('plan', $data['plan']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('remind', $data['remind']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('recommend', $data['recommend']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect1', $data['effect1']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect2', $data['effect2']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect3', $data['effect3']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect4', $data['effect4']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('component', $data['component']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('mechanism', $data['mechanism']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('action', $data['action']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('thinking', $data['thinking']);//修改title字段 一次性修改多字段 自己看tp手册修改
            return $this->message('success', '数据修改成功');
        } else {
            $data = db($this->m)->where(['id' => (int)$this->args['id']])->find();//获取到你要修改的那天数据
            if (empty($data)) {
                //如果没有获取到数据 提示
                return $this->message('error', '数据不存在');
            }
            $this->assign->data = $data;//把查询到的数据传递到页面去 你页面上就可以使用$data获取数据了
        }
        $this->fetch = true;*/
    }
    public function xiugai()
    {
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
            //pr($data);//可以去除注释  打印看下获取到的数据
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('title', $data['title']);//修改title字段 一次性修改多字段 自己看tp手册修改
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('analysis', $data['analysis']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('misunderstandings', $data['misunderstandings']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('complication', $data['complication']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('plan', $data['plan']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('remind', $data['remind']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('recommend', $data['recommend']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect1', $data['effect1']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect2', $data['effect2']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect3', $data['effect3']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('effect4', $data['effect4']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('component', $data['component']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('mechanism', $data['mechanism']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('action', $data['action']);
            db($this->m)->where(['id' => (int)$this->args['id']])->setField('thinking', $data['thinking']);//修改title字段 一次性修改多字段 自己看tp手册修改
            return $this->message('success', '数据修改成功');
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


