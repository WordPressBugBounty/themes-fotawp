<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="fotawp-banner">
	<div class="inner-wrap">
		<p class="section-pill"><?php esc_html_e( 'Powered by Cozy Blocks', 'fotawp' ); ?></p>
		<div class="fotawp-spacer xs"></div>
		<h1 class="banner-heading"><?php esc_html_e( 'Welcome to FotaWP 👋', 'fotawp' ); ?></h1>
		<p><?php esc_html_e( 'Everything you need to create a beautiful, professional website is ready to go. Powered by Cozy Blocks, FotaWP gives you flexible design options and powerful tools to build your site your way. Start with a pre-built Starter Template or unlock more with Pro.', 'fotawp' ); ?>
		</p>
		<div class="fotawp-spacer sm"></div>
		<div class="buttons-group">
			<?php
			if ( ! fotawp_is_plugin_installed( 'cozy-addons/cozy-addons.php' ) || ! fotawp_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
				?>
				<button class="cozy-addons-install btn btn-primary has-spinner">
					<a href="#"><?php esc_html_e( 'Install Cozy Blocks →', 'fotawp' ); ?></a>
					<span class="spinner fotawp-display-none" id="fotawp-admin-spinner"></span>
				</button>
				<?php
			} else {
				?>
				<button class="btn btn-primary">
					<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e( 'Start with a Starter Template →', 'fotawp' ); ?></a>
				</button>
				<?php
			}

			if ( ! fotawp_premium_access() ) {
				?>
			<button class="btn btn-secondary has-icon">
				<a href="https://cozythemes.com/pricing-and-plans" target="_blank" rel="noopener">
					<i>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.3307 1.33331V4.66665M13.9974 2.99998H10.6641" stroke="currentColor"
								stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M3.33594 14.6667H12.6693" stroke="currentColor" stroke-width="1.2"
								stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M11.2504 12.6666H4.7548C4.06938 12.6666 3.72668 12.6666 3.46676 12.4822C3.20683 12.2978 3.0936 11.9744 2.86713 11.3274L1.37009 7.05111C1.29042 6.81551 1.35262 6.55571 1.53077 6.38009C1.75496 6.15907 2.10624 6.12478 2.37005 6.29816L3.1916 6.83811C4.02086 7.38311 4.4355 7.65565 4.8547 7.55658C5.27391 7.45751 5.52273 7.02825 6.02037 6.16972L7.49674 3.62273C7.60047 3.44376 7.79354 3.33331 8.0026 3.33331C8.21167 3.33331 8.40474 3.44376 8.50847 3.62273L9.9848 6.16972C10.4825 7.02825 10.7313 7.45751 11.1505 7.55658C11.5697 7.65565 11.9843 7.38311 12.8136 6.83811L13.6351 6.29816C13.8989 6.12478 14.2503 6.15907 14.4745 6.38009C14.6526 6.55571 14.7148 6.81551 14.6351 7.05111L13.1381 11.3274C12.9116 11.9744 12.7984 12.2978 12.5385 12.4822C12.2785 12.6666 11.9358 12.6666 11.2504 12.6666Z"
								stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</i>
					<?php esc_html_e( 'Unlock Pro', 'fotawp' ); ?>
				</a>
			</button>
				<?php
			}
			?>

		</div>
	</div>
	<figure class="banner-image">
		<img height="330" src="<?php echo esc_url( FOTAWP_URL . 'admin/images/dashboard-banner.png' ); ?>" />
	</figure>
</div>