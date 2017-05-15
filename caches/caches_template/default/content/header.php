<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>晟朗博通</title>
    <script src=<?php echo JS_PATH;?>/myjs/jquery.js></script>
    <script src=<?php echo JS_PATH;?>/myjs/shenglang.js></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>/mycss/shenglang.css">
</head>
<body>
<!-- head开始 -->
<div class="head">
    <div class="w1002">
        <div class="logo">
            <img src="<?php echo IMG_PATH;?>/myimg/logo.jpg" alt="">
        </div>
        <div class="top_nav">
            <a href="index.php">返回首页</a>
            <a href="">加入收藏</a>
            <a href="">设为首页</a>
        </div>
    </div>
</div>
<!-- head结束 -->
<!-- nav_banner开始 -->
<div class="nb">
    <!-- nav开始 -->
    <div class="nav">
        <div class="x1">
            <a href="<?php echo siteurl($siteid);?>"class="sy">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a1.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2747f2c42181e367e25f18b7ef288043&action=category&catid=18&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'18','limit'=>'8',));}?>
        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['24']['url'];?>  "class="aa2"><img src="<?php echo IMG_PATH;?>/myimg/nav_a2_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhl">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a2.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1cc40c1630029c5210a7dbef1a88fae2&action=category&catid=19&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'19','limit'=>'8',));}?>
        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['25']['url'];?>  "class="aa3"><img src="<?php echo IMG_PATH;?>/myimg/nav_a3_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhl">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a3.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a7f1431aca1779b17ea3a487ceeadae&action=category&catid=27&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'27','limit'=>'8',));}?>
        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['36']['url'];?>  "class="aa4"><img src="<?php echo IMG_PATH;?>/myimg/nav_a4_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhl">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a4.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ab51726f43299969906d8b1064bc4587&action=category&catid=28&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'28','limit'=>'8',));}?>
        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['41']['url'];?>  "class="aa5"><img src="<?php echo IMG_PATH;?>/myimg/nav_a5_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhl">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a5.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2eafdac768f251c9b0994b28f22c8cf&action=category&catid=29&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'29','limit'=>'8',));}?>
        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['46']['url'];?>  "class="aa6"><img src="<?php echo IMG_PATH;?>/myimg/nav_a6_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhl">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a6.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5dc3bd7f3dd04badb0f5a159997810d7&action=category&catid=30&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'30','limit'=>'8',));}?>
        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['47']['url'];?>  "class="aa7"><img src="<?php echo IMG_PATH;?>/myimg/nav_a7_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhl">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a7.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4a2bacb34c4277dd244eb6ed598bfd5a&action=category&catid=31&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'31','limit'=>'8',));}?>

        <div class="x1">
            <div class="yincang">
                <div class="xiala">
                    <a href="<?php echo $CATEGORYS['48']['url'];?>  "class="aa8"><img src="<?php echo IMG_PATH;?>/myimg/nav_a8_H.jpg" alt=""/></a>
                </div>
                <div class="xialaa">
                    <dl>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>
            </div>
            <a href=""class="dhw">
                <img src="<?php echo IMG_PATH;?>/myimg/nav_a8.jpg" alt="">
            </a>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <!-- nav结束 -->
    <div class="dh14"></div>
    <!-- banner开始 -->
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=57e63a3450848edb2bcfd8a1524175aa&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>
    <div class="banner">
        <div class="pic">
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt=""></a>
            <?php $n++;}unset($n); ?>
        </div>
        <ul class="slider">
            <div class="kkk">
                <li class="hot"></li>
                <li></li>
                <li></li>
                <li></li>
            </div>
        </ul>
    </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <!-- banner结束 -->
</div>
<!-- nav_banner结束 -->
<!-- 欢迎开始 -->
<div class="wel">
    <div class="welcome">
        <img src="<?php echo IMG_PATH;?>/myimg/hy.jpg" alt="">
    </div>
</div>
<!-- 欢迎结束 -->