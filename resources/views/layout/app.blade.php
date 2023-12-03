<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sport Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!--link href="css/style.css" rel="stylesheet"-->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="" src="assets/img/campus/main-logo.png" alt="Imperial">
        </div>

        <h1>Sport Management System <br> University of Jaffna</h1>
        <h2>We are <span class="typed" data-typed-items="the Best University,the Champions,the Proud of Sri Lanka "></span></h2>
        <div class="actions">
          <a href="{{ route('login') }}" class="btn-get-started">Login</a>
          <a href="{{ route('sign') }}" class="btn-services">SignUp</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="" class=""><img src="" alt="">University of Jaffna - S.M.S</a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <!--li><a class="nav-link scrollto" href="#services">Services</a></li-->

          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="https://sites.google.com/univ.jfn.ac.lk/career-guidance-unit">Career Guidance Unit</a></li>
              <li><a href="https://www.cu.jfn.ac.lk/">Computer Unit</a></li>
              <li><a href="https://www.unit.jfn.ac.lk/peu/">Physical Education Unit</a></li>
              <li><a href="https://www.siddha.jfn.ac.lk/">Siddha Medicine Unit</a></li>
              <li><a href="https://www.unit.jfn.ac.lk/spsu/">Sport Science Unit</a></li>
              <li><a href="https://www.jfn.ac.lk/unit/strategic-planning-mis-unit/">Strategic Planning & MIS Unit</a></li>
            </ul>
          </li>
          <!--li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li-->
          <li><a class="nav-link scrollto" href="#findus">FindUS</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>

          <!--li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li-->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
      </div>

      <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">

          <div class="col-lg-2 about-img">
            <!--img src="assets/img/campus/main4to-3.jpeg" alt="Campus main 4to"-->
          </div>

          <div class="col-lg-2 about-img">
            <img src="assets/img/campus/main4to-1.jpeg" alt="Campus main 4to">
          </div>

          <div class="col-lg-2 about-img">
            <!--mg src="assets/img/campus/main4to-3.jpeg" alt="Campus main 4to"-->
          </div>

          <div class="col-lg-2 about-img">
            <img src="assets/img/campus/main4to-1.jpeg" alt="Campus main 4to">
          </div>


          <div class="about-content">
            <h2 class="about-title"><br><br>We provide great services and ideass</h2>
            <p class="about-text">
              The Faculty of Science was set up in October 1974 at Vaddukoddai in the premises taken over from the Undergraduates’ Section of the Jaffna College. The first batch of students numbering 103 was admitted to the Faculty on October 25, 1974 and only a course in Mathematics and Statistics was provided initially. The late Professor P. Kanagasabapathy functioned as the first Dean of the Faculty and the Head of the Department of Mathematics and Statistics. After the appointment of Heads of Departments and a few Assistant Lecturers for some of the other disciplines in Science, courses in physical science and bioscience were started in 1975. Thirty-five students were admitted to these courses in the academic year 1975/76. As the facilities available in the small laboratories at Vaddukoddai were grossly inadequate for work beyond the First Year Courses and future development at Vaddukoddai was not possible due to acute shortage of freshwater and space, a decision was taken to put up new buildings for the Faculty of Science at Thirunelvely where the Faculty of Humanities and the administrative offices were sited.
            </p>
            More infromation :<a href="https://www.jfn.ac.lk/">University of Jaffna</a>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-12">
            <h3 class="section-title">Our Services</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="service-title"><a href="https://sites.google.com/univ.jfn.ac.lk/career-guidance-unit">Career Guidance Unit</a></h4>
            <p class="service-description">Transfer students into zealous professional by design and support the undergraduates in their efforts to make right career
                 choice and successfully manage their academic, personal and social life</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="service-title"><a href="https://www.cu.jfn.ac.lk/">Computer Unit</a></h4>
            <p class="service-description">The Computer Unit was Established  Under Dean/Science according to U.G.C Regulation in 1985 during the Deanship of Prof K Kunaratnam with his effort.
                Dr. S Kanaganathan was appointed as the First Head of the Computer Unit. later in 1989.</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="service-title"><a href="https://www.unit.jfn.ac.lk/peu/">Physical Education Unit</a></h4>
            <p class="service-description">Physical Education Unit is one of the service units at the University of Jaffna to provide sports facilities and encourage
                all students to take part in sports activities</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="service-title"><a href="https://www.siddha.jfn.ac.lk/">Siddha Medicine Unit</a></h4>
            <p class="service-description">Siddha Medicine was established in 1929 along with Ayurveda and Unani under the College of Indigenous Medicine, at Borella. The Board of Indigenous Medicine awarded Diploma in Indigenous Medicine and Surgery (DIMS) until 1961. After the implementation of Ayurveda act No 31 of 1961 the name of the degree was
                changed to Diploma of Ayurvedic Medicine and Surgery (DAMS).</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="service-title"><a href="https://www.unit.jfn.ac.lk/spsu/">Sports Science Unit</a></h4>
            <p class="service-description">The University of Jaffna was initially established in 1974 as the Jaffna campus of the University of Sri Lanka. The Jaffna campus was inaugurated with two faculties, the Faculty of Science and the Faculty of Humanities. In the gazette notification of the establishment of the Jaffna campus, it was mentioned that the campus would be established with three faculties Humanities, Law and Science, and
                another one department of study; Physical Education</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="service-title"><a href="https://www.jfn.ac.lk/unit/strategic-planning-mis-unit/">Strategic Planning & MIS Unit</a></h4>
            <p class="service-description"> The Strategic Planning Unit of the University of Jaffna is to lead strategic management initiative, and coordinate planning of the strategic plan and action plans, management information system (MIS) and monitor of implementation of the action plans by the faculties, divisions, centres/units. This was also done as a fulfillment of the requirement stipulated by the Department of Public Enterprises of the Ministry of Finance in order to promote good governance
                and strategic management in public institutions</p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-md-12">
                <h3 class="subscribe-title">Find US</h3>
                <p class="subscribe-text">The faculty has a good track record of producing competent and skillful graduates and offer programmes leading to a Bachelor of Science degree of either three-year or four-year duration, which is designed to provide knowledge on both pure and applied sciences, together with comprehensive skills development components</p-->

            </div>
                <!--div class="col-md-4 subscribe-btn-container">
                    <a class="subscribe-btn" href="#"></a>
                </div-->
            </div>
        </div>

        <div>
            <p>
            <iframe loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932.8886750624806!2d80.02093391433982!3d9.690541993063746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe546ce6bca987%3A0x7b7d6a748e0d2cc9!2sPhysical+Education+Unit%2C+University+of+Jaffna!5e0!3m2!1sen!2slk!4v1498819193724" width="100%" height="100%" frameborder="0" allowfullscreen="">
            </iframe>
            </p>
        </div>

    </section><!-- End Subscrbe Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Vision & Mission</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="http://www.jfn.ac.lk/wp-content/uploads/2016/03/Chancellor.jpg" alt=""></div>
              <h4>PROF. S. PATHMANATHAN</h4>
              <span>CHANCELLOR <br>
                2014 – PRESENT</span>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b> To be a leading centre of excellence in teaching, learning, research and innovation, scholarship and community engagement. <small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b>To train intellectually and professionally competent graduates and postgraduates in alignment with current and emerging needs of the national and international community, engage in research and innovation and research commercialization, promote scholarship and engage with
              industry and community with a special emphasis on the social, economic and cultural needs of Northern Sri Lanka. <small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="http://www.jfn.ac.lk/wp-content/uploads/2020/08/Prof.S-Srisatkunarajah.jpg" alt=""></div>
              <h4>Professor Sivakolundu Srisatkunarajah</h4>
              <span>VICE CHANCELLOR <br>
                28th August 2020 – Present</span>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Team Members</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Our team is at the heart of who we are. Every day at UOJ, we learn, grow, and challenge ourselves to
                do better tomorrow than today.We are One team.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Pro-1.jpg" alt=""></div>
              <h4>Kgy Sathsara</h4>
              <span>Full Stack Developer <br> Php(Laravel)</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/kgy-sathsara-03297321b/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Pro-2.jpg" alt=""></div>
              <h4>Shahana Naushad</h4>
              <span>Team Leader</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/shahana-naushad-729792183/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Pro-3.jpg" alt=""></div>
              <h4>Sathuzan Narendiran</h4>
              <span>UI/UX Designer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://lk.linkedin.com/in/sathuzan-narendiran-537737263/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Pro-5.jpg" alt=""></div>
              <h4>D.Madushanka</h4>
              <span>Analysics</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/kalai.kavi.77715?mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/shankavi-kalaiyalakan-9356b6296/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Please feel free to contact us by reaching out through the form below. We look forward to hearing from you.</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>133/1,Kurunda<br>Udugama,Galle</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>yohansathsara87@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>0778735281/0706093223</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">

                <form class="mb-3 mt-md-4" action="{{ route('report') }}" method="post" enctype="multipart/form">
                    @csrf
                        <div class="mb-2">
                          <input type="Name" class="form-control" name="Name" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-2">
                          <input type="Email" class="form-control" name="Email" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-2">
                            <input type="Reg" class="form-control" name="Reg" placeholder="Enter Reg Number">
                        </div>
                        <div class=" mb-2">
                            <textarea class="form-control" name="Message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <br>

                        <div class="d-grid">
                          <button class="btn btn-outline-dark" type="submit">Send Message</button>
                        </div>
                </form>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Kgysathsara,UOJ</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by <a href="https://www.linkedin.com/in/kgy-sathsara-03297321b/">Kgysathsara</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <!--script src="assets/js/main.js"></script-->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>



