<?php 
  /**
   * Wait... News will come in this file (This is a free beta version!)
   * 
   * get_field() and the_field() Test with ACF JSON: "fields" / "key" ( group_662525e42d687.json )
   * 
   * Reference: https://www.advancedcustomfields.com/resources/the_field/#check-if-value-exists
   * 
   */

if ( class_exists('ACF') && get_field( 'field_662525e40e21e' ) ): ?>

  <h1 style="background-color: <?php the_field( 'field_662525e40e21e' ) ?>;">
    Hello World 
  </h1>

<?php endif;
