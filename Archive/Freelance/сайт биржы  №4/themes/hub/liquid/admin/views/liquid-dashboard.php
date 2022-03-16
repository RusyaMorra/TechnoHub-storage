<main>

	<div class="lqd-dsd-wrap">

		<?php include_once( get_template_directory() . '/liquid/admin/views/liquid-tabs.php' ); ?>
	
		<header class="lqd-dsd-header">
			<div class="lqd-dsd-header-inner">
				<h2><?php esc_html_e( 'Welcome to Hub!', 'hub' ); ?></h2>
				<p><?php esc_html_e( 'Total design freedom for everyone.', 'hub' ) ?></p>
			</div>
		</header>
		
		<div class="lqd-row">

			<div class="lqd-col lqd-col-6">
				<?php include_once( get_template_directory() . '/liquid/admin/views/liquid-registration.php' ); ?>
			</div>

			<div class="lqd-col lqd-col-6">

				<?php include_once( get_template_directory() . '/liquid/admin/views/liquid-features.php' ); ?>

			</div>

		</div>

	</div>

</main>
