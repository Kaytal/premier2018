<?php get_header(); ?>
<div class="events-rotator">
        <?php query_posts( 'post_type=event' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="rotator" style="background-image: url(<?php echo get_field('rotator_thumb')['url'] ?>)">
                <a class="rotator__link" href="#<?php echo $post->post_name ?>"></a>
                <img class="rotator__logo" src="<?php echo get_field('rotator_logo')['url']; ?>" alt="<?php the_title(); ?>" />
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
<main id="content" role="main">
    <?php query_posts( 'post_type=event' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="homepage-event" id="<?php echo $post->post_name ?>">
        <div class="homepage-event__video">
            <img src=<?php echo get_field('video_poster')['url']; ?> alt="" />
            <a data-fancybox href="<?php echo get_field('video_link') ?>">
                <div class="homepage-event__video-button"></div>
            </a>
                <h2 class="homepage-event__title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <title>triangle</title>
                        <polygon points="100 0 0 100 100 100 100 0" fill="#fff"/>
                    </svg>
                    <span><?php the_title(); ?></span>
                </h2>
            </div>
            <div class="homepage-event__info">
                <div class="homepage-event__info-block">
                    <img class="homepage-event__logo" src="<?php echo get_field('event_logo')['url']; ?>" alt="<?php echo get_field('event_logo')['alt']; ?>">
                </div>
                <div class="homepage-event__info-block">
                    <span class="homepage-event__date">
                        <?php echo get_field('event_date'); ?>
                    </span>
                    <a class="homepage-event__link" href="<?php echo get_field('site_url'); ?>">
                        Visit Site
                    </a>
                </div>
                <div class="homepage-event__info-block">
                    <a class="homepage-event__info-block homepage-event__book-now" href="<?php echo get_field('book_now_link'); ?>">
                        <span>Book<br/>Now</span>
                    </a>
                </div>
            </div>
            <div class="homepage-event__triptych triptych-row">
                <?php for($i=1; $i < 4; $i++ ) : ?>
                    <div class="homepage-event__triptych-item triptych-item" style="background-image:url('<?php echo get_field('triptych_' . $i . '_background_image')['url']; ?>');">
                        <div class="triptych-item__content">
                            <a href="<?php echo get_field('triptych_' . $i . '_link'); ?>" >
                                <h3 class="triptych-item__header">
                                    <?php echo get_field('triptych_' . $i . '_title'); ?>
                                </h3>
                            </a>
                            <p class="triptych-item__text">
                                <?php echo get_field('triptych_' . $i . '_text'); ?>
                            </p>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
