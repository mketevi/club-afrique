<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <!--<link href="css/metro-bootstrap-responsive.css" rel="stylesheet">-->
    <link href="css/iconFont.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/github.info.js"></script>

    <title>Club Afrique Telecom Bretagne</title>

    <style>
        .container {
            width: 1040px;
        }
    </style>
</head>
<body class="metro">
    <div class="container">
        <header class="margin20 nrm nlm">
            <div class="clearfix">
                <div class="place-right">
                    <form>
                        <div class="input-control text size6 margin20 nrm">
                            <input type="text" name="q" placeholder="looking for something...">
                            <button class="btn-search"></button>
                        </div>
                    </form>
                </div>
                <a class="place-left" href="#" title="">
                    <h1>Club Afrique</h1>
                </a>
            </div>

            <div class="main-menu-wrapper">
                <ul class="horizontal-menu nlm">
                    <li><a href="#">news</a></li>
                    <li><a href="#">Documents</a></li>
                    <li><a href="#"> Alumnus Section</a></li>
                    <li class="place-right">
                        <a href="#" class="dropdown-toggle">Connect</a>
                        <ul class="dropdown-menu place-right" data-show="hover">
                            <li><a href="#">Subscribe</a></li>
                            <li><a href="#">Connect</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>

		
        <div class="main-content clearfix">
            <div class="tile-area no-padding clearfix">
                <div class="tile-group no-margin no-padding clearfix" style="width: 100%">
                    <div class="tile double quadro-vertical bg-gray ol-transparent" style="float: right; ">
                        <div class="tile-content">
                            <div class="brand">
                                <span class="label fg-white"> chat area </span>
                            </div>
                        </div>
                    </div>

                    <div class="tile quadro double-vertical ol-transparent">
                        <div class="tile-content">
                            <div class="carousel" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
                                <div class="slide">
                                    <img src="images/1.jpg" />
                                </div>
                                <div class="slide">
                                    <img src="images/2.jpg" />
                                </div>
                                <div class="slide">
                                    <img src="images/3.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="tile bg-lightBlue ol-transparent">
                        <div class="tile-content icon">
                            <span class="icon-windows"></span>
                        </div>
                    </div>
                    <div class="tile bg-orange ol-transparent">
                        <div class="tile-content icon">
                            <span class="icon-music"></span>
                        </div>
                    </div>
                    <div class="tile ol-transparent bg-teal">
                        <div class="tile-content icon">
                            <span class="icon-facebook"></span>
                        </div>
                    </div>
                    <div class="tile ol-transparent bg-green">
                        <div class="tile-content icon">
                            <span class="icon-twitter"></span>
                        </div>
                    </div>

                    <div class="tile triple double-vertical ol-transparent bg-white">
                        <div class="tile-content">
                            <div class="panel no-border">
                                <div class="panel-header bg-darkRed fg-white">news</div>
                                <div class="panel-content fg-dark nlp nrp">
                                    <img src="images/jeki_chan.jpg" class="place-left margin10 nlm ntm size2">
                                    <strong>Ce site web</strong> a été conçu par les étudiants du club afrique pour les étudiants du Club Afrique.
									Vous pourrez ici consulter l'annuaire des anciens étudiants du club.
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile triple double-vertical ol-transparent bg-white">
                        <div class="tile-content">
                            <div class="panel no-border">
                                <div class="panel-header bg-pink fg-white">entertainment</div>
                                <div class="panel-content fg-dark nlp nrp">
                                    <img src="images/jek_vorobey.jpg" class="place-left margin10 nlm ntm size2">
                                    <strong> Decouvrons </strong> 
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End first group -->

                <div class="tile-group no-margin no-padding clearfix" style="width: 100%">
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                </div>
<!--
                <div class="tile-group no-margin no-padding1 clearfix" style="width: 100%;">
                    <a href="#"><span class="tile-group-title fg-orange">NEWS <span class="icon-arrow-right-5"></span></span></a>
                    <div class="tile quadro double-vertical ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                </div>

                <div class="tile-group no-margin no-padding1 clearfix" style="width: 100%;">
                    <a href="#"><span class="tile-group-title fg-cobalt">SPORT <span class="icon-arrow-right-5"></span></span></a>
                    <div class="tile quadro double-vertical ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile ol-transparent"></div>
                    <div class="tile double ol-transparent"></div>
                </div>
-->
            </div>
        </div> <!-- End of tiles -->

        <footer>
            <div class="bottom-menu-wrapper">
                <ul class="horizontal-menu compact">
                    <li>&copy;  Designed using 2014 Metro UI CSS</li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#"><img src="./images/icone_loupe_petite.gif" /></a></li>
					
                </ul>
            </div>
        </footer>
    </div>

    <script src="js/hitua.js"></script>

</body>
</html>