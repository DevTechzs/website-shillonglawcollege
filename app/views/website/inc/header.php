<!doctype html>
<html>

<style>
    #gallery a {
        width: 200px !important;
        height: 200px !important;
        vertical-align: middle !important;
        text-decoration: none !important;
    }

    #gallery a img {
        width: inherit !important;
        height: auto !important;
        margin: 3px 3px 3px 1px !important;
        padding: 2px 2px 2px 2px !important;
        background-color: #cf2c48 !important;
    }

    :root {
        --microtip-transition-duration: 0.2s;
        --microtip-transition-delay: 0s;
        --microtip-transition-easing: ease-in-out;
        --microtip-font-size: 14px;
        --microtip-font-weight: none;
        --microtip-text-transform: none;
    }
</style>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo $title; ?></title>

    <link rel="icon" type="image/x-icon" href="assets/images/Shillong_Logo.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <title>Shillong Law College</title> -->

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/css/stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layerslider.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <script type="text/javascript" src="https://fullcalendar.io/releases/core/4.0.2/main.min.js"></script>
    <script type="text/javascript" src="https://fullcalendar.io/releases/daygrid/4.0.1/main.min.js"></script>
    <script type="text/javascript" src="https://fullcalendar.io/releases/list/4.0.1/main.min.js"></script>
    <script type="text/javascript" src="https://fullcalendar.io/releases/google-calendar/4.0.1/main.min.js"></script>

    <link href="https://fullcalendar.io/releases/core/4.0.2/main.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fullcalendar.io/releases/daygrid/4.0.1/main.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fullcalendar.io/releases/list/4.0.1/main.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/w3-side-menu.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="assets/js-menu/bootnavbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.min.css" integrity="sha512-CJ5goVzT/8VLx0FE2KJwDxA7C6gVMkIGKDx31a84D7P4V3lOVJlGUhC2mEqmMHOFotYv4O0nqAOD0sEzsaLMBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome StyleSheet CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">

    <!-- LightGallery -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lightgallery.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-autoplay.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-comments.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-fullscreen.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-medium-zoom.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-pager.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-relative-caption.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-rotate.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-share.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-thumbnail.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-transitions.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-video.css" />
    <link type="text/css" rel="stylesheet" href="assets/admin/plugins/lg/css/lg-zoom.css" /> -->
    <!-- <script src="assets/admin/plugins/lg/js/lightgallery.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-autoplay.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-comment.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-fullscreen.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-hash.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-medium-zoom.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-pager.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-relative-caption.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-rotate.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-share.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-thumbnail.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-video.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-vimeo-thumbnail.min.js"></script>
    <script src="assets/admin/plugins/lg/js/lg-zoom.min.js"></script> -->
    <style>
        .heading:hover {
            cursor: pointer;
        }
    </style>
    <!-- Tooltip -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/microtip/microtip.css" />

</head>

<body>
    <!--Wrapper Start-->
    <div id="wrapper" class="container">
        <div id="page">

            <!--Header Start-->
            <div id="header">
                <div class="logobanner"><a href="home"><img src="assets/images/banner-new-one.png" alt="" /></a></div>


                <!--Menu Start-->
                <div class="menus-part">


                    <div class="menus">

                        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
                            <a class="navbar-brand" href="#"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li> <a class="dropdown-item" href="principal-message"> Principal Message </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="founders"> Founders </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="history"> History </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="https://drive.google.com/file/d/1ORjooJBIAzljFwTBngPChqLw2B0oCgHN/view?usp=share_link"> Management </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="college-profile"> Profile of the College </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="vision"> Vision, Mission and Goals </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="anthemflagemblem"> College Anthem, Flag & Emblem </a></li>
                                        </ul>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Administration
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="https://drive.google.com/file/d/1ORjooJBIAzljFwTBngPChqLw2B0oCgHN/view?usp=share_link"> Governing Body </a></li> <!--governing-body -->
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="principals"> Principals </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Staff
                                                </a>
                                                <ul class="dropdown-menu sub" aria-labelledby="navbarDropdown1">
                                                    <li><a class="dropdown-item" href="teachingstafflaw">Teaching Staff (Law)</a></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="teachingstaffnonlaw">Teaching Staff (Non-Law)</a></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="nonteachingstaff">Non-Teaching Staff</a></li>
                                                </ul>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="file?type=documents&name=ad_constitution.pdf" target="_blank" title="THE CONSTITUTION OF THE SHILLONG LAW COLLEGE">Constitution</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="file?type=documents&name=ad_ews.pdf" target="_blank" title="SHILLONG LAW COLLEGE EMPLOYEES' WELFARE SCHEME, 2009">Employees Welfare Scheme</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="file?type=documents&name=ad_delegation.pdf" target="_blank" title="Delegation of Administrative, Executive Powers and Financial Powers, 2009">Delegation 2009</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service Rules 2009</a>
                                                <ul class="dropdown-menu sub" aria-labelledby="navbarDropdown1">
                                                    <li><a class="dropdown-item" href="file?type=documents&name=ad_srts.pdf" target="_blank" title="Shillong Law College Employees' (Teaching Faculties) Service Rules, 2009">Teaching Staff</a></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="file?type=documents&name=ad_srnts.pdf" target="_blank" title="Shillong Law College Employees' (Non-Teaching Staff) Service Rules, 2009">Non-Teaching Staff</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


                                    <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Campus
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li> <a class="dropdown-item" href="governing-body"> Governing Body </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="library"> Library </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="computer-lab"> Computer Lab </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="moot-court"> Moot Court </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="legal-service-aid"> Legal Care &amp; Support Centre </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="common-room"> Men and Women Commons Room </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="faculties-chamber"> Faculties' Chamber </a></li>
                        <div class="dropdown-divider"></div>
                        <li> <a class="dropdown-item" href="ugc-career-council"> UGC Career Counselling </a></li>
                        
                         <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Student Services
                                </a>
                                <ul class="dropdown-menu sub" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="internship">Internship</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="nss">National Service Scheme (NSS)</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="sba">Student Bar Association</a></li>    
                                    </ul>
                                </li>
                                   
                                </ul>
                </li>-->


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Research
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li> <a class="dropdown-item" href="publications"> Publications </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="conferences"> Conferences & Proceedings </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="journals"> Journal </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li> <a class="dropdown-item" href="magazines"> Magazine </a></li>


                                        </ul>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            IQAC
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="iqac-emblem"> Emblem </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="iqac-genesis"> Genesis </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="iqac-committee"> IQAC Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="iqac-meeting"> Meeting & Proceedings </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="iqac-report"> Annual Report </a></li>
                                            <div class="dropdown-divider"></div>
                                            <!-- <li><a class="dropdown-item" href="iqac-ssr"> SSR </a></li>
                                            <div class="dropdown-divider"></div> -->
                                            <li><a class="dropdown-item" href="iqac-aqar"> AQAR </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="iqac-activities"> Activities </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="iqac-contact"> Contact Us </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            NAAC
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="file?type=documents&name=ssr1stcycle.pdf"> SSR</a></li>
                                            <li><a class="dropdown-item" href="iqac-naacvisit2022"> NAAC Visit ,(Day 1 & Day 2) Pictures & Videos </a></li>

                                            <div class="dropdown-divider"></div>

                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Committee/Cell
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="academic-committee"> Academic Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="alumini-committee"> Alumini Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="anti-ragging-cell"> Anti-Raging Cell</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="cultural-committee"> Cultural Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="environmental-committee"> Environmental Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="equal-opportunity-cell"> Equal Opportunity Cell </a></li>
                                            <div class="dropdown-divider"></div>
                                            <!-- <li><a class="dropdown-item" href="greviance-redressal-cell"> Grievance Redressal Cell </a></li>
                                            <div class="dropdown-divider"></div> -->
                                            <li><a class="dropdown-item" href="red-cross-committee"> Red Cross Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="research-publication-seminar-cell"> Research, Publication and Seminar Cell </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="sexual-harassment-prevention-cell"> Sexual Harassment and Prevention Cell </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="sports-committee"> Sports Committee </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="students-counselling-cell"> Students Counselling Cell </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="women-cell"> Women Cell </a></li>
                                        </ul>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Student Data
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="student-batchwise"> Student Batch-Wise </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="student-results"> Student Results </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="https://forms.gle/GzuQbaqJ5RUcMtbGA" target="_blank" title="CLICK TO FILL THE FEEDBACK FORM">Feedback</a></li>


                                        </ul>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Alumni
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <!-- <li><a class="dropdown-item" href="alumni-member"> Members of the Alumini </a></li>
                                            <div class="dropdown-divider"></div> -->
                                            <li><a class="dropdown-item" href="alumni-advisory"> SLCAA Committee </a></li> <!--href="alumni-advisory" -->
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="alumni-conclave"> Alumini Conclave </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="alumni-testimonial"> Testimonials </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="file?type=documents&name=al_directory.pdf" target="_blank" title="CLICK TO SEE CONTENT"> Alumini Directory </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="https://forms.gle/CTDe4qeEEi5mupPp7" target="_blank"> Registration </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="https://forms.gle/zAE6SJMTWxa7bhfR6" target="_blank"> Feedback </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="alumni-gallery"> Alumini Gallery </a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="alumni-contact"> Contact Us </a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="legal-care-support-centre">Legal Care & Support Centre</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            NIRF
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" target="_blank" href="https://drive.google.com/file/d/1vavYQaJfNLor0aiuEuJ5TDNC-6tZ5v-1/view"> NIRF 2023 </a></li>
                                            <li><a class="dropdown-item" target="_blank" href="assets/webpdf/2024/The shillong Law College20231209- data NIRF 2024.pdf"> NIRF 2024 </a></li>
                                            <li><a class="dropdown-item" target="_blank" href="assets/webpdf/2025/The shillong Law College20241213- (1) nirf 2025.pdf"> NIRF 2025 </a></li>

                                        </ul>

                                    </li>





                                    <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <div class="dropdown-divider"></div>
                        <li></li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li></li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Left Dropdown
                                        </a>
                                        <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li></li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </li>-->

                                </ul>
                            </div>
                        </nav>

                    </div>

                    <!--Apply Now Part Start-->
                    <!--<div class="apply"><a href="#"><img src="images/apply-now-buttion.png" width="280" height="60" alt="" /></a></div>-->
                    <!--Apply Now Part End-->

                </div>
                <!--Menu End-->

                <div class="ticker-wrapper-h">
                    <div class="heading" data-toggle="modal" data-target="#mdlNews">Updates & Upcoming Events</div>
                    <marquee direction="left" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" style="padding-top:7px;">
                        <!-- <ul class="news-ticker-h"></ul> -->
                        <span id="div_news2" data-toggle="modal" data-target="#mdlNews">Loading...</span>
                    </marquee>

                </div>

            </div>
        </div>
    </div>