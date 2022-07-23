<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include '../admin/functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
//$stmt = $pdo->query('SELECT * FROM images ORDER BY uploaded_date DESC');
//$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard</title>
     <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        h1{ font: 50px sans-serif; text-align: center; background-color: #ffffff}
    </style>
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
              <li class="nav-item active">
                <a class="nav-link" href="welcome.php"><i class="fa fa-fw fa-home"></i>Home</a>
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
    <div class="page-header">
        <h1>Bienvenue, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
    </div></h1>
  </div>
  <div class="container">
	<p></p>
	<a href="../admin/upload.php" class="btn btn-success">Ajouter un examen</a>
  <a href="../admin/upload.php" class="btn btn-warning">Ajouter un restaurant</a>
  <a href="../admin/upload.php" class="btn btn-danger">Ajouter un film</a>
    <div class="row my-3">

      <div class="col">
 		<h1>Liste des fichiers</h1> 
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <input class="form-control" id="searchInput" type="text" placeholder="Recherher par titre.."/>
      </div>
    </div>

</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>