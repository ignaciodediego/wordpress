<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css">
    <?php wp_head(); ?>

  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="fastfood">
          </div>
          
          <div class="col-md-6">

            <ul class="social-header list-inline text-xs-right">
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
            </ul>

          </div>
        </div>
      </div>

      <div class="menu-bar text-xs-right">
        <nav class="container" role="menu">
          <ul class="menu-list list-inline">
              <li class="list-inline-item">
                  <a href="#">Inicio</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">El restaurante</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">La carta</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Dónde estamos</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Contacto y reservas</a>
                </li>
            </ul>
        </nav>
      </div>

    </header>

    <!-- Main content of a page -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Esto es un test
                <?php 
                while (have_posts()) : the_post();
                ?>
                    <article <?php post_class();?>>
                        <div class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </div>
                        <div class="entry-content">
                        <?php the_content(); ?>
                        </div>
                    </article>
                <?php 
                endwhile;
                ?>

            </div>
        </div>
    </div><!-- End Main content of a page -->

    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <strong>fastfood</strong> &copy;2016 - Todos los derechos reservados. Sitio diseñado por <a href="#">Rafel Sansó</a>
          </div>

          <div class="col-sm-6 text-xs-right">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Aviso legal</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Cookies</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    
    </footer>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url');?>/js/general.js" type="text/javascript"></script>
    <?php wp_footer();?>
  </body>
</html>