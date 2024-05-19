<?php
    $error_page_bg_image = get_theme_mod('fintech_error_page_bg', get_template_directory_uri() . '/assets/images/bg/404bg.png');
    $error_page_heading = get_theme_mod('fintech_error_page_heading','Ops! PAGE NOT FOUND...');
    $error_page_sub_heading = get_theme_mod('fintech_error_page_sub_heading','ERROR 404');
    $error_page_description = get_theme_mod('fintech_error_page_description','Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor voluptatum dolores
                        veritatis provident reiciendis doloremque non autem soluta qui? Repudiandae, vel.');
    $error_page_btn_text = get_theme_mod('fintech_error_page_btn_text','Back to Home');
    $error_page_btn_url = get_theme_mod('fintech_error_page_btn_URL', '#');
?>

<?php get_header(); ?>
<body>
    <div class="site-wrapper" style="background-image: url(<?php echo esc_url($error_page_bg_image); ?>);">
    
        <!-- ======== 10.1. ooops section ======== -->
        <section>
            <div class="container">
                <div class="hero404" data-aos="zoom-in">
                    <h2 class="text-center"><?php echo esc_html__($error_page_heading, 'fintech'); ?></h2>
                    <h4><?php echo esc_html__($error_page_sub_heading, 'fintech'); ?></h4>
                    <p class="text-center"><?php echo esc_html__($error_page_description, 'fintech'); ?></p>
                    <a class="btn-hover1" href="<?php echo esc_url($error_page_btn_url); ?>"><?php echo esc_html__($error_page_btn_text, 'fintech'); ?></a>
                </div>
            </div>
        </section>
        <!-- ======== End of 10.1. ooops section ======== -->
    </div>
<?php get_footer(); ?>