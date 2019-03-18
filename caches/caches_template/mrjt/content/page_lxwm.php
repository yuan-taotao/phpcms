<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php
                $mysite=siteinfo($siteid);
                echo $mysite['name'];
            ?>
    </title>
    <meta name="description" content="Constra is a business template designed specifically for construction,building companies and those that offer building services.">
    <meta name="keywords" content="building, architecture, business, construction, corporate, plumber, electrician, electricity, engineering, industry, interior, maintenance, painting, projecting, renovation">
    <meta name="author" content="iglyphic">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="images/icon.ico">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <script src="http://api.map.baidu.com/api?v=2.0&ak=dOwYXFNklTBWNbUP2rwURcM6S2UH8C2L"></script>
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootsrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Owl carousel Theme -->
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- Menu Zord css file -->
    <link rel="stylesheet" href="css/menuzord.css">
    <!-- Style Css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr-->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body>

     


<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Start Loading -->
<section class="loading-overlay">
    <div class="Loading-Page">
        <h1 class="loader">Loading...</h1>
    </div>
</section>
<!-- End Loading  -->

<!-- Add your site or application content here -->
<!-- == Topbar One == -->

<!-- //topbar-one-->
<!-- == Start Navbar  ==-->
<div class="menu-area">
    <div class="container">
        <div class="row">
            <div>
                <nav id="menuzord" class="menuzord">
                    <a href="index.html" class="menuzord-brand"><img src="picture/logo2.png" alt="logo"></a>
                    <ul class="menuzord-menu">
                        <!-- <li><a href="index.html">首页<Br>Home</a></li>
                        <li><a href="about.html">关于我们<Br>About</a></li>
                        <li><a href="pro.html">集团产业<Br>Industry</a></li>
                        <li><a href="news.html">新闻动态<Br>News</a></li>
                        <li class="active"><a href="contact.html">联系我们<Br>Contact</a></li> -->
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>

                            <li><a <?php if(empty($catid)) { ?>class="h-nav-current"<?php } ?> href="<?php echo siteurl($siteid);?>">首页</a></li>

                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><!--  一级栏目循环开始  -->

                            <li><a <?php if($r['catid'] == $catid || $CATEGORYS[$CAT[parentid]][catid]==$r['catid']) { ?>class="h-nav-current" <?php } ?> href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>

                                <?php if($r[arrchildid]) { ?> <!--是否有子栏目-->

                                    <ul>

                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562eba0525a72e8a95a03bd7c7d4da01&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>

                        <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?><!--子栏目循环开始-->

                        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>

                        <?php $n++;}unset($n); ?><!--子栏目循环结束-->

                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                            </ul>

                        <?php } ?>

                             </li>

                        <?php $n++;}unset($n); ?><!--  一级栏目循环结束-->

                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
</div>
<!-- // End Navbar  -->
<!-- == Page Banner ==-->
<div class="slick-hero-slider-wrapper">
    <div class="slider slick-hero-slider slick-slider-center-mode slick-animation slick-inner-dot alt-dot-position with-main-search-wrapper-2">
        <div class="slick-item">
            <div class="image-bg" style="background-image:url('images/slider01.jpg'); height: 400px;">
            </div>
        </div>
    </div>

</div>
<!-- //Page Banner  -->
<!-- == Main Content ==-->
<div class="contact-body">
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
        <div class="row">
            <div class="col-sm-4">
                <div class="quick-contact">
                    <div class="icon first">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>CONTACT US</h3>
                    <p>
                        <span class="blue">中国</span><Br><span class="base">北京 / 成都</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="quick-contact phone">
                    <div class="icon second">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>CALL US</h3>
                    <h2>028-85583837</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="quick-contact chat">
                    <div class="icon third">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>address</h3>
                    <p>
                        四川成都市临江东路锦江花园城钻石座15楼
                    </p>
                </div>
            </div>
        </div>
        <div id="allmap"  style="width: 100%;height: 400px;margin-top:40px;margin-bottom:50px;font-family:'微软雅黑';border-radius: 10px"></div>
    </div>

</div>

<!--// Main Content -->
<!-- == Footer==-->


<!-- // End Footer middle -->
<!-- == Footer bar three == -->
<div>
    <form action="/index.php?m=liuyan&c=index&a=add" method="post">
        <span>姓名：</span><input class="" type="text" name="username" value=""><br>
        <span>电话：</span><input class="" type="text" name="phone" value=""><br>
        <span>留言：</span><textarea name="content" id="" cols="50" rows="5" value=""></textarea><br>
        <button>提交</button>
    </form>
</div>
<div class="footer-bar">
    <div class="container">
        <div class="row">
			<div class="col-md-8 col-sm-5">
                <div class="copyright-text">
                    <p>电话&nbsp;:&nbsp;028-85583837 &nbsp;&nbsp;邮箱&nbsp;:&nbsp;2237777777@qq.com &nbsp;&nbsp; 地址&nbsp;:&nbsp;四川成都市临江东路锦江花园城钻石座15楼</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-7">
                <div class="usefull-link">
                    <ul>
                        <li>备案号：<a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备18016058号</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="copyright-text">
                    <p>Copyright &copy; 2016 iGlyphic.com. All Rights Reserved</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-7">
                <div class="usefull-link">
                    <ul>
                        <!-- <li><a href="index.html">首页</a></li>
                        <li>|</li>
                        <li><a href="about.html">关于我们</a></li>
                        <li>|</li>
                        <li><a href="pro.html">集团产业</a></li>
                        <li>|</li>
                        <li><a href="news.html">新闻动态</a></li> -->
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                            <li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
                            <li>|</li>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                            <?php if($r['catid'] == "13") break;?> 
                           
                            <li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
                            <li>|</li>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <?php echo runhook('glogal_menu')?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer -->

<!-- == jQuery Librery == -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- == Bootsrap js File == -->
<script src="js/bootstrap.min.js"></script>
<!-- == Owl carousel == -->
<script src="js/owl.carousel.min.js"></script>
<!-- == menuzord js file == -->
<script src="js/menuzord.js"></script>
<!-- == Footer Map == -->
<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="js/map-init.js"></script>
<!-- == custom Js File == -->
<script src="js/custom.js"></script>

</body>

</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");    // 创建Map实例
    map.centerAndZoom(new BMap.Point(104.086074,30.649799), 18);
    var point = new BMap.Point(104.086074,30.649799);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>