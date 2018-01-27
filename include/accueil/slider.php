<!-- slider -->
<div id="slider">
    <!-- revolution slider begin -->
    <div class="fullwidthbanner-container">
        <div id="revolution-slider">
            <ul>
                <?php
                $images = get_field('accueil_slider');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)

                if ($images): ?>
                    <?php foreach ($images as $image): ?>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500"
                            data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <?php echo wp_get_attachment_image($image['ID'], $size); ?>

                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
        </div>
    </div>
    <!-- revolution slider close -->
</div>
<!-- slider close -->