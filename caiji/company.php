<?php
header("Content-type: text/html; charset=utf-8");
include_once 'QueryList.class.php';
$con=mysqli_connect("localhost","zhuneng5","zhuneng.5.com","zhuneng5");
$con->query("SET NAMES 'UTF8'");
//采集http://www.514193.com/shouyaoqiye/的标题、url、简介、产品图片
$url = "http://www.514193.com/shouyaoqiye/page27.html";
$reg = array("title"=>array(">p >a:eq(0)","text"),"content"=>array(".ct .txt >p:first","text"));
$rang = ".pt_clit li";
$hj = new QueryList($url,$reg,$rang);
$arr = $hj->jsonArr;
$ul = "<ul>";
foreach($arr as $v){
    $ul .= "<li>".$v['title']."</li>
            <li>".$v['content']."</li>";
    //mysqli_query("set names utf8");,substr('".$v['title']."',2)
    mysqli_query($con,"INSERT INTO eduask_company (title,menu_id,content,is_verify,created) VALUES ('".$v['title']."','63','".$v['content']."','1',Now())");
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


