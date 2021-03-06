<?php get_header(); ?>

    <div class="main">

    <?php

        if ( have_posts() ) :

            while( have_posts() ) :

                the_post();
                // output post content
                ?>

                    <div <?php post_class(); ?>>

                        <h2><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a></h2>

                        <p class="date"><?php the_date(); ?></p>

                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>

                    </div>

                <?php

            endwhile;

            // pagination

        else :

            // no posts found

        endif;
    ?>

    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
