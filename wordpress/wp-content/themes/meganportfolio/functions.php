<?php

function startwordpress_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

function setting_behance() { ?>
  <input type="text" name="behance" id="behance" value="<?php echo get_option( 'behance' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
  add_settings_field( 'behance', 'Behance URL', 'setting_behance', 'theme-options', 'section' );

  register_setting('section', 'instagram');
  register_setting('section', 'behance');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

?>