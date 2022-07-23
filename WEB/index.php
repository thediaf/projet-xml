<?php
session_start();
// Initialize the session
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Login/welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>XMLPAX</title>
</head>

<body>
  <div class="bg-dark">
    <div class="container">
      <div class="row">
        <nav class="col navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.html">
            <img src="favicon.webp" width="50" height="40" alt="Info Logo" />
            XML PAX
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i>Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Programmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-fw fa-user"></i>Se connecter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">S'inscrire</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="container w-100">
    <div class="row">
      <div class="row ">
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/xmlb1.jpeg" style="display:" class="w-100" alt="xml">
            </div>
            <div class="carousel-item">
              <img src="images/digital-technology-background-illustration-51700896.jpeg" class="w-100" alt="xml">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="card mb-4 mb-lg-0 border-primary shadow">
          <img src="" alt="certificate" class="card-img-top" style="width:auto; height: 200px";>
          <div class="card-body">
            <h5 class="card-title">Devenez administrateur</h5>
            <p class="card-text">Vous êtes prêts à creer des fichiers</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card mb-4 mb-lg-0 border-primary shadow">
            <img src="" alt="instructor" class="card-img-top" style="width:auto; height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Visiteur</h5>
            <p class="card-text">Consulter les .</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card mb-4 mb-lg-0 border-primary shadow">
          <img src="" alt="job search" class="card-img-top" style="width:auto; height: 200px;">
          <div class="card-body">
            <h5 class="card-title">XML et DTD</h5>
            <p class="card-text">Valider des fichiers xml avec la dtd.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark mt-5">
    <div class="container" style="margin-top: 500px;">
      <div class="row pt-4 pb-3">
        <div class="col">
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="#">À propos</a></li>
            <li class="list-inline-item">&middot;</li>
            <li class="list-inline-item"><a href="#">Vie privée</a></li>
            <li class="list-inline-item">&middot;</li>
            <li class="list-inline-item"><a href="#">Conditions d'utilisations</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <!-- LOGIN SYSTEM-->



  <?php
// Include config file
require_once "Login/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(isset($_POST["username"]))
    if(empty(trim((string)$_POST["username"]))){
        $username_err = "Veuillez entrer votre login.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(isset($_POST["password"]))
    if(isset($_POST["password"]) && empty(trim((string)$_POST["password"]))){
        $password_err = "Veuillez entrer votre mot de passe.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            //session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            //header("location: Login/welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Le mot de passe que vous avez entré n’était pas valide..";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Aucun compte trouvé avec ce nom d’utilisateur.";
                }
            } else{
                echo "Oups! Quelque chose s’est mal passé. Veuillez réessayer plus tard.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    //mysqli_close($link);
}
?>
 
    <style type="text/css">
       
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
    </style>

    <div class="modal" id="id01">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="modal-content animate">
          <h2>S'identifier</h2>
        <p>Veuillez remplir vos identifiants pour vous connecter.</p>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nom utilisateur</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Se connecter">
            </div>
            <p>Vous n'avez pas de compte? <a href="Login/registre.php">Inscrivez-vous</a>.</p>
        </form>
    </div> 
  

<!-- INSCRIPTION -->





 
    

    <div class="modal" id="id02">



      <?php
// Include config file
require_once "Login/config.php";
 
// Define variables and initialize with empty values
$username2 = $password2 = $confirm_password2 = $role2 = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
  if(isset($_POST['username2'])){

    if(empty(trim($_POST["username2"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username2"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username2 = trim($_POST["username2"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }


            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
}
    
    // Validate password
if(isset($_POST['password2'])){
    if(empty(trim($_POST["password2"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password2"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password2 = trim($_POST["password2"]);
    }
}  
    // Validate confirm password
if(isset($_POST['confirm_password2'])){
    if(empty(trim($_POST["confirm_password2"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password2 = trim($_POST["confirm_password2"]);
        if(empty($password_err) && ($password2 != $confirm_password2)){
            $confirm_password_err = "Password did not match.";
        }
    }
}
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username2;
            $param_password = password_hash($password2, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: Login/login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
}
?>



        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="modal-content animate">
          <h2>Inscrivez-vous</h2>
        <p>Veuillez remplir ce formulaire pour créer un compte.</p>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username2" class="form-control" value="<?php echo $username2; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mot de passe</label>
                <input type="password" name="password2" class="form-control" value="<?php echo $password2; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Role </label>
                <input type="text" name="role2" class="form-control" value="<?php echo $role2; ?>">
            </div> 
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirmer le mot de passe</label>
                <input type="password" name="confirm_password2" class="form-control" value="<?php echo $confirm_password2; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Valider">
                <input type="reset" class="btn btn-default" value="Abandonner">
            </div>
            <p>Vous-avez deja un compte? <a href="login.php">Connecter vous</a>.</p>
        </form>
    </div> 
<script>
// Get the modal
var modal1 = document.getElementById('id01');

var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}


// When the user clicks anywhere outside of the modal, close it
</script>







  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
