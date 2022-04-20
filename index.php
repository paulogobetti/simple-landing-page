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
        <div class="container">
            <div class="col-align-center">
                <a href="#"><img src="img/slp-logo-icon.svg" width="150" class="margin-please"></a>
            </div>
        </div>
    </header>

    <main>
        <section id="top-banner">
            <div class="flexb-container">
                <div class="flexb-wrap">
                    <div class="flex-col-5"> <!-- A SIDE -->
                        <div class="col-align-middle"> <!-- LIST -->
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
                    <div class="flex-col-5">  <!-- B SIDE -->
                        <div class="col-align-center"> <!-- FORM -->
                            <form action="action.php" method="POST" id="form-lead" class="form-box">
                                <h3>
                                    Enter your details<br>to speak with a consultant:
                                </h3>
                                <br>
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
                                    <label for="telephone" id="label-inline">Tel.:</label>
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

        <br><br><br><br><br><br>

        <section style="background: #f1f1f1;">
            <div class="flexb-container">
                <div class="flexb-wrap">
                    <div class="flex-col-5"> <!-- A COL -->
                        <div class="col-align-center">
                            <div class="outgrid-box">
                                <img src="img/slp-mockup.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-5"> <!-- B COL -->
                        <div class="col-align-middle">
                            <div class="">
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
            </div>
        </section>

        <br><br><br><br><br><br>

        <section style="background: #f1f1f1; padding-top: 70px;" class="">
            <div class="align-center uppercase">
                <h2>Where to start?</h2>
            </div>
            <div class="flexb-container" id="begin">
                <div class="flexb-wrap">
                    <div class="flex-col-3">
                        <div class="soft-card">
                            <img src="img/slp-step-1.png" class="outgrid-img align-img-center" width="120">
                            <p class="outgrid-txt-repair align-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="flex-col-3">
                        <div class="soft-card">
                            <img src="img/slp-step-2.png" class="outgrid-img align-img-center" width="120">
                            <p class="outgrid-txt-repair align-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="flex-col-3">
                        <div class="soft-card">
                            <img src="img/slp-step-3.png" class="outgrid-img align-img-center" width="120">
                            <p class="outgrid-txt-repair align-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div>
                        <button style="padding: 15px 25px;" class="uppercase">
                            Fale com um consultor
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <section class="padding-please"> <!-- LOREM 2 -->
            <div class="flexb-container">
                <div class="flexb-wrap">
                    <div class="flex-col-5">
                        <div class="col-align-middle">
                            <h2 class="align-right">
                                Benefícios de<br>ser Hiperador
                            </h2>
                        </div>
                    </div>
                    <div class="flex-col-5">
                        <p class="border-left">
                            Ofereça aos seus clientes um sistema completo e homologado em todo o país, a implantação e o suporte ficam por conta da Hiper.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <br><br>
        
    </main>

</body>

</html>
