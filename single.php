<!-- single generic blog post template -->
<?php  
get_header();  
    while(have_posts( )) {
        the_post();
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/library-hero.jpg'); ?>"></div>
            <div class="page-banner__content container t-center c-white">
            <h1 class="headline headline--large"><?= the_title(); ?></h1>
            <h2 class="headline headline--medium">Keep up with our latest newspapers.</h2>
            <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
            <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
        </div>
    </div>
    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?=  site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home </a> <span class="metabox__main">Posted by:<?= the_author_posts_link(); ?> on <?= the_time('g M Y'); ?> in <?= get_the_category_list(', '); ?></span></p>
        </div>
        <div class="generic-content">    
             <?= the_content(); ?>
        </div>
    </div>
<?php }
get_footer();  
?>