<?php
/**
 * Plugin Name: Case Study - Plugin Development
 * Plugin URI: https://github.com/gulariav/cspd
 * Description: A simple Editable Gutenberg Block
 * Version: 1.0.0
 * Author: Vishal Gularia
 * Author URI: https://github.com/gulariav/
 * Text Domain: cspd
 *
 * @package cspd
 */

define( 'SB_PLUGIN_URL', plugins_url( 'cspd' ) );
define( 'SB_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function gutenberg_custom_blocks() {

   // Block front end styles.
   wp_register_style('cspd-front-end-styles', SB_PLUGIN_URL . '/cspd-style.css', array( 'wp-edit-blocks' ) );

   // Block editor styles.
   wp_register_style('cspd-editor-styles', SB_PLUGIN_URL . '/cspd-editor.css', array( 'wp-edit-blocks' )  );

   // Block Editor Script.
   wp_register_script('cspd-editor-js', SB_PLUGIN_URL . '/cspd-block.js', array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ), '', true);

   register_block_type(
      'case-study/case-study-plugin-development',
      array(
         'style'         => 'cspd-front-end-styles',
         'editor_style'  => 'cspd-editor-styles',
         'editor_script' => 'cspd-editor-js',
      )
   );

}

add_action( 'init', 'gutenberg_custom_blocks' );