<!-- section begin -->
<section>
    <!-- Container Begin -->
    <div class="container">
        <div class="row">
            <?php while (have_rows('accueil_3eme_section')) : the_row(); ?>
                <div class="col-md-4">
                    <div class="service-box service-style2">

                        <img src="<?php the_sub_field('accueil_3eme_section_icon'); ?>"
                             class="img-responsive"/>
                        <div class="service-content">
                            <h3><?php the_sub_field('accueil_3eme_section_titre'); ?></h3>
                            <p><?php the_sub_field('accueil_3eme_section_wysiwyg'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Container End -->
</section>
<!-- section close -->