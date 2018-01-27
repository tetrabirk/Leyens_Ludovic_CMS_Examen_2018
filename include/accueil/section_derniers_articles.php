
<!-- section begin -->
<section id="section-project" class="no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-projects clearfix">
                    <div class="latest-projects-intro">
                        <h2 class="box-title"><?php _e('Derniers articles', 'wp-theme-base-translate'); ?></h2>
                        <div class="tiny-border-light"></div>
                        <p>Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium
                            turpis</p>
                    </div>
                    <div class="latest-projects-wrapper">
                        <div id="latest-projects-items" class="latest-projects-items">

                            <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('showposts=5');
                            ?>
                            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                            <div class="item">
                                <img src="<?php the_field('article_2eme_section_image'); ?>" alt="" class="img-responsive">
                                <div class="project-details">
                                    <p class="folio-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>

                                    <p class="folio-cate"><i class="fa fa-tag"></i>
                                    <?php
                                    $categories =  get_the_category();
                                    foreach ($categories as $categ){
                                        echo"<a href='".get_category_link($categ)."'>".($categ->name)."</a>"." ";
                                    }
                                    ?>
                                    </p>

                                    <div class="folio-buttons">
                                        <a href="<?php the_field('article_2eme_section_image'); ?>" title="Plan For Your Bussiness"
                                           class="folio"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata() ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->
        