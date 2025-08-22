<?php
/**
 * Title: Three Column Blog
 * Slug: sierra-madre/three-column-blog
 * Category: sierra-madre, three-column-blog
 */
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1600px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading -->
      <h2 class="wp-block-heading">Journeys Written in Nature</h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph -->
      <p>Discover tales of rivers, forests, and mountains. Our blog gathers voices and stories that celebrate the
        landscapes we walk through and the moments we find along the way.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:post-featured-image /-->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

            <!-- wp:post-terms {"term":"category"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-title {"isLink":true} /-->

        <!-- wp:post-excerpt {"moreText":"Read More"} /-->

        <!-- wp:post-author {"isLink":true} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->