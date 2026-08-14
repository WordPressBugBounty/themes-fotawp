<?php

/**
 * Title: About Us New
 * Slug: fotawp/about-us-new
 * Categories: about
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/about_image.png',
);
?>
<!-- wp:group {"metadata":{"name":"About Us New","categories":["about"]},"style":{"spacing":{"padding":{"top":"110px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary-light","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-tertiary-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"64px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":7612,"sizeSlug":"full","linkDestination":"none","className":"fotawp-zoom-in-up","style":{"color":{"duotone":"unset"},"border":{"radius":{"topLeft":"64px","topRight":"64px","bottomLeft":"64px","bottomRight":"64px"}}}} -->
                <figure class="wp-block-image size-full has-custom-border fotawp-zoom-in-up"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-7612" style="border-top-left-radius:64px;border-top-right-radius:64px;border-bottom-left-radius:64px;border-bottom-right-radius:64px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","className":"fotawp-fade-up","style":{"spacing":{"padding":{"top":"0"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up" style="padding-top:0"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"4px","fontSize":"12px"}},"textColor":"primary"} -->
                <h6 class="wp-block-heading has-primary-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:12px;font-style:normal;font-weight:600;letter-spacing:4px"><?php esc_html_e('OUR STORY', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"48px","lineHeight":"1.2"}},"textColor":"heading-color"} -->
                <h2 class="wp-block-heading has-heading-color-color has-text-color" style="margin-top:var(--wp--preset--spacing--20);font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Comprehensive Digital Services for Unmatched Growth!', 'fotawp') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:16px;line-height:1.5"><?php esc_html_e('Comes with native builder Full Site Editing/Gutenberg and integration of page builder Elementor adding the full control of site and making FotaWP perfect powerful tools of site builder.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:list {"className":"is-style-fotawp-list-style-check-primary-fade","style":{"typography":{"lineHeight":"2","fontSize":"18px"},"spacing":{"margin":{"top":"24px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <ul style="margin-top:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;line-height:2" class="wp-block-list is-style-fotawp-list-style-check-primary-fade"><!-- wp:list-item -->
                    <li><?php esc_html_e('Full Site Editing, No Limits at All!', 'fotawp') ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php esc_html_e('100% Track Record, Driven by Results', 'fotawp') ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php esc_html_e('Seamless Integration, Effortless Performance', 'fotawp') ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"36px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:36px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","className":"is-style-button-hover-style-set-five","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"20px","bottom":"20px"}},"border":{"radius":"80px"}}} -->
                    <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:80px;padding-top:20px;padding-right:28px;padding-bottom:20px;padding-left:28px"><?php esc_html_e('Learn More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"className":"fotawp-flip-up","style":{"spacing":{"margin":{"top":"84px","bottom":"0"},"blockGap":{"left":"0"}},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"color":"#966bf257","width":"1px"}}} -->
        <div class="wp-block-columns fotawp-flip-up has-border-color" style="border-color:#966bf257;border-width:1px;border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;margin-top:84px;margin-bottom:0"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"right":{"color":"#966bf257","width":"1px"},"bottom":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"left":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:#966bf257;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:60px;font-style:normal;font-weight:700">21+</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Years of Experience', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"right":{"color":"#966bf257","width":"1px"},"bottom":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"},"left":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"},"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:#966bf257;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:60px;font-style:normal;font-weight:700">40+</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Expert Team Members', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"right":{"color":"#966bf257","width":"1px"},"bottom":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"left":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-color:#966bf257;border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:60px;font-style:normal;font-weight:700"><?php esc_html_e('10k+', 'fotawp') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Happy Clients', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"style":"none","width":"0px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color" style="font-size:60px;font-style:normal;font-weight:700">99%</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Customer Satisfaction', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->