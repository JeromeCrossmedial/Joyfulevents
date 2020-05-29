<?php

/**
 * Allow only certain tags and attributes in a string.
 *
 * @param  string    $string    The unsanitized string.
 * @return string               The sanitized string.
 */
function ilovewp_sanitize_text( $string ) {
    global $allowedtags;
    $expandedtags = $allowedtags;

    // span
    $expandedtags['span'] = array();

    // Enable id, class, and style attributes for each tag
    foreach ( $expandedtags as $tag => $attributes ) {
        $expandedtags[$tag]['id']    = true;
        $expandedtags[$tag]['class'] = true;
        $expandedtags[$tag]['style'] = true;
    }

    // br (doesn't need attributes)
    $expandedtags['br'] = array();

    /**
     * Customize the tags and attributes that are allows during text sanitization.
     *
     * @param array     $expandedtags    The list of allowed tags and attributes.
     * @param string    $string          The text string being sanitized.
     */
    apply_filters( 'ilovewp_sanitize_text_allowed_tags', $expandedtags, $string );

    return wp_kses( $string, $expandedtags );
}

if ( ! function_exists( 'photoframe_get_pages' ) ) :
/**
 * Return an array of pages
 *
 * @since 1.0.0.
 *
 * @return array                The list of pages.
 */
function photoframe_get_pages() {

    $choices = array( 0 );

    // Default
    $choices = array( 'none' => esc_html__( 'None', 'photoframe' ) );

    // Pages
    $type_terms = get_pages( array( 'sort_order' => 'asc' ) );
    if ( ! empty( $type_terms ) ) {

        $type_names = wp_list_pluck( $type_terms, 'post_title', 'ID' );
        $choices = $choices + $type_names;

    }

    return apply_filters( 'photoframe_get_pages', $choices );
}
endif;

if ( ! function_exists( 'photoframe_sanitize_pages' ) ) :
/**
 * Sanitize a value from a list of allowed values.
 *
 * @since 1.0.0.
 *
 * @param  mixed    $value      The value to sanitize.
 * @return mixed                The sanitized value.
 */
function photoframe_sanitize_pages( $value ) {

    $choices = photoframe_get_pages();
    $valid   = array_keys( $choices );

    if ( ! in_array( $value, $valid ) ) {
        $value = 'none';
    }

    return $value;
}
endif;

if ( ! function_exists( 'photoframe_get_categories' ) ) :
/**
 * Return an array of tag names and slugs
 *
 * @since 1.0.0.
 *
 * @return array                The list of terms.
 */
function photoframe_get_categories() {

    $choices = array( 0 );

    // Default
    $choices = array( 'none' => esc_html__( 'None', 'photoframe' ) );

    // Categories
    $type_terms = get_terms( 'category' );
    if ( ! empty( $type_terms ) ) {

        $type_names = wp_list_pluck( $type_terms, 'name', 'term_id' );
        $choices = $choices + $type_names;

    }

    return apply_filters( 'photoframe_get_categories', $choices );
}
endif;

if ( ! function_exists( 'photoframe_sanitize_categories' ) ) :
/**
 * Sanitize a value from a list of allowed values.
 *
 * @since 1.0.0.
 *
 * @param  mixed    $value      The value to sanitize.
 * @return mixed                The sanitized value.
 */
function photoframe_sanitize_categories( $value ) {

    $choices = photoframe_get_categories();
    $valid   = array_keys( $choices );

    if ( ! in_array( $value, $valid ) ) {
        $value = 'none';
    }

    return $value;
}
endif;