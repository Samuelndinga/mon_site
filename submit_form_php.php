<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])));
    $postnom = htmlspecialchars(strip_tags(trim($_POST['postnom'])));
    $eglise = htmlspecialchars(strip_tags(trim($_POST['eglise'])));
    $pays = htmlspecialchars(strip_tags(trim($_POST['pays'])));
    $ville = htmlspecialchars(strip_tags(trim($_POST['ville'])));
    $telephone = htmlspecialchars(strip_tags(trim($_POST['telephone'])));
    $opinion = htmlspecialchars(strip_tags(trim($_POST['opinion'])));

    $to = "stanislasnketer@gmail.com"; // Votre adresse email
    $subject = "Nouvelle soumission de formulaire";
    
    // Préparer le message email
    $message = "Nom: $nom\n";
    $message .= "Post-nom: $postnom\n";
    $message .= "Église de provenance: $eglise\n";
    $message .= "Pays: $pays\n";
    $message .= "Ville: $ville\n";
    $message .= "Numéro de téléphone: $telephone\n";
    $message .= "Votre opinion: $opinion\n";

    // Définir les en-têtes
    $headers = "From: no-reply@votredomaine.com" . "\r\n"; // Changez par votre domaine
    $headers .= "Reply-To: $email" . "\r\n"; // Ajouter un en-tête Reply-To pour permettre aux utilisateurs de répondre

    // Envoyer l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Échec de l'envoi du message.";
    }
}
?>
