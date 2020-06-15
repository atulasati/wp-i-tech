<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section class="bannerbox">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <?php $count = 0; ?>
            <?php while (have_rows('banner_image')) : the_row(); ?>

                <li data-target="#demo" data-slide-to=" <?php echo $count ?>" class="<?php if ($count == '0') {
                                                                                            echo 'active';
                                                                                        } ?>"></li>
                <?php $count++; ?>
            <?php endwhile; ?>

        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php $count2 = 0; ?>
            <?php while (have_rows('banner_image')) : the_row(); ?>
                <div class="carousel-item <?php if ($count2 == '0') {
                                                echo 'active';
                                            } ?>">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>
                <?php $count2++; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="overlayer">
        <h1><?php the_field('banner_heading'); ?></h1>
    </div>
</section>
<section class="mainContainer">
    <?php
    // TO SHOW THE PAGE CONTENTS
    while (have_posts()) : the_post(); ?>
        <!--Because the_content() works only inside a WP Loop -->

        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

</section>

<?php get_footer(); ?>