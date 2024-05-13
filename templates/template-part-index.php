<?php if ( !is_author() ) : ?>

  <h1 class="title title--index">
    wp api starter theme <br> <span>beta version</span>
  </h1>

<?php else : ?>

  <h1 class="title title--author">
    <?php the_archive_title(); ?>
  </h1>
  
<?php endif; ?>

<section id="JS-content-index" class="content content--index">
  <?php
    if( have_posts() ): while( have_posts() ): the_post();
      get_template_part( 'templates/components/cards/card-index' );

      endwhile;

      get_template_part( 'templates/components/paginations/pagination-template-part-index' );
    endif;
  ?>
</section>
