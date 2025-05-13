<style type="text/css">
    .navbar .megamenu {
        padding: 1rem;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {

        .navbar .has-megamenu {
            position: static !important;
        }

        .navbar .megamenu {
            left: 0;
            right: 0;
            width: 905px;
            margin-top: 0;
        }

    }

    @media (max-width: 991px) {
        .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse {
            overflow-y: auto;
            max-height: 90vh;
            margin-top: 10px;
        }
    }
</style>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        })
    });
</script>
<div class="full-width-header header-style1 home1-modifiy">
    <div class="container">
        <div class="row" id="toolbar_banner">
            <div class="col-md-7">
                <div id="google_translate_element"></div>
            </div>
        </div>
    </div>
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        <div class="topbar-area dark-parimary-bg">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-md-7">
                        <ul class="topbar-contact">
                            <li class="btn-part" style="background: #21a7d0;padding-left:35px;padding-right:35px;">
                                <a class="apply-btn" href="https://ccsd.net/contactus/" aria-label="Contact US Link"
                                   style="color:#ffffff !important;">Contact Us</a>
                            </li>


                        </ul>
                    </div>
                    <div class="col-md-5 text-end">
                        <ul class="topbar-right">
                            <li class="login-register">
                                <i class="fa fa-sign-in"></i>
                                <a href="https://ccsd.net/parents/enrollment" target="_blank"
                                   aria-label="Register Link">Register</a>
                            </li>
                            <li class="btn-part">
                                <a class="apply-btn" href="legal-notices.html" target="_self"
                                   aria-label="Legal Notices Link">Legal Notices</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row y-middle">
                    <!-- 	                        <div class="col-lg-1"> -->
                    <div class="col-lg-2">
                        <div class="logo-cat-wrap">
                            <div class="logo-part">
                                <a href="https://ccsd.net/">
                                    <img src="https://ccsd.net/district/backtoschool/assets/images/top_logo.png"
                                         alt="CCSD Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-end">
                        <!--                        <div class="col-lg-8 text-end"> -->
                        <div class="rs-menu-area">
                            <div class="main-menu">

                                <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center"
                                     style="background-color: #ffffff !important;">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#"></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#main_nav" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse float-right" id="main_nav">


                                            <ul class="navbar-nav">
                                                <li class="new-menu active"><a class="nav-link new-menu "
                                                                               href="index.html">Home </a></li>
                                                <li class="nav-item new-menu"><a class="nav-link new-menu "
                                                                                 href="registration.php">Registration</a>
                                                </li>


                                                <li class="nav-item dropdown has-megamenu">
                                                    <a class="nav-link new-menu dropdown-toggle" href="#"
                                                       data-bs-toggle="dropdown">Legal Notices</a>
                                                    <div class="dropdown-menu megamenu" role="menu">
                                                        <div class="row g-3 justify-content-start">
                                                            <div class="col-md-6">
                                                                <div class="col-megamenu">
                                                                    <h6 class="title menu-subtitle">Back to School Legal
                                                                        Notices</h6>
                                                                    <ul class="menu-subnav">
                                                                        <li><a href="legal-notices.html">2024-2025 Legal
                                                                                Notices</a></li>
                                                                </div>  <!-- col-megamenu.// -->
                                                            </div><!-- end col-3 -->
                                                            <div class="col-md-6">
                                                                <div class="col-megamenu">
                                                                    <h6 class="title menu-subtitle">Legal Notices
                                                                        PDFs</h6>
                                                                    <ul class="menu-subnav">
                                                                        <li>
                                                                            <a href="https://ccsd.net/district/backtoschool/assets/pdf/24-25-Back-to-School-Legal-Notices-English.pdf"
                                                                               target="_blank">English <span
                                                                                        style="font-size: 11px;">PDF</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://ccsd.net/district/backtoschool/assets/pdf/24-25-Back-to-School-Legal-Notices-Spanish.pdf"
                                                                               target="_blank">Spanish <span
                                                                                        style="font-size: 11px;">PDF</span></a>
                                                                        </li>
                                                                    </ul>

                                                                </div>  <!-- col-megamenu.// -->
                                                            </div><!-- end col-3 -->


                                                        </div><!-- end row -->
                                                    </div> <!-- dropdown-mega-menu.// -->
                                                </li>


                                                <li class="nav-item dropdown has-megamenu">
                                                    <a class="nav-link new-menu dropdown-toggle"
                                                       href="legal-notices.html" data-bs-toggle="dropdown">Resources</a>

                                                    <div class="dropdown-menu megamenu" role="menu">
                                                        <div class="row g-3 ">

                                                            <div class="col-md-4">
                                                                <div class="col-megamenu">
                                                                    <h6 class="title menu-subtitle">General
                                                                        Information</h6>
                                                                    <ul class="list-unstyled menu-subnav">
                                                                        <li><a href="calendar.html" target="_blank">School
                                                                                Calendars</a></li>
                                                                        <li><a href="useful-numbers.html"
                                                                               target="_blank">Useful Numbers</a></li>
                                                                    </ul>
                                                                </div>  <!-- col-megamenu.// -->
                                                            </div><!-- end col-3 -->


                                                            <div class="col-md-4">
                                                                <div class="col-megamenu">
                                                                    <h6 class="title menu-subtitle">General
                                                                        Resources</h6>
                                                                    <ul class="menu-subnav">
                                                                        <li><a href="community-resources.html"
                                                                               target="_blank">School and Academic
                                                                                Information</a></li>
                                                                        <li><a href="family-resources.html"
                                                                               target="_blank">Family and Community
                                                                                Resources</a></li>
                                                                    </ul>
                                                                </div>  <!-- col-megamenu.// -->
                                                            </div><!-- end col-3 -->


                                                            <div class="col-md-4">
                                                                <div class="col-megamenu">
                                                                    <h6 class="title menu-subtitle">New in
                                                                        2024-2025</h6>
                                                                    <ul class="menu-subnav">
                                                                        <li><a href="signal-blocking.html">Non-Locking,
                                                                                Signal-Blocking Pouches</a></li>
                                                                        <li><a href="weapon-detection.html">Weapons
                                                                                Detection System</a></li>
                                                                        <!-- 										<li><a href="response-protocol.html" >Standard Response Protocol</a></li> -->
                                                                        <li><a href="student-ID.html">Student ID</a>
                                                                        </li>
                                                                        <li><a href="return2play.html">Return to
                                                                                Learn/Return to Play</a></li>
                                                                    </ul>
                                                                </div>  <!-- col-megamenu.// -->
                                                            </div><!-- end col-3 -->


                                                            <li class="nav-item dropdown has-megamenu">
                                                                <a class="nav-link new-menu dropdown-toggle" href="#"
                                                                   data-bs-toggle="dropdown">Important Information</a>
                                                                <div class="dropdown-menu megamenu" role="menu">
                                                                    <div class="row g-3 justify-content-start">
                                                                        <div class="col-md-6">
                                                                            <div class="col-megamenu">
                                                                                <h6 class="title menu-subtitle">General
                                                                                    Information</h6>
                                                                                <ul class="menu-subnav">
                                                                                    <li><a href="food-services.html">Food
                                                                                            Service</a></li>
                                                                                    <li><a href="health.html">Health</a>
                                                                                    </li>
                                                                                    <li><a href="safety.html">Safety</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>  <!-- col-megamenu.// -->
                                                                        </div><!-- end col-3 -->
                                                                        <div class="col-md-6">
                                                                            <div class="col-megamenu">
                                                                                <h6 class="title menu-subtitle">School
                                                                                    Information</h6>
                                                                                <ul class="menu-subnav">
                                                                                    <li>
                                                                                        <a href="learning.html">Learning</a>
                                                                                    </li>
                                                                                    <li><a href="school-choice.html">School
                                                                                            Choice</a></li>
                                                                                    <li>
                                                                                        <a href="https://everyday.ccsd.net/"
                                                                                           target="_blank">Every Day
                                                                                            Matters</a></li>
                                                                                    <li><a href="transportation.html">Transportation</a>
                                                                                    </li>
                                                                                </ul>

                                                                            </div>  <!-- col-megamenu.// -->
                                                                        </div><!-- end col-3 -->


                                                                    </div><!-- end row -->
                                                                </div> <!-- dropdown-mega-menu.// -->
                                                            </li>
                                                            <li class="nav-item dropdown has-megamenu">
                                                                <a class="nav-link new-menu dropdown-toggle"
                                                                   href="legal-notices.html" data-bs-toggle="dropdown">Student
                                                                    Code of Conduct</a>

                                                                <div class="dropdown-menu megamenu" role="menu">
                                                                    <div class="row g-3 ">


                                                                        <div class="col-md-4">
                                                                            <div class="col-megamenu">
                                                                                <h6 class="title menu-subtitle">
                                                                                    2024-2025 Code of Conduct</h6>
                                                                                <ul class="menu-subnav">
                                                                                    <li>
                                                                                        <a href="https://ccsd.net/district/backtoschool/assets/pdf/PUB-776-CCSD.Code-Conduct-0824-ENG.pdf"
                                                                                           target="_blank">English <span
                                                                                                    style="font-size: 11px;">PDF</span></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://ccsd.net/district/backtoschool/assets/pdf/PUB-776-CCSD.Code-Conduct-0824-SPA.pdf"
                                                                                           target="_blank">Spanish <span
                                                                                                    style="font-size: 11px;">PDF</span></a>
                                                                                    </li>


                                                                                </ul>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </li>

                                            </ul>


                                        </div> <!-- navbar-collapse.// -->
                                    </div> <!-- container-fluid.// -->
                                </nav>


                            </div> <!-- //.main-menu -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Menu start -->

        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->


