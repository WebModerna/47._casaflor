<?php
/* noticias.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
* Template Name: Noticias
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
				<h3>
					<i class="icon-profile"> </i><?php $my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); echo $my_data;?>
				</h3>
					
				<div class="texto search">
					<?php // WP_Query arguments
						$args = array (
							'post_type'              => 'post',
						);

						// The Query
						$query = new WP_Query( $args );

						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								// do something ?>
					<article>
						<div class="etiquetas">
							<ul class="inline-block">
								<li>
									<i class="icon-bubbles3"></i><a  href=""><?php comments_number(__('0', 'casaflor'), __('1', 'casaflor'), __('%', 'casaflor'));?></a>
								</li>
								<li>
									<i class="icon-folder-open"></i><?php
									$category = get_the_category(); 
									echo $category[0]->cat_name;
									?>
								</li>
								<li>
									<i class="icon-calendar2"></i><?php the_date();?>
								</li>
								<li>
									<i class="icon-user"> </i><?php the_author();?>
								</li>
							</ul>
						</div>
						<h4><?php the_title();?></h4>
						<figure class="figure width-200px">
							<a href="<?php the_permalink();?>">
								<?php
									if( has_post_thumbnail() ) {
										the_post_thumbnail('custom-thumb-600-x');
									} else {
										echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
									};
								?>
							</a>
						</figure>
						<?php the_excerpt();?>
						<a class="ver_mas boton black" href="<?php the_permalink();?>"><?php _e('Ver más', 'casaflor');?></a>
					</article>
					
					<?php }
						} else { ?>
					<article>
						<h3><?php _e('Auscencia de entradas.', 'casaflor');?></h3>
						<blockquote>
							<?php _e('No hay nada publicado hasta ahora.', 'casaflor');?>
						</blockquote>
					</article>
					<?php }
						wp_reset_query();
						wp_reset_postdata();?>
					
				</div>
				<?php if (function_exists("pagination")) {pagination();};?>
				<!-- <ul class="pagin text-center">
					<li><a href=""><strong>&lsaquo;</strong></a></li>
					<li><a href="">1</a></li>
					<li><a href="" class="active">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="" class="more">&hellip;</a></li>
					<li><a href="">7</a></li>
					<li><a href="">8</a></li>
					<li><a href="">9</a></li>
					<li><a href="">10</a></li>
					<li><a href=""><strong>&rsaquo;</strong></a></li>
				</ul> -->
			</div>


		</div>
	</section>
<?php get_sidebar(); get_footer();?>