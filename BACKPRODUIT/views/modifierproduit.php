<?php
session_start();
  include_once '../core/ProduitC.php';
  include_once '../entities/Produit.php';

include_once '../core/CategorieC.php';
    $p = new CategorieC();
    $list = $p->afficherCategorie();
  if(isset($_GET['id'])){
    $p = new ProduitC();
    $produit = $p->afficherProduitParId($_GET['id']);
  }  
  if(isset($_POST['modifier-p'])){
    $pam = new Produit(null, null, null, null, null, null, null,null);
    $pam->setId           ($_GET['id']);
    $pam->setNom          ($_POST['nom-p']);
 //   $pam->setCategorie          ($_POST['categorie']);
    $pam->setPrix         ($_POST['prix-p']);
    $pam->setDescription  ($_POST['desc-p']);
    $pam->setQuantite     ($_POST['qte-p']);
    $pam->setReference    ($_POST['ref-p']);
    $p->ModifierProduit($pam);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fitness Shop | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Fitness Shop!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
               <?php echo $_SESSION['username']; ?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3> <?php echo $_SESSION['email']; ?></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-archive"></i> Gestion des Produits <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="afficherproduit.php"> Tous Les Produits</a></li>
                      <li><a href="ajouterproduit.php"> Ajouter Produits</a></li>
                      <li><a href="affichercategorie.php"> Tous Les Categories</a></li>
                      <li><a href="ajoutercategorie.php"> Ajouter Categories</a></li>
                     

                    </ul>
                  </li>
                  <li><a><i class="fa fa-shopping-cart"></i> Gestion Commandes</span></a>
                    
                  </li>

                  <li><a><i class="fa fa-users"></i> Gestion Comptes </a>
                    
                  </li>
                  <li><a><i class="fa fa-user"></i> Gestion Marketing </a>
                    
                  </li>
                  <li><a><i class="fa fa-envelope"></i> Gestion Reclamations</a>
                    
                  </li>

                  <li><a><i class="fa fa-exclamation-circle"></i> Conseil du jour <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ajouterconseil.php"> Ajouter un conseil </a></li>
                  
                      <li><a href="afficherconseil.php">Afficher les conseils  </a></li>
                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src=<?php echo $_SESSION['image']; ?> alt=""><?php echo $_SESSION['username']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"><i class=""></i> Profile</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                  </li>
                  </ul>
                </li>
               </ul>
              </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
          

              <!-- top tiles -->
          <h1>Modifier le produit!</h1>
          <form method="post" enctype="multipart/form-data">
           <div class="form-group">
              <label>Reference produit</label>
              <input type="text" name="ref-p" class="form-control" value="<?php echo $produit['reference']; ?>">
            </div>
            <div class="form-group">
              <label>Nom produit</label>
              <input type="text" name="nom-p" class="form-control" value="<?php echo $produit['nom']; ?>">
            </div>
            

            <div class="form-group">
              <label>Prix produit</label>
              <input  required="" min="1" type="number" name="prix-p" class="form-control" value="<?php echo $produit['prix']; ?>">
            </div>

            <div class="form-group">
              <label>Description produit</label>
              <input type="text" name="desc-p" class="form-control" value="<?php echo $produit['description']; ?>">
            </div>

            <div class="form-group">
              <label>Quantite produit</label>
              <input type="number" name="qte-p" class="form-control" value="<?php echo $produit['quantite']; ?>">
            </div>


            <input type="submit" name="modifier-p" value="Modifier" class="btn btn-success">
            <a class="btn btn-primary" href="afficherproduit.php">liste des produits</a>
          </form>
        </div>
      </div>
            </div>



        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Fitness Shop - Developped By Web'Dev.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>