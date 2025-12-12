<?php

include('server/conection.php');
if (isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];
        $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
        $stmt->bind_param("i",$product_id);
        $stmt->execute();

        $product = $stmt->get_result();

}else{
    header('location: index.php');

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Single_Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

        <!--Navbar -->
    <nav class="navbar navbar-expand-lg  bg-primary navbar-light bg-white  py-3  fixed-top ">
        <div class="container">
        <img src="assets/imgs/logo.png" alt="Logo" width="120" class="d-inline-block align-text-left">
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
                        <a href="account.html"><i class="fas fa-user"></i> </a>       
                    </li>
                </ul>
            </div>
    </div>
    </nav>
        



         <!--Single Porduct -->
        <section class="container single_product my-5 pt-5">
            <div class="row mt-5">
                <?php while($row = $product->fetch_assoc()) { ?>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img class="img-fluid w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>"  id="mainImg" />
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="assets/imgs/<?php echo $row['product_image']; ?>" width="100%" class="small-img"/>
                        </div>
                        <div class="small-img-col">
                            <img src="assets/imgs/<?php echo $row['product_image2']; ?>" width="100%" class="small-img"/>
                        </div>
                        <div class="small-img-col">
                            <img src="assets/imgs/<?php echo $row['product_image3']; ?>" width="100%" class="small-img"/>
                        </div>
                        <div class="small-img-col">
                            <img src="assets/imgs/<?php echo $row['product_image4']; ?>" width="100%" class="small-img"/>
                        </div>
                    </div>
                </div>

                

                <div class="col-lg-6 col-md-12 col-12">
                    <h6>Sagaform</h6>
                    <h3 class="py-4"> <?php echo $row['product_name']; ?></h3>
                    <h2>$<?php echo $row['product_price']; ?></h2>
                    <input type="Number" value="1" size=""/>
                    <button class="buy-btn">Add to Cart</button>
                    <h4 class="mt-5 mb-5">Product details</h4>
                    <span>
                    <?php echo $row['product_description']; ?>
                    </span>

                </div>
                



                <?php } ?>
            </div>           
        </section>

        <!--Releated products -->
        <section id="releated-products" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5 ">
               <h3>Related Products</h3>
               <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/featured_1.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Smart Phone 5g, 8gb Storage </h5>
                   <h4 class="p-price">$20.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/featured_2.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Air Pro 4 Buds Tws Earbuds With Anc </h5>
                   <h4 class="p-price">$49.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/featured_3.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Apple MacBook Pro 15 Inch </h5>
                   <h4 class="p-price">$899.00</h4>
                   <button class="buy-btn">Buy Now</button>
               </div>
               <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                   <img class="img-fluid mb-3" src="assets/imgs/featured_4.jpg"/>
                   <div class="star">
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                       <i class="fas fa-star" style="color:yellow"></i>
                   </div>
                   <h5 class="p-name">Digital SLR Camera (Black) With EF S18-55 </h5>
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
                       <p>info@email. com</p>
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
                       <p>eCommerce @ 2025 All Right Reserved</p>
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

        <script>
            var mainImg = document.getElementById("mainImg");
            var smallImg = document.getElementsByClassName("small-img");

            for (let x=0; x<4; x++){
                smallImg[x].onclick = function(){
                    mainImg.src = smallImg[x].src;
                }
            }


        </script>
    </body>
</html>