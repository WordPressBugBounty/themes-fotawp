<div class="getting-started">
	<h2 class="section-title"><?php esc_html_e( 'Complete Your Website Setup', 'fotawp' ); ?></h2>
	<p><?php esc_html_e( 'Complete these quick steps to get your site ready and start building with the WordPress Site Editor', 'fotawp' ); ?>
	</p>

	<div class="fotawp-spacer sm"></div>

	<div class="boxed-layout steps flex-layout">
		<div class="flex-layout">
			<i class="icon-wrap">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.75 10.5L6.375 13.125L14.25 4.875" stroke="currentColor" stroke-width="1.7"
						stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</i>
			<div>
				<h3 class="content-title"><?php esc_html_e( 'Activate Your Theme', 'fotawp' ); ?></h3>
				<div class="fotawp-spacer xs"></div>
				<p><?php esc_html_e( 'Your theme is ready to power your website. Get your design foundation in place and start customizing with the Site Editor.', 'fotawp' ); ?>
				</p>
			</div>
		</div>
		<button class="btn btn-success">
			<a>
				<?php esc_html_e( 'Completed', 'fotawp' ); ?>
			</a>
		</button>
	</div>

	<div class="fotawp-spacer sm"></div>

	<div class="boxed-layout steps flex-layout">
		<div class="flex-layout">
			<?php
			if ( fotawp_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
				?>
			<i class="icon-wrap">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.75 10.5L6.375 13.125L14.25 4.875" stroke="currentColor" stroke-width="1.7"
						stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</i>
				<?php
			} else {
				?>
			<i class="icon-wrap tone-warning">
				<svg width="18" height="18" fill="currentColor" version="1.1" id="Capa_1"
					xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
					viewBox="0 0 301.691 301.691" xml:space="preserve">
					<g>
						<polygon points="119.151,0 129.6,218.406 172.06,218.406 182.54,0 	" />
						<rect x="130.563" y="261.168" width="40.525" height="40.523" />
					</g>
				</svg>
			</i>
				<?php
			}
			?>
			<div>
				<h3 class="content-title"><?php esc_html_e( 'Get Cozy Blocks Ready', 'fotawp' ); ?></h3>
				<div class="fotawp-spacer xs"></div>
				<p><?php esc_html_e( 'Unlock powerful tools for your website. Use advanced blocks, patterns, and templates to create beautiful pages faster.', 'fotawp' ); ?>
				</p>
			</div>
		</div>
		<?php
		if ( fotawp_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
			?>
		<button class="btn btn-success">
			<a>
				<?php esc_html_e( 'Completed', 'fotawp' ); ?>
			</a>
		</button>
			<?php
		} else {
			?>
		<button class="cozy-addons-install btn btn-primary-accent has-spinner">
			<a>
				<?php esc_html_e( 'Install & Activate', 'fotawp' ); ?>
			</a>
			<span class="spinner fotawp-display-none" id="fotawp-admin-spinner"></span>
		</button>
			<?php
		}
		?>

	</div>

	<?php
	if ( fotawp_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
		?>
		<div class="fotawp-spacer sm"></div>

		<div class="boxed-layout steps flex-layout">
			<div class="flex-layout">
				<i class="icon-wrap">
					<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3.75 10.5L6.375 13.125L14.25 4.875" stroke="currentColor" stroke-width="1.7"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</i>
				<div>
					<h3 class="content-title"><?php esc_html_e( 'Start Building', 'fotawp' ); ?></h3>
					<div class="fotawp-spacer xs"></div>
					<p><?php esc_html_e( 'Turn your ideas into a website. Open the Site Editor and customize your site with complete creative freedom.', 'fotawp' ); ?>
					</p>
				</div>
			</div>
			<button class="btn btn-primary-accent">
				<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
					<?php esc_html_e( 'Customize', 'fotawp' ); ?>
				</a>
			</button>
		</div>
		<?php
	}
	?>
</div>