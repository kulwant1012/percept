<?php
/**
 * Header.
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options[] = array( 'name' => _x( 'Layout', 'theme-options', 'the7mk2' ), 'type' => 'heading', 'id' => 'layout' );

$options[] = array( 'name' => _x( 'Layout', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['header-layout'] = array(
	'id'        => 'header-layout',
	'name'      => _x( 'Choose layout', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'std'       => 'classic',
	'style'     => 'vertical',
	'class'     => 'option-header-layout',
	'options'   => array(
		'classic'   => array(
			'title' => _x( 'Classic', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h01.gif',
		),
		'inline'    => array(
			'title' => _x( 'Inline', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h02.gif',
		),
		'split'     => array(
			'title' => _x( 'Split', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h03.gif',
		),
		'side'      => array(
			'title' => _x( 'Side', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h04.gif',
		),
		'top_line'  => array(
			'title' => _x( 'Top line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h05.gif',
		),
		'side_line' => array(
			'title' => _x( 'Side line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h06.gif',
		),

		'menu_icon' => array(
			'title' => _x( 'Floating menu button', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/h07.gif',
		),
	),
	'show_hide' => array(
		'side'      => array( 'header-below-menu-microwidgets' ),
		'top_line'  => array(
			'header-layout-side-navigation-settings',
			'header-in-top-line-microwidgets',
			'header-below-menu-microwidgets',
		),
		'menu_icon' => array( 'header-layout-side-navigation-settings', 'header-below-menu-microwidgets' ),
		'side_line' => array( 'header-layout-side-navigation-settings', 'header-below-menu-microwidgets' ),
	),
);

/**
 * Classic layout.
 */
$options[] = array(
	'name'  => _x( 'Classic header layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-classic-settings',
	'type'  => 'block',
);

$options['header-classic-height'] = array(
	'id'    => 'header-classic-height',
	'name'  => _x( 'Header height', 'theme-options', 'the7mk2' ),
	'std'   => '140px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-classic-menu-position'] = array(
	'id'      => 'header-classic-menu-position',
	'name'    => _x( 'Menu position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left'    => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-position-left.gif',
		),
		'center'  => array(
			'title' => _x( 'Center', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-position-center.gif',
		),
		'justify' => array(
			'title' => _x( 'Justified', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-position-justify.gif',
		),
	),
	'class'   => 'small',
);

$options['header-classic-menu-margin'] = array(
	'id'     => 'header-classic-menu-margin',
	'name'   => _x( 'Menu margin', 'theme-options', 'the7mk2' ),
	'type'   => 'spacing',
	'std'    => '0px 0px',
	'fields' => array(
		_x( 'Top', 'theme-options', 'the7mk2' ),
		_x( 'Bottom', 'theme-options', 'the7mk2' ),
	),
);

$options['header-classic-logo-position'] = array(
	'id'      => 'header-classic-logo-position',
	'name'    => _x( 'Logo position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left'   => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-logo-position-left.gif',
		),
		'center' => array(
			'title' => _x( 'Center', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-logo-position-center.gif',
		),
	),
	'class'   => 'small',
);

$options['header-classic-is_fullwidth'] = array(
	'id'      => 'header-classic-is_fullwidth',
	'name'    => _x( 'Full width', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-isfullwidth-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-isfullwidth-disabled.gif',
		),
	),
);

/**
 * Inline header.
 */

$options[] = array(
	'name'  => _x( 'Inline header layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-inline-settings',
	'type'  => 'block',
);

$options['header-inline-height'] = array(
	'id'    => 'header-inline-height',
	'name'  => _x( 'Header height', 'theme-options', 'the7mk2' ),
	'std'   => '140px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-inline-menu-position'] = array(
	'id'      => 'header-inline-menu-position',
	'name'    => _x( 'Menu position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'right',
	'options' => array(
		'left'    => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-inline-menu-position-left.gif',
		),
		'right'   => array(
			'title' => _x( 'Right', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-inline-menu-position-right.gif',
		),
		'center'  => array(
			'title' => _x( 'Center', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-inline-menu-position-center.gif',
		),
		'justify' => array(
			'title' => _x( 'Justified', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-inline-menu-position-justify.gif',
		),
	),
	'class'   => 'small',
);

$options['header-inline-is_fullwidth'] = array(
	'id'      => 'header-inline-is_fullwidth',
	'name'    => _x( 'Full width', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-inline-isfullwidth-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-inline-isfullwidth-disabled.gif',
		),
	),
);

/**
 * Split header.
 */
$options[] = array(
	'name'  => _x( 'Split header layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-split-settings',
	'type'  => 'block',
);

$options[] = array(
	'desc' => sprintf( _x( 'To display split menu You should <a href="%1$s">create</a> two separate custom menus and <a href="%2$s">assign</a> them to "Split Menu Left" and "Split Menu Right" locations.', 'theme-options', 'the7mk2' ), admin_url( 'nav-menus.php' ), admin_url( 'nav-menus.php?action=locations' ) ),
	'type' => 'info',
);

$options['header-split-height'] = array(
	'id'    => 'header-split-height',
	'name'  => _x( 'Header height', 'theme-options', 'the7mk2' ),
	'std'   => '100px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-split-menu-position'] = array(
	'id'      => 'header-split-menu-position',
	'name'    => _x( 'Menu & microwidgets position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'inside',
	'options' => array(
		'justify'      => array(
			'title' => _x( 'Justified', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-split-menu-position-justify.gif',
		),
		'inside'       => array(
			'title' => _x( 'Menu inside, microwidgets outside', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-split-menu-position-inside.gif',
		),
		'fully_inside' => array(
			'title' => _x( 'Menu inside, microwidgets inside', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-split-menu-position-fullyinside.gif',
		),
		'outside'      => array(
			'title' => _x( 'Menu outside, microwidgets outside', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-split-menu-position-outside.gif',
		),
	),
	'class'   => 'small',
);

$options['header-split-is_fullwidth'] = array(
	'id'      => 'header-split-is_fullwidth',
	'name'    => _x( 'Full width', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-split-isfullwidth-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-split-isfullwidth-disabled.gif',
		),
	),
);

/**
 * Side header.
 */
$options[] = array(
	'name'  => _x( 'Side header layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-side-settings',
	'type'  => 'block',
);

$options[] = array(
	'name' => _x( 'NAVIGATION AREA SETTINGS', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

$options['header-side-width'] = array(
	'id'    => 'header-side-width',
	'name'  => _x( 'Header width', 'theme-options', 'the7mk2' ),
	'std'   => '300px',
	'type'  => 'number',
	'units' => 'px|%',
);

$options['header-side-position'] = array(
	'id'      => 'header-side-position',
	'name'    => _x( 'Header position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left'  => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-side-position-left.gif',
		),
		'right' => array(
			'title' => _x( 'Right', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-side-position-right.gif',
		),
	),
	'class'   => 'small',
);


$options['header-side-content-padding'] = array(
	'id'   => 'header-side-content-padding',
	'name' => _x( 'Navigation area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array( 'type' => 'divider' );
$options[] = array(
	'name' => _x( 'MENU SETTINGS', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

presscore_options_apply_template( $options, 'side-header-menu', 'header-side' );

/**
 * Top line header.
 */
$options[] = array(
	'name'  => _x( 'Top line layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-top_line-settings',
	'type'  => 'block',
);

// Top line.
$options['layout-top_line-height'] = array(
	'id'    => 'layout-top_line-height',
	'name'  => _x( 'Top line height', 'theme-options', 'the7mk2' ),
	'std'   => '130px',
	'type'  => 'number',
	'units' => 'px',
);

$options['layout-top_line-logo-position'] = array(
	'id'      => 'layout-top_line-logo-position',
	'name'    => _x( 'Logo & menu button position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left_btn-right_logo'  => array(
			'title' => _x( 'Left button + right logo', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/top-line-left-right.gif',
		),
		'left_btn-center_logo' => array(
			'title' => _x( 'Left button + centered logo', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/top-line-left-center.gif',
		),
		'left'                 => array(
			'title' => _x( 'Right button + left logo', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-layout-topline-logo-position-left.gif',
		),
		'center'               => array(
			'title' => _x( 'Right button + centered logo', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-layout-topline-logo-position-center.gif',
		),
	),
	'class'   => 'small',
);

$options['layout-top_line-is_fullwidth'] = array(
	'id'      => 'layout-top_line-is_fullwidth',
	'name'    => _x( 'Full width', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-topline-fullwidth-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-topline-fullwidth-disabled.gif',
		),
	),
);

$options['layout-top_line-is_sticky'] = array(
	'id'      => 'layout-top_line-is_sticky',
	'name'    => _x( 'Sticky line', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/top-line-floating-on.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/top-line-floating-off.gif',
		),
	),
);

/**
 * Side line header.
 */
$options[] = array(
	'name'  => _x( 'Side line layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-side_line-settings',
	'type'  => 'block',
);

// Top line.
$options['layout-side_line-height']     = array(
	'id'    => 'header-side_line-width',
	'name'  => _x( 'Side line width', 'theme-options', 'the7mk2' ),
	'std'   => '60px',
	'type'  => 'number',
	'units' => 'px',
);
$options['layout-side_line-v_position'] = array(
	'id'      => 'layout-side_line-v_position',
	'name'    => _x( 'Line position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left'  => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/side-lie-left.gif',
		),
		'right' => array(
			'title' => _x( 'Right', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/side-line-right.gif',
		),
	),
	'class'   => 'small',
);

$options['layout-side_line-position'] = array(
	'id'      => 'layout-side_line-position',
	'name'    => _x( 'Show navigation area', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'above',
	'options' => array(
		'above' => array(
			'title' => _x( 'Above the line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-layout-sideline-position-above.gif',
		),
		'under' => array(
			'title' => _x( 'Under the line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-layout-sideline-position-under.gif',
		),
	),
	'class'   => 'small',
);

/**
 * Menu icon header.
 */
$options[] = array(
	'name'  => _x( 'Floating menu button layout settings', 'theme-options', 'the7mk2' ),
	'class' => 'header-layout-menu_icon-settings',
	'type'  => 'block',
);

$options['layout-menu_icon-position'] = array(
	'id'      => 'layout-menu_icon-position',
	'name'    => _x( 'Logo & menu button position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'menu_icon_right',
	'options' => array(
		'menu_icon_left'  => array(
			'title' => _x( 'Left button + right logo', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/logo-right.gif',
		),
		'menu_icon_right' => array(
			'title' => _x( 'Right button + left logo', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/logo-left.gif',
		),
	),
	'class'   => 'small',
);

$options['layout-menu_icon-show_floating_logo'] = array(
	'id'      => 'layout-menu_icon-show_floating_logo',
	'name'    => _x( 'Floating logo', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => '1',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-layout-menuicon-showfloatinglogo-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-layout-menuicon-showfloatinglogo-disabled.gif',
		),
	),
	'class'   => 'small',
);

/**
 * Navigation settings.
 */

$options[] = array(
	'name' => _x( 'Navigation', 'theme-options', 'the7mk2' ),
	'id'   => 'navigation-settings',
	'type' => 'block',
);


/**
 * Side on click header.
 */
$options[] = array( 'type' => 'js_hide_begin', 'class' => 'header-layout header-layout-side-navigation-settings' );

$options['header_navigation'] = array(
	'id'        => 'header_navigation',
	'name'      => _x( 'Navigation', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'std'       => 'slide_out',
	'options'   => array(
		'slide_out' => array(
			'title' => _x( 'Side navigation', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/slide-out-header.gif',
		),
		'overlay'   => array(
			'title' => _x( 'Overlay navigation', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/overlay-header.gif',
		),
	),
	'class'     => 'small',
	'show_hide' => array(
		'slide_out' => 'slide_out_navigation_options',
		'overlay'   => 'header-layout-overlay-settings',
	),
);

$options[] = array( 'type' => 'js_hide_begin', 'class' => 'header_navigation slide_out_navigation_options' );
$options[] = array( 'type' => 'divider' );

$options[] = array(
	'name' => _x( 'NAVIGATION AREA SETTINGS', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

$options['header-slide_out-width'] = array(
	'id'    => 'header-slide_out-width',
	'name'  => _x( 'Navigation area width', 'theme-options', 'the7mk2' ),
	'std'   => '300px',
	'type'  => 'number',
	'units' => 'px|%',
);

$options['header-slide_out-position'] = array(
	'id'      => 'header-slide_out-position',
	'name'    => _x( 'Navigation area position', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left'  => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-side-position-left.gif',
		),
		'right' => array(
			'title' => _x( 'Right', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-side-position-right.gif',
		),
	),
	'class'   => 'small',
);

$options['header-slide_out-content-padding'] = array(
	'id'   => 'header-slide_out-content-padding',
	'name' => _x( 'Navigation area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options['header-slide_out-overlay-animation'] = array(
	'id'      => 'header-slide_out-overlay-animation',
	'name'    => _x( 'Animation on opening', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'fade',
	'options' => array(
		'fade'  => array(
			'title' => _x( 'Fade', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-overlay-animation-fade.gif',
		),
		'slide' => array(
			'title' => _x( 'Slide', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-slideout-overlay-animation-slide.gif',
		),
	),
	'class'   => 'small',
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
	'name' => _x( 'MENU SETTINGS', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

presscore_options_apply_template( $options, 'side-header-menu', 'header-slide_out' );

$options[] = array( 'type' => 'js_hide_end' );

/**
 * Overlay navigation.
 */
$options[] = array( 'type' => 'js_hide_begin', 'class' => 'header_navigation header-layout-overlay-settings' );

$options[] = array( 'type' => 'divider' );

$options[] = array(
	'name' => _x( 'NAVIGATION AREA SETTINGS', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

presscore_options_apply_template( $options, 'side-header-content', 'header-overlay', array(
	'content-width'    => array(
		'name' => _x( 'Navigation area width', 'theme-options', 'the7mk2' ),
		'std'  => '400px',
	),
	'content-position' => array(
		'name'    => _x( 'Navigation area position', 'theme-options', 'the7mk2' ),
		'options' => array(
			'left'   => array(
				'src' => '/inc/admin/assets/images/header-overlay-content-position-left.gif',
			),
			'center' => array(
				'src' => '/inc/admin/assets/images/header-overlay-content-position-center.gif',
			),
			'right'  => array(
				'src' => '/inc/admin/assets/images/header-overlay-content-position-right.gif',
			),
		),
	),

), array(
	array(
		array(
			'field'    => 'header_navigation',
			'operator' => '==',
			'value'    => 'overlay',
		),
	),
) );

$options['header-overlay-content-padding'] = array(
	'id'         => 'header-overlay-content-padding',
	'name'       => _x( 'Navigation area paddings', 'theme-options', 'the7mk2' ),
	'type'       => 'spacing',
	'std'        => '0px 0px 0px 0px',
	'dependency' => array(
		array(
			array(
				'field'    => 'header_navigation',
				'operator' => '==',
				'value'    => 'overlay',
			),
		),
	),
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
	'name' => _x( 'MENU SETTINGS', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

presscore_options_apply_template( $options, 'side-header-menu', 'header-overlay', array(), array(
	array(
		array(
			'field'    => 'header_navigation',
			'operator' => '==',
			'value'    => 'overlay',
		),
	),
) );

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array( 'type' => 'js_hide_end' );


$options[] = array(
	'name' => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'type' => 'heading',
	'id'   => 'microwidgets',
);

$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'classic-microwidgets',
	'type'  => 'block',
);

/**
 * Classic layout.
 */

$options['header-classic-show_elements'] = array(
	'id'        => 'header-classic-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-classic-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-classic-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-classic-elements'] = array(
	'id'            => 'header-classic-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive microwidgets', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'top_bar_left'    => array(
			'title' => _x( 'Microwidgets in top bar (left)', 'theme-options', 'the7mk2' ),
			'class' => 'field-blue',
		),
		'top_bar_right'   => array(
			'title' => _x( 'Microwidgets in top bar (right)', 'theme-options', 'the7mk2' ),
			'class' => 'field-blue',
		),
		'near_menu_right' => array(
			'title' => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
		'near_logo_left'  => array(
			'title' => _x( 'Microwidgets near logo (left)', 'theme-options', 'the7mk2' ),
			'class' => 'field-red',
		),
		'near_logo_right' => array(
			'title' => _x( 'Microwidgets near logo (right)', 'theme-options', 'the7mk2' ),
			'class' => 'field-red',
		),
	),
);

$options[] = array( 'type' => 'js_hide_end' );


$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'classic-microwidgets-settings',
	'type'  => 'block',
);


presscore_options_apply_template( $options, 'microwidget-font', 'header-classic-elements-near_menu' );

$options['header-classic-elements-near_menu_right-padding'] = array(
	'id'   => 'header-classic-elements-near_menu_right-padding',
	'name' => _x( 'Microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array(
	'name'  => _x( 'Microwidgets near logo', 'theme-options', 'the7mk2' ),
	'class' => 'classic-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-classic-elements-near_logo' );

$options['header-classic-elements-near_logo_left-padding'] = array(
	'id'   => 'header-classic-elements-near_logo_left-padding',
	'name' => _x( 'Left microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options['header-classic-elements-near_logo_right-padding'] = array(
	'id'   => 'header-classic-elements-near_logo_right-padding',
	'name' => _x( 'Right microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


/**
 * Inline header.
 */
$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'inline-microwidgets',
	'type'  => 'block',
);

$options['header-inline-show_elements'] = array(
	'id'        => 'header-inline-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-inline-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-inline-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-inline-elements'] = array(
	'id'            => 'header-inline-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive microwidgets', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'top_bar_left'    => array(
			'title' => _x( 'Microwidgets in top bar (left)', 'theme-options', 'the7mk2' ),
			'class' => 'field-blue',
		),
		'top_bar_right'   => array(
			'title' => _x( 'Microwidgets in top bar (right)', 'theme-options', 'the7mk2' ),
			'class' => 'field-blue',
		),
		'near_menu_right' => array(
			'title' => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'inline-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-inline-elements-near_menu' );

$options['header-inline-elements-near_menu_right-padding'] = array(
	'id'   => 'header-inline-elements-near_menu_right-padding',
	'name' => _x( 'Microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


/**
 * Split header.
 */
$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'split-microwidgets',
	'type'  => 'block',
);

$options['header-split-show_elements'] = array(
	'id'        => 'header-split-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-split-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-split-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-split-elements'] = array(
	'id'            => 'header-split-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive microwidgets', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'top_bar_left'    => array(
			'title' => _x( 'Microwidgets in top bar (left)', 'theme-options', 'the7mk2' ),
			'class' => 'field-blue',
		),
		'top_bar_right'   => array(
			'title' => _x( 'Microwidgets in top bar (right)', 'theme-options', 'the7mk2' ),
			'class' => 'field-blue',
		),
		'near_menu_left'  => array(
			'title' => _x( 'Microwidgets in navigation area (left)', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
		'near_menu_right' => array(
			'title' => _x( 'Microwidgets in navigation area (right)', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'split-microwidgets-settings',
	'type'  => 'block',
);
presscore_options_apply_template( $options, 'microwidget-font', 'header-split-elements-near_menu' );


$options['header-split-elements-near_menu_left-padding'] = array(
	'id'   => 'header-split-elements-near_menu_left-padding',
	'name' => _x( 'Left microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


$options['header-split-elements-near_menu_right-padding'] = array(
	'id'   => 'header-split-elements-near_menu_right-padding',
	'name' => _x( 'Right microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

/**
 * Side header.
 */
$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'side-microwidgets',
	'type'  => 'block',
);

$options['header-side-show_elements'] = array(
	'id'        => 'header-side-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-side-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-side-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-side-elements'] = array(
	'id'            => 'header-side-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive elements', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'below_menu' => array(
			'title' => _x( 'Below menu', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
	),
);
$options[]                       = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'side-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-side-elements-near_menu' );

$options[] = array( 'type' => 'divider' );

$options['header-side-elements-below_menu-padding'] = array(
	'id'   => 'header-side-elements-below_menu-padding',
	'name' => _x( 'Area below menu padding', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


/**
 * Top line header.
 */
$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'top-line-microwidgets',
	'type'  => 'block',
);

$options['header-top_line-show_elements'] = array(
	'id'        => 'header-top_line-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-top_line-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-top_line-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-top_line-elements'] = array(
	'id'            => 'header-top_line-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive microwidgets', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'side_top_line'  => array(
			'title' => _x( 'Microwidgets in top line (left)', 'theme-options', 'the7mk2' ),
			'class' => 'field-red',
		),
		'top_line_right' => array(
			'title' => _x( 'Microwidgets in top line (right)', 'theme-options', 'the7mk2' ),
			'class' => 'field-red',
		),
		'below_menu'     => array(
			'title' => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Microwidgets in top line', 'theme-options', 'the7mk2' ),
	'class' => 'top-line-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-top_line-elements-in_top_line' );


$options['header-top_line-elements-top_line-padding']       = array(
	'id'   => 'header-top_line-elements-top_line-padding',
	'name' => _x( 'Left microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);
$options['header-top_line-elements-top_line_right-padding'] = array(
	'id'   => 'header-top_line-elements-top_line_right-padding',
	'name' => _x( 'Right microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'top-line-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-top_line-elements-near_menu' );

$options['header-top_line-elements-below_menu-padding'] = array(
	'id'   => 'header-top_line-elements-below_menu-padding',
	'name' => _x( 'Microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


/**
 * Side line header.
 */
$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'side-line-microwidgets',
	'type'  => 'block',
);

$options['header-side_line-show_elements'] = array(
	'id'        => 'header-side_line-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-side_line-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-side_line-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-side_line-elements'] = array(
	'id'            => 'header-side_line-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive microwidgets', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'below_menu' => array(
			'title' => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'side-line-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-side_line-elements-near_menu' );


$options['header-side_line-elements-below_menu-padding'] = array(
	'id'   => 'header-side_line-elements-below_menu-padding',
	'name' => _x( 'Microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


/**
 * Menu icons only header.
 */
$options[] = array(
	'name'  => _x( 'Microwidgets layout', 'theme-options', 'the7mk2' ),
	'class' => 'menu-icon-microwidgets',
	'type'  => 'block',
);

$options['header-menu_icon-show_elements'] = array(
	'id'        => 'header-menu_icon-show_elements',
	'name'      => _x( 'Microwidgets', 'theme-options', 'the7mk2' ),
	'desc'      => 'When enabled, microwidgets can  be rearranged below. You can set them up in dedicated "Microwidgets" tab.',
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/microwidgets-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-menu_icon-icons_style'] = array(
	"name"    => _x( 'Icons', 'theme-options', 'the7mk2' ),
	"id"      => 'header-menu_icon-icons_style',
	"std"     => 'light',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'light' => array(
			'title' => _x( 'Light', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-light.gif',
		),
		'bold'  => array(
			'title' => _x( 'Bold', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-icons_style-bold.gif',
		),
	),
);

$options['header-menu_icon-elements'] = array(
	'id'            => 'header-menu_icon-elements',
	'type'          => 'sortable',
	'std'           => array(),
	'palette_title' => _x( 'Inactive microwidgets', 'theme-options', 'the7mk2' ),
	'items'         => presscore_options_get_header_layout_elements(),
	'fields'        => array(
		'below_menu' => array(
			'title' => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
			'class' => 'field-green',
		),
	),
);
$options[]                            = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Microwidgets in navigation area', 'theme-options', 'the7mk2' ),
	'class' => 'menu-icon-microwidgets-settings',
	'type'  => 'block',
);

presscore_options_apply_template( $options, 'microwidget-font', 'header-menu_icon-elements-near_menu' );

$options['header-menu_icon-elements-below_menu-padding'] = array(
	'id'   => 'header-menu_icon-elements-below_menu-padding',
	'name' => _x( 'Microwidgets area paddings', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array(
	'name'  => _x( 'Microwidgets in top bar', 'theme-options', 'the7mk2' ),
	'class' => 'top-bar-microwidgets',
	'type'  => 'block',
);

$options['top_bar-font-family'] = array(
	'id'    => 'top_bar-font-family',
	'name'  => _x( 'Font', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Open Sans',
	'fonts' => 'all',
);


$options['top_bar-font-size'] = array(
	'id'       => 'top_bar-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'sanitize' => 'font_size',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
);


$options['top_bar-font-is_capitalized'] = array(
	'id'   => 'top_bar-font-is_capitalized',
	'name' => _x( 'Capitalize ', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 0,
);


$options['top_bar-font-color'] = array(
	'id'   => 'top_bar-font-color',
	'name' => _x( 'Font color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#686868',
);


$options[] = array(
	'name'  => _x( 'Microwidgets in mobile header', 'theme-options', 'the7mk2' ),
	'class' => 'mobile-header-microwidgets',
	'type'  => 'block',
);

$options['header-mobile-microwidgets-font-family'] = array(
	'id'    => 'header-mobile-microwidgets-font-family',
	'name'  => _x( 'Font family', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Open Sans',
	'fonts' => 'all',
);

$options['header-mobile-microwidgets-font-size']  = array(
	'id'       => 'header-mobile-microwidgets-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'sanitize' => 'font_size',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
);
$options['header-mobile-microwidgets-font-color'] = array(
	'id'   => 'header-mobile-microwidgets-font-color',
	'name' => _x( 'Font color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#000000',
);


$options['header-before-elements-placeholder'] = array();

$options[] = array(
	'name'                => _x( 'Search', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-search-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'basic-header-element', 'header-elements-search', array(
	'caption' => array(
		'divider' => false,
	),
) );

$options[] = array(
	'name'                => _x( 'Address', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-address-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'basic-header-element', 'header-elements-contact-address', array(
	'caption' => array(
		'name'    => _x( 'Address', 'theme-options', 'the7mk2' ),
		'divider' => false,
		'class'   => 'wide',
	),
) );

$options[] = array(
	'name'                => _x( 'Phone', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-phone-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'basic-header-element', 'header-elements-contact-phone', array(
	'caption' => array(
		'name'    => _x( 'Phone', 'theme-options', 'the7mk2' ),
		'divider' => false,
		'class'   => 'wide',
	),
) );

$options[] = array(
	'name'                => _x( 'Email', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-email-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'basic-header-element', 'header-elements-contact-email', array(
	'caption' => array(
		'name'    => _x( 'Email', 'theme-options', 'the7mk2' ),
		'divider' => false,
		'class'   => 'wide',
	),
) );

$options[] = array(
	'name'                => _x( 'Skype', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-skype-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'basic-header-element', 'header-elements-contact-skype', array(
	'caption' => array(
		'name'    => _x( 'Skype', 'theme-options', 'the7mk2' ),
		'divider' => false,
		'class'   => 'wide',
	),
) );

$options[] = array(
	'name'                => _x( 'Working hours', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-working_hours-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'basic-header-element', 'header-elements-contact-clock', array(
	'caption' => array(
		'name'    => _x( 'Working hours', 'theme-options', 'the7mk2' ),
		'divider' => false,
		'class'   => 'wide',
	),
) );

$options[] = array(
	'name'                => _x( 'Login', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-login-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

$options['header-elements-login-caption'] = array(
	'id'   => 'header-elements-login-caption',
	'name' => _x( 'Login caption', 'theme-options', 'the7mk2' ),
	'type' => 'text',
	'std'  => _x( 'Login', 'theme-options', 'the7mk2' ),
);

$options['header-elements-logout-caption'] = array(
	'id'   => 'header-elements-logout-caption',
	'name' => _x( 'Logout caption', 'theme-options', 'the7mk2' ),
	'type' => 'text',
	'std'  => _x( 'Logout', 'theme-options', 'the7mk2' ),
);

$options['header-elements-login-icon'] = array(
	'id'   => 'header-elements-login-icon',
	'name' => _x( 'Show graphic icon', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => '1',
);

$options['header-elements-login-use_logout_url'] = array(
	'id'   => 'header-elements-login-use_logout_url',
	'name' => _x( 'Use custom logout link', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => '',
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-login' );

$options[] = array( 'type' => 'divider' );

$options['header-elements-login-url'] = array(
	'id'   => 'header-elements-login-url',
	'name' => _x( 'Link', 'theme-options', 'the7mk2' ),
	'type' => 'text',
	'std'  => '',
);

$options['header-elements-login-logout_url'] = array(
	'id'         => 'header-elements-login-logout_url',
	'name'       => _x( 'Logout link', 'theme-options', 'the7mk2' ),
	'type'       => 'text',
	'std'        => '',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-elements-login-use_logout_url',
				'operator' => '==',
				'value'    => '1',
			),
		),
	),
);

$options[] = array(
	'name'                => _x( 'Text 1', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-text_area-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-text' );

$options['header-elements-text'] = array(
	'id'       => 'header-elements-text',
	'type'     => 'textarea',
	'std'      => false,
	'divider'  => 'top',
	'sanitize' => 'without_sanitize',
);

$options[] = array(
	'name'                => _x( 'Text 2', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-text2_area-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-text-2' );

$options['header-elements-text-2'] = array(
	'id'       => 'header-elements-text-2',
	'type'     => 'textarea',
	'std'      => false,
	'divider'  => 'top',
	'sanitize' => 'without_sanitize',
);

$options[] = array(
	'name'                => _x( 'Text 3', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-text3_area-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-text-3' );

$options['header-elements-text-3'] = array(
	'id'       => 'header-elements-text-3',
	'type'     => 'textarea',
	'std'      => false,
	'divider'  => 'top',
	'sanitize' => 'without_sanitize',
);

$options[] = array(
	'name'                => _x( 'Menu 1', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-custom_menu-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-menu' );

$options['header-elements-menu-style']               = array(
	'id'      => 'header-elements-menu-style',
	'name'    => _x( 'Desktop menu style', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'dropdown',
	'options' => array(
		'dropdown' => _x( 'Dropdown', 'theme-options', 'the7mk2' ),
		'list'     => _x( 'List', 'theme-options', 'the7mk2' ),
	),
);
$options['header-elements-menu-style-first-switch']  = array(
	'id'      => 'header-elements-menu-style-first-switch',
	'name'    => _x( 'First header switch menu style', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'dropdown',
	'options' => array(
		'dropdown' => _x( 'Dropdown', 'theme-options', 'the7mk2' ),
		'list'     => _x( 'List', 'theme-options', 'the7mk2' ),
	),
);
$options['header-elements-menu-style-second-switch'] = array(
	'id'      => 'header-elements-menu-style-second-switch',
	'name'    => _x( 'Second header switch menu style', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'dropdown',
	'options' => array(
		'dropdown' => _x( 'Dropdown', 'theme-options', 'the7mk2' ),
		'list'     => _x( 'List', 'theme-options', 'the7mk2' ),
	),
);

$options[] = array(
	'name'                => _x( 'Menu 2', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-menu2-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-menu2' );

$options['header-elements-menu2-style']               = array(
	'id'      => 'header-elements-menu2-style',
	'name'    => _x( 'Desktop menu style', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'dropdown',
	'options' => array(
		'dropdown' => _x( 'Dropdown', 'theme-options', 'the7mk2' ),
		'list'     => _x( 'List', 'theme-options', 'the7mk2' ),
	),
);
$options['header-elements-menu2-style-first-switch']  = array(
	'id'      => 'header-elements-menu2-style-first-switch',
	'name'    => _x( 'First header switch menu style', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'dropdown',
	'options' => array(
		'dropdown' => _x( 'Dropdown', 'theme-options', 'the7mk2' ),
		'list'     => _x( 'List', 'theme-options', 'the7mk2' ),
	),
);
$options['header-elements-menu2-style-second-switch'] = array(
	'id'      => 'header-elements-menu2-style-second-switch',
	'name'    => _x( 'Second header switch menu style', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'dropdown',
	'options' => array(
		'dropdown' => _x( 'Dropdown', 'theme-options', 'the7mk2' ),
		'list'     => _x( 'List', 'theme-options', 'the7mk2' ),
	),
);

$options[] = array(
	'name'                => _x( 'Social icons', 'theme-options', 'the7mk2' ),
	'id'                  => 'microwidgets-social_icons-block',
	'type'                => 'block',
	'class'               => 'block-disabled',
	'exclude_from_search' => true,
);

presscore_options_apply_template( $options, 'header-element-mobile-layout', 'header-elements-soc_icons' );

$options[] = array( 'type' => 'divider' );

$options['header-elements-soc_icons-bg-size'] = array(
	'name'  => _x( 'Icons background size', 'theme-options', 'the7mk2' ),
	'id'    => 'header-elements-soc_icons-bg-size',
	'std'   => '26px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-elements-soc_icons-size'] = array(
	'name'  => _x( 'Icons size', 'theme-options', 'the7mk2' ),
	'id'    => 'header-elements-soc_icons-size',
	'std'   => '16px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-elements-soc_icons_border_width'] = array(
	'name'  => _x( 'Icons border width', 'theme-options', 'the7mk2' ),
	'id'    => 'header-elements-soc_icons_border_width',
	'std'   => '1px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-elements-soc_icons_border_radius'] = array(
	'name'  => _x( 'Icons border radius', 'theme-options', 'the7mk2' ),
	'id'    => 'header-elements-soc_icons_border_radius',
	'std'   => '100px',
	'type'  => 'number',
	'units' => 'px',
);
$options[]                                          = array(
	'name' => _x( 'Icons margins', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

$options['header-elements-soc_icons_gap'] = array(
	'id'       => 'header-elements-soc_icons_gap',
	'name'     => _x( 'Gap between icons', 'theme-options', 'the7mk2' ),
	"std"      => '4px',
	"type"     => 'text',
	"sanitize" => 'dimensions',
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( 'Normal', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-elements-soc_icons-color'] = array(
	'id'       => 'header-elements-soc_icons-color',
	'name'     => _x( 'Icons color', 'theme-options', 'the7mk2' ),
	'type'     => 'color',
	'std'      => '#fff',
	'sanitize' => 'empty_color',
	'desc'     => _x( 'Leave empty to use accent color', 'theme-options', 'the7mk2' ),
);

$options['header-elements-soc_icons-bg'] = array(
	'id'      => 'header-elements-soc_icons-bg',
	'name'    => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-disabled.gif',
		),
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-elements-soc_icons-bg-color'] = array(
	'name'       => _x( 'Choose color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'id'         => 'header-elements-soc_icons-bg-color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-elements-soc_icons-bg',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-elements-soc_icons-bg-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-elements-soc_icons-bg-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-elements-soc_icons-bg',
		'operator' => '==',
		'value'    => 'gradient',
	),
);
$options['header-elements-soc_icons-border']      = array(
	'id'      => 'header-elements-soc_icons-border',
	'name'    => _x( 'Border color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'disabled',
	'options' => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-disabled.gif',
		),
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
	),
);

$options['header-elements-soc_icons-border-color'] = array(
	'id'         => 'header-elements-soc_icons-border-color',
	'name'       => _x( 'Choose color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-elements-soc_icons-border',
				'operator' => '==',
				'value'    => 'color',
			),
		),
	),
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( 'Hover', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-elements-soc_icons-hover-color'] = array(
	'id'       => 'header-elements-soc_icons-hover-color',
	'name'     => _x( 'Icons hover', 'theme-options', 'the7mk2' ),
	'std'      => '#fff',
	'type'     => 'color',
	'sanitize' => 'empty_color',
	'desc'     => _x( 'Leave empty to use accent color', 'theme-options', 'the7mk2' ),
);

$options['header-elements-soc_icons-hover-bg'] = array(
	'id'      => 'header-elements-soc_icons-hover-bg',
	'name'    => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-disabled.gif',
		),
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-elements-soc_icons-hover-bg-color'] = array(
	'name'       => _x( 'Choose color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'id'         => 'header-elements-soc_icons-hover-bg-color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-elements-soc_icons-hover-bg',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-elements-soc_icons-hover-bg-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-elements-soc_icons-hover-bg-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-elements-soc_icons-hover-bg',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-elements-soc_icons-hover-border'] = array(
	'id'      => 'header-elements-soc_icons-hover-border',
	'name'    => _x( 'Border color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'disabled',
	'options' => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-disabled.gif',
		),
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
	),
);

$options['header-elements-soc_icons-hover-border-color'] = array(
	'id'         => 'header-elements-soc_icons-hover-border-color',
	'name'       => _x( 'Choose color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-elements-soc_icons-hover-border',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options[] = array( 'type' => 'divider' );

$options['header-elements-soc_icons'] = array(
	'id'      => 'header-elements-soc_icons',
	'type'    => 'fields_generator',
	'std'     => array(
		array( 'icon' => '', 'url' => '' ),
	),
	'options' => array(
		'fields' => array(
			'icon' => array(
				'type'        => 'select',
				'class'       => 'of_fields_gen_title',
				'description' => _x( 'Icon', 'theme-options', 'the7mk2' ),
				'wrap'        => '<label>%2$s%1$s</label>',
				'desc_wrap'   => '%2$s',
				'options'     => presscore_get_social_icons_data(),
			),
			'url'  => array(
				'type'        => 'text',
				'description' => _x( 'Url', 'theme-options', 'the7mk2' ),
				'wrap'        => '<label>%2$s%1$s</label>',
				'desc_wrap'   => '%2$s',
			),
		),
	),
);


$options[] = array( 'name' => _x( 'Top bar', 'theme-options', 'the7mk2' ), 'type' => 'heading', 'id' => 'topbar' );

$options[] = array( 'name' => _x( 'Top bar background', 'theme-options', 'the7mk2' ), 'type' => 'block' );

// if not disabled
$options['top-bar-height'] = array(
	'id'    => 'top-bar-height',
	'name'  => _x( 'Top bar height', 'theme-options', 'the7mk2' ),
	'std'   => '0px',
	'type'  => 'number',
	'units' => 'px',
);

$options['top_bar-padding'] = array(
	'name'   => _x( 'Top bar paddings', 'theme-options', 'the7mk2' ),
	'id'     => 'top_bar-padding',
	'type'   => 'spacing',
	'std'    => '0px 0px 0px',
	'units'  => 'px',
	'fields' => array(
		_x( 'Top', 'theme-options', 'the7mk2' ),
		_x( 'Bottom', 'theme-options', 'the7mk2' ),
		_x( 'Side', 'theme-options', 'the7mk2' ),
	),
);

$options['top_bar-bg-color'] = array(
	'id'   => 'top_bar-bg-color',
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#ffffff',
);

$options['top_bar-bg-image'] = array(
	'id'   => 'top_bar-bg-image',
	'name' => _x( 'Add background image', 'theme-options', 'the7mk2' ),
	'type' => 'background_img',
	'std'  => array(
		'image'      => '',
		'repeat'     => 'repeat',
		'position_x' => 'center',
		'position_y' => 'center',
	),
);

$options['top_bar-bg-style']                   = array(
	'id'      => 'top_bar-bg-style',
	'name'    => _x( 'Decoration', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'content_line',
	'options' => array(
		'disabled'       => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/topbar-bg-style-disabled.gif',
		),
		'content_line'   => array(
			'title' => _x( 'Content-width line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/topbar-bg-style-contentline.gif',
		),
		'fullwidth_line' => array(
			'title' => _x( 'Full-width line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/topbar-bg-style-fullwidthline.gif',
		),
	),
	'class'   => 'small',
);
$options['top_bar-line-color']                 = array(
	'id'         => 'top_bar-line-color',
	'name'       => _x( 'Line color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(

			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'content_line',
			),
		),
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'fullwidth_line',
			),
		),
	),
);
$options['top_bar-line_size']                  = array(
	'id'         => 'top_bar-line_size',
	'name'       => _x( 'Line height', 'theme-options', 'the7mk2' ),
	'std'        => '1px',
	'type'       => 'number',
	'units'      => 'px',
	'dependency' => array(
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'content_line',
			),
		),
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'fullwidth_line',
			),
		),
	),
);
$options['top_bar-line_style']                 = array(
	'name'       => _x( 'Line style', "theme-options", 'the7mk2' ),
	"id"         => 'top_bar-line_style',
	'type'       => 'select',
	"class"      => "middle",
	"std"        => "solid",
	'options'    => array(
		'solid'  => __( 'Solid' ),
		'dotted' => __( 'Dotted' ),
		'dashed' => __( 'Dashed' ),
		'double' => __( 'Double' ),
	),
	'dependency' => array(
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'content_line',
			),
		),
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'fullwidth_line',
			),
		),
	),
);
$options['top_bar-line-in-transparent-header'] = array(
	'id'         => 'top_bar-line-in-transparent-header',
	'name'       => _x( 'Show line in transparent headers ', 'theme-options', 'the7mk2' ),
	'type'       => 'checkbox',
	'std'        => 1,
	'dependency' => array(
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'content_line',
			),
		),
		array(
			array(
				'field'    => 'top_bar-bg-style',
				'operator' => '==',
				'value'    => 'fullwidth_line',
			),
		),
	),
);


$options[] = array( 'name' => _x( 'Header', 'theme-options', 'the7mk2' ), 'type' => 'heading', 'id' => 'header' );

$options[] = array( 'name' => _x( 'Navigation area appearance', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['header-bg-color'] = array(
	'id'   => 'header-bg-color',
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#000000',
);

$options['header-bg-image'] = array(
	'id'   => 'header-bg-image',
	'name' => _x( 'Add background image', 'theme-options', 'the7mk2' ),
	'type' => 'background_img',
	'std'  => array(
		'image'      => '',
		'repeat'     => 'repeat',
		'position_x' => 'center',
		'position_y' => 'center',
	),
);

$options['header-bg-is_fullscreen'] = array(
	'id'   => 'header-bg-is_fullscreen',
	'name' => _x( 'Fullscreen ', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 0,
);

$options['header-bg-is_fixed'] = array(
	'id'   => 'header-bg-is_fixed',
	'name' => _x( 'Fixed background ', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 0,
);


$options['header-decoration'] = array(
	'id'         => 'header-decoration',
	'name'       => _x( 'Decoration', 'theme-options', 'the7mk2' ),
	'type'       => 'images',
	'std'        => 'shadow',
	'options'    => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-decoration-disabled.gif',
		),
		'shadow'   => array(
			'title' => _x( 'Shadow', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-decoration-shadow.gif',
		),
		'line'     => array(
			'title' => _x( 'Line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-decoration-line.gif',
		),
	),
	'class'      => 'small',
	'dependency' => array(
		array(
			array(
				'field'    => 'header_navigation',
				'operator' => '!=',
				'value'    => 'overlay',
			),
		),
	),
);

$options['header-decoration-color'] = array(
	'id'         => 'header-decoration-color',
	'name'       => _x( 'Line color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-decoration',
				'operator' => '==',
				'value'    => 'line',
			),
		),
	),
);

$options[] = array(
	'name'  => _x( 'Menu background for "Classic" header', 'theme-options', 'the7mk2' ),
	'class' => 'header-classic-menu-bg-block',
	'type'  => 'block',
);

$options['header-classic-menu-bg-style'] = array(
	'id'      => 'header-classic-menu-bg-style',
	'name'    => _x( 'Menu background / line', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'disabled',
	'options' => array(
		'disabled'       => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-bg-style-disabled.gif',
		),
		'content_line'   => array(
			'title' => _x( 'Content-width line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-bg-style-contentline.gif',
		),
		'fullwidth_line' => array(
			'title' => _x( 'Full-width line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-bg-style-fullwidthline.gif',
		),
		'solid'          => array(
			'title' => _x( 'Background', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-classic-menu-bg-style-solid.gif',
		),
	),
	'class'   => 'small',
);

$options['header-classic-menu-bg-color'] = array(
	'id'         => 'header-classic-menu-bg-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-classic-menu-bg-style',
				'operator' => '!=',
				'value'    => 'disabled',
			),
		),
	),
);


$options[] = array(
	'name'  => _x( 'Line appearance', 'theme-options', 'the7mk2' ),
	'class' => 'header-mixed-line-block',
	'type'  => 'block',
);


$options['header-mixed-bg-color'] = array(
	'id'   => 'header-mixed-bg-color',
	'name' => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#000000',
);

$options['header-mixed-decoration'] = array(
	'id'      => 'header-mixed-decoration',
	'name'    => _x( 'Decoration', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'shadow',
	'options' => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mixed-decoration-disabled.gif',
		),
		'shadow'   => array(
			'title' => _x( 'Shadow', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mixed-decoration-shadow.gif',
		),
		'line'     => array(
			'title' => _x( 'Line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mixed-decoration-line.gif',
		),
	),
	'class'   => 'small',
);

$options['header-mixed-decoration-color'] = array(
	'id'         => 'header-mixed-decoration-color',
	'name'       => _x( 'Line color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-mixed-decoration',
				'operator' => '==',
				'value'    => 'line',
			),
		),
	),
);

$options[] = array(
	'name'  => _x( 'Menu button appearance', 'theme-options', 'the7mk2' ),
	'class' => 'header-hamburger-block',
	'type'  => 'block',
);

$options['header-menu_icon-size'] = array(
	'id'      => 'header-menu_icon-size',
	'name'    => _x( 'Icon size', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'small',
	'options' => array(
		'small'  => _x( 'Small', 'theme-options', 'the7mk2' ),
		'medium' => _x( 'Medium', 'theme-options', 'the7mk2' ),
		'large'  => _x( 'Large', 'theme-options', 'the7mk2' ),
	),
);

$options['header-menu_icon-bg-size'] = array(
	'id'    => 'header-menu_icon-bg-size',
	'name'  => _x( 'Background size', 'theme-options', 'the7mk2' ),
	'std'   => '54px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-menu_icon-bg-border-radius'] = array(
	'id'    => 'header-menu_icon-bg-border-radius',
	'name'  => _x( 'Background border radius', 'theme-options', 'the7mk2' ),
	'std'   => '0px',
	'type'  => 'number',
	'units' => 'px',
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( '"Open menu" button', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu_icon-color'] = array(
	'id'   => 'header-menu_icon-color',
	'name' => _x( 'Icon color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#ffffff',
);

$options['header-menu_icon-bg-color'] = array(
	'id'   => 'header-menu_icon-bg-color',
	'name' => _x( 'Background', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#ffffff',
);

$options['header-menu_icon-margin'] = array(
	'id'   => 'header-menu_icon-margin',
	'name' => _x( 'Margin', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( '"Close menu" button', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu_icon-hover-color'] = array(
	'id'   => 'header-menu_icon-hover-color',
	'name' => _x( 'Icon color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#ffffff',
);

$options['header-menu_icon-hover-bg-color'] = array(
	'id'   => 'header-menu_icon-hover-bg-color',
	'name' => _x( 'Background', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#ffffff',
);
$options['header-menu_close_icon-margin']   = array(
	'id'   => 'header-menu_close_icon-margin',
	'name' => _x( 'Margin', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);


$options[] = array(
	'name'  => _x( 'Website overlay on navigation opening', 'theme-options', 'the7mk2' ),
	'class' => 'header-overlay-block',
	'type'  => 'block',
);

$options['header-slide_out-overlay-bg-color-style'] = array(
	'id'      => 'header-slide_out-overlay-bg-color-style',
	'name'    => _x( 'Color', 'theme options', 'the7mk2' ),
	'desc'    => 'Of outline or background',
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-slide_out-overlay-bg-color'] = array(
	'id'         => 'header-slide_out-overlay-bg-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-slide_out-overlay-bg-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-slide_out-overlay-bg-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-slide_out-overlay-bg-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-slide_out-overlay-bg-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-slide_out-overlay-bg-opacity'] = array(
	'id'         => 'header-slide_out-overlay-bg-opacity',
	'name'       => _x( 'Opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 50,
	'dependency' => array(
		'field'    => 'header-slide_out-overlay-bg-color-style',
		'operator' => '==',
		'value'    => 'accent',
	),
);


$options[] = array( 'name' => _x( 'Menu', 'theme-options', 'the7mk2' ), 'type' => 'heading', 'id' => 'menu' );

$options[] = array( 'name' => _x( 'Menu font', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[] = array( 'name' => _x( 'Menu', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-font-family'] = array(
	'id'    => 'header-menu-font-family',
	'name'  => _x( 'Font', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Open Sans',
	'fonts' => 'all',
);

$options['header-menu-font-size'] = array(
	'id'       => 'header-menu-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
	'sanitize' => 'font_size',
);

$options['header-menu-font-is_capitalized'] = array(
	'id'   => 'header-menu-font-is_capitalized',
	'name' => _x( 'Capitalize ', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 0,
);

$options['header-menu-icon-size'] = array(
	'id'       => 'header-menu-icon-size',
	'name'     => _x( 'Icons size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
	'sanitize' => 'font_size',
);

$options['header-menu-show_next_lvl_icons'] = array(
	'id'   => 'header-menu-show_next_lvl_icons',
	'name' => _x( 'Show next level indicator arrows', 'theme-options', 'the7mk2' ),
	'desc' => _x( 'Icons are always visible if parent menu items are clickable (for side and overlay headers).', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 1,
);


$options['header-menu-submenu-parent_is_clickable'] = array(
	'id'   => 'header-menu-submenu-parent_is_clickable',
	'name' => _x( 'Make parent menu items clickable', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 1,
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( 'Menu subtitles', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-subtitle-font-family'] = array(
	'id'    => 'header-menu-subtitle-font-family',
	'name'  => _x( 'Font', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Arial',
	'fonts' => 'all',
);

$options['header-menu-subtitle-font-size'] = array(
	'id'       => 'header-menu-subtitle-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'std'      => 10,
	'options'  => array( 'min' => 9, 'max' => 120 ),
	'sanitize' => 'font_size',
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( 'Font colors', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-font-color'] = array(
	'id'   => 'header-menu-font-color',
	'name' => _x( 'Normal', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#ffffff',
);

$options['header-menu-hover-font-color-style'] = array(
	'id'      => 'header-menu-hover-font-color-style',
	'name'    => _x( 'Hover', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-hover-font-color'] = array(
	'id'         => 'header-menu-hover-font-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-hover-font-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-hover-font-gradient'] = array(
	'name'        => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'        => 'gradient_picker',
	'id'          => 'header-menu-hover-font-gradient',
	'std'         => '90deg|#ffffff 30%|#000000 100%',
	'fixed_angle' => '90deg',
	'dependency'  => array(
		'field'    => 'header-menu-hover-font-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-active_item-font-color-style'] = array(
	'id'      => 'header-menu-active_item-font-color-style',
	'name'    => _x( 'Active', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-active_item-font-color'] = array(
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'color',
	'id'         => 'header-menu-active_item-font-color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-active_item-font-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-active_item-font-gradient'] = array(
	'name'        => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'        => 'gradient_picker',
	'id'          => 'header-menu-active_item-font-gradient',
	'std'         => '90deg|#ffffff 30%|#000000 100%',
	'fixed_angle' => '90deg',
	'dependency'  => array(
		'field'    => 'header-menu-active_item-font-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Menu items margin & padding', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-item-padding'] = array(
	'id'   => 'header-menu-item-padding',
	'name' => _x( 'Padding', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '5px 10px 5px 10px',
);

$options['header-menu-item-margin'] = array(
	'id'   => 'header-menu-item-margin',
	'name' => _x( 'Margin', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array( 'type' => 'js_hide_begin', 'class' => 'menu-top-headers-indention', 'hidden_by_default' => false );

$options['header-menu-item-surround_margins-style'] = array(
	'id'      => 'header-menu-item-surround_margins-style',
	'name'    => _x( 'Side margin for first and last menu items', 'theme-options', 'the7mk2' ),
	'desc'    => _x( 'Works for top headers only', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'regular',
	'options' => array(
		'regular'  => array(
			'title' => _x( 'Regular', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-item-surroundmargins-style-regular.gif',
		),
		'double'   => array(
			'title' => _x( 'Double', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-item-surroundmargins-style-double.gif',
		),
		'custom'   => array(
			'title' => _x( 'Custom', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-item-surroundmargins-style-custom.gif',
		),
		'disabled' => array(
			'title' => _x( 'Remove', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-item-surroundmargins-style-disabled.gif',
		),
	),
	'style'   => 'vertical',
);

$options['header-menu-item-surround_margins-custom-margin'] = array(
	'name'       => _x( 'Custom margin', 'theme-options', 'the7mk2' ),
	'type'       => 'number',
	'id'         => 'header-menu-item-surround_margins-custom-margin',
	'std'        => '0px',
	'units'      => 'px',
	'dependency' => array(
		'field'    => 'header-menu-item-surround_margins-style',
		'operator' => '==',
		'value'    => 'custom',
	),
);

$options['header-menu-decoration-other-links-is_justified'] = array(
	'id'      => 'header-menu-decoration-other-links-is_justified',
	'name'    => _x( 'Full height & full width links', 'theme-options', 'the7mk2' ),
	'desc'    => _x( 'Works for top headers only', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-links-isjustified-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-links-isjustified-disabled.gif',
		),
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array( 'name' => _x( 'Dividers', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['header-menu-show_dividers'] = array(
	'id'        => 'header-menu-show_dividers',
	'name'      => _x( 'Dividers', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-showdividers-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-showdividers-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-menu-dividers-height-style'] = array(
	'id'      => 'header-menu-dividers-height-style',
	'name'    => _x( 'Divider height (width)', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'full',
	'options' => array(
		'full'   => array(
			'title' => _x( '100%', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-dividers-height-style-full.gif',
		),
		'custom' => array(
			'title' => _x( 'Custom (in px)', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-showdividers-enabled.gif',
		),
	),
);

$options['header-menu-dividers-height'] = array(
	'id'         => 'header-menu-dividers-height',
	'name'       => _x( 'Height', 'theme-options', 'the7mk2' ),
	'std'        => '20px',
	'type'       => 'number',
	'units'      => 'px',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-menu-dividers-height-style',
				'operator' => '==',
				'value'    => 'custom',
			),
		),
	),
);

$options['header-menu-dividers-surround'] = array(
	'id'      => 'header-menu-dividers-surround',
	'name'    => _x( 'First & last dividers', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => '0',
	'options' => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-showdividers-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-dividers-surround-disabled.gif',
		),
	),
);

$options['header-menu-dividers-color'] = array(
	'id'   => 'header-menu-dividers-color',
	'name' => _x( 'Dividers color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => 'rgba(153,153,153,0.3)',
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name'  => _x( 'Decoration styles for horizontal headers', 'theme-options', 'the7mk2' ),
	'class' => 'menu-horizontal-decoration-block',
	'type'  => 'block',
);

$options['header-menu-decoration-style'] = array(
	'id'        => 'header-menu-decoration-style',
	'name'      => _x( 'Decoration', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'class'     => 'small',
	'std'       => 'none',
	'options'   => array(
		'none'      => array(
			'title' => _x( 'None', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-style-none.gif',
		),
		'underline' => array(
			'title' => _x( 'Underline', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-style-underline.gif',
		),
		'other'     => array(
			'title' => _x( 'Background / outline / line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-style-other.gif',
		),
	),
	'show_hide' => array(
		'underline' => 'decoration-underline',
		'other'     => 'decoration-other',
	),
);

$options[] = array( 'type' => 'js_hide_begin', 'class' => 'header-menu-decoration-style decoration-underline' );

$options['header-menu-decoration-underline-direction'] = array(
	'id'      => 'header-menu-decoration-underline-direction',
	'name'    => _x( 'Direction', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'divider' => 'top',
	'std'     => 'left_to_right',
	'options' => array(
		'left_to_right' => array(
			'title' => _x( 'Left to right', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-underline-direction-lefttoright.gif',
		),
		'from_center'   => array(
			'title' => _x( 'From center', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-underline-direction-fromcenter.gif',
		),
		'upwards'       => array(
			'title' => _x( 'Upwards', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-underline-direction-upwards.gif',
		),
		'downwards'     => array(
			'title' => _x( 'Downwards', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-underline-direction-downwards.gif',
		),
	),
);

$options['header-menu-decoration-underline-color-style'] = array(
	'id'      => 'header-menu-decoration-underline-color-style',
	'name'    => _x( 'Underline color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'divider' => 'top',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-decoration-underline-color'] = array(
	'id'         => 'header-menu-decoration-underline-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-decoration-underline-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-decoration-underline-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-decoration-underline-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-menu-decoration-underline-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-decoration-underline-line_size'] = array(
	'id'    => 'header-menu-decoration-underline-line_size',
	'name'  => _x( 'Line size', 'theme-options', 'the7mk2' ),
	'std'   => '2px',
	'type'  => 'number',
	'units' => 'px',
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array( 'type' => 'js_hide_begin', 'class' => 'header-menu-decoration-style decoration-other' );

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Hover', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-decoration-other-hover-style'] = array(
	'id'      => 'header-menu-decoration-other-hover-style',
	'name'    => _x( 'Hover style', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'outline',
	'options' => array(
		'outline'    => array(
			'title' => _x( 'Outline', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-hover-style-outline.gif',
		),
		'background' => array(
			'title' => _x( 'Background', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-hover-style-background.gif',
		),
	),
);

$options['header-menu-decoration-other-hover-color-style'] = array(
	'id'      => 'header-menu-decoration-other-hover-color-style',
	'name'    => _x( 'Hover color', 'theme-options', 'the7mk2' ),
	'desc'    => 'Of outline or background',
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-decoration-other-hover-color'] = array(
	'id'         => 'header-menu-decoration-other-hover-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-hover-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-decoration-other-hover-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-decoration-other-hover-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-hover-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-decoration-other-hover-opacity'] = array(
	'id'         => 'header-menu-decoration-other-opacity',
	'name'       => _x( 'Hover opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 100,
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-hover-color-style',
		'operator' => '==',
		'value'    => 'accent',
	),
);

$options['header-menu-decoration-other-hover-line'] = array(
	'id'        => 'header-menu-decoration-other-hover-line',
	'name'      => _x( 'Hover line', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-hover-line-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-hover-line-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-menu-decoration-other-hover-line-color-style'] = array(
	'id'      => 'header-menu-decoration-other-hover-line-color-style',
	'name'    => _x( 'Hover line color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-decoration-other-hover-line-color'] = array(
	'id'         => 'header-menu-decoration-other-hover-line-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-hover-line-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-decoration-other-hover-line-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-decoration-other-hover-line-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-hover-line-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-decoration-other-hover-line-opacity'] = array(
	'id'         => 'header-menu-decoration-other-hover-line-opacity',
	'name'       => _x( 'Hover line opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 100,
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-hover-line-color-style',
		'operator' => '==',
		'value'    => 'accent',
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Active', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-decoration-other-active-style'] = array(
	'id'      => 'header-menu-decoration-other-active-style',
	'name'    => _x( 'Active style', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'outline',
	'options' => array(
		'outline'    => array(
			'title' => _x( 'Outline', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-active-style-outline.gif',
		),
		'background' => array(
			'title' => _x( 'Background', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-active-style-background.gif',
		),
	),
);

$options['header-menu-decoration-other-active-color-style'] = array(
	'id'      => 'header-menu-decoration-other-active-color-style',
	'name'    => _x( 'Active color', 'theme-options', 'the7mk2' ),
	'desc'    => 'Of outline or background',
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-decoration-other-active-color'] = array(
	'id'         => 'header-menu-decoration-other-active-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-active-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-decoration-other-active-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-decoration-other-active-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-active-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-decoration-other-active-opacity'] = array(
	'id'         => 'header-menu-decoration-other-active-opacity',
	'name'       => _x( 'Active opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 100,
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-active-color-style',
		'operator' => '==',
		'value'    => 'accent',
	),
);

$options['header-menu-decoration-other-active-line'] = array(
	'id'        => 'header-menu-decoration-other-active-line',
	'name'      => _x( 'Active line', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-active-line-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-active-line-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-menu-decoration-other-active-line-color-style'] = array(
	'id'      => 'header-menu-decoration-other-active-line-color-style',
	'name'    => _x( 'Active line color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-decoration-other-active-line-color'] = array(
	'id'         => 'header-menu-decoration-other-active-line-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-active-line-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-decoration-other-active-line-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-decoration-other-active-line-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-active-line-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-decoration-other-active-line-opacity'] = array(
	'id'         => 'header-menu-decoration-other-active-line-opacity',
	'name'       => _x( 'Active line opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 100,
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-active-line-color-style',
		'operator' => '==',
		'value'    => 'accent',
	),
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Animation', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-decoration-other-click_decor'] = array(
	'id'        => 'header-menu-decoration-other-click_decor',
	'name'      => _x( 'Animation on click', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '0',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-clickdecor-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-clickdecor-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-menu-decoration-other-click_decor-color-style'] = array(
	'id'      => 'header-menu-decoration-other-click_decor-color-style',
	'name'    => _x( 'Animation color', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-decoration-other-click_decor-color'] = array(
	'id'         => 'header-menu-decoration-other-click_decor-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-click_decor-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-decoration-other-click_decor-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-decoration-other-click_decor-gradient',
	'std'        => '135deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-click_decor-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-decoration-other-click_decor-opacity'] = array(
	'id'         => 'header-menu-decoration-other-click_decor-opacity',
	'name'       => _x( 'Animation opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 100,
	'dependency' => array(
		'field'    => 'header-menu-decoration-other-click_decor-color-style',
		'operator' => '==',
		'value'    => 'accent',
	),
);


$options[] = array( 'type' => 'js_hide_end' );

$options['header-menu-decoration-other-border-radius'] = array(
	'id'      => 'header-menu-decoration-other-border-radius',
	'name'    => _x( 'Border radius', 'theme-options', 'the7mk2' ),
	'type'    => 'slider',
	'divider' => 'top',
	'std'     => 0,
	'options' => array( 'min' => 0, 'max' => 120 ),
);

$options['header-menu-decoration-other-line_size'] = array(
	'id'      => 'header-menu-decoration-other-line_size',
	'name'    => _x( 'Line size', 'theme-options', 'the7mk2' ),
	'std'     => '2px',
	'type'    => 'number',
	'units'   => 'px',
	'divider' => 'top',
);

$options[] = array( 'type' => 'js_hide_end' );

$options[] = array( 'name' => _x( 'Submenu', 'theme-options', 'the7mk2' ), 'type' => 'heading', 'id' => 'submenu' );

$options[] = array( 'name' => _x( 'Submenu font', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[] = array( 'name' => _x( 'Submenu', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-submenu-font-family'] = array(
	'id'    => 'header-menu-submenu-font-family',
	'name'  => _x( 'Font', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Open Sans',
	'fonts' => 'all',
);

$options['header-menu-submenu-font-size'] = array(
	'id'       => 'header-menu-submenu-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
	'sanitize' => 'font_size',
);

$options['header-menu-submenu-font-is_uppercase'] = array(
	'id'   => 'header-menu-submenu-font-is_uppercase',
	'name' => _x( 'Capitalize', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 0,
);

$options['header-menu-submenu-icon-size'] = array(
	'id'      => 'header-menu-submenu-icon-size',
	'name'    => _x( 'Icon size', 'theme-options', 'the7mk2' ),
	'type'    => 'slider',
	'std'     => 14,
	'options' => array( 'min' => 8, 'max' => 50 ),
);

$options['header-menu-submenu-show_next_lvl_icons'] = array(
	'id'   => 'header-menu-submenu-show_next_lvl_icons',
	'name' => _x( 'Show next level indicator arrows', 'theme-options', 'the7mk2' ),
	'desc' => _x( 'Icons are always visible if parent menu items are clickable (for side and overlay headers).', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'std'  => 1,
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( 'Submenu subtitles', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-submenu-subtitle-font-family'] = array(
	'id'    => 'header-menu-submenu-subtitle-font-family',
	'name'  => _x( 'Font', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Arial',
	'fonts' => 'all',
);

$options['header-menu-submenu-subtitle-font-size'] = array(
	'id'       => 'header-menu-submenu-subtitle-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'std'      => 10,
	'options'  => array( 'min' => 9, 'max' => 120 ),
	'sanitize' => 'font_size',
);

$options[] = array( 'type' => 'divider' );
$options[] = array( 'name' => _x( 'Font colors', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-submenu-font-color'] = array(
	'id'   => 'header-menu-submenu-font-color',
	'name' => _x( 'Normal', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#ffffff',
);

$options['header-menu-submenu-hover-font-color-style'] = array(
	'id'      => 'header-menu-submenu-hover-font-color-style',
	'name'    => _x( 'Hover', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-submenu-hover-font-color'] = array(
	'id'         => 'header-menu-submenu-hover-font-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-submenu-hover-font-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-submenu-hover-font-gradient'] = array(
	'name'        => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'        => 'gradient_picker',
	'id'          => 'header-menu-submenu-hover-font-gradient',
	'std'         => '90deg|#ffffff 30%|#000000 100%',
	'fixed_angle' => '90deg',
	'dependency'  => array(
		'field'    => 'header-menu-submenu-hover-font-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options['header-menu-submenu-active-font-color-style'] = array(
	'id'      => 'header-menu-submenu-active-font-color-style',
	'name'    => _x( 'Active', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-menu-submenu-active-font-color'] = array(
	'id'         => 'header-menu-submenu-active-font-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-menu-submenu-active-font-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-menu-submenu-active-font-gradient'] = array(
	'name'        => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'        => 'gradient_picker',
	'id'          => 'header-menu-submenu-active-font-gradient',
	'std'         => '90deg|#ffffff 30%|#000000 100%',
	'fixed_angle' => '90deg',
	'dependency'  => array(
		'field'    => 'header-menu-submenu-active-font-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Submenu items margin & padding', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-menu-submenu-item-padding'] = array(
	'id'   => 'header-menu-submenu-item-padding',
	'name' => _x( 'Padding', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '5px 10px 5px 10px',
);

$options['header-menu-submenu-item-margin'] = array(
	'id'   => 'header-menu-submenu-item-margin',
	'name' => _x( 'Margin', 'theme-options', 'the7mk2' ),
	'type' => 'spacing',
	'std'  => '0px 0px 0px 0px',
);

$options[] = array(
	'name'  => _x( 'Submenu for side & overlay navigation', 'theme-options', 'the7mk2' ),
	'class' => 'submenu-for-side-headers-block',
	'type'  => 'block',
);

$options['header-side-menu-submenu-position'] = array(
	'id'      => 'header-side-menu-submenu-position',
	'name'    => _x( 'Show', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'side',
	'options' => array(
		'side' => array(
			'title' => _x( 'Sideways', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-side-menu-submenu-position-side.gif',
		),
		'down' => array(
			'title' => _x( 'Downwards', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-side-menu-submenu-position-down.gif',
		),
	),
);

$options[] = array(
	'name'  => _x( 'Submenu & drop-down microwidgets background', 'theme-options', 'the7mk2' ),
	'class' => 'submenu-bg-block',
	'type'  => 'block',
);

$options['header-menu-submenu-bg-color'] = array(
	'id'   => 'header-menu-submenu-bg-color',
	'name' => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => 'rgba(255,255,255,0.3)',
);

$options['header-menu-submenu-bg-width'] = array(
	'id'       => 'header-menu-submenu-bg-width',
	'name'     => _x( 'Width', 'theme-options', 'the7mk2' ),
	'type'     => 'text',
	'std'      => '240',
	'class'    => 'mini',
	'sanitize' => 'dimensions',
);

$options['header-menu-submenu-bg-hover'] = array(
	'id'      => 'header-menu-submenu-bg-hover',
	'name'    => _x( 'Background', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'none',
	'options' => array(
		'none'                => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-style-none.gif',
		),
		'background'          => array(
			'title' => _x( 'Plain background', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-decoration-other-hover-style-background.gif',
		),
		'animated_background' => array(
			'title' => _x( 'Background with animation on click', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-menu-submenu-bg-hover-background-with-animation-on-click.gif',
		),
	),
);

$options['header-menu-submenu-hover-bg-color-style'] = array(
	'id'         => 'header-menu-submenu-hover-bg-color-style',
	'name'       => _x( 'Hover background color', 'theme-options', 'the7mk2' ),
	'type'       => 'images',
	'class'      => 'small',
	'std'        => 'accent',
	'options'    => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
	'dependency' => array(
		'field'    => 'header-menu-submenu-bg-hover',
		'operator' => 'IN',
		'value'    => array( 'background', 'animated_background' ),
	),
);

$options['header-menu-submenu-hover-bg-opacity'] = array(
	'id'         => 'header-menu-submenu-hover-bg-opacity',
	'name'       => _x( 'Opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 7,
	'dependency' => array(
		array(
			'field'    => 'header-menu-submenu-bg-hover',
			'operator' => 'IN',
			'value'    => array( 'background', 'animated_background' ),
		),
		array(
			'field'    => 'header-menu-submenu-hover-bg-color-style',
			'operator' => '==',
			'value'    => 'accent',
		),
	),
);

$options['header-menu-submenu-hover-bg-color'] = array(
	'id'         => 'header-menu-submenu-hover-bg-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			'field'    => 'header-menu-submenu-bg-hover',
			'operator' => 'IN',
			'value'    => array( 'background', 'animated_background' ),
		),
		array(
			'field'    => 'header-menu-submenu-hover-bg-color-style',
			'operator' => '==',
			'value'    => 'color',
		),
	),
);

$options['header-menu-submenu-hover-bg-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-submenu-hover-bg-gradient',
	'std'        => '90deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		array(
			'field'    => 'header-menu-submenu-bg-hover',
			'operator' => 'IN',
			'value'    => array( 'background', 'animated_background' ),
		),
		array(
			'field'    => 'header-menu-submenu-hover-bg-color-style',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
);

$options['header-menu-submenu-active-bg-color-style'] = array(
	'id'         => 'header-menu-submenu-active-bg-color-style',
	'name'       => _x( 'Active background color', 'theme-options', 'the7mk2' ),
	'type'       => 'images',
	'class'      => 'small',
	'std'        => 'accent',
	'options'    => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
	'dependency' => array(
		'field'    => 'header-menu-submenu-bg-hover',
		'operator' => 'IN',
		'value'    => array( 'background', 'animated_background' ),
	),
);

$options['header-menu-submenu-active-bg-opacity'] = array(
	'id'         => 'header-menu-submenu-active-bg-opacity',
	'name'       => _x( 'Opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'std'        => 7,
	'dependency' => array(
		array(
			'field'    => 'header-menu-submenu-bg-hover',
			'operator' => 'IN',
			'value'    => array( 'background', 'animated_background' ),
		),
		array(
			'field'    => 'header-menu-submenu-active-bg-color-style',
			'operator' => '==',
			'value'    => 'accent',
		),
	),
);

$options['header-menu-submenu-active-bg-color'] = array(
	'id'         => 'header-menu-submenu-active-bg-color',
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			'field'    => 'header-menu-submenu-bg-hover',
			'operator' => 'IN',
			'value'    => array( 'background', 'animated_background' ),
		),
		array(
			'field'    => 'header-menu-submenu-active-bg-color-style',
			'operator' => '==',
			'value'    => 'color',
		),
	),
);

$options['header-menu-submenu-active-bg-gradient'] = array(
	'name'       => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'header-menu-submenu-active-bg-gradient',
	'std'        => '90deg|#ffffff 30%|#000000 100%',
	'dependency' => array(
		array(
			'field'    => 'header-menu-submenu-bg-hover',
			'operator' => 'IN',
			'value'    => array( 'background', 'animated_background' ),
		),
		array(
			'field'    => 'header-menu-submenu-active-bg-color-style',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
);

$options[] = array(
	'name' => _x( 'Floating header', 'theme-options', 'the7mk2' ),
	'type' => 'heading',
	'id'   => 'floating-header',
);

$options[] = array(
	'name' => _x( 'Floating navigation', 'theme-options', 'the7mk2' ),
	'type' => 'block',
);

$options['header-show_floating_navigation'] = array(
	'id'        => 'header-show_floating_navigation',
	'name'      => _x( 'Floating navigation', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'class'     => 'small',
	'std'       => '1',
	'options'   => array(
		'1' => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-showfloatingnavigation-enabled.gif',
		),
		'0' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-showfloatingnavigation-disabled.gif',
		),
	),
	'show_hide' => array( '1' => true ),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options['header-floating_navigation-height'] = array(
	'id'    => 'header-floating_navigation-height',
	'name'  => _x( 'Height', 'theme-options', 'the7mk2' ),
	'std'   => '100px',
	'type'  => 'number',
	'units' => 'px',
);

$options['header-floating_navigation-bg-color'] = array(
	'id'   => 'header-floating_navigation-bg-color',
	'name' => _x( 'Background', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => 'rgba(255,255,255,0.9)',
);

$options['header-floating_navigation-decoration'] = array(
	'id'      => 'header-floating_navigation-decoration',
	'name'    => _x( 'Decoration', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'disabled',
	'options' => array(
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-floatingnavigation-decoration-disabled.gif',
		),
		'shadow'   => array(
			'title' => _x( 'Shadow', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-floatingnavigation-decoration-shadow.gif',
		),
		'line'     => array(
			'title' => _x( 'Line', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-floatingnavigation-decoration-line.gif',
		),
	),
);

$options['header-floating_navigation-decoration-color'] = array(
	'id'         => 'header-floating_navigation-decoration-color',
	'name'       => _x( 'Line color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-floating_navigation-decoration',
				'operator' => '==',
				'value'    => 'line',
			),
		),
	),
);

$options['header-floating_navigation-style'] = array(
	'id'      => 'header-floating_navigation-style',
	'name'    => _x( 'Effect', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'fade',
	'options' => array(
		'fade'   => array(
			'title' => _x( 'Fade on scroll', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-floatingnavigationstyle-fade.gif',
		),
		'slide'  => array(
			'title' => _x( 'Slide on scroll', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-floatingnavigationstyle-slide.gif',
		),
		'sticky' => array(
			'title' => _x( 'Sticky', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-floatingnavigationstyle-sticky.gif',
		),
	),
);

$options['header-floating_navigation-show_after'] = array(
	'id'         => 'header-floating_navigation-show_after',
	'name'       => _x( 'Show after scrolling', 'theme-options', 'the7mk2' ),
	'std'        => '150px',
	'type'       => 'number',
	'units'      => 'px',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-floating_navigation-style',
				'operator' => '==',
				'value'    => 'fade',
			),
		),
		array(
			array(
				'field'    => 'header-floating_navigation-style',
				'operator' => '==',
				'value'    => 'slide',
			),
		),
	),
);


$options[] = array( 'type' => 'js_hide_end' );

$options[] = array(
	'name' => _x( 'Mobile header', 'theme-options', 'the7mk2' ),
	'type' => 'heading',
	'id'   => 'mobile-header',
);

$options[] = array(
	'name' => _x( 'First header switch point (tablet)', 'theme-options', 'the7mk2' ),
	'type' => 'block',
);

presscore_options_apply_template( $options, 'mobile-header', 'header-mobile-first_switch', array(
	'after'  => array(
		'std'  => '1024',
		'desc' => _x( 'To skip this switch point set the same value as for the second (phone) point.', 'theme-options', 'the7mk2' ),
	),
	'height' => array( 'std' => '150' ),
	'layout' => array(
		'type'    => 'images',
		'options' => array(
			'left_right'   => array(
				'title' => _x( 'Left menu + right logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-firstswitch-layout-l-r.gif',
			),
			'left_center'  => array(
				'title' => _x( 'Left menu + centered logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-firstswitch-layout-l-c.gif',
			),
			'right_left'   => array(
				'title' => _x( 'Right menu + left logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-firstswitch-layout-r-l.gif',
			),
			'right_center' => array(
				'title' => _x( 'Right menu + centered logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-firstswitch-layout-r-c.gif',
			),
		),
		'class'   => 'small',
	),
) );

$options[] = array(
	'name' => _x( 'Second header switch point (phone)', 'theme-options', 'the7mk2' ),
	'type' => 'block',
);

presscore_options_apply_template( $options, 'mobile-header', 'header-mobile-second_switch', array(
	'after'  => array(
		'std'  => '760',
		'desc' => _x( 'To skip this switch point set it to 0.', 'theme-options', 'the7mk2' ),
	),
	'height' => array( 'std' => '100' ),
	'layout' => array(
		'type'    => 'images',
		'options' => array(
			'left_right'   => array(
				'title' => _x( 'Left menu + right logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-secondswitch-layout-l-r.gif',
			),
			'left_center'  => array(
				'title' => _x( 'Left menu + centered logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-secondswitch-layout-l-c.gif',
			),
			'right_left'   => array(
				'title' => _x( 'Right menu + left logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-secondswitch-layout-r-l.gif',
			),
			'right_center' => array(
				'title' => _x( 'Right menu + centered logo', 'theme-options', 'the7mk2' ),
				'src'   => '/inc/admin/assets/images/header-mobile-secondswitch-layout-r-c.gif',
			),
		),
		'class'   => 'small',
	),
) );


$options[] = array( 'name' => _x( 'Mobile header', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[] = array( 'name' => _x( 'Header background', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-mobile-header-bg-color'] = array(
	'id'   => 'header-mobile-header-bg-color',
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#ffffff',
);


$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Menu icon (hamburger)', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-mobile-menu_icon-size'] = array(
	'id'      => 'header-mobile-menu_icon-size',
	'name'    => _x( 'Icon size', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => 'small',
	'options' => array(
		'small'  => _x( 'Small', 'theme-options', 'the7mk2' ),
		'medium' => _x( 'Medium', 'theme-options', 'the7mk2' ),
	),
);

$options['header-mobile-menu_icon-color']     = array(
	'id'   => 'header-mobile-menu_icon-color',
	'name' => _x( 'Icon color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#fff',
);
$options['header-mobile-menu_icon-bg-enable'] = array(
	'id'      => 'header-mobile-menu_icon-bg-enable',
	'name'    => _x( 'Icon background', 'theme-options', 'the7mk2' ),
	'type'    => 'radio',
	'std'     => '1',
	'options' => array(
		'1' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'0' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);
$options['header-mobile-menu_icon-bg-color']  = array(
	'id'         => 'header-mobile-menu_icon-bg-color',
	'name'       => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'std'        => '',
	'sanitize'   => 'empty_alpha_color',
	'desc'       => _x( 'Leave empty to use accent color.', 'theme-options', 'the7mk2' ),
	'dependency' => array(
		array(
			array(
				'field'    => 'header-mobile-menu_icon-bg-enable',
				'operator' => '==',
				'value'    => '1',
			),
		),
	),

);

$options['header-mobile-menu_icon-bg-size'] = array(
	'id'         => 'header-mobile-menu_icon-bg-size',
	'name'       => _x( 'Background size', 'theme-options', 'the7mk2' ),
	'std'        => '36px',
	'type'       => 'number',
	'units'      => 'px',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-mobile-menu_icon-bg-enable',
				'operator' => '==',
				'value'    => '1',
			),
		),
	),
);

$options['header-mobile-menu_icon-bg-border-radius'] = array(
	'id'         => 'header-mobile-menu_icon-bg-border-radius',
	'name'       => _x( 'Background border radius', 'theme-options', 'the7mk2' ),
	'std'        => '0px',
	'type'       => 'number',
	'units'      => 'px',
	'dependency' => array(
		array(
			array(
				'field'    => 'header-mobile-menu_icon-bg-enable',
				'operator' => '==',
				'value'    => '1',
			),
		),
	),
);

$options[] = array( 'name' => _x( 'Floating mobile header', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['header-mobile-floating_navigation'] = array(
	'id'      => 'header-mobile-floating_navigation',
	'name'    => _x( 'Floating mobile header', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'menu_icon',
	'options' => array(
		'disabled'  => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mobile-floating_navigation-disabled.gif',
		),
		'sticky'    => array(
			'title' => _x( 'Sticky mobile header', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mobile-floating_navigation-sticky-header.gif',
		),
		'menu_icon' => array(
			'title' => _x( 'Floating menu button', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mobile-floating_navigation-icon.gif',
		),
	),
	'class'   => 'small',
);

$options[] = array( 'name' => _x( 'Mobile navigation area', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[]                                 = array(
	'name' => _x( 'Menu font', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);
$options['header-mobile-menu-font-family'] = array(
	'id'    => 'header-mobile-menu-font-family',
	'name'  => _x( 'Font family', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Open Sans',
	'fonts' => 'all',
);

$options['header-mobile-menu-font-size'] = array(
	'id'       => 'header-mobile-menu-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'sanitize' => 'font_size',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
);

$options['header-mobile-menu-font-is_capitalized'] = array(
	'id'      => 'header-mobile-menu-font-is_capitalized',
	'name'    => _x( 'Capitalize', 'theme-options', 'the7mk2' ),
	'type'    => 'checkbox',
	'std'     => 0,
	'divider' => 'bottom',
);

$options[] = array( 'name' => _x( 'Submenu font', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-mobile-submenu-font-family'] = array(
	'id'    => 'header-mobile-submenu-font-family',
	'name'  => _x( 'Font family', 'theme-options', 'the7mk2' ),
	'type'  => 'web_fonts',
	'std'   => 'Open Sans',
	'fonts' => 'all',
);

$options['header-mobile-submenu-font-size'] = array(
	'id'       => 'header-mobile-submenu-font-size',
	'name'     => _x( 'Font size', 'theme-options', 'the7mk2' ),
	'type'     => 'slider',
	'sanitize' => 'font_size',
	'std'      => 16,
	'options'  => array( 'min' => 9, 'max' => 120 ),
);

$options['header-mobile-submenu-font-is_capitalized'] = array(
	'id'      => 'header-mobile-submenu-font-is_capitalized',
	'name'    => _x( 'Capitalize', 'theme-options', 'the7mk2' ),
	'type'    => 'checkbox',
	'std'     => 0,
	'divider' => 'bottom',
);

$options[] = array( 'name' => _x( 'Font color', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-mobile-menu-font-color'] = array(
	'id'   => 'header-mobile-menu-font-color',
	'name' => _x( 'Normal font color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'std'  => '#ffffff',
);

$options['header-mobile-menu-font-hover-color-style'] = array(
	'name'    => _x( 'Active & hover font color', 'theme-options', 'the7mk2' ),
	'id'      => 'header-mobile-menu-font-hover-color-style',
	'type'    => 'images',
	'class'   => 'small',
	'std'     => 'accent',
	'options' => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['header-mobile-menu-font-hover-color'] = array(
	'name'       => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type'       => 'color',
	'id'         => 'header-mobile-menu-font-hover-color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'header-mobile-menu-font-hover-color-style',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['header-mobile-menu-font-hover-gradient'] = array(
	'name'        => _x( 'Gradient', 'theme-options', 'the7mk2' ),
	'type'        => 'gradient_picker',
	'id'          => 'header-mobile-menu-font-hover-gradient',
	'std'         => '90deg|#ffffff 30%|#ffffff 100%',
	'fixed_angle' => '90deg',
	'dependency'  => array(
		'field'    => 'header-mobile-menu-font-hover-color-style',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Menu background', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-mobile-menu-bg-color'] = array(
	'id'   => 'header-mobile-menu-bg-color',
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => '#111111',
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
	'name' => _x( 'Website overlay on mobile menu opening', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

$options['header-mobile-overlay-bg-color'] = array(
	'id'   => 'header-mobile-overlay-bg-color',
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'std'  => 'rgba(17, 17, 17, 0.5)',
);

$options['header-mobile-menu-bg-width'] = array(
	'id'    => 'header-mobile-menu-bg-width',
	'name'  => _x( 'Maximum background width', 'theme-options', 'the7mk2' ),
	'std'   => '400px',
	'type'  => 'number',
	'units' => 'px',
);

$options[] = array( 'type' => 'divider' );

$options[] = array( 'name' => _x( 'Mobile menu position', 'theme-options', 'the7mk2' ), 'type' => 'title' );

$options['header-mobile-menu-align'] = array(
	'id'      => 'header-mobile-menu-align',
	'name'    => _x( 'Mobile menu slides from', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'std'     => 'left',
	'options' => array(
		'left'  => array(
			'title' => _x( 'Left', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mobile-menu-align-left.gif',
		),
		'right' => array(
			'title' => _x( 'Right', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/header-mobile-menu-align-right.gif',
		),
	),
	'class'   => 'small',
);
