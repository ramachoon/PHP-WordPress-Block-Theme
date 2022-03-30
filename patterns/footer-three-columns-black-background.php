<?php
/**
 * Title: Footer with text, links, buttons.
 * Slug: frost/footer-three-columns-black-background
 * Categories: frost-footer
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}}},"backgroundColor":"black","textColor":"white","layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:40px;padding-bottom:40px">
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p>© <?php echo gmdate( 'Y' ); ?> Your Company LLC</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Privacy Policy', 'frost' ); ?></a> · <a href="#"><?php echo esc_html__( 'Terms of Service', 'frost' ); ?></a> · <a href="#"><?php echo esc_html__( 'Contact Us', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000","iconBackgroundColor":"white","iconBackgroundColorValue":"#fff","className":"is-style-default","style":{"spacing":{"blockGap":"10px"}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
