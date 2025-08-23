<?php
/**
 * Title: Hero
 * Slug: sierra-madre/hero
 * Category: sierra-madre, hero
 */
?>
<!-- wp:cover {"url":"http://localhost:10068/wp-content/themes/sierra-journal/assets/images/nature-landscape.jpg","dimRatio":0,"sizeSlug":"full","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"><img class="wp-block-cover__image-background size-full" alt="" src="http://localhost:10068/wp-content/themes/sierra-journal/assets/images/nature-landscape.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
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
                    <!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"inherit":false}} -->
                    <div class="wp-block-group post-card" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:group {"className":"post-image-container","layout":{"type":"default"}} -->
                        <div class="wp-block-group post-image-container">
                            <!-- wp:post-featured-image {"className":"post-featured-image"} /-->
                            
                            <!-- wp:group {"className":"post-title-overlay","layout":{"type":"default"}} -->
                            <div class="wp-block-group post-title-overlay">
                                <!-- wp:post-title {"isLink":true,"className":"overlay-title"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
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