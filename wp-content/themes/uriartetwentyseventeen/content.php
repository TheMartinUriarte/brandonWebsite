<div class="blog-post">
  <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
  <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> •<a href="<?php comments_link(); ?>">
  	<?php
  	printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
  </a></p>

  <?php the_excerpt(); ?>
  <!-- Shows the first 55 words of your post -->

</div><!-- /.blog-post -->