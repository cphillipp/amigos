		</div><!-- .wrapper -->
    </div><!-- #container -->
	<div id="footer-container">
    	<div class="wrapper">
        	<?php if (is_active_sidebar('footer-widgets')) { ?>
            <div id="footer">
            	<div id="footer-border">
					<?php if ( ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets') ) && is_active_sidebar('footer-widgets') ) :
                    endif; ?>
            	</div>
            </div><!-- #footer -->
            <?php } ?>
            <ul id="footer-links">
                <li><?php _e( 'Copyright &copy;', $theme_name ); ?> <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  - Made by <a href="http://www.grovisible.com/" target="_BLANK">http://www.grovisible.com/</a></li>
            </ul>
		</div><!-- .wrapper -->
	</div><!-- #footer-container -->
</div><!-- #wrapper -->
<?php wp_footer();
include_once('jquery.php'); ?>

</body>
</html>