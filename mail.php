<?php
    $retour = mail('oget.charlene@gmail.com', 'Envoi depuis la page CV OGET Charlène', $_POST['question'], '');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>