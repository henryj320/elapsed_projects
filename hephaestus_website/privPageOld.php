<?php

    $prevLoginCookie = $_COOKIE['loginCookie'];
    $prevPassCookie = $_COOKIE['passCookie'];

    /* Checking the Password */
    $corrUs = "3aefd6ae9fb3089e11d7e59be63c13f6c9466557";
    $corrPs = "a6931d9929b18bc00e82a11d380d4025c33c9e91";
    $username = $_POST['user'];
    $psswrd = $_POST['pass'];
    $hashUser = trim(sha1($username."jgfdgfdg"));
    $hashPsswrd = trim(sha1($psswrd."agd338sjv"));

    // checks whether the machine has provided the password recently
    if (isset($prevLoginCookie)) {
    } else {

        if (($corrUs == $hashUser)&&($corrPs == $hashPsswrd)) {
        } else {
            header('Location: http://henryjames20.epizy.com/badLogin.html');
            die();
        }

        $cookieName = "loginCookie";
        $cookieValue = $_POST['user'];
        $cookieTime = time() + 864000; //makes it last 10 days
        setcookie($cookieName, $cookieValue, $cookieTime, "/");
        setcookie("passCookie", $_POST['pass'], time() + 3600, "/");
    
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Henry James' Private Page</title>
        <meta charset="UTF-8" />

        <script>

            function findSize() {
                var heartSize = document.getElementById("heartImage").offsetHeight;
                var gapElement = document.getElementById("gap");
                var totalsize = heartSize * 1.75;
                var mobileTotalSize = heartSize * 2.25;
                gapElement.style.height = totalsize + "px";

                var browserSize = window.innerWidth;
                console.log("Browser size is " + browserSize);

                alertLogout();

            }

            // function alertLogout() {
            //     setTimeout (
            //         function() {
            //             alert("Your cookie has been deleted. You will need to log back in.");
            //         }
            //     , 3600000)
            // }

        </script>

        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: Calibri, Arial;
            }

            body {
                background: #BAC3C2;
            }

            #navDiv {
                width: 100%;
                height: 150px;
                background: #BAC3C2 ;
                position: fixed;
            }

            #navTextDiv {
                background: #181818;
                color: white;
                padding: 20px;
                position: relative;
                bottom: 5px;
            }

            #navTextDiv a {
                margin-left: 3%;
                padding: 1%;
                margin-right: 3%;
                font-weight: bold;
                font-size: 150%;
                text-decoration: none;
                color: white;
        	    transition: 1s;
                -webkit-transition: 1s;
            }

            #loggedInAs {
                float: right;
                margin-right: 1%;
                padding: 2%;
                background: #181818;
                position: relative;
                bottom: 12.5%;
                left: 0%;
                text-decoration: none;
                color: white;
                font-size: 150%;
                font-weight: bold;
                border-radius: 15px;
            }

            .separatorDivs {
                width: 80%;
                border: 10px solid black;
                margin-left: 10%;
                background: #9FA5A4;
            }

            .separatorDivs h1 {
                font-size: 350%;
                margin-left: 10%;
            }

            .separatorDivs h2 {
                margin-left: 10%;
            }

            #fitOutTable {
                border: 1px solid black;
                border-collapse: collapse;
                width: 80%;
                margin-left: 10%;
                background: #BAC3C2;
            }

            #fitOutTable th {
                border: 1px solid black;
                padding: 2%;
                font-size: 150%;
                width: 20%;
            }

            #fitOutTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 1%;
                width: 20%;
            }

            #fitnessTopTable {
                border: 1px solid black;
                border-collapse: collapse;
                width: 80%;
                margin-left: 10%;
            }

            #fitnessTopTable th {
                border: 1px solid black;
                padding: 2%;
                font-size: 150%;
                background: #BAC3C2;
                width: 20%
            }

            #fitnessTopTable td {
                text-align: center;
                background: white;
                border: 1px solid black;
                background: white;
                padding: 1%;
                width: 20%;
                font-weight: bold;
            }

            .inputSpan {
                padding: 1%;
                margin-left: 10%;
                display: inline-block;
                width: 25%;
                font-weight: bold;
            }

            #fitnessDiv input {
                width: 45%;
            }

            #insMeasForm {
                border: 1px solid black;
                margin-left: 10%;
                width: 40%;
                background: #BAC3C2;
            }

            #submitInpMeas {
                margin-left: 10%;
                padding: 1%;
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
            
            footer {
                background: #181818;
                color: grey;
                text-align: center;
            }

            footer p a {
                text-decoration: none;
                color: grey;
            }

            #gap {
                width: 80%;   
            }

            #smallGap {
                    display: none;
            }

            #mobileGap {
                display: none;
            }

            #toDoListTable {
                margin-left: 10%;
                width: 80%;
                border-collapse: collapse;
                border: 1px solid black;
                background: white;
            }

            #toDoListTable th {
                border: 1px solid black;
                background: #BAC3C2;
                padding: 2%;
                font-size: 150%;
            }

            #toDoListTable td {
                border: 1px solid black;
            }

            .tid {
                width: 20%;
                text-align: center;
            }

            .tasks {
                padding: 1%;
            }

            #deleteToDoForm {
                margin-left: 10%;
            }

            #deleteToDoForm select{
                width: 50%;
                padding: 0.5%;
            }

            #deleteSubmit {
                padding: 0.5%;
            }

            #newTaskToAdd {
                margin-left: 10%;
                border: 1px solid black;
                width: 79%;
                padding-top: 1%;
                padding-bottom: 1%;
                padding-left: 1%;
            }

            #submitNewTask {
                width: 80%;
                margin-left: 10%;
                padding: 1%;
                border: 1px solid black;
            }

            @media only screen and (max-width: 640px) {

                #navTextDiv a {
                    margin-left: 3%;
                    padding: 1%;
                    margin-right: 3%;
                    font-size: 100%;
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

                .separatorDivs h1 {
                    font-size: 200%;
                    margin-left: 10%;
                }

                #fitOutTable th {
                    padding: 2%;
                    font-size: 75%;
                    width: 20%;
                }

                #fitOutTable td {
                    font-size: 75%;
                }

                #fitnessTopTable th {
                    font-size: 75%;
                }

                #fitnessTopTable td {
                    font-size: 75%;
                }

                #toDoListTable th {
                    font-size: 75%;
                }

                #toDoListTable td {
                    font-size: 75%;
                }

                .inputSpan {
                    padding: 1%;
                    margin-left: 5%;
                    display: inline-block;
                    width: 25%;
                    font-weight: bold;
                }

                #fitnessDiv input {
                    margin-left: 5%;
                    width: 80%;
                }

                #insMeasForm {
                    border: 1px solid black;
                    margin-left: 10%;
                    width: 80%;
                    background: #BAC3C2;
                }

                #submitInpMeas {
                    margin-left: 10%;
                    padding: 1%;
                }

                #navDiv {
                    height: 100px;
                }

                #loggedInAs {
					bottom: 22%;
					font-size: 125%;
                    padding: 3%;
				}

            }

        </style>
    </head>

    <body onload="findSize()" onresize="findSize()">

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

        <div>
            <div id="navDiv">
                <img id="heartImage" style="width: 100%;" src="Images/NavImageTiny.jpg">
                <div id="navTextDiv">
                    <a id="homeLink" href="index.html">Home Page</a>
                    <a style="margin: 0 auto; color: orange;" id="hobLink" href="#hobLinkLoc">Private Section</a>
                </div>
                
                <?php if (isset($_COOKIE['loginCookie'])) { ?>
                    <a id="loggedInAs" href="login.html" target="_self">Logged in as <?php echo $_COOKIE['loginCookie'] ?></a>
                <?php } ?>
            </div>

            <div id="gap">
                <br><br>
            </div>            

            <div id="mobileGap">
                <br><br>
            </div>
            
            <div id="smallGap" class="mobile">
                <br><br><br><br><br><br><br>
            </div>

            <br>

            <div id="toDoListDiv" class="separatorDivs">
                <br><br><br>
                <h1>To Do List</h1>
                <br><br>
                <h2>Current List</h2>
                <br>

                <table id="toDoListTable">
                    <tr>
                        <th class="tid">#</th>
                        <th>Task</th>
                    </tr>

                <?php

                    $viewToDoListQuery = $handler -> prepare (
                        "SELECT * FROM to_do_list ORDER BY task;"
                    );

                    $viewToDoListQuery -> execute();

                    $toDoRow = $viewToDoListQuery -> fetchAll();
                    foreach ($toDoRow as $value) {
                ?>
            
            
                    <tr>
                        <td class="tid"><?php echo $value['tid'] ?></td>
                        <td class="tasks"><?php echo $value['task'] ?></td>
                    </tr>

                    
                <?php } ?>

                </table>
                <br><br><br>

                <h2>Add an Item</h2>

                <br>

                <form id="addTaskForm" method="POST" action="addToList.php">
                        <input id="newTaskToAdd" type="text" name="newTask" autocomplete="off" />
                        <br><br>
                        <input type="submit" id="submitNewTask" value="Add Task to List" />
                </form>

                <br><br><br>

                <h2>Empty List</h2>
                <br>

                <form id="deleteToDoForm" action="addToList.php" method="POST">
                    
                    <p>Delete Row:</p>
                    <select name="rowToDelete">
                        <option value="noRowSelected">Select a row</option>

                <?php foreach ($toDoRow as $value) { ?>
                        <option value="<?php echo $value['tid'] ?>"><?php echo $value['tid'] ?></option>                
                <?php } ?>
                    </select>
                    <input id="deleteSubmit" type="submit" name="deleteSubmit" value="Go" />
                </form>


                <br><br>

            </div>


            <?php

                $fitnessQuery = $handler -> prepare (
                    "SELECT `fitness_measurements`.* FROM fitness_measurements
                    ORDER BY date DESC;"
                );

                $fitnessQuery -> execute();
				
            ?>
				
			<br><br><br><br>

            <div id="fitnessDiv" class="separatorDivs">
                <br><br>
                <h1>Fitness Measurements</h1>
                <br><br><br>
                <a id="macroLink" href="addToDailyMacros.php">Input Macros</a>
                <br><br><br><br>
                <h2>Current Measurements</h2>
                <br>
                <table id="fitOutTable">
                    <tr>
                        <th>Date</th>
                        <th>Weight</th>
                        <th>Waist</th>
                        <th>Arm</th>
                        <th>Thighs</th>
                    </tr>

                <?php

                $lowestWeight = 100;
                $lowestWaist = 100;
                $highestArm = 10;
                $lowestThigh = 100;

                while ($row = $fitnessQuery -> fetch()) {
                    /* echo $row['mid'];
                    echo $row['date'];
                    echo $row['weight_kg'];
                    echo $row['waist_cm'];
                    echo $row['bicep_cm'];
                    echo $row['thigh_cm']; */

                    /* Comparing the Lowest weights */
                    if ($row['weight_kg'] < $lowestWeight) {
                        $lowestWeight = $row['weight_kg'];
                    }
                    if ($row['waist_cm'] < $lowestWaist) {
                        $lowestWaist = $row['waist_cm'];
                    }
                    if ($row['bicep_cm'] > $highestArm) {
                        $highestArm = $row['bicep_cm'];
                    }
                    if ($row['thigh_cm'] < $lowestThigh) {
                        $lowestThigh = $row['thigh_cm'];
                    }
            
            ?>
            
            
                    <tr>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['weight_kg'] ?> kg</td>
                        <td><?php echo $row['waist_cm'] ?> cm</td>
                        <td><?php echo $row['bicep_cm'] ?> cm</td>
                        <td><?php echo $row['thigh_cm'] ?> cm</td>
                    </tr>

            <?php } ?>

                </table>
                
                <br>

                <table id="fitnessTopTable">
                    <tr>
                        <th>Best</th>
                        <td><?php echo $lowestWeight ?> kg</td>
                        <td><?php echo $lowestWaist ?> cm</td>
                        <td><?php echo $highestArm ?> cm</td>
                        <td><?php echo $lowestThigh ?> cm</td>
                    </tr>
                </table>

                <br><br><br>
                
                <h2>Insert Measurements</h2>
                <br>
                <form id="insMeasForm" method="POST" action="addToMeasurements.php">
                    <br>
                    <span class="inputSpan">Date:</span><input type="date" name="measDate" /><br><br>
                    <span class="inputSpan">Weight:</span><input type="number" name="measWei" step="any" /><span> kg</span>
                    <br><br>
                    <span class="inputSpan">Waist:</span><input type="number" name="measWais" /><span> cm</span>
                    <br><br>
                    <span class="inputSpan">Arms:</span><input type="number" name="measArms" /><span> cm</span>
                    <br><br>
                    <span class="inputSpan">Thighs:</span><input type="number" name="measThig" /><span> cm</span>
                    <br><br>
                    <input type="submit" id="submitInpMeas" value="Insert Data" />
                    <br><br>
                </form>
                <br><br>
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