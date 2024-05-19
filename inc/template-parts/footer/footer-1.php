<?php
    $left_copyright_text = get_theme_mod('fintech_left_copyright','Copyright © 2024 Paypath by Evonicmedia. All Right Reserved.');
    $right_copyright_text = get_theme_mod('fintech_right_copyright','Powered by Evonicsoft');
?>

<!-- ======== 1.13. footer section ========  -->
<footer class="position-relative">
    <div class="container">
        <?php if(is_active_sidebar('footer-4') or is_active_sidebar('footer-5') or is_active_sidebar('footer-6') ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
        <?php endif; ?>
        <?php if(is_active_sidebar('footer-4') or is_active_sidebar('footer-5') or is_active_sidebar('footer-6') ) : ?>
        <div class="footer-widget-area footer-bottom-menu">
            <hr>
            <div class="row footer-nav-icon">
                <?php dynamic_sidebar( 'footer-4' ); ?>
                <?php dynamic_sidebar( 'footer-5' ); ?>
                <?php dynamic_sidebar( 'footer-6' ); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if(!empty($left_copyright_text) and !empty($left_copyright_text)) : ?>
        <hr>
        <div class="Copyright d-flex justify-content-between flex-wrap dir">
            <p><?php echo wp_kses_post($left_copyright_text); ?></p>
            <p><?php echo wp_kses_post($right_copyright_text); ?></p>
        </div>
        <?php endif; ?>
    </div>
</footer>
<!-- ======== End of 1.13. footer section ========  -->