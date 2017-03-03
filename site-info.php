<div class="site-info">

	<?php
		$copyright = wws_get_footer_copyright();

		if ( is_null( $copyright ) ):
	 ?>

	 			<a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf( esc_htm( 'Proudly powered by %s' ), 'WordPress' ); ?></a>

        <span class="sep"> | </span>

        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'authorize' ), 'Authorize', '<a href="http://workingwebsites.ca/" rel="designer">Working Websites</a>' ); ?>

	<?php else: ?>

        <?php echo $copyright  ?>

  <?php endif ?>



</div><!-- .site-info -->
