<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content" ,"header"); ?>
<div class="main">
    <!-- 课程展示开始 -->
    <div class="index_kczs">
        <div class="dh24"></div>
        <div class="index_kczs_top">
            <div class="morel">
                <a href="<?php echo $CATEGORYS['25']['url'];?>">+MORE</a>
            </div>
            <div class="pro_but">
                <span style="cursor:pointer"class="pro_left"><img src="<?php echo IMG_PATH;?>/myimg/lun_L.jpg" alt=""></span>
                <span style="cursor:pointer"class="pro_right"><img src="<?php echo IMG_PATH;?>/myimg/lun_R.jpg" alt=""></span>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="dh12"></div>
        <div class="index_kczs_lun">
            <ul>
                <div class="ppp"style="position:relative;top:-15px">
                    <div class="pro_list_index"style="width:998px;height:167px;margin-left:0">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=df66d37c0e4f298268a0fdeab3c003be&action=lists&catid=25&num=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','limit'=>'15',));}?>
                        <ul class="proList_1 proListInedex">
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li style="text-align:center">
                                <a href="<?php echo $r['url'];?>">
                                    <img src="<?php echo $r['thumb'];?>" alt=""">
                                </a>
                            </li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
<!-- 课程展示结束 -->
<div class="dh17"></div>
<div class="w1000">
    <!-- main_left -->
    <div class="main_left">
        <!-- 关于我们 -->
        <div class="s_page">
            <div class="index_title1">
                <img src="<?php echo IMG_PATH;?>/myimg/s_page_title.jpg" alt="">
            </div>
            <img src="<?php echo IMG_PATH;?>/myimg/20130619075227_58194.jpg" alt="">
            <div class="s_page_det">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3f75a9324f4093f3af880ad697ada1f0&action=lists&catid=24&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','moreinfo'=>'1','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <p>
                    <?php echo $v['description'];?>...
                    <a href="<?php echo $CATEGORYS['24']['url'];?>"class="s_more">[MORE]</a>
                </p>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <!-- 关于我们结束 -->
        <!--服务内容-->
        <div class="index_fwnr">
            <div class="index_title1">
                <img src="<?php echo IMG_PATH;?>/myimg/index_ln_title.jpg" alt=""/>'
            </div>
            <div class="index_fwnr_bot">
                <div class="zxw_service"style="padding-left: 15px;padding-bottom: 15px;">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c87fa0fd3bc654fc7c9915cb7cf067c6&action=lists&catid=36&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','moreinfo'=>'1','limit'=>'1',));}?>
                    <div style="line-height: 20px;width=350px;height: 130px;">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <div style="float: left;"><img src="<?php echo $r['thumb'];?>" alt=""style="height: 130px;width: 150px;"/></div>
                        <div style="float: left;width: 160px;height: 130px;margin-left: 15px;"><?php echo $r['description'];?>...</div>
                        <?php $n++;}unset($n); ?>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                    <div style="clear: both;margin-top: 15px;">
                        <a href="<?php echo $CATEGORYS['36']['url'];?>">
                            <img src="<?php echo IMG_PATH;?>/myimg/qyln_more.jpg" alt=""/>
                        </a>
                    </div>


            </div>
            <div class="dh12"></div>
            <div class="more2"></div>
        </div>
        <!--服务内容结束-->
    </div>

    <div class="main_mid">
        <!--咨询中心-->

        <div class="zxw_zxzx">
            <div class="index_title1"style="padding-left: 15px">
                <img src="<?php echo IMG_PATH;?>/myimg/index_new_title.jpg" alt=""/>
            </div>
            <div class="zxw_service"style="padding-left: 15px">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=822bdfea41bc5cc028b07009d8cc175c&action=lists&catid=25&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','moreinfo'=>'1','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div style="padding-bottom: 10px;border-bottom: 1px solid #ececec;color:#646464;height: 72px">
                    <div style="float: left">
                        <img src="<?php echo $r['thumb'];?>" alt=""width="73"height="58"style="padding: 1px;border: 1px solid #ccc"/>
                    </div>
                    <div style="float: right;width: 254px">
                        <p>
                            <span style="float: left;font-weight: bold"><?php echo $r['title'];?></span>
                            <em style="float: right">
                                <a href="<?php echo $r['url'];?>"style="color: #4393cf;padding-right: 20px">[MORE]</a>
                            </em>
                        </p>
                        <div style="clear: both"></div>
                        <div style="line-height: 20px;padding-right: 20px"><?php echo $r['description'];?>...</div>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div style="clear: both"></div>
                <ul style="padding-left: 15px;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=388994d38faae02bc9049faf75f0f7e5&action=lists&catid=25&num=5&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','moreinfo'=>'1','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li style="line-height: 24px;list-style: disc"><a href="<?php echo $v['url'];?>"style="color: #646464"><?php echo $v['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=388994d38faae02bc9049faf75f0f7e5&action=lists&catid=25&num=5&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','moreinfo'=>'1','limit'=>'5',));}?>
            <div class="zxw_list"style="padding-left: 15px">
                <div class="more3">
                    <a href="<?php echo $CATEGORYS['25']['url'];?>"><img src="<?php echo IMG_PATH;?>/myimg/more2.jpg" alt=""/></a>
                </div>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

        <!--咨询中心结束-->
        <!--拓展课程-->
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c7b4adf88cb5274603fc583501a74bf0&action=category&catid=28&num=5&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'28','moreinfo'=>'1','limit'=>'5',));}?>
        <div class="tzkc"style="padding-left: 15px">
            <div class="index_title1"><img src="<?php echo IMG_PATH;?>/myimg/tzkc_title.jpg" alt=""/></div>
            <div class="tzkc_list"style="width: auto !important;height: auto !important;float: left">
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45cc69faa4b061e1c5209c93c1984d40&action=lists&catid=%24v%5Bcatid%5D&num=3&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'moreinfo'=>'1','limit'=>'3',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <?php $n++;}unset($n); ?>
            </div>
            <div style="clear: both"></div>
            <div class="more4"style="padding: 10px 20px 0 0">
                <a href="<?php echo $CATEGORYS['41']['url'];?>"><img src="<?php echo IMG_PATH;?>/myimg/tzkc_more.jpg" alt=""/></a>
            </div>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <!--拓展课程结束-->
    </div>
    <!--main_right-->
    <div class="main_right">
        <!--基地风采-->
        <div class="index_jdfc">
            <div class="jdfc_top">
                <div class="index_title1 fl"><img src="<?php echo IMG_PATH;?>/myimg/jdfc_title.jpg" alt=""/></div>
                <div class="index_jdfc_more fl">
                    <a href="<?php echo $CATEGORYS['47']['url'];?>">
                        <img src="<?php echo IMG_PATH;?>/myimg/jdfc_more.jpg" alt=""/>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="index_jdfc_bot"style="position: relative">
                <div class="ad"style="position: absolute">
                    <ul class="picli">
                        <li><img src="<?php echo IMG_PATH;?>/myimg/20130630090015.jpg" alt=""/></li>
                        <li><img src="<?php echo IMG_PATH;?>/myimg/20130705091431.jpg" alt=""/></li>
                    </ul>
                    <ul class="uu">
                        <li class="lis"><a href="#">1</a></li>
                        <li class="lis"><a href="#">2</a></li>
                    </ul>
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd4022b4e7f60110685ae8dac3304806&action=lists&catid=47&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','limit'=>'10',));}?>
                <div style="padding-top: 100px">
                    <p style="text-indent: 2em;">
							<span style="line-height: 2">
                                <?php $i=0?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <?php $i++?>
								<span style="line-height: 2">
	                                   <?php if($i==5) { ?><?php echo $r['description'];?>...<?php } ?>
								</span>
                                <?php $n++;}unset($n); ?>
							</span>
                    </p>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <!--基地风采结束-->
        <!--联系我们-->
        <div class="index_con">
            <p><img src="<?php echo IMG_PATH;?>/myimg/20130627100814_53164.jpg" alt=""/></p>
        </div>
        <!--联系我们结束-->
    </div>
    <!--main_right结束-->
    <div class="dh27"></div>
</div>
<?php include template("content", "footer"); ?>