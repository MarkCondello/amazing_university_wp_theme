<!-- event posts list template -->
<?php get_header();  
pageBanner(array(
    'title' => "All Events",
    'subtitle' => "See what is going on in out world.",
    )
);
?>
<div class="container container--narrow page-section">
 <?php
//this archive is running on a custom query which is written in functions.php
    while(have_posts()){
        the_post(); 
        get_template_part('template-parts/content', 'event');
    }
    echo paginate_links();
    ?>
    <hr class="section-break"/>
    <p>Looking for a recap of past event. <a href="<?php echo site_url('/past-events'); ?>" >Check out our past events.</a></p>
</div>
<?php get_footer();  ?>


 