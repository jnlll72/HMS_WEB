<?php
$login = $this->session->userdata("login");
$monUrl = $_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HMS</title>
        <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
        <link rel="stylesheet" href="http://localhost/HMS/assets/css/my_style.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="http://localhost/HMS/assets/js/my_jquery.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">HMS PROJECT</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php 
                    if(!empty($login)):
                    ?>


                    <!----------------------------------------------------------------------------->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">AJOUTER <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Materiel</a></li>
                            <li><a href="#">Marque</a></li>
                            <li><a href="#">Salle</a></li>
                            <li><a href="#">Composant</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODIFIER <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Materiel</a></li>
                            <li><a href="#">Marque</a></li>
                            <li><a href="#">Salle</a></li>
                            <li><a href="#">Composant</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SUPPRIMER <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Materiel</a></li>
                            <li><a href="#">Marque</a></li>
                            <li><a href="#">Salle</a></li>
                            <li><a href="#">Composant</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONSULTER <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Materiel</a></li>
                            <li><a href="#">Marque</a></li>
                            <li><a href="#">Salle</a></li>
                            <li><a href="#">Composant</a></li>
                        </ul>
                    </li>
                    <!----------------------------------------------------------------------------->

                    <?php
                    else:
                    ?>
                    <li><a href="<?php echo base_url().'apropos'; ?>">A PROPOS</a></li>
                    <?php
                    endif;
                    ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(!empty($login)):
                    ?>
                    <li><span>Salutations <?php echo $login; ?></span></li>
                    <li><a href="<?php echo base_url().'deco'; ?>">Deconnexion</a></li>
                    <?php
                    else:
                    ?>
                    <li><a href="<?php echo base_url().'inscription'; ?>">Inscription</a></li>
                    <li><a href="<?php echo base_url().'connexion'; ?>">Connexion</a></li>

                    <?php
                    endif;
                    ?>
                </ul>
            </div>
        </nav>
        <?php
        if(!empty($login) && (substr_compare($_SERVER['HTTP_REFERER'],"http://localhost/HMS/SessionController",0) == 0)){
        ?>
        <div id="alert_infos" class="col-md-4 alert alert-dismissible alert-success">
            <strong>CONNEXION REUSSIE!</strong>
        </div>
        <?php
        }
        ?>