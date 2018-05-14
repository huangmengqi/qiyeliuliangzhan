<?php /* Smarty version 3.1.27, created on 2018-05-05 20:32:44
         compiled from "/www/web/zhu5neng/public_html/app/run/view/Tags/modify.html" */ ?>
<?php
/*%%SmartyHeaderCode:21088867605aeda46c66e0f6_54901618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77871c976b99ef7f10135a778020154d722869f6' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/Tags/modify.html',
      1 => 1525523550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21088867605aeda46c66e0f6_54901618',
  'variables' => 
  array (
    'data' => 0,
    'ii' => 0,
    'level1_id' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aeda46c759464_98818942',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aeda46c759464_98818942')) {
function content_5aeda46c759464_98818942 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21088867605aeda46c66e0f6_54901618';
?>
<!--
<div style="text-align:center;">
    
    <style type="text/css">
        *{padding: 0;margin:0;}
        ul,li{list-style: none}
        .left{float: left;}
        .right{float: right;}
        .select_contain{font-size: 14px;color: #333;line-height: 38px;margin-left: 630px;}
        .select_item{margin-right: 50px;position: relative;}
        .select_tit{margin-right: 20px;}
        .select_result{width: 100px;line-height: 38px;border:1px solid #ccc;text-align: center;border-radius: 4px;text-indent: -8px;cursor:pointer;}
        .select_result .triangle{border:5px solid transparent;border-top:5px solid #666;position: absolute;top: 16px; right:8px;}
        .select_item ul{display:none;position:absolute;top:100%;right:0;width:100px;background: #f3f3f3;border:1px solid #ccc;border-radius:0 0 4px 4px; border-top-color:#f3f3f3;margin-top:-4px;}
        .select_item ul li{text-align: center;cursor: pointer;}
        .select_item ul li:hover{background: #f4a100; color: #fff;}
    </style>
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/3.2.1/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function select(){
            $(document).click(function(){
                $(".select_module_con ul").slideUp();
            })
            var module=$(".select_result");
            module.click(function(e){
                e.stopPropagation();
                var ul=$(this).next();
                ul.stop().slideToggle();
                ul.children().click(function(e){
                    e.stopPropagation();
                    $(this).parent().prev().children("span").text($(this).text());
                    ul.stop().slideUp();
                })
            })
        }
        $(function(){
            select();
        })
    <?php echo '</script'; ?>
>
    

<h3>母猪常见病咨询标签分类</h3>
<form method=post action="" name="form1">
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ii']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->value) {
$_smarty_tpl->tpl_vars['ii']->_loop = true;
$foreach_ii_Sav = $_smarty_tpl->tpl_vars['ii'];
?>
        <input type="checkbox" name="t1[]" value="<?php echo $_smarty_tpl->tpl_vars['ii']->value['tags'];?>
"><?php echo $_smarty_tpl->tpl_vars['ii']->value['tags'];?>
<br>
    <?php
$_smarty_tpl->tpl_vars['ii'] = $foreach_ii_Sav;
}
?>
    <input type="submit">

</form>


<h3>乳猪常见病咨询标签分类</h3>
<form method=post action="" name="form2">
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ii']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->value) {
$_smarty_tpl->tpl_vars['ii']->_loop = true;
$foreach_ii_Sav = $_smarty_tpl->tpl_vars['ii'];
?>
    <input type="checkbox" name="t2[]" value="<?php echo $_smarty_tpl->tpl_vars['ii']->value['tags'];?>
"><?php echo $_smarty_tpl->tpl_vars['ii']->value['tags'];?>
<br>
    <?php
$_smarty_tpl->tpl_vars['ii'] = $foreach_ii_Sav;
}
?>
    <input type="submit">
</form>


<h3>热门猪病咨询标签分类</h3>
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
            <label class="layui-form-label">单行选择框</label>
            <div class="layui-input-block">
                <select name="interest" lay-filter="aihao">
                    <option value=""></option>
                    <option value="0">写作</option>
                    <option value="1" selected="">阅读</option>
                    <option value="2">游戏</option>
                    <option value="3">音乐</option>
                    <option value="4">旅行</option>
                </select>
            </div>
        </div>
    </form>
    &lt;!&ndash; 特效/效果 HTML代码部分 结束 &ndash;&gt;


    &lt;!&ndash; 此特效 网页布局效果对应自定义的JS代码 开始&ndash;&gt;
    <?php echo '<script'; ?>
>
        layui.use(['form'], function(){
            var form = layui.form
                ,layer = layui.layer
        });
    <?php echo '</script'; ?>
>

</div>
-->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>编辑标签</title>
    <link rel="stylesheet" href="/layui/css/layui1.css">
    <!-- layui/css/layui.css 自带css文件 不修改 不删除 -->
    <link rel="stylesheet" href="/layui/style.css"/>
    <!-- style.css为您开发CSS文件 -->
    <?php echo '<script'; ?>
 src="/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/views/default/resource/js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
    <style type="text/css">
        
        .left,.center,.right,.ff{
            padding:0px;
            margin:0px;
            border:0px;
            float:left;
            height:100px;
        }
        .left,.right,.ff,.center{
            width:25%;
        }



        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
            position: absolute;
            top: 30%;
            left: 30%;
            width:30%;
            height: 30%;
            border: 1px solid lightblue;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }

        
    </style>

    <?php echo '<script'; ?>
 type="text/javascript">
        //弹出隐藏层
        function ShowDiv(show_div,bg_div){
            document.getElementById(show_div).style.display='block';
            document.getElementById(bg_div).style.display='block' ;
            bgdiv.style.width = document.body.scrollWidth;
            //bgdiv.style.height = $(document).height();
            $("#"+bg_div).height($(document).height());
        };
        //关闭弹出层
        function CloseDiv(show_div,bg_div)
        {
            document.getElementById(show_div).style.display='none';
            document.getElementById(bg_div).style.display='none';
        };

    <?php echo '</script'; ?>
>

    <!-- layui/layui.js 自带JS 不修改 不删除 -->
</head>
<body>
<!-- 特效/效果 HTML代码部分 开始 -->
<div>
    <br>
    <br>
    <br>
    <br>
    <span class="layui-colla-title" >添加标签</span>
<form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data">
    <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
        <label class="layui-form-label">选择分类：</label>
        <div class="layui-input-block">
            <select name="menu_id" lay-filter="aihao">
                <option value="" readonly="true">--选择--</option>
                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ii']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->value) {
$_smarty_tpl->tpl_vars['ii']->_loop = true;
$foreach_ii_Sav = $_smarty_tpl->tpl_vars['ii'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ii']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ii']->value['title'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['ii'] = $foreach_ii_Sav;
}
?>
            </select>
        </div>
    </div><br>
    <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
        <label class="layui-form-label">输入标签：</label>
        <div class="layui-input-block">
            <input type="text" name="tag" placeholder="请输入" autocomplete="off" class="layui-input">
        </div>
    </div><br>
    <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="*" type="submit">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<!-- 特效/效果 HTML代码部分 结束 -->
    <br><br>

<div id="main">
    <div class="left">
        <span class="layui-colla-title" >种群分类：</span>

        <?php
$_from = menu('nav_children',50);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
        <ul>
            <li style="text-align:center">
                <div class="case_w">
                    <div>
                    <button class="layui-btn layui-btn-primary layui-btn-radius"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
                    <input id="Button1" type="button" value="编辑" onclick="ShowDiv('MyDiv<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')" />
                    <!--弹出层时背景层DIV-->

                    <input id="Button2" type="button" value="删除" onclick="ShowDiv('MyDiv<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')" />
                    <div>
                        <br>
                    <div id="fade" class="black_overlay">
                    </div>
                    <div id="MyDiv<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" class="white_content">
                        <div style="text-align: right; cursor: default; height: 10px;" id="move">
                            <span style="font-size: 16px;" onclick="CloseDiv('MyDiv<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')">关闭</span>
                        </div>
                        <br>
                        <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <label class="layui-form-label">编号：</label>
                            <div class="layui-input-block">
                                <input type="text" name="gaiid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <label class="layui-form-label">输入标签：</label>
                            <div class="layui-input-block">
                                <input type="text" name="gai" value="<?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <br>
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>

                        </form>
                    </div>

                    <div id="MyDiv<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="white_content">
                        <div style="text-align: right; cursor: default; height: 10px;" id="move1">
                            <span style="font-size: 16px;" onclick="CloseDiv('MyDiv<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')">关闭</span>
                        </div>
                        <br>
                        <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                            <br>
                            <br>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <p style="text-align: center;font-size: 14px">确定删除这条数据吗</p>
                                <div class="layui-input-block">
                                    <input type="hidden" name="deleteid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>

    </div>

    <div class="ff">
        <span class="layui-colla-title" >疾病分类：</span>
        <?php
$_from = menu('nav_children',51);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
        <ul>
            <li style="text-align:center">
                <div class="case_w">
                    <button class="layui-btn layui-btn-primary layui-btn-radius"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
                    <input id="Button3" type="button" value="编辑" onclick="ShowDiv('MyDiv1<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')" />
                    <!--弹出层时背景层DIV-->
                    <input id="Button4" type="button" value="删除" onclick="ShowDiv('MyDiv1<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')" />
                    <div id="fade1" class="black_overlay">
					<br>
                    </div>
                    <div id="MyDiv1<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" class="white_content">
                        <div style="text-align: right; cursor: default; height: 10px;" id="move2">
                            <span style="font-size: 16px;" onclick="CloseDiv('MyDiv1<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')">关闭</span>
                        </div>
                        <br>
                        <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <label class="layui-form-label">编号：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="gaiid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <label class="layui-form-label">输入标签：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="gai" value="<?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <br>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div id="MyDiv1<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="white_content">
                        <div style="text-align: right; cursor: default; height: 10px;" id="move3">
                            <span style="font-size: 16px;" onclick="CloseDiv('MyDiv1<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')">关闭</span>
                        </div>
                        <br>
                        <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                            <br>
                            <br>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <p style="text-align: center;font-size: 14px">确定删除这条数据吗</p>
                                <div class="layui-input-block">
                                    <input type="hidden" name="deleteid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>
    </div>

    <div class="center">
        <span class="layui-colla-title" >症状分类：</span><br>
        <?php
$_from = menu('nav_children',52);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
        <ul>
            <li style="text-align:center">
                <div class="case_w">
                    <button class="layui-btn layui-btn-primary layui-btn-radius"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
                    <input id="Button5" type="button" value="编辑" onclick="ShowDiv('MyDiv2<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')" />
                    <!--弹出层时背景层DIV-->
                    <input id="Button6" type="button" value="删除" onclick="ShowDiv('MyDiv2<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')" />
                    <div id="fade2" class="black_overlay">
					<br>
                    </div>
                    <div id="MyDiv2<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" class="white_content">
                        <div style="text-align: right; cursor: default; height: 10px;" id="move4">
                            <span style="font-size: 16px;" onclick="CloseDiv('MyDiv2<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')">关闭</span>
                        </div>
                        <br>
                        <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <label class="layui-form-label">编号：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="gaiid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <label class="layui-form-label">输入标签：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="gai" value="<?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <br>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div id="MyDiv2<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="white_content">
                        <div style="text-align: right; cursor: default; height: 10px;" id="move5">
                            <span style="font-size: 16px;" onclick="CloseDiv('MyDiv2<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')">关闭</span>
                        </div>
                        <br>
                        <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                            <br>
                            <br>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <p style="text-align: center;font-size: 14px">确定删除这条数据吗</p>
                                <div class="layui-input-block">
                                    <input type="hidden" name="deleteid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>
    </div>

<div class="right">
    <span class="layui-colla-title" >通用分类：</span><br>
    <?php
$_from = menu('nav_children',158);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
    <ul>
        <li style="text-align:center">
            <div class="case_w">
                <button class="layui-btn layui-btn-primary layui-btn-radius"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
                <input id="Button7" type="button" value="编辑" onclick="ShowDiv('MyDiv3<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')" />
                <!--弹出层时背景层DIV-->
                <input id="Button8" type="button" value="删除" onclick="ShowDiv('MyDiv3<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')" />
				<br>
                <div id="fade3" class="black_overlay">
                </div>
                <div id="MyDiv3<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" class="white_content">
                    <div style="text-align: right; cursor: default; height: 10px;" id="move6">
                        <span style="font-size: 16px;" onclick="CloseDiv('MyDiv3<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
','fade')">关闭</span>
                    </div>
                    <br>
                    <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <label class="layui-form-label">编号：</label>
                            <div class="layui-input-block">
                                <input type="text" name="gaiid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <label class="layui-form-label">输入标签：</label>
                            <div class="layui-input-block">
                                <input type="text" name="gai" value="<?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <br>
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>

                    </form>
                </div>

                <div id="MyDiv3<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="white_content">
                    <div style="text-align: right; cursor: default; height: 10px;" id="move7">
                        <span style="font-size: 16px;" onclick="CloseDiv('MyDiv3<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','fade')">关闭</span>
                    </div>
                    <br>
                    <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data" >
                        <br>
                        <br>
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <p style="text-align: center;font-size: 14px">确定删除这条数据吗</p>
                            <div class="layui-input-block">
                                <input type="hidden" name="deleteid" value="<?php echo $_smarty_tpl->tpl_vars['level1_id']->value;?>
" readonly="true" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" style="margin:0 auto; width:330px; text-align:left">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="*" type="submit" >立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </li>
    </ul>
    <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>
</div>

</div>




    <!--<div>
        <?php
$_from = menu('nav_children',51);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
            <button class="layui-btn layui-btn-primary layui-btn-radius" href="<?php $_smarty_tpl->callTemplateFunction ('menu_link', $_smarty_tpl, array('id'=>$_smarty_tpl->tpl_vars['level1_id']->value), true);?>
"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
        <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>
    </div>
    <div style="margin-left: 100px">
        <span class="layui-colla-title" >症状分类：</span>
        <?php
$_from = menu('nav_children',52);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
            <button class="layui-btn layui-btn-primary layui-btn-radius" href="<?php $_smarty_tpl->callTemplateFunction ('menu_link', $_smarty_tpl, array('id'=>$_smarty_tpl->tpl_vars['level1_id']->value), true);?>
"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
        <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>
    </div>
    <div style="margin-left: 100px">
        <span class="layui-colla-title" >通用分类：</span>
        <?php
$_from = menu('nav_children',200);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1_id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['level1_id']->value) {
$_smarty_tpl->tpl_vars['level1_id']->_loop = true;
$foreach_level1_id_Sav = $_smarty_tpl->tpl_vars['level1_id'];
?>
            <button class="layui-btn layui-btn-primary layui-btn-radius" href="<?php $_smarty_tpl->callTemplateFunction ('menu_link', $_smarty_tpl, array('id'=>$_smarty_tpl->tpl_vars['level1_id']->value), true);?>
"><?php echo menu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</button>
        <?php
$_smarty_tpl->tpl_vars['level1_id'] = $foreach_level1_id_Sav;
}
?>
    </div>-->

<!-- 此特效 网页布局效果对应自定义的JS代码 开始-->
<?php echo '<script'; ?>
>
    layui.use(['form'], function(){
        var form = layui.form
            ,layer = layui.layer
    });
<?php echo '</script'; ?>
>
<!-- 此特效 网页布局效果对应自定义的JS代码 结束-->
</div>
</body>
</html>
<?php }
}
?>