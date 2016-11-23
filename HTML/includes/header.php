<meta charset="UTF-8">


<?php
        $reqURI = $_SERVER['REQUEST_URI'];
        $tmpURI = explode('/', $reqURI);
        $endURI = end($tmpURI);
?>

<?php
if($endURI === "index.php")
{
?>

<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<?php
}
else
{
?>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<?php
}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid" style="border-radius">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Quizz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
     


<?php
        if($endURI === "index.php"|| $endURI === "#") {
?>
  <li class="active"><a href="index.php">Accueil</a></li>
           <li><a href= "pages/demoQuestion.php">Creer Questionnaire</a></li>
           <li><a href="#">parametres questionnaire</a></li>
        <li><a href="#">ajout groupe</a></li> 
          </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="pages/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
         
<?php
        }else{   
?>        
        <li class="active"><a href="../index.php">Accueil</a></li>
        <li><a href="demoQuestion.php">Creer Questionnaire</a></li>
        <li><a href="#">parametres questionnaire</a></li>
        <li><a href="#">ajout groupe</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        
<?php
        }
?>
    
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</nav>
