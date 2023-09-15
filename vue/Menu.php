<nav class="navbar navbar-expand-sm bg-primary navbar-dark w-100 rounded">
    <ul class="navbar-nav px-3 w-100">
        <li class="nav-item">
            <a  class="nav-link <?php parDefaut(); navClass("Accueil"); ?>"
                href="index.php?action=Accueil">
                Accueil
            </a>
        </li>
    <?php
        DemarrerSession();
        if (empty($_SESSION['utilisateur']) || !$_SESSION['utilisateur']['connecte']) {
    ?>
            
          <li class="nav-item ms-auto">
          <a  class="nav-link <?php navClass("Connexion"); ?>"
              href="index.php?action=Connexion">
              Connexion
          </a>
          </li>


      <?php
      } else {  
      ?>


        <li class="nav-item ms-auto">
            <a  class="nav-link <?php navClass("Connexion"); ?>"
                href="index.php?action=Deconnecter">
                Deconnexion
            </a>
        </li>
    <?php
    }
    ?>
</ul>
</nav>

<?php
function parDefaut()
{
    if (!isset($_GET["action"])) {
        echo "active";
    }
}


function navClass($menu)
{
    if (isset($_GET["action"]) &&
        $_GET["action"] === $menu) {
        echo ' active ';
    }
}
?>
