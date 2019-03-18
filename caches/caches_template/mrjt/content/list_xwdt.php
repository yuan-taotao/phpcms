<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
    <!-- //Page Banner  -->
    <!-- == Main Content ==-->
    <div class="news-body">
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="<?php echo APP_PATH;?>">首页</a></li>
                            <li>>></li>
                            <li><a href=""><?php echo catpos($catid, ' | ');?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row news">
                <!-- 新闻 -->

			 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d5af71f969d2b774c8167efe438cdb2b&action=lists&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="col-md-6 col-sm-6">
                	<div class="home-single-service second">
                		<div class="row">
                			<div class="col-sm-6 pdr0">
                				<div class="image">
                					<img src="<?php echo $r['thumb'];?>" class="img-responsive" alt="service image">
                				</div>
                			</div>
                			<div class="col-sm-6 pdr0">
                				<div class="content">
                					<h4><?php echo $r['title'];?></h4>
                					<p class="hidden-sm"><?php echo $r['description'];?></p>
                					<a href="<?php echo $r['url'];?>">查看详情</a>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <?php $n++;}unset($n); ?>
                            
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


            </div>
        </div>
    </div>
    <!--// Main Content -->
    <!-- == Footer==-->
    <!-- // End Footer middle -->
    <!-- == Footer bar three == -->
          <?php include template('content','foot'); ?>