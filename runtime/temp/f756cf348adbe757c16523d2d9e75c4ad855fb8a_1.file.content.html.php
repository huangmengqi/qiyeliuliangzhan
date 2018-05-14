<?php /* Smarty version 3.1.27, created on 2018-05-05 16:10:21
         compiled from "/www/web/zhu5neng/public_html/app/run/view/Menu/content.html" */ ?>
<?php
/*%%SmartyHeaderCode:1808784355aed66ed593401_97686221%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f756cf348adbe757c16523d2d9e75c4ad855fb8a' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/Menu/content.html',
      1 => 1517449806,
      2 => 'file',
    ),
    '354e6660fb24f1eca4718cc73fadfc69b6feb926' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/base.html',
      1 => 1511786410,
      2 => 'file',
    ),
    'b8abd8ba66255afa83a5e496edde048762198d79' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/global.html',
      1 => 1512963096,
      2 => 'file',
    ),
    '4c0142ee8ec281f73cf566307bf2c01a6d4f8566' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/functions.html',
      1 => 1509714984,
      2 => 'file',
    ),
    '0a8f2a1602a7eba9fac7b0a7470457291b8d6516' => 
    array (
      0 => '0a8f2a1602a7eba9fac7b0a7470457291b8d6516',
      1 => 0,
      2 => 'string',
    ),
    '5b915fa829f157fe49be28c9988e086d1cbf9d4e' => 
    array (
      0 => '5b915fa829f157fe49be28c9988e086d1cbf9d4e',
      1 => 0,
      2 => 'string',
    ),
    'bff7d79c5d5e18c733d618c506ef4e152e22fc58' => 
    array (
      0 => 'bff7d79c5d5e18c733d618c506ef4e152e22fc58',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1808784355aed66ed593401_97686221',
  'variables' => 
  array (
    'cthis' => 0,
    'is_response' => 0,
    'meta' => 0,
    'is_favicon' => 0,
    'root' => 0,
    'css' => 0,
    'html' => 0,
    'absroot' => 0,
    'js' => 0,
    'defer_js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aed66ed736928_95963425',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/f756cf348adbe757c16523d2d9e75c4ad855fb8a_1.file.content.html.php',
      'uid' => '4c0142ee8ec281f73cf566307bf2c01a6d4f8566',
      'call_name' => 'smarty_template_function_url_1989692735aed66ed639448_78869570',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/f756cf348adbe757c16523d2d9e75c4ad855fb8a_1.file.content.html.php',
      'uid' => '4c0142ee8ec281f73cf566307bf2c01a6d4f8566',
      'call_name' => 'smarty_template_function_furl_1989692735aed66ed639448_78869570',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/f756cf348adbe757c16523d2d9e75c4ad855fb8a_1.file.content.html.php',
      'uid' => '4c0142ee8ec281f73cf566307bf2c01a6d4f8566',
      'call_name' => 'smarty_template_function_menu_link_1989692735aed66ed639448_78869570',
    ),
    'menu' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/f756cf348adbe757c16523d2d9e75c4ad855fb8a_1.file.content.html.php',
      'uid' => 'f756cf348adbe757c16523d2d9e75c4ad855fb8a',
      'call_name' => 'smarty_template_function_menu_1808784355aed66ed593401_97686221',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aed66ed736928_95963425')) {
function content_5aed66ed736928_95963425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1808784355aed66ed593401_97686221';
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head>
<?php $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable($_smarty_tpl->tpl_vars['cthis']->value->Form, null, 0);
$_smarty_tpl->tpl_vars['html'] = new Smarty_Variable($_smarty_tpl->tpl_vars['cthis']->value->Html, null, 0);?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($_smarty_tpl->tpl_vars['is_response']->value) {?>
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="renderer" content="webkit"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="format-detection" content="telephone=no, email=no" />
<?php }?>
<meta name="Keywords" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['keywords']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['keywords']);
}?>" />
<meta name="Description" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['description']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['description']);
}?>" />
<?php if ($_smarty_tpl->tpl_vars['is_favicon']->value) {?><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
favicon.ico" /><?php }?>
<title><?php echo implode(' - ',(($tmp = @$_smarty_tpl->tpl_vars['meta']->value['title'])===null||$tmp==='' ? array() : $tmp));?>
</title>
<?php echo $_smarty_tpl->tpl_vars['html']->value->css($_smarty_tpl->tpl_vars['css']->value,true);?>


<?php echo '<script'; ?>
 type="text/javascript">var wwwroot='<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
';var absroot='<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
';<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['js']->value,true);?>


<?php /*  Call merged included template "functions.html" */
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1989692735aed66ed639448_78869570', 'content_5aed66ed638624_65237241');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '1808784355aed66ed593401_97686221';
?>

<?php echo '<script'; ?>
 type="text/javascript">
var layer;
$(function(){
    layui.use(['layer'], function(){
        layer = layui.layer;        
        layer.config({
            zIndex:10000
        });
    })
})

HKUC.ajax_request.defaultSuccessHandlers= {
    'success':function(rslt_msg,rslt_data){ 
       layer.alert(rslt_msg,{
            icon:1
        }); 
    },
    'error':function(rslt_msg,rslt_data){
        layer.alert(rslt_msg,{
            icon:2
        });                   
    },
    'nopower':function(msg,data){
        
        layer.alert(msg,{
            icon:2
        });
    }
};
HKUC.ajax_request.defaultErrorHandlers={
    403:function(text,rerun){
        layer.alert('登录超时，请刷新重新登录',{
            icon:2
        });
	},
    404:function(text,rerun){
        layer.alert('页面不存在',{
            icon:2
        });
    }
};

<?php echo '</script'; ?>
>




</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1808784355aed66ed593401_97686221';
?>

<div class="admin_main">
    <div class="admin_header_fixed">
        <div class="admin_header clearfix">
            <div class="title"><i></i><?php echo $_smarty_tpl->tpl_vars['title']->value['operation'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
    		<div class="action">
                <b></b>
                <div class="layui-btn-group <?php if (count($_smarty_tpl->tpl_vars['actions']->value) == 1) {?>layui-btn-group-only<?php }?>">
    			<?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
if (!$_smarty_tpl->tpl_vars['item']->value) {
continue 1;
}?><a class="layui-btn  layui-btn-primary layui-btn-sm <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
" href="<?php $_smarty_tpl->callTemplateFunction ('url', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['item']->value['url']), true);?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </div>
            </div>
    		<?php }?>
        </div>
    </div>
    <div class="admin_base">
    



<div id="menu_tree">
    <?php $_smarty_tpl->callTemplateFunction ('menu', $_smarty_tpl, array('data'=>reset(menu('threaded')),'level'=>1), true);?>

</div>


    </div>
    <div class="admin_bottom">
    
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1808784355aed66ed593401_97686221';
?>

<?php echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
  layer.msg('<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
',{
    offset :['50px', '35%']
  });
<?php }?>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$('#menu_tree .self').click(function(){
    var parent = $(this).parent('.menu_level') ;
    $('#menu_tree').find('.isClick').removeClass('isClick');
    parent.addClass('isClick');
    if(parent.hasClass('no_child')) return false ;
    if(parent.hasClass('isOpen'))
        parent.removeClass('isOpen').children('.menu_children').hide().end().children('.self').find('.fa-icon').removeClass('fa-minus-circle').addClass('fa-plus-circle')
    else
        parent.addClass('isOpen').children('.menu_children').show().end().children('.self').find('.fa-icon').removeClass('fa-plus-circle').addClass('fa-minus-circle')
}).find('a').click(function(e){
    e.stopPropagation();
    if($(this).hasClass('item-action-delete')){
        var href  = $(this).attr('href') ;
        layer.confirm('该操作不可逆，请确认删除该栏目及其子栏目？',function(){
            layer.closeAll();
            location.href  = href; 
        })
        return false ;
    }
})

<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:1989692735aed66ed639448_78869570%%*/
if ($_valid && !is_callable('content_5aed66ed638624_65237241')) {
function content_5aed66ed638624_65237241 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1989692735aed66ed639448_78869570';
?>



<?php
/*/%%SmartyNocache:1989692735aed66ed639448_78869570%%*/
}
}
?><?php
/* smarty_template_function_url_1989692735aed66ed639448_78869570 */
if (!function_exists('smarty_template_function_url_1989692735aed66ed639448_78869570')) {
function smarty_template_function_url_1989692735aed66ed639448_78869570($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>'','item'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if (is_array($_smarty_tpl->tpl_vars['url']->value)) {
if ($_smarty_tpl->tpl_vars['url']->value[1] && $_smarty_tpl->tpl_vars['url']->value['parse'] && $_smarty_tpl->tpl_vars['item']->value) {
$_from = $_smarty_tpl->tpl_vars['url']->value['parse'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
if (!$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]) {?>continue<?php }
$_smarty_tpl->createLocalArrayVariable('url', null, 0);
$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]];
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
}
echo url($_smarty_tpl->tpl_vars['url']->value[0],(($tmp = @$_smarty_tpl->tpl_vars['url']->value[1])===null||$tmp==='' ? array() : $tmp),(($tmp = @$_smarty_tpl->tpl_vars['url']->value[2])===null||$tmp==='' ? true : $tmp));
} else {
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_url_1989692735aed66ed639448_78869570 */

?>
<?php
/* smarty_template_function_furl_1989692735aed66ed639448_78869570 */
if (!function_exists('smarty_template_function_furl_1989692735aed66ed639448_78869570')) {
function smarty_template_function_furl_1989692735aed66ed639448_78869570($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if ($_smarty_tpl->tpl_vars['url']->value) {
if (strpos($_smarty_tpl->tpl_vars['url']->value,'http://') === false && strpos($_smarty_tpl->tpl_vars['url']->value,'https://') === false) {
if ($_smarty_tpl->tpl_vars['url']->value[0] == '/') {
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(substr($_smarty_tpl->tpl_vars['url']->value,1), null, 0);
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['root']->value).($_smarty_tpl->tpl_vars['url']->value), null, 0);
}
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_furl_1989692735aed66ed639448_78869570 */

?>
<?php
/* smarty_template_function_menu_link_1989692735aed66ed639448_78869570 */
if (!function_exists('smarty_template_function_menu_link_1989692735aed66ed639448_78869570')) {
function smarty_template_function_menu_link_1989692735aed66ed639448_78869570($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('id'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
$_smarty_tpl->tpl_vars['d_d'] = new Smarty_Variable(menu($_smarty_tpl->tpl_vars['id']->value), null, 0);
if (!$_smarty_tpl->tpl_vars['d_d']->value) {?>#<?php } else {
if ($_smarty_tpl->tpl_vars['d_d']->value['type'] == 'Exlink') {
$_smarty_tpl->callTemplateFunction ('furl', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['d_d']->value['ex_link']), false);
} else {
$_smarty_tpl->tpl_vars['alias'] = new Smarty_Variable(trim(menu($_smarty_tpl->tpl_vars['id']->value,'alias')), null, 0);
if (!$_smarty_tpl->tpl_vars['alias']->value) {
echo url(($_smarty_tpl->tpl_vars['d_d']->value['type']).('/show'),array('menu_id'=>$_smarty_tpl->tpl_vars['id']->value));
} else {
echo $_smarty_tpl->tpl_vars['root']->value;
echo $_smarty_tpl->tpl_vars['alias']->value;?>
.<?php echo config('url_html_suffix');
}
}
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_link_1989692735aed66ed639448_78869570 */

?>
<?php
/* smarty_template_function_menu_1808784355aed66ed593401_97686221 */
if (!function_exists('smarty_template_function_menu_1808784355aed66ed593401_97686221')) {
function smarty_template_function_menu_1808784355aed66ed593401_97686221($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('level'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['children'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['children']->_loop = false;
$_smarty_tpl->tpl_vars['self_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['self_id']->value => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
$foreach_children_Sav = $_smarty_tpl->tpl_vars['children'];
?>
<div class="menu_level menu_level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['children']->value) {?>no_child<?php }?> <?php if ($_smarty_tpl->tpl_vars['level']->value > 1 && $_smarty_tpl->tpl_vars['children']->value) {?>isOpen<?php }?>">
    <div class="self clearfix">
        <i class="lline"></i>
        <span class="menu_action">
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable(menu($_smarty_tpl->tpl_vars['self_id']->value,'type'), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value != 'Exlink') {?>
            <a href="<?php echo url(($_smarty_tpl->tpl_vars['type']->value).('/lists'),array('parent_id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
"><i class="fa fa-eye"></i>查看内容</a>
            <a href="<?php echo url(($_smarty_tpl->tpl_vars['type']->value).('/create'),array('parent_id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
"><i class="fa fa-plus"></i>添加内容</a>             
            <?php }?>           
            <a href=""><i class="fa fa-eye"></i>预览</a>
        </span>
        <span class="menu_info clearfix">
            <?php $_smarty_tpl->tpl_vars['child_count'] = new Smarty_Variable(menu($_smarty_tpl->tpl_vars['self_id']->value,'child_count'), null, 0);?>
            <i class="fa  <?php if ($_smarty_tpl->tpl_vars['children']->value) {
if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>fa-plus-circle<?php } else { ?>fa-minus-circle<?php }
} else { ?>fa-minus-circle<?php }?>  fa-lg left fa-icon"></i>
            <span class="menu_title left"><?php echo menu($_smarty_tpl->tpl_vars['self_id']->value,'title');?>
</span>
            <span class="menu_id left">〖ID：<?php echo $_smarty_tpl->tpl_vars['self_id']->value;?>
〗</span>
            <span class="menu_type left">〖栏目类型：<?php echo $_smarty_tpl->tpl_vars['mdls']->value['Menu']->form['type']['options'][menu($_smarty_tpl->tpl_vars['self_id']->value,'type')];?>
〗</span>
            <?php if ($_smarty_tpl->tpl_vars['child_count']->value > 0) {?><span class="menu_child_count left">〖子栏目数：<?php echo $_smarty_tpl->tpl_vars['child_count']->value;?>
〗</span><?php }?>
        </span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['children']->value) {?>
    <div class="menu_children">
        <?php $_smarty_tpl->callTemplateFunction ('menu', $_smarty_tpl, array('data'=>$_smarty_tpl->tpl_vars['children']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), false);?>

    </div>
    <?php }?>
</div>
<?php
$_smarty_tpl->tpl_vars['children'] = $foreach_children_Sav;
}
?>
<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_1808784355aed66ed593401_97686221 */

?>
