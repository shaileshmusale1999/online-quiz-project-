<?php

//header.php

include('Examination.php');

$exam = new Examination;

$exam->admin_session_private();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>IMCA Quiz | Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="../images/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/bootstrap-datetimepicker.css" />
    <script src="../style/bootstrap-datetimepicker.js"></script>
</head>

<body>
    <!--     
    <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
  		<img src="../images/admin.png" class="img-fluid" width="100%" alt="admin logo" />
	</div>
    -->
    
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <a class="navbar-brand" href="index.php"><b>Home</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="exam.php"><b>Quizzes</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php"><b>Students</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><b>Logout</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid"></div>
</body>
</html>