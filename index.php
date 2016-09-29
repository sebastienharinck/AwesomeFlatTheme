<?php

get_header();

?>

	<div class="row">

		<!--
		<ul id="slide-out" class="side-nav">
			<li><div class="userView">
					<img class="background red" src="<?= get_template_directory_uri() ?>/img/fond-ecran-paysage.jpg" >
					<a href="#!user"><img class="circle" src="<?= get_template_directory_uri() ?>/img/photo_seb.jpg"></a>
					<a href="#!name"><span class="white-text name"><?php bloginfo(); ?></span></a>
					<a href="#!email"><span class="white-text email">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</span></a>
				</div></li>
			<li><a href="#!">CV</a></li>
			<li><a href="#!">Mes Projets</a></li>
			<li><a href="#!">Mon Parcours</a></li>
			<li><a href="#!">Derniers Articles</a></li>
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header">Ma vie<i class="material-icons">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="#!">Mes habitudes</a></li>
								<li><a href="#!">Mon matériel</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>
		</ul>
		-->


		<div class="col s12 m9">



			<!--
			<div class="card header-search">
				<form>
					<div class="input-field">
						<input id="search" type="search" required>
						<label for="search"><i class="material-icons">search</i></label>
					</div>
				</form>

			</div>
			-->

			<!--
			<div class="card header-search">
				<div class="card-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			-->

			<div class="cards-container">

				<?php while( have_posts()): the_post();

					get_template_part( 'content', get_post_format() );

					endwhile;
				?>

			</div>
		</div>

		<?php get_sidebar(); ?>

		<div class="col s12 center">
			<ul class="pagination">
				<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
				<li class="active"><a href="#!">1</a></li>
				<li class="waves-effect"><a href="#!">2</a></li>
				<li class="waves-effect"><a href="#!">3</a></li>
				<li class="waves-effect"><a href="#!">4</a></li>
				<li class="waves-effect"><a href="#!">5</a></li>
				<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
			</ul>
		</div>


	</div>
	</div>


<?php

get_footer();