<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Generation 5.0 | Bienvenue</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/slick/slick.css" rel="stylesheet">
    <link href="css/plugins/slick/slick-theme.css" rel="stylesheet">


    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <script src="js/plugins/pdfjs/pdf.js"></script>


</head>

<body class="fixed-sidebar">

    <div id="wrapper">
        <!-- https://cssduotone.com/ -->
        <!-- HTML Markup -->

        <!-- You should think of `img-wrapper` as the image itself. This element is what you should target for sizing/styling. -->
        <div class="img-wrapper">
            <!-- The `::before` pseudo-element will apear here in the Broweser(DOM) and in web-inspector. -->
            <img class="brown hidden" src="css/patterns/backgroud-style-brown-fablab-g-5.jpg" alt="Parcours">
            <img class="default white hidden" src="css/patterns/backgroud-style-white-fablab-g-5.jpg" alt="Plateforme">
        </div>

        <nav class="navbar-default navbar-static-side bg-nav" role="navigation">
            <div class="sidebar-collapse">
                <div class="logo m-b-lg m-t-lg text-center">
                    <!-- <img src="img/logo-g5-white-300.png" width="100%"> -->
                    <a href="#accelerEmploi" data-content="acceler-emploi">
                        <img src="img/logo-fablab-generation-5.png" alt="FabLab Generation 5">
                    </a>
                </div>
                <ul class="nav metismenu" id="side-menu">
                    <li>
                        <!-- <div class="dropdown profile-element">

                            <span id="photoProfil">
                                <img data-toggle="modal" data-target="#myModal" alt="Cliquez et ajoutez une photo"
                                    class="rounded-circle" style="height:72px" src="img/profile_small-123x.jpg"
                                    onclick="xajax_afficheModifPhoto();">
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">J. Mari</span>
                                <span class="text-muted text-xs block">Mon compte <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="infos.html">Mes infos</a></li>
                                <li><a class="dropdown-item" href="login.html">Se deconnecter</a></li>
                            </ul>
                        </div> -->

                        <div class="logo-element">
                            <img src="img/logo-g5-white-simple-99x.png" height="48px" width="48px" alt="Generation 5">
                        </div>
                    </li>

                    <li>
                        <a href="_#"><i class="fa fa-user"></i> <span class="nav-label">Mon espace</span> <span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#tableauDeBord" data-content="tableau-de-bord"><i
                                        class="fa fa-compass"></i><span class="nav-label"></span>Tableau de
                                    Bord</span></a></li>
                            <li><a href="#monAgenda" data-content="mon-agenda"><i
                                        class="fa fa-calendar"></i><span class="nav-label"></span>Mon
                                    agenda</span></a></li>
                            <li>
                                <a href="#mesDocuments" data-content="mes-documents"><i class="fa fa-folder-open-o"></i>
                                    <span class="nav-label">Mes documents</span><span
                                        class="label-circle animated shake">2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#MonParcours" data-content="mon-parcours"><i class="fa fa-line-chart"></i> <span
                                class="nav-label">Mon
                                Parcours</span> </a>

                    </li>
                    <li>
                        <a href="_#"><i class="fa fa-pencil"></i> <span class="nav-label">Evaluation</span> <span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#SoftSkills" data-content="softskills"><i
                                        class="fa fa-tachometer"></i><span
                                        class="nav-label"></span>SoftSkills</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="_#"><i class="fa fa-retweet"></i> <span class="nav-label">
                                Recommencer</span> </a>
                    </li>
                    <!-- <li>
                        <a href="#monAgenda" data-content="mon-agenda"><i class="fa fa-calendar"></i> <span
                                class="nav-label">
                                Mon Agenda</span><span class="label-circle animated shake">1</span></a>
                    </li> -->
                    <li>
                        <a href="#Actualites" data-content="actualites"><i class="fa fa-newspaper-o"></i> <span
                                class="nav-label">
                                Actualit??s</span> </a>
                    </li>
                    <li>
                        <a href="_#"><i class="fa fa-address-book"></i> <span class="nav-label">
                                Entreprises</span> </a>
                    </li>
                    <li>
                        <a href="_#"><i class="fa fa-star"></i> <span class="nav-label">
                                Avis</span> </a>
                    </li>
                    <li>
                        <a href="_#"><i class="fa fa-comments"></i> <span class="nav-label">
                                Communaut??</span> </a>
                    </li>
                    <li>
                        <a href="_#"><i class="fa fa-rocket"></i> <span class="nav-label">
                                Soft Skills</span> </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper">

            <div class="row">

                <nav class="navbar navbar-static-top" role="navigation"
                    style="margin-bottom: 0; background-color: transparent;">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>

                        <!-- <form role="search" class="navbar-form-custom" method="post" action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Rechercher ..." class="form-control" name="top-search"
                                    id="top-search">
                            </div>
                        </form> -->
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="_#" data-toggle="dropdown" title="Tableau de Bord">
                                <i class="fa fa-user"></i>
                                <span class="label-circle animated shake">3</span>
                            </a>
                              <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="block m-t-xs font-bold">J. Mari</span>
                                    <span class="text-muted text-xs block">Mon compte <b class="caret"></b></span>
                                </a> -->
                                <ul class="dropdown-menu animated fadeInDown mt-2 mr-4">
                                    <li><a class="pl-2 pr-2 dropdown-item" href="#monAgenda" data-content="mon-agenda"><i class="fa fa-calendar"></i> Mon agenda</a></li>
                                    <li><a class="pl-2 pr-2 dropdown-item" href="#monAgenda" data-content="mes-documents"><i class="fa fa-folder-open-o"></i> Mes documents</a></li>
                                </ul>
                        </li>
                        <li style="position: relative">
                            <a class="modal" href="#contactModal" data-modal="contact" title="Notifications">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a href="login.html" title="Se deconnecter">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>


            <div class="wrapper wrapper-content animated fadeInRight">

                <section id="features" class="container">
                    <!-- ajaxContent -->
                </section>
            </div>

        </div>

    </div>

    <div class="footer">
        <div class="text-copyright text-right">
            <small><a href="_#" class="">Mentions l??gales</a> | <span><img src="img/logo-g5x25.png" width="25px"
                        height="25px" alt="Generation 5.0">
                </span><span></span>Copyright &copy; 2020-2022</small>
        </div>
    </div>

    <!-- Back to Top -->

    <div id="toTop" class="to-top">
        <span class="fa fa-2x fa-chevron-up"></span>
    </div>

    <!-- prev-box - history back -->

    <div id="prevBox" class="prev-box">
        <button id="btnPrevBox" onclick="history.back(); return false;" type="button" class="btn btn-primary btn-prev-small">
            <i class="fa fa-arrow-left d-none d-xl-inline-block"></i><i class="fa fa-undo d-xl-none"></i>
            <span class="d-none d-xl-inline-block">Retour</span>
        </button>
    </div>

    <!-- Contact modal -->


    <div class="modal fade" id="contactModal" tabindex="-1" role="form" aria-labelledby="contactModal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="form">

            <div class="ibox ibox-background-brown">
                <div class="ibox-title ibox-title-orange">
                    <h2>Contactez <span>Moi</span></h3>
                        <div class="ibox-tools clearfix">
                            <div class="profile-image">
                                <img alt="image" class="rounded-circle  m-b-md" src="img/profile_small-123x.jpg">
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">??</span><span class="sr-only">Close</span>
                            </button>
                        </div>
                </div>
                <div class="ibox-content">
                    <div class="form-container p-3">
                        <form id="mail" name="mail">
                            <p class="mt-3 text-white">Pour prendre contact avec ce conseiller, utilisez ce formulaire</p>
                            <input type="hidden" id="uti_num" name="uti_num" value="958">
                            <input type="text" id="sujet" name="sujet" class="form-control" placeholder="Sujet">
                            <br>
                            <textarea class="form-control" id="body" name="body" placeholder="Mon message ici..."
                                rows="6"></textarea>

                            <div class="pt-5 pb-2 text-lg-right">
                                <button type="button" class="btn btn-white mr-3" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"
                                    onclick="xajax_envoie_mail_conseiller(xajax.getFormValues('mail'))">Envoyer <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Admin modal -->

    <div class="modal fade" id="adminModal" tabindex="-1" role="form" aria-labelledby="adminModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="form">

            <div class="ibox">
                <div class="ibox-title ibox-title-orange">
                    <h2>Fen??tre <span>Priv??e</span></h2>
                        <div class="ibox-tools clearfix">
                            <div class="profile-image pb-2">
                                <img alt="image" class="rounded-circle  m-b-md" src="img/profile_small-123x.jpg">
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span><span
                                    class="sr-only">Close</span>
                            </button>
                        </div>
                </div>
                <div class="ibox-content">

                    <form id="formulaire" name="formulaire">
                        
                        <div class="form-group row m-t-lg" id="news_new_titre">
                            <label class="col-lg-3 col-form-label">Titre </label>
                            <div class="col-lg-9 champ  padded-column" id="cla_new_titre">
                                <input type="text" class="form-control" name="new_titre" id="new_titre" value="">
                                <span id="err_new_titre" class="erreur">&nbsp;</span>
                            </div>
                        </div>

                        <div class="form-group row" id="news_new_contenu">
                            <label class="col-lg-3 col-form-label">Contenu </label>
                            <div class="col-lg-9 champ  padded-column" id="cla_new_contenu">
                                <input type="text" class="form-control" name="new_contenu" id="new_contenu" value="">
                                <span id="err_new_contenu" class="erreur">&nbsp;</span>
                            </div>
                        </div> 
                        
                        <input type="hidden" name="new_num" id="news_new_num" value=""> <input type="hidden"
                            name="str_num" id="news_str_num" value="1"> <input type="hidden" name="new_date"
                            id="news_new_date" value="">

                    </form>

                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-warning float-left" type="button">Supprimer <i class="fa fa-trash"></i></button>
                            <button class="btn btn-primary mr-3" onclick="">Annuler</button>
                            <button class="btn  btn-success" type="button" onclick="">Enregistrer <i class="fa fa-check"></i></button>
                        </div>
                    </div>

                </div>
                <!-- <div class="ibox-content">
                    
                    <div class="pt-5 pb-2 text-lg-right">
                    <div class="form-container p-3">
                        <form id="mail" name="mail">
                            <p class="mt-3">Ici les champs utiles ?? la gestion priv??e des donn??es</p>
                            <input type="hidden" id="uti_num" name="uti_num" value="958">
                            <p><input type="text" id="field_1" name="field_1" class="form-control"
                                    placeholder="Champ 1"></p>
                            <p><input type="text" id="field_2" name="field_2" class="form-control"
                                    placeholder="Champ 2"></p>

                            <textarea class="form-control" id="field_3" name="field_3" placeholder="Champ 3"
                                rows="6"></textarea>
                
                                
                                <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="">Valider <i
                                        class="fa fa-check"></i></button>
                            </div>

                        </form>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
    
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- slick carousel-->
    <script src="js/plugins/slick/slick.min.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    
    <!-- Custom Ingeneria 5.0 - Syswatis -->
    <script src="js/plugins/jquery-mobile/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js?r2.4"></script>
    <script src="js/plugins/circle-progress/jquery.circle-progress.min.js"></script>

</body>

</html>