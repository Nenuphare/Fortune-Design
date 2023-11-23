<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>FAQ/Contact</title>
    <link rel="stylesheet" href="./styles/stylesFaq.css">
</head>
<body>
    <section>
        <div class="back-to-menu">
            <a href="/index.html" title="Back to menu">
                <img src="../images/back.png">
            </a>
        </div>
    </section>
    <section class="section-heading">
        <div class="menu-heading">
            <img src="./images/Logo.png" alt="Icon">
            <h1>Contact</h1>
        </div>
    </section>
    <section class="section-form">
            <form id="contactForm">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="button" onclick="submitForm()">Envoyer</button>
        </form>
    </section>
    <script>
        function submitForm() {
            var form = document.getElementById("contactForm");
            var formData = new FormData(form);

            // Envoyer les données au serveur (à implémenter côté serveur)
            fetch('send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                alert('Message envoyé avec succès');
                form.reset();
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
                alert('Une erreur est survenue. Veuillez réessayer plus tard.');
            });
        }
    </script>
</body>
</html>
<?php
if(!empty($_POST)){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Modifier les détails ci-dessous avec vos paramètres de messagerie
        $to = "damien.caye@gmail.com";
        $subject = "Nouveau message de $name";
        $headers = "De: $email";

        mail($to, $subject, $message, $headers);
        echo "Message envoyé avec succès.";
    } else {
        header("HTTP/1.1 405 Method Not Allowed");
        echo "Méthode non autorisée.";
    }
}


