<?php
// Funções do Tema Redetex

// Função que chama o menu principal
function add_menu_principal() {
  $menuPrincipal = array(
    'theme_location'  => '',
    'menu'            => 'Menu Principal',
    'container'       => '',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  );

  return wp_nav_menu($menuPrincipal);
}

// Mudar logo e link do Wp-admin
function page_login_logo(){
  echo "<style>body.login #login h1 a { background: url('".get_stylesheet_directory_uri()."/dist/imagens/logo-admin.png') no-repeat scroll center top transparent; width:320px; height:109px; }</style>\n";
}

add_action("login_head", "page_login_logo");

// Esconder a versão do Wordpress
remove_action('wp_head', 'wp_generator');

add_action('after_setup_theme', 'tema_setup');

function tema_setup() {
  add_theme_support('automatic-feed-links' );
  add_theme_support('post-thumbnails' );
  if (function_exists('register_nav_menus')) {
    register_nav_menus(
      array(
        'menu' => 'Menu Superior'
      )
    );
  }
  add_image_size('img-destaque', 1200, 330, true); //painel de destaques
  add_image_size('img-destaque-smartphone', 667, 387, true); // 375x387 painel de destaques
  add_image_size('img-conteudo', 427, 284, true); //imagem do conteúdo
  add_image_size('img-publicidade', 960, 115, true); //banner publicidade rodapé
  add_image_size('img-publicidade-smartphone', 345, 115, true); //banner publicidade rodapé
  add_image_size('img-chamada-index', 375, 189, true); //chamada da Página Inicial
  add_image_size('img-galeria', 970, 400, true); //galeria de fotos
  add_image_size('thumb-galeria', 100, 75, true); //thumb da galeria de fotos
  add_image_size('thumb-busca', 170, 120, true); //thumb do resultado da busca
}

add_filter('image_size_names_choose', 'my_image_sizes');

// Define o Tamanho das Imagens
function my_image_sizes($sizes) {
	$addsizes = array(
		"img-destaque"               => __( "Destaque"),
		"img-destaque-smartphone"    => __( "Destaque Smartphone"),
		"img-conteudo"               => __( "Imagem conteúdo"),
		"img-publicidade"            => __( "Publicidade"),
   	"img-publicidade-smartphone" => __( "Publicidade Smartphone"),
		"img-chamada-index"          => __( "Chamada da Página Inicial"),
   	"img-galeria"                => __( "Galeria de fotos"),
		"thumb-galeria"              => __( "Thumb da galeria de fotos"),
   	"thumb-busca"                => __( "Thumb da busca")
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}

// Paginação do WordPress
function wordpress_pagination() {
  global $wp_query;

  $big = 999999999;

  echo paginate_links( array(
    'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'  => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total'   => $wp_query->max_num_pages
  ) );
}

// Disable WordPress Admin Bar for all users but admins.
show_admin_bar(false);

// Múltiplas imagens destacadas
if (class_exists('MultiPostThumbnails')) {
  new MultiPostThumbnails(
    array(
      'label'     => 'Imagem para Smartphone',
      'id'        => 'destaque-smartphone',
      'post_type' => 'destaques'
    )
  );
  new MultiPostThumbnails(
    array(
      'label'     => 'Imagem para Smartphone',
      'id'        => 'publicidade-smartphone',
      'post_type' => 'publicidade'
    )
  );
}

// Data local
function exibeData(){
  $dia     = date('j');
  $mes     = date('n');
  $mes_ar  = array('', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro');
  $ano     = date('Y');
  $dtFinal = $dia." de ".$mes_ar[$mes]." de ".$ano;

  return $dtFinal;
}

function shapeSpace_filter_search($query) {
  if (!$query->is_admin && $query->is_search) {
    $query->set('post_type', array('post', 'page'));
  }
  return $query;
}

add_filter('pre_get_posts', 'shapeSpace_filter_search');
add_action( 'admin_menu', 'redetex_add_admin_menu' );
add_action( 'admin_init', 'redetex_settings_init' );

function redetex_add_admin_menu() { 
	add_options_page( 'Opções Gerais', 'Opções Gerais', 'manage_options', 'redetex', 'redetex_options_page' );
}

function redetex_settings_init() { 
	register_setting('pluginPage', 'redetex_settings');
	add_settings_field('redetex_text_field_1', __('Link do Instagram', 'wordpress'), 'redetex_text_field_2_render', 'pluginPage', 'redetex_pluginPage_section');
	add_settings_field('redetex_textarea_field_1', __('Endereço', 'wordpress'), 'redetex_textarea_field_1_render', 'pluginPage', 'redetex_pluginPage_section');
}

function redetex_text_field_1_render() { 
	$options = get_option('redetex_settings');
	?>
	<input type='text' name='redetex_settings[redetex_text_field_1]' value='<?php echo $options['redetex_text_field_1']; ?>'>
	<?php
}

function redetex_textarea_field_1_render() { 
	$options = get_option('redetex_settings');
	?>
	<textarea cols='40' rows='5' name='redetex_settings[redetex_textarea_field_1]'> 
		<?php echo $options['redetex_textarea_field_1']; ?>
 	</textarea>
	<?php
}

function redetex_settings_section_callback() { 
	echo __('Insira as informações abaixo:', 'wordpress');
}

function redetex_options_page() { 
	?>
	<form action='options.php' method='post'>
		
		<h2>Opções Gerais</h2>
		
		<?php
		settings_fields('pluginPage');
		do_settings_sections('pluginPage');
		submit_button();
		?>
	</form>
	<?php
}

function footer_widgets_init() {

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 1',
		'id'            => 'rodape_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 2',
		'id'            => 'rodape_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 3',
		'id'            => 'rodape_3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 4',
		'id'            => 'rodape_4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Acessibilidade',
		'id'            => 'acessibilidade_wg',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

}
add_action('widgets_init', 'footer_widgets_init');
add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Destaques",
		"singular_name" => "",
		);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "destaques", "with_front" => true ),
		"query_var"           => true,
				
		"supports" => array( "title", "revisions", "thumbnail", "author" ),				
	);
	register_post_type( "destaques", $args );

	$labels = array(
		"name" => "Publicidades",
		"singular_name" => "Publicidade",
		);

	$args = array(
		"labels"        	    => $labels,
		"description" 		    => "",
		"public" 			    => true,
		"show_ui" 			    => true,
		"show_in_rest" 		 => false,
		"has_archive"    	    => false,
		"show_in_menu" 		 => true,
		"exclude_from_search" => false,
		"capability_type" 	 => "post",
		"map_meta_cap" 		 => true,
		"hierarchical" 		 => false,
		"rewrite" 			    => array( "slug" => "publicidade", "with_front" => true ),
		"query_var"           => true,
		"supports"            => array( "title", "thumbnail", "author" ),				
	);
	register_post_type("publicidade", $args);

	$labels = array(
		"name"          => "Chamadas da Página Inicial",
		"singular_name" => "Chamada da Página Inicial",
		);

	$args = array(
		"labels"              => $labels,
		"description" 		    => "",
		"public"              => true,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array("slug" => "chamadas-index", "with_front" => true),
		"query_var"           => true,
		"supports"            => array("title", "revisions", "thumbnail", "author"),				
	);
	register_post_type("chamadas-index", $args);

}

add_action('init', 'cptui_register_my_taxes');
function cptui_register_my_taxes() {

	$labels = array(
		"name"  => "Categorias Perguntas Frequentes",
		"label" => "Categorias Perguntas Frequentes",
	);

	$args = array(
		"labels"            => $labels,
		"hierarchical"      => true,
		"label" 			     => "Categorias Perguntas Frequentes",
		"show_ui" 		     => true,
		"query_var" 	     => true,
		"rewrite" 		     => array('slug' => 'categorias-perguntas-frequentes', 'with_front' => true),
		"show_admin_column" => false,
	);
	register_taxonomy("categorias-perguntas-frequentes", array("perguntas-frequentes"), $args);

	$labels = array(
		"name"  => "Categorias Chamadas",
		"label" => "Categorias Chamadas",
	);

	$args = array(
		"labels"            => $labels,
		"hierarchical"      => true,
		"label"      	     => "Categorias Chamadas",
		"show_ui" 		     => true,
		"query_var" 	     => true,
		"rewrite" 		     => array('slug' => 'categorias-chamadas', 'with_front' => true),
		"show_admin_column" => false,
	);
	register_taxonomy("categorias-chamadas", array("chamadas-index"), $args);

}

$role_object = get_role('editor');
$role_object->add_cap('edit_theme_options');
$role_object->add_cap('manage_options');

$role_object2 = get_role('contributor');
$role_object2->add_cap('read_pages');
$role_object2->add_cap('edit_pages');
$role_object2->remove_cap('edit_theme_options');
$role_object2->remove_cap('manage_options');

function esconde_menu() {
	global $submenu;
	unset($submenu['themes.php'][6]);
	unset($submenu['themes.php'][11]);

	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');
	remove_menu_page('tools.php');
	remove_menu_page('edit.php?post_type=acf');
	
	remove_submenu_page('themes.php', 'themes.php');
	remove_submenu_page('options-general.php', 'options-general.php');
	remove_submenu_page('options-general.php', 'options-writing.php');
	remove_submenu_page('options-general.php', 'options-reading.php');
	remove_submenu_page('options-general.php', 'options-discussion.php');
	remove_submenu_page('options-general.php', 'options-media.php');
	remove_submenu_page('options-general.php', 'options-permalink.php');
}

if (is_user_logged_in()) {
	$user = new WP_User($user_ID);
	if($user->roles[0] != 'administrator'){
		add_action('admin_head', 'esconde_menu');
	}
}
?>