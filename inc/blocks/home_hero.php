<?php 

$id = 'home-' . $block['id'];
$classes = $block['className'];
$classes .= 'hero_section';


?>
<?php
  $bg_img= get_field('bg_img');
?>
    
    <!--HERO SECTION -->
    <section id="<?php echo esc_attr( $id );?> class="hero_section" style="background-image:url('<?php echo $bg_img['url'];?>');">
     <!-- header text -->
     <div class="home_hero container">
        <h2><?php echo the_field('heading'); ?> </h2>
        <p><?php echo the_field('descreption'); ?> <p>
        <div class="request_btn">
            <a href="#">request purposal<span class="icon"><img src="assets/images/arrow.png" alt=""></span></a>
        </div>
    </div>
    </section>