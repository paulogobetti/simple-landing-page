<?php

    $dbHost = 'Localhost';
    $dbUsername = 'webmaster';
    $dbPassword = '';
    $dbName = 'landingpagephp';

    $connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*
    if($conexao->connect_errno)
        {
            echo "Erro";
        }

    else
        {
        echo "Ok";
        }
    */
