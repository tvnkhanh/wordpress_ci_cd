<?php
/**
 * Title: News & Article
 * Slug: shopgrove/news-article
 * Categories: shopgrove
 * Keywords: news-article
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"articles"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","className":"animated fadeInUp news-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp news-section has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-left has-body-font-family" style="font-size:36px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest', 'shopgrove' ); ?> <strong><?php echo esc_html__( 'News', 'shopgrove' ); ?> </strong>&amp; <strong><?php echo esc_html__( 'Articles', 'shopgrove' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html__( 'Duis leo. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Pellentesque commodo eros a enim. Aliquam erat volutpat.', 'shopgrove' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":23,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}}},"textColor":"contrast-3"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","bottom":"var:preset|spacing|20"},"margin":{"top":"5px","bottom":"5px"}}},"textColor":"heading-text-color","fontFamily":"body"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->