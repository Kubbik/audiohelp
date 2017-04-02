    <footer class="main_footer">
        <div class="top_footer">
            <div class="wrapper">
                <div class="footer_logo footer_inner">
                    <?php if(ale_get_option('footerlogo')) { ?>
                        <a href="<?php echo home_url("/"); ?>" class="top_link"><img src="<?php  echo ale_get_option("footerlogo"); ?>"/></a>
                    <?php } ?>
                </div>
                <div class="menu_info footer_inner">
                    <h5>Карта сайта</h5>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </div>
                <div class="contact footer_inner">
                    <h5>Контакты</h5>
                    <?php if(ale_get_option('footer_phone')){?>
                        <div class="footer_phone">
                            <?php echo ale_get_option('footer_phone'); ?>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_option('footer_address')){?>
                        <div class="footer_address">
                            <?php echo ale_get_option('footer_address'); ?>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_option('footer_mail')){?>
                        <div class="footer_mail">
                            <a href="mailto:<?php echo ale_get_option('footer_mail'); ?>"><?php echo ale_get_option('footer_mail'); ?></a>
                        </div>
                    <?php } ?>
                </div>
                <div class="twitter footer_inner">
                    <h5>Вконтакте</h5>
                    <?php get_sidebar('footer');?>
                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?142"></script>

                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 1, width: "319"}, 70633946);
                    </script>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="wrapper">
                <div class="copyrights">
                        <?php if (ale_get_option('copyrights')) : ?>
                            <?php echo ale_option('copyrights'); ?>
                        <?php else: ?>
                            &copy; <?php echo date('Y'); ?> <?php _e ('ALL RIGHTS RESERVED AUDIOHELP', 'aletheme')?>
                        <?php endif; ?>
                </div>
                <div class="footer_social">
                    <?php if(ale_get_option("yt")){ ?><a href="<?php echo ale_get_option("yt"); ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a><?php } ?>
                    <?php if(ale_get_option("insta")){ ?><a href="<?php echo ale_get_option("insta"); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?>
                    <?php if(ale_get_option("twi")){ ?><a href="<?php echo ale_get_option("twi"); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php } ?>
                    <?php if(ale_get_option("fb")){ ?><a href="<?php echo ale_get_option("fb"); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- <ul class="left">
        <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
    </ul>


    -->

    <?php wp_footer(); ?>

    </body>
</html>