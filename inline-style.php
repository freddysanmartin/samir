<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_corporate_business_first_color = get_theme_mod('vw_corporate_business_first_color');

	$vw_corporate_business_custom_css = '';

	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.get-started a, .more-btn a, .about-btn a, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, input[type="submit"], .footer-2, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, #sidebar input[type="submit"], .scrollup i, .hvr-sweep-to-right:before, .pagination span, .pagination a, .footer .tagcloud a:hover, #sidebar .tagcloud a:hover, .entry-audio audio, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .footer a.custom_read_more:hover, #sidebar a.custom_read_more:hover, .footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_corporate_business_custom_css .='background-color: '.esc_html($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='#comments input[type="submit"].submit, #sidebar ul li::before, #sidebar ul.cart_list li::before, #sidebar ul.product_list_widget li::before{';
			$vw_corporate_business_custom_css .='background-color: '.esc_html($vw_corporate_business_first_color).'!important;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='a, .top-bar i, .top-bar .custom-social-icons i:hover, #header, .about h2, .footer h3, .woocommerce-message::before, .post-info i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, #sidebar td, #sidebar caption, #sidebar th, #sidebar td#prev a, .footer li a:hover, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .footer .custom-social-icons i, #sidebar .custom-social-icons i{';
			$vw_corporate_business_custom_css .='color: '.esc_html($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.post-main-box:hover, .footer .custom-social-icons i, #sidebar .custom-social-icons i, .footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_corporate_business_custom_css .='border-color: '.esc_html($vw_corporate_business_first_color).'!important;';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.main-navigation ul ul{';
			$vw_corporate_business_custom_css .='border-top-color: '.esc_html($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.top-bar, .main-navigation ul ul, .header-fixed{';
			$vw_corporate_business_custom_css .='border-bottom-color: '.esc_html($vw_corporate_business_first_color).';';
		$vw_corporate_business_custom_css .='}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='.abt-image img{
		box-shadow: -12px 12px 0 0 '.esc_html($vw_corporate_business_first_color).';
		}';
	}
	if($vw_corporate_business_first_color != false){
		$vw_corporate_business_custom_css .='#header{
		box-shadow: 0 3px 3px '.esc_html($vw_corporate_business_first_color).';
		}';
	}

	$vw_corporate_business_custom_css .='@media screen and (max-width:720px) {';
		if($vw_corporate_business_first_color != false){
			$vw_corporate_business_custom_css .='.search-box i{
			background-color:'.esc_html($vw_corporate_business_first_color).';
			}';
		}
	$vw_corporate_business_custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_width_option','Full Width');
    if($vw_corporate_business_theme_lay == 'Boxed'){
		$vw_corporate_business_custom_css .='body{';
			$vw_corporate_business_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Wide Width'){
		$vw_corporate_business_custom_css .='body{';
			$vw_corporate_business_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Full Width'){
		$vw_corporate_business_custom_css .='body{';
			$vw_corporate_business_custom_css .='max-width: 100%;';
		$vw_corporate_business_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_slider_opacity_color','0.5');
	if($vw_corporate_business_theme_lay == '0'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.1'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.1';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.2'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.2';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.3'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.3';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.4'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.4';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.5'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.5';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.6'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.6';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.7'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.7';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.8'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.8';
		$vw_corporate_business_custom_css .='}';
		}else if($vw_corporate_business_theme_lay == '0.9'){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='opacity:0.9';
		$vw_corporate_business_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_slider_content_option','Center');
    if($vw_corporate_business_theme_lay == 'Left'){
		$vw_corporate_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, .more-btn, #slider .inner_carousel p{';
			$vw_corporate_business_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Center'){
		$vw_corporate_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, .more-btn, #slider .inner_carousel p{';
			$vw_corporate_business_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Right'){
		$vw_corporate_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, .more-btn, #slider .inner_carousel p{';
			$vw_corporate_business_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_corporate_business_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_corporate_business_slider_height = get_theme_mod('vw_corporate_business_slider_height');
	if($vw_corporate_business_slider_height != false){
		$vw_corporate_business_custom_css .='#slider img{';
			$vw_corporate_business_custom_css .='height: '.esc_html($vw_corporate_business_slider_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_corporate_business__slider = get_theme_mod('vw_corporate_business_slider_hide_show');
	if($vw_corporate_business__slider == false){
		$vw_corporate_business_custom_css .='.page-template-custom-home-page #header{';
			$vw_corporate_business_custom_css .='margin-bottom: 20px;';
		$vw_corporate_business_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_blog_layout_option','Default');
    if($vw_corporate_business_theme_lay == 'Default'){
		$vw_corporate_business_custom_css .='.post-main-box{';
			$vw_corporate_business_custom_css .='';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Center'){
		$vw_corporate_business_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$vw_corporate_business_custom_css .='text-align:center;';
		$vw_corporate_business_custom_css .='}';
		$vw_corporate_business_custom_css .='.post-info{';
			$vw_corporate_business_custom_css .='margin-top:10px;';
		$vw_corporate_business_custom_css .='}';
	}else if($vw_corporate_business_theme_lay == 'Left'){
		$vw_corporate_business_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$vw_corporate_business_custom_css .='text-align:Left;';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_corporate_business_resp_topbar = get_theme_mod( 'vw_corporate_business_resp_topbar_hide_show',false);
    if($vw_corporate_business_resp_topbar == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_topbar == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_stickyheader = get_theme_mod( 'vw_corporate_business_stickyheader_hide_show',false);
    if($vw_corporate_business_resp_stickyheader == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.header-fixed{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_stickyheader == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.header-fixed{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_slider = get_theme_mod( 'vw_corporate_business_resp_slider_hide_show',false);
    if($vw_corporate_business_resp_slider == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#slider{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_slider == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#slider{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_metabox = get_theme_mod( 'vw_corporate_business_metabox_hide_show',true);
    if($vw_corporate_business_resp_metabox == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.post-info{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_metabox == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.post-info{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_sidebar = get_theme_mod( 'vw_corporate_business_sidebar_hide_show',true);
    if($vw_corporate_business_resp_sidebar == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#sidebar{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_sidebar == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='#sidebar{';
			$vw_corporate_business_custom_css .='display:none;';
		$vw_corporate_business_custom_css .='} }';
	}

	$vw_corporate_business_resp_scroll_top = get_theme_mod( 'vw_corporate_business_resp_scroll_top_hide_show',true);
    if($vw_corporate_business_resp_scroll_top == true){
    	$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='display:block;';
		$vw_corporate_business_custom_css .='} }';
	}else if($vw_corporate_business_resp_scroll_top == false){
		$vw_corporate_business_custom_css .='@media screen and (max-width:575px) {';
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='display:none !important;';
		$vw_corporate_business_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_corporate_business_topbar_padding_top_bottom = get_theme_mod('vw_corporate_business_topbar_padding_top_bottom');
	if($vw_corporate_business_topbar_padding_top_bottom != false){
		$vw_corporate_business_custom_css .='.top-bar{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_html($vw_corporate_business_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_corporate_business_topbar_padding_top_bottom).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_corporate_business_search_font_size = get_theme_mod('vw_corporate_business_search_font_size');
	if($vw_corporate_business_search_font_size != false){
		$vw_corporate_business_custom_css .='.search-box i{';
			$vw_corporate_business_custom_css .='font-size: '.esc_html($vw_corporate_business_search_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_corporate_business_button_padding_top_bottom = get_theme_mod('vw_corporate_business_button_padding_top_bottom');
	$vw_corporate_business_button_padding_left_right = get_theme_mod('vw_corporate_business_button_padding_left_right');
	if($vw_corporate_business_button_padding_top_bottom != false || $vw_corporate_business_button_padding_left_right != false){
		$vw_corporate_business_custom_css .='.blogbutton-small{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_html($vw_corporate_business_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_corporate_business_button_padding_top_bottom).';padding-left: '.esc_html($vw_corporate_business_button_padding_left_right).';padding-right: '.esc_html($vw_corporate_business_button_padding_left_right).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_button_border_radius = get_theme_mod('vw_corporate_business_button_border_radius');
	if($vw_corporate_business_button_border_radius != false){
		$vw_corporate_business_custom_css .='.blogbutton-small, .hvr-sweep-to-right:before{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_html($vw_corporate_business_button_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_corporate_business_copyright_alingment = get_theme_mod('vw_corporate_business_copyright_alingment');
	if($vw_corporate_business_copyright_alingment != false){
		$vw_corporate_business_custom_css .='.copyright p{';
			$vw_corporate_business_custom_css .='text-align: '.esc_html($vw_corporate_business_copyright_alingment).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_copyright_padding_top_bottom = get_theme_mod('vw_corporate_business_copyright_padding_top_bottom');
	if($vw_corporate_business_copyright_padding_top_bottom != false){
		$vw_corporate_business_custom_css .='.footer-2{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_html($vw_corporate_business_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_corporate_business_copyright_padding_top_bottom).';';
		$vw_corporate_business_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_corporate_business_scroll_to_top_font_size = get_theme_mod('vw_corporate_business_scroll_to_top_font_size');
	if($vw_corporate_business_scroll_to_top_font_size != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='font-size: '.esc_html($vw_corporate_business_scroll_to_top_font_size).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_padding = get_theme_mod('vw_corporate_business_scroll_to_top_padding');
	$vw_corporate_business_scroll_to_top_padding = get_theme_mod('vw_corporate_business_scroll_to_top_padding');
	if($vw_corporate_business_scroll_to_top_padding != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='padding-top: '.esc_html($vw_corporate_business_scroll_to_top_padding).';padding-bottom: '.esc_html($vw_corporate_business_scroll_to_top_padding).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_width = get_theme_mod('vw_corporate_business_scroll_to_top_width');
	if($vw_corporate_business_scroll_to_top_width != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='width: '.esc_html($vw_corporate_business_scroll_to_top_width).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_height = get_theme_mod('vw_corporate_business_scroll_to_top_height');
	if($vw_corporate_business_scroll_to_top_height != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='height: '.esc_html($vw_corporate_business_scroll_to_top_height).';';
		$vw_corporate_business_custom_css .='}';
	}

	$vw_corporate_business_scroll_to_top_border_radius = get_theme_mod('vw_corporate_business_scroll_to_top_border_radius');
	if($vw_corporate_business_scroll_to_top_border_radius != false){
		$vw_corporate_business_custom_css .='.scrollup i{';
			$vw_corporate_business_custom_css .='border-radius: '.esc_html($vw_corporate_business_scroll_to_top_border_radius).'px;';
		$vw_corporate_business_custom_css .='}';
	}
