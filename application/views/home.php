<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Codeigniter | Landing Page &mdash; Website by Abdul LM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="home">Ci Landing Page</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#login-section" class="nav-link"><span>Login</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
		  </div
        </div>
	  </div>
	  
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('<?php echo base_url();?>assets/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Praktikum Codeigniter</h1>
				  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Oleh Abdul Latif Munjiat</p>
				  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">1610631170004</p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="form-box">
                    <h3 id="login-section" class="h4 text-black mb-4">Login</h3>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Login">
                    </div>
                  </form>

				</div>
				
              </div>
			</div>
			
          </div>
        </div>
      </div>
	</div>

    <div class="site-section bg-image overlay"id="about-section"  style="background-image: url('<?php echo base_url();?>assets/images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="<?php echo base_url();?>assets/images/abdul.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Abdul Latif Munjiat</h3>
            <blockquote>
              <p>&ldquo; Full stack web developer, Visual Graphic & Video Editor. In spare time also producing music. &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Ci Landing Page</h3>
            <p>Website ini dibuat untuk memenuhi salah satu tugas mata kuliah Framework Pemrograman Web yang di ampu oleh bapak H. Bagja Nugraha S.T,. M.Kom,.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section">Home</a></li>
              <li><a href="#about-section">About</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Identitas</h3>
            <p>Abdul Latif Munjiat</p>
            <p>1610631170004</p>
            <p>Kelas 7'A</p>
            <p>Studi Teknik Informatika</p>
            <p>Fakultas Ilmu Komputer</p>
            <p>Universitas Singaperbangsa Karawang</p>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Abdul Latif Munjiat
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/js/aos.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>

  
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
    
  </body>
</html>
