<?php
/**
 * Template Name: HomePage
 *
 */
get_header();
?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php include_once 'include/accueil/slider.php' ?>

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">
            <?php include_once 'include/accueil/section_about.php' ?>

            <?php include_once 'include/accueil/section_derniers_articles.php' ?>

            <?php include_once 'include/accueil/section_icones.php' ?>
        </div>
        <!-- content close -->
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>