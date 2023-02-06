<?php

    $inpCals = $_POST['newCals'];
    $inpFat = $_POST['newFat'];
    $inpCarbs = $_POST['newCarbs'];
    $inpProt = $_POST['newProt'];
    $inpSug = $_POST['newSug'];
    $inpMod = $_POST['multiplier'];

    $inpCals = $inpCals * $inpMod;
    $inpFat = $inpFat * $inpMod;
    $inpCarbs = $inpCarbs * $inpMod;
    $inpProt = $inpProt * $inpMod;
    $inpSug = $inpSug * $inpMod;

    $deletePressed = $_POST['delSel'];

    // sanitise the PHP input here

?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Henry James' Insert Macros Page</title>
        <meta charset="UTF-8" />

        <script>

            function findSize() {
                var heartSize = document.getElementById("heartImage").offsetHeight;
                var gapElement = document.getElementById("gap");
                var totalsize = heartSize * 1.75;
                gapElement.style.height = totalsize + "px";

                var browserSize = window.innerWidth;
                console.log("Browser size is " + browserSize);

                checkTotals();
            }

            function checkTotals() {
                var testString = "test-23";
                var short = testString.slice(0,4);
                console.log(short);

                var totalCalString = document.getElementById("totalCalsTD");
                var totalFatString = document.getElementById("totalFatTD");
                var totalCarbString = document.getElementById("totalCarbsTD");
                var totalProtString = document.getElementById("totalProtTD");
                var totalSugString = document.getElementById("totalSugTD");

                var calInt = parseInt(totalCalString.innerHTML);
                var fatInt = parseInt(totalFatString.innerHTML);
                var carbsInt = parseInt(totalCarbString.innerHTML);
                var protInt = parseInt(totalProtString.innerHTML);
                var sugInt = parseInt(totalSugString.innerHTML);

                if (calInt > 2000) {
                    totalCalString.parentElement.style.color = "red";
                }

                if (fatInt > 90) {
                    totalFatString.parentElement.style.color = "red";
                }

                if (carbsInt > 125) {
                    totalCarbString.parentElement.style.color = "red";
                }

                if (protInt > 200) {
                    totalProtString.parentElement.style.color = "red";
                }

                if (sugInt > 60) {
                    totalSugString.parentElement.style.color = "red";
                }
            }

        </script>

        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: Calibri, Arial;
            }

            body {
                background: #181818;
                overflow-x: hidden;
                overflow-y: scroll;
            }

            #navBar {
                position: fixed;
                width: 100%;
                padding: 15px;
            }

            #navBar a {
                margin-left: 3%;
                padding: 1%;
                margin-right: 3%;
                font-weight: bold;
                letter-spacing: 1px;
                text-decoration: none;
        	    transition: 1s;
                -webkit-transition: 1s;
                font-size: 125%;
            }

            #navBar a:hover {
                color: orange;
            }

            #mainDiv {
                width: 80%;
                border: 10px solid black;
                margin-left: 10%;
                background: #808080;
            }

            #mainDiv h1 {
                font-size: 350%;
                margin-left: 10%;
            }

            #currMacTable {
                border: 1px solid black;
                border-collapse: collapse;
                width: 80%;
                margin-left: 10%;
                background: #BAC3C2;
            }

            #currMacTable th {
                border: 1px solid black;
                padding: 2%;
                padding-top: 3.5%;
                padding-bottom: 3.5%;
                font-size: 150%;
                width: 20%;
            }

            #currMacTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 1%;
                width: 20%;
            }
            
            #newMacTable {
                border: 1px solid black;
                border-collapse: collapse;
                width: 80%;
                margin-left: 10%;
                background: #BAC3C2;
            }

            #newMacTable th {
                border: 1px solid black;
                padding: 2%;
                font-size: 150%;
                width: 20%;
            }

            #newMacTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 1%;
                width: 20%;
            }

            #modifierTable {
                border: 1px solid black;
                border-collapse: collapse;
                width: 20%;
                margin-left: 10%;
                background: #BAC3C2;
            }

            #modifierTable th {
                border: 1px solid black;
                padding: 2%;
                font-size: 150%;
                width: 20%;
            }

            #modifierTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 1%;
                width: 20%;
                padding-top: 5%;
                padding-bottom: 5%;
            }

            .newMacInp {
                width: 90%;
                padding: 1%;
            }

            #newMacSub {
                margin-left: 10%;
                padding: 1%;
                width: 80%;
                border: 1px solid black;
                font-size: 125%;
            }

            #deleteSelect {
                width: 80%;
                margin-left: 10%;
                padding: 3%;
                font-size: 125%;
                text-align: center;
            }

            #emptyTableButton {
                margin-left: 10%;
                padding: 1%;
                border: 1px solid black;
                width: 80%;
                font-size: 125%;
            }

            #totalRow td {
                background: #BAC3C2;
                font-weight: bold;
                border-bottom: none;
                padding-bottom: 0px;
            }

            #percRow td {
                border-top: none;
                font-size: 60%;
                background: #BAC3C2;
                padding-top: 0px;
            }
            
            footer {
                background: #181818;
                color: grey;
                text-align: center;
            }

            footer p a {
                text-decoration: none;
                color: grey;
            }

            #macroLink {
                margin-left: 10%;
                text-align: center;
                background:  #BAC3C2;
                border: 1px solid black;
                padding: 2%;
                width: 80%;
                text-decoration: none;
                padding-left: 5%;
                padding-right: 5%;
                color: black;
        	    transition: 0.5s;
                -webkit-transition: 0.5s;
            }

            #macroLink:hover {
                background: #CDD8D7;
            }

            #mainDiv h2 {
                    margin-left: 10%;
            }

            .darkBack {
                background: #181818;
            }

            .whiteBack {
                background: white;
            }

            .darkBack * {
                color: white;
            }

            .whiteBack * {
                color: #181818;
            }

            @media only screen and (max-width: 640px) {

                .transition {
                    display: none;
                }

                #hobLink {
                    display: none;
                }

                #navTextDiv a {
                    margin-left: 3%;
                    padding: 1%;
                    margin-right: 3%;
                    font-size: 100%;
                }
                
                #navDiv {
                    height: 100px;
                }

                #gap {
                    display: none;
                }

                #smallGap {
                    display: block;
                }

                #mobileGap {
                    width: 80%;
                    display: block;
                }

                #mainDiv h1 {
                    font-size: 200%;
                    margin-left: 10%;
                }

                #currMacTable th {
                    font-size: 55%;
                }

                #currMacTable td {
                    font-size: 55%;
                }

                #newMacTable th {
                    font-size: 55%;
                }

                #newMacTable td {
                    font-size: 55%
                }

                #modifierTable th {
                    font-size: 55%;
                }

                #modifierTable td {
                    font-size: 55%
                }

                #percRow td {
                    font-size: 45%;
            }

            }

        </style>

        <script>

            function emptyInput(obj) {
                obj.value='';
            }

        </script>
    </head>

    <body onload="findSize()" onresize="findSize()">


        <div>
           
            <div class="darkBack" id="navBar">
                <a href="#mainDiv">Insert Macros</a>
            </div>

            <br>

            <?php
                /* Connecting to the database */
                $servername = "sql204.epizy.com";
                $username = "epiz_24116330";
                $password = "5zz4K0ryfeqg8h";
                $dbname = "epiz_24116330_main_database";

                try {
                    $handler = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    /* echo "Connected successfully"; */
                }
                catch(PDOException $e)
                {
                    /* echo "Connection failed: " . $e->getMessage(); */
                }
            ?>

            <?php

                $allMacrosQuery = $handler -> prepare (
                    "SELECT * FROM daily_macros;"
                );

                if (!($inpCals == "")) {
                    $insMacrosQuery = $handler -> prepare (
                        "INSERT INTO `daily_macros`(`calories`, `fat`, `carbs`, `protein`, `sugar`)
                        VALUES ($inpCals,$inpFat,$inpCarbs,$inpProt,$inpSug);"
                    );

                    $insMacrosQuery -> execute();
                }

                if ($deletePressed == "yes") {
                    $emptyTableQuery = $handler -> prepare (
                        "DELETE FROM `daily_macros`;"
                    );

                    $emptyTableQuery -> execute();
                }
                    
                $allMacrosQuery -> execute();

                
                
                /* 
            
            
                    <tr>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['weight_kg'] ?> kg</td>
                        <td><?php echo $row['waist_cm'] ?> cm</td>
                        <td><?php echo $row['bicep_cm'] ?> cm</td>
                        <td><?php echo $row['thigh_cm'] ?> cm</td>
                    </tr>
                */

            ?>
                
            <div id="mainDiv">
                <br><br>
                <h1>Insert Daily Macros</h1>
                <br><br>
                <h2>Current Macros</h2>

                <table id="currMacTable">
                    <tr>
                        <th>Calories</th>
                        <th>Fat</th>
                        <th>Carbs</th>
                        <th>Protein</th>
                        <th>Sugar</th>
                    </tr>

                    <?php

                while ($row = $allMacrosQuery -> fetch()) {
                    
            
            ?>
            
            
                    <tr>
                        <td><?php echo $row['calories'] ?></td>
                        <td><?php echo $row['fat'] ?> g</td>
                        <td><?php echo $row['carbs'] ?> g</td>
                        <td><?php echo $row['protein'] ?> g</td>
                        <td><?php echo $row['sugar'] ?> g</td>
                    </tr>

            <?php 
        
                $totalCals = $totalCals + $row['calories'];
                $totalFat = $totalFat + $row['fat'];
                $totalCarbs = $totalCarbs + $row['carbs'];
                $totalProt= $totalProt + $row['protein'];
                $totalSug = $totalSug + $row['sugar'];

                }
            ?>
                
                <tr id="totalRow">
                    <td><span id="totalCalsTD"><?php echo $totalCals ?></span></td>
                    <td><span id="totalFatTD"><?php echo $totalFat ?></span> g</td>
                    <td><span id="totalCarbsTD"><?php echo $totalCarbs ?></span> g</td>
                    <td><span id="totalProtTD"><?php echo $totalProt ?></span> g</td>
                    <td><span id="totalSugTD"><?php echo $totalSug ?></span> g</td>
                </tr>  

                <?php

                    $percentCals = $totalCals / 20;
                    $percentFat = ($totalFat / 90) * 100;
                    $percentCarbs = ($totalCarbs / 125) * 100;
                    $percentProt = ($totalProt / 200) * 100;
                    $percentSug = ($totalSug / 60) * 100;

                ?>

                <tr id="percRow">
                    <td><?php echo round($percentCals) ?>%</td>
                    <td><?php echo round($percentFat) ?>%</td>
                    <td><?php echo round($percentCarbs) ?>%</td>
                    <td><?php echo round($percentProt) ?>%</td>
                    <td><?php echo round($percentSug) ?>%</td>
                </tr>

                </table>
                <br><br>

                <br><br>
                <h2>Insert Macros</h2>
                <br>
                
                <form method="POST" action="addToDailyMacros.php">

                <table id="modifierTable">
                        <tr>
                            <th>Modifier</th>
                        </tr>
                        <tr>
                            <td><input style="text-align: center;" class="newMacInp" onfocus="emptyInput(this);" type="text" name="multiplier" value="1" autocomplete="off" /></td>
                        </tr>
                </table>

                <br>

                <table id="newMacTable">
                    <tr>
                        <th>Calories</th>
                        <th>Fat</th>
                        <th>Carbs</th>
                        <th>Protein</th>
                        <th>Sugar</th>
                    </tr>
                        <tr>
                            <td><input class="newMacInp" type="text" name="newCals" autocomplete="off" /></td>
                            <td><input class="newMacInp" type="text" name="newFat" autocomplete="off" /></td>
                            <td><input class="newMacInp" type="text" name="newCarbs" autocomplete="off" /></td>
                            <td><input class="newMacInp" type="text" name="newProt" autocomplete="off" /></td>
                            <td><input class="newMacInp" type="text" name="newSug" autocomplete="off" /></td>
                        </tr>
                </table>
                        
                        <input type="submit" id="newMacSub" value="Add Macros" />
                    </form>
                <br><br>
                <br><br>

                <br><br>
                <a id="macroLink" href="addToAllMacros.php">Add Macros to Final Table</a>
                <br><br>
                <br><br>

                <br><br>
                <h2>Empty Table</h2>
                <br>
                <form method="POST" action="addToDailyMacros.php">
                    <select name="delSel" id="deleteSelect">
                        <option value="no">Keep Table Data</option>
                        <option value="yes">Empty the Table</option>
                    </select>
                    <br>
                    <input id="emptyTableButton" type="submit" name="deleteButton" value="Go" />
                </form>
                <br><br><br><br>
            </div>
			
            <br><br><br><br>

        </div>

        <footer>
            <br>
            <p>This website and all code was developed by Henry James</p>
            <p>To contact me, send a message to my social media (linked above) or email 
                <a href="mailto:hj238@kent.ac.uk">hj238@kent.ac.uk</a>
            </p>
            <br>
        </footer>

    </body>
</html>