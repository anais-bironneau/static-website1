
<!-- contenu de la basile header (qui a les classes header-homepage et header-all pour différencier les background) -->

<div class="nav-bg"> <!-- set le bandeau de la nav -->

	<div class="container-fluid"> <!-- set les marges intérieures du bandeau -->


		<div class="rs-logos"> 
			<a href="#"><i class="fab fa-youtube"></i></a>
			<a href="#"><i class="fab fa-instagram-square"></i></a>
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
		</div>

		
		<div class="row">

			<nav class="col navbar navbar-expand-xl navbar-light"> <!-- navbar dark/light nécessaire pour que l'icon burger apparaisse! -->
				<a class="navbar-brand col-logo" href="index.php">
					<img src="assets/logos/logo_horizontal.png" width="250" height="100" alt="logo"/>
				</a>


				<!-- le menu burger responsive (ID doit être le même que le collapse plus bas) -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>


				<div id="navbarContent" class="collapse navbar-collapse">

					<ul class="navbar-nav ml-auto"> <!-- ml/mr/mx-auto pour centrer la nav -->

						<li class="nav-item active"><a class="nav-link" href="index.php">ACCUEIL</a></li>
						

						<li class="nav-item"><a class="nav-link" href="la-team.php">LA TEAM</a></li>
						

						<li class="nav-item"><a class="nav-link" href="enseignement.php">ENSEIGNEMENT</a></li>
						

						<!-- la partie dropdown contenant les pages Planning et Tarifs -->
						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="..." id="navbarDropDownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >LES COURS</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
								<a href="planning.php" class="dropdown-item">PLANNING</a>
								<a href="tarifs.php" class="dropdown-item">TARIFS</a>
							</div>
						</li>
						

						<li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
						

					</ul>

				</div>

			</nav>	

		</div>
			
	</div>
	
</div>