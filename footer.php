
			</div><!-- Container -->
			<footer class="page-footer">
				<!--
				<div class="container">
					<div class="row">
						<div class="col l6 s12">
							<h5 class="white-text">Footer Content</h5>
							<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
							<button class="btn waves-effect waves-light red lighten-3" type="submit" name="action" alt="PayPal - The safer, easier way to pay online!">Donate Now
							</button>
							<a class="waves-effect waves-light btn" onclick="Materialize.toast('<img src=\'photo_seb.jpg\' width=\'100px\'><p>Besoin d\'aide ?</p>', 4000)">Toast!</a>
							<h1>Récemment publié sur twitter</h1>
						</div>
						<div class="col l4 offset-l2 s12">
							<h5 class="white-text">Links</h5>
							<ul>
								<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
							</ul>
						</div>
					</div>
				</div>
				-->
				<div class="footer-copyright">
					<div class="container">
						<?php $date = new DateTime() ?>
						© <?= $date->format('Y'); ?> Copyright Text
					</div>
				</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>