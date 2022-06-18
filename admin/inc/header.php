<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProClinic-Bootstrap4 Hospital Admin</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/green.css" id="style_theme">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- morris charts -->
    <link rel="stylesheet" href="charts/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="css/jquery-jvectormap.css">

    <script src="js/modernizr.min.js"></script>
</head>

<body>
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->

    <div class="wrapper">
        <!-- Page Content -->
        <div id="content">
            <!-- Top Navigation -->
            <div class="container top-brand">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <div class="sidebar-header"> <a href="index.html"><img src="images/oxyjon_logo_square.jpg" class="logo" alt="logo"></a>
                        </div>
                    </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link">
                                <span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target=".proclinic-modal-lg">
                                <span class="ti-search"></span>
                            </a>
                            <div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lorvens">
                                    <div class="modal-content proclinic-box-shadow2">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Search Patient/Doctor:</h5>
                                            <span class="ti-close" data-dismiss="modal" aria-label="Close">
                                            </span>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="search-term" placeholder="Type text here">
                                                    <button type="button" class="btn btn-lorvens proclinic-bg">
                                                        <span class="ti-location-arrow"></span> Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="ti-announcement"></span>
                            </a>
                            <div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
                                <h5>Notifications</h5>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-wheelchair"></span> New Patient Added</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-money"></span> Patient payment done</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-time"></span>Patient Appointment booked</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-wheelchair"></span> New Patient Added</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="ti-user"></span>
                            </a>
                            <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                                <h5>John Willing</h5>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-settings"></span> Settings</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-help-alt"></span> Help</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-power-off"></span> Logout</a>
                            </div>
                        </li>
                    </ul>

                </nav>
            </div>
            <!-- /Top Navigation -->
            <!-- Menu -->
            <div class="container menu-nav">
                <nav class="navbar navbar-expand-lg proclinic-bg text-white">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu text-white"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-home"></span> Dashboard</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../Vertical/index.html">Vertical</a>
                                    <a class="dropdown-item" href="../Vertical-RTL/index.html">Vertical RTL</a>
                                    <a class="dropdown-item" href="index.html">Horizantal</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-wheelchair"></span> Patients</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-patient.html">Add Patient</a>
                                    <a class="dropdown-item" href="patients.html">All Patients</a>
                                    <a class="dropdown-item" href="patient_details.php">Patient Details</a>
                                    <a class="dropdown-item" href="edit-patient.html">Edit Patient</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-user"></span> Doctors</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-doctor.html">Add Doctor</a>
                                    <a class="dropdown-item" href="doctors.html">All Doctors</a>
                                    <a class="dropdown-item" href="about-doctor.html">Doctor Details</a>
                                    <a class="dropdown-item" href="edit-doctor.html">Edit Doctor</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-pencil-alt"></span> Appointments</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-appointment.html">Add Appointment</a>
                                    <a class="dropdown-item" href="appointments.html">All Appointments</a>
                                    <a class="dropdown-item" href="about-appointment.html">Appointment Details</a>
                                    <a class="dropdown-item" href="edit-appointment.html">Edit Appointment</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-money"></span> Payments</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-payment.html">Add Payment</a>
                                    <a class="dropdown-item" href="payments.html">All Payments</a>
                                    <a class="dropdown-item" href="about-payment.html">Payment Invoice</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-key"></span> Room Allotments</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-room.html">Add Room Allotment</a>
                                    <a class="dropdown-item" href="rooms.html">All Rooms</a>
                                    <a class="dropdown-item" href="edit-room.html">Edit Room Allotment</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-layout-tab"></span> UI Kit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="typography.html">Typography</a>
                                    <a class="dropdown-item" href="buttons.html">Buttons</a>
                                    <a class="dropdown-item" href="cards.html">Cards</a>
                                    <a class="dropdown-item" href="tabs.html">Tabs</a>
                                    <a class="dropdown-item" href="accordions.html">Accordions</a>
                                    <a class="dropdown-item" href="modals.html">Modals</a>
                                    <a class="dropdown-item" href="lists.html">Lists &amp; Media Object</a>
                                    <a class="dropdown-item" href="grid.html">Grid</a>
                                    <a class="dropdown-item" href="progress-bars.html">Progress Bars</a>
                                    <a class="dropdown-item" href="notifications-alerts.html">Notifications &amp; Alerts</a>
                                    <a class="dropdown-item" href="pagination.html">Pagination</a>
                                    <a class="dropdown-item" href="carousel.html">Carousel</a>
                                    <a class="dropdown-item" href="tables.html"> Tables</a>
                                    <a class="dropdown-item" href="charts-1.html">Morris</a>
                                    <a class="dropdown-item" href="charts-2.html">Flot</a>
                                    <a class="dropdown-item" href="map-1.html">Google Maps</a>
                                    <a class="dropdown-item" href="map-2.html">Vector Maps</a>
                                    <a class="dropdown-item" href="forms.html">Forms</a>
                                    <a class="dropdown-item" href="font-awesome.html">Font Awesome </a>
                                    <a class="dropdown-item" href="themify.html">Themify</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-file"></span> Other Pages</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="login.html">Login </a>
                                    <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                                    <a class="dropdown-item" href="404.html">404</a>
                                    <a class="dropdown-item" href="blank-page.html">Blank Page</a>
                                    <a class="dropdown-item" href="pricing.html">Pricing</a>
                                    <a class="dropdown-item" href="faq.html">FAQ</a>
                                    <a class="dropdown-item" href="invoice.html">Invoice</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- /Menu -->
            <!-- Breadcrumb -->
            <!-- Page Title -->

            <!-- /Page Title -->
            <!-- /Breadcrumb -->