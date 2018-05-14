<?php /* Smarty version 3.1.27, created on 2018-05-09 18:04:57
         compiled from "/www/web/zhu5neng/public_html/app/home/view/Bufq/view.html" */ ?>
<?php
/*%%SmartyHeaderCode:10133588385af2c7c92fa341_56168377%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ded5156686eccf72339670447d501bda1c9913a' => 
    array (
      0 => '/www/web/zhu5neng/public_html/app/home/view/Bufq/view.html',
      1 => 1520495270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10133588385af2c7c92fa341_56168377',
  'variables' => 
  array (
    'absroot' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5af2c7c945a660_79861138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5af2c7c945a660_79861138')) {
function content_5af2c7c945a660_79861138 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10133588385af2c7c92fa341_56168377';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>母猪不发情的原因与母猪不发情的治疗办法 | 畜牧专家网</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/css/neiye.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/css/topic.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/css/lanrenzhijia.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/js/jQuery.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/js/jquery.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/js/jquery-1.7.2.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/js/Marquee-min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/js/gongyong.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
home/views/default/resource/js/jquery-1.8.3.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
files/layui-v2.2.5/layui.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/js/jquery-1.8.3.min.js" ><?php echo '</script'; ?>
>
</head>
<body>
<div class="header">
    <a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
images/home/logo-1.png"  alt='畜牧专家网猪病防治技术logo' /></a>
    <!--搜索-->
    <div class="search font14">
        <ul>
            <li><a href="qiye/zhuce.htm" >注册</a></li>
            <li class="li0"><a href="qiye/denglu.htm" >登录</a></li>
            <li><a href="<?php $_smarty_tpl->callTemplateFunction ('menu_link', $_smarty_tpl, array('id'=>137), true);?>
"  target="_blank" style="background:#f98d00;display:block;">求购or提问</a></li>
        </ul>
        <input type="text" name="keyword"  value="请输入您要查询的关键词" onFocus="this.value=''" onBlur="if(!value){
            value=defaultValue;}"/>
        <span class="span0"><a href="javascript:ser()">搜索答案</a></span>
        <?php echo '<script'; ?>
>
            //判断用户是否输入搜索词，输入则;
            var app="/index/sousuo";
            function ser(){
                if($.trim($(":input[name=keyword]").val())=="" || $.trim($(":input[name=keyword]").val())=="请输入您要查询的关键词"){
                    alert("您没有输入搜索词");
                    exit;
                }
                open(app+"/keywords/"+$.trim($(":input[name=keyword]").val()),"_self");
            }
        <?php echo '</script'; ?>
>
        <span><a href="<?php $_smarty_tpl->callTemplateFunction ('menu_link', $_smarty_tpl, array('id'=>137), true);?>
" target="_blank">求购or提问</a></span>

    </div>
</div>

<div class="menu">
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
"  class="hover">首页</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
" >母猪不食</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
" >母猪不发情</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
" >母猪产后护理</a></li>
    </ul>



</div>



<!--头部-->

<div class="maincont">

    <!--banner-->

    <div class="banner">

        <img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;
echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" width="100%" height="198px"/>

</div>

    <div class="clear"></div>


    <div class="question boder">

        <dl class="dl0 ">
            <dt  class="orange font18">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['title1'];?>


            </dt>
            <dd>
                <?php echo $_smarty_tpl->tpl_vars['data']->value['analysis'];?>

            </dd>
        </dl>


        <dl>
            <dt class="orange font18" >
                <?php echo $_smarty_tpl->tpl_vars['data']->value['title2'];?>

            </dt>
            <dd>
                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['misunderstandings'];?>
</p>
            </dd>
        </dl>

        <span><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/pig.png"  /></span>

    </div>


    <div class="main02">
        <div class="often float boder">
            <h3 class="orange font16"><?php echo $_smarty_tpl->tpl_vars['data']->value['title3'];?>
</h3>

            <p><?php echo $_smarty_tpl->tpl_vars['data']->value['complication'];?>
</p>
        </div>
        <div class="often analyse boder">

            <h3 class="orange font16"><?php echo $_smarty_tpl->tpl_vars['data']->value['title4'];?>
</h3>
            <p style="word-break:break-all"><?php echo $_smarty_tpl->tpl_vars['data']->value['thinking'];?>
</p>
        </div>
    </div>


    <!--常见的处理误区-->

    <div class="wrong boder">
        <div class="wrongleft float">
            <h3 class="orange font18"><?php echo $_smarty_tpl->tpl_vars['data']->value['title5'];?>
</h3>

            <dl>
                <dd><?php echo $_smarty_tpl->tpl_vars['data']->value['plan'];?>
</dd>
            </dl>
            <div class="clear"></div>
        </div>
        <div class="wrongright">
            <h3 class="orange font16"><?php echo $_smarty_tpl->tpl_vars['data']->value['title6'];?>
</h3>

            <p>
                <?php echo $_smarty_tpl->tpl_vars['data']->value['remind'];?>

            </p>

            <p><b>中国畜牧专家网为大家开通了免费技术服务指导电话：400-678-0034， QQ：2118386270。</b></p>

            <dl><dt class="boder"><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/ny_56.jpg"  /></dt><dd><b>邢主任</b>现任“中国畜牧专家网”规模猪场疾病防控部门主任。多年服务于规模化养殖场的母猪种群管理经验，对于中药综合调理动物健康有极深的研究。

                <a href="http://p.qiao.baidu.com//im/index?siteid=9078050&ucid=20906742" >点击预约专家</a></dd></dl>
        </div>
    </div>



    <div class="clear"></div>


    <div class="aimuzhu boder">
        <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['title9'];?>
</h2>
        <div class="wrongcont">
            <h3 class="orange font18"><?php echo $_smarty_tpl->tpl_vars['data']->value['title7'];?>
针对母猪返情/不发情的核心功效</h3>
            <ul><li> <?php echo $_smarty_tpl->tpl_vars['data']->value['effect1'];?>
</li><li class="li0"><?php echo $_smarty_tpl->tpl_vars['data']->value['effect2'];?>
</li><li class="li01"><?php echo $_smarty_tpl->tpl_vars['data']->value['effect3'];?>
</li><li class="li02"><?php echo $_smarty_tpl->tpl_vars['data']->value['effect4'];?>
</li><li class="li03"><?php echo $_smarty_tpl->tpl_vars['data']->value['effect1'];?>
</li></ul>

            <div class="clear"></div>
            <dl><dt><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;
echo $_smarty_tpl->tpl_vars['data']->value['imagel'];?>
"    height="179"/></dt>
                <dd><span class="blue">"<?php echo $_smarty_tpl->tpl_vars['data']->value['title9'];?>
"核心原料作用机理：</span>
                   <?php echo $_smarty_tpl->tpl_vars['data']->value['mechanism'];?>

                </dd>

            </dl>
        </div>
        <div class="quickly">
            <dl>
                <dt><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;
echo $_smarty_tpl->tpl_vars['data']->value['imager'];?>
"   height="152" /></dt>
                <dd><h3 class="blue"><span class="orange"><?php echo $_smarty_tpl->tpl_vars['data']->value['title10'];?>
</span></h3>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['action'];?>

                </dd>


            </dl>
        </div>


    </div>



    <!--资质荣誉-->



    <div class="honour boder">

        <h2>资质荣誉</h2>
        <div class="rool">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
"   target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/ny_33.jpg" /></a><a href="../index.htm"   target="_blank" target="_blank">无激素检验证书</a></li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
"   target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/ry01.jpg" /></a><a href="../index.htm"   target="_blank" target="_blank">进口原料证书</a></li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
"   target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/ry02.jpg"  /></a><a href="../index.htm"   target="_blank" target="_blank">中国区授权证书</a></li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
"   target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/ry03.jpg"  /></a><a href="../index.htm"   target="_blank" target="_blank">全球领先V+预混合技术认证</a></li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
"   target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
zt_muzhu/images/ry04.jpg"  /></a><a href="../index.htm"   target="_blank" target="_blank">美国技术全球共享</a></li>

            </ul >
        </div>
    </div>



    <!--用户心得-->

    <div class="clear"></div>

<!--客服-->
<!--悬浮代码-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
home/views/default/resource/js/jQuery.js" ><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    $(function() {

        $(".kfleft").click(function(){

            var i=$("#haiiskefu").css("right");

            if (i=='0px'){

                $('#haiiskefu').animate({
                    right:0}, 200);

            } else {

                $('#haiiskefu').animate({
                    right:0}, 200);

            }

        });

    });

<?php echo '</script'; ?>
>

<div id="haiiskefu">

    <ul>

        <li><a rel="nofollow" href="http://p.qiao.baidu.com//im/index?siteid=9078050&ucid=20906742"  title="销售咨询" target="_blank"></a></li>

        <li><a rel="nofollow" href="http://p.qiao.baidu.com//im/index?siteid=9078050&ucid=20906742"  title="售后咨询" target="_blank"></a></li>

        <li><a href="http://p.qiao.baidu.com//im/index?siteid=9078050&ucid=20906742"  title="联系方式" target="_blank"></a></li>

    </ul>

</div>



<!--底部-->
<div style="background-color:#363636; height:auto; padding:10px 30px; text-align:center; font-size:2em">
    <a href="http://p.qiao.baidu.com//im/index?siteid=9078050&ucid=20906742"  target="_blank">
        您可以 <span style="color:#FFFF00;margin-right:500px"> 点击预约畜牧师免费指导</span>
        <p style="margin-left:500px"> 坐诊时间：8:00-18:00，其他时间请留言</p>
    </a></div>

<div class="footer">
    <div class="footercont">

        <dl class="dl0">
            <dt><a href="../home/views/default/resource/images/aq_39.png"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
home/views/default/resource/images/aq_39.png"   width="110px" height="110px" /></a></dt>
            <dd>清新主播每周播报<br />
                全面的政策解读分析<br />
                每日猪价的行情分析<br />
                关注微信，精彩分享不容错过</dd>
        </dl>

        <dl>
            <dt>猪场养殖服务</dt>

            <dd><a href="../index/liebiao/id/15.htm"  target="_blank">疫情预警</a></dd>
            <dd><a href="../index/liebiao/id/13.htm"  target="_blank">猪价行情</a></dd>
            <dd><a href="../index/liebiao/id/14.htm"  target="_blank">政策解读</a></dd>
            <dd><a href="../index.htm"  target="_blank">猪病防治</a></dd>
            <dd><a href="../liuyan.htm"  target="_blank">在线兽医</a></dd>


        </dl>

        <dl>
            <dt>快捷服务中心</dt>

            <dd><a href="../bing.htm"  >猪病大全</a></dd>
            <dd><a href="../zhengzhuang.htm"  >猪病诊断</a></dd>
            <dd><a href="../company/chang.htm"  >兽药厂家</a></dd>
            <dd><a href="../company/qglist.htm"  >兽药求购</a></dd>


        </dl>

        <dl>
            <dt>交流与合作</dt>

            <dd><a href="#" >人才招聘吸纳</a></dd>
            <dd><a href="#" >GMP企业入驻</a></dd>
            <dd><a href="#" >执业兽医入驻</a></dd>
            <dd><a href="#" >商务合作洽谈</a></dd>


        </dl>

        <dl>
            <dt>2015热门关注专题<br />
            </dt>

            <dd><a href="aimuzhu.htm"  target="_blank">母猪饲养管理技术</a></dd>
            <dd><a href="chanhoubing.htm"  target="_blank">母猪的产后护理技术</a></dd>
            <dd><a href="bufaqing.htm"  target="_blank">母猪不发情/返情怎么办</a></dd>
            <dd><a href="../jishu/nei/id/47.htm"  target="_blank">仔猪流行性腹泻防治技术</a></dd>


        </dl>

        <div class="clear"></div>
        <div class="bottom" style="color:#fff;">
            <p><a href="../zt_muzhu/about.html"  target="_blank" style="color:#fff;" title='关于郑州牧一草堂电子商务有限公司'> </a>豫ICP备16000996号-2</p>
            <span>Copyright © 1998-2015</span>
        </div>
    </div>
</div>

<!--baidu统计-->
<?php echo '<script'; ?>
 type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fd2bd65da2d5aec61ea6b608dc9a77c35' type='text/javascript'%3E%3C/script%3E")) <?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript"  src="../../idm-su.baidu.com/su.js" ><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>