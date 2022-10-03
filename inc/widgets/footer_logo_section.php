<?php 
    $logo_image= get_field('footer_logo');
    ?>

<a href="index.html"><img src="<?php echo $logo_image['url']; ?>" alt=""></a> 
                    <p><?php echo the_field('footer_privacy'); ?></p>
                