<?php  
$fb= get_field('facebook_link');
$twitter=get_field('twitter_link');
$insta=get_field('instagram_link');
$linkden=get_field('linkden_link');
?>
  <h2><?php echo the_field('social_icons_name'); ?></h2>
                    <div class="btm_line_ftr"></div>
                    <div class="ftr_icons">
                        <ul>
                            <li><a href="<?php echo $fb['url'];?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $twitter['url'];?>"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="<?php echo $insta['url'];?>"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="<?php echo $linkden['url'];?>"><i class="fa-brands fa-linkedin-in"></i></a></li>

                        </ul>
                    </div>