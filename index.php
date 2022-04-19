<?php

   include_once('config.php');
   include_once('action.php');

?>

<!DOCTYPE HTML>

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Simple Landing Page</title>
    <link rel="icon" type="image/x-icon" href="img/slp-logo-icon.svg">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 
</head>

<body>

    <header>
        <div class="container align-center">
            <div>
                <a href="#"><img src="img/slp-logo-icon.svg" width="150" class="margin-please"></a>
            </div>
        </div>
    </header>

    <section id="top-banner"> <!-- TOP BANNER -->
        <div class="container">
            <div class="row">
                <div class="col relative" > <!-- A COL -->
                    <div class="col-align-middle">
                        <h2 class="text-white">
                            A simple page designed to sell!
                        </h2>
                        <br>
                        <ul class="">
                            <li class="list-check">Simple and efficient</li>
                            <li class="list-check">Modern</li>
                            <li class="list-check">More performance</li>
                            <li class="list-check">Client connection</li>
                            <li class="list-check">Lead capture</li>
                        </ul>
                    </div>
                </div>
                <div class="col" > <!-- B COL -->
                    <div class="">
                        <form action="action.php" method="POST" id="form-lead" class="form-container"> <!-- FORM -->
                            <h3>
                                Enter your details<br>to speak with a consultant:
                            </h3>
                            <fieldset>
                                <label for="nome" id="label-inline">Name:</label>
                                <input type="text" name="nome" id="nome">
                                <br>
                                <label for="email" id="label-inline">Email:</label>
                                <input type="email" name="email" id="email">
                                <br>
                                <label for="cidade" id="label-inline">City:</label>
                                <input type="text" name="cidade" id="cidade">
                                <br>
                                <label for="telephone" id="label-inline">Telephone:</label>
                                <input type="tel" name="telephone" id="telephone">
                                <br><br>
                                <h5>What is your company's niche?</h5>
                                <select name="type" id="type">
                                    <option value="#"></option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                    <option value="Type C">Type C</option>
                                </select>
                                <br><br>
                                <div class="full-width">
                                    <input type="submit" name="submit" id="submit" value="Speak With A Consultant" class="uppercase">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="outgrid-box-container"> <!-- LOREM IPSUM -->
        <div class="container">
            <div class="row">
                <div class="col outgrid-box d-inline-block"> <!-- A COL -->
                    <img src="img/mockup.png" class="full-width">
                </div>
                <div class="col"> <!-- B COL -->
                    <div>
                        <h2>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit!
                        </h2>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>