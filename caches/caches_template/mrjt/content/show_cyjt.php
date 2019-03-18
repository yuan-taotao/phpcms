<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
    <!-- //Page Banner  -->
    <!-- == Main Content ==-->
    <div class="news-detail-body">
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="<?php echo APP_PATH;?>">首页</a></li>
                            <li>>></li>
                            <li><a href=""><?php echo catpos($catid, ' | ');?> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="news-dtails-banner">
                        <div class="banner-content-news">
                            <h2 class="title"><?php echo $rs['title'];?></h2>
                            <p class="body"><?php echo $rs['description'];?></p>
                          
                            <?php echo $rs['content'];?>
                        </div>
                    </div>
                    <ul class='jt-case banner'>
                    	

                    	<?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
                  	
						<li class="col-md-3">
							<img class="img-responsive" src="<?php echo $r['url'];?>" alt="">
						</li>
						
						<?php $n++;}unset($n); ?>

                    </ul>
                </div>
                <div class="col-md-3">
                    <aside class="news-sidebar">
                        <div class="about">
                            <h2>关于铭仁集团</h2>
                            <p>
                                铭仁集团，是一家以资产管理、投资咨询、工程建设、建筑劳务、景观工程、农业科技、生物科技、能源科技、服装贸易为一体的大型民营企业。
                            </p>
                        </div>
                        <div class="post">
                            <h2>集团公司</h2>

 						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d5af71f969d2b774c8167efe438cdb2b&action=lists&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?>
                    		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    		<!-- <?php 
                    		var_dump($r);
                    		?> -->
                            <div class="row" style="margin-top: 20px;">
                            	<a href="<?php echo $r['url'];?>">
                            		<div class="col-md-4">
                            			<img class="img-rounded img-responsive" src="<?php echo $r['thumb'];?>" alt="">
                            		</div>	
                            		<div class="clo-md-8"><?php echo $r['title'];?></div>
                            	</a>	
                            </div>
		 			 		<?php $n++;}unset($n); ?>           
		                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Content -->
    <!-- == Footer==-->
    <!-- // End Footer middle -->
    <!-- == Footer bar three == -->
    <?php include template('content','foot'); ?>