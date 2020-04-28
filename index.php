<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LoR Mana Finder</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<!-- author: sunset904 @ github -->
<!-- CREDITS to this madlad at stackoverflow https://stackoverflow.com/a/53572076 for the JSON parsing  -->

<body class="bg-dark text-white container-fluid my-1">

    <main>
        <div class="container">
            <h1 class="text-left h3">LoR Mana Cheatsheet Finder <span class="h6">by <a href="https://github.com/sunset904">sunset904 @ github</a></span></h1>

            <form action="<?php /*echo $_SERVER['PHP_SELF'];*/ ?>" method="post" enctype="multipart/form-data">

                <!--<form action="processing_filter.php" method="post" enctype="multipart/form-data"> -->
                <div class="container-fluid my-3">

                    <div class="row my-3">
                        <div class="col">
                            <p class="h4">Region</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="freljord" value="Freljord">
                                <label class="form-check-label" for="freljord"><img src="lor_assets/core-en_us/en_us/img/regions/icon-freljord.png" alt="Freljord Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="demacia" value="Demacia">
                                <label class="form-check-label" for="demacia"><img src="lor_assets/core-en_us/en_us/img/regions/icon-demacia.png" alt="Demacia Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="ionia" value="Ionia">
                                <label class="form-check-label" for="ionia"><img src="lor_assets/core-en_us/en_us/img/regions/icon-ionia.png" alt="Ionia Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="noxus" value="Noxus">
                                <label class="form-check-label" for="noxus"><img src="lor_assets/core-en_us/en_us/img/regions/icon-noxus.png" alt="Noxus Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="pnz" value="PiltoverZaun">
                                <label class="form-check-label" for="pnz"><img src="lor_assets/core-en_us/en_us/img/regions/icon-piltoverzaun.png" alt="PnZ Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="shadowisles" value="ShadowIsles">
                                <label class="form-check-label" for="shadowisles"><img src="lor_assets/core-en_us/en_us/img/regions/icon-shadowisles.png" alt="Shadow Isles Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="bilgewater" value="Bilgewater">
                                <label class="form-check-label" for="bilgewater"><img src="lor_assets/core-en_us/en_us/img/regions/icon-bilgewater.png" alt="Shadow Isles Icon" style="width:50%;height:50%;"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="regionRef" id="unknown" value="unknown" disabled>
                                <label class="form-check-label" for="unknown">Coming soon!?</label>
                            </div>
                        </div>

                        <div class="col">

                            <p class="h4">Mana Cost</p>

                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="manaCost" id="manaHigherThan" value="manaHigherThan">
                                <label class="form-check-label btn btn-light" for="manaHigherThan">Equal or Higher than</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="manaCost" id="manaLowerThan" value="manaLowerThan">
                                <label class="form-check-label btn btn-light" for="manaLowerThan">Equal or Lower than</label>
                            </div>
                            <hr>
                            <!-- 
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="cost" id="manaValue0" value="0">
                            <label class="form-check-label btn btn-primary" for="manaValue0">0</label>
                        </div>
                         -->
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue1" value="1">
                                <label class="form-check-label btn btn-primary" for="manaValue1">1</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue2" value="2">
                                <label class="form-check-label btn btn-primary" for="manaValue2">2</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue3" value="3">
                                <label class="form-check-label btn btn-primary" for="manaValue3">3</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue4" value="4">
                                <label class="form-check-label btn btn-primary" for="manaValue4">4</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue5" value="5">
                                <label class="form-check-label btn btn-primary" for="manaValue5">5</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue6" value="6">
                                <label class="form-check-label btn btn-primary" for="manaValue6">6</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cost" id="manaValue7" value="7">
                                <label class="form-check-label btn btn-primary" for="manaValue7">7</label>
                            </div>
                            <!-- 
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="cost" id="manaValue8" value="8">
                            <label class="form-check-label btn btn-primary" for="manaValue8">8</label>
                        </div>
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="cost" id="manaValue9" value="9">
                            <label class="form-check-label btn btn-primary" for="manaValue9">9</label>
                        </div>
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="cost" id="manaValue10" value="10">
                            <label class="form-check-label btn btn-primary" for="manaValue10">10</label>
                        </div>
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="cost" id="manaValue11" value="11">
                            <label class="form-check-label btn btn-primary" for="manaValue11">10+</label>
                        </div>
                         -->
                        </div>
                        <div class="col">
                            <p class="h4">Card Type</p>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="type" id="unitchamp" value="Unit">
                                <label class="form-check-label btn buttonUnitsChampions" for="unitchamp">Champions/Followers</label>
                            </div>
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="type" id="allspells" value="Spell">
                                <label class="form-check-label btn buttonAllSpells" for="allspells">ALL Spells</label>
                            </div>
                            <!-- 
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="spellSpeedRef" id="slowspells" value="Slow">
                            <label class="form-check-label btn buttonSlowSpells" for="slowspells">SLOW Spells</label>
                        </div>

                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="spellSpeedRef" id="fastspells" value="Fast">
                            <label class="form-check-label btn buttonFastSpells" for="fastspells">FAST Spells</label>
                        </div>
                        <div class="form-check form-check-inline py-2">
                            <input class="form-check-input" type="radio" name="spellSpeedRef" id="burstspells" value="Burst">
                            <label class="form-check-label btn buttonBurstSpells" for="burstspells">BURST Spells</label>
                        </div>
 -->
                            <div class="form-check form-check-inline py-2">
                                <input class="form-check-input" type="radio" name="cardRequest" id="cardRequest" value="cardArtRequest">
                                <label class="form-check-label btn btn-light" for="cardRequest">Use Card Art instead of text?</label>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </form>

        </div>

        <div class="container py-3">
            <div class="row ">
                <div class="col">
                    <?php

                    if (empty($_POST) == false) {

                        if (empty($_POST["regionRef"])) {
                            print '<div class="alert alert-danger" role="alert">ERROR: No region specificed.</div>';
                            exit();
                        }
                        if (empty($_POST["manaCost"])) {
                            print '<div class="alert alert-danger" role="alert">ERROR: No mana depth specificed.</div>';
                            exit();
                        }
                        if (empty($_POST["cost"])) {
                            print '<div class="alert alert-danger" role="alert">ERROR: No mana cost specificed.</div>';
                            exit();
                        }
                        if (empty($_POST["type"])) {
                            print '<div class="alert alert-danger" role="alert">ERROR: No card type specificed.</div>';
                            exit();
                        }

                        $json = file_get_contents('lor_assets/data-en_us/en_us/data/card-en_us.json');
                        $array = json_decode($json, 1);

                        $regionRef = $_POST["regionRef"];
                        $manaCost = $_POST["manaCost"];
                        $cost = $_POST["cost"];
                        $type = $_POST["type"];
                        // $spellSpeedRef = $_POST["spellSpeedRef"];

                        if ($type == "Unit") {
                            print "<p> Units: </p>";
                        }
                        if ($type == "Spell") {
                            print "<p> Spells: </p>";
                        }
                        
                        echo "<p>";

                        if ($manaCost == "manaLowerThan") {


                            for ($i = $cost; $i > 0; $i--) {
                                
                                // Without this, the mana higher/less filter simply won't work and would just show dupes.
                                $jsonFilter = array_filter($array, function ($var) use ($regionRef, $cost, $type /*, $spellSpeedRef */) {
                                    return ($var['regionRef'] == $regionRef && $var['cost'] == $cost && ($var['type'] == $type /* || $var['spellSpeedRef'] == $spellSpeedRef */));
                                });

                                if (empty($_POST["cardRequest"])) {
                                    foreach ($jsonFilter as $relevantData) :

                                        $message =
                                            '<span> Mana: <span class="badge badge-primary">' . $relevantData['cost'] . '</span>' .
                                            ' Name: <b>' . $relevantData['name'] . '</b> <br>' .
                                            (($relevantData['type'] == "Unit") ? " Attack: <span class='badge badge-warning'>" . $relevantData['attack'] . '</span>' : "") .
                                            (empty($relevantData['health']) ? "" : " Health: <span class='badge badge-danger'>" . $relevantData['health'] . '</span>') .  '<br>' .
                                            (($relevantData["supertype"] == "Champion" && empty($relevantData["descriptionRaw"])) ? "Level UP: " . $relevantData["levelupDescriptionRaw"] . '<br>' : "") .
                                            (empty($relevantData["keywords"]) ? "" : "Keywords: <span class='font-weight-bold text-warning'>" . implode("<span class='text-white'>,</span> ", $relevantData["keywords"]) . '</span>' . '<br>') .
                                            (empty($relevantData['descriptionRaw']) ? "" : $relevantData['descriptionRaw'] . '<br>') . '</span>' . '<br>';

                                        echo $message;

                                    endforeach;
                                } else {

                                    foreach ($jsonFilter as $relevantData) :
                                        echo "<img src=" . $relevantData['assets'][0]['gameAbsolutePath'] . " alt=" . $relevantData['name'] . " class='' style='width:25%;height:25%'>";
                                    endforeach;
                                }
                                $cost--;
                            }
                        } else if ($manaCost == "manaHigherThan") {

                            for ($i = $cost; $i < 13; $i++) {
                                
                                // Without this, the mana higher/less filter simply won't work and would just show dupes.
                                $jsonFilter = array_filter($array, function ($var) use ($regionRef, $cost, $type /*, $spellSpeedRef */) {
                                    return ($var['regionRef'] == $regionRef && $var['cost'] == $cost && ($var['type'] == $type /* || $var['spellSpeedRef'] == $spellSpeedRef */));
                                });

                                if (empty($_POST["cardRequest"])) {
                                    foreach ($jsonFilter as $relevantData) :

                                        $message =
                                            '<span> Mana: <span class="badge badge-primary">' . $relevantData['cost'] . '</span>' .
                                            ' Name: <b>' . $relevantData['name'] . '</b> <br>' .
                                            (($relevantData['type'] == "Unit") ? " Attack: <span class='badge badge-warning'>" . $relevantData['attack'] . '</span>' : "") .
                                            (empty($relevantData['health']) ? "" : " Health: <span class='badge badge-danger'>" . $relevantData['health'] . '</span>') .  '<br>' .
                                            (($relevantData["supertype"] == "Champion" && empty($relevantData["descriptionRaw"])) ? "Level UP: " . $relevantData["levelupDescriptionRaw"] . '<br>' : "") .
                                            (empty($relevantData["keywords"]) ? "" : "Keywords: <span class='font-weight-bold text-warning'>" . implode("<span class='text-white'>,</span> ", $relevantData["keywords"]) . '</span>' . '<br>') .
                                            (empty($relevantData['descriptionRaw']) ? "" : $relevantData['descriptionRaw'] . '<br>') . '</span>' . '<br>';

                                        echo $message;

                                    endforeach;
                                } else {

                                    foreach ($jsonFilter as $relevantData) :
                                        echo "<img src=" . $relevantData['assets'][0]['gameAbsolutePath'] . " alt=" . $relevantData['name'] . " class='' style='width:25%;height:25%'>";
                                    endforeach;
                                }
                                $cost++;
                            }
                        }
                        
                        echo "</p>";
                        
                    } else {
                        echo "No data was searched for (at least so far!).";
                    }
                    ?>
                </div>
            </div>
        </div>


    </main>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>