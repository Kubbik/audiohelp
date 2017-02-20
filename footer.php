    <footer class="main_footer">
        <div class="top_footer">

        </div>
        <div class="bottom_footer">

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

    <?php if (ale_get_option('copyrights')) : ?>
        <p class="right"><?php echo ale_option('copyrights'); ?></p>
    <?php else: ?>
        <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
    <?php endif; ?>

    <?php
    if ( has_nav_menu( 'header_menu' ) ) {
        wp_nav_menu(array(
            'theme_location'=> 'header_menu',
            'menu'			=> 'Header Menu',
            'menu_class'	=> 'ale_headermenu cf',
            'walker'		=> new Aletheme_Nav_Walker(),
            'container'		=> '',
        ));
    }
    ?>-->

    <?php wp_footer(); ?>

    </body>
</html>