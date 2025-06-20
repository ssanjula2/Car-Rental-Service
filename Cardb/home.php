<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Website - Group Project</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shorcut icon"  type="x-icon" href="https://st4.depositphotos.com/18876544/27320/v/450/depositphotos_273200062-stock-illustration-rent-car-vector-icon-flat.jpg">
</head>
<body>

<!-- Header Section -->

<header class="header">
    <a href="#home" class="logo"><span>Rent</span> a Car</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#featured">Featured</a>
        <a href="all_vehicle.php" >Vehicles</a>
        <a href="#review">Reviews</a>
        <a href="#contact">Contact</a>
    </nav>

    <div id="login-btn">
        <a href="Regform.php"><button class="btn">Log out</button></a>
    </div>

</header>

<!-- Home Section -->

<section class="home" id="home">

    <h1 class="home-content">Find Your Car</h1>
    <img class="home-content" src="group.png">
    <a class="btn home-content" href="#featured">Explore Cars</a>

</section>


<!-- Icon Section -->

<section class="icons">

    <div class="icon-container">
        <img src="home-icon.png" alt="icon1">
        <div class="content">
            <h3>8+</h3>
            <p>Branches</p>
        </div>
    </div>

    <div class="icon-container">
        <img src="car-logo-1.png" alt="icon2">
        <div class="content">
            <h3>25+</h3>
            <p>Car Brands</p>
        </div>
    </div>

    <div class="icon-container">
        <img src="car-logo-2.png" alt="icon3">
        <div class="content">
            <h3>500+</h3>
            <p>Cars Rented</p>
        </div>
    </div>

    <div class="icon-container">
        <img src="customer-icon.png" alt="icon4">
        <div class="content">
            <h3>350+</h3>
            <p>Happy Customers</p>
        </div>
    </div>

</section>

<!-- Featured Section -->

<section class="featured" id="featured">

    <h1 class="heading">Popular <span>Vehicles</span></h1>

    <div class="featured-slider">

            <div class="box">
                <img src="patrol.png" alt="car1">
                <div class="content">
                    <h3>Nissan Patrol</h3>
                    <div class="price"><span>Price: </span> Rs.5000/-</div>
                    <p>
                        New
                        <span>~ 2021</span>
                        <span>~ Automatic</span>
                        <span>~ Patrol</span>
                    </p>
                    <a href="all_vehicle.php" class="btn">Check Out</a>
                </div>
            </div>

            <div class="box">
                <img src="prado.png" alt="car1">
                <div class="content">
                    <h3>Toyota Prado</h3>
                    <div class="price"><span>Price: </span> Rs.5000/-</div>
                    <p>
                        New
                        <span>~ 2021</span>
                        <span>~ Automatic</span>
                        <span>~ Patrol</span>
                    </p>
                    <a href="all_vehicle.php" class="btn">Check Out</a>
                </div>
            </div>

            <div class="box">
                <img src="premio.png" alt="car1">
                <div class="content">
                    <h3>Toyota Premio</h3>
                    <div class="price"><span>Price: </span> Rs.5000/-</div>
                    <p>
                        New
                        <span>~ 2021</span>
                        <span>~ Automatic</span>
                        <span>~ Patrol</span>
                    </p>
                    <a href="all_vehicle.php" class="btn">Check Out</a>
                </div>
            </div>

            <div class="box">
                <img src="prius.png" alt="car1">
                <div class="content">
                    <h3>Toyota Prius</h3>
                    <div class="price"><span>Price: </span> Rs.5000/-</div>
                    <p>
                        New
                        <span>~ 2021</span>
                        <span>~ Automatic</span>
                        <span>~ Patrol</span>
                    </p>
                    <a href="all_vehicle.php" class="btn">Check Out</a>
                </div>
            </div>
            
            <div class="box">
                <img src="montero.png" alt="car1">
                <div class="content">
                    <h3>Mitsubishi Montero</h3>
                    <div class="price"><span>Price: </span> Rs.5000/-</div>
                    <p>
                        New
                        <span>~ 2021</span>
                        <span>~ Automatic</span>
                        <span>~ Patrol</span>
                    </p>
                    <a href="all_vehicle.php" class="btn">Check Out</a>
                </div>
            </div>

            <div class="box">
                <img src="v8.png" alt="car1">
                <div class="content">
                    <h3>Toyota V8</h3>
                    <div class="price"><span>Price: </span> Rs.5000/-</div>
                    <p>
                        New
                        <span>~ 2021</span>
                        <span>~ Automatic</span>
                        <span>~ Patrol</span>
                    </p>
                    <a href="all_vehicle.php" class="btn">Check Out</a>
                </div>
            </div>

            <div class="arrow">

                <button class="left" onclick="left()"> < </button>
                <button class="right" onclick="right()"> > </button>
    
            </div>

    </div>
        
</section>
<script src="script.js"></script>

<!-- Review Section -->

<section class="review" id="review">

    <h1 class="heading">Client's <span>Comments</span></h1>

<div class="box-container">
    <div class="box">
        <h3>Emily Johnson</h3>
        <p>I had a fantastic experience with RentACar. The booking process was quick and easy, and the staff at the pickup location were incredibly friendly and professional. The car was spotless and in perfect condition. Returning it was a breeze, and the whole process was hassle-free. Highly recommend to anyone in need of a reliable rental car!</p>
    </div>

    <div class="box">
        <h3>Marcus Lee</h3>
        <p>Overall, I had a good experience with RentACar. The car was clean and performed well during my trip. My only minor issue was that the pickup took a bit longer than expected, but once I was on my way, everything else went smoothly. I’d definitely use them again.</p>
    </div>

    <div class="box">
        <h3>Sarah Patel</h3>
        <p>RentACar exceeded my expectations. The customer service was top-notch, and they offered a great selection of vehicles. I appreciated the clear instructions and the easy drop-off process. My only suggestion is to have more options for GPS rentals. Other than that, everything was perfect!</p>
    </div>

    <div class="box">
        <h3>Emily K.</h3>
        <p>Fantastic service from RentACar! From the moment I booked online to the return of the vehicle, everything was smooth. The staff was professional and helpful, and the car was in excellent condition. I particularly appreciated the detailed instructions provided for both pickup and return. Plus, their customer service is available 24/7. Definitely my go-to choice for car rentals from now on!</p>
    </div>

    <div class="box">
        <h3>Loren Klem</h3>
        <p>I had an outstanding experience with RentACar! The booking process was seamless, and their website was very user-friendly. When I arrived to pick up my car, the staff was friendly and efficient. The vehicle I received was in pristine condition and was exactly as described. Returning the car was just as easy. </p>
    </div>


<!-- Duplicate Reviews-->

<div class="box">
    <h3>Olivia Gorden</h3>
    <p>RentACar exceeded my expectations! Their customer service was top-notch, and they were very accommodating with my last-minute reservation. The car was almost new and ran perfectly throughout my trip. I especially appreciated the transparent pricing with no hidden fees. Pickup and drop-off were quick and convenient. I’ll definitely use RentACar again for my next trip. </p>
</div>  


    
    <div class="arrow">

        <button class="leftrev" onclick="leftrev()"> < </button>
        <button class="rightrev" onclick="rightrev()"> > </button>

    </div>

</div>

</section>

<script src="ScriptReview.js"></script>

<!-- Contact Section -->

<section class="contact" id="contact">

    <h1 class="heading">Contact <span>Us</span></h1>

    <div class="box-container">

    <img src="footer-logo.png" alt="car">
    <form action="MAILTO:thisalchamodya123@gmail.com" method="post"
enctype="text/plain">
        <h3>Get in Touch</h3>
        <input type="text" placeholder="Name" class="box">
        <input type="email" placeholder="Email" class="box">
        <input type="number" placeholder="Phone Number" class="box">
        <textarea placeholder="Message" class="box" cols="30" rows="10"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>

    </div>
</section>

<!-- Footer Section -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h4>Our Branches</h4>
            <div class="links">
                <img src="location-logo.png" alt="location">
                <a href="#">Kiribathgoda</a>
            </div>
            <div class="links">
                <img src="location-logo.png" alt="location">
                <a href="#">Kadawatha</a>
            </div>
            <div class="links">
                <img src="location-logo.png" alt="location">
                <a href="#">Kurunegala</a>
            </div>
            <div class="links">
                <img src="location-logo.png" alt="location">
                <a href="#">Kandy</a>
            </div>
        </div>

        <div class="box">
            <h4>Quick Links</h4>
            <div class="links">
                <img src="arrow.png" alt="arrow">
                <a href="#home">Home</a>
            </div>
            <div class="links">
                <img src="arrow.png" alt="arrow">
                <a href="#featured">Featured</a>
            </div>
            <div class="links">
                <img src="arrow.png" alt="arrow">
                <a href="all_vehicle.php">Vehicles</a>
            </div>
            <div class="links">
                <img src="arrow.png" alt="arrow">
                <a href="#contact">Contact</a>
            </div>
        </div>

        <div class="box">
            <h4>Contact Info</h4>
            <div class="links">
                <img src="telephone.png" alt="tp">
                <a href="#">+94 123 456 7890</a>
            </div>
            <div class="links">
                <img src="telephone.png" alt="tp">
                <a href="#">+94 098 765 4321</a>
            </div>
            <div class="links">
                <img src="mail.png" alt="mail">
                <a href="#">rentacar@gmail.com</a>
            </div>
            <div class="links">
                <img src="location-logo.png" alt="location">
                <a href="#">Kelaniya, Sri Lanka</a>
            </div>
        </div>

        <div class="box">
            <h4>Contact Info</h4>
            <div class="links">
                <img src="fb.png" alt="facebook">
                <a href="#">Facebook</a>
            </div>
            <div class="links">
                <img src="insta.png" alt="instagram">
                <a href="#">Instagram</a>
            </div>
            <div class="links">
                <img src="twitter-logo.png" alt="twitter">
                <a href="#">Twitter</a>
            </div>
            <div class="links">
                <img src="linkedin-logo.png" alt="linkein">
                <a href="#">Linkedin</a>
            </div>
        </div>

    </div>

    <div class="copyright">
        <h2>© Copyright 2024 | Group 03 - Assignment 02 | All Right Reserved</h2>
    </div>

</section>

    
</body>
</html>