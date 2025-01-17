<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Les Frères</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Les Frères</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="gallery.php">Galerie</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contact">
            <h2>Contactez-nous</h2>
            <div class="contact-details">
                <h3>Nos coordonnées</h3>
                <p><strong>Email :</strong> contact@lesfreres.com</p>
                <p><strong>Téléphone :</strong> +33 6 12 34 56 78</p>
                <p><strong>Adresse :</strong> 123 Rue de l'Art, 75001 Paris, France</p>
            </div>
            <form action="contact.php" method="POST">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Les Frères. Tous droits réservés.</p>
    </footer>
</body>
</html>
