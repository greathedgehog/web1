<?php   require_once('lib/print.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/style.css"
    <title>
      <?php       print_title();       ?>
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "lib/colors.js"></script>
  </head>
  <body>
    <input type="button" value="night" onclick="
      nightDayHandler(this);
    ">
    <h1>
      <a href="index.php">EOE, Economy-oriented English</a>
    </h1>
    <div class="grid">
      <div id="left_menu">
        <ol>
          <?php
          print_list();
          ?>
        </ol>
      </div>
