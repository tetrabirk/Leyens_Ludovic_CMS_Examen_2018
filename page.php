<?php
get_header();
?>
    <!-- content begin -->
    <div id="content" class="no-padding">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


                <?php include_once 'include/page/section_video.php'?>

                <?php include_once 'include/page/section_repeteur.php'?>

                <?php include_once 'include/page/section_team.php' ?>






            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- content close -->

<?php
get_footer();
?>