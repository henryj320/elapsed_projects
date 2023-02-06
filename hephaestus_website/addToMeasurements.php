<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Henry James' Private Page</title>
        <meta charset="UTF-8" />

        <script>

            function findSize() {
                var heartSize = document.getElementById("heartImage").offsetHeight;
                var gapElement = document.getElementById("gap");
                var totalsize = heartSize * 1.75;
                gapElement.style.height = totalsize + "px";

                var browserSize = window.innerWidth;
                console.log("Browser size is " + browserSize);
            }

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
                height: 175px;
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

            #mainDiv {
                border: 1px solid black;
                width: 60%;
                margin-left: 20%;
                text-align: center;
                font-size: 250%;
                background: #9FA5A4;
            }

            #returnHome {
                border: 1px solid black;
                text-decoration: none;
                padding: 2%;
                background: #BAC3C2;
                color: black;
        	    transition: 0.5s;
                -webkit-transition: 0.5s;
            }

            #returnHome:hover {
                background: #CDD8D7;
            }

            @media only screen and (max-width: 640px) {
                #mainDiv {
                    font-size: 100%;
                }
            }

        </style>
    </head>

    <body onload="findSize()" onresize="findSize()">

        <div>
            <div id="navDiv">
                <img id="heartImage" style="width: 100%;" src="Images/NavImageTiny.jpg">
                <div id="navTextDiv">
                    <a id="homeLink" href="index.html">Home Page</a>
                    <a style="margin: 0 auto; color: orange;" id="hobLink" href="#hobLinkLoc">Private Section</a>
                </div>
            </div>

            <div id="gap">
                <br><br>
            </div>

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

                $insDate = $_POST['measDate'];
                $insWeight = $_POST['measWei'];
                $insWaist = $_POST['measWais'];
                $insArms = $_POST['measArms'];
                $insThighs = $_POST['measThig'];

                $insertQuery = $handler -> prepare (
                    "INSERT INTO `epiz_24116330_main_database`.`fitness_measurements`
                    (`mid`, `date`, `weight_kg`, `waist_cm`, `bicep_cm`, `thigh_cm`)
                    VALUES (NULL, '$insDate', '$insWeight', '$insWaist', '$insArms', '$insThighs');"
                );

                $insertQuery -> execute();

            ?>

            
            <div id="mainDiv">
                <br><br>
                <h1>Your Data was Added</h1>
                <br>
                <a id="returnHome" href="login.html">Return to Private Section</a>
                <br><br><br>
            </div>

        </div>

    </body>
</html>