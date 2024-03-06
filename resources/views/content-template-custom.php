<?php if ( class_exists( 'ACF' ) && !empty( get_acf_fields()->get_public_group_1()['title'] ) ) : ?>
  <h1 class="title">
    <?= get_acf_fields()->get_public_group_1()['title']; ?>
  </h1>
<?php endif; ?>

<div id="JS-content-first" class="content content--first">
  <?php get_template_part( 'resources/views/components/cards/card-category' ); ?>
</div>

<div id="JS-content-second" class="content content--second">
  <?php get_template_part( 'resources/views/components/cards/card-category' ); ?>
</div>

<div id="JS-content-third" class="content content--third">
  <?php get_template_part( 'resources/views/components/cards/card-category' ); ?>
</div>
