<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $cardNumber = htmlspecialchars($_POST['card-number']);
    $expiryDate = htmlspecialchars($_POST['expiry-date']);
    $cvv = htmlspecialchars($_POST['cvv']);
    
    // Vous pouvez maintenant traiter ces données comme vous le souhaitez
    // Par exemple, les stocker dans une base de données, envoyer un e-mail, etc.
    
    // Ici, nous allons simplement afficher les données
    echo "<h1>Données de Paiement Reçues</h1>";
    echo "<p><strong>Nom:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Adresse:</strong> $address</p>";
    echo "<p><strong>Numéro de Carte:</strong> $cardNumber</p>";
    echo "<p><strong>Date d'Expiration:</strong> $expiryDate</p>";
    echo "<p><strong>CVV:</strong> $cvv</p>";
} else {
    echo "Aucune donnée reçue.";
}
?>