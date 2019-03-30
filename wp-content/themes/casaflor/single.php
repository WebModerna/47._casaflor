<?php get_header();?>
	<?php if(wpmd_is_notphone()) { ?>
	<!-- Un lindo y bonito slideshow para deleitar -->
	<div id="slideshow" class="cycle-slideshow slideshow wrapper" 
		data-cycle-caption="#alt-caption"
	    data-cycle-caption-template="{{alt}}">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/home5-2400x900.jpg" alt="Un gran complejo para disfrutar">
		<div id="alt-caption"></div>
	</div><!-- #slideshow -->
	<?php };?>
</header>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="wrapper plateado">
	<section class="seccion_gris">
		<div class="home_text space-bot custom-post-type gradient">
			<div class="second_nav">
				<h2><?php the_title();?></h2>

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
				<!-- <h3><i class="icon-profile"> </i><?php //the_title();?></h3>	 -->
				<div class="texto search">
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
						<figure class="figure">
								<?php
									if( has_post_thumbnail() ) {
										the_post_thumbnail('custom-thumb-600-x');
									} else {
										echo '<img src="'.get_stylesheet_directory_uri().'/img/big-1.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
									};
								?>
						</figure>
						<?php the_content();?>
					</article>
					<?php endwhile; else: ?>
					<article>
						<h3><?php _e('Auscencia de entradas.', 'casaflor');?></h3>
						<blockquote>
							<?php _e('No hay nada publicado hasta ahora.', 'casaflor');?>
						</blockquote>
					</article>
					<?php endif;?>

					<article>
						<ul class="sin-list-style">
							<li><?php previous_post_link();?></li>
							<li><?php next_post_link();?></li>
						</ul>
					</article>
					<article>
						<h3><i class="icon-bubbles4"> </i></h3>
						<?php comments_template( '', true );?>
					</article>
				</div>
			</div>
		</div>
	</section>
	
<?php get_sidebar(); get_footer();?>