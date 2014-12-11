<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MHD</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="wrapper">



<div class="screen" id="screen1">
    <div>
        <h1>Vyhledání spoje</h1>
    </div>

    <form method="POST" action="spoje.php">
        <div><label for="odkud" id="odkud_label">Odkud</label></div>
        <div><input id="odkud" type="text" value="Rektorát VŠB" /></div>
        <div><label for="kam" id="kam_label">Kam</label></div>
        <div><input id="kam" type="text" value="Svinov mosty, h. z." /></div>

        <button class="btn btn-success">Najít spoj</button>
    </form>
</div>
<div class="screen" id="screen2">
    <div>
        <h1>Spoje</h1>
    </div>

    <div class="seznam-spoju">
        <div class="spoj">
            <div class="nazev-spoje">Autobus 1</div>
            <div class="pgbar pgbar-green progress-bar" style="width: 30%;" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div><br />
        </div>
        <div class="spoj">
            <div class="nazev-spoje">Tramvaj 2</div>
            <div class="pgbar pgbar-red progress-bar" style="width: 60%;" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>