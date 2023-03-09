<?php
// vérification de l'envoi du formulaire avec tous les champs nécessaires dans un seul isset
// équivalennt dez multiples isset()&&isset()&&....
if(isset($_POST['nom'],$_POST['mail'],$_POST['lesujet'],$_POST['message'])) {
    /*
     * Création de variables locales
     */
    $lenom = strip_tags(trim($_POST['nom']));
    // filter_var avec FILTER_VALIDATE_EMAIL comme attribut va vérifier
    // si le mail est formaté correctement (pas de vérification de l'existence du mail)
    // on récupère le mail, sinon $lemail vaut false
    $lemail = filter_var(trim($_POST['mail']), FILTER_VALIDATE_EMAIL);
    $lesujet = strip_tags(trim($_POST['lesujet']));
    $lemessage = strip_tags(trim($_POST['message']));

    // si les valeurs sont acceptées (autre que vide, false etc...)
    if (!empty($lenom) && !empty($lemail) && !empty($lesujet) && !empty($lemessage)) {
        /*
         *  Préparation pour l'envoi
         */
        // votre mail de réception
        $monmail = "no-replay@webdev-cf2m.be";
        // mail qui appartient à votre site (plus sécurisé que immédiatement le mail de
        // l'utilisateur) - Pratique en cas d'entrée dans les spam, rajoutez ce mail dans vos
        // contact et tous les mails venant de votre formulaire n'irons jamais dans les spam
        $mailserveur = "robot@monsite.be";
        // titre du mail
        $titre = "Message venant de votre site";
        // message final
        $messageFinal = "Message envoyé par : \r\n\r\n";
        $messageFinal .= $lemail . "\r\n\r\n";
        $messageFinal .= "Titre: \r\n\r\n";
        $messageFinal .= $lesujet . "\r\n\r\n";
        $messageFinal .= $lemessage;

        /*
         * Envoi du mail
         */
        // création des entêtes
        $entetes = 'From: ' . $mailserveur . "\r\n" .
            'Reply-To: ' . $lemail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // envoi réel du mail
        $envoi = @mail($monmail, $titre, $messageFinal, $entetes);
        // mail envoyé
        if($envoi){
            // message de réussite de l'envoi
            $erreur = "<h2>Message bien envoyé</h2>";
            $erreur .= "<h3>Vous recevrez une réponse prochainement</h3>";
        }else{
            // problème de la fonction mail, erreur personnalisée
            $erreur = "Problème du serveur, veuillez recommencer plus tard";
        }

    // un champs est vide
    } else {
        // création d'une variable d'erreur en cas de champs non valides
        $erreur = "<h3>Veuillez remplir correctement les champs</h3>";
        $erreur .= "<h4>Retour au formulaire <a href='#' onclick='history.go(-1);'>ici</a></h4>";
    }
}
?>