<?php
/*
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
 */
get_header('archive');
?>

    <div class="container">
        <div class="col-md-12" style="margin-top: 120px;">
            <div class="row row-centered">


                <?php
                $args = array(
                    'category_name' => 'blog',
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
                );

                query_posts($args);

                while (have_posts()) : the_post();
                    /* Do whatever you want to do for every page... */
                    ?>

                    <a href="<?php echo the_permalink() ?>" class="col-md-4 col-centered"
                       style="padding: 10px; height: 300px; overflow: hidden; margin-bottom: 30px;">
                        <div class="row">
                            <div class="col-md-12"
                                 style="height: 180px"><?php echo the_post_thumbnail('large', 'style=width:100%;height:100%;') ?></div>
                            <div class="col-md-12" style="padding-top: 10px">
                                <p style="color: #000; font-size: 2rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    <?php echo get_the_title() ?>
                                </p>
                                <p style="overflow: hidden; text-overflow: ellipsis; color: #606060; font-size: 1.5rem">
                                    <?php echo get_the_excerpt() ?>
                                </p>
                            </div>
                        </div>
                    </a>

                <?php
                endwhile;
                ?>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="alignleft"><?php previous_posts_link('&laquo; Anterior') ?></div>
                        <div class="alignright"><?php next_posts_link('Próximo &raquo;') ?></div>
                    </div>
                </div>

                <?php
                wp_reset_query();  // Restore global post data
                ?>


            </div>
        </div>
    </div>


<?php get_footer(); ?>