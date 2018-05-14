<?php
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';
$conn = @mysql_connect("localhost", "zhuneng5", "zhuneng.5.com") or die("数据库链接错误");
mysql_select_db("zhuneng5", $conn);
mysql_query("set names 'utf8'"); //使用utf-8中文编码;
//PHP模糊查询
$sql="SELECT * FROM eduask_linshi WHERE title LIKE '%{$keywords}%'";
$rs= mysql_query($sql);
$users = array();//保存所以得查询到的标题
if(!empty($keywords)){
    while ($row=mysql_fetch_assoc($rs)){
        $row['title'] = str_replace($keywords,'<font color="red">'.$keywords.'</font>',$row['title']);
        $users[] = $row;
    }
    $arr2 = array_column($users, 'title');

    foreach ($users as $key=>$value){
        mysql_query("INSERT INTO eduask_advice (title,is_verify,tags) VALUES ('".strip_tags($value['title'])."','1','$keywords')");
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查询器</title>
    <style>
        .textbox {
            width: 355px;
            height: 40px;
            border-radius: 3px;
            border: 1px solid #e2b709;
            padding-left: 10px;
        }

        .su {
            width: 365px;
            height: 40px;
            background-color: #7fbdf0;
            color: white;
            border: 1px solid #666666;

        }
        table{ background-color: #7fbdf0; line-height:25px;margin: 0 auto}
        th{ background-color:#fff;}
        td{ background-color:#fff; text-align:center}
    </style>
</head>
<body  style="text-align:center">
<form action="" method="get">
    <p><input type="text" name="keywords" value="" placeholder="请输入内容"/>
    <p><input type="submit" value="查询"/>
</form>
<?php
if ($keywords){
    echo '<h3>查询关键词：<font color="red">'.$keywords.'</font></h3>';
}
if ($users){
    echo '<table width="500" cellpadding="5" >';
    echo '<tr><th>标题</th>';
    foreach ($users as $key=>$value){
        echo '<tr>';
        echo '<td>'.$value['title'].'</td>';
        echo '</tr>';

    }
}else{
    echo '没有查询到相关标题';
}
?>
</body>
</html>