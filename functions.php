<?php
//Theme Support
add_theme_support( 'post-thumbnails' );
add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );
 
function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
function remove_unused_taxonomies() {
    register_taxonomy('post_tag', array());
    register_taxonomy('category', array());
}
add_action( 'init', 'remove_unused_taxonomies' );
//Assets
function rfd_assets() {
	wp_enqueue_style( 'rfd-style', get_stylesheet_uri());
		wp_enqueue_style('rfd-comic-display', get_template_directory_uri().'/css/comic.css');
	wp_enqueue_style( 'rfd-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins|Prompt&display=swap', false );
	wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome-animation', get_template_directory_uri().'/font-awesome-animation.min.css');
    wp_enqueue_script( 'typedJS', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.11', array('jquery'),'2.0.11',true );
	wp_enqueue_script( 'rfd-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'rfd_assets' );
//Navigation Menu
function register_rfd_top_menu() { register_nav_menus(array(
	'rfd-top-menu' => __( 'Top Menu' ),
		'rfd-footer-menu' => __('Footer Menu')
	));}
add_action( 'init', 'register_rfd_top_menu' );
//Comic Content
function rfd_display_comic() { ?>

<div class="rfd-comic-display-container">
		       	<div class="rfd-comic-navigation">
	       <div class="rfd-previous-comic rfd-comic-nav-link">
   		       	<?php previous_post_link( '%link', '<i class="fa fa-arrow-left faa-passing-reverse"></i>'); ?>
	       	</div>
	       	<div class="rfd-next-comic rfd-comic-nav-link">
		       	<?php next_post_link( '%link', '<i class="fa fa-arrow-right"></i>'); ?>
	       	</div>
       	</div> 
	<div class="rfd-comic-display-container-inside">
		<div class="rfd-comic-display-box rfd-comic-image">
		<?php the_post_thumbnail(); ?>
		</div>
		<div class="rfd-comic-display-box rfd-comic-note">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
	</div>

</div>
<?php } ?>