<?php 

require 'config/config.php';///link dyal mysqli
require 'includes/form_handlers/register_handler.php';///link dyal register
 
 ?>
<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <!-- responsiv -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/phone.css" />
    <!-- javascript -->
    <script src="js/index.js"></script>
    <!-- jquery -->
    <script src="assist/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body> 

  
          <?php  

        if(isset($_POST['register_button'])) {
          echo '
          <script>

          $(document).ready(function() {
            $("#first").hide();
            $("#second").show();
          });

          </script>

          ';
        }


        ?>



  <div class="maindiv">
    <header>
        <nav id="navbar-example2" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">MEET GAMERS</a>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link" href="#fat">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mdo">Game Library</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">more..</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#one">Rewards</a>
                      <a class="dropdown-item" href="#two">Articles</a>
                      <div role="separator" class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#three">about MG</a>
                    </div>
                  </li>
                </ul>
              </nav>

             <!-- had images mazal anbdloha andiro logo l2asasi -->
              <div class="container-fluid">
                  <img src="images/MG_header1.png" alt="" id="logo1" > 
                  
              </div>
                  <div class="icno">
                    <p>Sign Up, Search and get Matched <br> for FREE
                        Plus subscribe TODAY <br> for a FREE GAME</p><br><br>
              <i class="fab fa-meetup"></i>
               </div>

               <div class="login">
                  <p>Login to get started!</p> 
                  <form action="#" method="POST">
                    <input type="email" name="" id="" placeholder="Email" required>
                    <input type="password" name="" id="" placeholder="password" required><br>
                    <input type="submit" value="Log In" class="btn btn-outline-primary" required><br>
                    <a href="#">Forgot your password?</a>
                    </form>
               </div>
      
              <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                <h4 id="fat"> </h4> <!-- hna andir name libghit imchi liha  -->
                            <div class="Register">



                            <!-- register form -->


     <form action="" method="POST">


             <p>register to get started!</p>
             <?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
           <input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "<span style='color: #ed3228;'>Your Fast name must be between 2 and 25 characters</span><br>"; ?>
					
					
					<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo"<span style='color: #ed3228;'>Your last name must be between 2 and 25 characters</span><br>"; ?>

					<input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					<br>

					<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Email already in use<br>", $error_array)) echo"<span style='color: #ed3228;'>Email already in use</span><br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo"<span style='color: #ed3228;'>Invalid email format</span><br>";
					else if(in_array("Emails don't match<br>", $error_array)) echo"<span style='color: #ed3228;'>Emails don't match</span><br>"; ?>


					<input type="password" name="reg_password" placeholder="Password" required>
					<br>
					<input type="password" name="reg_password2" placeholder="Confirm Password" required>
					<br>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo"<span style='color: #ed3228;'>Your passwords do not match</span><br>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo"<span style='color: #ed3228;'>Your password can only contain english characters or numbers</span><br>";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo"<span style='color: #ed3228;'>Your password must be betwen 5 and 30 characters</span><br>";?>
               <select class="custom-select"  name="reg_Gender" required >
               <option selected value="0">Your Gender</option>
                <option value="male">male</option>
                  <option value="female">female</option>
                  </select><br>
                  <?php
                   if(in_array("wtfffffffff<br>",$error_array))echo "<span style='color: #ed3228;'>Fill your Gender!</span><br>"
               ?>                       
               <select  id="years" class="custom-select" required="true" date="true" name="reg_year"><option value="0" selected="selected">Year</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="67">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option></select><br>
               <?php
                   if(in_array("wtfffffffff<br>",$error_array))echo "<span style='color: #ed3228;'>You Should Fill This!</span><br>"
               ?>
              <select  id="months" class="custom-select" required="true" date="true" name="reg_month"><option value="0" selected="selected">Month</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="Sept">Sept</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select><br>
              <?php
                   if(in_array("wtfffffffff<br>",$error_array))echo "<span style='color: #ed3228;'>You Should Fill This!</span><br>"
               ?>
              <select required id="days" class="custom-select" required="true" date="true" name="reg_day"><option value="0" selected="selected">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><br>
              <?php
                   if(in_array("wtfffffffff<br>",$error_array))echo "<span style='color: #ed3228;'>You Should Fill This!</span><br>"
               ?>
              <input name="register_button" type="submit" value="Sign up" class="btn btn-primary btn-lg btn-block">
              
					<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>                     
  </form>
        </div>
                          
                
                <h4 id="two"> </h4>
                <p> </p>
              </div>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/1_WPSqwWvLCluggX9zFahxMQ.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/S4.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/S3.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><br><br><br><br><br><br><br><br><br>
            </header>
            <!-- db parti tanya f page  -->
           
                <SECtion class="part2"> 
                  <h1 id="one">The Mission</h1>
                           <DIV class="container" class="shadow-lg p-3 mb-5 bg-white rounded">
                                     <DIV class="row" id="bord1" >
                                                 <div class="col-sm-4" id="bord">
                                                           <h2 id="t1">Time For You</h2>
                                                           <i class="fas fa-trophy" id="t3"></i>
                                                           <p id="t2">Challenge other groups for the first place .. Win the best collection with valuable gifts!
                                                            Create a tournament or participate in the tournament
                                                            </p>
                                                 </div>
                                                 <div class="col-sm-4" id="bord">
                                                    <h2>Gamers For Gamers</h2>
                                                    <i class="fab fa-phoenix-framework"></i>
                                                    <p>We made MEET GAMERS because gamers wanted it. We take that responsibility very seriously. Gamers deserve happiness, the quest for love is always the longest, but the sweetest victory of all.</p>
                                                  </div>
                                                  <div class="col-sm-4" id="bord">
                                                      <h2>Subscriber Rewards</h2>
                                                      <i class="fas fa-gamepad"></i>
                                                      <p>Love is it’s own reward, but we wanted to give you something to do together.

                                                          Subscribers pick up some awesome rewards, as well as their dates.</p>
                                                   </div>
                                     </DIV>
                           </DIV><br><br><br><br><br><br><br>
                </SECtion>               
                <section class="part3">
                   
                            <div>            
                                <h1 id="mdo">Build your Game Library</h1>                               
                            </div>
                                                       
                            <div class="fuk">
                            <div class="img1">
                                  <div class="im">
                                      <i class="fas fa-gamepad"></i>
                                      <p>Let other gamers know what you're about, by adding your favorite games to your library.
                                          You can also search and see what other singles are playing to get noticed by other gamers.</p>
                                  </div>
                                  <img src="https://res.cloudinary.com/gamerdating-ltd/image/upload/v1513266574/games/large/Fortnite.jpg" alt="">
                                  <img src="https://res.cloudinary.com/gamerdating-ltd/image/upload/v1536065313/games/large/Battlefield5.jpg" alt="">
                                  <img src="https://res.cloudinary.com/gamerdating-ltd/image/upload/v1513266304/games/large/LeagueofLegends.jpg" alt="">
                                  <img src="https://res.cloudinary.com/gamerdating-ltd/image/upload/v1524611675/games/large/WorldofWarcraftBattleforAzeroth.jpg" alt="">
                            </div>
                          </div>
                </section>
              <section class="ha">
                <footer class="last">
                     <div class="container-fluid" >
                      
                         <div class="row">
                                      <div class="col-sm-2">
                                      <a href="" id="three"> <img src="images/MG_header1.png" alt=""></a>
                                      <p>© 2019 MEET GAMERS LLC</p>
                                      </div>
                                       <div class="col-sm-2">
                                       <a href="downbar/Contact_Us.html" target="_blank">Contact Us</a>
                                        
                                      </div>
                                      <div class="col-sm-2">
                                        <a href="#">Privacy Policy</a>
                                      </div>
                                      <div class="col-sm-2">
                                        <a href="#">Support</a>
                                     
                                      </div>
                                      <div class="col-sm-2">
                                        <a href="#">FAQ</a>
                                        
                                      </div>
                                 </div>
                     </div>
                  </footer>
               </section>  
    
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </div>
</body>
</html>