<?php
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../home/html/home.html ");
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Know Your Rigths</title>
    <link rel="stylesheet" href="../css/pages.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <h2 class="logo"><a href="#">LawBot</a></h2>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </label>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="page-1.php">BNS</a></li>
          <li><a href="page-2.php">Articles</a></li>
          <li><a href="page-3.php">CrPC</a></li>
        </ul>
        <div >
          <form class="form-inline my-2 my-lg-0">
          <select id="select" style=" font-size: 12px; height:35px; width: 100px; margin:10px; border-radius:5px;" >
            <option value="section">section</option>
            <option value="section_title">Section-Title</option>
          </select>
          <input class="form-control mr-sm-2" id="text" type="search" placeholder="Search" aria-label="Search" style="font-size:13px;">
          <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" onclick="check()">Search</button>
        </form>
        </div>
      </nav>
    </header>
    <!--popup -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- popup Header -->
          <div class="modal-header">
            <h4 class="modal-title">Bharatiya Nyaya Sanhita </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- popup body -->
          <div class="modal-body">
            <h1>BNS</h1><br>
            <h2 id="chapter"></h2><br>
            <h3 id="title"></h3>
            <p id="description" style="font-size:15px"></p>
          </div>

          <!-- popup footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

        <!--POPUP End -->


    <section class="hero-section">
      <div class="hero" >
        <h2>BNS</h2>
        <p>India has one of the oldest legal systems in the world.
          Its law and jurisprudence stretches back into the centuries,
          forming a living tradition which has grown and evolved with the lives of its diverse people.
          India's commitment to law is created in the Constitution which constituted India into a Sovereign Democratic Republic,
          containing a federal system with a Parliamentary form of Government in the Union and the States,
          an independent judiciary, guaranteed Fundamental Rights and Directive Principles of State Policy containing objectives which though not enforceable in law are fundamental to the governance of the nation.
        </p>
        <div class="buttons">
          <a href="#" class="join">Learn More From Bot</a>
          <a href="aboutus.html" class="learn">Read More</1+`>
</div>
      </div>
      <div class="img">
        <img src="../home/images/laww.jpg" alt="hero image" />
      </div>
    </section>
  </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/search-3.js"></script>
</html>