<?php
namespace app\run\controller;

use app\common\controller\Run;
use think\db;
use think\Loader;
use think\Model;
use think\Request;
class Tags extends Run
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
        include_once("extend/reader.php");
        $host="localhost";
        $db_user="zhuneng5";
        $db_pass="zhuneng.5.com";
        $db_name="zhuneng5";
        $timezone="Asia/Shanghai";

        $link=mysql_connect($host,$db_user,$db_pass);
        mysql_select_db($db_name,$link);
        mysql_query("SET names UTF8");


        //$data = db::table('eduask_menu')->where(['parent_id' => 7, 'level' => 3])->select();
        //$data = db('menu')->where('parent_id',7) ->where('level',3)->select();
        $map['level'] = '3';
        $map['type'] = 'Advice';
        $data = db('menu')->where($map)->SELECT();
        //$ee = $data;
        

        header("Content-Type: text/html; charset=utf-8");
        $action = $_GET['action'];
        if ($action == 'import') { //导入XLS
            include_once("extend/reader.php");
            $tmp = $_FILES['file']['tmp_name'];
            if (empty ($tmp)) {
                echo '请选择要导入的Excel文件！';
                exit;
            }

            $save_path = "xls/";
            $file_name = $save_path.date('Ymdhis') . ".xls";
            if (copy($tmp, $file_name)) {
                $xls = new \Spreadsheet_Excel_Reader();
                $xls->setOutputEncoding('utf-8');
                $xls->read($file_name);
                for ($i=2; $i<=$xls->sheets[0]['numRows']; $i++) {
                    $title = $xls->sheets[0]['cells'][$i][1];
                    $data_values .= "('$title'),";
                }
                $data_values = substr($data_values,0,-1); //去掉最后一个逗号
               /* //echo $sql = "insert into student (name,sex,age) values $data_values";
                $data = db('menu')->where('parent_id', 50)->select();
                $ee = $data[0]['title'];
                mysql_query("SELECT * FROM eduask_linshi WHERE title LIKE '%{$ee}%'");
                mysql_query("INSERT INTO eduask_advice (title,menu_id,is_verify,tags) VALUES ('".strip_tags($data_values)."','1','$ee')");*/
                 $query = mysql_query(" INSERT IGNORE INTO eduask_linshi (title) values $data_values");//批量插入数据表中

                if($query){
                    $map['level'] = '3';
                    $map['type'] = 'Advice';
                    $data = db('menu')->where($map)->SELECT();

                    foreach ($data as $key=>$value){
                        $ee = $value['title'];
                        $sql="SELECT * FROM eduask_linshi WHERE title LIKE '%{$ee}%'";
                        $rs= mysql_query($sql);
                        $users = array();//保存所以得查询到的标题
                        if(!empty($ee)){
                            while ($row=mysql_fetch_assoc($rs)){
                                $row['title'] = str_replace($ee,'<font color="red">'.$ee.'</font>',$row['title']);
                                $users[] = $row;
                            }
                            $arr2 = array_column($users, 'title');

                            foreach ($users as $key=>$value){
                                mysql_query("INSERT INTO eduask_advice (title,is_verify,tags) VALUES ('".strip_tags($value['title'])."','1','$ee')");
                            }
                        }
                    }
                    /*$sql="SELECT * FROM eduask_linshi WHERE title LIKE '%{$ee}%'";
                    $rs= mysql_query($sql);
                    $users = array();//保存所以得查询到的标题
                    if(!empty($ee)){
                        while ($row=mysql_fetch_assoc($rs)){
                            $row['title'] = str_replace($ee,'<font color="red">'.$ee.'</font>',$row['title']);
                            $users[] = $row;
                        }
                        $arr2 = array_column($users, 'title');

                        foreach ($users as $key=>$value){
                            mysql_query("INSERT INTO eduask_advice (title,is_verify,tags) VALUES ('".strip_tags($value['title'])."','1','$ee')");
                        }
                    }*/

                    echo '批量导入并打标签成功！';
                }else{
                    echo '导入失败！';
                }








            }
        } elseif ($action=='export') { //导出XLS
           /* $result = mysql_query("select * from student");
            $str = "姓名\t性别\t年龄\t\n";
            $str = iconv('utf-8','gb2312',$str);
            while($row=mysql_fetch_array($result)){
                $name = iconv('utf-8','gb2312',$row['name']);
                $sex = iconv('utf-8','gb2312',$row['sex']);
                $str .= $name."\t".$sex."\t".$row['age']."\t\n";
            }
            $filename = date('Ymd').'.xls';
            exportExcel($filename,$str);*/
        }


        function exportExcel($filename,$content){
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Content-Type: application/vnd.ms-execl");
            header("Content-Type: application/force-download");
            header("Content-Type: application/download");
            header("Content-Disposition: attachment; filename=".$filename);
            header("Content-Transfer-Encoding: binary");
            header("Pragma: no-cache");
            header("Expires: 0");

            echo $content;
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
       /* $data = db('advice')->Distinct(true)->field('tags')->select();  //利用distinct方法去重
        pr($data);*/
        $data = db('menu')->where('parent_id', 7)->select();
        $this->assign->data = $data;


        if ($this->request->isPost()) {  //form表单应该是 post提交

            $data = input('post.');//获取到你提交的数据
            pr($data);//打印看下获取到的数据
            pr($data['menu_id']);
            pr($data['tag']);
			 pr($data['gai']);
            pr($data['gaiid']);
			$menu = model('Menu');// save方法第二个参数为更新条件
            $menu->where('id', $data['gaiid'])->update(['title' => $data['gai']]);
            $res = Loader::model('Menu')->after_write();
            $menu::destroy(['id' => $data['deleteid']]);

            $menu = model('Menu');// 模型对象赋值
            $menu->data([
                'parent_id' => $data['menu_id'],
                'level' => 3,
                'title' => $data['tag'],
                'type' => 'Advice',
                'is_nav' => 1,
                'is_map' => 1,
            ]);
            $menu->save();

        }

        /*if(!empty($_POST["t1"]))
        {
            $array = $_POST["t1"];

            $str =implode(',',$array);
            echo $str."<br>"; //输出标签 //$str 存入数据库

            $arr=explode(',',$str);//从数据库取出数据时用。
            print_r($arr);//输出 Array ( [0] => 母猪 [1] => 发情 ）//数据库输出用explode变回数组array

            $serialize=serialize($array);
            echo "<br>".$serialize."<br>"; //输出 a:4:{i:0;s:4:"母猪";i:1;s:4:"发情";} 存入数据后也是这样子。

            $unserialize = unserialize($serialize);
            print_r($unserialize); //输出 Array ( [0] => 母猪 [1] => 发情 ) 变回array
            foreach ($arr as $value) {

                $menu = model('Menu');// 模型对象赋值
                $menu->data([
                    'parent_id' => 50,
                    'level' => 3,
                    'title' => $value,
                    'type' => 'Advice',
                    'is_nav' => 1,
                    'is_map' => 1,
                ]);
                $menu->save();
                //mysql_query("INSERT INTO eduask_menu (parent_id,level,title,type,is_nav,is_map) VALUES (50,3,'$key','Advice',1,1)");
            }

        }

        if(!empty($_POST["t2"]))
        {
            $array = $_POST["t2"];

            $str =implode(',',$array);
            echo $str."<br>"; //输出标签 //$str 存入数据库

            $arr=explode(',',$str);//从数据库取出数据时用。
            print_r($arr);//输出 Array ( [0] => 母猪 [1] => 发情 ）//数据库输出用explode变回数组array

            $serialize=serialize($array);
            echo "<br>".$serialize."<br>"; //输出 a:4:{i:0;s:4:"母猪";i:1;s:4:"发情";} 存入数据后也是这样子。

            $unserialize = unserialize($serialize);
            print_r($unserialize); //输出 Array ( [0] => 母猪 [1] => 发情 ) 变回array
            foreach ($arr as $value) {

                $menu = model('Menu');// 模型对象赋值
                $menu->data([
                    'parent_id' => 51,
                    'level' => 3,
                    'title' => $value,
                    'type' => 'Advice',
                    'is_nav' => 1,
                    'is_map' => 1,
                ]);
                $menu->save();
                //mysql_query("INSERT INTO eduask_menu (parent_id,level,title,type,is_nav,is_map) VALUES (50,3,'$key','Advice',1,1)");
            }

        }
        if(!empty($_POST["t3"]))
        {
            $array = $_POST["t3"];

            $str =implode(',',$array);
            echo $str."<br>"; //输出标签 //$str 存入数据库

            $arr=explode(',',$str);//从数据库取出数据时用。
            print_r($arr);//输出 Array ( [0] => 母猪 [1] => 发情 ）//数据库输出用explode变回数组array

            $serialize=serialize($array);
            echo "<br>".$serialize."<br>"; //输出 a:4:{i:0;s:4:"母猪";i:1;s:4:"发情";} 存入数据后也是这样子。

            $unserialize = unserialize($serialize);
            print_r($unserialize); //输出 Array ( [0] => 母猪 [1] => 发情 ) 变回array
            foreach ($arr as $value) {

                $menu = model('Menu');// 模型对象赋值
                $menu->data([
                    'parent_id' => 52,
                    'level' => 3,
                    'title' => $value,
                    'type' => 'Advice',
                    'is_nav' => 1,
                    'is_map' => 1,
                ]);
                $menu->save();
                //mysql_query("INSERT INTO eduask_menu (parent_id,level,title,type,is_nav,is_map) VALUES (50,3,'$key','Advice',1,1)");
            }

        }

        $this->assign->addJs('/layui/layui.js');
        $this->assign->addCss('/layui/css/layui.css');
        $this->assign->addCss('/layui/style.css');*/
        $this->fetch = true;
    }

}
