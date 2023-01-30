<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">2</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary"><p>Bienvenue <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary font-bold">Configuration</li>
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
        <h2 class="text-2xl font-medium text-center">Configuration.</h2>
        <div class="lg:grid grid-cols-2 gap-8">
            <div>
                <h2 class="text-lg font-medium text-center">Base de données.</h2>
                <div class="grid grid-cols-6 gap-4 mb-2">
                    <div class="col-span-4">
                        <p class="font-light">Hôte :</p>
                        <label class="input-group input-group">
                            <span><i class="fa-solid fa-server"></i></span>
                            <input type="text" value="localhost" placeholder="localhost" class="input input-bordered input-sm w-full" required>
                        </label>
                    </div>
                    <div class="col-span-2">
                        <p class="font-light">Port :</p>
                        <label class="input-group input-group">
                            <span><i class="fa-solid fa-server"></i></span>
                            <input type="text" value="3306" placeholder="3306" class="input input-bordered input-sm w-full" required>
                        </label>
                    </div>
                </div>
                <div class="mb-2">
                    <p class="font-light">Nom de la table :</p>
                    <label class="input-group input-group">
                        <span><i class="fa-solid fa-database"></i></span>
                        <input type="text" placeholder="cwm" class="input input-bordered input-sm w-full" required>
                    </label>
                </div>
                <div class="mb-2">
                    <p class="font-light">Utilisateur :</p>
                    <label class="input-group input-group">
                        <span><i class="fa-solid fa-user"></i></span>
                        <input type="text" placeholder="webmaster" class="input input-bordered input-sm w-full" required>
                    </label>
                </div>
                <div class="mb-2">
                    <p class="font-light">Mot de passe :</p>
                    <label class="input-group input-group">
                        <span><i class="fa-solid fa-unlock"></i></span>
                        <input type="password" placeholder="••••" class="input input-bordered input-sm w-full" required>
                    </label>
                </div>
                <div class="text-center">
                    <a href="../step2.php" class="btn btn-primary">Tester</a>
                </div>
            </div>
            <div>
                <h2 class="text-lg font-medium text-center">Réglages.</h2>
                <div class="mb-2">
                    <p class="font-light">Emplacement du site (sous dossier) :</p>
                    <label class="input-group input-group">
                        <span><i class="fa-regular fa-folder-open"></i></span>
                        <input type="text" placeholder="/" value="/" class="input input-bordered input-sm w-full" required>
                    </label>
                </div>
                <div>
                    <p class="font-light">Mode développeur :</p>
                    <input id="devmode" type="checkbox" class="checkbox checkbox-info checkbox-sm"/>
                    <label for="devmode">Activer le mode developpeur si vous compter créer des thèmes ou des packages pour CraftMyWebsite. Rendez-vous sur la <a class="text-primary" href="" target="_blank">documentation</a> pour en savoir d'avantage.</label>
                </div>
            </div>
        </div>
        <div class="card-actions justify-end">
            <a href="step2.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>


