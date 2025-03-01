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
        <h2>Trade Assets</h2>
    </div>
    
    <div class="trading-pair">
        <div class="asset-selector" id="buy-asset">
            <div class="asset-label">You Buy</div>
            <select id="buy-select">
                <option value="REAL8">REAL8</option>
            </select>
        </div>
        
        <div class="flip-container">
            <div class="flip-button" id="flip-assets">
                ↑↓
            </div>
        </div>
        
        <div class="asset-selector" id="sell-asset">
            <div class="asset-label">You Sell</div>
            <select id="sell-select">
                <option value="XLM">XLM</option>
                <option value="USDC">USDC</option>
                <option value="EURC">EURC</option>
                <option value="SLVR">SVLR</option>
                <option value="GOLD">GOLD</option>
            </select>
        </div>
    </div>
    
    <button class="trade-button" id="trade-button">Trade Now</button>
</div>
