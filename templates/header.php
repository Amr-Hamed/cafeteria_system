<?php  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ITI Cafetria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/custom.sass">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/_variables.scss">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ITI Cafetria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Users</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#">Manual Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Checks</a>
                </li>
            </ul>
            <div class="user-profile">
                <ul class="nav navbar-nav navbar-right profile-pic" style="padding-left: 68%">
                    <li>
                        <div class="inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </li>
                </ul>

                <div class="pull-right " style="padding-left: 2%">
                    <ul class="nav pull-right user-name" >
                        <li class="dropdown navbar-text"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<!-- </body>

</html>   -->