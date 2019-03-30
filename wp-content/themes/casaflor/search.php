<?php
/* search.php
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
				<h2><i class="icon-search"> </i><?php _e('Búsquedas', 'casaflor');?></h2>

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
				<h3><i class="icon-search"> </i>Resultados obtenidos: <strong class="boton black">
					<?php
						$allsearch = new WP_Query("s=$s&showposts=-1");
						$count = $allsearch->post_count;
						echo $count;
						wp_reset_query();
					?>
			</strong></h3>

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
					<a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
					<figure class="figure width-200px">
						<a href="<?php the_permalink();?>">
							<?php
								if( has_post_thumbnail() ) {
									the_post_thumbnail('custom-thumb-300-300');
								} else {
									echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
								};
							?>
						</a>
					</figure>
					<?php the_excerpt();?>
					<a class="ver_mas boton black" href="<?php the_permalink();?>"><?php _e('Ver más', 'casaflor');?></a>
				</article>

				<?php endwhile; else: ?>
				<article>
					<h3><?php _e('No hay nada.', 'casaflor');?></h3>
					<blockquote>
						<?php _e('No encontramos nada de lo que estás buscando. Intentá buscar otra cosa.');?>
					</blockquote>
				</article>
				<?php endif;?>
			</div>
			<?php if (function_exists("pagination")) {pagination();};?>
			</div>
		</div>
	</section>
<?php get_sidebar(); get_footer();?>