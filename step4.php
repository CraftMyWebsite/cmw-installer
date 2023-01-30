<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="/img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">5</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary"><p>Bienvenue <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Configuration <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Détails <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Type <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary font-bold">Thèmes</li>
            <li class="step">Packages</li>
            <li class="step">Administrateur</li>
            <li class="step">Terminé</li>
        </ul>
    </div>
</div>


<div class="card w-5/6 lg:w-4/6 bg-cmw-gray-sec mx-auto mt-8">
    <div class="card-body">
        <h2 class="text-2xl font-medium text-center">Choix d'un thèmes.</h2>
        <p class="font-light text-center mb-2">Cliquez sur l'image pour séléctionner</p>
        <div class="lg:grid grid-cols-4 gap-8">

            <div class="text-center">
                <input id="theme1" type="radio" name="game" value="">
                <label class="label" for="theme1"><img src='/img/themes/theme.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-medium mx-auto"><a href="" target="_blank" class="text-primary">Wipe</a></span>
                <p class="font-light">Un thème balnc basique sans chichi</p>
            </div>

            <div class="text-center">
                <input id="theme2" type="radio" name="game" value="">
                <label class="label" for="theme2"><img src='/img/themes/theme.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-medium mx-auto"><a href="" target="_blank" class="text-primary">Rainfall</a></span>
                <p class="font-light">Un thème parfait pour les petite communautés</p>
            </div>

            <div class="text-center">
                <input id="theme3" type="radio" name="game" value="">
                <label class="label" for="theme3"><img src='/img/themes/theme.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-medium mx-auto"><a href="" target="_blank" class="text-primary">Vega</a></span>
                <p class="font-light">Un thème Light ou Dark vous utilisateur auront le choix</p>
            </div>

            <div class="text-center">
                <input id="theme4" type="radio" name="game" value="">
                <label class="label" for="theme4"><img src='/img/themes/theme.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-medium mx-auto">Je verrais plus tard</span>
                <p class="font-light">Thème de base, vous pourrez en mettre plus tard</p>
            </div>


        </div>
        <div class="card-actions justify-end mt-4">
            <a href="step5.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>