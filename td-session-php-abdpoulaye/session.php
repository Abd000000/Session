
<?php
//session_start() crée une session ou restaure celle trouvée sur le serveur, via 
//l'identifiant de session passé dans une requête GET, POST ou par un cookie
//session_regenerate s'assure que nous ouvrons une nouvelle session et supprimer les anciennes sessions
//session_unset permet de supprimer toutes les variables
//session_destroy permet de supprimer la session

$message = ""

if(isset($_POST["valider"])){
    if(!session_id){
        session_start();
        session_regenerate_id(true);
        $message = "Session ouverte";
    }
}

if(isset($_POST["deconnecter"])){
    if(session_id){
        session_unset();
        session_destroy();
        $message = "Session fermée";
    }
}
?>