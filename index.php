<?php

    session_start();

    require_once("libs/utilities.php");

    $pageRequest = "inicio";

    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    // require_once("controllers/verificar.mw.php");
    require_once("controllers/site.mw.php");


    switch($pageRequest){
          case "inicio":
            require_once("controllers/iglesia/inicio.control.php");
            break;
          case "home":
            require_once("controllers/iglesia/somos.control.php");
            break;
          case "creemos":
            require_once("controllers/iglesia/creemos.control.php");
              break;
          case "devocionales":
            require_once("controllers/iglesia/devocionales.control.php");
              break;
          case "politica":
            require_once("controllers/iglesia/politica.control.php");
              break;
          case "contacto":
            require_once("controllers/iglesia/contacto.control.php");
              break;
          case "ubicacion":
            require_once("controllers/iglesia/ubicacion.control.php");
              break;
          case "carrito":
            require_once("controllers/iglesia/carrito.control.php");
              break;
          case "login":
            require_once("controllers/login.control.php");
              break;
              case "signin":
                require_once("controllers/signin.control.php");
                  break;
        default:
            require_once("controllers/error.control.php");
    }
?>
