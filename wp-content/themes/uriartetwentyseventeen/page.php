<?php get_header(); ?>


  <div class="blog-header">
    <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></h1>
    <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
  </div>
  
  <div class="row">
    <div class="col-sm-12">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();

          get_template_part( 'content', get_post_format() );

        endwhile; endif;
        ?>

    </div> <!-- /.col -->
  </div> <!-- /.row -->

  <?php get_footer(); ?>
