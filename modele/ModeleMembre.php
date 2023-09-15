<?php

require_once "modele/BD.php"; // Pour pouvoir utiliser ObtenirConnexion()

class ModeleMembre {



    /** @return \PDOStatement|false La liste des provinces triés par nom de province */
    public function ObtenirMembres() {
        $sql = 'SELECT *
                FROM membres
                ORDER BY nom_utilisateur';
        
        // query : Exécution directe
       
        try {

            return BD::ObtenirConnexion()->query($sql);

        } catch (PDOException $e) {
            echo 'Erreur de connexion  : ' . $e->getMessage();
        }
            

    }







}
?>