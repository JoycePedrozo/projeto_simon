<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'tela_inicio';


$route['professor/(:num)'] = "home/index/$1";
$route['professor/(:num)'] = "professor/index/$1";
$route['aluno/(:num)'] = "aluno/index/$1";

//$route['professor/(:num)'] = "home/excluir/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
