<?php if(is_single()) :  ?>
    <!-- blog single page details -->
    <div class="col-lg-1 col-md-1 d-flex" data-aos="flip-right"></div>
    <div class="col-lg-6 col-md-6 d-flex" data-aos="flip-right">
        <div class="card news-card-back"><br/><br/>
            <?php if( !empty(get_the_post_thumbnail_url() ) ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="card-img">
            <?php endif; ?>

            <div class="card-body">
                <a href="<?php the_permalink( ); ?>">
                    <h5><?php the_title(); ?></h5>
                </a>
                <?php echo get_template_part('inc/template-parts/blog/post-meta'); ?>     
                <hr class="dotted-line">
                <p class="card-text p-f-s">
                    <?php echo get_the_content(); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 d-flex sidebar-area" data-aos="flip-right">
        <?php echo get_sidebar(); ?> 
    </div>
    <div class="col-lg-1 col-md-1 d-flex" data-aos="flip-right"></div>

<?php else : ?>
    <!-- Blog archive page -->
    <div class="col-lg-4 col-md-4 d-flex" data-aos="flip-right">
        <div class="card news-card-back"><br/><br/>
            <?php if( !empty(get_the_post_thumbnail_url() ) ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="card-img">
            <?php endif; ?>
            <div class="card-body">
                <a href="<?php the_permalink( ); ?>">
                    <h5><?php the_title(); ?></h5>
                </a>
                <p class="card-text p-f-s">
                    <?php 
                        $post_content = get_the_content();
                        $word_limit = 10;
                        $trimmed_content = wp_trim_words($post_content, 10);
                        echo $trimmed_content;
                    ?>
                </p>
            </div>
            <hr class="dotted-line">
                <?php echo get_template_part('inc/template-parts/blog/post-meta'); ?>
            <div class="news-link">
                <a class="btn-hover1" href="<?php the_permalink( ); ?>">Read More</a>
            </div>
        </div>
    </div>
<?php endif; ?>
