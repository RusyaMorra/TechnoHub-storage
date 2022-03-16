<main>

	<div class="lqd-dsd-wrap">

		<?php include_once( get_template_directory() . '/liquid/admin/views/liquid-tabs.php' ); ?>

		<?php if ( 'valid' != get_option( 'hub_purchase_code_status', false ) ) :
			
			echo '<div class="error"><p>' .
					sprintf( wp_kses_post( __( 'The %s theme needs to be registered. %sRegister Now%s', 'hub' ) ), 'Hub', '<a href="' . admin_url( 'admin.php?page=liquid') . '">' , '</a>' ) . '</p></div>';
			
		else: ?>
	
		<header class="lqd-dsd-header">
			<div class="lqd-dsd-header-inner">
				<h2><?php esc_html_e( 'Import a Demo', 'hub' ); ?></h2>
				<p><?php esc_html_e( 'Choose a pre-built website for starting a quick design process.', 'hub' ) ?></p>
			</div>
			<div class="lqd-msg lqd-dsd-notice">
				<p><span><?php esc_html_e( 'Important:', 'hub' ); ?></span> <?php esc_html_e( 'Make sure to activate required plugins prior to import a demo.', 'hub' ) ?></p>
			</div>
		</header>

		<?php

			include( locate_template( 'theme/liquid-demo-config.php' ) );
			$i = 0;
			wp_localize_script( 'liquid-admin', 'liquid_demos', $demos );

		?>
		<div id="lqd-demos" class="lqd-solid-wrap">

			<div class="lqd-tab-nav dashboard-select-builder">
				<ul>
					<li><a class="active" href="#lqd-demos-elementor" data-filter="elementor"><img src="<?php echo esc_url(get_template_directory_uri() . '/theme/plugins/images/elementor.png'); ?>">Elementor</a></li>
					<li><a href="#lqd-demos-wpbakery" data-filter="wpbakery"> <img src="<?php echo esc_url(get_template_directory_uri() . '/theme/plugins/images/bakery-1.jpg'); ?>"> WPBakery</a></li>
				</ul>
			</div>

			<div class="lqd-tab-content">
				<div class="lqd-row">
					<?php foreach( $demos as $id => $demo ): ?>

					<div class="lqd-col lqd-col-4 <?php echo !empty($demo['builder']) ? esc_attr($demo['builder']) : esc_attr('wpbakery'); ?>">
			
						<div class="lqd-dsd-demo-item">

							<figure>
								<img src="<?php echo esc_url( $demo['screenshot'] ); ?>" alt="<?php echo esc_attr( $demo['title'] ); ?>">
								<div class="lqd-dsd-overlay">
									<a href="#" id="import-id" data-import-id="<?php echo esc_attr( $i ); ?>" data-demo-id="<?php echo esc_attr( $id ); ?>" class="lqd-btn lqd-import-popup">
										<span><?php esc_html_e( 'Import Demo', 'hub' ); ?></span>
									</a>
									<a target="_blank" href="<?php echo esc_url( $demo['preview'] ); ?>" class="lqd-btn lqd-preview-btn">
										<span><?php esc_html_e( 'Preview', 'hub' ); ?></span>
										<span class="lqd-btn-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
										</span>
									</a>
								</div>
							</figure>
							<h3><?php echo esc_html( $demo['title'] ); ?></h3>
						</div>
					</div>

					<?php $i++; ?>
					<?php endforeach; ?>

				</div>
			</div>

		<script type="text/template" id="tmpl-demo-import-modules">
			<div id="lqd-progress-popup" class="lqd-imp-popup-wrap is-active">
				<div class="lqd-imp-progress">
					<h6><?php esc_html_e( 'Importing...', 'hub' ); ?></h6>
					<div id="liquid-progress" class="importing"><?php esc_html_e( 'Working', 'hub' )?> <span>.</span><span>.</span><span>.</span></div>
					<div class="lqd-progressbar">
						<div class="lqd-progressbar-inner" style="width: 0%">
							<span id="lqd-loader" class="lqd-progressbar-percentage"><?php esc_html_e( '0%', 'hub' ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</script>

		<script type="text/template" id="tmpl-demo-popup">
			<div id="lqd-popup" class="lqd-imp-popup-wrap is-active">
				<div class="lqd-imp-popup-inner">
				
					<span class="lqd-imp-popup-close">
						<svg width="12px" height="12px" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Dashboard---Import-Panel---Final" transform="translate(-751.000000, -539.000000)" fill="#2B2B2B">
											<g id="Group-5-Copy" transform="translate(727.000000, 514.000000)">
													<polygon id="close---material" points="35.82 26.36 31.18 31 35.82 35.64 34.64 36.82 30 32.18 25.36 36.82 24.18 35.64 28.82 31 24.18 26.36 25.36 25.18 30 29.82 34.64 25.18"></polygon>
											</g>
									</g>
							</g>
						</svg>
					</span>
					
					<div class="lqd-imp-popup-head">
					
						<figure>
							<img src="<%= screenshot %>" alt="<%= title %>">
						</figure>
						
						<div class="lqd-imp-notes">
							<h6><%= title %></h6>
							<div class="lqd-msg lqd-dsd-notice">
								<p><span><?php esc_html_e( 'Important:', 'hub' ); ?></span> <?php esc_html_e( 'Make sure to activate required plugins prior to import a demo.', 'hub' ); ?></p>
							</div>
						</div>
				
					</div>
					<div class="lqd-imp-popup-content lqd-row">
					
						<div class="lqd-col lqd-col-7">
							<p><?php esc_html_e( 'Make sure to activate required plugins prior to import a demo.', 'hub' ); ?></p>
						</div>
					
						<div class="lqd-col lqd-col-12">
							<div id="lqd-import-opts" class="lqd-row">
							
							<div class="lqd-col lqd-col-6">
								<span class="lqd-imp-opt">
									<input id="lqd-imp-all" type="checkbox" value="set_demo_content" checked="">
									<label for="lqd-imp-all"></label>
									<span><?php esc_html_e( 'All Content', 'hub' ); ?></span>
								</span>
							</div>

							<div class="lqd-col lqd-col-6">
								<span class="lqd-imp-opt">
									<input id="lqd-imp-media" type="checkbox" value="import_media" checked="">
									<label for="lqd-imp-media"></label>
									<span><?php esc_html_e( 'Media Attachments', 'hub' ); ?></span>
								</span>
							</div>
							
							<div class="lqd-col lqd-col-6" style="display:none;">
								<span class="lqd-imp-opt">
									<input id="lqd-imp-revslider" type="checkbox" value="import_slider" checked="">
									<label for="lqd-imp-content"></label>
									<span><?php esc_html_e( 'Revslider', 'hub' ); ?></span>
								</span>
							</div>

												<div class="lqd-col lqd-col-6">
								<span class="lqd-imp-opt">
									<input id="lqd-imp-example" type="checkbox" value="import_theme_options" checked="">
									<label for="lqd-imp-example"></label>
									<span><?php esc_html_e( 'Theme Options', 'hub' ) ?></span>
								</span>
												</div>

							<div class="lqd-col lqd-col-6">
								<span class="lqd-imp-opt">
									<input id="lqd-imp-sidebar" type="checkbox" value="import_theme_widgets" checked="">
									<label for="lqd-imp-sidebar"></label>
									<span><?php esc_html_e( 'Sidebars', 'hub' ); ?></span>
								</span>
							</div>
							
							<div class="lqd-col lqd-col-6">
								<span class="lqd-imp-opt">
									<input id="lqd-imp-content" type="checkbox" value="set_home_page" checked="">
									<label for="lqd-imp-content"></label>
									<span><?php esc_html_e( 'Home Page', 'hub' ); ?></span>
								</span>
							</div>
							
							</div>
					</div>
					
					<div class="lqd-col lqd-col-12">
		
						<div class="lqd-imp-terms">
							<span class="lqd-imp-opt">
								<input id="terms-agree" name="terms-agree" type="checkbox" value="no">
								<label for="terms-agree"></label>
								<span><?php esc_html_e( 'This process will overwrite your current settings, are you sure you want to proceed?', 'hub' ); ?></span>
							</span>
						</div>
		
					</div>
					
					<div class="lqd-col lqd-col-12">
						<button class="lqd-import-btn" data-revslider="true" data-id="0">
							<span><?php esc_html_e( 'Import Demo', 'hub' ); ?></span>
							<i></i>
						</button>
					</div>
					
					</div>
				
				</div>
			</div>
		
		</script>
			
		</div>
		<?php endif; ?>
	</div>

</main>
