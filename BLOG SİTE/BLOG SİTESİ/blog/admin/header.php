<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- suchana/dashboard.php  22 Nov 2019 04:16:31 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suchana is an online blog, news & magazine dedicated to different categories html template">

    <title>BLOGLA-ADMİN</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="../css/default.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="../font/flaticon.php" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="../css/plugin.css" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css">

    <link href="../css/icons.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> MENÜ</a>  

            <div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <a href="index.php"><img src="../images/logo.png" alt="logo"></a>
                </div>
                <div class="content-right pull-right">
                    <div class="search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="profile-sec">
                                <div class="dash-image">
                                    <img src="../images/ADMİNPP.jpeg" alt="">
                                </div>
                                <div class="dash-content">
                                    <h4>SERDAR DİKİLİTAŞ</h4>
                                    <span>ADMİN</span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="#"><i class="sl sl-icon-power"></i>ÇIKIŞ YAP </a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-envelope-open"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                        <h4> 23 Messages</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="../images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="../images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="../images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="all-noti"><a href="#">See all messages</a></p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 599 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="../images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="../images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="../images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <p class="all-noti"><a href="#">See all notifications</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                    <li class="active"><a href="settings.php"><i class="sl sl-icon-settings"></i> Ayarlar</a></li>
                    <li class="active"><a href="Bakimda-ayarları.php"><i class="sl sl-icon-settings"></i> Bakımda Ayarları</a></li>
                   
                        <li><a href="dashboard-my-profile.php"><i class="sl sl-icon-user"></i> DÜZENLE</a></li>
                        <li><a href="dashboard-addtour.php"><i class="sl sl-icon-plus"></i> GÖNDERİ </a></li>
                        <li>
                            <a><i class="sl sl-icon-layers"></i> GÖNDERİ LİSTELEME</a>
                            <ul>
                                <li><a href="dashboard-list.php">Active <span class="nav-tag green">6</span></a></li>
                                <li><a href="dashboard-list.php">Pending <span class="nav-tag yellow">1</span></a></li>
                                <li><a href="dashboard-list.php">Expired <span class="nav-tag red">2</span></a></li>
                            </ul>   
                        </li>
                        <li><a href="dashboard-booking.php"><i class="sl sl-icon-list"></i> Post List</a></li>
                        <li><a href="dashboard-history.php"><i class="sl sl-icon-folder"></i> GEÇMİŞ</a></li>
                        <li><a href="dashboard-reviews.php"><i class="sl sl-icon-star"></i> YORUMLAR</a></li>
                        <li><a href="index.php"><i class="sl sl-icon-power"></i> ÇIKIŞ </a></li>
                    </ul>
                </div>
            </div>