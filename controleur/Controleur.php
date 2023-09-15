<?php

require('modele/ModeleMembre.php');

function AfficherPageAccueil()
{
    require 'vue/Accueil.php';
}

function AfficherPageConnexion()
{
    require 'vue/Connexion.php';
}

function Deconnecter()
{
    DemarrerSession();
    // détruire les variables de session
    session_unset();
    session_destroy();
    // appeler la vue de connexion
    header('location: index.php?action=Connexion');

}

function DemarrerSession() {
    if (session_status() === PHP_SESSION_NONE) {
        
        session_start();
    }
}


function Connecter()
{
    
    if (empty($_POST['nomUtilisateur']) || empty($_POST['motDePasse'])  ) {
       
        return header('location: index.php?action=Connexion');
    }
       
    $modelemembre = new ModeleMembre();
    // $provinces est utilisé dans vue/provinces.php
    $membres = $modelemembre->ObtenirMembres();

   //  ListerProvinces();
    


    
    while ($membre = $membres->fetch()) {
        
        if (($_POST['nomUtilisateur'] == $membre['nom_utilisateur']) && ($_POST['motDePasse'] == $membre['mot_de_passe'])){
            
            DemarrerSession();

            $_SESSION['utilisateur'] = [
                'connecte' => true,
            ];
           
        }
 
        }
        ?> 

        <?php  
        
        DemarrerSession();

        if (empty($_SESSION['utilisateur']) || !$_SESSION['utilisateur']['connecte']) {
          
            header('location:index.php?action=Connexion&erreur=vrai');
            
        
        }else{

            $membres->closeCursor();

            return header('location: index.php?action=Accueil');
        }


}

?>