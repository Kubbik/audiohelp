<?php 
/**
 * Template Name: Контакты
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>

<div class="container contacts">
    <div class="wrapper">
        <h2 class="page_title">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        </h2>
        <div class="page_content">
            <?php the_content(); ?>
        </div>
            <?php endwhile; endif; ?>
            <div class="contacts_data cf">
                <div class="third_part">
                    <span class="label"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo ale_get_meta('phone_label'); ?></span>
                    <span class="value phone_number"><?php echo ale_get_meta('phone_number'); ?></span>
                </div>
                <div class="third_part">
                    <span class="label"><i class="fa fa-address-book-o" aria-hidden="true"></i><?php echo ale_get_meta('address_label'); ?></span>
                    <span class="value address"><?php echo ale_get_meta('address'); ?></span>
                </div>
                <div class="third_part emailbox">
                    <span class="label"><i class="fa fa-envelope-open-o" aria-hidden="true"></i><?php echo ale_get_meta('email_label'); ?></span>
                    <span class="value"><a href="mailto:<?php echo ale_get_meta('Email'); ?>"><?php echo ale_get_meta('Email'); ?></a></span>
                </div>
            </div>
            <div class="contact_form">
            <div class="inner_page_title">
                <h3 class="inner_title font_three"><?php echo ('Контакты'); ?></h3>
            </div>
            <form method="post" action="<?php the_permalink(); ?>">
                <?php if (isset($_GET['успех'])) : ?>
                    <p class="success"><?php ('Спасибо за ваше сообщение')?></p>
            <?php endif; ?>
            <?php if (isset($error) && isset($error['msg'])) : ?>
                <p class="error"><?php echo $error['msg']?></p>
            <?php endif;?>

            <div class="item_line cf">
                <?php if(ale_get_meta('address')){

                    echo do_shortcode('[contact-form-7 id="90" title="Контактная форма"]');

                }?>

                 <!--<div class="item_input">
                    <input name="contact[name]" type="text" placeholder="Ваше имя (обязательно)" value="<?php /*echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''*/?>" required="required" id="contact-form-name" />
                </div>
                <div class="item_input">
                    <input name="contact[phone]" type="text" placeholder="Телефон (обязательно)" value="<?php /*echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''*/?>" required="required" id="contact-form-phone" />
                </div>
                <div class="item_input">
                    <input name="contact[email]" type="email" placeholder="Email (обязательно)" value="<?php /*echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''*/?>" required="required" id="contact-form-email" />
                </div>
            </div>
            <div class="item_line">
                <textarea name="contact[message]"  placeholder="Текст сообщения"id="contact-form-message" required="required"><?php /*echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''*/?></textarea>
            </div>
            <div class="item_line">
                <input type="submit" class="submit" value="<?php /*_e('Отправить', 'aletheme')*/?>"/>
            </div>-->
            </div>
            <?php wp_nonce_field() ?>
            </form>
    </div>
</div>

<?php get_footer(); ?>