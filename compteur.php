<?php
    function ajouter_vue(){
        $fichier = 'compteur';
        $compteur = 1;

        if(file_exists($fichier)){
            $compteur = (int)file_get_contents($fichier);
            $compteur++;
        }

        file_put_contents($fichier, $compteur);
    }

    function nombre_vue(): string {
        $fichier = 'compteur';
        return file_get_contents($fichier);
    }
?>