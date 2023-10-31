<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['login'])) {
  header("Location:login.php");
  exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gen Works</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="light-mode.css">
</head>

<body>
  <nav>
    <div class="nav__content">
      <div class="logo"><a href="#">Gen Works.</a></div>
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check" />
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="about me.php">About Me</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="portofolio.php">Portofolio</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="customer.php">Admin</a></li>
        <li><button class="button-rgb" role="button" id="toggle">Change Theme</button></li>
      </ul>
    </div>
  </nav>
  <section class="section">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">HI</p>
        <h1 class="title">
          I'm <span>Genta<br />a</span> Video Editor & Graphic Designer
        </h1>
        <p class="description">
          welcome to the gen works website,
          here you can see my work as a video editor and
          also contact me to hire my services.
        </p>
        <div class="action__btns">
          <button class="about__me"><a href="about me.php">About Me</a></button>
          <button class="portfolio"><a href="portofolio.php">Portofolio</a></button>
        </div>
      </div>
      <div class="image">
        <img src="about me.JPG" alt="profile" />
      </div>
    </div>
  </section>

</body>

<script src="javascript.js"></script>

</html>