<?php

// Register settings
add_action('admin_init', 'trading_widget_register_settings');
function trading_widget_register_settings() {
    register_setting('trading_widget_settings_group', 'trading_widget_pairs');
    
    add_settings_section(
        'trading_widget_main_section', 
        __('Manage Trading Pairs', 'trading-widget'), 
        'trading_widget_main_section_callback', 
        'trading-widget-settings'
    );
    
    add_settings_field(
        'trading_widget_pairs', 
        __('Trading Pairs', 'trading-widget'), 
        'trading_widget_pairs_callback', 
        'trading-widget-settings', 
        'trading_widget_main_section'
    );
}

function trading_widget_main_section_callback() {
    echo '<p>' . __('Add or remove trading pairs for the widget.', 'trading-widget') . '</p>';
}

function trading_widget_pairs_callback() {
    $pairs = get_option('trading_widget_pairs', '');
    echo '<textarea id="trading_widget_pairs" name="trading_widget_pairs" rows="10" cols="50" class="large-text">' . esc_textarea($pairs) . '</textarea>';
    echo '<p class="description">' . __('Enter one trading pair per line.', 'trading-widget') . '</p>';
}
?>
