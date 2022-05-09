<?php
    $con = mysqli_connect("localhost", "root", "", "hospital") or die(mysqli_error($con));
    $query = "SELECT * FROM `sessions`";
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
                            <a href="doctor.php" class="nav-link rw-font">DOCTOR</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="patient.php" class="nav-link rw-font">PATIENT</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="appointments.php" class="nav-link rw-font">APPOINTMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="sessions.php" class="nav-link active rw-font">SESSION LOGS</a>
                        </li>
                    </ul>
                    <button type="submit" name="submit" class="btn btn-primary rw-font ms-auto"><a href="login.php" style="color: white; text-decoration: none;">LOGOUT</a></button>
                </div>
            </div>
        </nav>

        <div class="container my-5">
            <div class="row">
                <div class="col-sm-12">
                <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">Patient's Name</th>
                    <th scope="col">Doctor ID</th>
                    <th scope="col">Doctor's Name</th>
                    <th scope="col">Field</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0 ;while($row = mysqli_fetch_array($query_result)){?>
                    <tr>
                        <th scope="row"><?php echo ++$i?></th>
                        <td><?php echo $row['pid']?></td>
                        <td><?php echo $row['pname']?></td>
                        <td><?php echo $row['did']?></td>
                        <td><?php echo $row['dname']?></td>
                        <td><?php echo $row['field']?></td>
                        <td><?php echo $row['time']?></td>
                        <td class="status"><?php echo $row['status']?></td>
                    </tr>
                    <?php }?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        <script>
            const statusRow = document.querySelectorAll('status').innerText
            if (statusRow == 'complete') {
                document.querySelector('status').style.color = 'green'
            }
        </script>
    </body>
</html>
