<?php
namespace app\home\controller;

use app\common\controller\Home;
use app\common\utility\Hash;

class Index extends Home
{
    public function _initialize()
    {
        if(parent::ismobile()){
            redirect("{$absroot}wap");
        }else{
            redirect("{$absroot}");
        }
        call_user_func(array('parent',__FUNCTION__));
        $this->assign->top_id = 0;

    }
    
    
    ##采集价格请求方法
    public function get_price()
    {
        set_time_limit(0);
        ##比较有正确的token 请妥善保管token 防止其人访问
        if (md5($this->args['token']) != '31ed8a95ec3ea5954c48cc76f659ae3e') {
            exit('token码错误');
        }
        
        ##判断今天是否已经采集过了，如果已经采集了就不允许采集
        $count  = db('Pigprice')->where(['date' => date('Y-m-d')])->count();
        if ($count) {
            exit(date('Y-m-d') . '的价格已经采集过了');
        }        
        
        
        ##获取到所有的省份
        $province  = db('Region')->where(['parent_id' => 1])->select();
        ##查询出来大致的结构：
        /**
        Array
        (
            [0] => Array
                (
                    [id] => 2
                    [parent_id] => 1
                    [title] => 广东省
                    [list_order] => 0
                )
        
            [1] => Array
                (
                    [id] => 142
                    [parent_id] => 1
                    [title] => 山东省
                    [list_order] => 0
                )
            ...
        )
        */
        ##重新处理数据结构，方面后面使用
        $province = Hash::combine($province, '{n}.title', '{n}.id');
        ##改变以后的数据结构  地点名=> id        
        /**
       Array
        (
        [广东省] => 2
        [山东省] => 142
        [河南省] => 160
        [江西省] => 179
        [河北省] => 191
        [江苏省] => 203
        [湖南省] => 217
        [广西] => 232
        [福建省] => 247
        [北京市] => 257
        [湖北省] => 259
        ....... 
        */    
        
        include_once LIBS_VENDOR_PATH . DS . 'phpQuery' . DS . 'phpQuery.php';  
        $url = "http://zhujia.zhuwang.cc/index.shtml";      
        \phpQuery::newDocumentFile($url);
        ##获取所有采集的tr  
        $table  = pq('.zj_diqu')->find('tbody')->find('tr');
        $big_data = [];
        ##获取到省份价格
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());
            if ($name) {                
                ##获取到3个价格
                $data['price1'] = trim(pq($tr)->find('td:eq(1) span')->html());
                $data['price1_class'] = pq($tr)->find('td:eq(1) span')->attr('class');
                $data['price2'] = trim(pq($tr)->find('td:eq(2) span')->html());
                $data['price2_class'] = pq($tr)->find('td:eq(2) span')->attr('class');
                $data['price3'] = trim(pq($tr)->find('td:eq(3) span')->html());
                $data['price3_class'] = pq($tr)->find('td:eq(3) span')->attr('class');
                $data['price4'] = trim(pq($tr)->find('td:eq(4) span')->html());
                $data['price4_class'] = pq($tr)->find('td:eq(4) span')->attr('class');
                $data['price5'] = trim(pq($tr)->find('td:eq(5) span')->html());
                $data['price5_class'] = pq($tr)->find('td:eq(5) span')->attr('class');
                $data['name'] = $name;
                ##获取到今天的日期
                $data['date'] = date('Y-m-d');
                ##获取到对应地区关联id
                $data['region_id'] = $province[$name];
                ##将data装进$big_data最后来执行批量插入，以免一条一条的插入频繁操作数据库
                $big_data[] = $data;

                ##获取到市级价格
                preg_match('/window.open\(\'(.*?)\'\s?,\s?\'_self\'\)/', pq($tr)->attr('onclick'), $child_url);
                $child_url = $child_url[1];##获取到下级的连接
                $child_data  = $this->get_price_city($child_url, $province[$name]);
                $big_data = array_merge($big_data, $child_data);
            }
        }  
        db('Pigprice')->insertAll($big_data);
        echo 'success';
    }
    
    ##获取到某个市级地区的价格数据
    protected function get_price_city($url, $province_id)
    {
        set_time_limit(0);
        $city  = db('Region')->where(['parent_id' => $province_id])->select();
        ##改变以后的数据结构  地点名=> id  
        $city = Hash::combine($city, '{n}.title', '{n}.id');       
        
        \phpQuery::newDocumentFile($url);
        ##获取所有采集的tr  
        $table  = pq('.zj_diqu')->find('tbody')->find('tr');
        $big_data = [];
        ##获取到省份价格
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());
            if ($name) {
                ##获取到3个价格
                $data['price1'] = trim(pq($tr)->find('td:eq(1) span')->html());
                $data['price1_class'] = pq($tr)->find('td:eq(1) span')->attr('class');
                $data['price2'] = trim(pq($tr)->find('td:eq(2) span')->html());
                $data['price2_class'] = pq($tr)->find('td:eq(2) span')->attr('class');
                $data['price3'] = trim(pq($tr)->find('td:eq(3) span')->html());
                $data['price3_class'] = pq($tr)->find('td:eq(3) span')->attr('class');
                $data['price4'] = trim(pq($tr)->find('td:eq(4) span')->html());
                $data['price4_class'] = pq($tr)->find('td:eq(4) span')->attr('class');
                $data['price5'] = trim(pq($tr)->find('td:eq(5) span')->html());
                $data['price5_class'] = pq($tr)->find('td:eq(5) span')->attr('class');
                $data['name'] = $name;
                ##获取到今天的日期
                $data['date'] = date('Y-m-d');
                ##获取到对应地区关联id
                $data['region_id'] = $city[$name];
                ##将data装进$big_data最后来执行批量插入，以免一条一条的插入频繁操作数据库
                $big_data[] = $data;

                ##获取到市级价格
                preg_match('/window.open\(\'(.*?)\'\s?,\s?\'_self\'\)/', pq($tr)->attr('onclick'), $child_url);
                $child_url = $child_url[1];##获取到下级的连接
                $child_data  = $this->get_price_area($child_url, $city[$name]);
                $big_data = array_merge($big_data, $child_data);
            }
        }
        return $big_data;
        
    }
    
    ##获取到某个区级地区的价格数据
    protected function get_price_area($url, $city_id)
    {
        set_time_limit(0);
        $area  = db('Region')->where(['parent_id' => $city_id])->select();
        ##改变以后的数据结构  地点名=> id  
        $area = Hash::combine($area, '{n}.title', '{n}.id');       
        
        \phpQuery::newDocumentFile($url);
        ##获取所有采集的tr  
        $table  = pq('.zj_diqu')->find('tbody')->find('tr');
        $big_data = [];
        ##获取到省份价格
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());
            if ($name) {
                ##获取到3个价格
                $data['price1'] = trim(pq($tr)->find('td:eq(1) span')->html());
                $data['price1_class'] = pq($tr)->find('td:eq(1) span')->attr('class');
                $data['price2'] = trim(pq($tr)->find('td:eq(2) span')->html());
                $data['price2_class'] = pq($tr)->find('td:eq(2) span')->attr('class');
                $data['price3'] = trim(pq($tr)->find('td:eq(3) span')->html());
                $data['price3_class'] = pq($tr)->find('td:eq(3) span')->attr('class');
                $data['price4'] = trim(pq($tr)->find('td:eq(4) span')->html());
                $data['price4_class'] = pq($tr)->find('td:eq(4) span')->attr('class');
                $data['price5'] = trim(pq($tr)->find('td:eq(5) span')->html());
                $data['price5_class'] = pq($tr)->find('td:eq(5) span')->attr('class');
                $data['name'] = $name;
                ##获取到今天的日期
                $data['date'] = date('Y-m-d');
                ##获取到对应地区关联id
                $data['region_id'] = $area[$name];
                ##将data装进$big_data最后来执行批量插入，以免一条一条的插入频繁操作数据库
                $big_data[] = $data;
            }
        }
        return $big_data;
    }
    
    ##----------------------------下面是获取地址采集
    
    public function get_area()
    {
        if (md5($this->args['token']) == '31ed8a95ec3ea5954c48cc76f659ae3e') {
            ##关闭时间限制
            set_time_limit(0);
            //情况地区数据
            db()->query('TRUNCATE TABLE `eduask_region`');
            //添加一条根节点数据并返回id值
            $data = [
                'parent_id' => 0,
                'title' => '根节点'
            ];
            $id  = db('Region')->insertGetId($data);
            $this->query_province("http://zhujia.zhuwang.cc/index.shtml");
        } else {
            exit('token码错误');
        }
    }
    
    ##获取省份地区
    protected function query_province($url)
    {
        include_once LIBS_VENDOR_PATH . DS . 'phpQuery' . DS . 'phpQuery.php';        
        \phpQuery::newDocumentFile($url);
        ##获取所有采集的tr  
        $table  = pq('.zj_diqu')->find('tbody')->find('tr');
        $big_data =  [];      
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());##获取到地区名
            if ($name) {
                $data = [
                    'parent_id' => 1,
                    'title' => trim($name)
                ];
                $big_data[]  = $data;               
            }
        } 
        ##插入数据，一次插入所有省份
        db('Region')->insertAll($big_data);
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());##获取到地区名
            if ($name) { 
                preg_match('/window.open\(\'(.*?)\'\s?,\s?\'_self\'\)/', pq($tr)->attr('onclick'), $child_url);
                $child_url = $child_url[1];##获取到下级的连接
                ##三级内递归查询，我们只做省、市、区
                $this->query_city($child_url, $name);
            }
        }
    }
    
    ##获取市级地区
    protected function query_city($url, $province)
    {
        include_once LIBS_VENDOR_PATH . DS . 'phpQuery' . DS . 'phpQuery.php';        
        \phpQuery::newDocumentFile($url);
        
        ##获取到指定省份的数据
        $province = db('Region')->where(['title' => $province])->find();        
        
        ##获取所有采集的tr  
        $table  = pq('.zj_diqu')->find('tbody')->find('tr');
        $big_data =  [];      
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());##获取到地区名
            if ($name) {
                $data = [
                    'parent_id' => $province['id'],
                    'title' => trim($name)
                ];
                $big_data[]  = $data;               
            }
        } 
        ##插入数据，一次插入所有该省的市
        db('Region')->insertAll($big_data);
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());##获取到地区名
            if ($name) { 
                preg_match('/window.open\(\'(.*?)\'\s?,\s?\'_self\'\)/', pq($tr)->attr('onclick'), $child_url);
                $child_url = $child_url[1];##获取到下级的连接
                ##三级内递归查询，我们只做省、市、区
                $this->query_area($child_url, $name);
            }
        }
    }
    
    
    ##获取区级地区
    protected function query_area($url, $city)
    {
        include_once LIBS_VENDOR_PATH . DS . 'phpQuery' . DS . 'phpQuery.php';        
        \phpQuery::newDocumentFile($url);
        
        ##获取到指定市的数据
        $city = db('Region')->where(['title' => $city])->find();
        
        ##获取所有采集的tr  
        $table  = pq('.zj_diqu')->find('tbody')->find('tr');
        $big_data =  [];      
        foreach ($table as $tr) {
            $name  = trim(pq($tr)->find('td:eq(0)')->html());##获取到地区名
            if ($name) {
                $data = [
                    'parent_id' => $city['id'],
                    'title' => trim($name)
                ];
                $big_data[]  = $data;               
            }
        }
        ##插入数据，一次插入所有该市的区
        db('Region')->insertAll($big_data);
    }
    
    
    

    //首页
    public function index()
    {
		if ($this->isMobile) {
			$this->assign->addCss('/home/views/default/resource/css/stylewap.css');
		
		} else {
		    $this->assign->addJs('/home/views/default/resource/js/jquery-1.7.2.min.js');
			$this->assign->addJs('/home/views/default/resource/js/jquery.flexslider-min.js');
			$this->assign->addCss('/home/views/default/resource/css/style.css');
		}

        $this->getMenuData(5, 8, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(56, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(57, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(59, 1, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        /*
        $this->getMenuData(136, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title','image','content1'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        */
        $this->getMenuData(62, 3, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','menu_id','imagel','thinking'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(50, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
            'order' => ['is_index' => 'DESC','id'=>'DESC']
        ]);
        $this->getMenuData(51, 13, [
            'family' => true,
            'type' => 'select',
            'contain' => [],
            'where' => [],
            'field' => ['id','title'],
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
        $this->assign->addJs('/home/views/default/resource/js/jquery-1.7.2.min.js');
        $this->assign->addJs('/home/views/default/resource/js/jquery.flexslider-min.js');
        $this->assign->addCss('/home/views/default/resource/css/style.css');
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
