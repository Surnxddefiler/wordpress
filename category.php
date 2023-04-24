<?php get_header()?>
    <div>flksdjflksdfjlksdfjlkdsfjlkdsfjlksdjflksdjf</div>
    <div>fdslkfjsdlkfjlsdkjf</div>
    <div>всем привет я боб</div>
    <?php 
if(have_posts()){
    while (have_posts()) {
        the_post(); 
?>
        <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
        <?php the_content(); ?>
<?php
    }
}
?>

    <?php get_sidebar() ?>
<?php get_footer()?>