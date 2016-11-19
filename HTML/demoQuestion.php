<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />	
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	<header id="header">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="#">COUCOU</a>
				</div>

				<div id="navbar" class="navbar-collapse collapse navigationLink">
					<ul class="nav navbar-nav">
						<li><a href="#">Accueil</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--container-->
		</nav>
	</header>
	

	<div class="container" style="margin-top:50px;">
		
		<div>
			<h1>Titre du questionnaire :</h1>

			<div class="question">
				<h2>Question 1 : (Obligatoire)</h2>
					<input type="text" name="" placeholder="Question ..." class="form-control">
			</div><!-- .question -->


			<div class="reponses">
				<h2>Réponses :</h2>

				<ul class="nav nav-tabs nav-justified typeReponse">
					<li class="active"><a href="#" role="typeVraiFaux">Vrai/Faux</a></li>
					<li><a href="#" role="typeChoixMulti">Choix multiple</a></li>
					<li><a href="#" role="typeQuestionTroue">Question troue</a></li>
				</ul>

				<div class="typeVraiFaux typeReponseBlock">	
					<p>Vrai faux</p>
					
					<!-- Rajoute ici tes inpout etc  -->

					<a href="#" class="btn btn-success">+</a>			
				</div><!-- .typeVraiFaux -->	
				
				<div class="typeChoixMulti typeReponseBlock">	
					<p>Choix multiple</p>
					
					<!-- Rajoute ici tes inpout etc  -->
					
					<a href="#" class="btn btn-success">+</a>
				</div><!-- .typeChoixMulti -->

				<div class="typeQuestionTroue typeReponseBlock">
					<p>Question troue</p>

					<!-- Rajoute ici tes inpout etc  -->

					<a href="#" class="btn btn-success">+</a>		
				</div><!-- .typeQuestionTroue -->

			</div><!-- .reponses -->
		

			<input type="submit" name="" value="Ajouter la question" class="btn btn-success btn-block btnAjouterQuestion">

		</div>


	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		// Affichage de la premiere colonne 'Vrai/Faux'
		$(".typeReponseBlock:first").show();
		// si un clic est effectué sur les liens des type de reponse
		$(".typeReponse li a").click(function(){
			// on chache tous les div 
			$(".typeReponseBlock").hide();
			// on affiche la div qui correspond au lien cliqué
			$("."+$(this).attr("role")).show();
			// On enleve la class active du li précédent
			$(".typeReponse li").removeClass("active");
			// ajout de la class "active" au li 
			$(this).parent().addClass("active");
		});
	});
</script>

<style type="text/css">
	.typeReponseBlock{
		border-right :1px solid #ddd;
		border-left :1px solid #ddd;
		border-bottom :1px solid #ddd;
		padding:15px;
		display: none; /*On cache tous les div avec la class typeReponseBlock.*/
	}

	.btnAjouterQuestion{
		margin-top:20px;
	}
</style>