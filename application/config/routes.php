<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';
$route['login'] = 'login/masuk';
$route['addinventory'] = 'addinventory/displayinv';
$route['terminal'] = 'terminal/index';
$route['attendance'] = 'posts/displayAtt';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
