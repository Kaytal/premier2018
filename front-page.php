<?php get_header(); ?>
<main id="content" role="main">
    <?php query_posts( 'post_type=event' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="homepage-event">
            <?php echo $post->ID ?>
            <div class="homepage-event__video" style="background-image:url(<?php echo get_field('video_poster')['url']; ?>);">
                <div class="homepage-event__video-button"></div>
                <?php echo get_field('video_mp4'); ?>
                <?php echo get_field('video_webm'); ?>
                <h2 class="homepage-event__title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <title>triangle</title>
                        <polygon points="100 0 0 100 100 100 100 0" fill="#fff"/>
                    </svg>
                    <span><?php the_title(); ?></span>
                </h2>
            </div>
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
