<div class="col-md-9">
    <div class="blog-single">
        <!-- post begin -->
        <article>
            <div class="post-media">
                <img src="<?php the_field('article_2eme_section_image'); ?> "
                     class="img-responsive">
            </div>
            <div class="post-content">
                <div class="post-title">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <div class="post-metadata">
                    <span class="posted-on">
                        <i class="fa fa-clock-o"></i>
                        <?php echo get_the_date('j F , Y'); ?>
                    </span>
                    <span class="byline">
                        <i class="fa fa-user"></i>
                        <a href="#"><?php echo get_the_author(); ?></a>
                    </span>
                    <span class="cat-links">
                        <i class="fa fa-folder-open"></i>
                        <?php
                            $categories = get_the_category();
                            foreach ($categories as $categ) {
                                echo "<a href='" . get_category_link($categ) . "'>" . ($categ->name) . "</a>" . " ";
                            }
                        ?>
                    </span>
                </div>
                <div class="hr"></div>
                <div class="post-entry">
                    <?php echo get_the_content(); ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </article>
        <!-- post close -->
    </div>


</div>