<h1 class="title title--index">
  WP API Starter Theme <br> v.<?= wp_get_theme()->get( 'Version' ); ?>
</h1>

<section id="JS-content-index" class="content content--index">
  <?php
    if( have_posts() ): while( have_posts() ): the_post();

      get_template_part( 'resources/views/components/cards/card-index' );

      endwhile;

      get_template_part( 'resources/views/components/paginations/pagination-index' );
    endif;
  ?>
</section>
