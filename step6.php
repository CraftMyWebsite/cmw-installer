<?php include "include/head.php" ?>
<body class="bg-cmw-gray">
<img class="w-48 mx-auto py-8" src="/img/logo_compact.png" alt="Image introuvable !">

<div class="lg:hidden text-center p-4 bg-primary text-xl"><span class="font-bold">7</span><span class="text-sm">/8</span></div>

<div class="hidden lg:block w-full mx-auto">
    <div class=" p-4">
        <ul class=" content-center steps steps-horizontal w-full">
            <li class="step step-primary"><p>Bienvenue <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Configuration <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Détails <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Type <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Thèmes <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary"><p>Packages <i class="text-green-500 fa-solid fa-check"></i></p></li>
            <li class="step step-primary font-bold">Administrateur</li>
            <li class="step">Terminé</li>
        </ul>
    </div>
</div>

<div class="card w-5/6 lg:w-4/6 bg-cmw-gray-sec mx-auto mt-8">
    <div class="card-body">
        <h2 class="text-2xl font-medium text-center">Administrateur.</h2>
        <div class="lg:grid grid-cols-2 gap-8">
            <div class="form-control">
                <p>Nom d'utilisateur :</p>
                <label class="input-group input-group">
                    <span><i class="fa-solid fa-user"></i></span>
                    <input type="text" placeholder="cwm" class="input input-bordered input-sm w-full" required>
                </label>
            </div>
            <div class="form-control">
                <p>E-Mail :</p>
                <label class="input-group input-group">
                    <span><i class="fa-solid fa-at"></i></i></span>
                    <input type="text" placeholder="contact@craftmywebsite.fr" class="input input-bordered input-sm w-full" required>
                </label>
            </div>
        </div>
        <div class="lg:grid grid-cols-2 gap-8">
            <div class="form-control">
                <p>Mot de passe :</p>
                <label class="input-group input-group">
                    <span><i class="fa-solid fa-unlock"></i></span>
                    <input type="password" placeholder="••••" class="input input-bordered input-sm w-full" required>
                </label>
            </div>
            <div class="form-control">
                <p>Confirmation :</p>
                <label class="input-group input-group">
                    <span><i class="fa-solid fa-unlock"></i></span>
                    <input type="text" placeholder="••••" class="input input-bordered input-sm w-full" required>
                </label>
            </div>
        </div>
        <div class="card-actions justify-end">
            <a href="finish.php" class="btn btn-primary">Suivant</a>
        </div>
    </div>
</div>
</body>