<?php

// All fintech template parts calling function

// Header template calling
function fintech_header(){
	get_template_part( 'inc/template-parts/header/header-1' );
}

// fintech header logo
function fintech_top_logo(){
	$fintech_top_logo = get_theme_mod('fintech_logo', get_template_directory_uri() . '/assets/images/Logo2.png');	
	if( !empty($fintech_top_logo) ) : ?>

		<a class="nav-logo p-0" href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url($fintech_top_logo); ?>" alt="logo">
		</a>
	<?php else : ?>
		<a class="nav-logo p-0" href="<?php echo esc_url(home_url('/')); ?>">
			<p><?php bloginfo('name'); ?></p>
		</a>
	<?php endif;	
}

// fintech right sidebar logo
function fintech_right_sidebar_logo(){
	$fintech_right_sidebar_logo = get_theme_mod('fintech_right_sidebar_logo', get_template_directory_uri() . '/assets/images/Logo2.png');	
	if( !empty($fintech_right_sidebar_logo) ) : ?>

		<a class="p-0" href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url($fintech_right_sidebar_logo); ?>" alt="logo">
		</a>
	<?php else : ?>
		<a class="nav-logo p-0" href="<?php echo esc_url(home_url('/')); ?>">
			<p><?php bloginfo('name'); ?></p>
		</a>
	<?php endif;	
}

// Fintech primary menu
function fintech_primary_menus(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'primary-menu',
			'container_class' => false, // div class, make it false to avoid div generation
            'menu_class'      => 'navbar-nav d-flex justify-content-center align-items-center gap-lg-2 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0', // Ul class
            'menu_id'         => '', // ul id
            'fallback_cb'     => 'Fintech_Walker_Nav_Menu::fallback',
            'walker'     	  => new Fintech_Walker_Nav_Menu,
			'depth'           => 4,
        ) 
    ); 
}

// Fintech footer template calling
function fintech_footer(){
	get_template_part( 'inc/template-parts/footer/footer-1' );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fintech_widgets_init() {

	// Sidebar widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Widgets Area', 'fintech' ),
			'id'            => 'sidebar-widgets',
			'description'   => esc_html__( 'Add sidebar widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="footer-widget-area footer-top-widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

	// All footer widgets
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1 - Top Area', 'fintech' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="footer-widget-area footer-top-widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2 - Second Top Area', 'fintech' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="footer-widget-area footer-center-widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3 - Top Bottom Area', 'fintech' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="footer-widget-area footer-bottom-widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4 - Bottom Left Area', 'fintech' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 d-flex align-items-center justify-content-md-start justify-content-sm-center justify-content-center %2$s">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 5 - Bottom Center Area', 'fintech' ),
			'id'            => 'footer-5',
			'description'   => esc_html__( 'Add widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center %2$s">',
			'after_widget'  => '</div>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 6 Bottom Right Area', 'fintech' ),
			'id'            => 'footer-6',
			'description'   => esc_html__( 'Add widgets here.', 'fintech' ),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'fintech_widgets_init' );

// fintech footer copyright
function fintech_footer_copyright(){

    $footer_copyright = get_theme_mod( 'fintech_copyright_text', esc_html('© Copyright 2024 Reserved to fintech','fintech') );

    ?>
		<p class="copyright-text mb-0"><?php echo wp_kses_post($footer_copyright); ?></p>
    <?php

}