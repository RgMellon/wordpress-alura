<?php
// https://codex.wordpress.org/Function_Reference/register_post_type

add_theme_support('post-thumbnails');

function cadastrando_post_type_imovel(){
  $nome_plural = 'Imóvel';
  $nome_singular = 'Imóveis';
  $description =  'Imóveis da imobiliaria maluras';

  $labels = array(
    'name' => $nome_plural,
    'name_singular' => $nome_singular,
    'add_new_item' => 'Adicionar ' . $nome_singular,
    'edit_item' => 'Editar Imóvel' . $nome_singular
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );
  
  $args = array(
    'public' => true,
    'labels' => $labels,
    'description' => $description,
    'menu_icon' => 'dashicons-admin-home',
    'supports' => $supports
  );

  register_post_type('imovel', $args);
}

add_action('init', 'cadastrando_post_type_imovel');


function registrar_menu_navegacao() {
  register_nav_menu('header-menu', 'main-menu');
}

add_action('init', 'registrar_menu_navegacao');