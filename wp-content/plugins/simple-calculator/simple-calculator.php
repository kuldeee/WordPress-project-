<?php
/*
Plugin Name: Simple Calculator
Plugin URI: https://example.com
Description: A simple calculator plugin for WordPress
Version: 1.0
Author: Your Name
Author URI: https://example.com
License: GPL2
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue CSS & JS
function simple_calculator_assets()
{
    wp_enqueue_style('simple-calculator-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('simple-calculator-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'simple_calculator_assets');

// Shortcode to display calculator
function simple_calculator_shortcode()
{
    $html = '
    <div class="calculator">
        <input type="number" id="num1" placeholder="Number 1">
        <input type="number" id="num2" placeholder="Number 2">
        <select id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button id="calculate-btn">Calculate</button>
        <p id="result"></p>
    </div>
    ';
    return $html;
}
add_shortcode('simple_calculator', 'simple_calculator_shortcode');
