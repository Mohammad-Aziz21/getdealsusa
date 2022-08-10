<?php
/**
 * Customizer callbacks functions. 
 * 
 * @package Matina News
 */

if ( ! function_exists( 'matina_news_cb_hasnt_boxed_layout' ) ) :

    /**
     * Check if boxed layout is selected or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_hasnt_boxed_layout( $control ) {
        if ( 'boxed-layout' === $control->manager->get_setting( 'matina_news_site_layout' )->value() ) {
            return false;
        } else {
            return true;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_enable_top_header' ) ) :

    /**
     * Check if top header option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_enable_top_header( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_top_header_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_enable_top_header_date' ) ) :

    /**
     * Check if top header option and top date option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_enable_top_header_date( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_top_header_option' )->value() && false !== $control->manager->get_setting( 'matina_news_top_header_date_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_enable_header_social' ) ) :

    /**
     * Check if header social icons option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_enable_header_social( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_header_social_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_enable_header_search' ) ) :

    /**
     * Check if header social icons option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_enable_header_search( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_header_search_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_enable_footer_widget' ) ) :

    /**
     * Check if footer widget area option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_enable_footer_widget( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_footer_widget_area_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_enable_preloader' ) ) :

    /**
     * Check if preloader option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_enable_preloader( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_preloader_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_enable_single_related_option' ) ) :

    /**
     * Check if single posts related posts option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_enable_single_related_option( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_single_posts_related_posts_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_enable_scroll_top' ) ) :

    /**
     * Check if scroll top option is enabled or not.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_enable_scroll_top( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_scroll_top_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_scroll_top_label_option' ) ) :

    /**
     * Checked the scroll to top option was enable or not and also checked scroll top label option was enable.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_scroll_top_label_option( $control ) {
        if ( true == $control->manager->get_setting( 'matina_news_scroll_top_option' )->value() && true == $control->manager->get_setting( 'matina_news_scroll_top_label_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_select_footer_bg_color' ) ) :

    /**
     * Select the footer background type as bg color.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_select_footer_bg_color( $control ) {
        if ( 'bg_color' == $control->manager->get_setting( 'matina_news_footer_background_type' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_enable_image_permalink_option' ) ) :

    /**
     * Checked the image permalink option was enable.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_enable_image_permalink_option( $control ) {
        if ( true === $control->manager->get_setting( 'matina_news_image_permalink_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_enable_image_hover_option' ) ) :

    /**
     * Checked the image hover option was enable.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_enable_image_hover_option( $control ) {
        if ( true === $control->manager->get_setting( 'matina_news_image_hover_option' )->value() && true === $control->manager->get_setting( 'matina_news_image_permalink_option' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_breadcrumb' ) ) :

    /**
     * Checked the breadcrumb option has enable.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_breadcrumb( $control ) {
        if ( false !== $control->manager->get_setting( 'matina_news_breadcrumbs' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

if ( ! function_exists( 'matina_news_cb_has_page_title_background_color' ) ) :

    /**
     * Checked the page title style has background-color selected.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function matina_news_cb_has_page_title_background_color( $control ) {
        if ( 'background-color' == $control->manager->get_setting( 'matina_news_page_title_style' )->value() ) {
            return true;
        } else {
            return false;
        }
    }
    
endif;

/*---------------------------------------------------------------------------------------------------------------*/

/**
 * Customizer selective refresh
 *
 * @since 1.0.0
 */
if ( isset( $wp_customize->selective_refresh ) ) {

    // Site Identity > Site Title
    $wp_customize->selective_refresh->add_partial( 'blogname',
        array(
            'selector'        => '.site-title a',
            'render_callback' => 'matina_news_customize_partial_blogname',
        )
    );

    // Site Identity > Tagline
    $wp_customize->selective_refresh->add_partial( 'blogdescription',
        array(
            'selector'        => '.site-description',
            'render_callback' => 'matina_news_customize_partial_blogdescription',
        )
    );

    // Theme Options > General > Scroll to Top
    $wp_customize->selective_refresh->add_partial( 'matina_news_scroll_top_label',
        array(
            'selector'        => 'span.scroll-label',
            'render_callback' => 'matina_news_customize_partial_scroll_top_label',
        )
    );

    // Theme Options > Header > Main Area
    $wp_customize->selective_refresh->add_partial( 'matina_news_header_social_label',
        array(
            'selector'        => '.header-social-wrapper .social-label',
            'render_callback' => 'matina_news_customize_partial_header_social_label',
        )
    );

    // Theme Options > Blog > Single Posts
    $wp_customize->selective_refresh->add_partial( 'matina_news_single_related_title',
        array(
            'selector'        => '#single-related-posts .related-section-title',
            'render_callback' => 'matina_news_customize_partial_single_related_title',
        )
    );

    // Theme Options > Blog > Blog/Archive
    $wp_customize->selective_refresh->add_partial( 'matina_news_archive_readmore_label',
        array(
            'selector'        => '.archive-entry-readmore a',
            'render_callback' => 'matina_news_customize_partial_archive_readmore_label',
        )
    );

}
/*--------------------------------------------------------------------------------------------------------------*/

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Render the scroll top label for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_scroll_top_label() {
    return get_theme_mod( 'matina_news_scroll_top_label' );
}

/**
 * Render the social section label for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_header_social_label() {
    return get_theme_mod( 'matina_news_header_social_label' );
}

/**
 * Render the related posts section title for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_single_related_title() {
    return get_theme_mod( 'matina_news_single_related_title' );
}

/**
 * Render the archive post read more for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_archive_readmore_label() {
    return get_theme_mod( 'matina_news_archive_readmore_label' );
}

/**
 * Render the top date format for the selective refresh partial.
 *
 * @return void
 */
function matina_news_customize_partial_top_header_date_format() {
    return get_theme_mod( 'matina_news_top_header_date_format' );
}
