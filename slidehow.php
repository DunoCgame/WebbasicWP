

<div   class="slideshow-container" id="ContainderSlideShow" >
	 <?php #query_posts("paged=$paged");?>
	 <?php #query_posts('category_name=slider'); ?>
	<?php if (have_posts()) : while (have_posts()) :the_post();?>

	<div class="mySlides"  >
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?>
	</div>
	<?php endwhile; else: ?>
		<h1> no se encuentran articulos</h1>
	<?php endif;?>
	<a class="prev" onclick="plusSlidesprev(1)">&#10094;</a>
	<a class="next" onclick="plusSlidesnext(-1)">&#10095;</a>
</div>


