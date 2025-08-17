<?php
/**
 * Title: Hero
 * Slug: sierra-journal/hero
 * Category: sierra-journal, hero
 */
?>
   <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retro-brand.svg","id":2065,"dimRatio":50,"customOverlayColor":"#7d8aa8","isUserOverlayColor":false,"isDark":false,"sizeSlug":"full","align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignfull is-light"><img class="wp-block-cover__image-background wp-image-2065 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retro-brand.svg" data-object-fit="cover" />
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#7d8aa8"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:heading {"textAlign":"center","level":1} -->
            <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Embrace the Wild Outdoors', 'sierra-madre' ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Discover the beauty of nature through hiking, trails, and endless
                adventures.</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1600px"}} -->
            <div class="wp-block-group">
                <!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"layout":{"type":"default"}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
                    <div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
                        <!-- wp:post-featured-image /-->

                        <!-- wp:post-title {"isLink":true} /-->

                        <!-- wp:post-excerpt {"moreText":"Read More", "excerptLength":25} /-->

                        <!-- wp:post-author {"isLink":true} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Join Us</a></div>
                <!-- /wp:button --></div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->