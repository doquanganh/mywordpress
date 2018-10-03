<?php
/**
 * Blossom Pin Dynamic Styles
 * 
 * @package Blossom_Pin
*/

function blossom_pin_dynamic_css(){
    
    $primary_font    = get_theme_mod( 'primary_font', 'Nunito' );
    $primary_fonts   = blossom_pin_get_fonts( $primary_font, 'regular' );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Cormorant Garamond' );
    $secondary_fonts = blossom_pin_get_fonts( $secondary_font, 'regular' );
    $font_size       = get_theme_mod( 'font_size', 18 );
    
    $site_title_font      = get_theme_mod( 'site_title_font', array( 'font-family'=>'Cormorant Garamond', 'variant'=>'regular' ) );
    $site_title_fonts     = blossom_pin_get_fonts( $site_title_font['font-family'], $site_title_font['variant'] );
    
    $primary_color = get_theme_mod( 'primary_color', '#ff91a4' );
    
    $rgb = blossom_pin_hex2rgb( blossom_pin_sanitize_hex_color( $primary_color ) );
     
    echo "<style type='text/css' media='all'>"; ?>
    
    /*Typography*/

    body,
    button,
    input,
    select,
    optgroup,
    textarea{
        font-family : <?php echo wp_kses_post( $primary_fonts['font'] ); ?>;
        font-size   : <?php echo absint( $font_size ); ?>px;        
    }
    
    .site-header .site-branding .site-title,
    .single-header .site-branding .site-title{
        font-family : <?php echo wp_kses_post( $site_title_fonts['font'] ); ?>;
        font-weight : <?php echo esc_html( $site_title_fonts['weight'] ); ?>;
        font-style  : <?php echo esc_html( $site_title_fonts['style'] ); ?>;
    }

    .newsletter-section .blossomthemes-email-newsletter-wrapper .text-holder h3,
    .newsletter-section .blossomthemes-email-newsletter-wrapper.bg-img .text-holder h3{
        font-family : <?php echo wp_kses_post( $primary_fonts['font'] ); ?>;
    }
    
    /*Color Scheme*/
    a,
    .main-navigation ul li a:hover,
    .main-navigation ul li a:focus,
    .main-navigation ul .current-menu-item > a,
    .main-navigation ul li:hover > a,
    .main-navigation ul li:focus > a,
    .banner-slider .item .text-holder .entry-title a:hover,
    .banner-slider .item .text-holder .entry-title a:focus,
    .blog #primary .post .entry-header .entry-title a:hover,
    .blog #primary .post .entry-header .entry-title a:focus,
    .widget_bttk_popular_post ul li .entry-header .entry-title a:hover,
    .widget_bttk_pro_recent_post ul li .entry-header .entry-title a:hover,
    .widget_bttk_popular_post ul li .entry-header .entry-title a:focus,
    .widget_bttk_pro_recent_post ul li .entry-header .entry-title a:focus,
    .widget_bttk_popular_post ul li .entry-header .entry-meta a:hover,
    .widget_bttk_pro_recent_post ul li .entry-header .entry-meta a:hover,
    .widget_bttk_popular_post ul li .entry-header .entry-meta a:focus,
    .widget_bttk_pro_recent_post ul li .entry-header .entry-meta a:focus,
    .widget_bttk_popular_post .style-two li .entry-header .cat-links a:hover,
    .widget_bttk_pro_recent_post .style-two li .entry-header .cat-links a:hover,
    .widget_bttk_popular_post .style-three li .entry-header .cat-links a:hover,
    .widget_bttk_pro_recent_post .style-three li .entry-header .cat-links a:hover,
    .widget_bttk_popular_post .style-two li .entry-header .cat-links a:focus,
    .widget_bttk_pro_recent_post .style-two li .entry-header .cat-links a:focus,
    .widget_bttk_popular_post .style-three li .entry-header .cat-links a:focus,
    .widget_bttk_pro_recent_post .style-three li .entry-header .cat-links a:focus,
    .widget_recent_entries ul li:before,
    .widget_recent_entries ul li a:hover,
    .widget_recent_entries ul li a:focus,
    .widget_recent_comments ul li:before,
    .widget_bttk_posts_category_slider_widget .carousel-title .title a:hover,
    .widget_bttk_posts_category_slider_widget .carousel-title .title a:focus,
    .widget_bttk_posts_category_slider_widget .carousel-title .cat-links a:hover,
    .widget_bttk_posts_category_slider_widget .carousel-title .cat-links a:focus,
    .site-footer .footer-b .footer-nav ul li a:hover,
    .site-footer .footer-b .footer-nav ul li a:focus,
    .single #primary .post .holder .meta-info .entry-meta a:hover,
    .single #primary .post .holder .meta-info .entry-meta a:focus,
    .recommended-post .post .entry-header .entry-title a:hover,
    .recommended-post .post .entry-header .entry-title a:focus,
    .search #primary .search-post .entry-header .entry-title a:hover,
    .archive #primary .post .entry-header .entry-title a:hover,
    .search #primary .search-post .entry-header .entry-title a:focus,
    .archive #primary .post .entry-header .entry-title a:focus,
    .instagram-section .profile-link:hover, .instagram-section .profile-link:focus,
    .site-header .site-branding .site-title a:hover,
    .site-header .site-branding .site-title a:focus,
    .mobile-header .mobile-site-header .site-branding .site-title a:hover,
    .mobile-header .mobile-site-header .site-branding .site-title a:focus,
    .single-blossom-portfolio .post-navigation .nav-previous a:hover,
    .single-blossom-portfolio .post-navigation .nav-previous a:focus,
    .single-blossom-portfolio .post-navigation .nav-next a:hover,
    .single-blossom-portfolio .post-navigation .nav-next a:focus,
    .single .navigation a:hover .post-title,
    .single .navigation a:focus .post-title,
    .blog #primary .post .bottom .posted-on a:hover,
    .blog #primary .post .bottom .posted-on a:focus,
    .search #primary .search-post .entry-footer .posted-on a:hover,
    .archive #primary .post .entry-footer .posted-on a:hover,
    .search #primary .search-post .entry-footer .posted-on a:focus,
    .archive #primary .post .entry-footer .posted-on a:focus{
		color: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
	}

    .blog #primary .post .entry-header .category a,
    .widget .widget-title::after,
    .widget_bttk_custom_categories ul li a:hover .post-count,
    .widget_bttk_custom_categories ul li a:focus .post-count,
    .widget_blossomtheme_companion_cta_widget .text-holder .button-wrap .btn-cta,
    .widget_blossomtheme_featured_page_widget .text-holder .btn-readmore:hover,
    .widget_blossomtheme_featured_page_widget .text-holder .btn-readmore:focus,
    .widget_bttk_icon_text_widget .text-holder .btn-readmore:hover,
    .widget_bttk_icon_text_widget .text-holder .btn-readmore:focus,
    .widget_bttk_image_text_widget ul li .btn-readmore:hover,
    .widget_bttk_image_text_widget ul li .btn-readmore:focus,
    .newsletter-section,
    .single .post-entry-header .category a,
    .single #primary .post .holder .meta-info .entry-meta .byline:after,
    .recommended-post .post .entry-header .category a,
    .search #primary .search-post .entry-header .category a,
    .archive #primary .post .entry-header .category a,
    .banner-slider .item .text-holder .category a,
    .back-to-top{
        background: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
    }

    .blog #primary .post .entry-footer .read-more:hover,
    .blog #primary .post .entry-footer .read-more:focus{
        border-bottom-color: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
        color: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
    }

    button:hover,
    input[type="button"]:hover,
    input[type="reset"]:hover,
    input[type="submit"]:hover,
    button:focus,
    input[type="button"]:focus,
    input[type="reset"]:focus,
    input[type="submit"]:focus{
        background: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
        border-color: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
    }

    /*Typography*/
    .banner-slider .item .text-holder .entry-title,
    .blog #primary .post .entry-header .entry-title,
    .widget_bttk_popular_post ul li .entry-header .entry-title,
    .widget_bttk_pro_recent_post ul li .entry-header .entry-title,
    .blossomthemes-email-newsletter-wrapper.bg-img .text-holder h3,
    .widget_recent_entries ul li a,
    .widget_bttk_posts_category_slider_widget .carousel-title .title,
    .widget_recent_comments ul li a,
    .single .post-entry-header .entry-title,
    .recommended-post .post .entry-header .entry-title,
    #primary .post .entry-content .pull-left,
    #primary .page .entry-content .pull-left,
    #primary .post .entry-content .pull-right,
    #primary .page .entry-content .pull-right,
    .single-header .title-holder .post-title,
    .search #primary .search-post .entry-header .entry-title,
    .archive #primary .post .entry-header .entry-title{
        font-family : <?php echo wp_kses_post( $secondary_fonts['font'] ); ?>;
    }


    <?php if( blossom_pin_is_woocommerce_activated() ) { ?>
           .woocommerce ul.products li.product .add_to_cart_button:hover,
            .woocommerce ul.products li.product .add_to_cart_button:focus,
            .woocommerce ul.products li.product .product_type_external:hover,
            .woocommerce ul.products li.product .product_type_external:focus,
            .woocommerce ul.products li.product .ajax_add_to_cart:hover,
            .woocommerce ul.products li.product .ajax_add_to_cart:focus,
            .woocommerce #secondary .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce #secondary .widget_price_filter .price_slider_amount .button:hover,
            .woocommerce #secondary .widget_price_filter .price_slider_amount .button:focus,
            .woocommerce div.product form.cart .single_add_to_cart_button:hover,
            .woocommerce div.product form.cart .single_add_to_cart_button:focus,
            .woocommerce div.product .cart .single_add_to_cart_button.alt:hover,
            .woocommerce div.product .cart .single_add_to_cart_button.alt:focus,
            .woocommerce .woocommerce-message .button:hover,
            .woocommerce .woocommerce-message .button:focus,
            .woocommerce #secondary .widget_shopping_cart .buttons .button:hover,
            .woocommerce #secondary .widget_shopping_cart .buttons .button:focus,
            .woocommerce-cart #primary .page .entry-content .cart_totals .checkout-button:hover,
            .woocommerce-cart #primary .page .entry-content .cart_totals .checkout-button:focus,
            .woocommerce-checkout .woocommerce form.woocommerce-form-login input.button:hover,
            .woocommerce-checkout .woocommerce form.woocommerce-form-login input.button:focus,
            .woocommerce-checkout .woocommerce form.checkout_coupon input.button:hover,
            .woocommerce-checkout .woocommerce form.checkout_coupon input.button:focus,
            .woocommerce form.lost_reset_password input.button:hover,
            .woocommerce form.lost_reset_password input.button:focus,
            .woocommerce .return-to-shop .button:hover,
            .woocommerce .return-to-shop .button:focus,
            .woocommerce #payment #place_order:hover,
            .woocommerce-page #payment #place_order:focus{
                background: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
            }

            .woocommerce #secondary .widget .product_list_widget li .product-title:hover,
            .woocommerce #secondary .widget .product_list_widget li .product-title:focus,
            .woocommerce div.product .entry-summary .product_meta .posted_in a:hover,
            .woocommerce div.product .entry-summary .product_meta .posted_in a:focus,
            .woocommerce div.product .entry-summary .product_meta .tagged_as a:hover,
            .woocommerce div.product .entry-summary .product_meta .tagged_as a:focus{
                color: <?php echo blossom_pin_sanitize_hex_color( $primary_color ); ?>;
            }
    <?php } ?>
           
    <?php echo "</style>";
}
add_action( 'wp_head', 'blossom_pin_dynamic_css', 99 );

/**
 * Function for sanitizing Hex color 
 */
function blossom_pin_sanitize_hex_color( $color ){
	if ( '' === $color )
		return '';

    // 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
}

/**
 * convert hex to rgb
 * @link http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
*/
function blossom_pin_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
