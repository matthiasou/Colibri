<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact || MIRAMAP</title>
    <!-- All css Files Here -->
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500' rel='stylesheet' type='text/css'>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!-- revolution banner css settings -->
    <link rel="stylesheet" type="text/css" href="lib/rs-plugin/css/settings.css" media="screen"/>
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- mobilemenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css"/>
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<!-- Header-Section-Strat  -->
<header>
    <div class="container">
        <div class="header_top">
            <div class="row">
                <div class="col-md-6">
                    <div class="header_top_left float-left">
                        <ul class="social_icon">
                            <li><a href="https://www.facebook.com/profile.php?id=100010052358058&fref=ts"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <ul class="social_others">
                            <li><a><i class="fa fa-phone"></i>04 81 91 60 51</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>contact@miramap.org</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header_top_right text-right">
                        <ul>
                            <li><a href="#">Mon Compte</a></li>
                            <li><a href="#">S'enregister / Connexion</a></li>
                            <li class="searchbox">
                                <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                                       onkeyup="buttonUp();" required>
                                <input type="submit" class="searchbox-submit" value="">
                                <span class="searchbox-icon"><i class="fa fa-search"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mega_relative">
            <div class="col-xs-12 col-sm-2">
                <div class="logo head_lo">
                    <a href="index.php"><img src="images/logo.png" alt="Logo"/></a>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="mainmenu float-right">
                    <nav>
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="produits.php">Les Produits</i></a></li>
                            <li><a href="magasins.php">Les Magasins</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            <li class="shop_icon">
                                <a href="#"><img src="images/menu_icon_img.png" alt=""/></a>
                                <span>10</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="mobile-menu">
            <nav id="dropdown">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Les produits</a></li>
                    <li><a href="#">Les Magasins</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
<!-- Header-Section-End  -->




<div class="contact_us section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact_us">
                    <h4>Envoyer un message</h4>
                    <form class="form-horizontal" id="mess_form">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputName" placeholder="Nom">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="@">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail2" placeholder="Tel">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputSubject" placeholder="Objet">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Message" rows="9"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class=" shop_now_btn btn btn-default hvr-bounce-to-left">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address_text">
                    <div class="single_address">
                        <br><br><p><span>Tel</span></p>
                        <p>04 81 91 60 51</p>
                    </div>
                    <div class="single_address">
                        <p><span>Email</span></p>
                        <p>contact@miramap.org</p>
                    </div>
                    <div class="single_address">
                        <p><span>Address:</span></p>
                        <p>MIRAMAP</p>
                        <p>58 rue Rauli,</p>
                        <p>69007 Lyon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Footer-Section-Start -->
<footer>
    <div class="footer_middel footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="footer_link address">
                        <p>MIRAMAP</p>
                        <ul>
                            <li><span>Adresse: </span> 58 rue Raulin - 69007 Lyon</li>
                            <li><span>Telephone: </span>04 81 91 60 51</li>
                            <li><span>Email: </span>contact@miramap.fr</li>
                        </ul>
                    </div>
                    <div class="footer_icon">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100010052358058&fref=ts"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="footer_link">
                        <p>Compte </p>
                        <ul>
                            <li><a href="#">Mon compte</a></li>
                            <li><a href="cart.html">Panier</a></li>
                            <li><a href="#">Achats</a></li>
                            <li><a href="#">Code promo</a></li>
                            <li><a href="#">Informations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="footer_link res_mar">
                        <p>Support</p>
                        <ul>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="footer_link res_mar">
                        <p>information</p>
                        <ul>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                            <li><a href="#">Test</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>Copyright 2015 <a href="http://designscrazed.org/">Miramap</a> All rights reserved</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="copyright_icon text-right">
                        <a href="#"><img src="images/footer/paypal-1.png" alt=""/></a>
                        <a href="#"><img src="images/footer/paypal-2.png" alt=""/></a>
                        <a href="#"><img src="images/footer/paypal-3.png" alt=""/></a>
                        <a href="#"><img src="images/footer/paypal-4.png" alt=""/></a>
                        <a href="#"><img src="images/footer/paypal-5.png" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-Section-End -->



<!-- All js Files Here -->
<!-- jquery-1.11.3 -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- revolution js -->
<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="lib/rs-plugin/rs.home.js"></script>
<!-- search-box js -->
<script src="js/search-box.js"></script>
<!-- scrollUp js -->
<script src="js/jquery.scrollUp.js"></script>
<!-- mobilemenu js -->
<script src="js/jquery.meanmenu.js"></script>

<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>