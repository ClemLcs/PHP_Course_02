<?php

define('__REALPATH__', __DIR__);

/*
 * ======================================================
 * ==========Domain & Uri variables declaration==========
 * ======================================================
 */

$domain = '/php/02';
$uri = str_replace($domain, '', $_SERVER['REQUEST_URI']);
$segments = explode('/', $uri);

/*
 * ======================================================
 * ==============Tools functions call====================
 * ======================================================
 */
require_once __REALPATH__  . '/includes/tools/functions.php';

/*
 * ======================================================
 * ==============Maintenance Mode====================
 * ======================================================
 */
// Uncomment if down to maintenance mode
//maintenance();

/*
 * ======================================================
 * ==============Application render======================
 * ======================================================
 */

require __REALPATH__ . '/includes/common/head.php';
echo get_page($uri, $segments);
require __REALPATH__ . '/includes/common/footer.php';