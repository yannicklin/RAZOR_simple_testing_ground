<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Header for Yannick Lin's PlayGround">
    <meta name="author" content="Yannick Lin">

    <title>:Yannick's PlayGround::<?php isset($PageTitle) ? $PageTitle : "" ?></title>

    <link rel="icon" href="lightbox-ico-loading.gif" type="image/x-icon"/>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="custom.css<?php echo '?'.mt_rand(); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }
    ?>
</head>
<!-- NAVBAR -->
<body>
    <div class="navbar-wrapper">
        <div class="container">

            <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="http://yannicklin.net/razor/">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">GitHub<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="GitHub-bootstrap-player.php">BootStrap Player</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">D3 Series<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="D3.php">Normal</a></li>
                                    <li><a href="D3-CSV.php">CSV as DataSource</a></li>
                                    <li><a href="D3-Special.php">Special Animation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">HighChart Series<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="HC.php">High Chart</a></li>
                                    <li><a href="HS.php">High Stock</a></li>
                                </ul>
                            </li>
                            <li><a href="ThreeJS-2017.php">Three JS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">