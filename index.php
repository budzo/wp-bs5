<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
