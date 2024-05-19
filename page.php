<?php get_header(); ?>
<!-- ======== 9.1. Blogs cards section ========  -->
<section class="news-cards">
    <div class="container">
        <div class="row d-flex gap-md-0 gap-sm-5 gap-4 mb-5">
        <!-- blog post start --> 
        <?php if ( have_posts() ) : ?>
            <?php while( have_posts()  ) : the_post(); ?>
                    <!-- blog single page details -->
                    <div class="col-lg-2 col-md-1 d-flex" data-aos="flip-right"></div>
                    <div class="col-lg-8 col-md-6 d-flex" data-aos="flip-right">
                        <div class="card news-card-back"><br/><br/>
                            <?php if( !empty(get_the_post_thumbnail_url() ) ) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="card-img">
                            <?php endif; ?>

                            <div class="card-body">
                                <p class="card-text p-f-s">
                                    <?php echo get_the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1 d-flex" data-aos="flip-right"></div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- blog post end --> 
        </div>
    </div>
</section>
<!-- ======== End of 9.1. Blogs cards section ========  -->
<?php get_footer(); ?>