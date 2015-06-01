<?php
/* ------------------------------------------- */
/* 	Custom menu
/*-------------------------------------------- */

// カスタムメニューを有効化
add_theme_support('menus');
register_nav_menus(array('Header' => 'Header Navigation',));
register_nav_menus(array('Footer' => 'Footer Navigation',));
