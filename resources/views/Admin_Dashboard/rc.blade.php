<!DOCTYPE html>
<html lang="en">

<head>

    <title>CHARIKATY</title>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">
  
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/components/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/components/elegant-font/style.css">
    <link rel="stylesheet" href="assets/components/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/components/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/components/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/components/magnific-popup-master/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/components/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/components/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/theme.css">
   

</head>
<body class="sidebar-expanded">


<div class="preloader loader"></div>
<header class="header">


    <div class="top-line">

     
        <a href="#" class="brand">

            
            <div class="brand-big">
                <span class="strong">CHARIKATY</span>Board
            </div>
          

        </a>
      
        <div class="menu-button">
            <a href="#" class="sidebar-toggle menu-toggle open">
                <div class="menu-icon">
                    <span></span><span></span><span></span>
                    <span></span><span></span><span></span>
                </div>
            </a>
        </div>  <div class="navigation-top">

           


            <ul class="navbar-top navbar-top-right">

                <!-- Notifications -->
                <li class="dropdown">

                  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon icon-left fa fa-bell-o"></i>
                        <!--<span class="navbar-top-title">Notifications</span>-->
                        <span class="badge badge-danger">3</span>
                    </a>
                    

                   
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-right dropdown-menu-notifications">
                        <li class="title">Notifications</li>
                        <li>

                          
                            <a href="#" class="notification-item">

                               
                                <div class="image avatar">
                                    <img src="images/avatar-m-01.jpg" alt="">
                                </div>
                                
                                <div class="notification-body">
                                    <span class="name">Phillip Sandoval</span> liked your post
                                    <span class="datetime">2 minutes ago</span>
                                    <span class="state-dot state-dot-online"></span>
                                </div>
                              

                            </a>
                 

                        </li>
                        
                      
                    </ul>
                </li>
        

               

          
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle nav-profile" data-toggle="dropdown">
                        <span class="profile-name">Saida SADIKI</span>
                        <span class="caret"></span>
                        <div class="profile-avatar">
                            <div class="profile-avatar-image">
                                <img src="images/avatar-f-05.jpg" alt="">
                            </div>
                        </div>
                    </a>
                 
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon icon-inline fa fa-address-card-o"></i>Mon compte</a></li>
                        <li><a href="#"><i class="icon icon-inline fa fa-sign-out"></i>Déconnexion</a></li>
                    </ul>
                 

                </li>
              

            </ul>
           

        </div>
 


    </div>


    <div class="sidebar custom-scrollbar">
        <div class="sidebar-content">

   
            <ul class="sidebar-navigation sb-nav">


                <li class="sb-dropdown">
                    <a href="{{url('/cnegatif')}}" class="sb-nav-item ">
                        <i class="icon glyphicon glyphicon-option-horizontal"></i>
                        <span>CERTIFICAT NEGATIF</span>
                    </a>
                   
                </li>

                <li class="sb-dropdown">
                    <a href="{{url('/statut')}}" class="sb-nav-item ">
                       <i class="icon glyphicon glyphicon-refresh"></i>
                        <span>STATUTS</span>
                    </a>
                   
                </li>

                <li class="sb-dropdown">
                    <a href="{{url('/rc')}}" class="sb-nav-item ">
                       <i class="icon glyphicon glyphicon-ok"></i>
                        <span>REGISTRE DU COMMERCE</span>
                    </a>
                    
                </li>


               
            </ul>

            <div class="sidebar-title">Summary information</div>
           
            <div class="sidebar-summary-progress">

               
                <div class="progress-titled mb-0p5">
                    <div class="progress-title">Dossier en attente <span class="value">37%</span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 37%;">
                        </div>
                    </div>
                </div>
             
                <div class="progress-titled mb-0p5">
                    <div class="progress-title">Dossier en cours <span class="value">60%</span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        </div>
                    </div>
                </div>
              
                <div class="progress-titled mb-0p5">
                    <div class="progress-title">Dossier réalisé <span class="value">3%</span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main-container">



    <header class="page-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="icon fa fa-home"></i>
                            <a href="index.php">Accueil</a> > <a href="#">Registre du Commerce</a>
                        </li>
                       
                    </ol>

                    
                    <div class="page-header">
                        <h1 class="page-title">Bienvenue Saida!</h1>
                        
                    </div>
              
                <div class="widget widget-card-box-stat wg-warning">
                    <div class="widget-layer widget-layer-main widget-layer-sizer" style="width: 209px;">
                        <div class="widget-layer-content">
                            <div class="widget-body">

                                
                                <div class="wg-left">
                                    <span class="icon ti-user"></span>
                                </div>
                               
                                <div class="wg-right">
                                    <div class="wg-value">20</div>
                                    <div class="wg-title">Nouveau clients</div>
                                </div>
                            

                            </div>
                        </div>
                    </div>

                </div>
             

                </div>
            </div>
        </div>
    </header>
 <div class="container-fluid">
 <div class="row">

      
                        <div class="panel panel-white">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-hover no-mb" method="post">


                                        <thead>
                                        <tr>
                                            <th>Nom </th>
                                            <th>Prénom</th>
                                            <th>Dénomination</th>
                                            <th>Activité Commercial</th>
                                            <th>Forme Juridique</th>
                                            <th>Capital</th>
                                            <th>Durée</th>
                                            <th>Etat</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Sadiki</td>
                                            <td>Saida</td>
                                            <td>XYZ</td>
                                            <td>import export</td>
                                            <td>Sarl-au</td>
                                            <td>67576dh</td>
                                            <td>99ans</td>
                                            
                                     <td >
                         <div class="buttons">
                              <a  class="btn btn-success" href="">Validé</a>
                              <button class="btn btn-danger" href="">refusé</button>
                         </div> 
                     </td>
                                        </tr>
                                    
                                        
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
               

               


           
        </div>
       

</div>
</main>









<!-- Scripts -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/components/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="assets/components/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/components/magnific-popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="assets/components/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/circle-progress.min.js"></script>
<script src="assets/js/calendar.js"></script>
<script src="assets/js/general.js"></script>
<!-- /Scripts -->

<!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter35435255 = new Ya.Metrika({ id:35435255, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../../../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript></noscript> 

</body>

</html>
