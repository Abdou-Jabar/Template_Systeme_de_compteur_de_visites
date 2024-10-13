<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto flex justify-center items-center p-4">
            <h1 class="text-2xl font-bold">Systeme de compteur de vue</h1>
        </div>
    </header>
    <!--On requiert depuis ce fichier le fichier "compteur.php"-->
    <?php
        require_once 'compteur.php';
        ajouter_vue();
    ?>
    <div class="flex justify-center">
        <div class=" bg-blue-400 mt-5 justify-center w-auto rounded-lg p-3">
            <!--Affichage de nombre de visiteurs-->
            <span class="font-bold text-8xl"><?=nombre_vue()?></span>Visites Totales
        </div>
    </div>
</body>
</html>
