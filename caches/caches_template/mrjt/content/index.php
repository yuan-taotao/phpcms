<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php
                $mysite=siteinfo($siteid);
                echo $mysite['name'];
            ?>
    </title>
    <meta name="description" content="铭仁集团是一家以资产管理、投资咨询、工程建设、建筑劳务、景观工程、农业科技、生物科技、服装贸易为一体的大型民营企业。铭仁立足中国大陆，业务遍布香港、新加坡、中南美洲、缅甸、老挝，以及国内的北京、四川、广东、云南、重庆、新疆、青海等地">
    <meta name="keywords" content="铭仁集团">
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
    <!-- Slider css file -->
    <link rel="stylesheet" href="css/slick.slider.css">
    <!-- Style Css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr-->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/swiper.min.css">
</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- Add your site or application content here -->
    <!-- Start Loading -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section>
    <!-- End Loading  -->
    <!-- == Topbar One == -->
    <!-- //topbar-one-->
    <!-- == Start Navbar  ==-->
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div>
                    <nav id="menuzord" class="menuzord">
                        <a href="<?php echo APP_PATH;?>" class="menuzord-brand"><img src="picture/logo2.png" alt="logo"></a>
                        <ul class="menuzord-menu">
                            <!-- <li class="active"><a href="index.html">首页<Br>Home</a></li>
                            <li><a href="about.html">关于我们<Br>About</a></li>
                            <li><a href="pro.html">集团产业<Br>Industry</a></li>
                            <li><a href="news.html">新闻动态<Br>News</a></li>
                            <li><a href="contact.html">联系我们<Br>Contact</a></li> -->
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
    <!-- start slick hero slider -->
    <!-- <div class="slick-hero-slider-wrapper">

    <div class="slider slick-hero-slider slick-slider-center-mode slick-animation slick-inner-dot alt-dot-position with-main-search-wrapper-2">

        <div class="slick-item">

            <div class="image-bg" style="background-image:url('images/slider01.jpg');">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10">

                            <div class="slick-hero-slider-caption">
                                <span class="hero-caption-label animation fromBottom transitionDelay2 transitionDuration4">铭心立志·浚通仁和</span>
                                <h1 class="animation fromBottom transitionDelay4 transitionDuration6">铭仁集团</h1>
                                <p class="font22 line34 font300 font-roboto-condensed font19-xs mt-15 mb-30 animation fromBottom transitionDelay6 transitionDuration8">铭仁财富立足中国大陆，业务遍布香港、新加坡、中南美洲、缅甸、老挝，以及国内的北京、四川、广东、云南、重庆、新疆、青海等地</p>
                                <a href="about.html" class="animation fromBottom transitionDelay8 transitionDuration10"><span class="bg-primary">More Details</span></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="slick-item">
            <div class="image-bg" style="background-image:url('images/slider02.jpg');">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10">

                            <div class="slick-hero-slider-caption">
                                <span class="hero-caption-label animation fromBottom transitionDelay2 transitionDuration4">铭心立志·浚通仁和</span>
                                <h1 class="animation fromBottom transitionDelay4 transitionDuration6">铭仁集团</h1>
                                <p class="font22 line34 font300 font-roboto-condensed font19-xs mt-15 mb-30 animation fromBottom transitionDelay6 transitionDuration8">It is the sacred belief of the company that "mind your heart and dredge benevolence". Over the years, the company has made outstanding contributions to the economic development of the country in all fields, adhering to the business philosophy of "honesty, letter - based, adult and personal". </p>
                                <a href="about.html" class="animation fromBottom transitionDelay8 transitionDuration10"><span class="bg-primary">More Details</span></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="slick-item">
            <div class="image-bg" style="background-image:url('images/slider03.jpg');">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10">

                            <div class="slick-hero-slider-caption">
                                <span class="hero-caption-label animation fromBottom transitionDelay2 transitionDuration4">铭心立志·浚通仁和</span>
                                <h1 class="animation fromBottom transitionDelay4 transitionDuration6">铭仁集团</h1>
                                <p class="font22 line34 font300 font-roboto-condensed font19-xs mt-15 mb-30 animation fromBottom transitionDelay6 transitionDuration8">Ming Ren wealth group is a large private enterprise with assets management, investment consulting, engineering construction, construction labor, landscape engineering, agricultural science and technology, biotechnology, energy science and technology, clothing trade steam. </p>
                                <a href="about.html" class="animation fromBottom transitionDelay8 transitionDuration10"><span class="bg-primary">More Details</span></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div> -->
    <div class="apple-banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide1">
                    <div class="title txt"> 铭心立志、浚通仁和 <br>
                        铭仁集团 </div>
                </div>
                <div class="swiper-slide slide2">
                    <div class="title txt"> <img src="img/logo_watch_large.png"> </div>
                        <h2 class="homepage-headline txt" style="color:white">铭心立志、浚通仁和</h2>
                    </div>
                    <div class="swiper-slide slide3">
                        <div class="title txt"> <img src="img/logo_macbookpro_large.png">
                            <p> 铭心立志、浚通仁和 </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"><span></span></div>
                <div class="swiper-button-next"><span></span></div>
                <ul class="swiper-pagination autoplay">
                </ul>
            </div>
        </div>
        <script src="js/swiper.min.js"></script>
        <script src="js/apple.js"></script>
        <!-- end slick hero slider -->
        <!-- End Slider -->
        <!-- // slider section home tow end -->
        <!-- == Main Content ==-->
        <!-- == who we are ==-->
        <div class="who-we-are">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h1><span>关于</span>铭仁集团</h1>
                            <p>
                                铭仁集团是一家以资产管理、投资咨询、工程建设、建筑劳务、景观工程、农业科技、生物科技、服装贸易为一体的大型民营企业。铭仁立足中国大陆，业务遍布香港、新加坡、中南美洲、缅甸、老挝，以及国内的北京、四川、广东、云南、重庆、新疆、青海等地。集团拥有极具全球化视野的管理团队500余人，旗下拥有北京铭仁财富国际咨询有限公司、国融汇通资产管理（北京）有限公司等.
                            </p>
                            <a href="<?php echo $CATEGORYS['10']['url'];?>">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="all">
                            <div class="single">
                                <img src="picture/2.jpg" class="img-responsive" alt="image" />
                    </div>
                                <div class="single">
                                    <img src="picture/2.jpg" class="img-responsive" alt="image" />
                    </div>
                                    <div class="single">
                                        <img src="picture/2.jpg" class="img-responsive" alt="image" />
                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // who we are -->
                    <!-- == prolist ==-->
                    <div class="home-bussiness-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="partner-heading">
                                        <h2>集团产业</h2>
                                        <p>
                                            资产管理、投资咨询、工程建设、建筑劳务、景观工程、农业科技、生物科技、能源科技、服装贸易，<a class='btn btn-primary btn-xs' href='<?php echo $CATEGORYS['11']['url'];?>'>更多</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- 集团产业循环 -->

                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6cc3f854e8a83d9f25d7b408d0109d8d&action=lists&catid=11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','limit'=>'20',));}?>
                             <div class="row">
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                
                                    
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-news">
                                            <div class="image">
                                                <img src="<?php echo $r['thumb'];?>" class="img-responsive" alt="image">
                                                <i class="fa fa-picture-o"></i>
                                            </div>
                                            <div>
                                                <h4><?php echo $r['title'];?></h4>
                                                <p><?php echo $r['keywords'];?></p>
                                                <a href="<?php echo $r['url'];?>">查看详情</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php $n++;}unset($n); ?>
                             </div>           
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>





                            </div>
                        </div>
                    </div>
                    <!-- // prolist -->
                    <div class="home-call-action about-subscibe-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-sm-8">
                                    <div class="content">
                                        <h2>铭心立志、浚通仁和</h2>
                                        <p>
                                            公司秉承“以诚取信、以信为本、成人达己、达己为人”的经营理念，在各领域中为国家的经济发展做出了卓越的贡献。公司全体员工奉行“以真诚、专业、超值的服务让客户感动”的服务理念，致力于以服务拓展打造新的产业价值链，实现顾客和企业价值最大化。
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="subscribe">
                                        <a href="<?php echo $CATEGORYS['10']['url'];?>">关于我们</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- == Why Chose us ==-->
                    <!-- // Why Chose us -->
                    <!-- == Home Project ==-->
                    <!-- // Home Project -->
                    <!-- == news ==-->
                    <div class="home-one-service">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="partner-heading">
                                        <h2>新闻中心</h2>
                                        <p>
                                            公司勇于担当对员工、对顾客、对社会的责任，诚信经营，规范运作，致力于为构建和谐社会做出贡献。公司敢于探索未知的风险，应对挑战，坚信成功一定有方法，坚信历尽大浪淘沙，始得基业常青。铭仁财富集团诚挚地欢迎有识之士，业界精英，携手共图大业，共铸辉煌！
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- 新闻循环 -->


                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=62b1155ea9179a868a30209d09adb5f0&action=lists&catid=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','limit'=>'20',));}?>
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
                    <!-- // Home business Partner -->
                    <!--// Main Content -->
                    <!-- == Footer==-->
                    <!-- // End Footer middle -->
                    <!-- == Footer bar three == -->
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
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                        <li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
                                         <li>|</li>
                                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
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
                    <script src="js/index.js"></script>
                    <script type="text/javascript" src="js/slick.min.js"></script>
                    <!-- == Owl carousel == -->
                    <script src="js/owl.carousel.min.js"></script>
                    <!-- == menuzord js file == -->
                    <script src="js/menuzord.js"></script>
                    <!-- == mixitup == -->
                    <script src="js/mixitup.js"></script>
                    <!-- == custom Js File == -->
                    <script src="js/custom.js"></script>
                    <script type="text/javascript">
                    "use strict";
                    //mixItUp
                    $('.home-work-carousel').mixItUp();

                    /**
                     * Slick Carousel and Slider
                     */
                    $('.slick-hero-slider').slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        infinite: true,
                        centerPadding: '0',
                        focusOnSelect: true,
                        adaptiveHeight: true,
                        autoplay: true,
                        autoplaySpeed: 4500,
                        pauseOnHover: true
                    });
                    </script>
</body>

</html>