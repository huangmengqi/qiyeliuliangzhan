<?php /* Smarty version 3.1.27, created on 2018-05-05 16:06:20
         compiled from "/www/web/zhu5neng/public_html/app/run/view/Tags/create.html" */ ?>
<?php
/*%%SmartyHeaderCode:5040359705aed65fc1e9a97_13861085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ea207edfdd9f825ec594cfa2a04a4eccfb93d8' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/Tags/create.html',
      1 => 1524905228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5040359705aed65fc1e9a97_13861085',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aed65fc20a918_95629269',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aed65fc20a918_95629269')) {
function content_5aed65fc20a918_95629269 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5040359705aed65fc1e9a97_13861085';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>使用PHP导入和导出数据为Excel文件</title>
    <link rel="stylesheet" type="text/css" href="/home/views/default/resource/css/tagsmain.css" />
    
    <style type="text/css">
        .demo{width:400px; height:100px; margin:100px auto}
        .demo p{line-height:42px}
        .btn{width:80px; height:26px; line-height:26px; background:url(/home/views/default/resource/images/btn_bg.gif) repeat-x; border:1px solid #ddd; cursor:pointer}
    </style>
    
</head>

<body>


<div id="main">
    <h2 class="top_title">使用PHP导入或导出猪病问答Excel文件数据</h2>
    <div class="demo">
        <form id="addform" action="http://zhu5neng.com/run/tags/create?action=import" method="post" enctype="multipart/form-data">
            <p>请选择要导入的XLS文件：<br/><input type="file" name="file"> <input type="submit" class="btn" value="导入XLS">
               <!-- <input type="button" class="btn" id="exportCSV" value="导出XLS" onClick="window.location.href='action=export'">--></p>
        </form>
    </div>

</div>

</body>
</html><?php }
}
?>