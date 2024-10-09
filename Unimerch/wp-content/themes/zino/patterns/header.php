<?php
/**
 * Title: header
 * Slug: zino/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"home-banner"} -->
<div class="wp-block-group home-banner has-secondary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/main-banner.jpg","id":231,"dimRatio":50,"overlayColor":"black","minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"3rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"3rem"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:3rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--50);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-231" alt="<?php echo esc_attr_e( 'main-banner', 'zino' ); ?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/main-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:site-logo {"width":150,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"textAlign":"center","textColor":"white"} /-->

<!-- wp:navigation {"ref":7,"textColor":"white","icon":"menu","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"3rem"}}} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
