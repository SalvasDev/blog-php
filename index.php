<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

if (!$posts) {
  header('Location: error.php');
}

require 'views/index.view.php';
