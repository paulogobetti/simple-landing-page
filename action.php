<?php

if(isset($_POST['submit']))

{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $tel = $_POST['tel'];
    $type = $_POST['type'];

    $result = mysqli_query($connection, "INSERT INTO leads(name,email,city,tel,type) VALUES ('$name','$email','$city','$tel','$type')");

    $to = "paulogobetti@outlook.com.br";
    $subject = "New landing page lead: .$email";
    $body = "Name: ".$nome."\r\n".
            "Email: ".$email."\r\n".
            "City: ".$cidade."\r\n".
            "Telephone: ".$telefone."\r\n".
            "Type: ".$tipo;
    $header = "From:email@nxsagencia.com"."\r\n".
              "Reply-To:".$email."\e\n".
              "X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)) {

        echo "<script>alert('Message sent!');</script>";

    }

    else {

        echo "<script>alert('Oops! Something went wrong!');</script>";

    }

}
