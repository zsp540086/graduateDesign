<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content" ,"header"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8e00a306bb975a277be37a2b8809d19a&action=category&catid=%24CATEGORYS%5B%24top_parentid%5D%5Bcatid%5D&moreinfo=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CATEGORYS[$top_parentid][catid],'moreinfo'=>'1','limit'=>'5',));}?>
<div class="main">
    <div class="dh10"></div>
    <div class="w1000">
        <div class="dh12"></div>
        <div class="erleft">
            <div class="type">
                <div class="type_title"><img src="<?php echo IMG_PATH;?>/myimg/type_title.jpg" alt=""/></div>
                <div class="type_bot">
                    <ul>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </div>
            <div class="er_con">
                <p><img src="<?php echo IMG_PATH;?>/myimg/20130627100814_53164.jpg" alt=""/></p>
            </div>
        </div>
        <div class="erright"style="border: none;r">
            <div class="dh26"></div>
            <div class="erright_top">
                <div class="erright_title"><img src="<?php echo IMG_PATH;?>/myimg/pro_title.jpg" alt=""/></div>
                <div class="cookies">您所在的位置: <a href="index.php">首页</a>&nbsp>&nbsp <a href=""><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>&nbsp>&nbsp<?php echo $title;?></div>
            </div>
            <div class="dh26"></div>
            <div class="about">
                    <?php echo $content;?>
            </div>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div style="clear:both"></div>
    </div>
</div>

<?php include template("content", "footer"); ?>