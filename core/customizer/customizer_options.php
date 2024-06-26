<?php

use GT3\ThemesCore\Customizer\Types;

add_filter(
	'gt3/core/customizer/defaults', function($defaults){
	return array_merge(
		$defaults, array(
		/* == General == */
		'404_page_id'                        => '',
		'responsive'                         => true,
		'g_font'                         => array(
			'fontFamily' => '',
			'fontSize' => 16,
			'lineHeight' => 24,
			'variants' => '600',
			'subsets' => '',
		),
		'page_comments'                      => true,
		'back_to_top'                        => true,
		'bubbles_block'                      => false,
		'page_404_bg'                        => '',
		'disable_right_click'                => false,
		'disable_right_click_text'           => esc_html__('The right click is disabled. Your content is protected. You can configure this option in the theme.', 'ewebot'),
		'custom_js'                          => "jQuery(document).ready(function(){\n\n});",
		'header_custom_js'                   => "<script type='text/javascript'>\njQuery(document).ready(function(){\n\n});\n</script>",
		/* == Preloader == */
		'preloader'                          => false,
		'preloader_type'                     => 'circle',
		'preloader_background'               => '#191a1c',
		'preloader_item_color'               => '#FFFFFF',
		'preloader_item_color2'              => '#435bb2',
		'preloader_item_width'               => '140',
		'preloader_item_stroke'              => '3',
		'preloader_item_logo'                => '',
		'preloader_item_logo_width'          => '3',
		'preloader_full'                     => false,
		'preloader_mobile_disable'           => true,
		/* == Page Title == */
		'page_title_conditional'             => true,
		'page_title_breadcrumbs_conditional' => true,
		'page_title_meta_conditional'        => true,
		'page_title_names_conditional'        => true,
		'page_title_vert_align'              => 'middle',
		'page_title_horiz_align'             => 'center',
		'page_title_font_color'              => '#ffffff',
		'page_title_bg_color'                => '#6a27d9',
		'page_title_overlay_color'           => '',
		'page_title_bg_image_image'          => '',
		'page_title_bg_image_repeat'         => 'no-repeat',
		'page_title_bg_image_size'           => 'cover',
		'page_title_bg_image_attachment'     => 'scroll',
		'page_title_bg_image_position'       => 'center center',
		'page_title_height'                  => '260',
		'page_title_top_border'              => false,
		'page_title_top_border_color'        => 'rgba(25,26,28,1)',
		'page_title_bottom_border'           => false,
		'page_title_bottom_border_color'     => 'rgba(25,26,28,1)',
		'page_title_bottom_margin'           => '80',
		/* == Blog == */
		'related_posts'                      => true,
		'related_posts_filter'               => 'tag',
		'author_box'                         => true,
		'post_comments'                      => true,
		'post_pingbacks'                     => true,
		'blog_post_likes'                    => false,
		'blog_post_share'                    => true,
		'blog_post_listing_content'          => false,
		/* == Post Types == */
		'blog_title_conditional'             => true,
		'team_title_conditional'             => false,
		'portfolio_title_conditional'        => true,
		'team_slug'                          => '',
		'portfolio_slug'                     => '',
		'portfolio_name'                     => '',
		'portfolio_archive_layout'           => '3',
		'search_post_types'             => json_encode(array(
            'post',
            /*'page',
            'portfolio',*/
        )),
		/* == Sidebars == */
		'sidebars'                           => [
			"Main Sidebar",
			"Shop Sidebar",
			"Header Sidebar",
			"Shop Header Sidebar"
		],
		'page_sidebar_layout'                => 'right',
		'page_sidebar_def'                   => 'sidebar_main-sidebar',
		'blog_single_sidebar_layout'         => 'right',
		'blog_single_sidebar_def'            => 'sidebar_main-sidebar',
		'portfolio_single_sidebar_layout'    => 'none',
		'portfolio_single_sidebar_def'       => 'sidebar_main-sidebar',
		'team_single_sidebar_layout'         => 'none',
		'team_single_sidebar_def'            => 'sidebar_main-sidebar',
		/* == Google Map == */
		'google_map_latitude'                => '-37.8172507',
		'google_map_longitude'               => '144.9535833',
		'zoom_map'                           => '14',
		'map_marker_info'                    => true,
		'custom_map_marker'                  => '',
		'map_marker_info_street_number'      => '',
		'map_marker_info_street'             => '',
		'map_marker_info_descr'              => '',
		'map_marker_info_background'         => '#0a0b0b',
		'map_marker_info_color'              => '#ffffff',
		'custom_map_style'                   => false,
		'custom_map_code'                    => '',
		/* == Optimization == */
		'butt_clear'                         => '',
		'optimize_css'                       => false,
		'optimize_merge_all_css'             => false,
		'optimize_merge_all_js'             => false,
		'optimize_js'                        => false,
		'optimize_woo'                       => false,
		'optimize_migrate'                   => false,
		/* == Shop Global Settings == */
		'modern_shop'                        => true,
		'theme-modern_content-color'         => '#69747f',
		'theme-modern_header-color'          => '#1a1d20',
		'theme-modern_custom-color'          => '#3b3564',
		'gallery_images_count'               => '3',
		'products_layout'                    => 'container',
		'products_sidebar_layout'            => 'left',
		'products_sidebar_def'               => 'sidebar_shop-sidebar',
		'products_per_page_frontend'         => false,
		'products_sorting_frontend'          => false,
		'products_infinite_scroll'           => 'none',
		'woocommerce_pagination'             => 'top_bottom',
		'woocommerce_grid_list'              => 'off',
		'label_color_sale'                   => 'rgba(230,55,100,1)',
		'label_color_hot'                    => 'rgba(113,208,128,1)',
		'label_color_new'                    => 'rgba(106,209,228,1)',
		'label_color_sale_modern'            => 'rgba(233,54,49,1)',
		'label_color_hot_modern'             => 'rgba(44,138,34,1)',
		'label_color_new_modern'             => 'rgba(26,29,32,1)',
		/* == Shop Product Page == */
		'product_layout'                     => 'horizontal',
		'activate_carousel_thumb'            => false,
		'product_container'                  => 'container',
		'product_sidebar_layout'             => 'none',
		'product_sidebar_def'                => '',
		'shop_size_guide'                    => false,
		'size_guide'                         => '',
		'next_prev_product'                  => true,
		'product_sharing'                    => true,
		/* == Shop Page Title == */
		'shop_cat_title_conditional'         => true,
		'product_title_conditional'          => false,
		'customize_shop_title'               => false,
		'shop_title_vert_align'              => 'middle',
		'shop_title_horiz_align'             => 'left',
		'shop_title_font_color'              => '#ffffff',
		'shop_title_bg_color'                => '#0a0b0b',
		'shop_title_overlay_color'           => '',
		'shop_title_bg_image_image'          => '',
		'shop_title_bg_image_repeat'         => 'no-repeat',
		'shop_title_bg_image_size'           => 'cover',
		'shop_title_bg_image_attachment'     => 'scroll',
		'shop_title_bg_image_position'       => 'center center',
		'shop_title_height'                  => '300',
		'shop_title_top_border'              => false,
		'shop_title_top_border_color'        => 'rgba(10,11,11,1)',
		'shop_title_bottom_border'           => false,
		'shop_title_bottom_border_color'     => 'rgba(10,11,11,1)',
		'shop_title_bottom_margin'           => '60',
		/* == Archive Settings == */
		'category_archive_layout'            => '1',
		'category_archive_type'              => 'masonry',
		'search_layout'                      => '1',
	)
	);
}
);

add_filter(
	'gt3/core/customizer/convert_fields', function($fields){
		return array_merge($fields, array(
		/* == General == */
		'404_page_id'                        => Types::TYPE_STRING,
		'responsive'                         => Types::TYPE_BOOL,
		'page_comments'                      => Types::TYPE_BOOL,
		'back_to_top'                        => Types::TYPE_BOOL,
		'bubbles_block'                      => Types::TYPE_BOOL,
		'page_404_bg'                        => Types::TYPE_IMAGE,
		'disable_right_click'                => Types::TYPE_BOOL,
		'disable_right_click_text'           => Types::TYPE_STRING,
		'custom_js'                          => Types::TYPE_STRING,
		'header_custom_js'                   => Types::TYPE_STRING,
		/* == Preloader == */
		'preloader'                          => Types::TYPE_BOOL,
		'preloader_type'                     => Types::TYPE_STRING,
		'preloader_background'               => Types::TYPE_COLOR,
		'preloader_item_color'               => Types::TYPE_COLOR,
		'preloader_item_color2'              => Types::TYPE_COLOR,
		'preloader_item_width'               => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'width', 'filter_func' => 'intval' ) ),
		'preloader_item_stroke'              => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'width', 'filter_func' => 'intval' ) ),
		'preloader_item_logo'                => Types::TYPE_IMAGE,
		'preloader_item_logo_width'          => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'width', 'filter_func' => 'intval' ) ),
		'preloader_full'                     => Types::TYPE_BOOL,
		'preloader_mobile_disable'           => Types::TYPE_BOOL,
		/* == Page Title == */
		'page_title_conditional'             => Types::TYPE_BOOL,
		'page_title_breadcrumbs_conditional' => Types::TYPE_BOOL,
		'page_title_meta_conditional'        => Types::TYPE_BOOL,
		'page_title_vert_align'              => Types::TYPE_STRING,
		'page_title_horiz_align'             => Types::TYPE_STRING,
		'page_title_font_color'              => Types::TYPE_COLOR,
		'page_title_bg_color'                => Types::TYPE_COLOR,
		'page_title_overlay_color'           => Types::TYPE_COLOR,
		'page_title_bg_image_image'          => array( 'fn' => Types::TYPE_BACKGROUND, 'args' => array( 'field' => 'page_title_bg_image' ) ),
		'page_title_bg_image_repeat'         => Types::TYPE_STRING,
		'page_title_bg_image_size'           => Types::TYPE_STRING,
		'page_title_bg_image_attachment'     => Types::TYPE_STRING,
		'page_title_bg_image_position'       => Types::TYPE_STRING,
		'page_title_height'                  => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'height', 'filter_func' => 'intval' ) ),
		'page_title_top_border'              => Types::TYPE_BOOL,
		'page_title_top_border_color'        => Types::TYPE_COLOR,
		'page_title_bottom_border'           => Types::TYPE_BOOL,
		'page_title_bottom_border_color'     => Types::TYPE_COLOR,
		'page_title_bottom_margin'           => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'margin-bottom', 'filter_func' => 'intval' ) ),
		/* == Blog == */
		'related_posts'                      => Types::TYPE_BOOL,
		'related_posts_filter'               => Types::TYPE_STRING,
		'author_box'                         => Types::TYPE_BOOL,
		'post_comments'                      => Types::TYPE_BOOL,
		'post_pingbacks'                     => Types::TYPE_BOOL,
		'blog_post_likes'                    => Types::TYPE_BOOL,
		'blog_post_share'                    => Types::TYPE_BOOL,
		'blog_post_listing_content'          => Types::TYPE_BOOL,
		'blog_post_fimage_animation'         => Types::TYPE_BOOL,
		/* == Post Types == */
		'blog_title_conditional'             => Types::TYPE_BOOL,
		'team_title_conditional'             => Types::TYPE_BOOL,
		'portfolio_title_conditional'        => Types::TYPE_BOOL,
		'team_slug'                          => Types::TYPE_STRING,
		'portfolio_slug'                     => Types::TYPE_STRING,
		'portfolio_name'                     => Types::TYPE_STRING,
		'portfolio_archive_layout'           => Types::TYPE_STRING,
		/* == Sidebars == */
		'sticky_sidebar'                     => false,
		'sidebars'                           => Types::TYPE_ARRAY,
		'page_sidebar_layout'                => Types::TYPE_STRING,
		'page_sidebar_def'                   => Types::TYPE_STRING,
		'blog_single_sidebar_layout'         => Types::TYPE_STRING,
		'blog_single_sidebar_def'            => Types::TYPE_STRING,
		'portfolio_single_sidebar_layout'    => Types::TYPE_STRING,
		'portfolio_single_sidebar_def'       => Types::TYPE_STRING,
		'team_single_sidebar_layout'         => Types::TYPE_STRING,
		'team_single_sidebar_def'            => Types::TYPE_STRING,
		/* == Google Map == */
		'google_map_latitude'                => Types::TYPE_STRING,
		'google_map_longitude'               => Types::TYPE_STRING,
		'zoom_map'                           => Types::TYPE_STRING,
		'map_marker_info'                    => Types::TYPE_BOOL,
		'custom_map_marker'                  => Types::TYPE_STRING,
		'map_marker_info_street_number'      => Types::TYPE_STRING,
		'map_marker_info_street'             => Types::TYPE_STRING,
		'map_marker_info_descr'              => Types::TYPE_STRING,
		'map_marker_info_background'         => Types::TYPE_STRING,
		'map_marker_info_color'              => Types::TYPE_COLOR,
		'custom_map_style'                   => Types::TYPE_BOOL,
		'custom_map_code'                    => Types::TYPE_STRING,
		/* == Optimization == */
		'butt_clear'                         => Types::TYPE_STRING,
		'optimize_css'                       => Types::TYPE_BOOL,
		'optimize_merge_all_css'             => Types::TYPE_BOOL,
		'optimize_merge_all_js'             => Types::TYPE_BOOL,
		'optimize_js'                        => Types::TYPE_BOOL,
		'optimize_woo'                       => Types::TYPE_BOOL,
		'optimize_migrate'                   => Types::TYPE_BOOL,
		'disable_elementor_font'             => Types::TYPE_BOOL,
		/* == Shop Global Settings == */
		'modern_shop'                        => Types::TYPE_BOOL,
		'gallery_images_count'               => Types::TYPE_STRING,
		'products_layout'                    => Types::TYPE_STRING,
		'products_sidebar_layout'            => Types::TYPE_STRING,
		'products_sidebar_def'               => Types::TYPE_STRING,
		'products_per_page_frontend'         => Types::TYPE_BOOL,
		'products_sorting_frontend'          => Types::TYPE_BOOL,
		'products_infinite_scroll'           => Types::TYPE_STRING,
		'woocommerce_pagination'             => Types::TYPE_STRING,
		'woocommerce_grid_list'              => Types::TYPE_STRING,
		'label_color_sale'                   => Types::TYPE_COLOR,
		'label_color_hot'                    => Types::TYPE_COLOR,
		'label_color_new'                    => Types::TYPE_COLOR,
		'label_color_sale_modern'            => Types::TYPE_COLOR,
		'label_color_hot_modern'             => Types::TYPE_COLOR,
		'label_color_new_modern'             => Types::TYPE_COLOR,
		/* == Shop Product Page == */
		'product_layout'                     => Types::TYPE_STRING,
		'activate_carousel_thumb'            => Types::TYPE_BOOL,
		'product_container'                  => Types::TYPE_STRING,
		'product_sidebar_layout'             => Types::TYPE_STRING,
		'product_sidebar_def'                => Types::TYPE_STRING,
		'shop_size_guide'                    => Types::TYPE_BOOL,
		'size_guide'                         => Types::TYPE_IMAGE,
		'next_prev_product'                  => Types::TYPE_BOOL,
		'product_sharing'                    => Types::TYPE_BOOL,
		/* == Shop Page Title == */
		'shop_cat_title_conditional'         => Types::TYPE_BOOL,
		'product_title_conditional'          => Types::TYPE_BOOL,
		'customize_shop_title'               => Types::TYPE_BOOL,
		'shop_title_vert_align'              => Types::TYPE_STRING,
		'shop_title_horiz_align'             => Types::TYPE_STRING,
		'shop_title_font_color'              => Types::TYPE_COLOR,
		'shop_title_bg_color'                => Types::TYPE_COLOR,
		'shop_title_overlay_color'           => Types::TYPE_COLOR,
		'shop_title_bg_image_image'          => array( 'fn' => Types::TYPE_BACKGROUND, 'args' => array( 'field' => 'shop_title_bg_image' ) ),
		'shop_title_bg_image_repeat'         => Types::TYPE_STRING,
		'shop_title_bg_image_size'           => Types::TYPE_STRING,
		'shop_title_bg_image_attachment'     => Types::TYPE_STRING,
		'shop_title_bg_image_position'       => Types::TYPE_STRING,
		'shop_title_height'                  => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'height', 'filter_func' => 'intval' ) ),
		'shop_title_top_border'              => Types::TYPE_BOOL,
		'shop_title_top_border_color'        => Types::TYPE_COLOR,
		'shop_title_bottom_border'           => Types::TYPE_BOOL,
		'shop_title_bottom_border_color'     => Types::TYPE_COLOR,
		'shop_title_bottom_margin'           => array( 'fn' => Types::TYPE_ARRAY, 'args' => array( 'field' => 'margin-bottom', 'filter_func' => 'intval' ) ),
	));



}
);

