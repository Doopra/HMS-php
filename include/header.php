<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <h5 class="text-white">Hospital Management System</h5>
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
            <?php
            if(isset($_SESSION['admin'])){
                $user = $_SESSION['admin'];
                echo '<li class="nav-item"><a href="../adminlogin.php" class="nav-link text-white"> '.$user.'</a> </li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-white"> Logout</a> </li>
               ';
            } else{

                echo '<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white"> Admin </a> </li>
                <li class="nav-item"><a href="#" class="nav-link text-white"> Doctor</a> </li>
                <li class="nav-item"><a href="user" class="nav-link text-white"> Patient</a> </li>';
            }
            ?>
        </ul>

    </nav>

</body>
</html