 <?php wp_head();?>
 
 <?php get_header(); ?>
<div class="Container">

	<main class="Main"  id="Aticulos">
	
<section class="articulos">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="articulo-single">
	
			<hgroup class="group-titulos">
				<h2 class="titulo">
					<a class="link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
				</h2>
			</hgroup>
			
			<div class="thumb articulos-img">
				<a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
				</a>
			</div>
	
			<?php 	the_content(); # texto;?>
			
	<div class="date"><?php the_date();?> en <span class="category"><?php the_category();?></span></div>
		

 <?php
		// Include the single post content template.
		get_template_part( 'template-parts/content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

	?>		
	</article>	
	
		<?php endwhile; else: ?>

	<article>
		<p>No hay contenido a mostrar </p>
	</article>

 <?php endif; ?>
 

 
</section>
			
	</main>
	
	<?php get_sidebar(); ?>

<!--Footer-->
	<?php get_footer(); ?>
		
	</div>