<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $query = "SELECT * FROM `doctor-records`";
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
                            <a href="doctor.php" class="nav-link active rw-font">DOCTOR</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link rw-font">PATIENT</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link rw-font">APPOINTMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link rw-font">SESSION LOGS</a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary rw-font ms-auto">LOGOUT</button>
                </div>
            </div>
        </nav>

        <div class="doc-title rw-global">
            <h1>DOCTOR PAGE</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="btn-group doc-list" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary doc-insert">Insert</button>
                        <button type="button" class="btn btn-primary doc-delete">Delete</button>
                        <button type="button" class="btn btn-primary doc-display">Display</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3 doc-entry-box">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px">
                    <form action="docEntry.php" method="post" class="doc-entry-form">
                        <div class="form-header">
                            <h4>Data Entry Form</h4>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name">Enter Full Name</label>
                            <input type="text" name="name" id="fullname" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="id">ID number</label>
                            <input type="text" name="id" id="id" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="field">Field</label>
                            <input type="text" name="field" id="field" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Email ID</label>
                            <input type="text" name="email" id="email" class="form-control" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control" />
                        </div>
                        <button class="btn btn-primary" name="submit">Enter Record</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-3 doc-delete-box hidden">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px">
                    <form action="docDelete.php" method="post" class="doc-entry-form">
                        <div class="form-header">
                            <h4>Data Deletion Form</h4>
                        </div>
                        <div class="form-group mb-2">
                            <label for="ID">Enter Doctor's ID</label>
                            <input type="text" name="ID" id="ID" class="form-control" />
                        </div>
                        <button class="btn btn-primary">Delete Record</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container my-4 doc-overflow">
            <div class="row">
                <?php while($row = mysqli_fetch_array($query_result)){?>
                <div class="doc-display-box col-6 hidden" style="background-color: white;">
                    <div class="row pt-3">
                        <div class="col-md-5 offset-md-2">
                            <h4><?php echo $row['Full-Name']?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 offset-md-2">ID:</div>
                        <div class="col-md-2"><?php echo $row['Hospital-ID']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 offset-md-2">Designation:</div>
                        <div class="col-md-2"><?php echo $row['Designation']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 offset-md-2">Email:</div>
                        <div class="col-md-2"><?php echo $row['Email']?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2 offset-md-2">Contact:</div>
                        <div class="col-md-2"><?php echo $row['Contact']?></div>
                    </div>
                </div>
                <?php }?>
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
