
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Formulaire php</title>
</head>
<body>

<form method="post" action="thanks.php">
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname" required>
    </div>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname" required>

    </div>
    <div>
        <label for="courriel">e-mail:</label>
        <input type="email" id="courriel" name="user_mail" required>
    </div>
    <div>
        <label for="phone">Numéro de téléphone :</label>
        <input type="tel" id="phone" name="user_phone" required>
    </div>
    <div>
        <label for="sujet">Sujet du mail:</label>
        <select id="sujet" name="user_sujet" required>
            <option value="d'une demande informations">Demande d'informations</option>
            <option value="d'une demande de devis">Demande de devis</option>
            <option value="d'une réclamation">Réclamation</option>
            <option value="d'une demande de remboursement">Demande de remboursement</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
</body>
</html>