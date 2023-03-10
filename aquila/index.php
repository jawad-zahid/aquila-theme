<?php

/**
 * MAIN TEMPLATE FILE
 * 
 * @package Aquila
 */

get_header();
?>

<div id="primary">
    <div id="main" class="site-main mt-5" role="main">
        <?php
        if (have_posts()) {
        ?>
            <div class="container">
                <?php
                if (is_home() && !is_front_page()) {
                ?>
                    <header class="mb-5">
                        <h1 class="page-title">
                            <?php single_post_title(); ?>
                        </h1>
                    </header>
                <?php
                }
                ?>
                <div class="row">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <div class="col-md-4">
                            <?php get_template_part('template-parts/content'); ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        } else {
        ?>
            <?php get_template_part('template-parts/content-none'); ?>
        <?php
        }
        ?>
    </div>
</div>

<?php get_footer();
