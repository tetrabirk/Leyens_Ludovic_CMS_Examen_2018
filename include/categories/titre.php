
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader" style="background:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>) top fixed;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title()?></h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_home_url()?>"><?php _e('Home', 'wp-theme-base-translate'); ?>Home</a></li>
                    <b>/</b>
                    <li class="active"><?php the_title()?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
