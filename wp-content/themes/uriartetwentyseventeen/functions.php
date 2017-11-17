<?php

// Adds scripts and stylesheets
  function brandonWebsite_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
  }

  add_action( 'wp_enqueue_scripts', 'brandonWebsite_scripts' );

// Adds custom Google fonts
  function brandonWebsite_google_fonts() {
    wp_register_style( 'Raleway | Roboto', 'href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet"');
    wp_enqueue_style( 'Raleway | Roboto' );
  }

  add_action ('wp_print_styles', 'brandonWebsite_google_fonts');

// WordPress Titles
  add_theme_support( 'title-tag' );

// Custom Settings Dashboard Option
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

// LinkedIn
  function setting_linkedin() { ?>
    <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option( 'linkedin' ); ?>" />
  <?php }

// Twitter
  function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
  <?php }

// Custom Settings Page Options
  function custom_settings_page_setup() {
    add_settings_section( 'section', 'All Settings', null, 'theme-options' );

    add_settings_field( 'linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

    register_setting('section', 'linkedin');
    register_setting('section', 'twitter');
  }

  add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
  add_theme_support( 'post-thumbnails' );

// Custom Post Type
  function create_my_custom_post() {
    register_post_type( 'my-custom-post',
      array(
        'labels' => array(
          'name' => _( 'My Custom Post' ),
          'singular_name' => _( 'My Custom Post' ),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title',
          'editor',
          'thumbnail',
          'custom-fields'
        )
    ));
  }

  add_action( 'init', 'create_my_custom_post' );
