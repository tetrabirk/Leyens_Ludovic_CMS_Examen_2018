<?php
/**
 * Template Name: Contact
 *
 */
get_header();
?>
    <!-- content begin -->
    <div id="content" class="no-padding">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <!-- section begin -->
                <section id="section-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                <?php include_once 'include/contact/titre.php' ?>
                                <?php include_once 'include/contact/form.php' ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <?php include_once 'include/contact/map.php' ?>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- content close -->

    <!--CONTACT-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSSiBIjO2oLHUPb7LL0FChkEYE1FC8ytE"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/contact.js"></script>


<?php
get_footer();
?>