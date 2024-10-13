<?php
    //Fonction qui gère l'incrémentation nombre de visites
    function ajouter_vue(){
        $fichier = 'compteur';
        
        if(file_exists($fichier)){
            $compteur = (int)file_get_contents($fichier);
            $compteur++;
        }

        file_put_contents($fichier, $compteur);
    }

    //Fonction qui retourne le nombre de visites
    function nombre_vue(): string {
        $fichier = 'compteur';
        return file_get_contents($fichier);
    }
?>
