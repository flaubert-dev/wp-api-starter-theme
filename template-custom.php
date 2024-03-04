<?php /* Template Name: Custom Template */
get_header();
  if ( class_exists( 'ACF' ) ) {
    echo '<h1>' . get_acf_fields()->get_third_field() . '</h1><br><br>';

    get_template_part( 'resources/views/contentTemplates/templateCustom/content-first' );

    get_template_part( 'resources/views/contentTemplates/templateCustom/content-second' );
    
    get_template_part( 'resources/views/contentTemplates/templateCustom/content-third' );
  }

  else {
    echo '<h1>' . 'Please, activate the ACF plugin again' . '</h1>';
  }
get_footer();
