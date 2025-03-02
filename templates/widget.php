<?php
/**
 * Trading Widget Template
 * 
 * HTML template for the trading widget
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;
?>

<div class="trading-widget">
    <div class="widget-header">
        <h2><?php _e('Trade Assets', 'trading-widget'); ?></h2>
    </div>
    
    <div class="trading-pair">
        <div class="asset-selector" id="buy-asset">
            <div class="asset-label"><?php _e('Buy', 'trading-widget'); ?></div>
            <select id="buy-select">
                <option value="REAL8" data-icon="assets/icons/real8-icon.png">REAL8</option>
            </select>
        </div>
        
        <div class="flip-container">
            <div class="flip-button" id="flip-assets">
                ↑↓
            </div>
        </div>
        
        <div class="asset-selector" id="sell-asset">
            <div class="asset-label"><?php _e('Sell', 'trading-widget'); ?></div>
            <select id="sell-select">
                <option value="XLM" data-icon="assets/icons/xlm-icon.png">XLM</option>
                <option value="USDC" data-icon="assets/icons/usdc-icon.png">USDC</option>
                <option value="EURC" data-icon="assets/icons/eurc-icon.png">EURC</option>
                <option value="SLVR" data-icon="assets/icons/slvr-icon.png">SLVR</option>
                <option value="GOLD" data-icon="assets/icons/gold-icon.png">GOLD</option>
            </select>
        </div>
    </div>
    
    <button class="trade-button" id="trade-button"><?php _e('Trade Now', 'trading-widget'); ?></button>
</div>

<script src="assets/js/widget-icons.js"></script>
