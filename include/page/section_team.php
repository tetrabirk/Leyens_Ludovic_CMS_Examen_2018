<!-- section begin -->
<section id="section-team" class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2><?php the_field('page_3eme_section_titre'); ?></h2>
                    <div class="tiny-border"></div>
                </div>
            </div>


            <?php while (have_rows('page_3eme_section_repeteur')) : the_row(); ?>

                <div class="col-md-3">
                    <div class="team-box">
                        <div class="team-inner">
                            <img src="<?php the_sub_field('page_3eme_section_repeteur_image'); ?>"
                                 alt=""
                                 class="img-circle">

                            <div class="mask"></div>
                        </div>
                        <h6><?php the_sub_field('page_3eme_section_nom'); ?></h6>
                        <div class="subtext"><?php the_sub_field('page_3eme_section_repeteur_fonction'); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<!-- section close -->