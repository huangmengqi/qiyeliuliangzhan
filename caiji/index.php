<?php
header("Content-type: text/html; charset=utf-8");
include_once 'QueryList.class.php';
$con=mysqli_connect("localhost","zhuneng5","zhuneng.5.com","zhuneng5");
$con->query("SET NAMES 'UTF8'");
//采集http://www.514193.com/shouyaoqiye/的标题、url、简介、产品图片
$url = "http://www.514193.com/zhaoshang/zsbtob55154.html";
$reg = array("title"=>array("h2","text"),"title1"=>array("div.jieshao.cl > dl:nth-child(1) > dd","text"),"img"=>array(".img img","src"),"chengfen"=>array(".jieshao dl:nth-child(2) > dd","text"),"zhuzhi"=>array("div:nth-child(8) > p","text"),"yongliang"=>array("div:nth-child(10) > p","text"));
$rang = ".adcon";
$hj = new QueryList($url,$reg,$rang);
$arr = $hj->jsonArr;
$ul = "<ul>";
$file = "upload/"; //保存路径
foreach($arr as $v){
    $img = $v['img'];
    $name = substr($img, strrpos($img, '/') + 1); //去除图片路径，获取图片名
    $img_url = "http://www.514193.com$img";
    $img_content = file_get_contents($img_url);
    $img_save = $file . $name; //采集保存的图片
    if (!file_exists($img_save)) {//若是upload没有该图片
        file_put_contents($img_save, $img_content); //保存图片
    }
    $ul .= "<li>药品名：'".$v['title']."'</li>
            <li>通用名称：'".$v['title1']."'</li>
            <li>产品图：'".$v['img']."'</li>
            <li>成分：'".$v['chengfen']."'</li>
            <li>主治：'".$v['zhuzhi']."'</li>
            <li>用量：'".$v['yongliang']."'</li>";
    mysqli_query($con,"INSERT INTO eduask_companydrug (user_id,menu_id,title,title1,image,chengfen,zhuzhi,yongliang,chang_id,list_order,is_verify) VALUES ('1','137','".$v['title']."','".$v['title1']."','".$name."','".$v['chengfen']."','".$v['zhuzhi']."','".$v['yongliang']."','37','0','1')");
}
mysqli_close($con);
$ul .= "</ul>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>猪悟能</title>
    <meta name="keywords" content="猪悟能" />
    <meta name="description" content="猪悟能" />
    <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" />

</head>
<body>

<div class="container">
    <div class="demo">
        <h2 class="title"><a href="http://www.sucaihuo.com/js/178.html">猪悟能厂家采集</a></h2>
        <p class="notice">提示：http://www.514193.com/shouyaoqiye/采集下来的列表</p>
        <?php echo $ul;?>
    </div>
</div>
<div class="foot">

</div>
<script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script>
</body>
</html>


