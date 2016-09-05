<?php 

/**
 * Custom blocks for visual composer in this theme.
 */
function ebor_framework_register_pillar_blocks(){
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/functions.php');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_hero_header_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_hero_slider_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_accordion_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_tabs_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_icon_cards_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_pricing_table_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_card_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_client_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_testimonial_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_portfolio_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_team_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_blog_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_product_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_twitter_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_hover_tile_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_progress_bar_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_image_text_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_inline_video_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_modal_video_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_modal_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_video_background_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_carousel_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_image_gallery_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_image_gallery_wide_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_modal_gallery_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_modal_gallery_wide_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_video_gallery_block');
	require_once( EBOR_FRAMEWORK_PATH . 'vc_blocks/pillar/vc_video_gallery_wide_block');
}

function ebor_framework_pillar_init(){
	if( function_exists('vc_set_as_theme') ){
		add_action('after_setup_theme', 'ebor_framework_register_pillar_blocks', 10);
	}
}

add_action('plugins_loaded', 'ebor_framework_pillar_init', 9999);