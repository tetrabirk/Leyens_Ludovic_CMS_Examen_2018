<!-- section begin -->
<section id="about-intro">
    <style type="text/css">
        #about-intro {
            background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>');
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="about-text-intro text-center">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_content() ?></p>
                </div>
                <div class="box-intro-video">
                    <div id="overlay-video" class="overlay-video-intro">
                        <img src="<?php the_field('page_play'); ?>" class="img-responsive"/>


                        <?php
                            //petit bout de code qui recupere l'adresse du oembed et la formate pour qu'elle soit compatible avec le template

                            $link = get_field('page_video', false, false);
                            $pattern1 = '/(\S*.com\/)/';
                            $pattern2 = '/\?v=(\S*)/';
                            preg_match($pattern1,$link,$part1);
                            preg_match($pattern2,$link,$part2);
                            $linkembed = $part1[1].'embed/'.$part2[1].'?autoplay=1';
                        ?>



                        <a href="<?php echo $linkembed; ?>"
                           class="btn-intro-video"><i class="fa fa-play"></i></a>
                    </div>
                    <div id="thevideo" style="display:none">
                        <iframe id="someFrame" width="750" height="422" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->
