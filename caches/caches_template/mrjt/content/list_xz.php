<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d5af71f969d2b774c8167efe438cdb2b&action=lists&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?>
            <div class="row">
            
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="col-md-4">
                    <div>
                    	<h4><?php echo $r['title'];?></h4>
                    	<div>
                    	<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt=""></a>
                    	</div>
                    	
                    	<p><?php echo $r['description'];?></p>
                    	
                    	<div>
                    		<a href="<?php echo $r['url'];?>"><i class="pull-right">下载：</i><span style="height:50px;color:lightgreen;font-size:25px;" class="glyphicon glyphicon-download-alt pull-right" aria-hidden="true"></span></a>
                    		
                    	</div>
                    </div>
                    <?php $n++;}unset($n); ?>
                </div>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="col-md-6">
                   
                </div>
            </div>
        </div>
    </div>
    <!--// Main Content -->
    <!-- == Footer==-->
    <!-- // End Footer middle -->
    <!-- == Footer bar three == -->
       <?php include template('content','foot'); ?>