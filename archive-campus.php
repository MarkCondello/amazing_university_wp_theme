<!-- blog listing template for single campus posts on google map-->
<?php get_header();  ?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/library-hero.jpg'); ?>">
  </div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Our Campuses</h1>
    <p>We have several conveniently located campuses.</p>
  </div>
</div>
<div class="acf-map">
  <?php
    while(have_posts()){
        the_post(); 
        $mapLocation = get_field("map_location");
        ?>
        <div class="marker" data-lat ="<?=  $mapLocation['lat']; ?>" data-lng="<?= $mapLocation['lng']; ?>">
          <a href="<?php the_permalink(); ?>"><h3><?= the_title(); ?></h3></a>
          <?php echo $mapLocation['address']; ?>
        </div>
      <?php
    }
  ?>
</div>
<?php get_footer();  ?>
