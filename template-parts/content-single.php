<div class="card">
	<div class="card-image">
		<div class="video-container">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<div class="card-content">
		<h5><?php the_title() ?></h5>
		<?php the_content() ?>
	</div>
	<!-- <div class="card-action center"></div> -->
</div>