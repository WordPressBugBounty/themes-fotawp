<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="fotawp-customize-website">
	<h2 class="section-title"><?php esc_html_e( 'Customize Your Website', 'fotawp' ); ?></h2>
	<p><?php esc_html_e( 'Make it yours in three focused areas — no overwhelming settings screens.', 'fotawp' ); ?>
	</p>
	<div class="cols-grid cols-3">
		<div class="boxed-layout">
			<h3 class="content-title has-icon">
				<i class="icon-wrap">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M14.6693 8C14.6693 4.31809 11.6845 1.33333 8.0026 1.33333C4.3207 1.33333 1.33594 4.31809 1.33594 8C1.33594 11.6819 4.3207 14.6667 8.0026 14.6667C8.56374 14.6667 9.33594 14.7442 9.33594 14C9.33594 13.594 9.12474 13.2808 8.915 12.9696C8.60807 12.5143 8.30414 12.0635 8.66927 11.3333C9.11374 10.4445 9.85447 10.4445 10.9903 10.4445C11.5582 10.4445 12.2249 10.4445 13.0026 10.3333C14.4033 10.1333 14.6693 9.27226 14.6693 8Z"
							stroke="currentColor" />
						<path
							d="M6.33594 6.66667C6.88822 6.66667 7.33594 6.21896 7.33594 5.66667C7.33594 5.11439 6.88822 4.66667 6.33594 4.66667C5.78365 4.66667 5.33594 5.11439 5.33594 5.66667C5.33594 6.21896 5.78365 6.66667 6.33594 6.66667Z"
							stroke="currentColor" />
						<path
							d="M11 7.33333C11.5523 7.33333 12 6.88561 12 6.33333C12 5.78104 11.5523 5.33333 11 5.33333C10.4477 5.33333 10 5.78104 10 6.33333C10 6.88561 10.4477 7.33333 11 7.33333Z"
							stroke="currentColor" />
						<path
							d="M4.75 9.99999H4.66667M4.83333 9.99999C4.83333 10.0921 4.75871 10.1667 4.66667 10.1667C4.57462 10.1667 4.5 10.0921 4.5 9.99999C4.5 9.90793 4.57462 9.83333 4.66667 9.83333C4.75871 9.83333 4.83333 9.90793 4.83333 9.99999Z"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

				</i>
				<?php esc_html_e( 'Brand Identity', 'fotawp' ); ?>
			</h3>

			<div class="fotawp-spacer sm"></div>

			<ul class="icon-list">
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M7.8724 8.45833L9.03906 10.7917L12.8307 3.20833H8.7474L6.9974 6.70833L4.95573 10.7917L1.16406 3.20833H5.2474L6.1224 4.95833"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2F&canvas=edit' ) ); ?>">
						<?php esc_html_e( 'Logo', 'fotawp' ); ?>
					</a>
				</li>
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.8307 7C12.8307 3.77834 10.219 1.16667 6.9974 1.16667C3.77573 1.16667 1.16406 3.77834 1.16406 7C1.16406 10.2216 3.77573 12.8333 6.9974 12.8333C7.48839 12.8333 8.16406 12.9012 8.16406 12.25C8.16406 11.8948 7.97926 11.6207 7.79575 11.3484C7.52718 10.95 7.26124 10.5556 7.58073 9.91667C7.96964 9.13891 8.61778 9.13891 9.6116 9.13891C10.1085 9.13891 10.6919 9.13891 11.3724 9.04167C12.598 8.86661 12.8307 8.11324 12.8307 7Z"
								stroke="currentColor" />
							<path
								d="M5.53906 5.83333C6.02231 5.83333 6.41406 5.44158 6.41406 4.95833C6.41406 4.47508 6.02231 4.08333 5.53906 4.08333C5.05581 4.08333 4.66406 4.47508 4.66406 4.95833C4.66406 5.44158 5.05581 5.83333 5.53906 5.83333Z"
								stroke="currentColor" />
							<path
								d="M9.625 6.41667C10.1082 6.41667 10.5 6.02492 10.5 5.54167C10.5 5.05842 10.1082 4.66667 9.625 4.66667C9.14175 4.66667 8.75 5.05842 8.75 5.54167C8.75 6.02492 9.14175 6.41667 9.625 6.41667Z"
								stroke="currentColor" />
							<path
								d="M4.15625 8.75001H4.08333M4.22917 8.75001C4.22917 8.83056 4.16387 8.89584 4.08333 8.89584C4.00279 8.89584 3.9375 8.83056 3.9375 8.75001C3.9375 8.66945 4.00279 8.60417 4.08333 8.60417C4.16387 8.60417 4.22917 8.66945 4.22917 8.75001Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2Fstyles&section=%2Fcolors' ) ); ?>">
						<?php esc_html_e( 'Color', 'fotawp' ); ?>
					</a>
				</li>
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M1.75 3.20833V3.49999C1.75 3.98325 2.14175 4.37499 2.625 4.37499H2.72222C3.15178 4.37499 3.5 4.02677 3.5 3.59722C3.5 3.38244 3.67411 3.20833 3.88889 3.20833H6.125L6.12529 10.7917H5.54193C5.05868 10.7917 4.66693 11.1834 4.66693 11.6667C4.66693 12.1499 5.05868 12.5417 5.54193 12.5417H8.45862C8.94186 12.5417 9.33362 12.1499 9.33362 11.6667C9.33362 11.1834 8.94186 10.7917 8.45862 10.7917H7.87529L7.875 3.20833H10.1111C10.3259 3.20833 10.5 3.38244 10.5 3.59722C10.5 4.02677 10.8482 4.37499 11.2778 4.37499H11.375C11.8582 4.37499 12.25 3.98325 12.25 3.49999V3.20833C12.25 2.24183 11.4665 1.45833 10.5 1.45833H3.5C2.5335 1.45833 1.75 2.24183 1.75 3.20833Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</i>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2Fstyles&section=%2Ftypography' ) ); ?>">
						<?php esc_html_e( 'Typography', 'fotawp' ); ?>
					</a>
				</li>
			</ul>
		</div>
		<div class="boxed-layout">
			<h3 class="content-title has-icon">
				<i class="icon-wrap">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M2 8C2 5.17157 2 3.75736 2.87868 2.87868C3.75736 2 5.17157 2 8 2C10.8284 2 12.2427 2 13.1213 2.87868C14 3.75736 14 5.17157 14 8C14 10.8284 14 12.2427 13.1213 13.1213C12.2427 14 10.8284 14 8 14C5.17157 14 3.75736 14 2.87868 13.1213C2 12.2427 2 10.8284 2 8Z"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M2.33594 5.33333H13.6693" stroke="currentColor" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M8.66406 8H11.3307" stroke="currentColor" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M8.66406 10.6667H9.9974" stroke="currentColor" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M6 5.33333V14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</i>
				<?php esc_html_e( 'Site Structure', 'fotawp' ); ?>
			</h3>
			<div class="fotawp-spacer sm"></div>

			<ul class="icon-list">
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M6.41667 1.75H7.58333C9.7832 1.75 10.8832 1.75 11.5666 2.43342C12.25 3.11684 12.25 4.21678 12.25 6.41667V7.58333C12.25 9.7832 12.25 10.8832 11.5666 11.5666C10.8832 12.25 9.7832 12.25 7.58333 12.25H6.41667C4.21678 12.25 3.11684 12.25 2.43342 11.5666C1.75 10.8832 1.75 9.7832 1.75 7.58333V6.41667C1.75 4.21678 1.75 3.11684 2.43342 2.43342C3.11684 1.75 4.21678 1.75 6.41667 1.75Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M9.33073 4.66667H4.66406" stroke="currentColor" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2Fpattern&postType=wp_template_part&categoryId=header' ) ); ?>">
						<?php esc_html_e( 'Header', 'fotawp' ); ?>
					</a>
				</li>
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M6.41667 1.75H7.58333C9.7832 1.75 10.8832 1.75 11.5666 2.43342C12.25 3.11684 12.25 4.21678 12.25 6.41667V7.58333C12.25 9.7832 12.25 10.8832 11.5666 11.5666C10.8832 12.25 9.7832 12.25 7.58333 12.25H6.41667C4.21678 12.25 3.11684 12.25 2.43342 11.5666C1.75 10.8832 1.75 9.7832 1.75 7.58333V6.41667C1.75 4.21678 1.75 3.11684 2.43342 2.43342C3.11684 1.75 4.21678 1.75 6.41667 1.75Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M9.33073 9.33333H4.66406" stroke="currentColor" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2Fpattern&postType=wp_template_part&categoryId=footer' ) ); ?>">
						<?php esc_html_e( 'Footer', 'fotawp' ); ?>
					</a>
				</li>
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.32031 2.91667H12.3203" stroke="currentColor" stroke-linecap="round" />
							<path d="M5.32031 7H12.3203" stroke="currentColor" stroke-linecap="round" />
							<path d="M5.32031 11.0833H12.3203" stroke="currentColor" stroke-linecap="round" />
							<path
								d="M1.89062 2.91666H1.81771M1.96354 2.91666C1.96354 2.9972 1.89825 3.06249 1.81771 3.06249C1.73717 3.06249 1.67188 2.9972 1.67188 2.91666C1.67188 2.83612 1.73717 2.77083 1.81771 2.77083C1.89825 2.77083 1.96354 2.83612 1.96354 2.91666Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M1.89062 7H1.81771M1.96354 7C1.96354 7.08056 1.89825 7.14583 1.81771 7.14583C1.73717 7.14583 1.67188 7.08056 1.67188 7C1.67188 6.91944 1.73717 6.85416 1.81771 6.85416C1.89825 6.85416 1.96354 6.91944 1.96354 7Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M1.89062 11.0833H1.81771M1.96354 11.0833C1.96354 11.1639 1.89825 11.2292 1.81771 11.2292C1.73717 11.2292 1.67188 11.1639 1.67188 11.0833C1.67188 11.0028 1.73717 10.9375 1.81771 10.9375C1.89825 10.9375 1.96354 11.0028 1.96354 11.0833Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?p=%2Fnavigation' ) ); ?>">
						<?php esc_html_e( 'Navigation', 'fotawp' ); ?>
					</a>
				</li>
			</ul>
		</div>
		<div class="boxed-layout">
			<h3 class="content-title has-icon">
				<i class="icon-wrap"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M5.76199 2.09705L4.62544 2.62241C2.87515 3.43145 2 3.83598 2 4.5C2 5.16402 2.87515 5.56853 4.62545 6.37758L5.76199 6.90293C6.86347 7.41206 7.41427 7.66666 8 7.66666C8.58573 7.66666 9.13653 7.41206 10.238 6.90293L11.3745 6.37758C13.1249 5.56853 14 5.16402 14 4.5C14 3.83598 13.1249 3.43145 11.3745 2.62241L10.238 2.09705C9.13653 1.5879 8.58573 1.33333 8 1.33333C7.41427 1.33333 6.86347 1.5879 5.76199 2.09705Z"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M13.8587 7.39813C13.9529 7.5306 14 7.66873 14 7.8206C14 8.47513 13.1249 8.87393 11.3745 9.67147L10.238 10.1893C9.13653 10.6912 8.58573 10.9422 8 10.9422C7.41427 10.9422 6.86347 10.6912 5.76199 10.1893L4.62545 9.67147C2.87515 8.87393 2 8.47513 2 7.8206C2 7.66873 2.04711 7.5306 2.14133 7.39813"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M13.5845 10.8441C13.8615 11.0647 14 11.2847 14 11.5451C14 12.1997 13.1249 12.5984 11.3745 13.3959L10.238 13.9138C9.13653 14.4157 8.58573 14.6667 8 14.6667C7.41427 14.6667 6.86347 14.4157 5.76199 13.9138L4.62545 13.3959C2.87515 12.5984 2 12.1997 2 11.5451C2 11.2847 2.13852 11.0647 2.41556 10.8441"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</i>
				<?php esc_html_e( 'Content', 'fotawp' ); ?>
			</h3>

			<div class="fotawp-spacer sm"></div>

			<ul class="icon-list">
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M8.45573 2.91667H7.28906C5.63915 2.91667 4.81419 2.91667 4.30163 3.42924C3.78906 3.9418 3.78906 4.76675 3.78906 6.41667V9.33334C3.78906 10.9832 3.78906 11.8082 4.30163 12.3208C4.81419 12.8333 5.63915 12.8333 7.28906 12.8333H8.07254C8.54941 12.8333 8.78788 12.8333 9.00225 12.7446C9.21669 12.6557 9.38527 12.4871 9.7225 12.1499L11.2723 10.6001C11.6095 10.2629 11.7781 10.0943 11.8669 9.87986C11.9557 9.66549 11.9557 9.42702 11.9557 8.95015V6.41667C11.9557 4.76675 11.9557 3.9418 11.4432 3.42924C10.9306 2.91667 10.1056 2.91667 8.45573 2.91667Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M8.75 12.5417V11.9583C8.75 10.8584 8.75 10.3084 9.09172 9.96672C9.43343 9.625 9.9834 9.625 11.0833 9.625H11.6667"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M3.78906 11.0833C2.82257 11.0833 2.03906 10.2999 2.03906 9.33334V4.66667C2.03906 3.01675 2.03906 2.1918 2.55163 1.67924C3.06419 1.16667 3.88915 1.16667 5.53906 1.16667H8.45596C9.42243 1.16668 10.206 1.9502 10.206 2.91669"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M5.83594 7.58333H8.16927M5.83594 5.25H9.91927" stroke="currentColor"
								stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'edit.php?post_type=page' ) ); ?>">
						<?php esc_html_e( 'Pages', 'fotawp' ); ?>
					</a>
				</li>
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M6.48198 3.2528C6.63464 3.51579 6.71094 3.64727 6.71094 3.79166C6.71094 3.93605 6.63464 4.06754 6.48198 4.33052L5.75313 5.58613C5.60048 5.84914 5.52415 5.98062 5.39844 6.05278C5.27272 6.12499 5.12007 6.12499 4.81477 6.12499H3.3571C3.0518 6.12499 2.89915 6.12499 2.77344 6.05278C2.64772 5.98062 2.57139 5.84914 2.41875 5.58613L1.68991 4.33052C1.53726 4.06754 1.46094 3.93605 1.46094 3.79166C1.46094 3.64727 1.53726 3.51579 1.68991 3.2528L2.41875 1.99719C2.57139 1.7342 2.64772 1.60271 2.77344 1.53052C2.89915 1.45833 3.0518 1.45833 3.3571 1.45833H4.81477C5.12007 1.45833 5.27272 1.45833 5.39844 1.53052C5.52415 1.60271 5.60048 1.7342 5.75313 1.99719L6.48198 3.2528Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M12.3101 6.75278C12.4628 7.0158 12.5391 7.14729 12.5391 7.29166C12.5391 7.43604 12.4628 7.56752 12.3101 7.83055L11.5812 9.08611C11.4286 9.34914 11.3523 9.48062 11.2266 9.55278C11.1009 9.62499 10.9482 9.62499 10.6429 9.62499H9.18525C8.87993 9.62499 8.72727 9.62499 8.60156 9.55278C8.47585 9.48062 8.3995 9.34914 8.2469 9.08611L7.51802 7.83055C7.36536 7.56752 7.28906 7.43604 7.28906 7.29166C7.28906 7.14729 7.36536 7.0158 7.51802 6.75278L8.2469 5.49719C8.3995 5.2342 8.47585 5.10272 8.60156 5.03052C8.72727 4.95833 8.87993 4.95833 9.18525 4.95833H10.6429C10.9482 4.95833 11.1009 4.95833 11.2266 5.03052C11.3523 5.10272 11.4286 5.2342 11.5812 5.49719L12.3101 6.75278Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M6.48198 9.66945C6.63464 9.93248 6.71094 10.064 6.71094 10.2083C6.71094 10.3527 6.63464 10.4842 6.48198 10.7472L5.75313 12.0028C5.60048 12.2658 5.52415 12.3973 5.39844 12.4694C5.27272 12.5417 5.12007 12.5417 4.81477 12.5417H3.3571C3.0518 12.5417 2.89915 12.5417 2.77344 12.4694C2.64772 12.3973 2.57139 12.2658 2.41875 12.0028L1.68991 10.7472C1.53726 10.4842 1.46094 10.3527 1.46094 10.2083C1.46094 10.064 1.53726 9.93248 1.68991 9.66945L2.41875 8.41388C2.57139 8.15086 2.64772 8.01938 2.77344 7.94722C2.89915 7.875 3.0518 7.875 3.3571 7.875H4.81477C5.12007 7.875 5.27272 7.875 5.39844 7.94722C5.52415 8.01938 5.60048 8.15086 5.75313 8.41388L6.48198 9.66945Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>">
						<?php esc_html_e( 'Patterns', 'fotawp' ); ?>
					</a>
				</li>
				<li class="list-item">
					<i class="icon-wrap">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M8.96031 5.67439C9.27228 5.83334 9.68067 5.83334 10.4974 5.83334C11.3141 5.83334 11.7225 5.83334 12.0345 5.67439C12.3089 5.53457 12.5319 5.31148 12.6718 5.03708C12.8307 4.72512 12.8307 4.31675 12.8307 3.50001C12.8307 2.68326 12.8307 2.27489 12.6718 1.96293C12.5319 1.68853 12.3089 1.46544 12.0345 1.32562C11.7225 1.16667 11.3141 1.16667 10.4974 1.16667C9.68067 1.16667 9.27228 1.16667 8.96031 1.32562C8.68591 1.46544 8.46285 1.68853 8.32302 1.96293C8.16406 2.27489 8.16406 2.68326 8.16406 3.50001C8.16406 4.31675 8.16406 4.72512 8.32302 5.03708C8.46285 5.31148 8.68591 5.53457 8.96031 5.67439Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M5.83073 8.16667V5.83333C5.83073 5.01659 5.83073 4.60822 5.67178 4.29626C5.53196 4.02186 5.30887 3.79877 5.03447 3.65895C4.72251 3.5 4.31414 3.5 3.4974 3.5C2.68065 3.5 2.27228 3.5 1.96032 3.65895C1.68592 3.79877 1.46283 4.02186 1.32301 4.29626C1.16406 4.60822 1.16406 5.01659 1.16406 5.83333V8.16667H5.83073Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M5.83073 8.16666H1.16406V9.91666C1.16406 11.2916 1.16406 11.979 1.5912 12.4062C2.01834 12.8333 2.7058 12.8333 4.08073 12.8333H5.83073V8.16666Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M8.16927 8.16666H5.83594V12.8333H8.16927C8.986 12.8333 9.39439 12.8333 9.70635 12.6744C9.98075 12.5345 10.2038 12.3115 10.3436 12.0371C10.5026 11.7251 10.5026 11.3167 10.5026 10.5C10.5026 9.68327 10.5026 9.27488 10.3436 8.96291C10.2038 8.68851 9.98075 8.46545 9.70635 8.32562C9.39439 8.16666 8.986 8.16666 8.16927 8.16666Z"
								stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</i>
					<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>">
						<?php esc_html_e( 'Blocks', 'fotawp' ); ?>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>