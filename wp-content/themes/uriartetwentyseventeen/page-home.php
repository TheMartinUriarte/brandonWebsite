<?php
  // Template Name: Home page

get_header(); ?>

  <div class="row">
    <div class="col-sm-12">
      <p style="background-color: pink">Test</p>
      <!--
        if ( have_posts() ) : while ( have_posts() ) : the_post();

          get_template_part( 'content', get_post_format() );

        endwhile; endif;
         -->

    </div> <!-- /.col -->
  </div> <!-- /.row -->

  <?php get_footer(); ?>
