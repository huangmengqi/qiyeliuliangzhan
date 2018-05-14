<?php /* Smarty version 3.1.27, created on 2018-05-05 20:14:26
         compiled from "/www/web/zhu5neng/public_html/app/run/view/message.html" */ ?>
<?php
/*%%SmartyHeaderCode:2810621675aeda0222fb814_02167434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7caa49a8394dd7511cce4d440ad49bd57ea09c9' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/run/view/message.html',
      1 => 1508943320,
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
    '6f9acafc422f7ebe24e1ce92fdd30af15fd80380' => 
    array (
      0 => '6f9acafc422f7ebe24e1ce92fdd30af15fd80380',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2810621675aeda0222fb814_02167434',
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
  'unifunc' => 'content_5aeda0223ebb10_64112093',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/b7caa49a8394dd7511cce4d440ad49bd57ea09c9_1.file.message.html.php',
      'uid' => '4c0142ee8ec281f73cf566307bf2c01a6d4f8566',
      'call_name' => 'smarty_template_function_url_8084372875aeda0223346c4_85244809',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/b7caa49a8394dd7511cce4d440ad49bd57ea09c9_1.file.message.html.php',
      'uid' => '4c0142ee8ec281f73cf566307bf2c01a6d4f8566',
      'call_name' => 'smarty_template_function_furl_8084372875aeda0223346c4_85244809',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/www/web/zhu5neng/public_html/runtime/temp/b7caa49a8394dd7511cce4d440ad49bd57ea09c9_1.file.message.html.php',
      'uid' => '4c0142ee8ec281f73cf566307bf2c01a6d4f8566',
      'call_name' => 'smarty_template_function_menu_link_8084372875aeda0223346c4_85244809',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aeda0223ebb10_64112093')) {
function content_5aeda0223ebb10_64112093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2810621675aeda0222fb814_02167434';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '8084372875aeda0223346c4_85244809', 'content_5aeda022333e02_47760749');
/*  End of included template "functions.html" */?>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2810621675aeda0222fb814_02167434';
?>

<div class="admin_message">
    <?php $_smarty_tpl->createLocalArrayVariable('local', null, 0);
$_smarty_tpl->tpl_vars['local']->value['dummy'] = settype($_smarty_tpl->tpl_vars['data']->value['message'],'array');?>
    <div class="notification <?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
"> 
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['message'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['msg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
$foreach_msg_Sav = $_smarty_tpl->tpl_vars['msg'];
?>
    	<div><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
    <?php
$_smarty_tpl->tpl_vars['msg'] = $foreach_msg_Sav;
}
?>
    </div>
    
    <div class="redirect layui-btn-group btn_count_<?php echo count($_smarty_tpl->tpl_vars['data']->value['redirect']);?>
">
    	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['redirect'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['url']->_loop = false;
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
$foreach_url_Sav = $_smarty_tpl->tpl_vars['url'];
?>
        <?php if (!$_smarty_tpl->tpl_vars['url']->value) {
continue 1;
}?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value == 'close') {?>
        <a class="javascript redirect_selection  hidden layui-btn layui-btn layui-btn-danger" id="rs_close">关闭窗口</a>
        <?php } else { ?>
    	<a class="redirect_selection  layui-btn layui-btn-normal <?php if ($_smarty_tpl->tpl_vars['title']->value == '返回上一页') {?>layui-btn-danger<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        <?php }?>
    	<?php
$_smarty_tpl->tpl_vars['url'] = $foreach_url_Sav;
}
?>
    </div>
    <?php $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable($_smarty_tpl->tpl_vars['data']->value['auto'], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['auto']->value && $_smarty_tpl->tpl_vars['data']->value['redirect']) {?>
    <div class="count_down">
    	系统将在<span id="count_down_count"><?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
</span>秒后自动跳转到第一个链接 <a id="cancel_count_down" style="cursor:pointer;">取消自动跳转</a>
    </div>
    
    <?php echo '<script'; ?>
>
    	var left_seconds=parseInt('<?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
');
    	function count_down(){
    		if(left_seconds<0){
	            if (!$('#rs_close:visible').length) {
	               var href = "<?php echo url('run/Index/index');?>
";
                    if ($('a.redirect_selection').eq(0).attr('href')) {
                        href = $('a.redirect_selection').eq(0).attr('href')
                    }  
                    window.location.href = href;
	            } else {
	               $('#rs_close').trigger('click');
	            }
                
                
    			return;
    		}
    		$('#count_down_count').html(left_seconds--);
    		count_down.timeout=window.setTimeout(count_down,1000);
    	}
    	$(document).ready(function(){ count_down(); });
    	$('#cancel_count_down').click(function(){
    		window.clearTimeout(count_down.timeout);
    		$(this).parent().remove();
    	})
    	
    <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        if(self != top)
        $('#rs_close').css('display','inline-block').click(function(){
            top.$('.layui-tab').find('.layui-tab-title li.layui-this .layui-tab-close').trigger('click');
        });    
        
    })
    <?php echo '</script'; ?>
>
</div>

<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>

</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:8084372875aeda0223346c4_85244809%%*/
if ($_valid && !is_callable('content_5aeda022333e02_47760749')) {
function content_5aeda022333e02_47760749 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '8084372875aeda0223346c4_85244809';
?>



<?php
/*/%%SmartyNocache:8084372875aeda0223346c4_85244809%%*/
}
}
?><?php
/* smarty_template_function_url_8084372875aeda0223346c4_85244809 */
if (!function_exists('smarty_template_function_url_8084372875aeda0223346c4_85244809')) {
function smarty_template_function_url_8084372875aeda0223346c4_85244809($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_8084372875aeda0223346c4_85244809 */

?>
<?php
/* smarty_template_function_furl_8084372875aeda0223346c4_85244809 */
if (!function_exists('smarty_template_function_furl_8084372875aeda0223346c4_85244809')) {
function smarty_template_function_furl_8084372875aeda0223346c4_85244809($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_8084372875aeda0223346c4_85244809 */

?>
<?php
/* smarty_template_function_menu_link_8084372875aeda0223346c4_85244809 */
if (!function_exists('smarty_template_function_menu_link_8084372875aeda0223346c4_85244809')) {
function smarty_template_function_menu_link_8084372875aeda0223346c4_85244809($_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_link_8084372875aeda0223346c4_85244809 */

?>
