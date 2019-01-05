<!-- event posts list template -->
<?php get_header();  ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/library-hero.jpg'); ?>">
    </div>
        <div class="page-banner__content container t-center c-white">
            <h1 class="headline headline--large">All Events</h1>
            <p>See what is going on in out world.</p>
            <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
            <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
 <?php
//this archive is running on a custom query which is written in functions.php
    while(have_posts()){
        the_post(); ?>
        <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <?php 
                // must be Year Month Day YYYYMMDD in ACF return format to grab options using the DateTime PHP object
                $eventDate = new DateTime(get_field('event_date'));                    
                ?>
                <span class="event-summary__month"><?php echo $eventDate->format('M') ; ?></span>
                <span class="event-summary__day"><?php echo $eventDate->format('d') ; ?></span>  
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
        </div>
    <?php
    }
    echo paginate_links();
    ?>
    <hr class="section-break"/>
    <p>Looking for a recap of past event. <a href="<?php echo site_url('/past-events'); ?>" >Check out our past events.</a></p>
</div>
<?php get_footer();  ?>


 