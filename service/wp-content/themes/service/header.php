<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
 
 
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" >

    <title>First Screen</title>
   
  </head>
  <body>
    <!-- Banner section -->
    <section class="banner">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-white" href="#">Logis</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbarNav">
              <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item active  nav-padding">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item  nav-padding">
                  <a class="nav-link nav-icon" href="#">About</a>
                </li>
                <li class="nav-item  nav-padding">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item  nav-padding">
                    <a class="nav-link" href="#">Princing</a>
                  </li>  -->
                  <!-- <li class="nav-item dropdown  nav-padding">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li> -->
               <!-- <li class="nav-item  nav-padding">
                    <a class="nav-link text-white" href="#">Contact</a>
                  </li> -->
                <!-- </ul> -->
				<?php wp_nav_menu(array(
					'menu' =>'top-menu',
					'menu_class' => 'navbar-nav ml-auto',
					'container' =>'',
					'li_class' => 'nav-item  nav-padding dropdown',
					'a_class' => 'nav-link nav-color',
					'active_class' => 'active',
					// 'dropdown_class'=>'dropdown-menu',
					// 'dropdown_a_class'=>'dropdown-item'
				))?>
				
?>
				 
               <button class="btn btn-primary ml-3" type="submit">Get a Qoute</button> 
            </div>
          </nav>
        </div>

	
<?php wp_head();?>
