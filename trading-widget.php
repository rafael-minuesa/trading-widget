<?php
/**
 * Plugin Name: REAL8 Trading Pair Widget
 * Description: A widget to select trading pairs for REAL8 and redirect to trading pages. Add the shortcode [trading_widget]
 * Version: 2.5
 * Author: ProWoos
 * Text Domain: trading-widget
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Define plugin constants
define('TRADING_WIDGET_PATH', plugin_dir_path(__FILE__));
define('TRADING_WIDGET_URL', plugin_dir_url(__FILE__));
define('TRADING_WIDGET_VERSION', '1.0.0');

// Include required files
require_once TRADING_WIDGET_PATH . 'includes/shortcodes.php';
require_once TRADING_WIDGET_PATH . 'includes/enqueue-scripts.php';

// Plugin activation hook (optional)
register_activation_hook(__FILE__, 'trading_widget_activate');
function trading_widget_activate() {
    // Any activation tasks (flush rewrite rules, create DB tables, etc.)
}

// Plugin deactivation hook (optional)
register_deactivation_hook(__FILE__, 'trading_widget_deactivate');
function trading_widget_deactivate() {
    // Any cleanup tasks
}
?>
