<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="../css/Creation_Question.css"/>
<?php include("../includes/header.php");?>
</head>

<body>

	<div id="conteneur">
		
		 <div id = text>
		 	<br>
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

			<br><br>

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
