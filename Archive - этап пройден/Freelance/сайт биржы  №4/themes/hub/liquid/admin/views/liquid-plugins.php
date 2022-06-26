<?php

$current_theme = wp_get_theme();

if( $current_theme->parent_theme ) {
	$template_dir  = basename( get_template_directory() );
	$current_theme = wp_get_theme($template_dir);
}

$installed_plugins = get_plugins();
$plugins = TGM_Plugin_Activation::$instance->plugins;

?>
<main>

	<div class="lqd-dsd-wrap">

		<?php include_once( get_template_directory() . '/liquid/admin/views/liquid-tabs.php' ); ?>

		<?php if ( 'valid' != get_option( 'hub_purchase_code_status', false ) ) :
			
			echo '<div class="error"><p>' .
					sprintf( wp_kses_post( __( 'The %s theme needs to be registered. %sRegister Now%s', 'hub' ) ), 'Hub', '<a href="' . admin_url( 'admin.php?page=liquid') . '">' , '</a>' ) . '</p></div>';
			
		else: ?>
	
		<header class="lqd-dsd-header">
			<div class="lqd-dsd-header-inner">
				<h2><?php esc_html_e( 'Install Plugins', 'hub' ); ?></h2>
				<p><?php esc_html_e( 'Choose a pre-built website for starting a quick design process.', 'hub' ); ?></p>
			</div>
			<div class="lqd-msg lqd-dsd-notice">
				<p><span><?php esc_html_e( 'Important:', 'hub' ); ?></span> <?php esc_html_e( 'Make sure to activate required plugins prior to import a demo.', 'hub' ); ?></p>
			</div>
		</header>

		<div class="lqd-solid-wrap">
			<div class="lqd-row">
	        
	        <?php
		
				foreach( $plugins as $plugin ) :
					$class = $status = $display_status = '';
					$file_path = $plugin['file_path'];
	
					// Install
					if( !isset( $installed_plugins[ $file_path ] ) ) {
						$status = 'not-installed';
					}
					// No Active
					elseif ( is_plugin_inactive( $file_path ) ) {
						$status = 'installed';
					}
					// Deactive
					elseif( !is_plugin_inactive( $file_path ) ) {
						$status = 'active';
						$class = ' lqd-dsd-plugin-active';
						$display_status = esc_html__( 'Active:', 'hub' );
					}
			?>

				<div class="lqd-col lqd-col-3">
					<div class="lqd-dsd-plugin<?php echo esc_attr( $class ); ?>">
					<span class="lqd-dsd-plugin-icon">
						<img src="<?php echo esc_url( $plugin['liquid_logo'] ); ?>" alt="<?php echo esc_attr( $plugin['name'] ) ?>">
					</span>
					<h3><?php printf( '<span>%s</span>', $display_status ); ?> <?php echo esc_html( $plugin['name'] ) ?></h3>
					<p><?php echo esc_html( $plugin['liquid_description'] ) ?></p>
					
					<?php liquid_helper()->tgmpa_plugin_action( $plugin, $status ); ?>
				</div>
				</div>

			<?php endforeach; ?>

			</div>
		</div>
		<?php endif; ?>
	</div>

</main>