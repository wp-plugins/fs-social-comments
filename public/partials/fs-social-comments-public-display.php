<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://www.lifeisfood.it/
 * @since      1.0.0
 *
 * @package    Fs_Social_Comments
 * @subpackage Fs_Social_Comments/public/partials
 */
?>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.3&cookie=true&appId=<?php echo get_option("fs_social_comments_facebook_app_id")?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<input type="hidden" value="<?php echo get_the_ID();?>" id="commentPostId" />
<div class="fb-comments" data-version="v2.3" data-href="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>