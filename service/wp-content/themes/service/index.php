<?php
/**
 *  Template Name: home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<!doctype html>
<html lang="en">
  <!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.cs">

    <!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" >

<?php get_header();?>

<title>First Screen</title>
</head>

<body>
  <!-- ********************************header-section********************************* -->
  <?php include_once('inc/nav.php'); ?>
 

  </div>
        <div class="container">
            <div class="row text-style mt-5">
                <div class="col-md-6">
                    <div>
                        <h4>Your lightning Fast Delivery Partener</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis autem praesentium est dignissimos, suscipit eligendi ab voluptate doloribus culpa amet, consequatur accusamus ea dolores at quas possimus voluptatibus asperiores iure!</p>
                      <input type="text" value="Zip Code or City">
                      <div class="row mt-5">
                          <div class="col-md-3"><h1>232</h1></div>
                          <div class="col-md-3"><h1>521</h1></div>
                          <div class="col-md-3"><h1>1452</h1></div>
                          <div class="col-md-3"><h1>32</h1></div>
                          <div class="col-md-3"><h6>Clients</h6></div>
                           <div class="col-md-3"><h6>Workers</h6></div>
                           <div class="col-md-3"><h6>Projects</h6></div>
                           <div class="col-md-3"><h6>Supports</h6></div>
                        </div>
                       </div>
                </div>
                <div class="col-md-6">
               
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photos.png" class="img-fulid img" alt="photograp">
             
            </div>
             </div>
            </div>
          </section>
     <!-- Section 2 -->
     <section class="container mt-5">
            <div class="row">
              <div class="col-md-4">
                <div class="card border-0">
                  <div class="card-body d-flex">
                    <div><i class="fa fa-bus icon-color" aria-hidden="true"></i></div>
                  <div> <h5 class="card-title">Lorem ipsum</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <h5 class="card-text">Learn More 
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </h5>
                  </div>
                  </div>
              </div>
              </div>
               <div class="col-md-4">
                <div class="card border-0">
                  <div class="card-body d-flex">
                    <div><i class="fa fa-user-md icon-color" aria-hidden="true"></i></div> 
                    <div> <h5 class="card-title">Dolor Sitema</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <h5 class="card-text">Learn More
                         <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </h5>
                      </div>
                     </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="card border-0">
                  <div class="card-body d-flex">
                    <div><i class="fa fa-shopping-cart icon-color" aria-hidden="true"></i></div> 
                    <div> <h5 class="card-title">Sed Ut Perspiciatis</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <h5 class="card-text">Learn More
                         <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </h5>
                      </div>
                  </div>
                 </div>
              </div>
            </div>
          </div>
          </section>



    <!-- About Us Section  -->
       <section class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <h2 class="color">About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum provident culpa delectus possimus consequatur, reprehenderit nemo voluptas cum quis quos! Sed fugit odio vel quo numquam minima vitae consequatur asperiores.</p>
         <div class="d-flex"> 
          <div><i class="fa fa-bus icon-color2" aria-hidden="true"></i></div>   
          <div>
           <h5 class="color2">Paragraphs are the building blocks of papers.</h5>
             <p>This is a longer card with supporting text below as a natural lead-in to additional</p>
             </div>
             </div>
             <div class="d-flex"> 
             <div><i class="fa fa-volume-up icon-color2" aria-hidden="true"></i></div>   
              <div>
           <h5 class="color2">Paragraphs are the building blocks of papers.</h5>
             <p>This is a longer card with supporting text below as a natural lead-in to additional</p>
             </div>
             </div>
             <div class="d-flex"> 
             <div><i class="fa fa-user-md icon-color2" aria-hidden="true"></i></div>   
             <div>
              <h5 class="color2">Paragraphs are the building blocks of papers.</h5>
                <p>This is a longer card with supporting text below as a natural lead-in to additional</p>
                </div>
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="card">
                  <a href="https://youtu.be/7iA6dkaXYoo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nature1.jpg" class="card-img-top" alt="nature"><i class="fa fa-youtube-play youtube" aria-hidden="true"></i></a>
                </div>
              
          

        </div>
        </div>
       </section>
       <!-- Our Services Section -->
       <section class="container  mt-5">
        <div class="mb-5">
          <h4 class="text-center color3">OUR SER<span class="server"></span>VICES</h4>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card  mt-3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/city.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title color4">STORAGE</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longerThis.</p>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card  mt-3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/land.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title color4">LOGOSTICS</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longerThis</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card  mt-3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nature2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title color4">CARGO</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longerThis</p>
                
              </div>
            </div>
          </div>
       
          <div class="col-md-4 mt-5">
            <div class="card  mt-3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/city.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title color4">TRUKING</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longerThis</p>
              
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-5">
            <div class="card  mt-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/land.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title color4">PACKING</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longerThis.</p>
             
            </div>
          </div>
        </div>
          <div class="col-md-4 mt-5">
            <div class="card  mt-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nature2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title color4">WHEREHOUSING</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longerThis.</p>
             
            </div>
          </div>
        </div>
      </div>
      
       </section>

    <!-- Call to Action Section 5--> 
       
    <section class="backgournd mt-5">
      <div class="container">
        <div class="pt-5 text-center text-white"><h3 class="mt-3 ">Call TO Action</h3>
          <p class=" text2 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.  Inventore a quam reprehenderit ratione,voluptate quo doloribus ex sit et odio culpa, labore molestiae vero ut autem cum, mollitia deleniti ad. Inventore a quam reprehenderit ratione,voluptate quo doloribus ex sit et odio culpa, labore molestiae vero ut autem cum, mollitia deleniti ad.</p>
             <button type="button" class="btn btn-outline-light mt-3">Call To Action</button></div>
       
      </div>
       
     </section>
     
<section class="container  mt-5">
  <div class="row">
    <div class="col-md-6  mt-5"> <div class="card  border-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/city.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col-md-6  mt-5"><div class="card  border-0">
      <div class="card-body">
          <h4 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid </h4>
          <div class="d-flex">
         <div><i class="fa fa-check arrow" aria-hidden="true"></i></div> 
         <div><p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae adipisci fugit ad praesentium ut labore! Ab architecton</p></div>  
        </div>
         <div class="d-flex">
         <div><i class="fa fa-check arrow" aria-hidden="true"></i></div>
        <div><p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae </p></div>
      </div>
      <div class="d-flex">   
        <div><i class="fa fa-check arrow" aria-hidden="true"></i></div>   
          <div> <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></div>
          </div>
          </div>
      </div>
      </div>
    <div class="col-md-6  mt-5"> <div class="card  border-0">
      <div class="card-body">
       <h4 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid </h4>
           <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae adipisci fugit ad praesentium ut labore! Ab architecton</p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae </p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
     </div>
    </div>
    <div class="col-md-6  mt-5">
       <div class="card  border-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thaja.jpg" class="card-img-top" alt="...">
      </div>
     </div>
   

    <div class="col-md-6  mt-5"> <div class="card  border-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col-md-6  mt-5">
      <div class="card  border-0">
        <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid </h4>
            <div class="d-flex">
           <div><i class="fa fa-check arrow" aria-hidden="true"></i></div> 
           <div><p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae adipisci fugit ad praesentium ut labore! Ab architecton</p></div>  
          </div>
           <div class="d-flex">
           <div><i class="fa fa-check arrow" aria-hidden="true"></i></div>
          <div><p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae </p></div>
        </div>
        <div class="d-flex">   
          <div><i class="fa fa-check arrow" aria-hidden="true"></i></div>   
            <div> <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></div>
            </div>
            </div>
        </div>
        </div>
    <div class="col-md-6  mt-5"> <div class="card  border-0">
      <div class="card-body">
       <h4 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid </h4>
           <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae adipisci fugit ad praesentium ut labore! Ab architecton</p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa possimus mollitia aliquid recusandae </p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
     </div>
    </div>
    <div class="col-md-6  mt-5"> <div class="card  border-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nature2.jpg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</div>
   
  
</section>
   
 <!-- Princing Section  -->
<section class="container mt-5">
  <div>
    <h3 class="text-center color3">PRINCING</h3>
  </div>
  <div class="row mt-5">
    <div class="col-sm-4">
      <div class="card shadow border-0 mt-3">
        <div class="card-body">
          <h4 class="card-title">Free Plan</h4>
          <h4><sup class="red">$</sup><span class="red">0</span><span>/month</span></h4>
        <div class="ml-3">
          <i class="fa fa-check check" aria-hidden="true"></i>
             <p class="card-text">With supporting text below as a natural</p>
             <i class="fa fa-check check" aria-hidden="true"></i>
             <p class="card-text">With supporting text below as a natural</p>
           <i class="fa fa-times check" aria-hidden="true"></i>
             <p class="card-text"><del>With supporting text below as a natural</del></p>
             <i class="fa fa-times check" aria-hidden="true"></i>
             <p class="card-text"><del>With supporting text below as a natural</del></p>
             <button type="button" class="btn btn-outline-primary">Buy Now</button>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
      <div class="card shadow border-0  mt-3">
        <div class="card-body">
          <h4 class="card-title">Free Plan</h4>
          
          <h4><sup class="red">$</sup><span class="red">29</span><span>/month</span></h4>
        
        <div class="ml-3">
          <i class="fa fa-check check" aria-hidden="true"></i>
             <p class="card-text">With supporting text below as a natural</p>
             <i class="fa fa-check check" aria-hidden="true"></i>
             <p class="card-text">With supporting text below as a natural</p>
             <i class="fa fa-times check" aria-hidden="true"></i>
             <p class="card-text"><del>With supporting text below as a natural</del></p>
             <i class="fa fa-times check" aria-hidden="true"></i>
             <p class="card-text"><del>With supporting text below as a natural</del></p>
             <button type="button" class="btn btn-outline-primary">Buy Now</button>
        </div>
      </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card shadow border-0  mt-3">
        <div class="card-body">
          <h4 class="card-title">Free Plan</h4>
          <h4><sup class="red">$</sup><span class="red">35</span><span>/month</span></h4>
        <div class="ml-3">
          <i class="fa fa-check check" aria-hidden="true"></i>
             <p class="card-text">With supporting text below as a natural</p>
             <i class="fa fa-check check" aria-hidden="true"></i>
             <p class="card-text">With supporting text below as a natural</p>
             <i class="fa fa-times check" aria-hidden="true"></i>
             <p class="card-text"><del>With supporting text below as a natural</del></p>
             <i class="fa fa-times check" aria-hidden="true"></i>
             <p class="card-text"><del>With supporting text below as a natural</del></p>
             <button type="button" class="btn btn-outline-primary">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Slider Section  -->
<section class="slider-background mt-5">
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Sudhamam.jpg" class="img-fulid rounded-corners" alt="sudhamam">
    <h2 class="text-center">Matt Baradon</h2>
      <p class="text-center">Freelancer</p>
     <!-- <i class="fa fa-star-o star" aria-hidden="true"></i>
        <i class="fa fa-star-o  star" aria-hidden="true"></i>
        <i class="fa fa-star-o  star" aria-hidden="true"></i>
        <i class="fa fa-star-o  star" aria-hidden="true"></i> -->
     <div class="d-flex">
    <div><i class="fa fa-quote-left qoute" aria-hidden="true"></i></div>
     <div><p class="text-center slider">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem doloremque sunt quidem labore id, accusantium et reiciendis dicta veniam at dolore modi ad quis nesciunt perspiciatis commodi dolorem soluta incidunt.</p></div>
      <div><i class="fa fa-quote-right qoute" aria-hidden="true"></i>
      </div> 
      </div> 
     </div>
</section>



<!-- Faq Section -->
<section class="container mt-5">
  <div class="mb-5">
     <h2 class="text-center color5">FREQUNTLY ASKED QUETION</h2>
    </div>
    <div class="mb-3 text-center">
    <button type="button" class="btn btn-light shadow" data-toggle="collapse" data-target="#demo">
      <i class="fa fa-question-circle-o faq-icon" aria-hidden="true"></i>
      Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit?
       <i class="fa fa-chevron-down faq-arrow" aria-hidden="true"></i>
      </button>
    <div id="demo" class="collapse">
      Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit,
     </div>
  </div>

    <div class="mb-3 text-center">
    <button type="button" class="btn btn-light shadow" data-toggle="collapse" data-target="#demo1">
      <i class="fa fa-question-circle-o faq-icon" aria-hidden="true"></i>
      Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit?
       <i class="fa fa-chevron-down faq-arrow" aria-hidden="true"></i>
      </button>
   
      <div id="demo1" class="collapse">
        Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit,
       
      </div>
    </div>
  </div>
    <div  class="mb-3 text-center">
      <button type="button" class="btn btn-light shadow" data-toggle="collapse" data-target="#demo2">
        <i class="fa fa-question-circle-o faq-icon" aria-hidden="true"></i>
        Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit?
         <i class="fa fa-chevron-down faq-arrow" aria-hidden="true"></i>
        </button>
        <div id="demo2" class="collapse">
          Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit,
         
        </div>
      </div>
      <div  class="mb-3 text-center">
        <button type="button" class="btn btn-light shadow" data-toggle="collapse" data-target="#demo3">
          <i class="fa fa-question-circle-o faq-icon" aria-hidden="true"></i>
          Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit?
           <i class="fa fa-chevron-down faq-arrow" aria-hidden="true"></i>
          </button>
          <div id="demo3" class="collapse">
            Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit,
           
          </div>
        </div>
        <div  class="mb-3 text-center">
          <button type="button" class="btn btn-light shadow" data-toggle="collapse" data-target="#demo4">
            <i class="fa fa-question-circle-o faq-icon" aria-hidden="true"></i>
            Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit?
             <i class="fa fa-chevron-down faq-arrow" aria-hidden="true"></i>
            </button>
            <div id="demo4" class="collapse">
              Simple collapsibleLorem ipsum dolor sit amet, consectetur adipisicing elit,
             
            </div>
          </div>
  </div>
</section>

 

 
  
  <!-- footer section -->
 <footer class="foote-section mt-5">
  <div class="row font-color">
    <div class="col-md-3">
      <div> 
        <h4>logis</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, nostrum deleniti praesentium voluptatem hic est? Expedita voluptate,</p>
        <div class="icons">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i> 
      </div>
      </div>
    </div>
      <div class="col-md-3">
        <div>
          <h2>Useful Links</h2>
        <p>Home</p>
        <p>About Us</p>
        <p>Services</p>
        <p>Terms and Services</p>
        <p>Pravicy and policy</p>
        </div>
      </div>
     
      <div class="col-md-3">
        <div>
          <h2>Our Services</h2>
           <p>Web Design</p>
            <p>Web Development</p>
            <p>Product Mangement</p>
            <p>Marketing</p>
            <p>Graphics</p>
       </div>
      </div>
    <div class="col-md-3">
      <div>
    
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

        </div>
    </div>
</div>

<div class="text-white text-center mt-5">
  &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
  <p>Designed Boostarpmade</p> 
</div>

 </footer>

   
   
   


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slim.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>
