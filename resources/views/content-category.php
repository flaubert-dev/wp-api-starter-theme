<h1 class="title title--category">
  <?php the_archive_title(); ?>
</h1>

<?php get_template_part( 'resources/views/components/paginations/pagination-category' ); ?>

<div id="JS-content-category" class="content content--category">
  <?php get_template_part( 'resources/views/components/cards/card-category' ); ?>
</div>
