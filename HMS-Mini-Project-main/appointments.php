<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $query = "SELECT * FROM `appointments`";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <link href="https://css.gg/arrow-right-r.css" rel="stylesheet" />
        <title>Doctor's Page</title>
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
                            <a href="index.php" class="nav-link rw-font">HOME</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="doctor.php" class="nav-link  rw-font">DOCTOR</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="patient.php" class="nav-link rw-font">PATIENT</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="appointments.php" class="nav-link active rw-font">APPOINTMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="sessions.php" class="nav-link rw-font">SESSION LOGS</a>
                        </li>
                    </ul>
                    <button type="submit" name="submit" class="btn btn-primary rw-font ms-auto"><a href="login.php" style="color: white; text-decoration: none;">LOGOUT</a></button>
                </div>
            </div>
        </nav>

        <div class="doc-title rw-global">
            <h1>APPOINTMENTS PAGE</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="btn-group doc-list" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary doc-insert">Insert</button>
                        <button type="button" class="btn btn-primary doc-delete">Complete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3 doc-entry-box">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px">
                    <form action="appEntry.php" method="post" class="doc-entry-form">
                        <div class="form-header">
                            <h4>Appointment Entry Form</h4>
                        </div>
                        <div class="form-group mb-2">
                            <label for="pid">Patient ID</label>
                            <input type="text" name="pid" id="pid" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="did">Doctor ID</label>
                            <input type="text" name="did" id="did" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="time">Time</label>
                            <input type="text" name="time" id="time" class="form-control" />
                        </div>
                        <button class="btn btn-primary" name="submit">Enter Record</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-3 doc-delete-box hidden">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px">
                    <form action="appComplete.php" method="post" class="doc-entry-form">
                        <div class="form-header">
                            <h4>Status Complete Form</h4>
                        </div>
                        <div class="form-group mb-2">
                            <label for="pid">Enter Patient's ID</label>
                            <input type="text" name="pid" id="pid" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="did">Enter Patient's ID</label>
                            <input type="text" name="did" id="did" class="form-control" />
                        </div>
                        <button class="btn btn-primary">Complete Appointment</button>
                    </form>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        <script async src="script.js"></script>
    </body>
</html>
