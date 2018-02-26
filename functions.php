<?
	//ativando menus dinamicos 
	 function register_menus(){
	 	register_nav_menus(
	 		array(
	 				'header_menu' => ('Menu do Topo')
	 		)
	 	);
	 }	

	 add_action('init','register_menus');

	 //Meus posts Types
	 function meus_posts_types(){
	 	//habilidades
	 	register_post_type('habilidades',
	 		array(
	 			'labels' 			=> array(
	 				'name'      	=> __('Habilidades'),
	 				'singular_name' => __('Habilidade')
	 				),
	 			'public'            => true,
	 			'has_archive'		=> true,
	 			'menu_icon'			=> 'dashicons-welcome-learn-more',
	 			'supports'			=> array('title', 'thumbnail', 'page-attributes'),
	 		)
	 	);
	 }
	 add_action('init', 'meus_posts_types');

	 //Tamanho dinamicos para os thumbs
	 function tamanhos_thumbs(){
	 	//ativando suporte a imagem destacada
	 	add_theme_support('post-thumbnails');
	 	add_image_size('portifolio-thumb', 265, 150, true);


	 }
	 add_action('after_setup_theme','tamanhos_thumbs');

?>