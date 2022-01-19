<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the main containers
 *
 * @package Hub theme
 */
?>

			<?php liquid_action( 'after_content' ); ?>
			</div>
			<?php liquid_action( 'after_contents_wrap' ); ?>
		</main>
		<?php
		liquid_action( 'before_footer' );
		liquid_action( 'footer' );
		liquid_action( 'after_footer' );
		?>

	</div>

	<?php liquid_action( 'after' ) ?>

	<?php wp_footer(); ?>

</body>
</html>