<?php $can_style=get_option('can_style'); ?>
<section class="sidebar_sect">
    <aside id="sidebar" class="blackbg">
	   <?php dynamic_sidebar('can'); ?>
       <div class="clearfix"></div>
    </aside>
</section>

<?php wp_footer();  ?>
</div>
<footer class="footer">
    <div class="footer_content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/upload/head.jpg">
        <div class="footer_des">
            <h1 class="footer_title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <div class="h_dividing"></div>
            <h2 class="footer_description"><?php bloginfo('description'); ?></h2>
        </div>
        <div class="copyright_div"><a href="http://weibo.com/3176154297" title="Cononico">Cononico</a>'s <a href="http://coolecho.net" title="IceEnd">曼陀罗</a> |   <a href="http://user.qzone.qq.com/826167518/" title="beian">Datura的空间</a></div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
</body>
</html>
