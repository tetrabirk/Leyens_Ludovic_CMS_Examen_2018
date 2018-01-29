<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">


            <div id="blog-grid" class="blog-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <!-- post begin -->
                    <article class="item col-md-4 col-sm-6">
                        <div class="post-media">
                            <img alt="" src="<?php the_field('article_2eme_section_image'); ?> " class="img-responsive">
                            <div class="post-date">
                                <span class="date-day"><?php echo get_the_date('j'); ?></span>
                                <span class="date-month"><?php echo substr(get_the_date('F'), 0, 3); ?></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-title">
                                <h5><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                            </div>
                            <div class="post-metadata">
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
                            <div class="post-entry">
                                <p><?php the_excerpt(); ?></p>

                            </div>
                        </div>
                    </article>
                    <!-- post close -->
                <?php endwhile; ?>
            </div>
        </div>
        <div class="row">
            <!-- pagination begin -->
            <div class="pagination-ourter text-center">
                <ul class="pagination">
                    <li><a class="prev page-numbers" href="<?php previous_posts() ?>"><i class="fa fa-angle-left"></i></a></li>

                    <?php if (get_next_posts_link(__('Newer Entries &raquo;'))) { ?>
                        <li><a class="next page-numbers" href="<?php next_posts() ?>"><i class="fa fa-angle-right"></i></a>
                    <?php }else{ ?>
                        <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
                    <?php } ?>
                </ul>

            </div>
            <!-- pagination close -->

        </div>
    </div>
</div>
<!-- content close -->