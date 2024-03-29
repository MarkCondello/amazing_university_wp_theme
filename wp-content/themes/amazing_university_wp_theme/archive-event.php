<?php get_header();
pageBanner([
    'title' => "All Events",
    'subtitle' => "See what is going on in out world...",
    'photo' => get_template_directory_uri() . '/images/ocean.jpg',
]); ?>
<div class="container container--narrow page-section">
<?php //this archive is running on a custom query which is written in functions.php
    while(have_posts()):
        the_post();
        get_template_part('template-parts/content', 'event');
    endwhile;
    echo paginate_links(); ?>
    <hr class="section-break"/>
    <p>Looking for a recap of past event. <a href="<?php echo site_url('/past-events');?>">Check out our past events.</a></p>
</div>
<?php get_footer();?>


 