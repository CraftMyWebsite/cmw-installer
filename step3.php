<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="/img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">4</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary"><p>Bienvenue <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Configuration <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Détails <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary font-bold">Type</li>
            <li class="step">Thèmes</li>
            <li class="step">Packages</li>
            <li class="step">Administrateur</li>
            <li class="step">Terminé</li>
        </ul>
    </div>
</div>

<style>

</style>

<div class="card w-5/6 lg:w-4/6 bg-cmw-gray-sec mx-auto mt-8">
    <div class="card-body">
        <h2 class="text-2xl font-medium text-center">Type de site.</h2>
        <p class="font-light text-center mb-2">Cliquez sur l'image pour séléctionner</p>
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8">

            <div class="text-center">
                <input id="game1" type="radio" name="game" value="">
                <label class="label" for="game1"><img src='/img/type/community.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Community</span>
            </div>

            <div class="text-center">
                    <input id="game2" type="radio" name="game" value="">
                    <label class="label"  for="game2"><img src='/img/type/news.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Actualités</span>
            </div>

            <div class="text-center">
                    <input id="game3" type="radio" name="game" value="">
                    <label class="label" for="game3"><img src='/img/type/portfolio.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Portfolio</span>
            </div>

            <div class="text-center">
                    <input id="game4" type="radio" name="game" value="">
                    <label class="label" for="game4"><img src='/img/type/multigaming.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Multigaming</span>
            </div>

            <div class="text-center">
                    <input id="game5" type="radio" name="game" value="">
                    <label class="label" for="game5"><img src='/img/type/Minecraft-logo.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Minecraft</span>
            </div>

            <div class="text-center">
                    <input id="game6" type="radio" name="game" value="">
                    <label class="label" for="game6"><img src='/img/type/gmod.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Garry's Mod</span>
            </div>

            <div class="text-center">
                    <input id="game7" type="radio" name="game" value="">
                    <label class="label" for="game7"><img src='/img/type/arma.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Arma III</span>
            </div>

            <div class="text-center">
                    <input id="game8" type="radio" name="game" value="">
                    <label class="label" for="game8"><img src='/img/type/dofus.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Dofus</span>
            </div>

            <div class="text-center">
                    <input id="game9" type="radio" name="game" value="">
                    <label class="label" for="game9"><img src='/img/type/eve.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Eve Online</span>
            </div>

            <div class="text-center">
                    <input id="game10" type="radio" name="game" value="">
                    <label class="label" for="game10"><img src='/img/type/other.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Autres ...</span>
            </div>
        </div>
        <div class="card-actions justify-end mt-4">
            <a href="step4.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>