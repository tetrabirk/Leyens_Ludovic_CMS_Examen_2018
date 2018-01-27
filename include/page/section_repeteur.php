<!-- section begin -->
<section id="section-about" class="margin-top-80">
    <div class="container">
        <div class="row">
            <?php while (have_rows('page_2eme_section_repeteur')) : the_row(); ?>

                <div class="col-md-4">
                    <h5><?php the_sub_field('page_2eme_section_repeteur_titre'); ?></h5>
                    <p><?php the_sub_field('page_2eme_section_repeteur_texte'); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- section close -->