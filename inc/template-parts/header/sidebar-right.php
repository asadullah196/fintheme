<?php
    // logo status
    $sidebar_logo_status = get_theme_mod('fintech_right_sidebar_logo_switch', true);

    // Text area content    
    $sidebar_textarea = get_theme_mod('fintech_right_sidebar_textarea', 'Lorem ipsum dolor sit amet');

    // Button content
    $sidebar_button_status = get_theme_mod('fintech_right_sidebar_button_switch', true);
    $sidebar_button_text = get_theme_mod('fintech_right_sidebar_button_text', 'Discover More');
    $sidebar_button_url = get_theme_mod('fintech_right_sidebar_button_URL', '#');

    // Contact section
    $contact_heading = get_theme_mod('fintech_right_sidebar_contact_heading', 'Connected details:');
    $contact_phone = get_theme_mod('fintech_right_sidebar_contact_phone', '+123-456-7890');
    $contact_email = get_theme_mod('fintech_right_sidebar_contact_email', 'yourname@email.com');
    $contact_office = get_theme_mod('fintech_right_sidebar_contact_hours', 'Office Hours: 8AM - 11PM Sunday - Weekend Day
');

    // Social media
    $contact_facebook = get_theme_mod('fintech_right_sidebar_facebook_switch', true);
    $contact_facebook_url = get_theme_mod('fintech_right_sidebar_facebook_URL', '#');
    $contact_x = get_theme_mod('fintech_right_sidebar_twitter_switch', true);
    $contact_x_url = get_theme_mod('fintech_right_sidebar_twitter_URL', '#');
    $contact_instagram = get_theme_mod('fintech_right_sidebar_instagram_switch', true);
    $contact_instagram_url = get_theme_mod('fintech_right_sidebar_instagram_URL', '#');
    $contact_linkedin = get_theme_mod('fintech_right_sidebar_linkedin_switch', true);
    $contact_linkedin_url = get_theme_mod('fintech_right_sidebar_linkedin_URL', '#');
    $contact_youtube = get_theme_mod('fintech_right_sidebar_youtube_switch', true);
    $contact_youtube_url = get_theme_mod('fintech_right_sidebar_youtube_URL', '#');
    $contact_other = get_theme_mod('fintech_right_sidebar_others_switch', false);
    $contact_other_url = get_theme_mod('fintech_right_sidebar_other_URL', '');
    
?>

<!--=================navigation Right slidebar==================-->
<section class="right-sidbar" id="right_side">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Sidebar logo and button-->
        <?php
            if ($sidebar_logo_status == true) :
                fintech_right_sidebar_logo();
            endif;
        ?>
        <button class="close_right_sidebar fa-solid fa-xmark" onclick="close_right_sade()"></button>
    </div>

    <?php if( !empty($sidebar_textarea) ) : ?>
        <p class="mt-4 pb-3"><?php echo esc_html__($sidebar_textarea); ?></p>
    <?php endif; ?>
    <br/>  
    <?php if ($sidebar_button_status == true ) : ?>
        <a href="<?php echo esc_url($sidebar_button_url); ?>" class="btn-hover1"><?php echo esc_html__($sidebar_button_text); ?></a>
    <?php endif; ?>
    <hr>
    <h5 class="mt-4 mb-4"><?php echo esc_html__($contact_heading); ?></h5>
    <ul class="d-flex flex-column gap-3">
        <?php if (!empty($contact_phone)) : ?>
        <li>
            <a href="#"> <i class="fa-solid fa-phone"></i></a>
            <a href="#"><?php echo esc_html__($contact_phone); ?></a>
        </li>
        <?php endif; ?>
        <?php if (!empty($contact_email)) : ?>
        <li>
            <a href="#"><i class="fa-solid fa-envelope"></i></a>
            <a href="#"><?php echo esc_html__($contact_email); ?></a>
        </li>
        <?php endif; ?>
        <?php if (!empty($contact_office)) : ?>
        <li>
            <a href="#"><i class="fa-solid fa-clock"></i></a>
            <a href="#"><?php echo esc_html__($contact_office); ?></a>
        </li>
        <?php endif; ?>

    </ul>
    <span class="d-flex mt-4">
        <?php if ($contact_facebook == true) : ?>
            <a href="<?php echo esc_url($contact_facebook_url); ?>" class="p-0"><i class="fa-brands fa-facebook"></i></a>
        <?php endif; ?>
        <?php if ($contact_x == true) : ?>
            <a href="<?php echo esc_url($contact_x_url); ?>" class="p-0"><i class="fa-brands fa-instagram"></i></a>
        <?php endif; ?>
        <?php if ($contact_instagram == true) : ?>
            <a href="<?php echo esc_url($contact_instagram_url); ?>" class="p-0"><i class="fa-brands fa-twitter"></i></a>
        <?php endif; ?>
        <?php if ($contact_linkedin == true) : ?>
            <a href="<?php echo esc_url($contact_linkedin_url); ?>" class="p-0"><i class="fa-brands fa-linkedin"></i></a>
        <?php endif; ?>
        <?php if ($contact_youtube == true) : ?>
            <a href="<?php echo esc_url($contact_youtube_url); ?>" class="p-0"><i class="fa-brands fa-youtube"></i></a>
        <?php endif; ?>
        <?php if ($contact_other == true) : ?>
            <a href="<?php echo esc_url($contact_other_url); ?>" class="p-0"><i class="fa-solid fa-cat"></i></a>
        <?php endif; ?>
    </span>
</section>