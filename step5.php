<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="/img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">6</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary"><p>Bienvenue <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Configuration <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Détails <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Type <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary "><p>Thèmes <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary font-bold">Packages</li>
            <li class="step">Administrateur</li>
            <li class="step">Terminé</li>
        </ul>
    </div>
</div>


<div class="card w-5/6 lg:w-4/6 bg-cmw-gray-sec mx-auto mt-8">
    <div class="card-body">
        <h2 class="text-2xl font-medium text-center">Choix des packages.</h2>
        <p class="text-center">Vous pourrez en ajouter d'autres plus tard.</p>
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8">

            <div class="text-center">
                <input class="hidden" id="pack1" type="checkbox" name="game" value="">
                <label class="label" for="pack1"><img src='/img/package/contact.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Contact</span>
            </div>

            <div class="text-center">
                <input class="hidden" id="pack2" type="checkbox" name="game" value="">
                <label class="label" for="pack2"><img src='/img/package/faq.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">F.A.Q</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack3" type="checkbox" name="game" value="">
                <label class="label" for="pack3"><img src='/img/package/forum.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Forum</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack4" type="checkbox" name="game" value="">
                <label class="label" for="pack4"><img src='/img/package/news.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Actualités</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack5" type="checkbox" name="game" value="">
                <label class="label" for="pack5"><img src='/img/package/redirect.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Redirect</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack6" type="checkbox" name="game" value="">
                <label class="label" for="pack6"><img src='/img/package/shop.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Boutique</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack7" type="checkbox" name="game" value="">
                <label class="label" for="pack7"><img src='/img/package/vote.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Votes</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack8" type="checkbox" name="game" value="">
                <label class="label" for="pack8"><img src='/img/package/wiki.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Wiki</span>
            </div>
            <div class="text-center">
                <input class="hidden" id="pack9" type="checkbox" name="game" value="">
                <label class="label" for="pack9"><img src='/img/type/Minecraft-logo.png' class="rounded mx-auto" style="max-height: 100px; max-width: 100px" alt="Logo"></label>
                <span class="game-name font-light mx-auto">Minecraft</span>
            </div>

        </div>

        <div class="card-actions justify-end mt-4">
            <a href="step6.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>