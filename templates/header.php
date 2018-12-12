<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VeA Bibliotēka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="imp/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div id="navb" class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<a class="navbar-brand" href="#"><img id="vealogo" src="https://moodle.venta.lv/moodle/pluginfile.php/1/core_admin/logo/0x150/1538140603/logo-min.png"></a>
    -->
        <li id="navLi"><a href="index.php">SĀKUMS</a></li>
        <li id="navLi"><a href="gramatas.php">GRĀMATAS</a></li>
        <!--<li id="navLi"><a href="#">MULTIVIDE</a></li>-->
        <li id="navLi"><a href="top.php">TOP IZDEVUMI</span></a></li>
        <li id="navLi"><a href="adminPanel.php">ADMIN</span></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Izvērstā meklēšana</a></li>
      </ul>

      <form class="navbar-form navbar-right" action="/action_page.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" >
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </form> 


      
    </div>
  </div>
</nav>


<main>
