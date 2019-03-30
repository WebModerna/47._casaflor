<?php
/* sidebar.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
*
	<aside>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : ?>
		<?php endif;?>

		<?php $recent = new WP_Query("showposts=1&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?> 
		<section>
			<h4><a href="<?php the_permalink();?>"><?php the_title();?>:</a></h4>
			<figure class="polaroid figure">
				<a href="<?php the_permalink();?>">
					<?php
						if( has_post_thumbnail() ) {
							the_post_thumbnail('custom-thumb-600-x');
						} else {
							echo '<img src="'.get_stylesheet_directory_uri().'/img/big-1.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
						};
					?>
				</a> 
			</figure>
			<?php the_excerpt();?>
			<a class="ver_mas" href="<?php the_permalink();?>">Ver más</a>
		</section>
		<?php endwhile; ?>
		<section>
			<h4><?php _e('Mapa de Sitio', 'casaflor');?></h4>
			<?php // La barra de navegación del sidebar
				$default=array(
		 		'container'		=>	false,
		 		'depth'			=>	1,			
				'theme_location'=>	'header_nav',
				'items_wrap'	=>	'<ul>%3$s</ul>'
				);
			wp_nav_menu($default);?> 
		</section>


	</aside>
*/
?>