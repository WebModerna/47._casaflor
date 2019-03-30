<?php
/*
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
*/
get_header();?>
<!-- Un lindo y bonito slideshow para deleitar -->
	<div id="slideshow" class="cycle-slideshow slideshow wrapper" data-cycle-caption="#alt-caption" data-cycle-caption-template="{{alt}}">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/viendo_informacion-2400x900.jpg" alt="<?php _e('Qué hiciste?', 'casaflor');?>" />
		<div id="alt-caption"></div>			
	</div><!-- #slideshow -->
</header>

<div class="wrapper plateado">
	<section class="seccion_gris">
		<div class="home_text space-bot custom-post-type gradient">
			<div class="second_nav">
				<h2><?php _e('Error 404', 'casaflor');?></h2>

				<?php $default = array(
					'container'			=>			false,
					'depth'				=>				1,
					'menu'				=>	 'footer_nav',
					'theme_location'	=>	 'footer_nav',
					'items_wrap'		=>	 '<ul>%3$s</ul>'
				);		
				wp_nav_menu($default);?>
					
			</div>
			<div class="contenido text-left tipo_blog">				
				<div class="texto search">					
					<article>
						<h2><?php _e('Error 404', 'casaflor')?></h2>
						<!-- <p> -->
							<blockquote>
								Lo que estás tratando de buscar no lo encontramos. O peor, no entendemos que querés hacer. Qué estás haciendo? Qué querés hacer? Hacé bien las cosas, por favor!
							</blockquote>
						<!-- </p> -->
					</article>
				</div>
			</div>
		</div>
	</section>
<?php get_sidebar(); get_footer();?>