<?php if ( template_wp_query()['title'] != null ): ?>

  <h1 class="title">
    <?= template_wp_query()['title']; ?>
  </h1>

<?php endif; ?>

<section id="JS-content-index" class="content content--index">
  <?php
    $queryPosts = new WP_Query([
      'paged'               => get_query_var( 'paged' ),
      'post_type'           => 'post',
      'cat'                 => template_wp_query()['catID'],
      'ignore_sticky_posts' => template_wp_query()['stickyPost'],
      'posts_per_page'      => template_wp_query()['perPage'],
    ]);

    if ( $queryPosts->have_posts() ): while( $queryPosts->have_posts() ): $queryPosts->the_post();

      get_template_part( 'templates/components/cards/card-index' );

    endwhile;

      include(
        locate_template( 'templates/components/paginations/pagination-template-part-wp-query.php' )
      );

      wp_reset_postdata();

    endif;
  ?>
</section>
