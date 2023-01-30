<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">1</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary font-bold">Bienvenue</li>
            <li class="step">Configuration</li>
            <li class="step">Détails</li>
            <li class="step">Type</li>
            <li class="step">Thèmes</li>
            <li class="step">Packages</li>
            <li class="step">Administrateur</li>
            <li class="step">Terminé</li>
        </ul>
    </div>
</div>

<div class="card w-5/6 lg:w-4/6 bg-cmw-gray-sec mx-auto mt-8">
    <div class="card-body">

        <select class="absolute top-0 right-0 select select-ghost select-sm w-32">
            <option selected>Français</option>
            <option>English</option>
            <option>Deutch</option>
            <option>Spanish</option>
        </select>

        <h2 class="text-2xl font-medium text-center">Bienvenue !</h2>
        <p class="text-center">Merci d'avoir choisi CraftMyWebsite pour votre site web !</p>
        <p>Faisons le point sur votre configuration :</p>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr class="text-center">
                    <th>WEB</th>
                    <th>PHP</th>
                    <th>HTTPS</th>
                    <th>Configuration</th>
                    <th>Extension</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr class="text-center">
                    <td><i class="text-green-500 fa-solid fa-check"></i> Apache 2</td>
                    <td><i class="text-red-500 fa-solid fa-xmark"></i> 8.1.12</td>
                    <td><i class="text-green-500 fa-solid fa-check"></i> Actif</td>
                    <td><i class="text-green-500 fa-solid fa-check"></i> AllowOverride All</td>
                    <td><i class="text-green-500 fa-solid fa-check"></i> zip, pdo, curl</td>
                </tr>
                </tbody>
            </table>
        </div>
        <p>Si votre configuration n'est pas bonne merci de vous referer au <a class="text-primary" href="" target="_blank">prérequis</a> avant de continuer l'installation.</p>
        <p>En cas de demande de support auprès de CraftMyWebsite ces informations peuvent nous être utilie pour determiné l'environement dans lequel vous êtes. merci de bien vouloir noté les informations que vous ne conaissez pas.</p>
        <p>Passons maintenant à l'installation de votre nouveau site ...</p>

        <div class="card-actions justify-end">
            <a href="step1.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>


