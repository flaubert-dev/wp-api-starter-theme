<?php if ( !is_author() ) : ?>

  <h1 class="title title--index">
    WP API Starter Theme <br> v.<?= wp_get_theme()->get( 'Version' ); ?>
  </h1>

<?php else : ?>

  <h1 class="title title--author">
    <?php the_archive_title(); ?>
  </h1>
  
<?php endif; ?>

<section id="JS-content-index" class="content content--index">
  <?php
    if( have_posts() ): while( have_posts() ): the_post();

      get_template_part( 'resources/views/components/cards/card-index' );

      endwhile;

      get_template_part( 'resources/views/components/paginations/pagination-index' );
    endif;
  ?>
</section>
