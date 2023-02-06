<?php

    $inpCals = $_POST['newCals'];
    $inpFat = $_POST['newFat'];
    $inpCarbs = $_POST['newCarbs'];
    $inpProt = $_POST['newProt'];
    $inpSug = $_POST['newSug'];

?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Henry James' All Macros Page</title>
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

            #summaryTable {
                border: 1px solid black;
                border-collapse: collapse;
                width: 80%;
                margin-left: 10%;
                background: #BAC3C2;
            }

            #summaryTable th {
                border: 1px solid black;
                padding: 2%;
                font-size: 80%;
                width: 16.6%;
            }

            #summaryTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 1%;
                width: 16.6%;
                font-size: 80%;
            }

            #totalRecordTable {
                border: 1px solid black;
                border: 1px solid black;
                border-collapse: collapse;
                width: 20%;
                margin-left: 10%;
                background: #BAC3C2;
            }

            #totalRecordTable th {
                border: 1px solid black;
                padding: 4%;
                font-size: 80%;
            }

            #totalRecordTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 4%;
                font-size: 80%;
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
                background: white;
                font-weight: bold;
            }

            #avgRow td {
                background: #BAC3C2;
                font-weight: bold;
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

            #averageRows td {
                font-weight: bold;
                background: #BAC3C2;
            }

            #bestDayDiv {
                border: 1px solid black;
                background: #BAC3C2;
                width: 30%;
                margin-left: 10%;
                padding-left: 5%;
            }

            #bestDayDiv h2 {
                margin-left: 0%;
                padding-left: 0%;
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

                #hobLink {
                    display: none;
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

                #summaryTable th {
                    font-size: 40%;
                }

                #summaryTable td {
                    font-size: 40%
                }

                #totalRecordTable th {
                    font-size: 40%;
                }

                #totalRecordTable td {
                    font-size: 40%;
                }

                #mainDiv h1 {
                    font-size: 200%;
                    margin-left: 10%;
                }

                #bestDayDiv {
                    width: 75%;
                }

            }

        </style>

        <script>

            function grabTotal(obj) {

                namePrefix = "new";
                objName = obj.name;
                cals = namePrefix + "Cals";
                obj.style = "Text-align: center;";

                if (objName == namePrefix + "Cals") {
                    dailyCals = totalCalsTD.innerHTML;
                    obj.value = dailyCals;

                } else if (objName == namePrefix + "Fat") {
                    dailyFat = totalFatTD.innerHTML;
                    obj.value = dailyFat;

                } else if (objName == namePrefix + "Carbs") {
                    dailyCarbs = totalCarbsTD.innerHTML;
                    obj.value = dailyCarbs;

                } else if (objName == namePrefix + "Prot") {
                    dailyProt = totalProtTD.innerHTML;
                    obj.value = dailyProt;

                } else if (objName == namePrefix + "Sug") {
                    dailySug = totalSugTD.innerHTML;
                    obj.value = dailySug;

                }

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

                $bestCarbs = 10000;
                $highestProtein = 1;

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

                $noOfRowsQuery = $handler -> prepare (
                    "SELECT COUNT(mid) AS totalRows FROM all_macros;"
                );

                $noOfRowsQuery -> execute();

                
                $noOfRowsResult = $noOfRowsQuery -> fetchAll();

                foreach ($noOfRowsResult as $noOfRowsValue) {
                    $numberOfRows = $noOfRowsValue['totalRows'];
                }
                


                $allMacrosQuery = $handler -> prepare (
                    "SELECT * FROM daily_macros;"
                );

                

                if (!($inpCals == "")) {
                    $insMacrosQuery = $handler -> prepare (
                        "INSERT INTO `all_macros`(`calories`, `fat`, `carbs`, `protein`, `sugar`)
                        VALUES ($inpCals,$inpFat,$inpCarbs,$inpProt,$inpSug);"
                    );

                    $insMacrosQuery -> execute();
                }
                    
                $allMacrosQuery -> execute();

                $everyMacroQuery = $handler -> prepare (
                    "SELECT * FROM all_macros
                    ORDER BY mid DESC;"
                );

                $everyMacroQuery -> execute();

            ?>
                
            <div id="mainDiv">
                <br><br>
                <h1>Insert Macros</h1>
                <br><br>

                <h2>Today's Macros</h2>
                <br>
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
                </table>

                <table id="newMacTable">
                    <form method="POST" action="addToAllMacros.php">
                        <tr>
                            <td><input class="newMacInp" type="text" name="newCals" autocomplete="off" onfocus="grabTotal(this);" /></td>
                            <td><input class="newMacInp" type="text" name="newFat" autocomplete="off" onfocus="grabTotal(this);" /></td>
                            <td><input class="newMacInp" type="text" name="newCarbs" autocomplete="off" onfocus="grabTotal(this);" /></td>
                            <td><input class="newMacInp" type="text" name="newProt" autocomplete="off" onfocus="grabTotal(this);" /></td>
                            <td><input class="newMacInp" type="text" name="newSug" autocomplete="off" onfocus="grabTotal(this);" /></td>
                        </tr>
                </table>
                        
                        <input type="submit" id="newMacSub" value="Add Macros" />
                    </form>
                <br><br>
                <br><br><br>
                <a id="macroLink" href="addToDailyMacros.php">Back to Insert Macros</a>
                <br><br><br>
                <br><br>
                <h2>All Macros</h2>
                <br>

                <table id="currMacTable">
                    <tr>
                        <th>Calories</th>
                        <th>Fat</th>
                        <th>Carbs</th>
                        <th>Protein</th>
                        <th>Sugar</th>
                    </tr>

                    <?php

                $i = 0;                

                while (($allRows = $everyMacroQuery -> fetch()) AND $i < 20) {
                    $i = $i + 1;
            
            ?>
            
            
                    <tr>
                        <td><?php echo $allRows['calories'] ?></td>
                        <td><?php echo $allRows['fat'] ?> g</td>
                        <td><?php echo $allRows['carbs'] ?> g</td>
                        <td><?php echo $allRows['protein'] ?> g</td>
                        <td><?php echo $allRows['sugar'] ?> g</td>
                    </tr>
                    

            <?php 
                    $totalCals = $totalCals + $allRows['calories'];
                    $totalFat = $totalFat + $allRows['fat'];
                    $totalCarbs = $totalCarbs + $allRows['carbs'];
                    $totalProt= $totalProt + $allRows['protein'];
                    $totalSug = $totalSug + $allRows['sugar'];

                    if ($allRows['carbs'] < $bestCarbs) {
                        $bestCals = $allRows['calories'];
                        $bestFat = $allRows['fat'];
                        $bestCarbs = $allRows['carbs'];
                        $bestProt = $allRows['protein'];
                        $bestSug = $allRows['sugar'];
                    }

                    if ($allRows['protein'] > $highestProtein) {
                        $highProt_Cals = $allRows['calories'];
                        $highProt_Fat = $allRows['fat'];
                        $highProt_Carbs = $allRows['carbs'];
                        $highestProtein = $allRows['protein'];
                        $highProt_Sug = $allRows['sugar'];
                    }
                    

                }

                // use $avgCals = $totalCals / $numberOfRows;
                // if showing all rows
                $avgCals = $totalCals / $i;
                $avgFat = $totalFat / $i;
                $avgCarbs = $totalCarbs / $i;
                $avgProt = $totalProt / $i;
                $avgSug = $totalSug / $i;

            ?>

                <tr id="averageRows">
                    <td><?php echo round($avgCals) ?></td>
                    <td><?php echo round($avgFat, 1) ?> g</td>
                    <td><?php echo round($avgCarbs, 1) ?> g</td>
                    <td><?php echo round($avgProt, 1) ?> g</td>
                    <td><?php echo round($avgSug, 1) ?> g</td>
                </tr>
                </table>
                <p style="text-align: center; font-size: 70%;">(This is the 20 most recent rows)</p>

                <br><br>
                <br><br>
                <h2>Summary</h2>
                <br>

                <table id="totalRecordTable">
                    <tr>
                        <th>Total Days Recorded</th>
                    </tr>
                    <tr>
                        <td><?php echo $numberOfRows ?></td>
                    </tr>
                </table>

                <br>
                <table id="summaryTable">
                    <tr>
                        <th></th>
                        <th>Calories</th>
                        <th>Fat</th>
                        <th>Carbs</th>
                        <th>Protein</th>
                        <th>Sugar</th>
                    </tr>
                    <tr>
                        <th>Average</th>
                        <td><?php echo round($avgCals) ?></td>
                        <td><?php echo round($avgFat, 1) ?> g</td>
                        <td><?php echo round($avgCarbs, 1) ?> g</td>
                        <td><?php echo round($avgProt, 1) ?> g</td>
                        <td><?php echo round($avgSug, 1) ?> g</td>
                    </tr>
                    <tr>
                        <th>Healthiest</th>
                        <td><?php echo $bestCals ?></td>
                        <td><?php echo $bestFat ?> g</td>
                        <td><?php echo $bestCarbs ?> g</td>
                        <td><?php echo $bestProt ?> g</td>
                        <td><?php echo $bestSug ?> g</td>
                    </tr>
                    <tr>
                        <th>Protein</th>
                        <td><?php echo $highProt_Cals ?></td>
                        <td><?php echo $highProt_Fat ?> g</td>
                        <td><?php echo $highProt_Carbs ?> g</td>
                        <td><?php echo $highestProtein ?> g</td>
                        <td><?php echo $highProt_Sug ?> g</td>
                    </tr>
                </table>

                <br><br><br>
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