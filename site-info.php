<div class="site-info">

	<?php
		$copyright = authorize_get_footer_copyright();

		if ( is_null( $copyright ) ):
	?>

            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'authorize' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'authorize' ), 'WordPress' ); ?></a>

        <span class="sep"> | </span>

        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'authorize' ), 'Authorize', '<a href="http://workingwebsites.ca/" rel="designer">Working Websites</a>' ); ?>

	<?php else: ?>

        <?php echo $copyright  ?>

    <?php endif ?>



</div><!-- .site-info -->
