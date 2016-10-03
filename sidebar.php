<div class="col s12 m3">
	



	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="widget-area" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>



	<!--
	<div class="card lighten-2 red newsletter">
		<div class="card-stacked">
			<div class="card-image">
				<img src="<?= get_template_directory_uri() ?>/img/snowscoot.jpg">
			</div>
			<div class="card-content white-text">

				<h5 class="center">S'inscrire à la newsletter</h5>
				<p>
				<form>
					<div class="input-field">
						<input id="icon_prefix" type="text" class="validate">
						<label for="icon_prefix">First Name</label>
					</div>
					<div class="input-field">
						<input id="icon_telephone" type="tel" class="validate">
						<label for="icon_telephone">Telephone</label>
					</div>
					<div class="input-field">
						<input id="icon_email" type="email" class="validate">
						<label for="icon_email">Adresse Mail</label>
					</div>
					<div class="center">
						<button class="btn waves-effect waves-light red lighten-3" type="submit" name="action" alt="PayPal - The safer, easier way to pay online!">Donate Now
						</button>
					</div>
				</form>

				</p>

			</div>
		</div>
	</div>
	-->
</div>