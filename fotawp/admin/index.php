<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div id="fotawp-dashboard">
	<?php require FOTAWP_DIR . 'admin/sections/banner.php'; ?>

	<div class="fotawp-spacer"></div>

	<div class="cols-wrapper">
		<div class="col-item">
			<?php require FOTAWP_DIR . 'admin/sections/getting-started.php'; ?>

			<div class="fotawp-spacer"></div>

			<?php require FOTAWP_DIR . 'admin/sections/customize-website.php'; ?>

			<div class="fotawp-spacer"></div>

			<?php require FOTAWP_DIR . 'admin/sections/starter-templates.php'; ?>

			<div class="fotawp-spacer"></div>

			<?php require FOTAWP_DIR . 'admin/sections/theme-demos.php'; ?>

			<div class="fotawp-spacer"></div>

			<?php require FOTAWP_DIR . 'admin/sections/faq.php'; ?>
		</div>
		<aside class="col-item">
			<div class="is-sticky">
				<?php
				if ( ! fotawp_premium_access() ) {
					?>
				<div class="boxed-layout upsell-boxed-layout">
					<h3 class="sidebar-title">
						<i>
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
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
						<?php esc_html_e( 'Build More With Pro', 'fotawp' ); ?>
					</h3>

					<ul class="icon-list">
						<li class="list-item">
							<i class="check-icon">
								<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M2.08594 5.83331L3.54427 7.29165L7.91927 2.70831" stroke="currentColor"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</i>
							<?php esc_html_e( 'Premium Templates', 'fotawp' ); ?>
						</li>
						<li class="list-item">
							<i class="check-icon">
								<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M2.08594 5.83331L3.54427 7.29165L7.91927 2.70831" stroke="currentColor"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</i>
							<?php esc_html_e( '700+ patterns', 'fotawp' ); ?>
						</li>
						<li class="list-item">
							<i class="check-icon">
								<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M2.08594 5.83331L3.54427 7.29165L7.91927 2.70831" stroke="currentColor"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</i>
							<?php esc_html_e( '50+ Advanced Blocks', 'fotawp' ); ?>
						</li>
						<li class="list-item">
							<i class="check-icon">
								<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M2.08594 5.83331L3.54427 7.29165L7.91927 2.70831" stroke="currentColor"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</i>
							<?php esc_html_e( 'Priority Support', 'fotawp' ); ?>
						</li>
					</ul>

					<div class="fotawp-spacer sm"></div>

					<button class="btn btn-secondary is-full-width">
						<a href="https://cozythemes.com/pricing-and-plans/#free-vs-pro" target="_blank" rel="noopener nofollow">
							<?php esc_html_e( 'Compare Free vs Pro', 'fotawp' ); ?>
						</a>
					</button>

					<div class="fotawp-spacer sm"></div>

					<button class="btn btn-primary is-full-width">
						<a href="https://cozythemes.com/pricing-and-plans/" target="_blank" rel="noopener nofollow">
							<?php esc_html_e( 'Upgrade Now', 'fotawp' ); ?>
						</a>
					</button>
				</div>

				<div class="fotawp-spacer sm"></div>
					<?php
				}
				?>

				<div class="boxed-layout">
					<h3 class="sidebar-title"><?php esc_html_e( 'Need Help?', 'fotawp' ); ?></h3>
					<?php require FOTAWP_DIR . 'admin/sections/helper-links.php'; ?>
				</div>

				<div class="fotawp-spacer sm"></div>

				<div class="boxed-layout">
					<h3 class="sidebar-title">
						<i class="sidebar-icon">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M4.57411 14.25C3.59903 14.1541 2.86856 13.8612 2.37868 13.3713C1.5 12.4927 1.5 11.0784 1.5 8.25V7.875C1.5 5.04657 1.5 3.63236 2.37868 2.75368C3.25736 1.875 4.67157 1.875 7.5 1.875H10.5C13.3284 1.875 14.7427 1.875 15.6213 2.75368C16.5 3.63236 16.5 5.04657 16.5 7.875V8.25C16.5 11.0784 16.5 12.4927 15.6213 13.3713C14.7427 14.25 13.3284 14.25 10.5 14.25C10.0796 14.2594 9.74482 14.2913 9.41595 14.3663C8.51715 14.5732 7.68487 15.0331 6.8624 15.4342C5.69047 16.0056 5.1045 16.2914 4.73677 16.0238C4.03327 15.4999 4.72091 13.8764 4.875 13.125"
									stroke="#4C3EFA" stroke-width="1.5" stroke-linecap="round" />
							</svg>
						</i>
						<?php esc_html_e( 'Enjoying FotaWP?', 'fotawp' ); ?>
					</h3>
					<p><?php esc_html_e( 'Your review helps us grow and make FotaWP even better.', 'fotawp' ); ?>
					</p>
					<div class="fotawp-spacer sm"></div>
					<button class="btn btn-tertiary is-full-width">
						<a href="https://wordpress.org/support/theme/fotawp/reviews/#new-post"
							target="_blank"><?php esc_html_e( 'Leave a Review', 'fotawp' ); ?></a>
					</button>
				</div>
		</aside>
	</div>

	<?php
	if ( ! fotawp_premium_access() ) {
		?>
	<div class="fotawp-spacer"></div>
	
	<div id="cta">
		<figure class="featured-image">
			<a href="https://cozythemes.com/pricing-and-plans" target="_blank" rel="noopener">
				<img height="450" src="https://plugins.cozythemes.com/cozy-addons/admin/assets/media/cta.png"
					alt="Cozy Blocks features" />
			</a>
		</figure>
	</div>
	<div class="fotawp-spacer"></div>
		<?php
		require FOTAWP_DIR . 'admin/sections/refund-banner.php';
	}
	?>

</div>