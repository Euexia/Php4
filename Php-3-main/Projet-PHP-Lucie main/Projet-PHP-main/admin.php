<?php
$username = "root";
$password = "root";
$database = 'tableur';
$servername = 'localhost:3306';
$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}
$sql = " SELECT * FROM info";
$result = $mysqli->query($sql);
$mysqli->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <script>
        src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js%22%3E"
    </script>
    <title>Admin Page</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width: 800px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            z-index: 3;
        }

        td {
            border: 1px solid black;
            text-align: center;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-weight: lighter;
            z-index: 0;
        }


        th {
            background-color: #55608f;
            border: 1px solid black;
            z-index: 2;
        }



        @keyframes waveAnimation {
            from {
                background-position-x: 0%;
            }

            to {
                background-position-x: 200%;
            }
        }

        @keyframes move-background {
            from {
                -webkit-transform: translate3d(0px, 0px, 0px);
            }

            to {
                -webkit-transform: translate3d(1000px, 0px, 0px);
            }
        }

        @-webkit-keyframes move-background {
            from {
                -webkit-transform: translate3d(0px, 0px, 0px);
            }

            to {
                -webkit-transform: translate3d(1000px, 0px, 0px);
            }
        }

        @-moz-keyframes move-background {
            from {
                -webkit-transform: translate3d(0px, 0px, 0px);
            }

            to {
                -webkit-transform: translate3d(1000px, 0px, 0px);
            }
        }

        @-webkit-keyframes move-background {
            from {
                -webkit-transform: translate3d(0px, 0px, 0px);
            }

            to {
                -webkit-transform: translate3d(1000px, 0px, 0px);
            }
        }

        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

            




        body {
            margin: 0;
        }


        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
            color: white;
        }

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            /*Fix for safari gap*/
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

/* ===========================================================================
                     Animation
============================================================================== */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }
    </style>

</head>

<body>



    <div class="header">
        <h1> <strong>Contact</strong> </h1>








        <div class="container">
            <!-- TABLE CONSTRUCTION -->
            <table class="table table-hover table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"> Nom </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Telephone </th>
                        <th scope="col"> Message </th>
                    </tr>
                </thead>

                <tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    // LOOP TILL END OF DATA
                    while ($rows = $result->FETCH_ASSOC()) {
                    ?>
                        <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['nom']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['telephone']; ?></td>
                        <td><?php echo $rows['message']; ?></td>
                </tr>
            <?php
                    }
            ?>
            </table>


















            <!--Content before waves-->
            <div class="inner-header flex">
                <!--Just the logo.. Don't mind this-->
                <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
                    <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                </svg>
            </div>

            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
        <!--Header ends-->











</body>





</html>