<?php
include 'functions.php';
$msg = '';
if (isset($_POST['title'], $_POST['mois'], $_POST['annee'], $_POST['question1'], $_POST['partie1'])) {
	$target_dir = 'fichiers/';
	$xmlstr = <<<XML
	<?xml version='1.0'?>
		<!DOCTYPE examen SYSTEM "examen.dtd">
			<examen coursCode="M1GLSI">
				<titre>${$_POST['title']}</titre>
				<date mois="${$_POST['title']}" annee="${$_POST['title']}" />
				<questions>
					<question>
						<partie>
						${$_POST['partie1']}
						</partie>
					</question>
				</questions>
			</examen>
	XML;
	$myfile = fopen("newfile.xml", "w");
fwrite($myfile, $xmlstr);
fclose($myfile);
		if(empty($_POST['title'])){
			$msg = 'Veuillez renseigner le titre.';
		} else if(empty($_POST['mois'])){
			$msg = 'Veuillez renseigner le mois';
		} else {
			// Everything checks out now we can move the uploaded image
			move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
			// Connect to MySQL
			$pdo = pdo_connect_mysql();
			// Insert image info into the database (title, description, image path, and date added)
			$stmt = $pdo->prepare('INSERT INTO images VALUES ( ?, ?, ?, ?, CURRENT_TIMESTAMP)');
	        $stmt->execute([$_POST['title'], $_POST['description'], $image_path, $_POST['telephone']]);
			$msg = 'Annonce publiée avec succes!';
		}
	} 
?>

<!DOCTYPE html>
    <html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Ajout fichier</title>
</head>

<body>
<div class="bg-dark">
    <div class="container">
      <div class="row">
        <nav class="col navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.html">
            <img src="../favicon.webp" width="50" height="50" alt="Info Logo" />
            XML PAX
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../Login/welcome.php"><i class="fa fa-fw fa-home"></i>Home</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="welcome.php"><i class="fa fa-fw fa-program"></i>Programme</a>
              </li>
			  <li class="nav-item active">
                <a class="nav-link" href="welcome.php"><i class="fa fa-fw fa-add"></i>Ajouter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fa fa-fw fa-user"></i>Se deconnecter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reset_password.php">Changer mot de passe</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
</div>
<div class="content upload">
	<!--<h2>Envoyer annonce</h2>-->
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label for="title">Titre</label>
		<input type="text" name="title" id="title">
		<label for="mois">Mois</label>
		<input type="month" name="mois" id="mois">
		<label for="annee">Annee</label>
		<select name="annee">
  			<option>Selectionner l'année</option>
  			<?php 
			$years = range(1900, strftime("%Y", time()));foreach($years as $year) : ?>
    			<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
  			<?php endforeach; ?>
		</select>
		<div >

		</div>
		<label for="question1">Question 1</label>
		<button name="question1" class="btn btn-success" id="question1">Ajouter une partie</button>
		<label for="question1">Question 2</label>
		<textarea type="text" name="question1" id="question1"></textarea>
		<label for="question1">Question 3</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 4</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 5</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 6</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 7</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 8</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 9</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 10</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="question1">Question 11</label>
		<input type="text" name="question1" id="question1"></input>
		<label for="partie1">Partie </label>
		<input type="text" name="partie1" id="partie1"></input>
	    <input type="submit" value="Creer fichier" name="submit">
	</form>
	<p><?=$msg?></p>
</div>
