<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer-bar">
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
    <!-- == Owl carousel == -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- == menuzord js file == -->
    <script src="js/menuzord.js"></script>
    <!-- == custom Js File == -->
    <script src="js/custom.js"></script>
    <script src="js/chanye.js"></script>
</body>

</html>