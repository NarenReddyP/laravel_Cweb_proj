<!DOCTYPE html>
<html lang="en">

<head>
    <title>Company Web</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/C_img/favicon/favicon-16x16.png') }}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap_css/bootstrap.css') }}">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Fontawesome Icons-->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome_css/all.min.css') }}">
    <script src="{{ asset('assets/js/fontawsome_js/all.min.js') }}"></script>

    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>

    <!--Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('assets/css/Owl-carousel_css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Owl-carousel_css/owl.theme.default.min.css') }}">

    <!--Responsive-tabs CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/Responsive-tabs_css/responsive-tabs.css') }}">

    <!--Magnific Popup CSS-->

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup_css/magnific-popup.css') }}">

    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">

    <!--JQery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--NAV bootstrap 5 css -->
        {{-- <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous"
      /> --}}
      <!-- BOX ICONS CSS-->
      <link
        href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
        rel="stylesheet"
      />
      <!-- custom css -->

    <style>

 /* ----------Footer--------   */
.footer{
  background: #000;
  color: #8a8a8a;
  font-size: 14px;
  padding: 60px 0 20px;
}
.footer p{
  color: #8a8a8a;
}
.footer h3{
  color: #fff;
  margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
  min-width: 250px;
  margin-bottom: 20px;
}
.footer-col-1{
  flex-basis: 30%;
}
.footer-col-2{
  flex: 1;
  text-align: center;
}
.footer-col-2 img{
  width: 180px;
  margin-bottom: 20px;
  border-radius: 50px;
}
.footer-col-3, .footer-col-4{
  flex-basis: 12%;
  text-align: left;

}
ul{
  list-style-type: none;
}
.app-logo{
  margin-top: 20px;

}
.app-logo img{
  width: 140px;
  min-height: 50px;
}

.footer hr{
  border: none;
  background: #eeeaea;
  height: 2px;
  margin: 20px 0;
}

.footer-col-3 ul li{
  padding-bottom: 10px;
}
.footer-col-4 ul li{
  padding-bottom: 10px;
}

.footer-col-3 ul li:hover{
  color: #fff;
}

.footer-col-4 ul li:hover{
  color: #fff;

}
#copyright{
  text-align: center;
}
.menu-icon{
  width: 28px;
  margin-left: 20px;
  display: none;
}

/*END FOOTER */

/* LEFT SIDE NAV MENU  */

.side-navbar {
  padding-top: 5%;
  width: 170px;
  height: 100%;
  position: fixed;
  margin-left: -300px;
  background-color: #cc2290;
  transition: 0.5s;
  z-index: 8888;
  
}

.fa-angle-double-down{
   float: right;
   padding-right: 8px;
}
.aitemsstyle{
    text-decoration: none;
    color:#370844;
}
.aitemsstyle:hover{
    text-decoration: none;
    color:#FFF;
}

.nav_linkk{
    color: #370844;
    text-decoration:none;
    width: 170px;
    padding: 5px;
    margin-block: 2px;

}

.nav_linkk:active,
.nav_linkk:focus,
.nav_linkk:hover {
  background-color: #ffffff26;
  color:white;
  font-weight: 700;
  text-decoration: none;
  padding: 5px;
  transition: 0.5s;
  
}

.my-container {
  transition: 0.4s;
}

.active-nav {
  margin-left: 0;
}

/* for main section */
.active-cont {
  margin-left: 180px;
}

#menu-btn {
  background-color: #634c5bae;
  color: #fff;
  margin-left: -95px;
  z-index: 8889;
}
#menu-btn:hover{
    background-color: #f31198ae;    
}
#menu-btn i{
    font-weight: 600;
}

.my-container input {
  border-radius: 2rem;
  padding: 2px 20px;
  
}
#socialicons a{
    color: #370844;
}
#socialicons a:hover{
    color: #fff;
}





.dropdown-btn{
    background-color: #370844;
    color:#370844;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #8d1583;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
  display: block;
  background-color: #5f4756;
  width: 170px;
  transition: 0.5s;
}

/* Main content */


/* Add an active class to the active dropdown button */
/* .active {
  background-color: green;
  color: white;
} */

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 0px;
  width: 170px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


/* END LEFT SIDE MENU  */

    </style>
</head>



<body data-spy="scroll" data-target=".navbar" data-offset="75">
    <!--Preloader  -->
    <div id="preloader">
        <div id="preloader_status">&nbsp;</div>
    </div>
    <!--Preloader Ends -->

   <!--Header  -->
   <header class="sticky">

   <nav class="navbar fixed-top navbar-expand-md ">

   <!--Logo [this is class white-nav-top] -->
   <a class="navbar-brand  smooth-scroll logo" href="#home">
       <img src="https://127.0.0.1:8000/assets/C_img/favicon/favicon-32x32.png" alt="LOGO">

   </a>

     <!--
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

         <div class="menuToggle" onclick="toggleMenu();"><i class="fas fa-bars"></i></div> -->

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
         <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
         </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navigation">

            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#home" onclick="toggleMenu();">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#about" onclick="toggleMenu();">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#team" onclick="toggleMenu();">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#services" onclick="toggleMenu();">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#portfolio" onclick="toggleMenu();">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#blog" onclick="toggleMenu();">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#contact" onclick="toggleMenu();">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('change-password') }}" >ChangePassword</a>
            </li>
            <li class="nav-item" style="padding-right:45px; ">
              <a class="nav-link"  href="{{ url('logout') }}" >Logout</a>
            </li>
            <li class="nav-item pl-0 ml-5">
                <a class="btn border-0 nav-link" id="menu-btn"><i class="bx bx-menu"></i></a>
            </li>
              
        
          </ul>


        </div>
    </nav>
     
    

   </header>
   <!--Header Ends -->

   <!--Side NavBar --->
    
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h3 text-white my-2">
        Company WEB </br>Documents
      </a>
      <li href="#" class="nav_linkk">
        <i class="bx bxs-dashboard"></i>
        <a class="aitemsstyle" href=""><span class="mx-2">Home   <i class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
      </li>
      <li href="#" class="nav_linkk">
        <i class="bx bx-user-check"></i>
        <a class="aitemsstyle"  href=""><span class="mx-2">QR Code   <i class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
      </li>
      <li href="#" class="nav_linkk" id="qrcodedec">
        <i class="bx bx-conversation"></i>
        <a class="aitemsstyle" href="{{ route('qrcode') }}"><span class="mx-2">QR Code   <i class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
      </li>
      <li href="#" class="nav_linkk">
        <i class="bx bxs-dashboard"></i>
        <a class="aitemsstyle" href=""><span class="mx-2">Home   <i class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
            
      </li>
      <li href="#" class="nav_linkk">
        <i class="bx bx-user-check"></i>
        <a class="aitemsstyle"  href=""><span class="mx-2">QR Code   <i class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
      </li>
      
      <div class="sidenav">
      <button class="dropdown-btn">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>

    </ul>

    <span id="socialicons" href="#" class="nav-link h4 w-100 mb-5">
      <a href=""><i class="bx bxl-instagram-alt"></i></a>
      <a href=""><i class="bx bxl-twitter px-2"></i></a>
      <a href=""><i class="bx bxl-facebook"></i></a>
    </span>
  </div>

   <!--END Side NavBar --->

    <!--Home  -->
    <section id="home">
        <!--Background Video  -->
        <video id="home-bg-video" poster="{{ asset('assets/C_img/Videoposter.jpg') }}" autoplay muted loop>
            <source src="{{ asset('assets/C_Videos/GoldenV1.mp4') }}">
        </video>
        <!--Overlay-->
        <div id="home-overlay"> </div>
        <!-- Home Content  -->
        <div id="home-content">
            <div id="home-content-inner" class="text-center">
                <div id="home-heading">
                    <h1 id="home-heading-1">Company Web</h1><br>
                    <h1 id="home-heading-2"><span>Creative</span>Web Developers</h1>
                </div>
                <div id="home-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eum iusto enim quis ab hic modi, consectetur ullam architecto corrupti totam non alias.</p>
                </div>
                <div id="home-btn">
                    <a class="btn btn-general btn-home smooth-scroll" role="button" title="Start Now" href="#about">START NOW</a>
                </div>
            </div>
        </div>
        <!--Arrow Down-->
        <a href="#about" id="arrow-down" class="smooth-scroll"><i class="fas fa-chevron-circle-down"></i></a>
    </section>
    <!--Home Ends -->


    <!--About  -->
    <section id="about">
        <!--About 01 -->
        <div id="about-01">

            <div class="content-box-lg">
                <div class="container">
                    <div class="row">

                        <!--About Left Side-->
                        <div class="col-md-6">

                            <div id="about-left">
                                <div class="vertical-heading">
                                    <h5>Who We Are</h5>
                                    <h2>A <strong>Story</strong><br>About Us</h2>
                                </div>
                            </div>
                        </div>

                        <!--About right Side-->
                        <div class="col-md-6">

                            <div id="about-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quo sunt sapiente placeat ducimus praesentium et, perspiciatis blanditiis? Laborum corporis quo quaerat numquam ab, nesciunt sed a voluptatem fugit vel.</p>
                            </div>
                        </div>

                    </div>

                    <!--About Bottom-->

                    <div class="row">
                        <div class="col-md-12">

                            <div id="about-bottom">
                                <img src="{{ asset('assets/C_img/Bg_img/apple-bg.jpg') }}" class="img-fluid" alt="About Us">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!--About 01 Ends -->

        <!--About 02 -->

        <div id="about-02">

            <div class="content-box-md">
                <div class="container">
                    <div class="row">


                        <div class="col-md-4">
                            <div class="about-item text-center">

                                <span>
                                    <i class="fas fa-rocket"></i>
                                </span>
                                <h3>Mission</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga soluta tempore ipsum officia obcaecati quia repudiandae, quis similique impedit est, esse. Incidunt nulla cumque dolorum quo aliquam sequi quia!</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <h3>Vission</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga soluta tempore ipsum officia obcaecati quia repudiandae, quis similique impedit est, esse. Incidunt nulla cumque dolorum quo aliquam sequi quia!</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span>
                                    <i class="fas fa-volleyball-ball"></i>
                                </span>
                                <h3>Passion</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga soluta tempore ipsum officia obcaecati quia repudiandae, quis similique impedit est, esse. Incidunt nulla cumque dolorum quo aliquam sequi quia!</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--About 02 Ends-->

    </section>
    <!--About Ends-->


     <!--Team  -->
     <section id="team">
         <div class="content-box-lg">
             <div class="container">


                 <!--Team Members -->
                 <div class="row">
                     <!--Team Left Side -->

                     <div class="col-md-6">

                         <div id="team-left">
                             <div class="vertical-heading">
                                 <h5>Who We Are</h5>
                                 <h2>Meet Our<br><strong>Talented</strong> Team</h2>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita saepe obcaecati porro quibusdam quam ea pariatur soluta asperiores, ad itaque deserunt culpa? Aspernatur, hic vel maiores animi? Nesciunt, ipsum.</p>
                         </div>
                     </div>

                     <!--Team Right Side -->

                     <div class="col-md-6">

                         <div id="team-members" class="owl-carousel owl-theme">


                             <!--Member 01 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member1.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Krishna Kumari</h6>
                                         <p>Web Devloper</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 02 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member2.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Krishna Kumari</h6>
                                         <p>Web Devloper</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 03 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member3.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Krishna Kumari</h6>
                                         <p>Web Devloper</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 04 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member4.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Krishna Kumari</h6>
                                         <p>Web Devloper</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 05 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member5.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Rasmi Kumari</h6>
                                         <p>Customer Sr.Executive</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 06 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member6.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Ragava Kumar</h6>
                                         <p>Ass Managing Director</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 07 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member7.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Krishna Kumar</h6>
                                         <p>Managing Director</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <!--Member 08 -->
                             <div class="team-member">
                                 <img src="{{ asset('assets/C_img/members_img/member9.jpg') }}" alt="Team Member" class="img-fluid">
                                 <div class="team-member-overlay">
                                     <div class="team-member-info text-center">
                                         <h6>Krishna Vedika</h6>
                                         <p>Ass Managing Director</p>
                                         <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>


                         </div>

                     </div>

                 </div>


                 <div id="progress-elements">

                     <div class="row">
                         <div class="col-md-6">


                             <!--Skill 01 -->
                             <div class="skill">
                                 <h4>Web Development</h4>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                                 </div>
                             </div>


                         </div>
                         <div class="col-md-6">

                             <!--Skill 02 -->
                             <div class="skill">
                                 <h4>Logo Design</h4>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                                 </div>
                             </div>

                         </div>
                         <div class="col-md-6">

                             <!--Skill 03 -->
                             <div class="skill">
                                 <h4>Web Design</h4>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>85%</span></div>
                                 </div>
                             </div>


                         </div>
                         <div class="col-md-6">

                             <!--Skill 04 -->
                             <div class="skill">
                                 <h4>Digital Marketing</h4>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                                 </div>
                             </div>

                         </div>
                     </div>

                 </div>


             </div>
         </div>



     </section>
    <!--Team  Ends-->


    <!--Statement  -->
    <section id="statement">

        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="tech-statement" class="text-center">
                            <div id="quote-box">
                                <h3><i class="fas fa-quote-left"></i> We design and develop stylish &#38; modern responsive websites. <i class="fas fa-quote-right"></i></h3>
                                <p>- Narendra Reddy-</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--Statement Ends -->


    <!--Services   -->
    <section id="services">


        <!-- Services Part 1  -->
        <div id="services-01">

            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="horizontal-heading text-center">
                                <h5>What We Do</h5>
                                <h2>Our Services</h2>
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <img src="{{ asset('assets/C_img/Bg_img/monitor-bg.jpg') }}" alt="Services 01" class="img-fluid">
                        </div>
                        <div class="col-md-5">

                            <!-- Service 01   -->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-paint-brush"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <h5>Service 01</h5>
                                        <h4>Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iste libero eos nulla quibusdam id, animi placeat suscipit, magni blanditiis magnam hic voluptatem.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 02   -->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-laptop-code"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <h5>Service 02</h5>
                                        <h4>Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iste libero eos nulla quibusdam id, animi placeat suscipit, magni blanditiis magnam hic voluptatem.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 03   -->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-bullhorn"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <h5>Service 03</h5>
                                        <h4>Digital Marketing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iste libero eos nulla quibusdam id, animi placeat suscipit, magni blanditiis magnam hic voluptatem.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </div>
         <!-- Services Part 1 Ends  -->


       <!--  Services Part 2  -->
           <div id="services-02">
                   <div class="content-box-md">

                   <div id="services-tabs">
                       <ul class="text-center">
                           <li><a href="#service-tab-1">Creativity</a></li>
                           <li><a href="#service-tab-2">Strategy</a></li>
                           <li><a href="#service-tab-3">Design</a></li>
                           <li><a href="#service-tab-4">Development</a></li>

                       </ul>


                   <!-- service Tab 01 -->
                   <div id="service-tab-1">
                       <div class="container">
                       <div class="row">
                           <div class="col-md-6">
                             <img class="img-size" src="{{ asset('assets/C_img/Bg_img/service-tab1.jpg') }}" alt="Service Tab 01" width="400" height="400">
                           </div>

                           <div class="col-md-6">

                             <div class="tab-bg">
                                 <h2>01</h2>
                                 <h3>Get More From Life with Creativity</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi inventore saepe laudantium, possimus optio mollitia eligendi minima eaque ratione cum odit eos necessitatibus quis magni obcaecati provident quae autem dolores.</p>

                                 <div id="service-btn">
                                        <a class="btn btn-general btn-yellow" role="button" title="Get In Touch" href="#about">Get In Touch</a>
                                 </div>
                             </div>
                           </div>

                       </div>
                     </div>
                   </div>

                    <!-- service Tab 02 -->
                   <div id="service-tab-2">
                       <div class="container">
                       <div class="row">
                           <div class="col-md-6">
                             <img class="img-size" src="{{ asset('assets/C_img/Bg_img/service-tab2.jpg') }}" alt="Service Tab 02" width="400" height="400">
                           </div>

                           <div class="col-md-6">

                             <div class="tab-bg">
                                 <h2>02</h2>
                                 <h3>Get More From Life with Creativity</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi inventore saepe laudantium, possimus optio mollitia eligendi minima eaque ratione cum odit eos necessitatibus quis magni obcaecati provident quae autem dolores.</p>

                                 <div id="service-btn">
                                        <a class="btn btn-general btn-yellow" role="button" title="Get In Touch" href="#about">Get In Touch</a>
                                 </div>
                             </div>
                           </div>

                       </div>
                     </div>
                   </div>

                    <!-- service Tab 03 -->
                   <div id="service-tab-3">
                       <div class="container">
                       <div class="row">
                           <div class="col-md-6">
                             <img class="img-size" src="{{ asset('assets/C_img/Bg_img/service-tab3.jpg') }}" alt="Service Tab 03" width="400" height="400">
                           </div>

                           <div class="col-md-6">

                             <div class="tab-bg">
                                 <h2>03</h2>
                                 <h3>Get More From Life with Creativity</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi inventore saepe laudantium, possimus optio mollitia eligendi minima eaque ratione cum odit eos necessitatibus quis magni obcaecati provident quae autem dolores.</p>

                                 <div id="service-btn">
                                        <a class="btn btn-general btn-yellow" role="button" title="Get In Touch" href="#about">Get In Touch</a>
                                 </div>
                             </div>
                           </div>

                       </div>
                     </div>
                   </div>

                    <!-- service Tab 04 -->
                   <div id="service-tab-4">
                       <div class="container">
                       <div class="row">
                           <div class="col-md-6">
                             <img class="img-size" src="{{ asset('assets/C_img/Bg_img/service-tab4.jpg') }}" alt="Service Tab 04" width="400" height="400">
                           </div>

                           <div class="col-md-6">

                             <div class="tab-bg">
                                 <h2>04</h2>
                                 <h3>Get More From Life with Creativity</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi inventore saepe laudantium, possimus optio mollitia eligendi minima eaque ratione cum odit eos necessitatibus quis magni obcaecati provident quae autem dolores.</p>

                                 <div id="service-btn">
                                        <a class="btn btn-general btn-yellow" role="button" title="Get In Touch" href="#about">Get In Touch</a>
                                 </div>
                             </div>
                           </div>

                       </div>
                     </div>
                   </div>

                   </div>
               </div>
           </div>
       <!--Services Part 2 Ends -->

        </section>
    <!--Services Ends -->


    <!--Work  -->
    <section id="portfolio">

        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                       <div class="vertical-heading">
                           <h5>Find Our Work</h5>
                           <h2>Our<br>Amazing<strong> WORK</strong></h2>
                       </div>
                    </div>

                    <div class="col-md-12">
                        <div class="portfolio-buttons">
                          <button class="btn active" data-filter="*">All</button>
                          <button class="btn" data-filter=".web">Web</button>
                          <button class="btn" data-filter=".logo">Logo</button>
                          <button class="btn" data-filter=".mobile">Mobile</button>
                          <button class="btn" data-filter=".desktop">Desktop</button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->

            <section id="portfolio-wrapper">


                    <div class="container">
                        <div class="row grid">

                               <!-- Portfolio Item 1 -->
                               <div class="col-md-3 portfolio-item logo">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry1.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry1.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Logo</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Logo,of Netflix</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 2 -->
                               <div class="col-md-3 portfolio-item logo">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry2.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry2.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Logo</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Logo, of BMW</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 3 -->
                               <div class="col-md-3 portfolio-item mobile">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry3.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry3.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Mobile</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Mobile, view</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 4 -->
                               <div class="col-md-3 portfolio-item logo">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry4.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry4.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Logo</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Logo,of BMW full view</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 5 -->
                               <div class="col-md-3 portfolio-item mobile">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry5.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry5.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Mobile</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Mobile,back view</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 6 -->
                               <div class="col-md-3 portfolio-item web desktop">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry9.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry9.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Desktop</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Desktop,of Computers view</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 7 -->
                               <div class="col-md-3 portfolio-item web desktop">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry7.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry7.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Desktop</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Desktop,of Computers</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                                <!-- Portfolio Item 8 -->
                               <div class="col-md-3 portfolio-item mobile">

                               <a href="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry8.jpg') }}" title="Description">
                                   <img src="{{ asset('assets/C_img/Bg_img/img_gallory/img-galry8.jpg') }}" class="img-fluid" alt="Portfolio Item" width="400" height="400">

                                   <div class="portfolio-item-overlay">
                                       <div class="portfolio-item-details text-center">

                                           <!--  Item Header-->
                                           <h3>Mobile</h3>

                                           <!--  Item strips-->
                                           <span></span>


                                           <!--  Item Description-->
                                           <p>Mobile, app view</p>

                                       </div>

                                   </div>

                               </a>

                               </div>

                        </div>

                    </div>



            </section>

            <!-- Portfolio Items Wrapper Ends -->



        </div>

    </section>
    <!--Work Ends -->


    <!--  Testimonials   -->
    <section id="testimonials">


            <div class="container">
                <div class="row">


                    <div class="col-md-3">

                       <div class="vertical-heading">
                           <h5>Who We Are</h5>
                           <h2>What Our<br><strong>Customers</strong> Say</h2>
                       </div>

                    </div>

                    <div class="col-md-9">


                     <div id="testmonial-slider" class="owl-carousel owl-theme">

                        <!--  Testimonials 01  -->
                        <div class="testimonial">
                            <div class="row">

                                <div class="col-md-6">
                                <h3>Quality Support</h3>
                                </div>

                                <div class="col-md-6">
                                   <div class="stars text-right">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                   </div>
                                 </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsum perferendis quaerat quam ab. Natus nemo eos similique minus impedit. Suscipit expedita neque totam omnis. Fugit aliquid nesciunt quia ipsam.</p>


                          <div class="row author">
                              <div class="col-md-2">

                              <img class="img-fluid rounded-circle" src="{{ asset('assets/C_img/clients/client_5.jpg') }}" alt="Customer">

                              </div>
                              <div class="col-md-10">

                                 <div class="author-details">
                                     <p>Full Name</p>
                                     <p>Description</p>
                                 </div>

                              </div>
                          </div>
                        </div>


                         <!--  Testimonials 02  -->
                        <div class="testimonial">
                            <div class="row">

                                <div class="col-md-6">
                                <h3>Quality Support</h3>
                                </div>

                                <div class="col-md-6">
                                   <div class="stars text-right">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                   </div>
                                 </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsum perferendis quaerat quam ab. Natus nemo eos similique minus impedit. Suscipit expedita neque totam omnis. Fugit aliquid nesciunt quia ipsam.</p>


                          <div class="row author">
                              <div class="col-md-2">

                              <img class="img-fluid rounded-circle" src="{{ asset('assets/C_img/clients/client_0.jpg') }}" alt="Customer" style="height: 135px;">

                              </div>
                              <div class="col-md-10">

                                 <div class="author-details">
                                     <p>Full Name</p>
                                     <p>Description</p>
                                 </div>

                              </div>
                          </div>
                        </div>


                         <!--  Testimonials 03  -->
                        <div class="testimonial">
                            <div class="row">

                                <div class="col-md-6">
                                <h3>Quality Support</h3>
                                </div>

                                <div class="col-md-6">
                                   <div class="stars text-right">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                   </div>
                                 </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsum perferendis quaerat quam ab. Natus nemo eos similique minus impedit. Suscipit expedita neque totam omnis. Fugit aliquid nesciunt quia ipsam.</p>


                          <div class="row author">
                              <div class="col-md-2">

                              <img class="img-fluid rounded-circle" src="{{ asset('assets/C_img/clients/client_6.jpg') }}" alt="Customer" style="height: 135px;">

                              </div>
                              <div class="col-md-10">

                                 <div class="author-details">
                                     <p>Full Name</p>
                                     <p>Description</p>
                                 </div>

                              </div>
                          </div>
                        </div>

                         <!--  Testimonials 04  -->
                        <div class="testimonial">
                            <div class="row">

                                <div class="col-md-6">
                                <h3>Quality Support</h3>
                                </div>

                                <div class="col-md-6">
                                   <div class="stars text-right">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                   </div>
                                 </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsum perferendis quaerat quam ab. Natus nemo eos similique minus impedit. Suscipit expedita neque totam omnis. Fugit aliquid nesciunt quia ipsam.</p>


                          <div class="row author">
                              <div class="col-md-2">

                              <img class="img-fluid rounded-circle" src="{{ asset('assets/C_img/clients/client1.jpg') }}" alt="Customer">

                              </div>
                              <div class="col-md-10">

                                 <div class="author-details">
                                     <p>Full Name</p>
                                     <p>Description</p>
                                 </div>

                              </div>
                          </div>
                        </div>

                     </div>

                    </div>

                </div>

            </div>

    </section>
    <!--Testimonials  Ends -->


    <!--Pricing  -->
    <section id="pricing">

        <div class="content-box-md">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                       <div class="horizontal-heading text-center">
                           <h5>Super Customers</h5>
                           <h2>Our Pricing</h2>
                       </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">


                        <!--  Pricing box 01 -->

                    <div class="pricing-box">
                        <div class="type">
                             <h4>Basic</h4>
                        </div>
                          <div class="price">
                            <div class="row">
                                <div class="col-md-4">

                                        <h2><span class="dollar">&#36;</span>25<br><span class="month">Month</span></h2>

                                </div>
                                <div class="col-md-8">
                                        <p>You will get all these special services with this great price. Get It Now!</p>
                                </div>
                            </div>
                          </div>
                        <div>
                            <ul class="package">

                                <li><span><i class="fas fa-hand-point-right"></i></span>Full Access</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Admin Cpanel</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Unlimited Bandwidth</li><span></span>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Email Account</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>24 × 7 Support</li>

                            </ul>

                             <div id="pricing-btn">
                                <a class="btn btn-general btn-yellow" role="button" title="Get Started" href="#about">Get Started</a>
                             </div>
                        </div>
                    </div>



                    </div>
                    <div class="col-md-4">

                       <!--  Pricing box 02 -->

                    <div class="pricing-box black">
                        <div class="type">
                             <h4>Unlimited</h4>
                        </div>
                          <div class="price">
                            <div class="row">
                                <div class="col-md-4">

                                        <h2><span class="dollar">&#36;</span>50<br><span class="month">Month</span></h2>

                                </div>
                                <div class="col-md-8">
                                        <p>You will get all these special services with this great price. Get It Now!</p>
                                </div>
                            </div>
                          </div>
                        <div>
                            <ul class="package">

                                <li><span><i class="fas fa-hand-point-right"></i></span>Full Access</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Admin Cpanel</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Unlimited Bandwidth</li><span></span>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Email Account</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>24 × 7 Support</li>

                            </ul>

                             <div id="pricing-btn">
                                <a class="btn btn-general btn-yellow" role="button" title="Get Started" href="#about">Get Started</a>
                             </div>
                        </div>
                    </div>

                    </div>
                    <div class="col-md-4">
                       <!--  Pricing box 03 -->


                    <div class="pricing-box">
                        <div class="type">
                             <h4>Business</h4>
                        </div>
                          <div class="price">
                            <div class="row">
                                <div class="col-md-4">

                                        <h2><span class="dollar">&#36;</span>75<br><span class="month">Month</span></h2>

                                </div>
                                <div class="col-md-8">
                                        <p>You will get all these special services with this great price. Get It Now!</p>
                                </div>
                            </div>
                          </div>
                        <div>
                            <ul class="package">

                                <li><span><i class="fas fa-hand-point-right"></i></span>Full Access</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Admin Cpanel</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Unlimited Bandwidth</li><span></span>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Email Account</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>24 × 7 Support</li>

                            </ul>

                             <div id="pricing-btn">
                                <a class="btn btn-general btn-yellow" role="button" title="Get Started" href="#about">Get Started</a>
                             </div>
                        </div>
                    </div>


                    </div>

                </div>


            </div>

        </div>

    </section>
    <!--Pricing Ends -->

    <!--Stats    -->
    <section id="stats">

        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                       <div class="vertical-heading">
                           <h5>Fun Facts</h5>
                           <h2>We Deliver<br><strong>Excellent</strong> Services</h2>
                       </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3">

                        <!--Stats Item 01   -->
                        <div class="stats-item text-centr">
                            <span><i class="fas fa-hourglass-half"></i></span>
                            <h3 class="counter">20</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>


                    <div class="col-md-3">

                          <!--Stats Item 02   -->
                        <div class="stats-item text-centr">
                            <span><i class="fas fa-tasks"></i></span>
                            <h3 class="counter">369</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>

                    <div class="col-md-3">

                          <!--Stats Item 03   -->
                        <div class="stats-item text-centr">
                            <span><i class="fas fa-trophy"></i></span>
                            <h3 class="counter">99</h3>
                            <p>Awards Received</p>
                        </div>
                    </div>

                    <div class="col-md-3">

                          <!--Stats Item 04   -->
                        <div class="stats-item text-centr">
                            <span><i class="fas fa-users"></i></span>
                            <h3 class="counter">344</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--Stats Ends -->


    <!--Clients    -->
    <section id="clients">

        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                       <div class="horizontal-heading text-center">
                           <h5>Satisfied Clients</h5>
                           <h2>Our Happy <strong>Clients</strong></h2>
                       </div>


                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div id="clients-list" class="owl-carousel owl-theme">

                            <!--Clients  01  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/custmer_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  02  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1Axis_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  03  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1hdfc_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  04  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1sbi_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  05  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1cub_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                             <!--Clients  06  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1max_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  07  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1yesB_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  08  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1icici_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  09  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/1pizza_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                            <!--Clients  10  -->
                            <div class="client">
                                <img src="{{ asset('assets/C_img/Bg_img/Logos/PNG_logs/kfc_logo.png') }}" class="img-fluid" alt="Client">
                            </div>

                        </div>


                    </div>
                </div>

            </div>

        </div>

    </section>
    <!--Clients Ends -->


    <!--Blog    -->
    <section id="blog">

        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                       <div id="blog-left">
                           <div class="vertical-heading">
                               <h5>Latest News</h5>
                               <h2>Latest<br>From<strong> Blog</strong></h2>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ipsa quasi minima, dolorem aperiam nisi exercitationem commodi perspiciatis, sed excepturi impedit maxime dolorum itaque molestias consectetur ut labore debitis quas.</p>

                           <div id="blog-btn">
                                <a class="btn btn-general btn-yellow" role="button" title="View ALl Posts" href="#about">View All Posts</a>
                            </div>


                       </div>

                    </div>

                    <div class="col-md-8">

                       <div class="row">
                           <div class="col-md-6">

                            <!--Blog post 01   -->
                            <div class="blog-post">
                                <h4>Your Post Title</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex doloribus doloremque repudiandae minus, dolor similique. Atque, inventore.</p>
                                <a href="#">Read More > </a>

                                <div class="post-meta">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><img src="{{ asset('assets/C_img/clients/client_5.jpg') }}" alt="Author" style="width: 200px; height: 200px">  Author Name</p>
                                        </div>

                                        <div class="col-md-6">
                                        <p class="text-right">January 10, 2022</p>
                                        </div>

                                    </div>
                                </div>
                            </div>


                           </div>

                           <div class="col-md-6">

                           <!--Blog post 02   -->
                            <div class="blog-post">
                                <h4>Your Post Title</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex doloribus doloremque repudiandae minus, dolor similique. Atque, inventore.</p>
                                <a href="#">Read More > </a>

                                <div class="post-meta">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><img src="{{ asset('assets/C_img/clients/client4.jpg') }}" alt="Author" style="width: 200px; height: 200px">  Author Name</p>
                                        </div>

                                        <div class="col-md-6">
                                        <p class="text-right">March 10, 2022</p>
                                        </div>

                                    </div>
                                </div>
                            </div>


                           </div>

                       </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--Blog Ends -->


    <!--Contact   -->
    <section id="contact">

                        @if ($message = Session::get('successed'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif

        <div class="content-box-md">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                       <!--Contact Left  -->
                       <div id="contact-left">
                           <div class="vertical-heading">
                               <h5>Who We Are</h5>
                               <h2>Get<br>In<strong> Touch</strong></h2>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio voluptates perferendis neque repellendus provident. Accusamus placeat, aut eos veritatis, aliquid nisi beatae quis tenetur autem obcaecati voluptates ullam, at soluta aliquid nisi beatae quis tenetur autem obcaecati voluptates ullam.</p>
                           <div id="office-addr">
                               <h5>Address Title</h5>
                               <ul class="office-details">
                                   <li><span><i class="fas fa-mobile-alt"></i></span>9999912345</li>
                                   <li><span><i class="fas fa-envelope"></i></span>Support@cw.com</li>
                                   <li><span><i class="fas fa-map-marked-alt"></i></span>Street Address, Hyderabad, Telangana, India, Pin Code: 500001</li>
                               </ul>
                           </div>
                                        <ul class="social-list">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                             <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                        </ul>
                       </div>

                    </div>

                    <div class="col-md-6">
                       <!--Contact Right  -->
                       <div id="contact-right">
                          <h4>Send Message</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia vel pariatur, facilis maiores iste harum, unde tempore ad impedit eveniet perferendis.</p>
                           
                          

                           <form action="{{ url('userdata') }}" method="POST" name="userdata" enctype="multipart/form-data">
                            @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <input type="text" name="username" class="form-control" placeholder="Your Name">
                                        </div>
                                        <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('username')}}</div></span>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <input type="email" name="email" class="form-control" placeholder="Email Address">
                                        </div>
                                        <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('email')}}</div></span>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" minLength="10" maxLength="10" pattern="[7-9]{1}[0-9]{9}">
                                        </div>
                                        <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('mobile')}}</div></span>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <input type="text" name="Companyname" class="form-control" placeholder="Your Company Name">
                                        </div>
                                        <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('Companyname')}}</div></span>

                                    </div>

                                </div>
                                <div class="form-group">
                                   <textarea class="form-control"  name="textmsg" id="msg-text" placeholder="Type message here..."></textarea>
                                </div>
                                <span class="errorstag" style="color:red;text-align:center;"><div class="error">{{$errors->first('textmsg')}}</div></span>

                               <div id="contact-btn">
                                <button id="userbtnstyle" class="btn btn-general btn-yellow" role="button" title="Submit" href="#" name="Usubmitdata" type="submit" style="text-transform: uppercase;letter-spacing: 4px;">Submit <span><i class="fas fa-paper-plane"></i></span> </button>
                               </div>
                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Ends -->


    <!--Map    -->
    <section id="map">

        <div class="content-box-md">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.0461561493103!2d78.47223491459413!3d17.36151188809412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9744e8e8da55%3A0x30df6e48f86a6734!2sCharminar!5e0!3m2!1sen!2sin!4v1643971397668!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Map Ends -->


    <!--Footer    -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2023 All Rights Reserved by <span><a href="#"> CompanyWeb Ltd.</a></span></p>
                </div>
            </div>
        </div>

                                <a id="back-to-top" class="btn btn-general btn-yellow smooth-scroll" role="button" title="Submit" href="#home">
                                <span><i class="fas fa-chevron-circle-up"></i></span>
                                </a>

    </footer>
     <!--Footer Ends -->


    <!--Bootstrap JS-->
    <script src="{{ asset('assets/js/Bootstrap_js/bootstrap.js') }}"></script>

    <!--Owl Carousel-->
    <script src="{{ asset('assets/js/Owl-carousel/owl.carousel.min.js') }}"></script>

    <!--Waypoints JS-->

    <script src="{{ asset('assets/js/Waypoints/jquery.waypoints.min.js') }}"></script>

    <!--Responsive-tabs JS-->
    <script src="{{ asset('assets/js/Responsive-tabs_js/jquery.responsiveTabs.min.js') }}"></script>

    <!--Isotope JS-->
    <script src="{{ asset('assets/js/isotop/isotope.pkgd.min.js') }}"></script>

    <!--Magnific Popup JS-->
    <script src="{{ asset('assets/js/magnific-popup_js/jquery.magnific-popup.min.js') }}"></script>

    <!--Counter JS-->

    <script src="{{ asset('assets/js/counter_js/jquery.counterup.min.js') }}"></script>

    <!--Easing Effect JS-->

    <script src="{{ asset('assets/js/easing/jquery.easing.1.3.js') }}"></script>

    <!-- MenuToggle  Effect JS-->

    <!--Custom JS-->
    <script src="{{ asset('assets/js/myscript.js') }}"></script>

    <!--error message user data submition-->
    <script>
    $(document).ready(function () {
        $(".alert-success").delay(3000).fadeOut("slow");
    });
    </script>

    <!--Side navbar  message user data submition-->
    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous">
    </script>
    
    <!-- custom js -->
    <script>
      var menu_btn = document.querySelector("#menu-btn");
      var sidebar = document.querySelector("#sidebar");
      var container = document.querySelector(".my-container");
      menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
      });
    </script>

  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>


</body>

<div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App :-</h3>
          <p>Download App for Android and iOS mobile phone.</p>
           <div class="app-logo">
             <img src="{{ asset('assets/C_img/Appstore_logo3.png') }}">
             <img src="{{ asset('assets/C_img/Appstore_logo2.png') }}">
           </div>
        </div>
        <div class="footer-col-2">
          <img src="{{ asset('assets/C_img/Web-Development-PNG-Pic.PNG') }}">
          <p>Our purpose is to sustainably make the pleasure and benefits of <strong>WEB</strong> accessible to the many.</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>

          <ul>
            <li>Privacy Policy</li>
            <li>Blog Post</li>
            <li>About Us</li>
            <li>Join Affiliate</li>
          </ul>

        </div>
        <div class="footer-col-4">
          <h3>Follow Us</h3>

          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>

        </div>
      </div>
      <hr><br>
      <p class="copyright" id="copyright">Copyright &copy 2023 - CompanyWeb Ltd. Site</p>
    </div>
  </div>



</html> 
