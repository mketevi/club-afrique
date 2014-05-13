<!DOCTYPE html>
<?php

define("INCLUDE_CHECK", true);
require "./functions.php";
authenticate();
?>
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
	<div class="tile-area tile-area-light" style="width: 1774px; height:860px;padding-top:0px;">
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
                <a class="place-left" href="./" title="">
                    <h1>Club Afrique</h1>
                </a>
            </div>
			    <nav class="navigation-bar" style="height: 35px;">
					<nav class="navigation-bar-content" style="height: 50px;">
						<div class="element">
						<a class=" element button" href="./">
							<button class=" element button" ><span class="icon-arrow-left-3"></span></button>
						</a>
						</div>
						<span class="element-divider"></span>
						<div class="element">
							<button class=" element button">News</button>
						</div>
						<span class="element-divider"></span>
						<div class="element">
							<button class=" element button">AITB for Afrique</button>
						</div>
						<span class="element-divider"></span>
					</nav>
				</nav>
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
							<?php ParcourirLesImagesDuReperoire("./photo/")?>
                            </div>
                        </div>
                    </div>
					
                    <a href ="https://www.facebook.com/groups/africatb/"><div class="tile bg-lightBlue ol-transparent">
                        <div class="tile-content icon">
                            <span class="icon-facebook"></span>
                        </div>
                    </div></a>
					<a href ="./camera/demo/start_screen.php">
                    <div class="tile bg-red ol-transparent">
                        <div class="tile-content icon">
                            <span class="icon-image"></span>
                        </div>
                    </div>
					</a>
                    <div class="tile ol-transparent bg-teal">
                        <div class="tile-content icon">
                            <span class="icon-folder"></span>
                        </div>
                    </div>
                    <div class="tile ol-transparent bg-green">
                        <div class="tile-content icon">
                            <span class="icon-link"></span>
                        </div>
                    </div>

                    <div class="tile triple double-vertical ol-transparent bg-white">
                        <div class="tile-content">
                            <div class="panel no-border">
                                <div class="panel-header bg-darkRed fg-white">our graduates</div>
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
                                <div class="panel-header bg-pink fg-white">Newcomer to TB / Brest</div>
                                <div class="panel-content fg-dark nlp nrp">
                                    <img src="images/jek_vorobey.jpg" class="place-left margin10 nlm ntm size2">
                                    <strong> Contact us </strong> 
									
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
		</div>
        </div> <!-- End of tiles -->
		<nav class="navigation-bar bottom" style="height: 35px;">
					<nav class="navigation-bar-content" style="height: 50px;">
						<div class="element">
							<button class=" element button">Designed using Metro UI CSS 2.0</button>
						</div>
						<span class="element-divider"></span>
						<div class="element">
							<button class=" element button">Contact the administrator</button>
						</div>
						<span class="element-divider"></span>
						
						<span class="element-divider"></span>

						<div class="element place-right">
							 <span class="icon-comments"></span>
						</div>
					</nav>
			</nav>
		</nav>
    </div>
	</div>
    <script src="js/hitua.js"></script>

</body>
</html>