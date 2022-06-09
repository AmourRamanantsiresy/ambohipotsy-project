<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js" defer></script>
        <script src="js/script.js" defer></script>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
        <title>Ambohipotsy Collector</title>
    </head>

    <body id="body">
        <div class="fixed-top container-fluid w-100p row">
            <h1 class="display-1 text-primary col-7">Ambohipotsy</h1>
            <div id="nav" class="col-5 row nav mt-5">
                <div class="col-4"></div>
                <a href="#txt" class="col-4">
                    <h5>Soratra</h5>
                </a>
                <a href="#doc" class="col-4">
                    <h5>Tahiry</h5>
                </a>
            </div>
            <div id="nav" class="col-5 nav2 mt-5">
                <a href="#txt" class="">
                    <h5>Soratra</h5>
                </a>
                <a href="#doc" class="">
                    <h5>Tahiry</h5>
                </a>
            </div>
        </div>


        <div class="container1" id="txt">
            <div class="w-50 mt-5 p-5">
                <div class="quite x1">
                    <div class="x"></div>
                </div>
                <h2 class="display-5 mb-5">Ho an'ny soratra</h2>
                <div class="form-group">
                    <label for="texte" class="m-1">
                        Eto amin'ity efa-joro miloko fotsy eto ambany eto ity no hametahana (coller) na andikana ilay
                        tantara tiana alefa.
                    </label>
                    <textarea id="texte" placeholder="fanoratana :)" class="form-control area" rows="3"></textarea>
                    <div class="d-flex w-100 justify-content-end">
                        <button id="btn-txt" class="btn btn-primary mt-2">Alefa</button>
                    </div>
                </div>
            </div>
            <!-- <div class="styles bot-r"></div> -->
        </div>



        <div class="container1" id="doc">
            <div class="w-50 mt-5 p-5">
                <div class="quite x2">
                    <div class="x"></div>
                </div>
                <h2 class="display-5 mb-5">Ho an'ny Tahiry</h2>
                <div class="form-group">
                    <p class="m-1">
                        Tsindrio ny efa-joro eo ambany ary safidio ilay tahiry tiana alefa.
                    </p>
                    <form name="form" action="server.php" enctype="multipart/form-data" method="post">
                        <div id="champ1">
                            <label for="file" class="label-file lf1">Safidio ny tahiry</label>
                            <input type="file" name="my_file" id="file" onchange="change('file','.lf1')"
                                class="my-file">
                            <input type="text" name="type" value="file" hidden>
                        </div>
                        <div class="d-flex w-100 justify-content-end">
                            <button type="submit" class="btn btn-primary mt-2" id="btn-2">Alefa</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="styles bot-l"></div> -->
            </div>
        </div>

        <div class="card w-25" id="bienvenue">
            <div class="bieFirst">
                <p class="display-5">Tongasoa</p>
                <div class="arrow  arrow1" id="arrow"></div>
            </div>
            <div class="container h0" id="bieContainer">
                <p>Togasoa eto amin'ny tranokala fanangonana tahirin-kevitra</p>
                <p>Ahoana ny fampiasa azy ?</p>
                <p>
                    Ireo bokitra roa ery ambony avanana no ampiasaina rehefa andefa tahiry.
                    <br> Toy izao no anaovana azy :
                </p>
                <p>
                    - Raha ohatra ka anoratra na hitantara zavatra an-tsoratra dia, tsindrio ilay bokitra
                    <span>Soratra</span> ery ambony avanana. <br>
                    Misy toerana (efa-joro miloko fotsy ahitana ny sotratra hoe <span>"Toeran'ny Soratra"</span>) efa
                    voatokana handikàna ilay tanatara ao.
                    <br><br>- Raha ohatra ka andefa tahirin-kevitra (.docx, .pdf, ...) na sary (.png, .jpg, ...) dia
                    tsindrio ilay
                    bokitra <span>Tahiry</span> ery ambony avanana.
                    Misy toerana (efa-joro miloko fotsy ) efa voatokana handikàna ilay tanatara ao.
                </p>
            </div>
        </div>
        <div id="cover"></div>
    </body>

</html>
