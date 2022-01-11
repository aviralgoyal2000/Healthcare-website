<!--Contributed by MANISH CHEMBETI - 19BCE2430-->
<!DOCTYPE html>
<html>
  <head>
    <title>ABC</title>
    <link href="style.css" rel="stylesheet">

    <!--Bootstrap cdn link-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    
  </head>
  
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header-transparent">
        <div class="container">
    
          <div id="logo" class="pull-left">
              <h1><a href="index.html" style="color: white;" class="scrollto">ABC</a></h1>
          
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="index.html">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#features">Features</a></li>
              <!--<li><a href="#pricing">Pricing</a></li>-->
              <li><a href="#disease">Diseases</a></li>
              
             <li><a href="#faq">FAQ</a></li>
              <li class="menu-has-children"><a href="">Register</a>
                <ul>
                  <li><a href="hospital.php">HOSPITAL</a></li>
                  <li><a href="practitioner.php">PRACTITIONER</a>
                  </li>
                  <li><a href="patient.php">PATIENT</a></li>
                  <li><a href="insurer.php">INSURER</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="">Update</a>
                <ul>
                  <li><a href="uhos.php">HOSPITAL</a></li>
                  <li><a href="uprac.php">PRACTITIONER</a>
                  </li>
                  <li><a href="upat.php">PATIENT</a></li>
                  <li><a href="uinsu.php">INSURER</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="">Delete</a>
                <ul>
                  <li><a href="dhos.php">HOSPITAL</a></li>
                  <li><a href="dprac.php">PRACTITIONER</a>
                  </li>
                  <li><a href="dpat.php">PATIENT</a></li>
                  <li><a href="dinsu.php">INSURER</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a href="">Search</a>
                <ul>
                  <li><a href="shosp.php">HOSPITAL</a></li>
                  <li><a href="spract.php">PRACTITIONER</a>
                  </li>
                  <li><a href="spat.php">PATIENT</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- End Header -->

        <!-- ======= Intro Section ======= -->
  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to ABC</h2>
      <p>We are team of talented developers making decentralised applications</p>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>

    <script>
        function imgWindow() {
         window.open("image") }
       </script>

    <div class="product-screens">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="p1.png" alt="" onclick="window.open(this.src)">
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="p2.png" alt="" onclick="window.open(this.src)">
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="p3.png" alt="" onclick="window.open(this.src)">
      </div>

    </div>

  </section><!-- End Intro Section -->

  <main id="main">
      
      <!-- ======= About Section ======= -->

      <section id="about" class="section-bg">
        <div class="container-fluid">
          <div class="section-header">
            <h3 class="section-title">About Us</h3>
            <span class="section-divider"></span>
            <img src="about.jpg" onclick="window.open(this.src)">
            <p class="section-description">
                This is a health management system that will help us to manage information about various hospitals, doctors and patients.
            </p>
          </div>
  
            <div class="col-lg-6 content wow fadeInRight"></div>
            </div>
          </div>
  
        </div>
      </section>
      
      <!-- ======= Featuress Section ======= -->
      <section id="features" >
        <div>
          <div>
            <h2 align="middle">Product Features</h2>
          </div>
          <div>
          <div>
            <div style ="margin-bottom : 15px;" class = "child">
              <script>
                  function imgWindow() {
                   window.open("image") }
              </script>
        
              <img src="product-features.png" alt="" onclick="window.open(this.src)" height="300px" >
            </div>
            <div>
            <div style = "margin-left : 250px;" class = "container ">
              <div class = "tb1-header">
                <table border="0" cellpadding = "0" cellspacing = "0">
                  <thead>
                    <tr>
                      <th>Feature</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="tbl-content" >
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    <tr>
                      <td>Hospital records</td>
                      <td>We will maintain the details of hospitals all over the nation here</td>
                    </tr>
                    <tr>
                      <td>Practitioner Records</td>
                      <td>We provide the transparent information about the doctors</td>
                    </tr>
                    <tr>
                      <td>Patient Records</td>
                      <td>We help people and doctors for secure treatment</td>
                    </tr>
                    <tr>
                      <td>Insurance Easy</td>
                      <td>The Claim of insurance made easier by us</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
         </div>
         </div>
        </div>
        </div>
      </section><!-- End Featuress Section -->

      
      <br><br><br>
      <!-- ======= Diseases Section ======= -->
      <section id=disease class = "container">
        <div>
          <div>
            <h2 align="middle">Diseases</h2>
          </div>
          <div>
            <dl>
              <dt style = "font-size : 30px ; "><strong>Covid</strong></dt>
              <dd  class="flex-container">
    
                <div style = "background-color :#659dbd;"><ul>Shortness of breath or difficulty breathing</ul></div>
                <div style = "background-color: #1dc8cd;"><ul>New loss of taste or smell</ul></div>
                <div style = "background-color :#659dbd;"><ul>Fever or chills</ul></div>
                <div style = "background-color: #1dc8cd;"><ul>Cough</ul></div></dd>
                <br>
              <dt style = "font-size : 30px ; "><strong>Tuberculosis</strong></dt>
              <dd class="flex-container">
                <div style = "background-color: #1dc8cd;"><ul>Unintentional weight loss</ul></div>
                <div style = "background-color :#659dbd;"><ul>Fatigue</ul></div>
                <div style = "background-color: #1dc8cd;"><ul>Fever</ul></div>
                <div style = "background-color :#659dbd;"><ul>Night sweats</ul></div>
                <div style = "background-color: #1dc8cd;"><ul>Chills</ul></div>
                <div style = "background-color :#659dbd;"><ul>Loss of appetite</ul></div>
              </dd>
            </dl>
          </div>
        </div>
      </section><!-- End Disease Section -->
      <br><br><br>
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class = "container">
        <div>
          <div>
            <h2 align="middle">Frequently Asked Questions</h2>
            <p align="middle">Here are the answers for the most frequently asked questions...</p>
          </div>
          
          <ol id="faq-list">
            <li>
              <a href="#faq1">What is the use of this product?</a>
              <div id="faq1" data-parent="#faq-list">
                <p>Answer for the above question.</p>
              </div>
            </li>
          </ol>
        </div>
      </section><!-- End Frequently Asked Questions Section -->
      <!-- ======= Contact Section ======= -->
    </main><!-- End #main -->
    <br><br><br><br><br>
    <!-- ======= Footer ======= -->
    <footer id="footer" class = "bottom-container">
      <div>
        <nav>
          <a href="#intro" class="scrollto footer-links">Home</a>
          <a href="#about" class="scrollto footer-links">About</a>
          <a href="#" class = "footer-links">Privacy Policy</a>
          <a href="#" class = "footer-links">Terms of Use</a>
        </nav>
        <p class = "copyright">Website Contributed by AVIRAL GOYAL - 19BCE0883, PRATYAKSHA - 19BCI0136, MANISH CHEMBETI - 19BCE2430</p>
      </div>
    </footer><!-- End  Footer -->
  </body>
</html>