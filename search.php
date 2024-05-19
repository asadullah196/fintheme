<?php get_header(); ?>
<!-- ======== 9.1. Blogs cards section ========  -->
<section class="news-cards search-asad">
    <div class="container">
        <div class="row d-flex gap-md-0 gap-sm-5 gap-4 mb-5">
        <!-- blog post start --> 
        <?php if ( have_posts() ) : ?>
            <?php while( have_posts()  ) : the_post(); ?>
                <?php echo get_template_part( 'inc/template-parts/content' , get_post_format() ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- blog post end --> 
        </div>
    </div>
</section>
<!-- ======== End of 9.1. Blogs cards section ========  -->
<?php get_footer(); ?>