<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
    <!-- //Page Banner  -->
    <!-- == Main Content ==-->
    <div class="career-body">
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
                <div>
                    <div class="career-overview">
                        <h2>中文简介</h2>
                        <p>
                            中文简介
                        </p>
                    </div>

					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4e75c79477bc5aee90e7153135cb0005&sql=SELECT+%2A+FROM+v9_page+where+catid%3D10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=10 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
						<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>

							<div class="career-overview career-overview-section">
                        <h2 class="title" style="text-align: center"><?php echo $val['title'];?></h2>
                        <p class="body"><?php echo $val['content'];?></p>
                   <!--      <p class="ebody"></p> -->
                    </div>

						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <!-- <div class="career-overview career-overview-section">
                        <h2 class="title" style="text-align: center"><?php echo $rs['title'];?></h2>
                        <p class="body"><?php echo $rs['content'];?></p>
                   <!--      <p class="ebody"></p> -->
                    <!-- </div> --> 
                </div>
            </div>
            <div class="row all-job-feature">
                <div class="col-md-5 no-padding">
                    <div class="feature-job-heading">
                        <h3>集团产业</h3>
                        <p>
                            铭仁集团，是一家以资产管理、投资咨询、工程建设、建筑劳务、景观工程、农业科技、生物科技、能源科技、服装贸易为一体的大型民营企业。
                        </p>
                        <p>
                            铭仁财富立足中国大陆，业务遍布香港、新加坡、中南美洲、缅甸、老挝，以及国内的北京、四川、广东、云南、重庆、新疆、青海等地。
                        </p>
                    </div>
                </div>
                <div class="col-md-7 no-padding">
                    <div class="job-feature-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-list">
                                    <ul>
                                    
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6cc3f854e8a83d9f25d7b408d0109d8d&action=lists&catid=11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','limit'=>'20',));}?>
                    					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                        <li> >> <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                                    	<?php $n++;}unset($n); ?>           
		                			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                        <!-- <li> >> <a href="pro-info.html?id=33">四川西部华西电力建设工程有限公司</a></li>
                                        <li> >> <a href="pro-info.html?id=36">四川省华康原建筑劳务有限公司</a></li>
                                        <li> >> <a href="pro-info.html?id=31">北京铭仁财富国际咨询有限公司</a></li>
                                        <li> >> <a href="pro-info.html?id=34">四川易园易景观工程有限公司</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="single-list">
                                    <ul>
                                        <li> >> <a href="pro-info.html?id=30">北京兰帝服饰有限公司</a></li>
                                        <li> >> <a href="pro-info.html?id=29">北京百草乐生物科技研究院</a></li>
                                        <li> >> <a href="pro-info.html?id=40">凉山彝本草生物科技有限公司</a></li>
                                        <li> >> <a href="pro-info.html?id=39">成都宝成盛泰科技有限公司</a></li>
                                        <li> >> <a href="pro-info.html?id=35">国融汇通资产管理（北京）有限公司</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <a href="<?php echo $CATEGORYS['11']['url'];?>" class="view-all">查看更多</a>
            </div>
        </div>
    </div>
    <!--// Main Content -->
    <!-- == Footer==-->
    <!-- // End Footer middle -->
    <!-- == Footer bar three == -->
  <?php include template('content','foot'); ?>