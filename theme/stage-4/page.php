<?php get_header(); ?>

	<div class="main">

    <?php

        if ( have_posts() ) :

            while( have_posts() ) :

                the_post();
                // output post content
                ?>

                    <div <?php post_class(); ?>>

                        <h2><?php the_title(); ?></h2>

                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>

                    </div>

                <?php

            endwhile;

        else :

            // no posts found

        endif;
    ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
