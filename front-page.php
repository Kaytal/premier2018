<?php get_header(); ?>
<main id="content" role="main">
    <?php query_posts( 'post_type=event' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="homepage-event">
            <?php the_title(); ?>
            <?php echo $post->ID ?>
            <?php echo get_field('video_mp4'); ?>
            <?php echo get_field('video_webm'); ?>
            <?php echo get_field('video_poster'); ?>
            <?php echo get_field('event_logo'); ?>
            <?php echo get_field('event_date'); ?>
            <?php echo get_field('site_url'); ?>
            <?php echo get_field('book_now_link'); ?>
            <div class="triptych-row">
                <?php for($i=1; $i < 4; $i++ ) : ?>
                    <div class="triptych-item">
                        <?php echo get_field('triptych_' . $i . '_title'); ?>
                        <?php echo get_field('triptych_' . $i . '_text'); ?>
                        <?php echo get_field('triptych_' . $i . '_background_image'); ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
