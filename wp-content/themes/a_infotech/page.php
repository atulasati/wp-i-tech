<?php get_header(); ?>

<section class="mainContainer">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
                            <div class="entry-content">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } ?>
                                <?php the_content(); ?>
                                <div class="entry-links"><?php wp_link_pages(); ?></div>
                            </div>
                        </article>
                    </div>
                </div>
                <?php if (comments_open() && !post_password_required()) {
                    comments_template('', true);
                } ?>
        <?php endwhile;
        endif; ?>

    </div>
</section>

<?php get_footer(); ?>