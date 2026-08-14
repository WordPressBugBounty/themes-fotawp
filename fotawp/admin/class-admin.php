<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class FotaWP_Admin {
	private static $instance = null;

	private static $dir = FOTAWP_DIR . 'admin/';
	private static $url = FOTAWP_URL . 'admin/';

	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct() {
		$this->include_files();

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );

		add_action( 'admin_notices', array( $this, 'welcome_notice' ) );

		add_action( 'admin_menu', array( $this, 'register_theme_menu' ) );
	}

	private function include_files() {
		require_once self::$dir . 'includes/class-admin-ajax.php';
		FotaWP_Admin_Ajax::get_instance();
	}

	public function enqueue_admin_assets() {
		if ( ! function_exists( 'get_current_screen' ) ) {
			return;
		}

		$saaslauncher_notice_current_screen = get_current_screen();

		$allowed_pages = array(
			'dashboard',
			'themes',
		);

		if ( ( isset( $_GET['page'] ) && ! empty( $_GET['page'] ) && 'about-fotawp' === $_GET['page'] ) || in_array( $saaslauncher_notice_current_screen->id, $allowed_pages, true ) ) {
			wp_enqueue_style( 'fotawp-admin-style', self::$url . 'css/admin-style.css', array(), FOTAWP_VERSION, 'all' );

			wp_enqueue_script( 'fotawp-admin-scripts', self::$url . 'js/admin-scripts.js', array( 'jquery' ), FOTAWP_VERSION, true );
			wp_localize_script(
				'fotawp-admin-scripts',
				'ajaxObj',
				array(
					'ajaxURL'      => admin_url( 'admin-ajax.php' ),
					'welcomeNonce' => wp_create_nonce( 'fotawp_welcome_nonce' ),
					'redirectURL'  => admin_url( 'themes.php?page=about-fotawp' ),
				)
			);
		}
	}

	public function welcome_notice() {
		$current_screen  = get_current_screen();
		$allowed_screens = array( 'dashboard', 'themes' );
		if ( ! in_array( $current_screen->id, $allowed_screens, true ) || is_network_admin() || ! current_user_can( 'manage_options' ) || get_option( 'saaslauncher_dismissed_custom_notice' ) ) {
			return;
		}
		?>
		<div class="fotawp-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="fotawp-welcome-notice">
			<div class="content-holder">
				<div class="notices">
					<figure class="brand-logo">
						<img width="44" height="44" src="<?php echo esc_url( self::$url . 'images/cozy-addons-icon.png' ); ?>" alt="Cozy Blocks logo" />
					</figure>

					<div>
						<p class="highlighted-text"><?php esc_html_e( 'Welcome to FotaWP! 🎉', 'fotawp' ); ?></p>
						<h2 class="notice-heading"><?php esc_html_e( 'Supercharge Your Website with Cozy Blocks', 'fotawp' ); ?></h2>
	
						<p><?php esc_html_e( 'Build faster and launch sooner with Cozy Blocks—powerful blocks, ready-made sections, and starter templates help you create stunning websites without starting from scratch.', 'fotawp' ); ?></p>
	
						<div class="notice-buttons">
							<?php
							if ( is_plugin_active( 'cozy-addons/cozy-addons.php' ) ) {
								?>
								<button class="notice-button">
									<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e( 'Customize', 'fotawp' ); ?></a>
								</button>
								<button class="notice-button notice-button-secondary">
									<a href="<?php echo esc_url( admin_url( 'themes.php?page=about-fotawp' ) ); ?>"><?php esc_html_e( 'Getting Started', 'fotawp' ); ?></a>
								</button>
								<?php
							} else {
								?>
								<button class="cozy-addons-install notice-button has-spinner">
									<a href="#"><?php esc_html_e( 'Install Cozy Blocks →', 'fotawp' ); ?></a>
									<span class="spinner fotawp-display-none" id="fotawp-admin-spinner"></span>
								</button>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<figure class="notice-image">
					<img src="<?php echo esc_url( self::$url . 'images/theme_screen_img.png' ); ?>" />
				</figure>
			</div>
		</div>
		<?php
	}

	public function register_theme_menu() {
		add_theme_page(
			esc_html__( 'About FotaWP', 'fotawp' ),
			esc_html__( 'About FotaWP', 'fotawp' ),
			'edit_theme_options',
			'about-fotawp',
			array( $this, 'render_admin_dashboard' )
		);
	}

	public function render_admin_dashboard() {
		require_once self::$dir . 'index.php';
	}
}
