<?php

/*
Plugin Name: Fuse Social Floating Sidebar
Plugin URI: http://photontechs.com/fuse-social-sidebar
Description: This Fuse Social Floating Sidebar plugin allow you to put social icons which can be link with your social media profiles.
Version: 4.2.1
Author: Daniyal Ahmed
Author URI: http://www.photontechs.com
License: GNU General Public License v3.0
License URI: http://www.opensource.org/licenses/gpl-license.php
NOTE: This plugin is released under the GPLv2 license. The icons used in this plugin are the property
of their respective owners, and do not, necessarily, inherit the GPLv2 license.
*/
// Create a helper function for easy SDK access.

if ( !function_exists( 'fs_fs' ) ) {
    // Create a helper function for easy SDK access.
    function fs_fs()
    {
        global  $fs_fs ;
        
        if ( !isset( $fs_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $fs_fs = fs_dynamic_init( array(
                'id'             => '2701',
                'slug'           => 'fuse-social-floating-sidebar',
                'type'           => 'plugin',
                'public_key'     => 'pk_70ed0c631ac1720148be7f62dca7e',
                'is_premium'     => false,
                'premium_suffix' => 'FUSE PRO',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(),
                'is_live'        => true,
            ) );
        }
        
        return $fs_fs;
    }
    
    // Init Freemius.
    fs_fs();
    // Signal that SDK was initiated.
    do_action( 'fs_fs_loaded' );
}

function fuse_general_admin_notice()
{
    global  $pagenow ;
    if ( $_GET['page'] == "fuse-social" ) {
        echo  '<div class="update_ssc notice notice-warning is-dismissible">
             <p>Upgrade Fuse Social to add unlimited icons <a href="' . fs_fs()->get_upgrade_url() . '" class="upraf_d">Upgrade Now</a></p>
         </div>' ;
    }
}

add_action( 'admin_notices', 'fuse_general_admin_notice' );
// Adding Admin Menu
require_once 'inc/fuse_social_sidebar_admin.php';
// Getting Values from options
$options = get_option( 'fuse_social_options' );
// Creating Icons
require_once 'inc/fuse_social_sidebar_func.php';
// Getting Style for awesome icons
require_once 'inc/fuse_social_sidebar_scripts.php';
// Add settings link on plugin page
function fuse_social_settings_link( $links )
{
    $settings_link = '<a href="options-general.php?page=fuse-social">Settings</a>';
    array_unshift( $links, $settings_link );
    return $links;
}

$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_{$plugin}", 'fuse_social_settings_link' );
add_action( 'wp_footer', 'fuse_social_sidebar', 100 );
function fuse_social_sidebar()
{
    $makeawesome_icons = new Making_Fuse_Icons();
    // Getting Icons for Shortcode
    $makeawesome_icons->Create_Awesome_Icons();
}
