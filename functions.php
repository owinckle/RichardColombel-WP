<?php

// Register styles
function targye_register_styles() {
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("targye-style", get_template_directory_uri() . "/style.css", array(), $version, "all");
}

add_action( "wp_enqueue_scripts", "targye_register_styles");

// Register Menu
function targye_menus() {
    $locations = array(
        "primary" => "Desktop Primary Sidebar"
    );

    register_nav_menus($locations);
}

add_action("init", "targye_menus");

?>