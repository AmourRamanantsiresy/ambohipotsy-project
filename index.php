<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.min.js" defer></script>
        <script src="js/docs.min.js" defer></script>
        <script src="js/script.js" defer></script>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
        <title>Ambohipotsy Collector</title>
    </head>

    <body id="body">
        <div class=" fixed-top container-fluid w-100p row">
            <!-- <div class="styles"></div> -->
            <h1 class="display-1 text-primary col-7">Ambohipotsy</h1>
            <div id="nav" class="col-5 row nav mt-5">
                <a href="#txt" class="col-4">
                    <h5>Texte</h5>
                </a>
                <a href="#doc" class="col-4">
                    <h5>Documents</h5>
                </a>
                <a href="#med" class="col-4">
                    <h5>Médias</h5>
                </a>
            </div>
        </div>


        <div class="container1" id="txt">
            <div class="w-50 mt-5 p-5">
                <div class="quite" id="x1">
                    <div class="x"></div>
                </div>
                <h2 class="display-5 mb-5">Pour les textes</h2>
                <div class="form-group">
                    <label for="texte" class="m-1">
                        Veuillez coller ou écrire les informations que vous voullez bien nous donner ici.
                    </label>
                    <textarea id="texte" placeholder="Ecrivez ici :)" class="form-control area" rows="3"></textarea>
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary mt-2">Envoyer</button>
                    </div>
                </div>
            </div>
            <!-- <div class="styles bot-r"></div> -->
        </div>


        <div class="container1" id="doc">
            <div class="w-50 mt-5 p-5">
                <div class="quite" id="x2">
                    <div class="x"></div>
                </div>
                <h2 class="display-5 mb-5">Pour les documents</h2>
                <div class="form-group">
                    <p class="m-1">
                        Veuillez importer les documents que vous voullez bien nous faire parvenir ici (pdf, docs, txt,
                        ...).
                    </p>
                    <label for="file" class="label-file">Glissez vos fichier ici</label>
                    <input type="file" id="file" class="my-file">
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary mt-2">Envoyer</button>
                    </div>
                </div>
                <!-- <div class="styles bot-l"></div> -->
            </div>
        </div>


        <div class="container1" id="med">
            <div class="w-50 mt-5 p-5">
                <div class="quite" id="x">
                    <div class="x"></div>
                </div>
                <h2 class="display-5 mb-5">Pour les medias</h2>
                <div class="form-group">
                    <p class="m-1">
                        Veuillez importer les fichiers medias que vous voullez bien nous faire parvenir ici (jpeg,
                        png,
                        ...).
                    </p>
                    <label for="file" class="label-file">Glissez vos fichier ici</label>
                    <input type="file" id="file" class="my-file">
                    <div class="d-flex w-100 justify-content-end">
                        <button class="btn btn-primary mt-2">Envoyer</button>
                    </div>
                </div>
            </div>
            <!-- <div class="styles bot-r"></div> -->
        </div>

        <div class="card w-25" id="bienvenue">
            <div class="bieFirst">
                <p class="display-5">Bienvenue</p>
                <div class="arrow  arrow1" id="arrow"></div>
            </div>
            <div class="container h0" id="bieContainer">
                <p>Bienvenue sur notre site de recollection de donner.</p>
                <p>Comment l'utiliser?</p>
                <p>Utiliser les trois bouttons en haut à gauche pour choisir le type de vos données</p>
                <p>
                    - Pour les données de type texte tapé sur votre machine, veuillez choisier l'onglet
                    <span>Texte</span>
                    <br><br>- Pour les données de type documents (.txt, .pdf, .docs, ...) vous pouvez les importer dans
                    l'onglet
                    <span>Documents</span>
                    <br><br>- Et enfin, pour les données de type médias, les images, vous pouvez utiliser l'onglet
                    <span>Médias</span>
                </p>
            </div>
        </div>
    </body>

</html>
