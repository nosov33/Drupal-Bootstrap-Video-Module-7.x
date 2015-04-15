
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://<?php print $videoURL; ?>',containment:'.video-section', quality:'highres', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div class="container">
		<div class="col-lg-12">
			<h1><?php print $title1; ?></h1>
			<center><?php print $title2; ?></center>
		</div>
    </div>
  </div>
</section>
<script type="text/javascript">
jQuery( document ).ready(function( $ ) {
    $(".player").mb_YTPlayer();
});
</script>