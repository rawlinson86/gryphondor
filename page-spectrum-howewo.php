<?php/*
Template Name: HOWEWO
*/ ?>
<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span12" id="post-listing">
    <?php echo '<link href="/css/photoblog.css?v=1359451557" rel="stylesheet" media="screen" type="text/css" />'; ?>
    <div class="row page-header">
      <div class="span8" id="howewo-banner" style="height:200px;">
        <p>DERP</p>
      </div>
      <div class="span4">
        <p>HERP</p>
      </div>
    </div>
    <div class="span12 page-content">

        <?php 
          $gallery = get_post_meta($post->ID, 'gallery', true);
          $gallery = 6;
          echo do_shortcode('[nggallery id='.$gallery.' template="howewo" images="0"]'); 
          ?>
      </div>
      
  </div><!-- end div#post-listing -->
</div><!-- end div#archive-content -->

<?php get_footer(); ?>