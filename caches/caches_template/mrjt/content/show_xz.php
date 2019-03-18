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
            <div class="row">
                <div class="col-md-4">
                    <div>
                    	<h4><?php echo $rs['title'];?></h4>
                    	<p><?php echo $rs['description'];?></p>
                    	<div>
                    	<a href=""><img src="<?php echo $rs['thumb'];?>" alt=""></a>
                    	</div>
                    	<div>
                    		<a href="<?=string2array($rs['downfiles'])[0]['fileurl']?>"><span style="height:50px;color:lightgreen;font-size:25px;" class="glyphicon glyphicon-download-alt pull-right" aria-hidden="true"></span></a>
                    		
                    	</div>
                    </div>
                </div>
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