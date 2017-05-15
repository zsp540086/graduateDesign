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
        <div class="erright">
            <div class="dh26"></div>
            <div class="erright_top">
                <div class="erright_title"><img src="<?php echo IMG_PATH;?>/myimg/cgal.jpg" alt=""/></div>
                <div class="cookies">您所在的位置: <a href="index.php">首页</a>&nbsp>&nbsp <a href=""><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>&nbsp>&nbsp<?php echo $catname;?></div>
            </div>
            <div class="dh26"></div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a79ad8d21dc0ac8ecc07fc408836c7c3&action=lists&catid=%24catid&num=8&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <div class="about">
                  <ul >
                      <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                      <li style="list-style: disc"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                  </ul>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="page"><?php echo $pages;?>...</div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <script>
            $(".page a").first().remove()
        </script>
        <div style="clear:both"></div>
    </div>
</div>

<?php include template("content", "footer"); ?>