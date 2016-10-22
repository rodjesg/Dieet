<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ob_start();
    session_start();
    $prepath = "";
    $homepath = "#";
    // database connection
    require $prepath."includes/dbconnect.php";

    header("Content-Type: text/html; charset=ISO-8859-1");

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dieet Overzicht | Rodney Geerlings</title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Personal -->
        <link href="assets/css/style.css" rel="stylesheet">



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="container container-fluid">
            <nav class="navbar navbar-inverse">
                <a href="index.html" class="btn btn-lg btn-default">Home</a>
                <a href="#" class="btn btn-lg btn-default">Card</a>
            </nav>
