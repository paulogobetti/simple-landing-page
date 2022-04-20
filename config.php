<?php

    $dbHost = 'Localhost';
    $dbUsername = 'webmaster';
    $dbPassword = '';
    $dbName = 'simplelandingpage';

    $connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*
    if($connection->connect_errno)
        {
            echo "Erro";
        }

    else
        {
        echo "Ok";
        }
    */
