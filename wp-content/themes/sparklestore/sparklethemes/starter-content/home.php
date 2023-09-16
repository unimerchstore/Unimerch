<?php
/**
 * Home starter content.
 */
$default_home_content = '
	
	<!-- wp:pattern {"slug":"sparklestore/category"} /-->

	<!-- wp:spacer {"height":25} -->
	<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:pattern {"slug":"sparklestore/call-to-action"} /-->

	<!-- wp:spacer {"height":25} -->
	<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:pattern {"slug":"sparklestore/category-small"} /-->

	<!-- wp:spacer {"height":25} -->
	<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	';

return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'Home', 'Theme starter content', 'sparklestore' ),
	'post_content' => $default_home_content,
	'template' => 'template-full-width.php'
);
