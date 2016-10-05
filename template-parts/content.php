<div class="card">
	<div class="card-image">
		<div class="video-container">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<div class="card-content">
		<h3><?php the_title() ?></h3>
		<?php the_excerpt(); ?>
	</div>
	<div class="card-action center">
		<?= sprintf( '<a class="btn" href="%s" rel="bookmark">Lire la suite</a>', esc_url( get_permalink() ) ); ?>
	</div>
</div>