<?php 
 session_start();
 include('header-index.php');
 include('config.php'); 
 ?>
    <!-- NAVBAR-AREA -->
    <nav>
      
        <div class="nav-wrapper">
          <div href="#" class="brand-logo">
            <img
              onclick="logoRedirect()"
              src="img/NEWLOGO2.png"
              height="66px"
              width="250px"
              style="margin-top: 0px; margin-left: 70px;"
            />
          </div>

          <a href="#" class="sidenav-trigger" data-target="mobile-nav">
            <i class="material-icons" style="color: black;">menu</i>
          </a>

          <ul class="right hide-on-med-and-down ">
            <li class="search-bar" ><input type="text" placeholder="SEARCH..." name=""></li>
            <li><a href="#">Contact</a></li>
            <li><a class="active" href="login.php">Log In</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
      <div
        href="#"
        class=" brand-logo"
      >
        <img
          style="margin: 10px 0 0 20px;"
          onclick="alert('lsa mfesh 7aga sh8ala')"
          src="img/NEWLOGO2.png"
          height="55px"
          width="230px"
        />
      </div>
      <li><a href="#">Home</a></li>
      <li><a href="#">Service</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="login.html">Log In</a></li>

    </ul>

    <!-- CONTENT-AREA -->
     <div class="content">
  <p class="head-content"> Welcome  <br> To <span class="tradeOnline">Trade Online</span></h1>
  <p class="slogan">Where buying & selling has never been easier</h4>
  <p class="lorem">
    Here in Trade Online we belive that buying & selling is for everyone and must be as simple as possible 
    . so we provide you a place where you find whatever you are looking for with less effort and more comfort . 
    plus our greatest pride point is the human part means having any issue will be our top priority to help you
    reach your goal in no time

  </p>


<div class="user-area">
  <div class="leftside">
    <p style="text-transform:capitalize;">Selling a product have never been easier , just click sell and we will take you to our Upload page 
      . plus we will guide you thoughout the whole process
    </p>
    <button onclick="sellClick()"> <a href="upload.html">Sell</a></button>
  </div>



  


  
  <div class="rightside">
    <p  style="text-transform:capitalize;">
      serching for somehing in particular  ?.  or just looking ?
        Please , take a look at out amazing collection . here in our Buy section you will find whatever you need and more
    </p>
    <button><a href="buyPath/home.html">Buy</a></button>
  </div>
</div> 
</div>

    <!-- Site footer -->
<?php include('Footer-index.php'); ?>