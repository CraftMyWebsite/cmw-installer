<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="/img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">3</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary"><p>Bienvenue <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Configuration <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary font-bold">Détails</li>
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
        <h2 class="text-2xl font-medium text-center">Détails.</h2>
        <div class="lg:grid grid-cols-2 gap-8">
            <div class="form-control">
                <p class="font-light">Nom du site :</p>
                <label class="input-group input-group">
                    <span><i class="fa-solid fa-heading"></i></span>
                    <input type="text" placeholder="CraftMyWebsite" class="input input-bordered input-sm w-full" required>
                </label>
            </div>
            <div class="form-control">
                <p class="font-light">Description :</p>
                <label class="input-group input-group">
                    <span><i class="fa-solid fa-text-width"></i></i></span>
                    <input type="text" placeholder="Un beau site web prêt à l'emploie !" class="input input-bordered input-sm w-full" required>
                </label>
            </div>
        </div>
        <div class="card-actions justify-end">
            <a href="step3.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>