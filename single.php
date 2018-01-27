<?php
/**
 * Template Name: Article
 *
 */
get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<?php include_once 'include/single/titre.php' ?>


<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
      <?php include_once 'include/single/article.php' ?>
      <?php include_once 'include/single/widget.php' ?>

        </div>
    </div>
</div>

<?php endwhile; ?>

<!-- content close-->
<?php
get_footer();
?>