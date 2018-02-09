<?php get_header(); ?>
<main class="faq-list" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="faq-page-details container">
            <header class="header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section class="entry-content">
                <?php the_content(); ?>
            </section>
        </article>
    <?php endwhile; endif; ?>


        <?php query_posts( 'post_type=faq_item' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="faq-item">
                    <div class="faq-item__question"><span class="container"><?php the_title(); ?></span></div>
                    <div class="faq-item__answer"><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
</section>
<?php get_footer(); ?>
