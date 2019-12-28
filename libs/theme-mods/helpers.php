<?php

/**
 * Output a toggle button to show list of CSS Variables.
 */
function my_css_desc( $vars, $extra_text = '' ) {
  $content = '';

  if( count( $vars ) > 0 ) {
    $content = '<code>' . implode( '</code><code>', $vars ) . '</code>';
  }
 
  return "<details>
    <summary>CSS</summary>
    $content
    $extra_text
  </details>";
}

/**
 * Return array for shadow selection
 */
function my_shadow_choices() {
  return blocksy_ordered_keys( [
    'none' => __( 'None' ),
    'var(--shadow0)' => __( 'Depth 0' ),
    'var(--shadow1)' => __( 'Depth 1' ),
    'var(--shadow2)' => __( 'Depth 2' ),
    'var(--shadow3)' => __( 'Depth 3' ),
  ] );
}

/**
 * Return array for Title size selection
 */
function my_heading_size_choices() {
  return blocksy_ordered_keys([
    'var(--h1Size)' => __( 'Heading 1' ),
    'var(--h2Size)' => __( 'Heading 2' ),
    'var(--h3Size)' => __( 'Heading 3' ),
    'var(--h4Size)' => __( 'Heading 4' ),
    'var(--h5Size)' => __( 'Heading 5' ),
    'var(--h6Size)' => __( 'Heading 6' ),	
  ]);
}

/**
 * Return array for Title size selection
 */
function my_font_size_choices() {
  return blocksy_ordered_keys([
    'var(--fontSize)' => __( 'Normal' ),
    'var(--smallFontSize)' => __( 'Small' ),
    'var(--mediumFontSize)' => __( 'Medium' ),
    'var(--largeFontSize)' => __( 'Large' ),
    'inherit' => __( 'Inherit' ),
  ]);
}