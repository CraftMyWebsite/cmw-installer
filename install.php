<?php
/***
 * This file is only for the installation of CraftMyWebsite CMS.
 *
 * Please Remove this file when your website is configured and installed.
 *
 * @copyright  CraftMyWebsite
 * @author CraftMyWebsite Community
 * @version 2.0 #Installer version
 */

/****
 *
 * VARS
 *
 ****/
$minPhpVersion = 8.1;
$installerVersion = 2.0;

$extensionsRequired = ["curl", "zip", "json", "PDO", "fileinfo", "mbstring"];

/*
 * LANG AREA
 */
$availableLang = ["fr" => "Français", "en" => "English"];
$selectedLang = $_SESSION['cmwDownloadLang'] ?? "en";
$translationList = [
    "fr" => [
        "title" => "Téléchargement de CraftMyWebsite",
        "desc" => "Téléchargement de votre site CraftMyWebsite",
        "downloadTitle" => "Télécharger CraftMyWebsite",
        "p1" => "Commencez dès maintenant votre nouvelle histoire avec <a href='https://craftmywebsite.fr' target='_blank'>CraftMyWebsite</a>.",
        "p2" => "Téléchargez dès maintenant CraftMyWebsite pour procéder à la configuration de votre site",
        "downloadBtn" => "Commencer dès maintenant"
    ],
    "en" => [
        "title" => "Downloading CraftMyWebsite",
        "desc" => "Download your new CraftMyWebsite website",
        "downloadTitle" => "Download CraftMyWebsite",
        "p1" => "Start your new story now with <a href='https://craftmywebsite.fr' target='_blank'>CraftMyWebsite</a>.",
        "p2" => "Download now CraftMyWebsite to proceed to the configuration of your site",
        "downloadBtn" => "Start now"
    ]
];
$translation = $translationList[$selectedLang];

/**
 * Download button
 */
if (array_key_exists('downloadBtn', $_POST)) {
    downloadZip();
}

/**
 * @return void
 * @desc Download the cms zip file
 */
function downloadZip(): void
{
    $zipName = "cmw.zip";

    // If archive already exist, we delete this
    if (file_exists($zipName)) {
        unlink($zipName);
    }

    //Get archive
    $data = getData();

    file_put_contents($zipName, fopen($data['file_download'], 'rb'));

    //Unzip archive
    unzip($zipName);
}

function getData(): array
{
    $url = 'https://apiv2.craftmywebsite.fr/cms/oneClickInstall'; // TODO Real API Download URL

    $options = array(
        'http' => array(
            'method' => "GET",
            'ignore_errors' => true,
        )
    );

    $context = stream_context_create($options);

    try {
        return json_decode(file_get_contents($url, false, $context), JSON_THROW_ON_ERROR, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException) {
        return [];
    }
}

function unzip(string $zipName): void
{
    $zip = new ZipArchive;
    if ($zip->open('cmw.zip') === TRUE) {
        $zip->extractTo(__DIR__);
        $zip->close();
        unlink($zipName);

        header('location: installer');
    } else {
        echo 'Error with cmw.zip';
    }
}

?>


<!-- Front AREA -->

<!DOCTYPE html>
<html lang="<?= $selectedLang ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="" href="https://reborn.craftmywebsite.fr/public/uploads/logo/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <meta name="description" content="<?= $translation['desc'] ?>">
    <title><?= $translation['title'] ?></title>
</head>
<body>

<div class="container">
    <img class="logo"
         src="https://reborn.craftmywebsite.fr/public/uploads/logo/logo_compact.png"
         alt="CMW Logo">

    <div class="card">
        <div class="content">
            <h3><?= $translation['downloadTitle'] ?></h3>

            <hr class="spacer">

            <p><?= $translation['p1'] ?></p>
            <p><?= $translation['p2'] ?></p>

            <form method="POST" action="">
                <input type="hidden" name="downloadBtn">
                <button class="downloadButton"><?= $translation['downloadBtn'] ?></button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

    body {
        background-color: rgb(16, 16, 24);
        text-align: center;
        color: whitesmoke;
        font-family: 'Poppins', sans-serif;
        align-items: center;
    }

    a {
        color: rgb(212, 73, 95);
    }

    .container {
        display: table;
        justify-content: center;
        align-items: center;
        height: 90%;
        width: 100%;
    }

    .logo {
        max-height: 450px;
        max-width: 200px;
        margin-top: 60px;
    }

    .card {
        background-color: rgb(27, 27, 41);
        margin-right: 5%;
        margin-left: 5%;
        margin-top: 50px;
        border-radius: 10px;

        padding: 20px 10px 20px 10px;
    }

    .spacer {
        margin-right: 40%;
        margin-left: 40%;
        background: rgb(212, 73, 95);
        height: 3px;
        border-radius: 2px 0 2px 0;
        border: 0;
    }

    .downloadButton {
        background-color: transparent;
        border-color: rgb(212, 73, 95);
        border-style: solid;
        border-radius: 10px;
        color: whitesmoke;
        font-size: x-large;

        margin-top: 25px;
        padding: 6px;
        cursor: pointer;
        transition: all 0.8s
    }

    .downloadButton:hover {
        background-color: rgb(212, 73, 95) !important;
    }


</style>