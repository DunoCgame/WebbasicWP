<footer class="Footer">
	<p class="footer-text">
	<?php 
	
	printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'Core-Tema-Wordpress' ), date( 'Y' ), get_bloginfo( 'name' ) );
	
	?>
	</p>
</footer>
<script src="<?php bloginfo('template_url')?>/js/slide.js"></script>
<?php wp_footer();?>

</html>