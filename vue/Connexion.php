<?php $titre = 'Connexion'; ?>

<?php ob_start(); ?>

<?php

if (isset($_GET['erreur']) && $_GET['erreur']=="vrai") {
?>

<div class="alert alert-danger">
        
        <strong>Identifiants invalides!</strong>
       
</div>

<?php

 }
?>

<form method="POST" class="my-3 needs-validation" action="index.php?action=Connecter" novalidate>
    <div class="form-floating my-3">
        <input
            type="text"
            class="form-control"
            placeholder="Entrez votre nom d'utilisateur"
            id="nomUtilisateur"
            name="nomUtilisateur"
            minlength=3
            maxlength=45
            required
        >
        <label for="nomUtilisateur">Nom d'utilisateur</label>
        <div class="invalid-feedback">Nom d'utilisateur d'au moins 3 charactères obligatoire</div>
    </div>    
    <div class="form-floating my-3">
        <input
            type="password"
            class="form-control"
            placeholder="Entrez votre mot de passe"
            id="motDePasse"
            name="motDePasse"
            minlength=3
            maxlength=45
            required
        >
        <label for="motDePasse">Mot de passe</label>
        <div class="invalid-feedback">Mot de passe d'au moins 3 charactères obligatoire</div>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<script src="js/validationFormulaire.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>