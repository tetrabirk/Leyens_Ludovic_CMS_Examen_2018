<!-- section gmap begin -->
<section id="section-gmap" class="no-padding">
    <div id="map-canvas" class="map-canvas"></div>
</section>

<?php

$location = get_field('contact_3eme_section_map');

if( !empty($location) ):
    ?>
    <div id="dom-latitude" style="display: none;">
        <?php $latitude = $location['lat']; echo $latitude?>
    </div>

    <div id="dom-longitude" style="display: none;">
        <?php $longitude = $location['lng']; echo $longitude?>
    </div>

    <div id="dom-infobox" style="display: none;">
        <?php _e('NOUS SOMME ICI', 'wp-theme-base-translate') ?>
    </div>

    <div id="dom-icon" style="display: none;">
        <?php  echo get_stylesheet_directory_uri().'/images/cd-icon-location.png' ?>
    </div>
<?php endif; ?>



<!-- section gmap close -->