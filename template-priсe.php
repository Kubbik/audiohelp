<?php
/**
 * Template Name: Прайс-лист
 */
// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
get_header(); ?>

    <div class="container contacts">
        <div class="wrapper">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="page_content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
    <!--


    <?php get_footer(); ?>