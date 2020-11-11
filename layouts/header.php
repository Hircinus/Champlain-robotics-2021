<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/style.css" type="text/css">
        <link rel="icon" type="image/png" href="/2020/assets/favicon.png">
		<meta charset="UTF-8">
		<meta name="description" content="CRHS joins robotics in this year's 2020 CRC robotics competition! This year's theme is ESPN,
		so check it out!">
		<meta name="keywords" content="CRHS, CRC, Robotics, CRC Robotics, south shore robotics, robotics south shore">
		<meta name="author" content="Jacob-Mahmoud Alfahad">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <ul class="nav justify-content-center navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
    </ul>
    <nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-pills nav-fill mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($title=="Home - 2021") { echo 'active'; } else { echo ''; } ?>" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($title=="About - 2021") { echo 'active'; } else { echo ''; } ?>" href="about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
        </div>
    </nav>
