<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


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
        $reqURI = $_SERVER['REQUEST_URI'];
        $tmpURI = explode('/', $reqURI);
        $endURI = end($tmpURI);

        if($endURI === "index.php") {
?>
          <li class="active"><a href="index.php">Accueil</a></li>
<?php
        } else if ($endURI === "demoQuestion.php") {
?>
          <li class="active"><a href="../index.php">Accueil</a></li>
<?php
        }

        if($endURI === "index.php") {
?>
          <li><a href="pages/demoQuestion.php">Creer Questionnaire</a></li>
<?php
        } else if ($endURI === "demoQuestion.php") {
?>
          <li><a href="demoQuestion.php">Creer Questionnaire</a></li>
<?php
        }
      ?>
        
        
        <li><a href="#">Page 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</nav>
