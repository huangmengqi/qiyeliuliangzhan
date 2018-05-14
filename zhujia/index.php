<?php
include_once 'QueryList.class.php';
$con=mysqli_connect("localhost","zhuneng5","zhuneng.5.com","zhuneng5");
$con->query("SET NAMES 'UTF8'");  
//采集猪悟能
$url = "http://zhujia.zhuwang.cc/";
$reg = array("area"=>array("td:first","text"),"wai3"=>array("span:first","text"),"nei3"=>array("td:nth-child(3) > span","text"),"tuza"=>array("td:nth-child(4) > span","text"),"yumi"=>array("td:nth-child(5) > span","text"),"doupo"=>array("span:last","text"));
$rang = ".table tbody tr";
$hj = new QueryList($url,$reg,$rang);
$arr = $hj->jsonArr;
$ul = "<ul>";
foreach($arr as $v){
    $ul .= "<li><a href='".$v['area']."' target='_blank'>省份：".$v['area']." 外三元：".$v['wai3']." 内三元：".$v['nei3']." 土杂猪：".$v['tuza']." 玉米：".$v['yumi']." 豆粕：".$v['doupo']."</li>";
    mysqli_query($con,"INSERT INTO eduask_zhujia (area,wai3,nei3,tuza,yumi,doupo,is_verify,menu_id) VALUES ('".$v['area']."','".$v['wai3']."','".$v['nei3']."','".$v['tuza']."','".$v['yumi']."','".$v['doupo']."','1','136')");
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
        <h2 class="title"><a href="http://zhujia.zhuwang.cc/">猪悟能猪价采集</a></h2>
        <p class="notice">提示：http://zhujia.zhuwang.cc/采集下来的列表</p>
        <?php echo $ul;?>
    </div>
</div>
<div class="foot">

</div>
<script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script>
</body>
</html>