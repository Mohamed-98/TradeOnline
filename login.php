<?php 
 session_start(); 
 include('header-login.php');
 include('config.php'); 
 ?>
    <div class="content">
      <div class="container">
        
          <!-- LOGIN-FORM-STARTS -->
          <!-- pic -->
          <div id="hide">
              <div class="form-area">
            <div class="brand-logo">
              <img
                onclick="backToHome()"
                src="img/logorefined.png"
                alt=""
                width="110px"
                height="110px"
              />
            </div>

            <!-- pic -->

            <div class="form-text">
              Welcome
            </div>
            <p
              style="font-family:Arial, Helvetica, sans-serif; margin-top: -20px;"
            >
              Enter your credentials to log in
            </p>
            <br />

            <!-- INPUTS-AREA -->
            <div class="form-inputs">
              <input
                type="email"
                name=""
                id=""
                placeholder="Email or Phone"
              /><br />
              <input
                type="password"
                name=""
                id=""
                placeholder="Password"
              /><br />
              <button>
                <a href="#" class="form-input-a">Log In</a>
              </button>
            </div>
            <!-- <div class="loader" id="loading-icon"></div> -->
            <p class="forget-pass"><a href="#"> Forgot your password? </a></p>

            <h3 class="new-acc" onclick="showForm()">
              Creat a New Account
            </h3>
          </div>

          </div>

          <!-- LOGIN-FORM-ENDS -->
          <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
          <!-- SIGNUP-FORM-STARTS -->
          
          <div id="show">
              <div class="form-area2">
            <div class="brand-logo2">
              <img
                onclick="backToHome()"
                src="img/logorefined.png"
                alt=""
                width="110px"
                height="110px"
              />
            </div>

            <!-- pic -->

            <div class="form-text">
              Sign Up
            </div>
            <p
              style="font-family:Arial, Helvetica, sans-serif; margin-top: -20px;"
            >
              Please, fill out this form!
            </p>
            

            <!-- INPUTS-AREA -->
            <div class="form-inputs">
              <div class="splitter">
                <input
                  type="text"
                  name=""
                  id=""
                  placeholder="First Name"
                />
                <input
                  type="text"
                  name=""
                  id=""
                  placeholder="Last Name"
                />
              </div>

              <div class="splitter">
                <input type="email" name="" id="" placeholder="Email" />
                <input
                  type="number"
                  name=""
                  id=""
                  placeholder="Phone Number.."
                />
              </div>

              <div class="splitter">
                <input
                  type="password"
                  name=""
                  id=""
                  placeholder="Password"
                />
                <!-- <p
                style="font-size: 13px; margin-left: -60px  ; font-family:Arial, Helvetica, sans-serif; margin-top: -20px;"
              >
                <i class="fas fa-exclamation"></i> Passwords must be at least 6
                characters.
              </p> -->
                <input
                  type="password"
                  name=""
                  id=""
                  placeholder="Re-Enter Password"
                /><br />
              </div>

              <button>
                <a href="#" class="form-input-a">Creat Account</a>
              </button>



              <!-- <div class="loader" id="loading-icon"></div> -->
              <p class="forget-pass">
                <a href="#" onclick="hideForm()">
                  Already have an account? Sign-In
                  <i class="fas fa-caret-right"></i>
                </a>
              </p>
            </div>

            </div>

            <!-- INPUTS-AREA -->
            <!-- SIGNUP-FORM-ENDS -->
          </div>
          <!-- BOTTOM-SIDE -->
        </div>
      </div>
      <div class="container bottom-section">
        <div class="bottom-text">
          <p>Get The App.</p>
        </div>
        <div class="platforms">
          <img src="img/apps.png" width="400px" alt="" />
        </div>
      </div>
    </div>
    <!-- BOTTOM-SIDE -->
<?php include('Footer-login.php'); ?>