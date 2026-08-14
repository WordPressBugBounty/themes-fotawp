<?php

/**
 * Title: Team Section New
 * Slug: fotawp/team-section-new
 * Categories: fotawp-teams
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/team_1.jpg',
    $fotawp_url . 'assets/images/team_2.jpg',
    $fotawp_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Team Section New","categories":["fotawp-teams"]},"style":{"spacing":{"padding":{"top":"120px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f3fdff"}},"textColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-heading-color-color has-text-color has-background" style="background-color:#f3fdff;margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"fotawp-fade-up","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group fotawp-fade-up" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px","textAlign":"center","fontSize":"12px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="font-size:12px;font-style:normal;font-weight:600;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('Meet Our Team', 'fotawp') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","textAlign":"center"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('The Minds Behind Your Digital Success', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","textAlign":"center"}}} -->
        <p class="has-text-align-center" style="line-height:1.6"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud laboris.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px"},"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column {"className":"fotawp-fade-right"} -->
        <div class="wp-block-column fotawp-fade-right"><!-- wp:group {"className":"is-style-fotawp-boxshadow","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":42,"focalPoint":{"x":0.5,"y":0},"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-42" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"32px","left":"28px","right":"28px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:32px;padding-left:28px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0px;font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"400","textAlign":"center"}},"fontSize":"x-small"} -->
                    <h6 class="wp-block-heading has-text-align-center has-text-color has-x-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:400"><?php esc_html_e('Founder', 'fotawp') ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"has-sub-heading-color-color has-text-color","style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"textAlign":"center"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:16px;margin-bottom:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad laboris.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#3800D7","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-fade-right"} -->
        <div class="wp-block-column fotawp-fade-right"><!-- wp:group {"className":"is-style-fotawp-boxshadow","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":42,"focalPoint":{"x":0.5,"y":0},"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-42" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"32px","left":"28px","right":"28px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:32px;padding-left:28px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0px;font-style:normal;font-weight:600"><?php esc_html_e('Robert Jr', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"400","textAlign":"center"}},"fontSize":"x-small"} -->
                    <h6 class="wp-block-heading has-text-align-center has-text-color has-x-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:400"><?php esc_html_e('CEO', 'fotawp') ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"has-sub-heading-color-color has-text-color","style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"textAlign":"center"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:16px;margin-bottom:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad laboris.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#3800D7","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-fade-right"} -->
        <div class="wp-block-column fotawp-fade-right"><!-- wp:group {"className":"is-style-fotawp-boxshadow","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":42,"focalPoint":{"x":0.5,"y":0},"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-42" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"32px","left":"28px","right":"28px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:32px;padding-left:28px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0px;font-style:normal;font-weight:600"><?php esc_html_e('Liana Potmen', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"400","textAlign":"center"}},"fontSize":"x-small"} -->
                    <h6 class="wp-block-heading has-text-align-center has-text-color has-x-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:400"><?php esc_html_e('Manager', 'fotawp') ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"has-sub-heading-color-color has-text-color","style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"textAlign":"center"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:16px;margin-bottom:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad laboris.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#3800D7","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->