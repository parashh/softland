<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- <title>Soft Landing Page by Tooplate</title>  -->
     <meta charset="<?php bloginfo('charset'); ?>">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
     <?php wp_head(); ?>

</head>
<body>

     <!-- PRE LOADER -->
     <!-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> -->


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    
                    <?php
                    if(function_exists('the_custom_logo')){
                         the_custom_logo();
                    }
                    else{
                         bloginfo('name');        
                    }

                    ?>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <!-- <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Features</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="#pricing" class="smoothScroll">Pricing</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul> -->

                    <!-- display primary menu  -->
                   <?php
                    if(has_nav_menu('primary-menu')){
                         wp_nav_menu(array(
                              'theme_location'=> 'primary-menu',
                              'container'=>'',
                              'items_wrap'=>'<ul class="nav navbar-nav">%3$s</ul>'
                         ));
                    }
                   
                   
                   
                   ?>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Say hello - <span>info@soft.co</span></a></li>
                    </ul>
               </div>

          </div>
     </section>