<?php

/**
 * Plugin Name: Fraise - 人机验证工具包
 * Description: 使用腾讯云天御验证码所需的工具包，可有效减少恶意批量注册、水军刷帖、恶意灌水等问题。
 * Version: 2024.05.08
 * Plugin URI: https://github.com/seatonjiang/fraise-plugin-tcaptcha
 * Author: Seaton Jiang
 * Author URI: https://seatonjiang.com
 * License: MIT License
 * License URI: https://github.com/seatonjiang/fraise-plugin-tcaptcha/blob/main/LICENSE
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!has_action('fraise-plugin-tcaptcha')) {
    add_action('fraise-plugin-tcaptcha', function () {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
    });
}
