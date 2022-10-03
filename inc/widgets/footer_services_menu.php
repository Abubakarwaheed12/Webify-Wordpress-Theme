<?php
$link1 = get_field('link1');
$link2 = get_field('link2');
$link3 = get_field('link3');
$link4 = get_field('link4');
$link5 = get_field('link5');
?>
<h2><?php echo the_field('services_menu_name'); ?></h2>
<div class="ftr_menu">
    <ul>
        <li><a href="<?php echo $link1['url'] ?>"><?php echo $link1['title'] ?></a></li>
        <li><a href="<?php echo $link2['url'] ?>"><?php echo $link2['title']; ?></a></li>
        <li><a href="<?php echo $link3['url'] ?>"><?php echo $link3['title']; ?></a></li>
        <li><a href="<?php echo $link4['url'] ?>"><?php echo $link4['title']; ?></a></li>
        <li><a href="<?php echo $link5['url'] ?>"><?php echo $link5['title']; ?></a></li>
    </ul>
</div>