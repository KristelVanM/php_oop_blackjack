<?php 
require 'blackjack.php';
session_start();

//instantiate blackjack class twice, player & dealer, save these instances in a session
$player = new Blackjack();
$dealer = new Blackjack();

$_SESSION['$player'] = "player" ;
$_SESSION['$dealer'] = "dealer";





    

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Game is on</title>
</head>
<body>
<div class="container">
    <form class="form-row col-md-6 ">
        <input type="submit" name="Hit" id="Hit" value="Hit" class="btn btn-warning btn-lg"/><br />
        <input type="submit" name="Stand" id="Stand" value="Stand" class="btn btn-info btn-lg"/><br />
        <input type="submit" name="Surrender" id="Surrender" value="Surrender" class="btn btn-danger btn-lg"/><br />
        <input type="submit" name="KILL" id="KILL" value="KILL" class="btn btn-dark btn-lg"/><br />
    </form>
</div>
</body>
</html>
