<?php

// CPT Filmes
function filmes_post_type() {
    $labels = array(
        'name'               => 'Filmes',
        'singular_name'      => 'Filme',
        'menu_name'          => 'Filmes',
        'add_new'            => 'Adicionar Novo Filme',
        'add_new_item'       => 'Adicionar Novo Filme',
        'edit_item'          => 'Editar Filme',
        'new_item'           => 'Novo Filme',
        'view_item'          => 'Ver Filme',
        'search_items'       => 'Buscar Filmes',
        'not_found'          => 'Nenhum filme encontrado',
        'not_found_in_trash' => 'Nenhum filme encontrado na lixeira',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'filmes'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-video-alt2',
        'supports'            => array('title', 'thumbnail'),
    );

    register_post_type('filmes', $args);
}
add_action('init', 'filmes_post_type');

// CPT Documentários
function documentarios_post_type() {
    $labels = array(
        'name'               => 'Documentários',
        'singular_name'      => 'Documentário',
        'menu_name'          => 'Documentários',
        'add_new'            => 'Adicionar Novo Documentário',
        'add_new_item'       => 'Adicionar Novo Documentário',
        'edit_item'          => 'Editar Documentário',
        'new_item'           => 'Novo Documentário',
        'view_item'          => 'Ver Documentário',
        'search_items'       => 'Buscar Documentários',
        'not_found'          => 'Nenhum Documentário encontrado',
        'not_found_in_trash' => 'Nenhum Documentário encontrado na lixeira',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'documentarios'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-format-aside',
        'supports'            => array('title', 'thumbnail'),
    );

    register_post_type('documentarios', $args);
}
add_action('init', 'documentarios_post_type');

// CPT Séries
function series_post_type() {
    $labels = array(
        'name'               => 'Séries',
        'singular_name'      => 'Série',
        'menu_name'          => 'Séries',
        'add_new'            => 'Adicionar Novo Série',
        'add_new_item'       => 'Adicionar Novo Série',
        'edit_item'          => 'Editar Série',
        'new_item'           => 'Novo Série',
        'view_item'          => 'Ver Série',
        'search_items'       => 'Buscar Séries',
        'not_found'          => 'Nenhum Série encontrado',
        'not_found_in_trash' => 'Nenhum Série encontrado na lixeira',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'series'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-playlist-video',
        'supports'            => array('title', 'thumbnail'),
    );

    register_post_type('series', $args);
}
add_action('init', 'series_post_type');

// Campos personalizados - gerado no ACF
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_650b619cb23bf',
	'title' => 'Detalhes',
	'fields' => array(
		array(
			'key' => 'field_650b619c456c3',
			'label' => 'Imagem de Capa',
			'name' => 'bx_play_cover',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_650b61bb456c4',
			'label' => 'Descrição',
			'name' => 'bx_play_description',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_650b61ea456c5',
			'label' => 'Tempo de Duração',
			'name' => 'bx_play_video_duration',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_650b61f2456c6',
			'label' => 'Sinopse',
			'name' => 'bx_play_synopsis',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_650b6205456c7',
			'label' => 'Embed de Vídeo',
			'name' => 'bx_play_video_ID',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'filmes',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'documentarios',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'series',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

// Shortcode para o ano - usado no footer
function currentYear(){
    return date('Y');
}
add_shortcode( 'year', 'currentYear' );

?>