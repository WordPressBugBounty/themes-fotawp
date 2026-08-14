<?php

/**
 * Title: Portfolio Gallery New
 * Slug: fotawp/portfolio-gallery-new
 * Categories: fotawp-portfolio
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/folio_1.jpg',
    $fotawp_url . 'assets/images/new/folio_2.jpg',
    $fotawp_url . 'assets/images/new/folio_3.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Portfolio Gallery New","categories":["fotawp-portfolio"]},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"border-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-border-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"fotawp-fade-up","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0px","bottom":"68px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group fotawp-fade-up" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:68px;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"84px"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
                <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:12px;font-style:normal;font-weight:600;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Portfolio', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('From Strategy to Real-World Results', 'fotawp') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"36px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:36px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","className":"is-style-button-hover-style-set-five","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"}},"border":{"radius":"80px"}}} -->
                    <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:80px;padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px"><?php esc_html_e('Explore More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"className":"fotawp-fade-up","style":{"spacing":{"blockGap":{"top":"16px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns fotawp-fade-up" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":7617,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":410,"isDark":false,"sizeSlug":"full","className":"fotawp-portfolio-box","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-7617 size-full" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-background-alt-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","textAlign":"center","fontSize":"28px"}},"textColor":"background-alt"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Startup', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"70px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:70px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[1]) ?>","id":7618,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":410,"isDark":false,"sizeSlug":"full","className":"fotawp-portfolio-box","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-7618 size-full" alt="" src="<?php echo esc_url($fotawp_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-background-alt-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","textAlign":"center","fontSize":"28px"}},"textColor":"background-alt"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Strategy', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[2]) ?>","id":7619,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":410,"isDark":false,"sizeSlug":"full","className":"fotawp-portfolio-box","style":{"border":{"radius":{"topLeft":"28px","topRight":"28px","bottomLeft":"28px","bottomRight":"28px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="border-top-left-radius:28px;border-top-right-radius:28px;border-bottom-left-radius:28px;border-bottom-right-radius:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-7619 size-full" alt="" src="<?php echo esc_url($fotawp_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-background-alt-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","textAlign":"center","fontSize":"28px"}},"textColor":"background-alt"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('E-commerce', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->