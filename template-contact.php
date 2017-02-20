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
            <?php the_title(); ?>
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
        <div class="form">
            <input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
            <input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
            <input name="contact[phone]" type="text" placeholder="Phone (required)" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
            <input name="contact[genre]" type="text" placeholder="Genre (required)" value="<?php echo isset($_POST['contact']['genre']) ? $_POST['contact']['genre'] : ''?>" required="required" id="contact-form-genre" />

            <textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
            <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
        </div>
        <?php wp_nonce_field() ?>
        </form>
    </div>
</div>
<!--


<?php get_footer(); ?>