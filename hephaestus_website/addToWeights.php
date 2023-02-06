<!DOCTYPE html>
<html>
    <head>
        <title>Henry James' Weights Page</title>
        <meta charset="UTF-8" />
        <style>
        
            * {
                margin: 0;
                padding: 0;
                font-family: Calibri, Arial;
                color: white;
            }

            body {
                background: #181818;
            }

            #mainDiv {
                border: 10px solid white;
                width: 80%;
                margin-left: 10%;
            }

            #mainDiv * {
                margin-left: 10%;
                width: 80%;
            }

            #previousTable {
                border: 1px solid white;
                border-collapse: collapse;
                background: #BAC3C2;
            }

            #previousTable th {
                color: black;
                border: 1px solid white;
                padding: 2%;
                width: 20%;
                font-size: 150%;
            }

            #previousTable td {
                text-align: center;
                color: black;
                border: 1px solid white;
                background: white;
                padding: 1%;
                width: 20%;
            }

            @media only screen and (max-width: 640px) {
                #previousTable th {
                    font-size: 55%;
                }

                #previousTable td {
                    font-size: 55%;
                }
            }
        </style>
    </head>

    <body>
        <br><br>

        <div id="mainDiv">
            <br>
            <h1>Weights Page</h1>
            <br><br>

            <h2>Previous Weights</h2>
            <table id="previousTable">
                <tr>
                    <th>Date</th>
                    <th>Exercise</th>
                    <th>Weight</th>
                    <th>Reps</th>
                    <th>Set</th>
                </tr>
                <tr>
                    <td>Hello</td>
                    <td>Hello</td>
                    <td>Hello</td>
                    <td>Hello</td>
                    <td>Hello</td>
                </tr>
            </table>
            <br>
        </div>

    </body>

</html>