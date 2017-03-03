# wp-customizer-footer
Code to add a 'copyright line' in the footer of WordPress.
Users can enter their own copyright info.
The default is the current date.

There are 2 files:

1) customizer-footer-copyright.php This file has the code to add the customize footer copyright to the Customizer area of your WordPress theme.

2) site-info.php This is the file that displays the footer info. This will go in your theme area.

HOW TO USE:

1)  Upload customizer-footer-copyright.php into your theme directory
Now it's available.

2) In the functions.php file of your theme, include the file.
Ex.:  include(customizer-footer-copyright.php)

That should give you the functionality.  You should see the footer copyright box in the customizer in the dashboard.

Now, you need to display the code on the site where you want it.
site-info.php is just a guidelines.  That file may or may not be in your theme.

The key is to add the following to where you want the copyright line to go.  
It's probably in the footer.

<?php
  $copyright = wws_get_footer_copyright();

  if ( is_null( $copyright ) ):
 ?>

    <! -- What to show if there's no footer -->

<?php else: ?>

      <?php echo $copyright  ?>

<?php endif ?>
