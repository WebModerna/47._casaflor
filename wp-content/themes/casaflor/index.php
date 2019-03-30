<?php
/* index.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
*/
get_header();?>
<!-- Un lindo y bonito slideshow para deleitar -->
	<div id="slideshow" class="cycle-slideshow slideshow wrapper" 
		data-cycle-caption="#alt-caption"
	    data-cycle-caption-template="{{alt}}">

	<?php if(wpmd_is_notphone()) { ?>
		<?php
			if( has_post_thumbnail() ) {
				the_post_thumbnail('custom-thumb-1200-300');
			} else {
				echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
			};
		?>
	<?php } else { ?>
		<?php
			if( has_post_thumbnail() ) {
				the_post_thumbnail('custom-thumb-930-250');
			} else {
				echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
			};
		?>
	<?php };?>

		<div id="alt-caption"></div>			
	</div><!-- #slideshow -->
</header>

<div class="wrapper plateado">
	<section class="seccion_gris">
		<div class="home_text space-bot custom-post-type gradient">
			<div class="second_nav">
				<h2><?php _e('Noticias y promociones', 'casaflor');?></h2>

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
				<h3><i class="icon-profile"> </i>Estás son las últimas noticias al respecto</h3>
				<h3><i class="icon-sad"> </i>Lo sentimos (mentira! no es cierto); no encontramos nada al respecto.</h3>
				
				<div class="texto search">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<article>
						<div class="etiquetas">
							<ul class="inline-block">
								<li><i class="icon-bubbles3"></i><a  href=""><?php comments_number(__('0', 'casaflor'), __('1', 'casaflor'), __('%', 'casaflor'));?></a></li>
								<li><i class="icon-folder-open"></i><a href="">Promociones</a></li>
								<li><i class="icon-calendar2"></i><?php the_date();?></li>
								<li><i class="icon-user"> </i><?php the_author();?></li>
							</ul>
						</div>
						<h4><?php the_title();?></h4>
						<figure class="figure width-200px">
							<a href="<?php the_permalink();?>">
								<?php
									if( has_post_thumbnail() ) {
										the_post_thumbnail('custom-thumb-200-x');
									} else {
										echo '<img src="'.get_stylesheet_directory_uri().'/img/viendo_informacion-2400x900.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
									};
								?>
							</a>
						</figure>
						<?php the_excerpt();?>
						<a class="ver_mas boton black" href="<?php the_permalink();?>"><?php _e('Ver más', 'casaflor');?></a>
					</article>
					
					<?php endwhile; else: ?>
					<article>
						<h3><?php _e('Auscencia de entradas.', 'casaflor');?></h3>
						<blockquote>
							<?php _e('No hay nada publicado hasta ahora.', 'casaflor');?>
						</blockquote>
					</article>
					<?php endif;?>				
				</div>
				<?php if (function_exists("pagination")) {pagination();};?>
			</div>
		</div>
	</section>
<?php get_sidebar(); get_footer();?>