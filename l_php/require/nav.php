<!-- <header>

<nav class=" cc-navbar navbar navbar-expand-lg  position-fixed  w-100 navbar-dark">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="accueil.php">Home</a>
                    </li>
                    <?php if(!isset($_SESSION['mail'])): ?> 
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Se connecter</a>
                    </li>
                     <?php  else:?> 
                    <li class="nav-item">
                        <a class="nav-link " href="creerEtudiant.php">Créer un etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="GestionEtudiant.php">Gestion des etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Se deconnecter</a>
                    </li>
                     <?php endif;?> 
                </ul>
            </div>
        </div>
    </nav>

</header> -->



<header>
        <nav class="cc-navbar navbar navbar-expand-lg position-fixed  w-100 navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#">SHARWAMA HOUSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> 
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul> -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href=" # ">Découvrir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href=" # ">Les classiques</a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="btn btn-order rounded-0">Passer une coomande</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
