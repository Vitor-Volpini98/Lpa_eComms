
<!-- http://localhost:81/E-commerce/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg  bg-primary navbar-light bg-white  py-3  fixed-top ">
            <div class="container">
            <img src="assets/imgs/lapechlogo.png" alt="Logo" width="120" class="d-inline-block align-text-left">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav_buttons" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-l navg-0">

                        <li class="nav-item">
                            <a class="nav-link "  href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                            <a href="login.html"><i class="fas fa-user"></i> </a>       
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

        <!--Slider-->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/imgs/1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>News Smart Watch</h5>
                    <p> Discover today's winter collection</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Shop Now</button>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/imgs/slice2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Big Screen Sale</h5>
                    <p> big deals for Tvs</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Shop Now</button>
                    </div>

                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/imgs/slice3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Computers Smashed!</h5>
                    <p> Check out the deals</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Shop Now</button>
                    </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
    
       
        <!--Featured -->

        <section id="featured" class="my-5 pb-5">
             <div class="container text-center mt-5 py-5 ">
                <h3>Our Featured</h3>
                <hr class="mx-auto">
                <p>Here you can check out our featured products</p>
             </div>
             <div class="row mx-auto container-fluid">
             <?php include('server/get_featured_products.php'); ?>
             <?php while($row= $featured_products->fetch_assoc()) { ?>

                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                    <div class="star">
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?> </h5>
                    <h4 class="p-price"><?php echo $row['product_price'];?></h4>
                    <a href="<?php  echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
                </div>  
                <?php } ?>
             </div>

        </section>
        
      
          <!--Banner-->
        <section id="banner" class="my-5 py-5">
                <div class="container1">
                    <img src="assets/imgs/banner.jpg" alt="Snow" style="width:100%;">
                    <div class="centered">
                        <h1>latest Phone back cover's collection from fashion 2023</h1>
                        <h4>Exotics Collection Of Iphone Back Cover's</h4>

                    </div>
                
                    
                </div>
            </section>
        
      
        <!--SmartPhones -->

        <section id="smartphones" class="my-5 ">
            <div class="container text-center mt-5 py-5 ">
               <h3>Smartphones</h3>
               <hr class="mx-auto">
               <p>Here you can check out our Smartphones</p>
            </div>
            <div class="row mx-auto container-fluid">
            <?php include('server/get_featured_products.php'); ?>
             <?php while($row= $featured_products->fetch_assoc()) { ?>

                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                    <div class="star">
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                        <i class="fas fa-star" style="color:yellow"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?> </h5>
                    <h4 class="p-price"><?php echo $row['product_price'];?></h4>
                    <a href="<?php  echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
                </div>  
                <?php } ?>
            </div>
         </section>

      
         <!--Accessories -->
        <section id="accessories" class="my-5 ">
            <div class="container text-center mt-5 py-5 ">
               <h3>Accesories</h3>
               <hr class="mx-auto">
               <p>Here you can check out our Accesories</p>
            </div>
            <div class="row mx-auto container-fluid">
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/accessorie1.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Outdoor Bluetooth Speaker </h5>
                   <h4 class="p-price">$499.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/accessorie2.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">2-Port Fast Charger For All Your Devices</h5>
                   <h4 class="p-price">$19.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/accessorie3.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Basics 256gb Ultra Fast Usb 3.1 Flash Drive </h5>
                   <h4 class="p-price">$15.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/accessorie4.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Amazon Echo Dot (4th Gen) With Built-In Alexa Smart Wi-Fi Speaker </h5>
                   <h4 class="p-price">$749.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
            </div>
        </section>

        <!-- Footer -->
         <footer class="mt-5 py-5">
        <div class=" row container mx-auto pt-5">
               <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                   <img class="logo" src="assets/imgs/logo.png"alt="Logo" width="120" class="d-inline-block align-text-left">
                   <p class="pt-3">We provide the best products for the most affordable prices</p>
               </div>
               <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                   <h5 class="pb-2">Featured</h5>
                   <ul class="text-uppercase">
                       <li><a href="#">Shop All</a></li>
                       <li><a href="#">Laptops</a></li>
                       <li><a href="#">watch</a></li>
                       <li><a href="#">Accessories</a></li>
                       <li><a href="#">Drones</a></li>
                       <li><a href="#">Smartphones</a></li>
                   </ul>
               </div>

           <div class="footer-one col-lg-3 col-md-6 col-sm-12">
               <h5 class="pb-2">Contact Us</h5>
               <div>
                   <h6 class="text-uppercase">Address</h6>
                   <p>1234 Street Name, City</p> 
               </div>
               <div>
                   <h6 class="text-uppercase">Phone</h6>
                   <p>123 456 7890</p>
               </div>
               <div>
                   <h6 class="text-uppercase">Email</h6>
                   <p>vitor@email. com</p>
               </div>
           </div>

           <div class="footer-one col-lg-3 col-md-6 col-sm-12">
               <h5 class="pb-2">Instagram</h5>
               <div class="row">
                   <img src="assets/imgs/featured_1.jpg" class="img-fluid w-25 h-100 m-2"/>
                   <img src="assets/imgs/featured_2.jpg" class="img-fluid w-25 h-100 m-2"/>
                   <img src="assets/imgs/featured_3.jpg" class="img-fluid w-25 h-100 m-2"/>
                   
               </div>
           </div>
       </div>
       <div class="copyright mt-5">
           <div class="row container mx-auto">
               <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                   <img src="assets/imgs/payment.jpeg"  width="300" class="d-inline-block align-text-left"/>
               </div>
               <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                   <p>eCommerce @ Vitor 2025 All Right Reserved</p>
               </div>
               <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                   <a href="#"><i class="fab fa-facebook"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
               </div>
           </diV>
       </div>
        </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>


