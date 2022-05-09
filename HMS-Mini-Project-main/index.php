<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://css.gg/arrow-right-r.css" rel="stylesheet" />
        <title>Hello, world!</title>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md bg-success">
            <div class="container">
                <a href="#" class="navbar-brand brand-width" style="color: white">WEBSITE NAME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Navbar Menu List-->
                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-3">
                            <a href="index.php" class="nav-link active rw-font">HOME</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="doctor.php" class="nav-link rw-font">DOCTOR</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="patient.php" class="nav-link rw-font">PATIENT</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="appointments.php" class="nav-link rw-font">APPOINTMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="sessions.php" class="nav-link rw-font">SESSION LOGS</a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary rw-font ms-auto"><a href="login.php" style="color: white; text-decoration: none;">LOGOUT</a></button>
                </div>
            </div>
        </nav>
        <div class="container my-4">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="overlay-image" style="background-image: url('image1.jpg')"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1 carousel-textbox">
                                    <h1>Go Digital!</h1>
                                    <h3>Fast and Efficient way to manage the Hospital records, in one place.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay-image" style="background-image: url('image2.jpg')"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1 carousel-textbox" style="background-color: rgba(4, 97, 4, 0.747)">
                                    <h1>Make it work for YOU!</h1>
                                    <h3>YOU control this system. YOU get all the benefits</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay-image" style="background-image: url('image3.jpg')"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1 carousel-textbox" style="background-color: rgba(165, 4, 4, 0.63)">
                                    <h1>Privacy advantage!</h1>
                                    <h3>Password protected work space for each and every individual.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card" style="width: 100%; color: white; background: rgb(50,42,185);
                    background: linear-gradient(90deg, rgba(50,42,185,1) 0%, rgba(8,115,149,1) 100%);">
                        <div class="card-body">
                            <h5 class="card-title">Doctor</h5>
                            <h6 class="card-subtitle mb-2 text-muted">records</h6>
                            <p class="card-text">
                                Click on the link below to go to access the Doctors records. It consists of details of all doctors from the Database.
                            </p>
                            <a href="doctor.php" style="text-decoration: none; color: white;" class="card-link">Take me there <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card" style="width: 100%; color: white; background: rgb(27,111,5);
                    background: linear-gradient(90deg, rgba(27,111,5,1) 0%, rgba(4,204,128,1) 100%);">
                        <div class="card-body">
                            <h5 class="card-title">Patient</h5>
                            <h6 class="card-subtitle mb-2 text-muted">records</h6>
                            <p class="card-text">
                                Click on the link below to go to access the Patient records. It consists of details of all patients from the Database.
                            </p>
                            <a href="patient.php" style="text-decoration: none; color: white;" class="card-link">Take me there <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card" style="width: 100%; color: white; background: rgb(172,9,9);
                    background: linear-gradient(90deg, rgba(172,9,9,1) 0%, rgba(236,115,115,1) 100%);">
                        <div class="card-body">
                            <h5 class="card-title">Appointment</h5>
                            <h6 class="card-subtitle mb-2 text-muted">records</h6>
                            <p class="card-text">
                                Click on the link below to go to access the Appointment records. It consists of details of all appointments registered
                                in the Database.
                            </p>
                            <a href="appointments.php" style="text-decoration: none; color: white;" class="card-link">Take me there <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card" style="width: 100%; color: white; background: rgb(72,4,111);
                    background: linear-gradient(90deg, rgba(72,4,111,1) 0%, rgba(148,11,181,1) 100%);">
                        <div class="card-body">
                            <h5 class="card-title">Session</h5>
                            <h6 class="card-subtitle mb-2 text-muted">logs</h6>
                            <p class="card-text">
                                Click on the link below to go to access the Session Logs. It consists of details of all session details that have been
                                registered in the database.
                            </p>
                            <a href="sessions.php" style="text-decoration: none; color: white;" class="card-link">Take me there <i class="bi bi-chevron-double-right"></i></a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <center>
                    <p>Mail Us: am6666@srmist.edu.in     |      Call Us: 1234567890      |      Follow Us: https://github.com/adithyamenon007/Hospital-Management-System</p>
                </center>
            </div>
        </footer>
        <!--Bootstrap scripts-->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        <script str="script.js"></script>
    </body>
</html>
