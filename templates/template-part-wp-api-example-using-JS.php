<?php if ( template_wp_api_example_using_js() && template_wp_api_example_using_js()->field()['title'] != null ): ?>
  <h1 class="title">
    <?= template_wp_api_example_using_js()->field()['title']; ?>
  </h1>
<?php endif; ?>

<?php if (  template_wp_api_example_using_js() != null ): ?>
  <div id="JS-content-first" class="content content--first">
    <?php get_template_part( 'templates/components/cards/card-category' ); ?>
  </div>
<?php endif; ?>
